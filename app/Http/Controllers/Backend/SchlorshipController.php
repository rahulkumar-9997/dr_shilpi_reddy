<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schlorship;
use App\Models\SchlorshipImages;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SchlorshipController extends Controller
{
    public function index(){
        $data['schlorships'] = Schlorship::with('images')->orderBy('id', 'desc')->paginate(20);
        return view('backend.schlorship.schlorship-image.index' , compact('data'));
    }
    public function create(){
        return view('backend.schlorship.schlorship-image.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'schlorship_title' => 'required|string|max:255',
            'schlorship_description' => 'nullable|string',
            'schlorship_main_image' => 'required|image|mimes:jpeg,jpg,png,webp|max:4096',
            'image_file' => 'nullable|array|min:1|max:10',
            'image_file.*' => 'image|mimes:jpeg,jpg,png,webp|max:4096'
        ]);      
        
        DB::beginTransaction();
        try {
            $input = [];
            $input['title'] = $request->input('schlorship_title');
            $input['description'] = $request->input('schlorship_description');
            $input['status'] = 1;
            $imagePath = public_path('upload/schlorship');
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }
            if ($request->hasFile('schlorship_main_image')) {
                $mainImage = $request->file('schlorship_main_image');
                $titleSlug = Str::slug($request->input('schlorship_title'), '-');
                $mainImageName = $titleSlug . '-main-' . uniqid() . '.webp';                
                Image::make($mainImage->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $mainImageName);                
                $input['main_image'] = $mainImageName;
            }
            $schlorship = Schlorship::create($input);
            if ($request->hasFile('image_file')) {
                $files = $request->file('image_file');
                $titleSlug = Str::slug($request->input('schlorship_title'), '-');                
                foreach ($files as $index => $file) {
                    $uniqueId = uniqid();
                    $imageFileName = $titleSlug . '-' . ($index + 1) . '-' . $uniqueId . '.webp';
                    Image::make($file->getRealPath())
                        ->encode('webp', 80)
                        ->save($imagePath . '/' . $imageFileName);                    
                    SchlorshipImages::create([
                        'schlorship_id' => $schlorship->id,
                        'image' => $imageFileName,
                        'title' => $request->input('schlorship_title') . ' - Image ' . ($index + 1),
                        'status' => 1
                    ]);
                }
            }            
            DB::commit();
            return redirect()->route('schlorship-image.index')->with('success', 'Scholarship Created successfully');            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Upload failed: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $data['schlorship'] = Schlorship::with('images')->findOrFail($id);
        return view('backend.schlorship.schlorship-image.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'schlorship_title' => 'required|string|max:255',
            'schlorship_description' => 'nullable|string',
            'schlorship_main_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
            'image_file' => 'nullable|array',
            'image_file.*' => 'image|mimes:jpeg,jpg,png,webp|max:4096',
            'delete_images' => 'nullable|array',
            'status' => 'required|in:0,1'
        ]);        
        DB::beginTransaction();
        try {
            $schlorship = Schlorship::findOrFail($id);
            $schlorship->title = $request->input('schlorship_title');
            $schlorship->description = $request->input('schlorship_description');
            $schlorship->status = $request->input('status');
            $imagePath = public_path('upload/schlorship');
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }
            if ($request->hasFile('schlorship_main_image')) {
                if ($schlorship->main_image) {
                    $oldMainImagePath = $imagePath . '/' . $schlorship->main_image;
                    if (File::exists($oldMainImagePath)) {
                        File::delete($oldMainImagePath);
                    }
                }                
                $mainImage = $request->file('schlorship_main_image');
                $titleSlug = Str::slug($request->input('schlorship_title'), '-');
                $mainImageName = $titleSlug . '-main-' . uniqid() . '.webp';                
                Image::make($mainImage->getRealPath())
                    ->encode('webp', 80)
                    ->save($imagePath . '/' . $mainImageName);                
                $schlorship->main_image = $mainImageName;
            }            
            $schlorship->save();
            if ($request->has('delete_images') && !empty($request->delete_images)) {
                foreach ($request->delete_images as $imageId) {
                    $image = SchlorshipImages::find($imageId);
                    if ($image) {
                        $imagePathFull = $imagePath . '/' . $image->image;
                        if (File::exists($imagePathFull)) {
                            File::delete($imagePathFull);
                        }
                        $image->delete();
                    }
                }
            }
            if ($request->hasFile('image_file')) {
                $files = $request->file('image_file');
                $titleSlug = Str::slug($request->input('schlorship_title'), '-');
                $existingImagesCount = $schlorship->images()->count();
                foreach ($files as $index => $file) {
                    $uniqueId = uniqid();
                    $imageIndex = $existingImagesCount + $index + 1;
                    $imageFileName = $titleSlug . '-' . $imageIndex . '-' . $uniqueId . '.webp';
                    Image::make($file->getRealPath())
                        ->encode('webp', 80)
                        ->save($imagePath . '/' . $imageFileName);                    
                    SchlorshipImages::create([
                        'schlorship_id' => $schlorship->id,
                        'image' => $imageFileName,
                        'title' => $request->input('schlorship_title') . ' - Image ' . $imageIndex,
                        'status' => 1
                    ]);
                }
            }            
            DB::commit();
            return redirect()->route('schlorship-image.index')->with('success', 'Scholarship updated successfully');            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Update failed: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $schlorship = Schlorship::findOrFail($id);
            $imagePath = public_path('upload/schlorship'); 
            if ($schlorship->main_image && File::exists($imagePath . '/' . $schlorship->main_image)) {
                File::delete($imagePath . '/' . $schlorship->main_image);
            }
            foreach ($schlorship->images as $image) {
                if (File::exists($imagePath . '/' . $image->image)) {
                    File::delete($imagePath . '/' . $image->image);
                }
                $image->delete();
            }
            $schlorship->delete();            
            DB::commit();
            return redirect()->back()->with('success', 'Scholarship and all associated images deleted successfully');            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Delete failed: ' . $e->getMessage());
        }
    }
}
