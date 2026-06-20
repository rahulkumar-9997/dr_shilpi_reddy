<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServicesCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
class ServiceController extends Controller
{
    public function index()
    {        
        $services = Service::with('category')->latest()->paginate(20);
        return view('backend.manage-services.services.index', compact('services'));
    }

    public function create()
    {        
        $serviceCategories = ServicesCategory::get();
        return view('backend.manage-services.services.create', compact('serviceCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'services_category_id' => 'required|exists:services_categories,id',
            'title'                => 'required|max:255|unique:services,title',
            'subtitle'             => 'nullable|max:255',
            'short_content'        => 'nullable',
            'content'              => 'nullable',
            'main_image'           => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
            //'icon_image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'details_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            //'breadcrumb_image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);
        DB::beginTransaction();
        try {
            $input = [];
            $input['services_category_id'] = $request->services_category_id;
            $input['title'] = $request->title;
            $input['subtitle'] = $request->subtitle;
            $input['slug'] = Str::slug($request->title);
            $input['short_content'] = $request->short_content;
            $input['content'] = $request->content;
            $imagePath = public_path('upload/services');
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }
            $titleSlug = Str::slug($request->title, '-');
            if ($request->hasFile('main_image')) {
                $imageName = $titleSlug . '-main-' . uniqid() . '.webp';
                Image::make($request->file('main_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $imageName);
                $input['main_image'] = $imageName;
            }
            if ($request->hasFile('icon_image')) {
                $imageName = $titleSlug . '-icon-' . uniqid() . '.webp';
                Image::make($request->file('icon_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $imageName);
                $input['icon_image'] = $imageName;
            }

            if ($request->hasFile('details_image')) {
                $imageName = $titleSlug . '-details-' . uniqid() . '.webp';
                Image::make($request->file('details_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $imageName);
                $input['details_image'] = $imageName;
            }

            if ($request->hasFile('breadcrumb_image')) {
                $imageName = $titleSlug . '-breadcrumb-' . uniqid() . '.webp';
                Image::make($request->file('breadcrumb_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $imageName);
                $input['breadcrumb_image'] = $imageName;
            }

            Service::create($input);
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Service added successfully.',
                'redirect_url' => route('manage-services.index')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $serviceCategories = ServicesCategory::all();
        return view('backend.manage-services.services.create',
            compact('service', 'serviceCategories')
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'services_category_id' => 'required|exists:services_categories,id',
            'title' => 'required|max:255|unique:services,title,' . $id,
            'subtitle' => 'nullable|max:255',
            'short_content' => 'nullable',
            'content' => 'nullable',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            //'icon_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'details_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            //'breadcrumb_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);
        DB::beginTransaction();
        try {
            $service = Service::findOrFail($id);
            $input = [];
            $input['services_category_id'] = $request->services_category_id;
            $input['title'] = $request->title;
            $input['subtitle'] = $request->subtitle;
            $input['slug'] = Str::slug($request->title);
            $input['short_content'] = $request->short_content;
            $input['content'] = $request->content;
            $imagePath = public_path('upload/services');
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $titleSlug = Str::slug($request->title, '-');
            if ($request->hasFile('main_image')) {
                if ($service->main_image && File::exists($imagePath.'/'.$service->main_image)) {
                    File::delete($imagePath.'/'.$service->main_image);
                }
                $imageName = $titleSlug.'-main-'.uniqid().'.webp';
                Image::make($request->file('main_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath.'/'.$imageName);
                $input['main_image'] = $imageName;
            }
            if ($request->hasFile('icon_image')) {
                if ($service->icon_image && File::exists($imagePath.'/'.$service->icon_image)) {
                    File::delete($imagePath.'/'.$service->icon_image);
                }
                $imageName = $titleSlug.'-icon-'.uniqid().'.webp';
                Image::make($request->file('icon_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath.'/'.$imageName);
                $input['icon_image'] = $imageName;
            }
            if ($request->hasFile('details_image')) {
                if ($service->details_image && File::exists($imagePath.'/'.$service->details_image)) {
                    File::delete($imagePath.'/'.$service->details_image);
                }
                $imageName = $titleSlug.'-details-'.uniqid().'.webp';
                Image::make($request->file('details_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath.'/'.$imageName);

                $input['details_image'] = $imageName;
            }
            if ($request->hasFile('breadcrumb_image')) {
                if ($service->breadcrumb_image && File::exists($imagePath.'/'.$service->breadcrumb_image)) {
                    File::delete($imagePath.'/'.$service->breadcrumb_image);
                }
                $imageName = $titleSlug.'-breadcrumb-'.uniqid().'.webp';
                Image::make($request->file('breadcrumb_image')->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath.'/'.$imageName);

                $input['breadcrumb_image'] = $imageName;
            }
            $service->update($input);
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Service updated successfully.',
                'redirect_url' => route('manage-services.index')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $service = Service::findOrFail($id);
            $imagePath = public_path('upload/services');
            if ($service->main_image && File::exists($imagePath.'/'.$service->main_image)) {
                File::delete($imagePath.'/'.$service->main_image);
            }
            if ($service->icon_image && File::exists($imagePath.'/'.$service->icon_image)) {
                File::delete($imagePath.'/'.$service->icon_image);
            }
            if ($service->details_image && File::exists($imagePath.'/'.$service->details_image)) {
                File::delete($imagePath.'/'.$service->details_image);
            }
            if ($service->breadcrumb_image && File::exists($imagePath.'/'.$service->breadcrumb_image)) {
                File::delete($imagePath.'/'.$service->breadcrumb_image);
            }
            $service->delete();
            DB::commit();
            return redirect()->route('manage-services.index')->with('success', 'Service deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
