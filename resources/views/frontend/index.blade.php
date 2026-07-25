@extends('frontend.layouts.master')
@section('title','Dr. K. Shilpi Reddy: Gynaecologist in Hyderabad')
@section('description', 'Dr. K. Shilpi Reddy – Trusted Gynaecologist in Hyderabad for expert care in women\'s health, pregnancy, and fertility. Book your appointment today.')
@section('main-content')
<!-- header-and-banner-section -->
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img">
            <!-- navbar-start -->
            @include('frontend.layouts.header-menu')
            <!-- navbar-end -->
        </div>
    </div>
</div>
<div class="w-100 float-left header-and-banner-con banner-overlay-img-1">
    <div class="container">
        <div class="banner-section">
            <!-- banner-start -->
            @include('frontend.layouts.banner-top')
            <!-- banner-end -->
        </div>
    </div>
</div>

<div class="w-100 float-left feature-box-con text-center four_column">
    <div class="container">
        <div class="row bg-white">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6  pl-0 pr-0">
                <a href="https://mrsmomevent.com/" target="_blank">
                    <div class="feature-box-item ">
                        <figure>
                            <img src="{{asset('fronted/shilpi-img/fav-icon/mr_mom.webp')}}" alt="feature-box-icon" class="img-fluid effect lazyload" loading="lazy" data-src="{{asset('fronted/shilpi-img/fav-icon/mr_mom.webp')}}" fetchpriority="high">
                        </figure>
                        <h5>Mrs. Mom</h5>
                        <p class="mb-0">Wellness & education in pregnancy & infant care.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 col-6">
                <a href="{{url('ibu-care') }}">
                    <div class="feature-box-item ">
                        <figure>
                            <img src="{{asset('fronted/shilpi-img/fav-icon/ibu_care.webp')}}" alt="feature-box-icon" class="img-fluid effect" loading="lazy" fetchpriority="high">
                            <!-- <img src="{{asset('fronted/shilpi-img/fav-icon/ibu_care.png')}}" alt="feature-box-icon" class="img-fluid effect second_img"> -->
                        </figure>
                        <h5>IBU care</h5>
                        <p class="mb-0">Complete Maternal Health Care.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 col-6">
                <a href="{{url('our-foundation') }}">
                    <div class="feature-box-item our_foundation_div two_images">
                        <figure>
                            <img src="{{asset('fronted/shilpi-img/fav-icon/our_foundation.webp')}}" alt="feature-box-icon" class="img-fluid first_img" loading="lazy" fetchpriority="high">
                            <img src="{{asset('fronted/shilpi-img/fav-icon/hover_foundation.webp')}}" alt="feature-box-icon" class="img-fluid second_img" loading="lazy" fetchpriority="high">
                        </figure>
                        <h5>Our Foundation</h5>
                        <p class="mb-0">Dr. K. Shilpi Reddy Foundation: Women’s Empowerment & Healthcare.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 col-6">
                <a href="{{url('blog') }}">
                    <div class="feature-box-item ">
                        <figure>
                            <img src="{{asset('fronted/shilpi-img/fav-icon/blog.webp')}}" alt="feature-box-icon" class="img-fluid effect" loading="lazy" fetchpriority="high">
                        </figure>
                        <h5>Blog</h5>
                        <p class="mb-0">Discover expert insights and advice from Dr. K. Shilpi Reddy.</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
