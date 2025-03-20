<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\FeatureLogo;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Auth;
class FeatureLogoController extends Controller
{
    public function index(){
        $data['feature_logo_list'] = FeatureLogo::orderBy('id','DESC')->get();        
        return view('backend.manage-feature-logo.index' , compact('data'));
    }
    public function showFeatureLogoForm(){
        return view('backend.manage-feature-logo.add');
    }
    public function store(Request $request){
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'image_file' => 'required',
            
        ]);
       
        if ($request->hasFile('image_file')){
            $files = $request->file('image_file');
            foreach ($files as $file) {
                $image = $file;
                $filenameWithExt = $image->getClientOriginalName();  
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $image_file_name = $filename.'_'.time().'.'.$extension;
                $image_file_name = $filename.'_'.time().'.'.$extension;


                // $destinationPath = public_path('/feature-logo/thumb');
                $destinationPath = public_path() . '/feature-logo/thumb/';
                $img = Image::make($image->getRealPath());
                $img->resize(300, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$image_file_name);
        
                // $destinationPath = public_path('feature-logo/main-img');
                $destinationPath = public_path() . '/feature-logo/thumb/';

                $image->move($destinationPath, $image_file_name);
                $input['img_file'] = $image_file_name;
                $input['user_id'] = $user_id;
                
                $image_upload = FeatureLogo::create($input);
            }
            if ($image_upload){
                return redirect('manage-feature-logo')->with('success','Feature logo uploaded successfully');
            }else{
                return redirect()->back()->with('error','Somthings went wrong please try again !.');
            }
        }
        return redirect()->back()->with('error','Somthings went wrong please try again !');
    }

    public function edit($id){
        $feature_logo = FeatureLogo::find($id);
        return view('backend.manage-feature-logo.edit' , compact('feature_logo'));
    }

    public function update(Request $request){
        $feature_logo = FeatureLogo::find($request->feature_logo_id_hidden);
        if ($request->hasFile('update_image_file')){
            $image = $request->file('update_image_file');
            $filenameWithExt = $image->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $image_file_name = $filename.'_'.time().'.'.$extension;
            $destinationPath = public_path('/feature-logo/thumb');
            $destination_path_thumb = public_path('/feature-logo/thumb/');
            $destination_path_main_img_ = public_path('/feature-logo/main-img/');
            /*Unlink image*/
            $file_old_thumb = $destination_path_thumb.$feature_logo->img_file;
            $file_old_main = $destination_path_main_img_.$feature_logo->img_file;
            unlink($file_old_thumb);
            unlink($file_old_main);
            /*Unlink image*/
            $img = Image::make($image->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$image_file_name);
            $destinationPath = public_path('feature-logo/main-img');
            $image->move($destinationPath, $image_file_name);
            //$input['img_file'] = $image_file_name;
            $image_upload = $feature_logo->update(['img_file' => $image_file_name]);
            if ($image_upload){
                return redirect('manage-feature-logo')->with('success','Feature logo updated successfully');
            }else{
                return redirect()->back()->with('error','Somthings went wrong please try again !.');
            }
        }
        return redirect('manage-feature-logo')->with('error','Somthings went wrong please try again !');
             
    }

    public function delete($id){
        $feature_logo = FeatureLogo::find($id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/feature-logo/thumb/');
        $destination_path_main_img_ = public_path('/feature-logo/main-img/');
        $file_old_thumb = $destination_path_thumb.$feature_logo->img_file;
        $file_old_main = $destination_path_main_img_.$feature_logo->img_file;
        if (file_exists($file_old_thumb)) {
            unlink($file_old_thumb);
        }
        if (file_exists($file_old_thumb)) {
            unlink($file_old_main);
        }
        /*Unlink image*/
        $feature_logo->delete();
        return redirect('manage-feature-logo')->with('success','Feature logo deleted successfully !');
    }
}
