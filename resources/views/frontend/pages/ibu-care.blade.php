@extends('frontend.layouts.master')
@section('title','IBU Care | Integrated Support for Women by Dr. Shilpi Reddy')
@section('description', 'IBU Care empowers women with emotional, mental and physical support during motherhood.')
@section('keywords', 'Core Components of
WOW MOM, Time Bound Lab Diagnostics, Nutrition support, Prenatal Yoga, Normal Delivery, Stem Cell Bank')

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
                            <div class="generic-banner-content text-white text-center ibu_care_main">
                            <div class="ibu_care_logo_div">
                                <!--<img src="{{asset('fronted/shilpi-img/ibu_care_logo.png')}}" alt="IBU Care logo" class="ibu_care_logo" loading="lazy">
                                 <h4>ibu<span>care</span></h4>
                                -->
                                <img src="{{asset('fronted/shilpi-img/ibu_care_logo_2.png')}}" alt="IBU Care logo" class="ibu_care_logo" loading="lazy">
                               
                            </div>
                            <!--<h5>Aesthetic Gynaecology Laser & Obstetrics clinic</h5>-->
                            <!--<p class="text-white mb-0">Women's wings (RERF) Brahma Kumaris</p>-->
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>

    <section class="blog-posts mobile-wow ibu_care_page w-100 float-left single-wow">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-responsive wow-mom-img" alt="pregency" src="{{asset('fronted/shilpi-img/pregency-1.jpeg')}}" loading="lazy">
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div id="blog" class="three-column blog-details">
                        <div class="post-item box-shadow mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-item-description">
                                    <div class=" padding-b10 ibu_care_main">
                                        <h1>Complete Maternal Health Care for Expecting Mothers</h1>
                                    </div>
                                    <p>
                                    Wow Mom is for those women who are expecting a baby, where they are given holistic support for their mental, physical, emotional, and mental well-being.
                                    Wow Mom provides comprehensive support to pregnant women through their experts, right from their expert medical care to their personalized wellness plan. Wow Mom's goal is to help pregnant women take care of not only their health but also their mental and spirit so that they can enjoy their pregnancy and easily handle the changes that happen during pregnancy.
                                    </p>
                                    <div class="ibu-care-content schedule ">
                                        <div class="schedule-inner">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="single-schedule first">
                                                        <div class="inner">
                                                            <div class="icon">
                                                                <i class="fa fa-ambulance"></i>
                                                            </div>
                                                            <div class="single-content">
                                                                <p>
                                                                    A comprehensive maternal health
                                                                    care program designed for
                                                                    expecting mothers.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="single-schedule first">
                                                        <div class="inner">
                                                            <div class="icon">
                                                                <i class="fa fa-ambulance"></i>
                                                            </div>
                                                            <div class="single-content">
                                                                <p>
                                                                    Focus on complete clinical,
                                                                    physical, emotional, and mental
                                                                    well-being throughout pregnancy.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (isset($data['ibucare_list']) && $data['ibucare_list']->count() > 0)
                @php
                    $i=1;          
                @endphp
                <div class="col-lg-12">
                    <div class="wow_mom_list">
                        <div class="widget">
                            <h3 class="wow_mom_title">Core Components of
                                <br>
                                <span class="wow-text">IBU</span> <span class="mom-text">Care</span>
                            </h3>
                            <div class="row">
                                <div class="col-lg-12 padding-top">
                                    @foreach($data['ibucare_list'] as $ibucare_list_row)
                                        @if($i%2 ==0)
                                            <div class="wow_mom_start">
                                                <div class="last">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="mom-img">
                                                                <img class="wow-mom-img" alt="{{$ibucare_list_row->title}}" src="{{ asset('ibucare-img/main-img/'.$ibucare_list_row->img_file) }}" class="img-responsive" loading="lazy">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-5 d-flex align-items-center">
                                                            <div class="mom-content">
                                                                <div class="ibucare_details">
                                                                    <div class="padding-b10 ibu_care_main">
                                                                        <h2>{{$ibucare_list_row->title}}</h2>
                                                                    </div>
                                                                    {!!$ibucare_list_row->description!!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        <div class="wow_mom_start">
                                                <div class="last">
                                                    <div class="row">
                                                        <div class="col-lg-5 d-flex align-items-center">
                                                            <div class="mom-content">
                                                                <div class="ibucare_details">
                                                                    <div class="padding-b10 ibu_care_main">
                                                                        <h2>{{$ibucare_list_row->title}}</h2>
                                                                    </div>
                                                                    {!!$ibucare_list_row->description!!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-5">
                                                            <div class="mom-img">
                                                                <img class="wow-mom-img" alt="{{$ibucare_list_row->title}}" src="{{ asset('ibucare-img/main-img/'.$ibucare_list_row->img_file) }}" class="img-responsive" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    
                                    
                                    @php
                                        $i++;          
                                    @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
      
@endsection