<section>
    <div class="w-100 float-left quality-system-con video-pb-20 about-home-p">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h2>About Dr.K.Shilpi Reddy
                        </h2>
                        <p>My father envisioned me as a doctor, specifically an unconventional doctor who would see the depth of a problem and treat any physical or physiological issues with 360-degree care and compassion. After finishing high school in 1993, I pursued my interests in biology and life sciences and enrolled at the prestigious Villa Marie Junior College in Hyderabad, which was led by Miss Philomena, a powerful woman guided by her intuition. She was a huge source of inspiration for me.</p>
                        <div class="d-flex justify-content-start gap-2 mobile-center">
                            <a href="{{url('about-us') }}" class="appointment-btn" style="margin-top: 15px;">About Us</a>
                            <!-- <a href="https://drshilpiclinic.on-mfine.co/consult/drshilpi@clinic" class="appointment-btn" target="_blank" style="margin-top: 15px;">Consult Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="quality-system-right-con position-relative text-center video-div">
                        <div class="video-container">
                            <video class="tag-video" controls autoplay loading="lazy">
                                <source src="{{asset('fronted/shilpi-img/My-Story-_-About-Dr.-K.-Shilpi-Reddy-Obstetrician-Gynecologist-_-Origin-of-Mrs.-Mom-Event-1.mp4')}}" type="video/mp4">
                            </video>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left fun-facts-con counting-fun feedback_three1">
        <div class="container">
            <div class="fun-facts-box-con text-sm-left text-center">
                <div class="row bg-white">
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0 border-right-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/normal_delivery_1.png')}}" alt="fun-facts-icon1" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                    <div class="count count-nu">150</div>
                                    <span>+</span>
                                </div>
                                <p class="mb-0">Vaginal Birth After Cesarean</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0 border-right-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/V_BACs_1.png')}}" alt="fun-facts-icon1" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                    <div class="count count-nu">75</div>
                                    <span>%</span>
                                </div>
                                <p class="mb-0">Normal Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 pl-0 pr-0">
                        <div class="fun-facts-box-item d-sm-flex align-items-sm-center">
                            <figure class="mb-0 d-inline-block">
                                <img src="{{asset('fronted/shilpi-img/feedback-icon/feedback.png')}}" alt="fun-facts-icon1" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="fun-facts-item-content d-inline-block">
                                <div class="position-relative fun-facts-item-title d-inline-block">
                                    <div class="count count-nu">98</div>
                                    <span>%</span>
                                </div>
                                <p class="mb-0">Positive Feedback</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left home-some-content pt-2 pb-5">
        <div class="container">
            <div class="text-center">
                <h2>Holistic Care for Every Stage of Womanhood</h2>                
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-11">
                    <div class="text-center">
                        <p>
                            Dr. K. Shilpi Reddy offers compassionate, evidence-based care that goes beyond routine obstetrics and gynaecology. With a strong focus on safety, comfort, and personalized treatment, she supports women through every phase of life—from preconception and pregnancy to complex gynaecological concerns. Her approach blends advanced medical practices with holistic wellness, ensuring both physical and emotional well-being.
                        </p>
                        <p>
                            Known for her calm guidance and patient-centric care, Dr. Shilpi Reddy emphasizes informed decision-making and natural, woman-friendly treatment options wherever possible. She is committed to achieving healthy outcomes through meticulous monitoring, minimally invasive techniques, and continuous support for families. At KIMS Cuddles, Kondapur, her vision is to create a nurturing environment where women feel heard, empowered, and confident throughout their healthcare journey, making each experience safe, positive, and memorable.
                        </p>
                    </div>
                </div>
            </div>                                              
        </div>
    </div>
</section>
@include('frontend.layouts.for-online-consultancy')

@if (isset($data['blog_list']) && $data['blog_list']->count() > 0)
<section>
    <div class="w-100 float-left blog-con hom_blog_page">
        <div class="container">
            <div class="text-center">
                <h2>Our Latest Blogs</h2>
                <p>Activities in empowering the world with the vision to develop a greater and powerful world for women.
                </p>
            </div>
            <div class="row">
                @foreach($data['blog_list'] as $blog_list_row)
                @php
                if ($blog_list_row->is_external == 1) {
                $blog_url = $blog_list_row->external_url;
                } else {
                $blog_url = url('blog/' . $blog_list_row->slug);
                }
                @endphp
                <div class="col-lg-4 col-md-4">
                    <a href="{{ $blog_url }}">
                        <div class="blog-item blog_list_height">
                            <div class="post-image tw-relative tw-overflow-hidden tw-image-shine product-img tw-aspect-auto">
                                @if($blog_list_row->intro_image)                            
                                <figure class="mb-0">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('blog-img/intro/'.$blog_list_row->intro_image) }}">
                                        <img class="img-fluid blur-up lazyloaded"
                                            data-src="{{ asset('blog-img/intro/'.$blog_list_row->intro_image) }}"
                                            src="{{ asset('blog-img/intro/'.$blog_list_row->intro_image) }}"
                                            srcset="{{ asset('blog-img/intro/'.$blog_list_row->intro_image) }} 600w, 
                                            {{ asset('  blog-img/intro/'.$blog_list_row->intro_image) }} 1200w"
                                            sizes="(max-width: 600px) 600px, 1200px"
                                            alt="{{ $blog_list_row->title }}"
                                            title="{{ $blog_list_row->title }}"
                                            loading="lazy"
                                            width="600"
                                            height="400"
                                            onload="this.style.opacity=1"
                                            style="opacity: 1;">
                                    </picture>
                                </figure>
                                @else
                                <figure class="mb-0">
                                    <img src="{{asset('fronted/shilpi-img/blog/obesity-and-pregnancy.png') }}" alt="{{$blog_list_row->title}}" class="img-fluid" loading="lazy">
                                </figure>
                                @endif
                            </div>
                            <div class="blog-item-content">
                                <div class="tw-flex tw-items-center tw-justify-between tw-mb-3">
                                    <div class="tw-flex tw-items-center tw-gap-3 tw-text-[18px] tw-text-gray-500">
                                        <span class="tw-flex tw-items-center tw-gap-1.5 tw-text-sm tw-text-gray-500 tw-bg-gray-50 tw-px-3 tw-py-1.5 tw-rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="tw-w-4 tw-h-4 tw-text-secondary group-hover/views:tw-scale-110 tw-transition-transform tw-duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0s-3.6 7-9 7-9-7-9-7 3.6-7 9-7 9 7 9 7z"/>
                                            </svg>
                                            <span class="tw-text-sm tw-font-semibold tw-text-gray-700">
                                                {{ number_format($blog_list_row->visit_count) }}
                                            </span>
                                            <span class="tw-text-[16px] tw-text-gray-400">views</span>
                                        </span>
                                        
                                        @if(isset($blog_list_row->blog_post_date))
                                            <span class="tw-flex tw-items-center tw-gap-1.5 tw-text-sm tw-text-gray-500 tw-bg-gray-50 tw-px-3 tw-py-1.5 tw-rounded-full">
                                                <svg class="tw-w-3.5 tw-h-3.5 tw-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                                <span class="tw-text-gray-600 tw-font-medium">{{ \Carbon\Carbon::parse($blog_list_row->blog_post_date)->format('d M, Y') }}</span>
                                            </span>
                                            @endif
                                    </div>
                                </div>
                                <h4>{{ $blog_list_row->title }}</h4>
                                <p class="mb-0">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog_list_row->intro_description ?? ''), 120) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="tw-text-center tw-mt-10 md:tw-mt-8">
                <a href="{{ route('blog') }}" class="tw-inline-flex tw-items-center tw-gap-2 tw-px-8 tw-py-3 tw-bg-heading-secondary hover:tw-bg-secondary tw-text-white tw-font-semibold tw-rounded-full tw-transition-all tw-duration-300 hover:tw-text-white tw-ease-in-out hover:tw-shadow-lg hover:tw-transform hover:tw--translate-y-0.5">
                    View All Blogs
                    <svg class="tw-w-5 tw-h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
