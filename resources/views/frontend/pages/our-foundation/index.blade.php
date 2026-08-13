@extends('frontend.layouts.master')
@section('title','Our Foundation | Women-Centered Health by Dr. Shilpi Reddy')
@section('description', 'Learn about outreach and awareness programs led by Dr. K. Shilpi Reddy Foundation.')
@section('keywords', 'Our Foundation, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, Our Core Values')

@section('main-content')
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img10">
            @include('frontend.layouts.header-menu')
        </div>
    </div>
</div>
<div class="w-100 float-left header-and-banner-con banner-overlay-img breadcrub">
    <div class="container">
        <div class="overlay-img10">
            <section>
                <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                    <div class="container">
                        <div class="generic-banner-content text-white text-center">
                            <h1>Our Foundation</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<section class="main_foundation">
    <div class="w-100 float-left professional-con some-content">
        <div class="container">
            <div class="text-center">
                <h4>Dr. K. Shilpi Reddy Foundation: Dedicated to Women's Health Care</h4>
                <p>The Dr. K. Shilpi Reddy Foundation is a transformative organization dedicated
                    to empowering women and promoting comprehensive women’s healthcare.
                    With a deep commitment to improving the lives of women, the foundation
                    strives to create a positive impact by addressing the unique challenges
                    and needs faced by women in society.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left professional-con our_foundation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <p>
                            At the heart of the foundation’s mission is the empowerment of women.
                            Through various programs and initiatives, it aims to provide women
                            with the knowledge, resources, and support they need to take control
                            of their health and well-being. This includes raising awareness about important
                            health issues, promoting preventive care, and facilitating access to quality
                            healthcare services. The foundation recognizes that women’s health encompasses
                            a wide range of aspects, including physical, emotional, and mental well-being.
                            It is dedicated to fostering a holistic approach to women’s healthcare by supporting
                            initiatives that focus on reproductive health, maternal care, gynaecological issues,
                            mental health, and overall wellness. By addressing these areas comprehensively,
                            the foundation aims to ensure that women receive the care they deserve and are
                            empowered to make informed decisions about their health.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left service-box-con core_value_box">
        <div class="container">
            <div class="core-vaule-title text-center">
                <h2>Our Core Values</h2>
            </div>
            <div class="service-box-inner-con our_core_value">
                <div class="row ml-0 mr-0">
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 border-right-0 core_value_grid">
                        <div class="service-box-item core_value_service_box text-center">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/women_empowerment.webp')}}" alt="Women Empowerment" class="img-fluid core-value-img" loading="lazy">
                            </figure>
                            <h5>Women Empowerment</h5>
                            <!--<span class="d-block">Lorem ipsum dolor sit amet consectetuer adipi.</span>-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 border-right-0 core_value_grid">
                        <div class="service-box-item core_value_service_box text-center">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/Mental-Health-Awareness.webp')}}" alt="Sustainable development" class="img-fluid core-value-img" loading="lazy">
                            </figure>
                            <h5>Sustainable Development</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 border-right-0 core_value_grid">
                        <div class="service-box-item core_value_service_box text-center">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/Mental Health Awareness.webp')}}" alt="Mental Health Awareness" class="img-fluid core-value-img" loading="lazy">
                            </figure>
                            <h5>Mental Health Awareness</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0 core_value_grid">
                        <div class="service-box-item core_value_service_box text-center">
                            <figure>
                                <img src="{{asset('fronted/shilpi-img/Physical-&-Emotional-Well-Being.webp')}}" alt="Physical & Emotional Well Being" class="img-fluid core-value-img" loading="lazy">
                            </figure>
                            <h5>Physical & Emotional Well Being</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fo-content">
                        <p>
                            Overall, the Dr. K. Shilpi Reddy Foundation stands as a beacon of hope and support, championing women’s empowerment and advocating for comprehensive women’s healthcare, with the ultimate goal of transforming the lives of women and ensuring a brighter and healthier future for all.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(isset($data['schlorship']) && $data['schlorship']->count() > 0)
