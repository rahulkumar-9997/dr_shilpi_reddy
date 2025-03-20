@extends('frontend.layouts.master')
@section('title','Dr. K Shilpireddy - About Us')
@section('description', 'My father envisioned me as a doctor, specifically an unconventional doctor who would see the depth of a problem')
@section('keywords', 'DR. Shilpi reddy, The Education, Work experiences, photo,')

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
                            <h1>About Me</h1>
                            <p class="text-white mb-0">Dr. K. Shilpi Reddy</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section>
    <div class="w-100 float-left quality-system-con Experince-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h5 class="text-center">
                            “My father envisioned me as a doctor, specifically an unconventional doctor who would
                            see the depth of a problem and treat any physical or physiological issues with 360-degree care and compassion.”
                        </h5>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 d-md-flex align-items-md-end">
                    <div class="quality-system-right-con position-relative text-center overlay-img">

                        <figure class="mb-0 about-dad-img">
                            <img src="{{asset('fronted/shilpi-img/about-image.webp')}}" alt="professional-doctor-img" class="img-fluid">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left core-vaule-con about-qualification">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 d-md-flex align-self-center order-xl-0 order-lg-0 order-md-0 order-2">
                    <div class="form-left-con core-vaule-left-con position-relative text-center">
                        <figure class="mb-0">
                            <img src="{{asset('fronted/shilpi-img/about-qualification.webp')}}" alt="form-left-img" class="mb-0 img-fluid human-img">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="core-vaule-right-con text-xl-left text-lg-left text-md-left text-center">
                        <div class="core-vaule-title">
                            <h2>Educational Qualification</h2>
                        </div>
                        <div class="row ng-star-inserted">
                            <div class="col-md-6 exclDealPoints">
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Professional Understanding" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Schooling from Siva Shivani Public School. She was very active in sports, an athlete by virtue and her thought processes were born in that phase of life, in schooling. </span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="24/7 Help" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span> Junior college from Villa Marie Junior College, Hyderabad.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Feel Connected with India" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Joined MBBS in Mahadevappa Rampure Medical College, Gulbarga (MRMC). She imbibed medical and surgical skills in various disciplines there.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Traditional Indian Food" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Joined Osmania Hospital for house surgency. Osmania gave her the learning of that much needed surgical skill exposure.</span>
                                    </div>
                                </div>
                            </div>
                            <!--second-->
                            <div class="col-md-6 exclDealPoints">
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Multiple Source Materials" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>DNB obstetrics & gynecology in Yashoda Super Specialty Hospital, Hyderabad. under the able guidance of Dr Maleeha Raoof & Dr Vema Padmavati.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Satisfied Customer" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Exclusive laparoscopic training under Dr. Rakesh Sinha of BEAMS Mumbai to develop skills in minimal Invasive surgery (mini-Lap and laparoscopic surgery).</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Careful While Travelling" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Diploma in diabetology from Annamalai University</span>
                                    </div>
                                </div>
                            </div>
                            <!--second-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left logo-con video-pt-20">
        <div class="container text-center">
            
            <div class="row mx-auto my-auto justify-content-center">
                <div class="carousel-wrap">
                    <div class="owl-carousel owl-theme about_us_feature_carousel">
                       
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/1.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/2.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/3.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/4.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/5.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/6.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/7.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature_card">
                                <div class="feature_card_img">
                                    <a href="#">
                                        <img src="{{ asset('fronted/shilpi-img/about-img/8.webp') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left core-vaule-con about-experience Experince-section">
        <div class="container">
            <div class="professional-title text-center">
                <h2>Work experiences</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="core-vaule-right-con text-xl-left text-lg-left text-md-left text-center">
                        <div class="row ng-star-inserted">
                            <div class="col-md-6 exclDealPoints">
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Professional Understanding" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span> She always had a passion to work in remote villages and rural practice was her personal & family interest. In 2003, she started Lalita Devi Nursing Home at Dubbaka, a small village in the then Medak district. Year 2003 was drought affected and severely impacted women. Most of them converted to Beedi workers from that area who needed good antenatal and general care. She was successful in providing quality health care to them in obstetrics, Gynecology, general surgery, ENT and Urological procedure.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="24/7 Help" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>She gave her 100 percent while serving the poor and needy, conducted many health camps, free treatment days, trained woman in self-care & hygiene and helped them understand the importance of pregnancy care. She also trained many local female health workers and anganwadi workers about safe delivery practices, nutrition and its importance in health.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Feel Connected with India" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span> DNB Super Specialty training and high-risk Obstetric care gave refinement to her skills as a surgeon and helped her manage more critical and multi-disciplinary patients in Yashoda hospital.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Traditional Indian Food" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>On deputation training she worked in Swapna Health care for 4 months.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Multiple Source Materials" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>After finishing DNB, she worked at Image Hospital, Ameerpet under the guidance of Dr Krishna Kumari. This was the time Dr.Shilpi was thinking on what her future goals would be …rural Healthcare was always in her mind and wanted to take this passion forward for some more years and give back to the society and who needs her surgical skills.</span>
                                    </div>
                                </div>
                            </div>
                            <!--second-->
                            <div class="col-md-6 exclDealPoints">
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Satisfied Customer" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>With this vision, she started Sai Sri Lalitha Devi Nursing Home in Siddipet in 2007 with 25 beds. It was a specialty center for obstetrics, Gynecology, General surgery, ultrasonography and ENT surgeries. Maternal mortality and morbidity were very high at that time in Siddipet & surrounding rural villages. She provided her relentless services for the needy and to greater challenges in high-risk pregnancy cases to improve the outcomes in women’s health.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Careful While Travelling" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>After more than two years of service in Siddipet, Dr. Shilpi moved back to Hyderabad & started private practice at Anupama Nursing Home, Ameerpet. It was an opportunity to provide service to a mixed population and simultaneously started working as a visiting consultant in Rainbow children’s hospital and Femina Hospital.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Careful While Travelling" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Dr. Shilpi joined Oasis Centre for reproductive medicine in 2011 for exploring the Horizons of fertility and challenges of infertility training under Dr Durga Rao.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Careful While Travelling" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>Then in 2014, she joined The Birthplace hospital as a consultant and became a lead Consultant for their branch in Gachibowli.</span>
                                    </div>
                                </div>
                                <div class="media-col mt-3 ng-star-inserted">
                                    <img alt="Careful While Travelling" class="me-3 rightIconSize ng-star-inserted" src="{{asset('fronted/shilpi-img/correctTick.svg')}}">
                                    <div class="media-body ng-star-inserted">
                                        <span>In 2016 October, she met Dr. Abhinay Bollineni, a young enthusiastic entrepreneur, CEO of KIMS Hospital who believed in young & aspiring Doctors who can bring change in the medical system. They both came together and started the brand KIMS Cuddles mother and child center at Kondapur. This hospital is the center of excellence for obstetrics and gynecology, Neonatology, Fetal medicine and Pediatric care.</span>
                                    </div>
                                </div>
                            </div>
                            <!--second-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection