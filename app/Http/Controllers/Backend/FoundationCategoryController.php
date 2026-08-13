<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoundationCategory;
use App\Models\FoundationImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FoundationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data['foundation_category_list'] = FoundationCategory::orderBy('id','DESC')->get(); 
        $data['foundation_category_list'] = FoundationCategory::withCount('foundationImages')->orderBy('id','DESC')->get();
        return view('backend.manage-foundation-category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $url = $request->input('url');
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('foundation-category.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="foundationCategoryStore">
                ' . csrf_field() . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foundation_category_name" class="control-label">Foundation Category Name *</label>
                            <input type="text" name="foundation_category_name" class="form-control" id="foundation_category_name">
                        </div>	
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meta_title" class="control-label">
                                Meta Title
                            </label>
                            <input type="text"
                                name="meta_title"
                                class="form-control"
                                id="meta_title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description" class="control-label">
                                Meta Description
                            </label>
                            <textarea
                                name="meta_description"
                                class="form-control"
                                id="meta_description"
                                rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description" class="control-label">
                                Description
                            </label>
                            <textarea
                                name="description"
                                class="form-control ckeditor4"
                                id="description">
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        ';
        return response()->json([
            'message' => 'Foundation Category Form created successfully',
            'form' => $form,
        ]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foundation_category_name' => 'required|string|max:255|unique:foundation_categories,name',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        DB::beginTransaction();
        try {
            $name = $request->foundation_category_name;
            $slug = Str::slug($name);
            $originalSlug = $slug;
            $count = 1;
            while (FoundationCategory::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $foundationCategory = FoundationCategory::create([
                'name' => $name,
                'slug' => $slug,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'description' => $request->description,
                'status' => 1,
            ]);

            DB::commit();
            $data['foundation_category_list'] = FoundationCategory::withCount('foundationImages')->orderBy('id','DESC')->get(); 
            return response()->json([
                'status' => 'success',
                'message' => 'Foundation category added successfully!',
                'foundationCategoryContent' => view('backend.manage-foundation-category.partials.ajax-foundation-category-list', compact('data'))->render(),
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!'], 500);
        }
    }

    
    public function edit(Request $request, $id)
    {
        $foundationCategory = FoundationCategory::findOrFail($id);
        $url = $request->input('url');
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('foundation-category.update',  $id) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="foundationCategoryUpdate">
                ' . csrf_field() . '
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="foundation_category_name" class="control-label">Foundation Category Name *</label>
                            <input type="text" name="foundation_category_name" class="form-control" id="foundation_category_name" value="'.$foundationCategory->name.'">
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_title" class="control-label">
                                Meta Title
                            </label>
                            <input type="text"
                                name="meta_title"
                                class="form-control"
                                id="meta_title"
                                value="' . e($foundationCategory->meta_title) . '">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description" class="control-label">
                                Meta Description
                            </label>
                            <textarea
                                name="meta_description"
                                class="form-control"
                                id="meta_description"
                                rows="2">' . e($foundationCategory->meta_description) . '</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description" class="control-label">
                                Description
                            </label>
                            <textarea
                                name="description"
                                class="form-control ckeditor4"
                                id="description"
                                rows="5">' . e($foundationCategory->description) . '</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        ';
        return response()->json([
            'message' => 'Foundation Category Form created successfully',
            'form' => $form,
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foundation_category_name' => 'required|string|max:255|unique:foundation_categories,name,' . $id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        DB::beginTransaction();
        try {
            $name = $request->foundation_category_name;
            $slug = Str::slug($name);
            $originalSlug = $slug;
            $count = 1;
            while (FoundationCategory::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $foundationCategory = FoundationCategory::findOrFail($id);
                $foundationCategory->update([
                'name' => $request->foundation_category_name,
                'slug' =>$slug,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'description' => $request->description,
            ]);
    
            DB::commit();
            $data['foundation_category_list'] = FoundationCategory::withCount('foundationImages')->orderBy('id','DESC')->get(); 
            return response()->json([
                'status' => 'success',
                'message' => 'Foundation category updated successfully!',
                'foundationCategoryContent' => view('backend.manage-foundation-category.partials.ajax-foundation-category-list', compact('data'))->render(),
            ]);
    
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!'], 500);
        }
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
            $foundationCategory = FoundationCategory::findOrFail($id);
            $foundationImages = FoundationImage::where('foundation_categories_id', $id)->get();
            foreach ($foundationImages as $image) {
                $imagePath = public_path('foundation-img/' . $image->image_path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
            $foundationCategory->delete();
            DB::commit();
            return redirect('foundation-category')->with('success', 'Foundation category and related images deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error deleting foundation category: ', [
                'id' => $id,
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'Something went wrong, please try again!');
        }

    }
}