<section class="tw-relative tw-w-full tw-bg-gradient-to-br tw-from-[#d20048] tw-via-[#d20048] tw-to-[#074560] tw-py-10 tw-px-4 tw-overflow-hidden">
    <div class="tw-relative tw-max-w-7xl tw-mx-auto">
        <div class="tw-text-center tw-mb-10">            
            <h3 class="tw-text-[22px] md:tw-text-[38px] tw-font-bold tw-text-white tw-mb-3 tw-tracking-tight">                
                Scholarships
            </h3>
        </div>
        <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-8 md:tw-gap-10">
            @foreach($data['schlorship'] as $index => $schlorship_row)
            <a href="javascript:void(0);"
               class="scholarship-img-link tw-group tw-relative tw-flex tw-flex-col tw-h-full tw-bg-white/10 tw-backdrop-blur-xl tw-rounded-3xl tw-overflow-hidden tw-shadow-2xl hover:tw-shadow-3xl tw-transition-all tw-duration-500 tw-border tw-border-white/10 hover:tw-border-white/30 tw-transform hover:tw--translate-y-2 hover:tw-scale-[1] hover:tw-no-underline"
               data-schlorshipid="{{ $schlorship_row->id }}"
               data-url="{{ route('schlorship.details', ['id' => $schlorship_row->id]) }}"
               data-schlorship="true"
               data-size="lg">                
                <div class="tw-relative tw-w-full tw-aspect-[4/3] tw-overflow-hidden tw-bg-black/10">
                    <img src="{{ asset('upload/schlorship/'.$schlorship_row->main_image) }}"
                    class="tw-w-full tw-h-full tw-object-contain tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                    alt="{{ $schlorship_row->title }}"
                    loading="lazy">
                </div>
                <div class="tw-relative tw-flex tw-flex-col tw-flex-1 tw-p-6 md:tw-p-7">
                    <h5 class="tw-text-[16px] md:tw-text-[18px] tw-text-white tw-line-clamp-2 tw-leading-tight tw-transition-colors tw-duration-300">
                        {{ $schlorship_row->title }}
                    </h5>
                    <div class="tw-flex-1"></div>
                    <div class="tw-flex tw-items-center tw-justify-between tw-mt-4 tw-pt-4 tw-border-t tw-border-white/10">
                        <span class="tw-text-sm tw-font-semibold tw-text-white/90 tw-flex tw-items-center tw-gap-2">
                            Explore Opportunity
                            <svg class="tw-w-5 tw-h-5 tw-transition-all tw-duration-500 group-hover:tw-translate-x-2 group-hover:tw-scale-110"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="tw-absolute tw-bottom-0 tw-left-0 tw-w-full tw-h-1 tw-bg-gradient-to-r tw-from-[#d20048] tw-via-[#074560] tw-to-[#d20048] tw-scale-x-0 group-hover:tw-scale-x-100 tw-transition-transform tw-duration-500 tw-origin-left"></div>
            </a>
            @endforeach
        </div>
        <div class="tw-text-center tw-mt-16">
            <a href="{{ route('schlorship') }}"
               class="tw-group tw-relative tw-inline-flex tw-items-center tw-gap-3 tw-bg-gradient-to-r tw-from-[#d20048] tw-to-[#074560] hover:tw-from-[#b0003a] hover:tw-to-[#063a4e] tw-text-white tw-font-semibold tw-px-10 tw-py-4 tw-rounded-full tw-shadow-2xl hover:tw-shadow-3xl tw-transition-all tw-duration-500 tw-transform hover:tw--translate-y-1 hover:tw-scale-105 tw-tracking-wide tw-text-base hover:tw-no-underline hover:tw-text-white">
                <span class="tw-relative tw-z-10">Explore All Scholarships</span>
                <svg class="tw-w-5 tw-h-5 tw-transition-transform tw-duration-500 group-hover:tw-translate-x-2" 
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>                
            </a>
        </div>

    </div>
