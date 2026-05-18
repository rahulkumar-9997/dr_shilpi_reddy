@extends('frontend.layouts.master')
@section('title','Our Foundation | Women-Centered Health by Dr. Shilpi Reddy')
@section('description', 'Learn about outreach and awareness programs led by Dr. K. Shilpi Reddy Foundation.')
@section('keywords', 'Our Foundation, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, Our Core Values')

@section('main-content')
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img">
            <!-- navbar-start -->
            @include('frontend.layouts.header-menu')
            <!-- navbar-end -->
        </div>
    </div>
</div>
<div class="w-100 float-left header-and-banner-con banner-overlay-img breadcrub">
    <div class="container">
        <div class="overlay-img">
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
<section class="schlorship_section w-100 float-left">
<div class="schlorship-div">
    <div class="container">
        <div class="schlorship-title text-center">
            <h2>Scholarship</h2>
        </div>
        <div class="our_core_value">
            <div class="row ml-0 mr-0">
                @foreach($data['schlorship'] as $index => $schlorship_row)
                <div class="col-md-6 px-2 mb-4">
                    <div class="scholarship-card">
                        <div class="scholarship-img-ratio">
                            <a href="javascript:void(0);" class="scholarship-img-link" data-schlorshipid="{{ $schlorship_row->id }}" data-url="{{ route('schlorship.details', ['id' => $schlorship_row->id]) }}" data-schlorship="true" data-size="lg">
                                <div class="scholarship-img">
                                    <img src="{{asset('upload/schlorship/'.$schlorship_row->main_image)}}" class="img-fluid"
                                        alt="{{$schlorship_row->title}}">
                                </div>
                            </a>
                        </div>
                        <div class="scholarship-text">
                            <h5>{{$schlorship_row->title}}</h5>                            
                        </div>
                    </div>
                </div>                
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fo-content text-center">
                        <a href="{{ route('schlorship') }}" class="appointment-btn ">View More Scholarships</a>
                    </div>
                </div>
            </div>

        </div>        
    </div>
</div>
</section>
@endif
@if (isset($data['foundation_category_list']) && $data['foundation_category_list']->count() > 0)
    <section class="foundation-img-section mt-10">
        <div class="w-100 float-left professional-con media-box">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-12 col-lg-12">
                        <ul class="nav nav-pills foundation-pills">
                            @foreach($data['foundation_category_list'] as $index => $foundation_category_row)
                                <li class="nav-item">
                                    <a class="nav-link {{ $index == 0 ? 'active' : '' }}" 
                                       data-toggle="pill" 
                                       href="javascript:void(0);" 
                                       data-id="{{ $foundation_category_row->id }}" 
                                       role="tab" 
                                       aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                        {{ $foundation_category_row->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="foundation-image-area">
                    @if(isset($data['foundation_category_list'][0]))
                        @include('frontend.pages.partials.foundation-category-details', [
                            'category_id' => $data['foundation_category_list'][0]->id
                        ])
                    @endif
                </div>
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

<script>
    var foundationCategoryUrl = "{{ url('foundation-cate-image') }}";
</script>
<script src="{{asset('fronted/js/foundation-category.js') }}?v={{ env('ASSET_VERSION', '1.0.0') }}"></script>
<script src="{{asset('fronted/js/schlorship.js') }}?v={{ env('ASSET_VERSION', '1.0.0') }}"></script>
@endpush