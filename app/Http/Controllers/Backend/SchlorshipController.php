<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\SchlorshipImages;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class SchlorshipController extends Controller
{
    public function index(){
        $data['schlorship_images'] = SchlorshipImages::orderBy('id', 'desc')->paginate('20');
        return view('backend.schlorship.schlorship-image.index' , compact('data'));
    }
    public function create(){
        return view('backend.schlorship.schlorship-image.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image_file' => 'required',
            'image_file.*' => 'image|mimes:jpeg,jpg,png,webp|max:4096'
        ]);
        DB::beginTransaction();
        try {
            if ($request->hasFile('image_file')) {
                $files = $request->file('image_file');
                if (!is_array($files)) {
                    $files = [$files];
                }
                $thumbPath = public_path('upload/schlorship/thumb');
                $mainPath  = public_path('upload/schlorship/main-image');
                if (!File::exists($thumbPath)) {
                    File::makeDirectory($thumbPath, 0755, true);
                }
                if (!File::exists($mainPath)) {
                    File::makeDirectory($mainPath, 0755, true);
                }
                foreach ($files as $file) {
                    $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                    $image_file_name = 'schlorship-' . $uniqueTimestamp . '.webp';
                    Image::make($file->getRealPath())
                        ->resize(600, 400, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                        ->encode('webp', 90)
                        ->save("{$thumbPath}/{$image_file_name}");
                    Image::make($file->getRealPath())
                        ->encode('webp', 90)
                        ->save("{$mainPath}/{$image_file_name}");
                    SchlorshipImages::create([
                        'image' => $image_file_name,
                        'status' => 1
                    ]);
                }
                DB::commit();
                return redirect()->route('schlorship-image.index')->with('success', 'Scholarship images uploaded successfully');
            }
            DB::rollBack();
            return redirect()->back()->with('error', 'No images found!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with(
                'error',
                'Upload failed : ' . $e->getMessage()
            );
        }
    }

    public function edit($id)
    {
        $data['schlorship_image'] = SchlorshipImages::findOrFail($id);
        return view('backend.schlorship.schlorship-image.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image_file' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);
        DB::beginTransaction();
        try {
            $schlorship = SchlorshipImages::findOrFail($id);
            $thumbPath = public_path('upload/schlorship/thumb');
            $mainPath  = public_path('upload/schlorship/main-image');
            if ($request->hasFile('image_file')) {
                if ($schlorship->image) {
                    $oldThumb = $thumbPath.'/'.$schlorship->image;
                    $oldMain  = $mainPath.'/'.$schlorship->image;
                    if (File::exists($oldThumb)) {
                        File::delete($oldThumb);
                    }
                    if (File::exists($oldMain)) {
                        File::delete($oldMain);
                    }
                }
                $file = $request->file('image_file');
                $uniqueTimestamp = uniqid().'-'.round(microtime(true)*1000);
                $image_file_name = 'schlorship-'.$uniqueTimestamp.'.webp';
                Image::make($file->getRealPath())
                    ->resize(600,400,function($constraint){
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('webp',90)
                    ->save("{$thumbPath}/{$image_file_name}");
                Image::make($file->getRealPath())
                    ->encode('webp',90)
                    ->save("{$mainPath}/{$image_file_name}");
                $schlorship->image = $image_file_name;
            }
            $schlorship->title  = $request->title;
            $schlorship->status = $request->status ?? 1;
            $schlorship->save();
            DB::commit();
            return redirect()->route('schlorship-image.index')->with('success','Scholarship image updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Update failed : '.$e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $schlorship = SchlorshipImages::findOrFail($id);
            $thumbPath = public_path('upload/schlorship/thumb/'.$schlorship->image);
            $mainPath  = public_path('upload/schlorship/main-image/'.$schlorship->image);
            if (File::exists($thumbPath)) {
                File::delete($thumbPath);
            }
            if (File::exists($mainPath)) {
                File::delete($mainPath);
            }
            $schlorship->delete();
            DB::commit();
            return redirect()->back()->with('success','Scholarship image deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Delete failed : '.$e->getMessage());
        }
    }
}
