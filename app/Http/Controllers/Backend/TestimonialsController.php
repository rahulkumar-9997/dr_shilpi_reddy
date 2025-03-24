<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class TestimonialsController extends Controller
{
    public function index(){
        $data['testimonials_list'] = Testimonials::orderBy('id','DESC')->get();        
        return view('backend.manage-testimonials.index' , compact('data'));
    }

    public function showTestimonialsForm(){
        return view('backend.manage-testimonials.add');
        
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        if ($request->input('testimonials_criteria') == 'testimonials_content') {
            $this->validate($request, [
                'name' => 'required',
                'profile_photo' => 'required|image',
                'testimonials_content' => 'required',
            ]);
        } elseif ($request->input('testimonials_criteria') == 'testimonials_video') {
            $this->validate($request, [
                'video_file' => 'required|mimes:mp4,mov,ogg,qt', 
            ]);
        }
    
        $input = [];
        $input['user_id'] = $user_id;
    
        if ($request->input('testimonials_criteria') == 'testimonials_content') {
            $input['name'] = $request->input('name');
            $input['testimonials_content'] = $request->input('testimonials_content');
    
            if ($request->hasFile('profile_photo')) {
                $image = $request->file('profile_photo');
                $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                $image_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.webp';
                $destinationPath = public_path('/testimonials-img/thumb');
                $img = Image::make($image->getRealPath());
                $img->resize(300, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_file_name);
                $destinationPath = public_path('testimonials-img/main-img');
                $image->move($destinationPath, $image_file_name);
                $input['profile_image'] = $image_file_name;
            }
        } elseif ($request->input('testimonials_criteria') == 'testimonials_video') {
            if ($request->hasFile('video_file')) {
                $video = $request->file('video_file');
                $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                $video_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.' . $video->getClientOriginalExtension();
                $destinationPath = public_path('testimonials-img/testimonials-videos');
                $video->move($destinationPath, $video_file_name);
    
                // Resize/compress the video using FFmpeg (if needed)
                $this->resizeVideo($destinationPath . '/' . $video_file_name);
    
                $input['testimonial_video'] = $video_file_name;
                $input['testimonial_criteria'] = $request->input('testimonials_criteria');
            }
        }
        $input['testimonial_criteria'] = $request->input('testimonials_criteria');
        $testimonials_add = Testimonials::create($input);
    
        if ($testimonials_add) {
            return redirect('manage-testimonials')->with('success', 'Testimonials added successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong please try again!');
        }
    }
    
    /**
     * Resize or compress a video using FFmpeg.
     *
     * @param string $videoPath Path to the video file.
     */
    private function resizeVideo($videoPath) {
        $ffmpegPath = env('FFMPEG_PATH', 'ffmpeg');
        $outputPath = str_replace('.mp4', '_resized.mp4', $videoPath);
        $command = "{$ffmpegPath} -i {$videoPath} -vf scale=640:360 {$outputPath}";
        exec($command);
        if (file_exists($outputPath)) {
            unlink($videoPath);
            rename($outputPath, $videoPath);
        }
    }

    public function edit($id){
        $testimonials_edit = Testimonials::find($id);
        return view('backend.manage-testimonials.edit' , compact('testimonials_edit'));
    }

    public function update(Request $request){
        DB::beginTransaction();
        //dd($request->all());
        try {
            $testimonial_id = $request->input('testimonials_id_hidden');
            $testimonial = Testimonials::findOrFail($testimonial_id);
            if ($request->input('testimonials_criteria') == 'testimonials_content') {
                $this->validate($request, [
                    'name' => 'required',
                    'profile_photo' => 'nullable|image',
                    'testimonials_content' => 'required',
                ]);
            } elseif ($request->input('testimonials_criteria') == 'testimonials_video') {
                $this->validate($request, [
                    'video_file' => 'nullable|mimes:mp4,mov,ogg,qt',
                ]);
            }
            if ($request->input('testimonials_criteria') == 'testimonials_content') {
                $testimonial->name = $request->input('name');
                $testimonial->testimonials_content = $request->input('testimonials_content');
                if ($request->hasFile('profile_photo')) {
                    if ($testimonial->profile_image) {
                        $old_thumb_path = public_path('testimonials-img/thumb/' . $testimonial->profile_image);
                        $old_main_path = public_path('testimonials-img/main-img/' . $testimonial->profile_image);
                        if (file_exists($old_thumb_path)) {
                            unlink($old_thumb_path);
                        }
                        if (file_exists($old_main_path)) {
                            unlink($old_main_path);
                        }
                    }
    
                    $image = $request->file('profile_photo');
                    $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                    $image_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.webp';
                    $destinationPath = public_path('/testimonials-img/thumb');
    
                    $img = Image::make($image->getRealPath());
                    $img->resize(300, 200, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $image_file_name);
    
                    $destinationPath = public_path('testimonials-img/main-img');
                    $image->move($destinationPath, $image_file_name);
                    $testimonial->profile_image = $image_file_name;
                }
            } elseif ($request->input('testimonials_criteria') == 'testimonials_video') {
                if ($request->hasFile('video_file')) {
                    if ($testimonial->testimonial_video) {
                        $old_video_path = public_path('testimonials-img/testimonials-videos/' . $testimonial->testimonial_video);
                        if (file_exists($old_video_path)) {
                            File::delete($old_video_path);
                        }
                    }
                    $video = $request->file('video_file');
                    $uniqueTimestamp = uniqid() . '-' . round(microtime(true) * 1000);
                    $video_file_name = 'dr-shilpi-reddy-hyd-' . $uniqueTimestamp . '.' . $video->getClientOriginalExtension();
                    $destinationPath = public_path('testimonials-img/testimonials-videos');
                    $video->move($destinationPath, $video_file_name);
                    $this->resizeVideo($destinationPath . '/' . $video_file_name);
    
                    $testimonial->testimonial_video = $video_file_name;
                }
            }
    
            $testimonial->save();
            DB::commit();
            return redirect('manage-testimonials')->with('success', 'Testimonial updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating testimonial: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function delete($id){
        $testimonial = Testimonials::findOrFail($id);
        if ($testimonial->profile_image) {
            $old_thumb_path = public_path('testimonials-img/thumb/' . $testimonial->profile_image);
            $old_main_path = public_path('testimonials-img/main-img/' . $testimonial->profile_image);
            if (file_exists($old_thumb_path)) {
                unlink($old_thumb_path);
            }
            if (file_exists($old_main_path)) {
                unlink($old_main_path);
            }
        }

        if ($testimonial->testimonial_video) {
            $old_video_path = public_path('testimonials-img/testimonials-videos/' . $testimonial->testimonial_video);
            if (file_exists($old_video_path)) {
                File::delete($old_video_path);
            }
            
        }
        $testimonial->delete();
        return redirect('manage-testimonials')->with('success', 'Testimonial deleted successfully');
    }

    public function delete_old($id){
        $testimonials_row = Testimonials::find($id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/testimonials-img/thumb/');
        $destination_path_main_img_ = public_path('/testimonials-img/main-img/');
        $file_old_thumb = $destination_path_thumb.$testimonials_row->profile_image;
        $file_old_main = $destination_path_main_img_.$testimonials_row->profile_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $testimonials_row->delete();
        return redirect('manage-testimonials')->with('success','Testimonials deleted successfully !');
    }
}
