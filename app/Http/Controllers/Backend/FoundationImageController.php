<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\FoundationCategory;
use App\Models\FoundationImage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Log;

class FoundationImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data['foundation_category_list'] = FoundationCategory::orderBy('id','DESC')->get(); 
        return view('backend.manage-foundation-image.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $foundation_categories = FoundationCategory::orderBy('id', 'DESC')->get();
        $foundation_cate_id = $request->input('foundation_cate_id');
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('foundation-image.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="foundationImageStore">
                ' . csrf_field() . '
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foundation_category" class="form-label">Select Foundation Category</label>
                            <select class="form-control" name="foundation_category" id="foundation_category">
                                <option value="">Select Foundation Category</option>';
								foreach ($foundation_categories as $category) {
									$selected = ($category->id == $foundation_cate_id) ? 'selected' : '';
									$form .= '<option value="' . $category->id . '" ' . $selected . '>' . $category->name . '</option>';
								}
								$form .= '
                            </select>
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foundation_image_file" class="control-label">Fondation Image Multiple (Select Multiple Images (Limit 20 images))*</label>
                            <input type="file" name="foundation_image_file[]" multiple class="form-control" id="foundation_image_file">
                        </div>	
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>';

        return response()->json([
            'message' => 'Foundation Category Form created successfully',
            'form' => $form,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foundation_category' => 'required|exists:foundation_categories,id',
            'foundation_image_file' => 'required|array',
            'foundation_image_file.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:4096',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        DB::beginTransaction();

        try {
            $foundation_category_id = $request->foundation_category;
            $foundation_category = FoundationCategory::findOrFail($foundation_category_id);
            if ($request->hasFile('foundation_image_file')) {
                $uploadPath = public_path('foundation-img');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                foreach ($request->file('foundation_image_file') as $file) {
                    $sanitized_title = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower(trim($foundation_category->name)));
                    $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                    $image_file_name = 'dr-shilpi-reddy-hyd-' . $sanitized_title . '-' . $uniqueTimestamp . '.webp';
                    $webpPath = $uploadPath . '/' . $image_file_name;
                    $img = Image::make($file)->resize(800, 600, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    $img->encode('webp', 80)->save($webpPath);
                    FoundationImage::create([
                        'foundation_categories_id' => $foundation_category_id,
                        'image_path' => $image_file_name,
                        'sort_order' => 0,
                    ]);
                }
            }
            DB::commit();
            $data['foundation_category_list'] = FoundationCategory::withCount('foundationImages')->orderBy('id', 'DESC')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Foundation Images uploaded successfully',
                'foundationCategoryContent' => view('backend.manage-foundation-category.partials.ajax-foundation-category-list', compact('data'))->render(),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foundation_category_id = $id;
        $foundation_category = FoundationCategory::with(['foundationImages' => function ($query) {
            $query->orderBy('sort_order')->orderByDesc('id');
        }])->findOrFail($foundation_category_id);
        return view('backend.manage-foundation-image.show', compact('foundation_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $foundationImage = FoundationImage::findOrFail($id);
            $imagePath = public_path('foundation-img/' . $foundationImage->image_path);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
            $foundationImage->delete();
            DB::commit();
            return back()->with('success', 'Foundation Image deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

    public function sort(Request $request)
    {
        $sortedIDs = $request->input('order');
        foreach ($sortedIDs as $index => $id) {
            FoundationImage::where('id', $id)->update(['sort_order' => $index + 1]);
        }

        return response()->json(['success' => true, 'message' => 'Sort order updated successfully!']);
    }

    public function ImageRotate(Request $request, $id)
    {
        try {
            $image = FoundationImage::findOrFail($id);
            $path = public_path('foundation-img/' . $image->image_path);
            $degree = $request->input('degree', 90);
            if (File::exists($path)) {
                $img = Image::make($path)->rotate(-$degree);
                $img->save($path);
            }

            return back()->with('success', 'Image rotated successfully!');
        } catch (\Exception $e) {
            Log::error('Rotate Error: ' . $e->getMessage());
            return back()->with('error', 'Failed to rotate image.');
        }
    }
}
