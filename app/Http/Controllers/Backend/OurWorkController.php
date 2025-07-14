<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\OurWork;
use App\Models\OurWorkImage;
use App\Models\FoundationCategory;
use App\Models\FoundationImage;

class OurWorkController extends Controller
{

    public function index()
    {
        //DB::enableQueryLog();
        $data['our_work_list'] = OurWork::orderBy('id', 'DESC')->get();
        // $data['our_work_list'] = OurWork::join('our_works_image', 'our_works.id', '=', 'our_works_image.our_work_id')

        // ->get(['our_works.heading_name', 'our_works.slug', 'our_works.our_work_content', 'our_works_image.id', 'our_works_image.our_work_image']); 
        //dd($data);
        return view('backend.our-work.index', compact('data'));
    }

    public function showOurWorkForm()
    {
        return view('backend.our-work.add');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'our_work_heading_name' => 'required',
            'work_content' => 'required',
            'work_multiple_image' => 'required',

        ]);
        $input['heading_name'] = $request->input('our_work_heading_name');
        $input['our_work_content'] = $request->input('work_content');
        $input['user_id'] = $user_id;

        $our_work_add = OurWork::create($input);
        if ($our_work_add) {
            if ($request->hasFile('work_multiple_image')) {
                $files = $request->file('work_multiple_image');
                foreach ($files as $file) {
                    $image = $file;
                    $sanitized_title = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower(trim($request->input('our_work_heading_name'))));
                    $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                    $image_file_name = 'dr-shilpi-reddy-hyd-' . $sanitized_title . '-' . $uniqueTimestamp . '.webp';
                    $thumbPath = public_path('our-work/thumb');
                    $mainImgPath = public_path('our-work/main-img');
                    $img = Image::make($image->getRealPath())
                        ->fit(800, 600)
                        ->encode('webp', 90)
                        ->save($thumbPath . '/' . $image_file_name);

                    $img = Image::make($image->getRealPath())
                        ->encode('webp', 90)
                        ->save($mainImgPath . '/' . $image_file_name);

                    $work_img_input['our_work_image'] = $image_file_name;
                    $work_img_input['our_work_id'] = $our_work_add->id;
                    $image_upload = OurWorkImage::create($work_img_input);
                }
                if ($image_upload) {
                    return redirect('manage-our-work')->with('success', 'Our work data save successfully');
                } else {
                    return redirect()->back()->with('error', 'Somthings went wrong please try again !.');
                }
            }
        }
        return redirect()->back()->with('error', 'Somthings went wrong please try again !');
    }

    public function edit($id)
    {
        $our_work = OurWork::find($id);
        return view('backend.our-work.edit', compact('our_work'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'our_work_heading_name' => 'required',
            'work_content' => 'required',

        ]);

        $our_work_row = OurWork::find($request->our_work_hidden_id);
        $input['heading_name'] = $request->input('our_work_heading_name');
        $input['our_work_content'] = $request->input('work_content');
        $our_work_update = $our_work_row->update($input);

        if ($request->hasFile('work_multiple_image')) {
            $files = is_array($request->file('work_multiple_image'))
                ? $request->file('work_multiple_image')
                : [$request->file('work_multiple_image')];

            $thumbPath = public_path('our-work/thumb');
            $mainImgPath = public_path('our-work/main-img');
            $workImages = [];
            foreach ($files as $file) {
                $sanitizedTitle = Str::slug(trim($request->input('our_work_heading_name')));
                $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                $imageFileName = "dr-shilpi-reddy-hyd-{$sanitizedTitle}-{$uniqueTimestamp}.webp";
                $img = Image::make($file->getRealPath());
                $img->fit(800, 600)->encode('webp', 90)->save("{$thumbPath}/{$imageFileName}");
                $img->encode('webp', 90)->save("{$mainImgPath}/{$imageFileName}");
                $workImages[] = [
                    'our_work_image' => $imageFileName,
                    'our_work_id' => $request->our_work_hidden_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            OurWorkImage::insert($workImages);
        }
        if ($our_work_update) {
            return redirect('manage-our-work')->with('success', 'Our work data updated successfully');
        } else {
            return redirect()->back()->with('error', 'Somthings went wrong please try again !.');
        }
    }

    public function delete($id)
    {
        $our_work_row = OurWork::find($id);
        $our_work_image_row = OurWorkImage::where('our_work_id', $our_work_row->id)->get();;
        if (count($our_work_image_row) > 0) {
            return redirect()->back()->with('error', 'Please delete first (our work multiple images) !.');
        } else {
            $our_work_row->delete();
            return redirect('manage-our-work')->with('success', 'Our work deleted successfully !');
        }
    }

    public function deleteMultipleImage($multiple_image_id, $our_work_id)
    {
        $our_work_image = OurWorkImage::find($multiple_image_id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/our-work/thumb/');
        $destination_path_main_img_ = public_path('/our-work/main-img/');
        $file_old_thumb = $destination_path_thumb . $our_work_image->our_work_image;
        $file_old_main = $destination_path_main_img_ . $our_work_image->our_work_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $our_work_image->delete();
        return redirect('manage-our-work/edit/' . $our_work_id . '')->with('success', 'Our work images deleted successfully !');
    }

    public function workImageRotate($image_id, $degree)
    {
        try {
            $imageRecord = OurWorkImage::findOrFail($image_id);
            $mainImagePath = public_path('our-work/main-img/' . $imageRecord->our_work_image);
            $thumbImagePath = public_path('our-work/thumb/' . $imageRecord->our_work_image); 
            if (File::exists($mainImagePath)) {
                $img = Image::make($mainImagePath)->rotate(-$degree);
                $img->save($mainImagePath);
            }
            if (File::exists($thumbImagePath)) {
                $thumb = Image::make($thumbImagePath)->rotate(-$degree);
                $thumb->save($thumbImagePath);
            }
            Log::info("Image rotated successfully.", ['image_id' => $image_id, 'degree' => $degree]);
            return back()->with('success', "Images rotated $degree degrees.");
        } catch (\Exception $e) {
            Log::error('Image Rotation Error: ' . $e->getMessage(), [
                'image_id' => $image_id,
                'degree' => $degree
            ]);

            return back()->with('error', 'An unexpected error occurred while rotating the images.');
        }
    }

    public function mappedWorkToFoundation($workId){
        $foundation_categories = FoundationCategory::orderBy('id','DESC')->get();
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('mapped-work-to-foundation.submit') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="mappedWorkToFoundationForm">
                ' . csrf_field() . '
                <input type="hidden" name="work_id" value="'.$workId.'"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foundation_category" class="control-label">Select Foundation Category Name *</label>
                            <select name="foundation_category" class="form-control" id="foundation_category">
                                <option>Select Foundation Category</option>';
                                foreach($foundation_categories as $foundation_category){
                                    $form .='
                                    <option value="'.$foundation_category->id.'">
                                        '.$foundation_category->name.'
                                    </option>';
                                }
                            $form .='
                            </select>
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <h4 class="text-center text-danger">Or</h4>
                        <h5 class="text-center text-danger">
                            Create new foundation category than check this checkbox only.
                        </h5>
                        <div class="form-check text-center">
                            <input class="form-check-input" type="checkbox" value="1" name="foundation_check" id="foundation_check">
                            <label class="form-check-label" for="foundation_check">Create new foundation category</label>
                        </div>                            
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        ';
        return response()->json([
            'message' => 'Foundation Category Form created successfully',
            'form' => $form,
        ]);
    }

    public function mappedWorkToFoundationSubmit(Request $request)
    {
        $rules = [
            'work_id' => 'required|exists:our_works,id',
            'foundation_check' => 'sometimes|boolean',
        ];
        if ($request->has('foundation_check') && $request->foundation_check == 1) {
            $rules['foundation_category'] = 'nullable|exists:foundation_categories,id';
        } else {
            $rules['foundation_category'] = 'required|exists:foundation_categories,id';
        }
        $validator = Validator::make($request->all(), $rules, [
            'foundation_category.required' => 'Please select a foundation category',
            'foundation_category.exists' => 'The selected foundation category is invalid'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        DB::beginTransaction();
        try {
            $work_id = $request->work_id;
            $work = OurWork::with('workImages')->find($work_id);
            if (!$work) {
                DB::rollBack();
                return response()->json([
                    'status' => 'error',
                    'message' => 'Work not found'
                ], 404);
            }
            $uploadPath = public_path('foundation-img');                    
            if (!file_exists($uploadPath)) {
                if (!mkdir($uploadPath, 0777, true)) {
                    DB::rollBack();
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Failed to create foundation image directory'
                    ], 500);
                }
            }
            if ($request->has('foundation_check') && $request->foundation_check == 1) {
                /* Create new foundation category */
                $foundationCategory = FoundationCategory::create([
                    'name' => $work->heading_name,
                    'status' => 1,
                    'work_id' =>$work_id
                ]);
                if (!empty($work->workImages) && $work->workImages->isNotEmpty()) {                    
                    foreach ($work->workImages as $imageFile) {
                        $sourcePath = public_path('our-work/main-img/' . $imageFile->our_work_image);
                        if (!file_exists($sourcePath)) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => "Source image not found: {$imageFile->our_work_image}"
                            ], 404);
                        }
                        $sanitized_title = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower(trim($work->heading_name)));
                        $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                        $image_file_name = 'dr-shilpi-reddy-hyd-' . $sanitized_title . '-' . $uniqueTimestamp . '.webp';
                        $destinationPath = $uploadPath . '/' . $image_file_name;
                        /* Only copy the file */
                        if (!copy($sourcePath, $destinationPath)) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => "Failed to copy image: {$imageFile->our_work_image}"
                            ], 500);
                        }
                        $foundationImage = FoundationImage::create([
                            'foundation_categories_id' => $foundationCategory->id,
                            'image_path' => $image_file_name,
                            'sort_order' => 0,
                        ]);

                        if (!$foundationImage) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => 'Failed to create foundation image record'
                            ], 500);
                        }
                    }
                }
            } else {
                /* Map to existing foundation category */
                $foundationCategoryId = $request->foundation_category;
                if (!empty($work->workImages) && $work->workImages->isNotEmpty()) {
                    foreach ($work->workImages as $imageFile) {
                        $sourcePath = public_path('our-work/main-img/' . $imageFile->our_work_image);
                        if (!file_exists($sourcePath)) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => "Source image not found: {$imageFile->our_work_image}"
                            ], 404);
                        }
                        $sanitized_title = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower(trim($work->heading_name)));
                        $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                        $image_file_name = 'dr-shilpi-reddy-hyd-' . $sanitized_title . '-' . $uniqueTimestamp . '.webp';
                        $destinationPath = $uploadPath . '/' . $image_file_name;
                        /* Only copy the file */
                        if (!copy($sourcePath, $destinationPath)) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => "Failed to copy image: {$imageFile->our_work_image}"
                            ], 500);
                        }
                        $foundationImage = FoundationImage::create([
                            'foundation_categories_id' => $foundationCategoryId,
                            'image_path' => $image_file_name,
                            'sort_order' => 0,
                        ]);
                        if (!$foundationImage) {
                            DB::rollBack();
                            return response()->json([
                                'status' => 'error',
                                'message' => 'Failed to create foundation image record'
                            ], 500);
                        }
                    }
                }
            }            
            /* Update work status */
            $work->mapped_status_to_foundation = 1;
            if (!$work->save()) {
                DB::rollBack();
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to update work status'
                ], 500);
            }
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Work successfully mapped to foundation category'
            ], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred ' . $e->getMessage()
            ], 500);
        }
    }
}
