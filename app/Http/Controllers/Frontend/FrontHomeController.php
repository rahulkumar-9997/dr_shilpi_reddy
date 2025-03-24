<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\FeatureLogo;
use App\Models\Testimonials;
use App\Models\Blog;
use App\Models\OurWork;
use App\Models\Media;
use App\Models\IbuCare;
use App\Models\FoundationCategory;
use Illuminate\Support\Facades\Log;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\DB; 
use Exception;
class FrontHomeController extends Controller
{
    public function home(){
        $data['testimonials_list'] = Testimonials::select('id', 'name', 'profile_image', 'testimonials_content')
        ->where('id', '>=', DB::raw('(SELECT FLOOR(RAND() * (SELECT MAX(id) FROM testimonials)))'))
        ->where('testimonial_criteria', 'testimonials_content') 
        ->limit(20)
        ->get();

        $data['testimonials_list_video'] = Testimonials::select('id', 'testimonial_criteria', 'testimonial_video')
        ->where('testimonial_criteria', 'testimonials_video') 
        ->limit(5)
        ->get();

        $data['feature_logo_list'] = FeatureLogo::orderBy('id','DESC')->get();
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'intro_description', 'intro_image', 'is_external', 'external_url')->orderBy('id', 'desc')->limit(3)->get();
        
	    return view('frontend.index', compact('data'));
    }
    
    public function aboutUs(){
	    return view('frontend.pages.about-us');
    }
    public function workPage(){
        $data['our_work_list'] = OurWork::orderBy('id','DESC')->get();    
	    return view('frontend.pages.work', compact('data'));
    }

    public function workDetailsPage($slug){
        $our_work = OurWork::where('slug', $slug)->firstOrFail();    
	    return view('frontend.pages.work-details', compact('our_work'));
    }

    public function mediaPage(){
        $data['media_list'] = Media::orderBy('sort_order', 'asc')->simplePaginate(20); 
	    return view('frontend.pages.media', compact('data'));
    }
    public function blogPage(){
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'intro_description', 'intro_image', 'is_external', 'external_url')->orderBy('id','DESC')->get();
	    return view('frontend.pages.blog', compact('data'));
    }
    public function blogDetailsPage($slug){
        //$blog = Blog::where('slug', $slug)->firstOrFail();
        $blog = Blog::with('images')->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.blog-details' , compact('blog'));
	    
    }
    public function contactUsPage(){
	    return view('frontend.pages.contact-us');
    }
    public function ourFoundation(){
        $data['foundation_category_list'] = FoundationCategory::withCount('foundationImages')->orderBy('id','DESC')->get();
	    return view('frontend.pages.our-foundation', compact('data'));
    }

    public function getFoundationCategoryDetails(Request $request)
    {
        
        if (!$request->has('id')) {
            return response()->json(['error' => 'Missing category ID'], 400);
        }
        $category = FoundationCategory::with(['foundationImages' => function ($query) {
            $query->orderBy('sort_order');
        }])->find($request->id);
        if (!$category) {
            Log::error('Foundation Category Not Found: ID ' . $request->id);
            return response()->json(['error' => 'Category not found'], 404);
        }
        //Log::info('Fetched Foundation Category:', ['category' => $category]);
        try {
            $html = view('frontend.pages.partials.foundation-category-details', [
                'foundation_category' => $category
            ])->render();
        } catch (\Exception $e) {
            Log::error('View Rendering Error: ' . $e->getMessage());
            return response()->json(['error' => 'View rendering failed'], 500);
        }
        return response()->json(['html' => $html]);
    }

    
    public function ibuCare(){
        $data['ibucare_list'] = IbuCare::orderBy('id','ASC')->get(); 
        
	    return view('frontend.pages.ibu-care', compact('data'));
    }

    public function ibuCareDetails($slug){
        $data['ibucare_list'] = IbuCare::orderBy('id','ASC')->get();
        $array_color = ['#f29685', '#f9bd55', '#f9e255', '#abce5d', '#87d0d6', '#c996ce', '#f9e255', '#ff5757'];
        $ibucare = IbuCare::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.ibu-care-details' , compact('ibucare', 'data', 'array_color'));
	    
    }

    public function homeEnquirySubmit(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|digits:10',
            
        ]);
        
        try {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_number' => $request->input('mobile_number'),
                'message' => $request->input('message'),
            ];
            
            Mail::to('drkshilpireddy@gmail.com')->send(new EnquiryMail($data));
            Mail::to('drkshilpireddyfoundation@gmail.com') ->send(new EnquiryMail($data));
            Log::info('Email sent successfully to drkshilpireddy@gmail.com');
			
        } catch (Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
        if ($request->input('contact_us_page')){
            return redirect('contact-us')->with('success','Enquiry send successfully, Our team contact you shortly.');
        }else{
            return redirect('/#contact-form')->with('success','Enquiry send successfully, Our team contact you shortly.');
        }
    }

    public function privacyPolicy(){
	    return view('frontend.pages.privacy-policy');
    }

    public function termsOfUse(){
	    return view('frontend.pages.terms-of-use');
    }

    public function disclaimer(){
	    return view('frontend.pages.disclaimer');
    }

    public function donation(){
        return view('frontend.pages.donation'); 
    }
    
    
    
    
}
