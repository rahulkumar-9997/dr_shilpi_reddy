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
use App\Models\Schlorship;
use App\Models\SchlorshipImages;
use App\Models\Service;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Validator;

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
        ->limit(6)
        ->get();

        $data['feature_logo_list'] = FeatureLogo::orderBy('id','DESC')->get();
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'intro_description', 'intro_image', 'is_external', 'external_url', 'visit_count', 'blog_post_date')->orderBy('id', 'desc')->limit(3)->get();
	    return view('frontend.index', compact('data'));
    }
    
    public function aboutUs(){
	    return view('frontend.pages.about-us');
    }
    
    public function workPage(){
        $data['our_work_list'] = OurWork::orderBy('id','DESC')->get(); 
		DB::disconnect();
	    return view('frontend.pages.work', compact('data'));
    }

    public function workDetailsPage($slug){
        $our_work = OurWork::where('slug', $slug)->firstOrFail();
		DB::disconnect();
	    return view('frontend.pages.work-details', compact('our_work'));
    }

    public function mediaPage(){
        //$data['media_list'] = Media::orderBy('sort_order', 'asc')->simplePaginate(20);
        $data['media_list'] = Media::orderBy('id', 'desc')->paginate(20);
		DB::disconnect();
	    return view('frontend.pages.media', compact('data'));
    }

    public function blogPage(){
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'intro_description', 'intro_image', 'is_external', 'external_url', 'visit_count', 'blog_post_date')->orderBy('id','DESC')->paginate(15);
		DB::disconnect();
	    return view('frontend.pages.blog', compact('data'));
    }

    public function blogDetailsPage($slug){
        $blog = Blog::with('images')->where('slug', $slug)->firstOrFail();
		$blog->increment('visit_count');
        $blog->refresh();
        return view('frontend.pages.blog-details' , compact('blog'));	    
    }
    public function contactUsPage(){
	    return view('frontend.pages.contact-us');
    }
    public function ourFoundation(){
        $data['foundation_category_list'] = FoundationCategory::with('latestFoundationImage')
        ->orderBy('id', 'DESC')
        ->get();
        $data['schlorship'] = Schlorship::select('id', 'title', 'main_image', 'description')
            ->where('status',1)
            ->orderBy('id', 'asc')
            ->take(3)
            ->get();
        //return response($data['foundation_category_list']);
	    return view('frontend.pages.our-foundation.index', compact('data'));
    }

    public function ourFoundationDetails($slug){
        $foundation = FoundationCategory::with(['foundationImages' => function ($q) {
            $q->orderBy('created_at', 'DESC');
        }])
        ->where('slug', $slug)
        ->firstOrFail(); 

        $recentFoundations = FoundationCategory::with('latestFoundationImage')
            ->where('id', '!=', $foundation->id)
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();
        return view('frontend.pages.our-foundation.foundation-details', compact('foundation', 'recentFoundations'));
    }

    public function schlorshipList(){
        $data['schlorship'] = Schlorship::select('id', 'title', 'main_image', 'description')
            ->where('status',1)
            ->orderBy('id', 'asc')
            ->get();
        return view('frontend.pages.scholarship.schlorship', compact('data'));
    }


    public function schlorshipDetails($id){
        $schlorship = Schlorship::with(['images' => function ($query) {
            $query->orderBy('id', 'DESC');
        }])->where('id', $id)->firstOrFail();

        $html = view('frontend.pages.scholarship.partials.scholarship-details-modal', compact('schlorship'))->render();
        return response()->json([
            'message' => 'Scholarship details retrieved successfully',
            'data' => $html,
        ]);
    }   

    
    public function ibuCare(){
        $data['ibucare_list'] = IbuCare::orderBy('id','ASC')->get(); 
        DB::disconnect();
	    return view('frontend.pages.ibu-care', compact('data'));
    }

    public function ibuCareDetails($slug){
        $data['ibucare_list'] = IbuCare::orderBy('id','ASC')->get();
        $array_color = ['#f29685', '#f9bd55', '#f9e255', '#abce5d', '#87d0d6', '#c996ce', '#f9e255', '#ff5757'];
        $ibucare = IbuCare::where('slug', $slug)->firstOrFail();
		DB::disconnect();
        return view('frontend.pages.ibu-care-details' , compact('ibucare', 'data', 'array_color'));
	    
    }

    public function homeEnquirySubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'mobile_number' => 'required|digits:10',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        try {

            $data = [
                'name'          => $request->name,
                'email'         => $request->email,
                'mobile_number' => $request->mobile_number,
                'message'       => $request->message,
            ];
            Mail::to('drkshilpireddyfoundation@gmail.com')->send(new EnquiryMail($data));
            //Mail::to('rahulkumarmaurya464@gmail.com')->send(new EnquiryMail($data));
            return response()->json([
                'status'  => 'success',
                'message' => 'Enquiry sent successfully. Our team will contact you shortly.'
            ]);

        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json([
                'status'  => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
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
    public function fertilityConclave(){
        return view('frontend.pages.fertility-conclave'); 
    }
    
    public function servicesIndex(){
        $services = Service::select(
            'id',
            'services_category_id',
            'title',
            'subtitle',
            'slug',
            'short_content',
            'main_image',
            'created_at'
        )
        ->with([
            'category:id,title,slug'
        ])
        ->latest()
        ->paginate(20);
	    return view('frontend.pages.services.index', compact('services'));
    }

    public function servicesDetails($slug)
    {
        $service = Service::select(
                'id',
                'services_category_id',
                'title',
                'subtitle',
                'slug',
                'short_content',
                'content',
                'main_image',
                'details_image',
                'created_at'
            )
            ->with([
                'category:id,title,slug'
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedServices = Service::select('id', 'services_category_id', 'title', 'slug', 'short_content', 'main_image')
        ->where('services_category_id', $service->services_category_id)
        ->where('id', '!=', $service->id)
        ->limit(4)
        ->get();

        return view('frontend.pages.services.details', compact('service', 'relatedServices'));
    }
    
    
}
