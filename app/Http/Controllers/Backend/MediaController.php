<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
class MediaController extends Controller
{
    public function index(){
        $data['media_image_list'] = Media::orderBy('id', 'desc')->paginate('20');
        return view('backend.manage-media.index' , compact('data'));
    }

    public function showMediaForm(){
        return view('backend.manage-media.add');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'image_file' => 'required',
        ]);
       
        if ($request->hasFile('image_file')) {
            $files = $request->file('image_file');
            $user_id = Auth::id();
            $uploadSuccess = false;
            if (!is_array($files)) {
                $files = [$files]; 
            }
            $thumbPath = public_path('media-img/thumb');
            $mainPath = public_path('media-img/main-img');
            foreach ($files as $file) {
                $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                $image_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.webp';
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
                $media = Media::create([
                    'media_image' => $image_file_name,
                    'user_id' => $user_id
                ]);
            
                if ($media) {
                    $uploadSuccess = true;
                }
            }
            if ($uploadSuccess) {
                return redirect('manage-media')->with('success', 'Media images uploaded successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, please try again!');
            }
        }
        return redirect()->back()->with('error','Somthings went wrong please try again !');
    }

    public function edit($id){
        $media_logo = Media::find($id);
        return view('backend.manage-media.edit' , compact('media_logo'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'media_title' => 'required',
        ]);
        $input['title'] = $request->media_title;
        $media_image_row = Media::find($request->media_image_id_hidden);
        if ($request->hasFile('update_image_file')) {
            $image = $request->file('update_image_file');           
            $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
            $image_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.webp';
            $destination_path_thumb = public_path('media-img/thumb/');
            $destination_path_main = public_path('media-img/main-img/');
            if (!empty($media_image_row->media_img)) {
                $file_old_thumb = $destination_path_thumb . $media_image_row->media_img;
                $file_old_main = $destination_path_main . $media_image_row->media_img;
                if (File::exists($file_old_thumb)) {
                    File::delete($file_old_thumb);
                }
                if (File::exists($file_old_main)) {
                    File::delete($file_old_main);
                }
            }
        
            // Resize and save new image in 'thumb'
            $img = Image::make($image->getRealPath());
            $img->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination_path_thumb . $image_file_name);
        
            $image->move($destination_path_main, $image_file_name);
            $input['media_image'] = $image_file_name;
        }
        $media_image_row_update = $media_image_row->update($input);
        if($media_image_row_update){
            return redirect('manage-media')->with('success','Media updated successfully !');
        }else{
            return redirect('manage-media/edit/'.$request->media_image_id_hidden.'')->with('error','Somthings went wrong please try again !');
        }
        return redirect('manage-media')->with('error','Somthings went wrong please try again !');
             
    }

    public function delete($id){
        $media_image_row = Media::find($id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/media-img/thumb/');
        $destination_path_main_img_ = public_path('/media-img/main-img/');
        $file_old_thumb = $destination_path_thumb.$media_image_row->media_image;
        $file_old_main = $destination_path_main_img_.$media_image_row->media_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $media_image_row->delete();
        return redirect('manage-media')->with('success','Media deleted successfully !');
    }

    public function sort(Request $request) {
        Log::info('Sort request received.', ['swaps' => $request->swaps]);
            if (!$request->has('swaps') || !is_array($request->swaps)) {
            return response()->json(['success' => false, 'message' => 'No swap data received!'], 400);
        }
        foreach ($request->swaps as $swap) {
            Media::where('id', $swap['id'])->update(['sort_order' => $swap['sort_order']]);
        }
            return response()->json(['success' => true, 'message' => 'Items swapped successfully!']);
    }
    
    
    
    
}
