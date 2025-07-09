@extends('frontend.layouts.master')
@section('title','Donate to Support Women\'s Health | Dr. K. Shilpi Reddy')
@section('description', 'Contribute to Dr. K. Shilpi Reddy\'s foundation supporting women\'s hygiene, wellness and rural health programs.')
@section('meta')
<meta property="og:title" content="Dr. K. Shilpireddy - Donation" />
<meta property="og:description" content="Every help made counts for a bigger cause. Let us plant trees and make this earth a better place for our brighter future." />
<meta property="og:image" content="{{asset('fronted/shilpi-img/donation/phonepe-scanner.jpeg')}}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Dr. K. Shilpireddy" />
@endsection
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

<div class="pt-5 donation banner-section w-100 float-left" style="background: linear-gradient(to bottom, #f9f9f9 -18%, #D20048 63%);">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div>
                    <h1 class="display-4 ">One Girl, One Tree, <br>One Nation, Green Nation.</h1>
                    <p>Every help made counts for a bigger cause. Let us plant trees and make this earth a better place for our brighter future.</p>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <img src="{{asset('fronted/shilpi-img/donation/3.png')}}" alt="doctor" class="img-fluid position-relative">
            </div>
        </div>
    </div>
</div>
<div class="donation-scanner-section">
    <div class="w-100 float-left blog-con hom_blog_page">
        <div class="container">
            <div class="text-center">
                <h2>Donate Now</h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-4">
                    <a href="{{asset('fronted/shilpi-img/donation/phonepe-scanner.jpeg')}}">
                        <figure class="mb-0">
                            <img src="{{asset('fronted/shilpi-img/donation/phonepe-scanner.jpeg')}}" alt="phonepe" class="img-fluid" loading="lazy">
                        </figure>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="w-100 float-left donation-con donation-bottom-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center donation-content-area">
                <div class="quality-system-left-con">
                    <h2>Plantation by <span>Dr. K. Shilpi Reddy Foundation</span> for every girl child born in KIMS Hospital Kondapur.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-100 float-left donationpb30"></div>
@endsection