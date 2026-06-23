@extends('frontend.layouts.master')
@section('title','Dr. K. Shilpireddy - Contact Us')
@section('description', 'I Look forwards in treating and giving the best consultancy to all my patients in the hospital')
@section('keywords', 'Our Blogs,  Hyderabad, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, Contact,')

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
                                <h1>Contact</h1>
                                <p class="text-white mb-0">Make Schedule Easier and Simpler for Patients</p>
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>
    
    <section>
        <div class="w-100 float-left Schedule-con">
            <div class="container">
                <!--<div class="Schedule-heading text-center">
                    <h2>Make Schedule Easier and <br>
                    Simpler for Patients
                    </h2>
                    </div>-->
                <div class="Schedule-box text-md-left text-center">
                    <div class="row">
                    <div class="col-lg-6 d-flex justify-content-between">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="Schedule-box-item position-relative w-100 float-left">
                                <figure class="mb-0 float-md-left overlay-img">
                                    <img src="{{asset('fronted/image/Schedule-icon1.png')}}" alt="Schedule-icon" class="img-fluid" loading="lazy">
                                </figure>
                                <div class="Schedule-box-title float-md-left overlay-img">
                                    <h5>Email</h5>
                                    <span class="d-block">
                                        <a href="mailto:drkshilpireddy@gmail.com">drkshilpireddy@gmail.com</a>
                                    </span>
                                    <!--<span class="d-block">help@medtexh.com</span>-->
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="Schedule-box-item position-relative w-100 float-left">
                                <figure class="mb-0 float-md-left overlay-img">
                                    <img src="{{asset('fronted/image/Schedule-icon2.png')}}" alt="Schedule-icon" class="img-fluid" loading="lazy">
                                </figure>
                                <div class="Schedule-box-title float-md-left overlay-img">
                                    <h5>Location</h5>
                                    <span class="d-block">Kims Cuddles, Kondapur,<br> Hyderabad, Telangana 500084</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="Schedule-box-item position-relative w-100 float-left mb-md-0">
                                <figure class="mb-0 float-md-left overlay-img">
                                    <img src="{{asset('fronted/image/Schedule-icon3.png')}}" alt="Schedule-icon" class="img-fluid" loading="lazy">
                                </figure>
                                <div class="Schedule-box-title float-md-left overlay-img contact_no">
                                    <h5>Phone No.</h5>
                                    <span class="d-block"><a href="tel:+919503606049">+91 95036 06049</a></span>
                                    <!--<span class="d-block">+234 56 789 012</span>-->
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Schedule-box-item position-relative w-100 float-left">
                             @include('frontend.pages.common.enquiry-form', [
                                'buttonText' => 'Send Message',
                                'formType' => 'contactUsPage'
                            ])
                        </div>
                    </div>
                    <!--<div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left mb-0">
                            <figure class="mb-0 float-md-left overlay-img">
                                <img src="assets/image/Schedule-icon4.png" alt="Schedule-icon" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="Schedule-box-title float-md-left overlay-img">
                                <h5>Working Hours</h5>
                                <span class="d-block">Monday - Friday: 8AM - 9PM</span>
                                <span class="d-block"> Weekends: Closed</span>
                            </div>
                        </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="w-100 float-left map-con">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d121787.79535573887!2d78.28546233928465!3d17.46600193534649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bcb93bafe1d57a5%3A0xd627101016a17ac8!2sSurvey%20No%2055%2FEE%2C%20beside%20Union%20Bank%2C%20near%20RTA%20Office%2C%20Hanuman%20Nagar%2C%20Shilpa%20Hills%2C%20Kondapur%2C%20Hyderabad%2C%20Telangana%20500084!3m2!1d17.466018899999998!2d78.36786409999999!5e0!3m2!1sen!2sin!4v1718271104261!5m2!1sen!2sin" style=" height:360px; width: 100%; border: 0;"></iframe>
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51641910.033771195!2d109.09423828124999!3d-37.814123701604444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1640952396499!5m2!1sen!2s"  style=" height:360px; width: 100%; border: 0;"></iframe>-->
        </div>
    </div>
@endsection