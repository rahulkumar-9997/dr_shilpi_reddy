<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Cache;
use Exception;

class ServiceCategoryController extends Controller
{
    public function index()
    {        
        $services = ServicesCategory::get();
        return view('backend.manage-services.category.index', compact('services'));
    }

    public function create(Request $request)
    {
        $url = $request->input('url');
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('service-categories.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="servicesCategoryStore">
                ' . csrf_field() . '
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="service_category_name" class="control-label">Service Category Name *</label>
                            <input type="text" name="service_category_name" class="form-control" id="service_category_name">
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
            'message' => 'Form created successfully',
            'form' => $form,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_category_name' => 'required|string|max:255|unique:services_categories,title',
        ]);
        DB::beginTransaction();
        try {
            ServicesCategory::create([
                'title' => $request->service_category_name,
                'slug'  => Str::slug($request->service_category_name),
            ]);
            $services = ServicesCategory::latest()->get();
            $serviceCategoryContent = view(
                'backend.manage-services.category.partials.category-list',
                compact('services')
            )->render();
            Cache::forget('website_services');
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Service category added successfully.',
                'serviceCategoryContent' => $serviceCategoryContent,
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $serviceCategory = ServicesCategory::findOrFail($id);
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('service-categories.update', $serviceCategory->id) . '" id="servicesCategoryUpdate">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="service_category_name" class="control-label">
                                Service Category Name *
                            </label>
                            <input type="text"
                                name="service_category_name"
                                class="form-control"
                                id="service_category_name"
                                value="' . e($serviceCategory->title) . '">
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-info" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>';

        return response()->json([
            'message' => 'Form loaded successfully',
            'form' => $form,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_category_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('services_categories', 'title')->ignore($id),
            ],
        ]);
        DB::beginTransaction();
        try {
            $serviceCategory = ServicesCategory::findOrFail($id);
            $serviceCategory->update([
                'title' => $request->service_category_name,
            ]);
            $services = ServicesCategory::latest()->get();
            $serviceCategoryContent = view(
                'backend.manage-services.category.partials.category-list',
                compact('services')
            )->render();
            Cache::forget('website_services');
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Service category updated successfully.',
                'serviceCategoryContent' => $serviceCategoryContent,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $serviceCategory = ServicesCategory::findOrFail($id);
            $serviceCategory->delete();
            Cache::forget('services');
            DB::commit();
            return redirect()->route('service-categories.index')->with('success', 'Service category deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
