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
            <form method="POST"
                action="' . route('foundation-image.store') . '"
                accept-charset="UTF-8"
                enctype="multipart/form-data"
                id="foundationImageStore">
                ' . csrf_field() . '
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foundation_category" class="form-label">
                                Select Foundation Category
                            </label>
                            <select class="form-control"
                                name="foundation_category"
                                id="foundation_category">
                                <option value="">Select Foundation Category</option>';
                                foreach ($foundation_categories as $category) {
                                    $selected = ($category->id == $foundation_cate_id)
                                        ? 'selected'
                                        : '';
                                    $form .= '
                                    <option value="' . $category->id . '" ' . $selected . '>
                                        ' . e($category->name) . '
                                    </option>';
                                }

                                $form .= '
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="media_type" class="control-label">
                                Media Type
                            </label>
                            <select class="form-control"
                                name="media_type"
                                id="media_type">
                                <option value="">Select Media Type</option>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="media_file" class="control-label">
                                Media File
                            </label>
                            <input
                                type="file"
                                name="media_file[]"
                                multiple
                                class="form-control"
                                id="media_file"
                            >
                            <small class="text-muted" id="media_help">
                                Select media type first.
                            </small>
                        </div>
                    </div>
                </div>

                <div class="modal-footer pb-0">
                    <button type="button"
                        class="btn btn-info"
                        data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit"
                        class="btn btn-primary">
                        Save changes
                    </button>
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
            'media_type' => 'required|in:image,video',
            'media_file' => 'required|array',
            'media_file.*' => 'required|file',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        if ($request->media_type === 'image') {
            $validator = Validator::make($request->all(), [
                'media_file.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);
        } elseif ($request->media_type === 'video') {
            $validator = Validator::make($request->all(), [
                'media_file.*' => 'file|mimes:mp4,webm,ogg|max:102400',
            ]);
        }
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        DB::beginTransaction();
        try {
            $foundation_category_id = $request->foundation_category;
            $foundation_category = FoundationCategory::findOrFail(
                $foundation_category_id
            );
            $sanitized_title = preg_replace(
                '/[^A-Za-z0-9-]+/',
                '-',
                strtolower(trim($foundation_category->name))
            );
            foreach ($request->file('media_file') as $file) {
                $uniqueTimestamp = uniqid() . '-' .
                    round(microtime(true) * 1000);               
                if ($request->media_type === 'image') {
                    $uploadPath = public_path('foundation-img');
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath, 0777, true);
                    }
                    $image_file_name =
                        'dr-shilpi-reddy-hyd-' .
                        $sanitized_title . '-' .
                        $uniqueTimestamp .
                        '.webp';
                    $webpPath = $uploadPath . '/' . $image_file_name;
                    $img = Image::make($file)->resize(
                        800,
                        600,
                        function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        }
                    );
                    $img->encode('webp', 80)->save($webpPath);
                    FoundationImage::create([
                        'foundation_categories_id' => $foundation_category_id,
                        'media_type' => 'image',
                        'image_path' => $image_file_name,
                        'sort_order' => 0,
                    ]);
                }
                /*Video file */
                if ($request->media_type === 'video') {
                    $uploadPath = public_path('foundation-video');
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath, 0777, true);
                    }
                    $video_file_name =
                        'dr-shilpi-reddy-hyd-' .
                        $sanitized_title . '-' .
                        $uniqueTimestamp . '.' .
                        $file->getClientOriginalExtension();
                    $file->move(
                        $uploadPath,
                        $video_file_name
                    );
                    FoundationImage::create([
                        'foundation_categories_id' => $foundation_category_id,
                        'media_type' => 'video',
                        'image_path' => $video_file_name,
                        'sort_order' => 0,
                    ]);
                }
            }

            DB::commit();
            $data['foundation_category_list'] =
            FoundationCategory::withCount('foundationImages')
                ->orderBy('id', 'DESC')
                ->get();
            return response()->json([
                'status' => 'success',
                'message' => ucfirst($request->media_type) .
                ' uploaded successfully',
                'foundationCategoryContent' => view(
                    'backend.manage-foundation-category.partials.ajax-foundation-category-list',
                    compact('data')
                )->render(),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' .
                    $e->getMessage(),
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
            $foundationMedia = FoundationImage::findOrFail($id);
            if ($foundationMedia->media_type === 'image') {
                $filePath = public_path(
                    'foundation-img/' . $foundationMedia->image_path
                );
            } elseif ($foundationMedia->media_type === 'video') {
                $filePath = public_path(
                    'foundation-video/' . $foundationMedia->image_path
                );
            } else {
                $filePath = null;
            }
            if ($filePath && file_exists($filePath) && is_file($filePath)) {
                unlink($filePath);
            }
            $foundationMedia->delete();
            DB::commit();
            return back()->with('success', 'Foundation Media deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with(
                'error',
                'Something went wrong! ' . $e->getMessage()
            );
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