</section>
@endif

@if (isset($data['foundation_category_list']) && $data['foundation_category_list']->count() > 0)
<section class="tw-relative tw-w-full tw-bg-gray-50 tw-py-10 tw-px-4">
    <div class="tw-max-w-7xl tw-mx-auto">
        <div class="tw-text-center tw-mb-6">            
            <h4 class="tw-text-[22px] md:tw-text-[38px] tw-font-bold tw-text-secondary tw-mb-3 tw-tracking-tight tw-leading-8">                
                Our Foundation
            </h4>
        </div>
        <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-3 md:tw-gap-4">
            @foreach($data['foundation_category_list'] as $foundation_category)
                @php $image = $foundation_category->foundationImages->first(); @endphp
                <a href="{{ route('our.foundation.details', ['slug' => $foundation_category->slug]) }}"
                    class="foundation-img-link tw-group tw-relative tw-flex tw-flex-col tw-bg-white tw-rounded-3xl tw-p-2 tw-shadow-sm hover:tw-shadow-xl tw-border tw-border-gray-100 tw-transition-all tw-duration-300 hover:tw--translate-y-1 hover:tw-no-underline"                    
                    title="{{ $foundation_category->name }}">
                    <div class="tw-relative tw-w-full tw-aspect-[4/3] tw-rounded-2xl tw-overflow-hidden tw-mb-2">
                        @if($image)
                        <img src="{{ asset('foundation-img/'.$image->image_path) }}"
                            class="tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-700 group-hover:tw-scale-105"
                            alt="{{ $foundation_category->name }}"
                            loading="lazy">
                        @else
                        <div class="tw-w-full tw-h-full tw-flex tw-items-center tw-justify-center tw-bg-gradient-to-br tw-from-gray-50 tw-via-gray-100 tw-to-gray-200 tw-relative tw-overflow-hidden">
                            <div class="tw-absolute tw-inset-0 tw-opacity-40" style="background-image: repeating-linear-gradient(45deg, #e5e7eb 0, #e5e7eb 1px, transparent 1px, transparent 12px);"></div>
                            <div class="tw-relative tw-flex tw-flex-col tw-items-center tw-gap-2 tw-text-gray-400">
                                <svg class="tw-w-10 tw-h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 8h16M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1z" />
                                </svg>
                                <span class="tw-text-xs tw-font-semibold tw-tracking-wide tw-uppercase">No Image</span>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="tw-flex-1"></div>
                    <div class="tw-relative tw-flex tw-flex-col tw-items-start tw-gap-2 tw-px-2 tw-pt-3 tw-pb-2 tw-mt-auto">
                        <h5 class="tw-text-[17px] md:tw-text-[18px] tw-font-bold tw-text-gray-900 tw-leading-snug tw-line-clamp-1">
                            {{ $foundation_category->name }}
                        </h5>
                        <span class="tw-inline-flex tw-items-center tw-gap-1.5 tw-text-sm tw-font-semibold tw-text-heading-secondary">
                            Explore More
                            <svg class="tw-w-4 tw-h-4 tw-stroke-[#d20048] tw-transition-transform tw-duration-300 group-hover:tw-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<section>
    <div class="w-100 float-left service-box-con core_value_box women-wings">
        <div class="container">
            <div class="text-center">
                <div class="womens-title">
                    <h2>Women's Wings (RERF) Brahma Kumaris</h2>
                    <h4>Telangana Statewide Campaign</h4>
                </div>
            </div>
            <div class="women_wings">
                <div class="row">
                    <div class="col-lg-7 col-md-7 d-flex align-items-center">
                        <div class="quality-system-left-con">
                            <p>
                                Experience a month brimming with inspiration and transformation!
                                From July 30th to September 16th, 2023, witness a captivating journey
                                dedicated to fostering harmonious families, empowering children, and
                                uplifting women. Our focus encompasses promoting familial peace, happiness,
                                and safety, while providing practical solutions to children’s behavioral
                                challenges. We’re dedicated to advancing women’s education, health, and
                                security, all while raising awareness about spirituality and the profound
                                effects of meditation. Engage with captivating talks, immersive exhibitions,
                                cultural presentations, audio-visual displays, and heartwarming competitions.
                                This event, hosted by the Women’s Wing (RERF) Brahma Kumaris, Telangana,
                                culminates in a grand Valedictory and Expo on September 16th, 2023,
                                at Shanti Sarovar, Gachibowli, Hyderabad.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 d-md-flex align-items-center">
                        <div class="quality-system-right-con position-relative text-center overlay-img">
                            <figure class="mb-4 about-dad-img">
                                <img src="{{asset('fronted/shilpi-img/TELANGANA_STATEWIDE_CAMPAIGN_1.webp')}}" alt="professional-doctor-img" class="img-fluid" loading="lazy">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 d-md-flex align-items-center">
                        <div class="quality-system-right-con position-relative text-center overlay-img">
                            <figure class="mb-4 about-dad-img">
                                <img src="{{asset('fronted/shilpi-img/TELANGANA_STATEWIDE_CAMPAIGN_2.webp')}}" alt="professional-doctor-img" class="img-fluid" loading="lazy">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 d-flex align-items-center">
                        <div class="quality-system-left-con">
                            <p>
                                Women and the family system form the foundation of our society. Their profound
                                impact in shaping our society and shaping our future is immeasurable, driven
                                by their nurturing love, inspiring guidance and boundless energy. Serving as
                                the bedrock of our community, women skillfully manage and care for their
                                families and instill valuable qualities and behaviors in their children.
                                Families bring comfort, stability and mutual support. Women are crucial
                                in building resilient and cohesive family units. Let us find inner peace,
                                desirable values ​​and spiritual growth, and let us value and recognize family.
                                Sincere thanks for organizing this program all over Telangana to spread this
                                spiritual message.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 float-left Experince-section upcoming_activity">
        <div class="container">
            <div class="text-center">
                <div class="core-vaule-title">
                    <h2>Upcoming Activity</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="quality-system-left-con">
                        <div class="activity-20">
                            <p>
                                Dr. K. Shilpi Reddy Foundation also targets to successfully complete other campaigns related to women’s health, care, empowering the women in society, and transforming their lives in a better way. In the year
                                2023 to 2024 we plan to initiate and conduct several campaigns as below.
                            </p>
                        </div>
                        <div class="col-lg-121">
                            <div class="row">
                                <div class="col-lg-6 mb-10">
                                    <div class="activity-list">
                                        <ul class="list-style">
                                            <li>
                                                Women's health awareness initiative
                                            </li>
                                            <li>
                                                Health camps for women of Andhra Pradehs & Telangana
                                            </li>
                                            <li>
                                                Distribution of personal care and hygiene kits for girls in Government Schools
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-10">
                                    <div class="activity-list">
                                        <ul class="list-style">
                                            <li>
                                                Distribution of essential medicational kits for old age homes
                                            </li>
                                            <li>
                                                Blood donation camps
                                            </li>
                                            <li>
                                                Mega health camps for senior citizens
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </DIV>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="activity-10">
                        <p>
                            Through these drives we might not change the world but, it is a start
                            towards a better future for many women and even a small step of contribution
                            towards these essential efforts can change someone’s life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left quality-system-con Experince-section empowering_women">
        <div class="container">
            <div class="text-center">
                <div class="core-vaule-title">
                    <h2>Empowering Women, Transforming Lives</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="quality-system-left-con text-center">
                        <p>
                            We would be grateful if a considerable amount is supported from your side
                            towards the welfare of society’s women.
                            <BR>
                            For enquiries and support, kindly contact the below.
                        </p>
                        <a href="{{url('contact-us') }}" class="appointment-btn foundation_btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="{{asset('fronted/js/schlorship.js') }}?v={{ env('ASSET_VERSION', '1.0.0') }}"></script>
@endpush