<section>
    <div class="w-100 float-left form-main-con" id="contact-form">
        <div class="container">
            <!--<div class="text-center">
                    <h2>Book An Appointment With <br>Dr. K. Shilpi Reddy</h2>
                    <p>Find Solutions to Your obstetrician & Gynaecology Problems
                    </p>
                </div>-->
            <div class="row">
                <div class="col-lg-6 order-xl-0 order-lg-0 order-2">
                    <div class="form-left-con position-relative text-center">
                        <figure class="mb-0">
                            <img src="{{asset('fronted/shilpi-img/Appointment.webp')}}" alt="form-left-img" class="img-fluid human-img form-left-img" loading="lazy">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    @include('frontend.pages.common.enquiry-form', [
                        'buttonText' => 'Make an Appointment',
                        'formType' => 'homePage',
                        'pageURL' => request()->fullUrl()
                    ])
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left slider-con text-lg-left text-center">
        <div class="container">
            <div class="slider-inner-con banner-overlay-img testimonials">
                <div class="row overlay-img1">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="slider-left-con">
                            <h2 class="text-white">What Our <br>
                                Patients Say About
                                Our Services
                            </h2>
                            <!--<p class="mb-0">4.8 Overall Rating, Based<br>
                                on 2500+ Reviews.
                            </p>-->
                        </div>
                    </div>
                    @if (isset($data['testimonials_list']) && $data['testimonials_list']->count() > 0)
                    <div class="col-lg-8">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <!-- data-interval="true" -->
                            <div class="carousel-inner">
                                @php
                                $sr_no = 1;
                                @endphp
                                @foreach($data['testimonials_list'] as $testimonials_list)
                                @php
                                if($sr_no =='1') {
                                $testimonials_class ='active';
                                }else{
                                $testimonials_class ='';
                                }
                                @endphp

                                <div class="carousel-item {{$testimonials_class}}">
                                    <div>
                                        <div class="test-content-section">
                                            <div class="auther-con w-100 d-inline-block">
                                                <figure class="mb-0 d-inline-block testimonial_img">
                                                    <img
                                                        src="{{ asset('testimonials-img/main-img/' . $testimonials_list->profile_image) }}"
                                                        alt="{{ $testimonials_list->name }} - Testimonial Author"
                                                        class="img-fluid"
                                                        loading="lazy"
                                                        width="150"
                                                        height="150">
                                                </figure>
                                                <div class="auther-title d-inline-block">
                                                    <h4 class="text-white">{{$testimonials_list->name}}</h4>
                                                </div>
                                            </div>
                                            <p class="text-white mb-0"> {{$testimonials_list->testimonials_content}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $sr_no++;
                                @endphp
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fas fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fas fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@if (isset($data['testimonials_list_video']) && $data['testimonials_list_video']->count() > 0)
<!--Testimonial video-->
<section>
    <div class="w-100 float-left blog-con hom_blog_page video-section">
        <div class="container">
            <div class="row" id="testimonial-videos-container">
                @foreach($data['testimonials_list_video'] as $testimonials_video)
                <div class="col-lg-3 col-md-3 mb-10 video-wrapper" data-video-src="{{ asset('testimonials-img/testimonials-videos/' . $testimonials_video->testimonial_video) }}">
                    <div class="skeleton-loader" style="width: 100%; padding-top: 56.25%; background: #f0f0f0; border-radius: 8px;"></div>
                    <div class="test-video-section" style="display: none;">
                        <div class="embed-responsive-div embed-responsive-16by9">
                            <video class="embed-responsive-item lazy-video"
                                controls
                                muted
                                loop
                                playsinline
                                autoplay
                                preload="metadata"
                                controlslist="nodownload">
                                <source data-src="{{ asset('testimonials-img/testimonials-videos/' . $testimonials_video->testimonial_video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<!--Testimonial video-->
<!---Instagram -->
<section>
    <div class="w-100 float-left blog-con hom_blog_page" style="background-color: #eaeaea3b; padding-bottom: 5px;">
        <div class="container">
            <div class="text-center">
                <!-- <h2 class="instagram-h2">Connect With us On Instagram</h2> -->
                <!--<p>Activities in empowering the world with the vision to develop a greater and powerful world for women.
                    </p>-->
            </div>
            <div class="row">
                <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
                <script src="https://static.elfsight.com/platform/platform.js" async></script>
                <div class="elfsight-app-be79a358-343a-4f1d-96c1-b37cd2ee169e" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>
</section>
<!---Instagram -->
<!---Instagram -->


@if (isset($data['feature_logo_list']) && $data['feature_logo_list']->count() > 0)
<div class="w-100 float-left logo-con video-pt-20">
    <div class="container text-center my-3">
        <div class="text-center">
            <h2>Featured in</h2>
        </div>
        <div class="row mx-auto my-auto justify-content-center">
            <div class="carousel-wrap">
                <div class="owl-carousel owl-theme feature_carousel">
                    @foreach($data['feature_logo_list'] as $image_list_id)
                    <div class="item">
                        <div class="feature_card">
                            <div class="feature_card_img">
                                <a href="#">

                                    <img src="{{ asset('feature-logo/main-img/' . $image_list_id->img_file) }}" class="img-fluid" loading="lazy"
                                        width="300"
                                        height="150"
                                        srcset="{{ asset('feature-logo/main-img/' . $image_list_id->img_file) }} 600w, 
                                    {{ asset('feature-logo/main-img/' . $image_list_id->img_file) }} 1200w" sizes="(max-width: 600px) 600px, 1200px">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const lazyVideoObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const wrapper = entry.target.closest('.video-wrapper');
                    const video = wrapper.querySelector('.lazy-video');
                    const videoSource = wrapper.querySelector('source[data-src]');
                    const videoSection = wrapper.querySelector('.test-video-section');
                    const skeleton = wrapper.querySelector('.skeleton-loader');
                    if (videoSource && !videoSource.src) {
                        videoSource.src = videoSource.dataset.src;
                        video.load();
                        video.onloadedmetadata = function() {
                            checkVideoOrientation(video, wrapper);
                            videoSection.style.display = 'block';
                            videoSection.classList.add('show');
                            setTimeout(() => {
                                if (skeleton) skeleton.style.display = 'none';
                            }, 300);
                        };
                        video.onerror = function() {
                            console.error("Error loading video:", wrapper.dataset.videoSrc);
                            if (skeleton) skeleton.style.display = 'none';
                        };
                        observer.unobserve(entry.target);
                    }
                }
            });
        }, {
            rootMargin: '200px',
            threshold: 0.1
        });
        document.querySelectorAll('.video-wrapper').forEach(wrapper => {
            lazyVideoObserver.observe(wrapper);
        });

        function checkVideoOrientation(video, wrapper) {
            const isLandscape = video.videoWidth > video.videoHeight;
            if (isLandscape) {
                wrapper.classList.remove('col-lg-3', 'col-md-3', 'col-sm-3', 'col-6', 'multiple-coloum-div');
                wrapper.classList.add('col-lg-6', 'col-md-6', 'col-sm-6', 'col-12', 'two-coloum-div');
            } else {
                wrapper.classList.remove('col-lg-6', 'col-md-6', 'col-sm-6', 'col-12', 'two-coloum-div');
                wrapper.classList.add('col-lg-3', 'col-md-3', 'col-sm-3', 'col-6', 'multiple-coloum-div');
            }
        }
        if (!('IntersectionObserver' in window)) {
            document.querySelectorAll('.video-wrapper').forEach(wrapper => {
                const video = wrapper.querySelector('.lazy-video');
                const videoSource = wrapper.querySelector('source[data-src]');
                const videoSection = wrapper.querySelector('.test-video-section');
                const skeleton = wrapper.querySelector('.skeleton-loader');

                if (videoSource && !videoSource.src) {
                    videoSource.src = videoSource.dataset.src;
                    video.load();

                    video.onloadedmetadata = function() {
                        checkVideoOrientation(video, wrapper);
                        videoSection.style.display = 'block';
                        videoSection.classList.add('show');
                        setTimeout(() => {
                            if (skeleton) skeleton.style.display = 'none';
                        }, 300);
                    };

                    video.onerror = function() {
                        console.error("Error loading video:", wrapper.dataset.videoSrc);
                        if (skeleton) skeleton.style.display = 'none';
                    };
                }
            });
        }
    });
</script>
@endpush