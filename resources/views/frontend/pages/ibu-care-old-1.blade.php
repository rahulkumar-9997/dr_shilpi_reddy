@extends('frontend.layouts.master')
@section('title','IBU Care - Dr. K Shilpireddy')
@section('description', 'Welcome to IBU Care Aesthetic Gynaecology, Laser & Obstetrics Clinic.')
<!-- @section('keywords', 'sharing, sharing text, text, sharing photo, photo,') -->

@section('main-content')
    <div class="w-100 float-left header-and-banner-con banner-overlay-img">
        <div class="container">
            <div class="overlay-img">
                <!-- navbar-start -->
                @include('frontend.layouts.header-menu')
                <!-- navbar-end -->
                <section>
                    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                        <div class="container">
                            <div class="generic-banner-content text-white text-center ibu_care_main">
                            <div class="ibu_care_logo_div">
                                <img src="{{asset('fronted/shilpi-img/ibu_care_logo.png')}}" alt="IBU Care logo" class="ibu_care_logo">
                                <h4>ibu<span>care</span></h4>
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
    <section class="blog-posts ibu_care_page w-100 float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center padding-b10 ibu_care_main">
                    <h2>Aesthetic Gynaecology Laser & Obstetrics clinic</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div id="blog" class="three-column">
                    <div class="post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                            <div class="post-image">
                                
                                <a href="#">
                                <img alt="" src="{{asset('fronted/shilpi-img/IBU-Care-main-banner.webp')}}">
                                
                            </div>
                            <div class="post-item-description">
                                <!--<span class="post-meta-date">
                                <i class="fa fa-calendar-o"></i>Jan 21, 2017
                                </span>-->
                                <p>
                                Welcome to IBU Care Aesthetic Gynaecology, Laser & Obstetrics 
                                Clinic, where the realm of aesthetics converges with the 
                                expertise of gynaecology to provide exceptional solutions 
                                for cosmetic gynecology under the esteemed guidance of Dr.
                                K Shilpi Reddy. Our clinic is dedicated to offering specialized
                                care for women seeking cosmetic gynecology procedures, ensuring 
                                that each woman’s unique needs are met with precision, artistry, 
                                and compassionate support.
                                </p>
                                <h2>
                                <a href="#">About Dr. K Shilpi Reddy:</a>
                                </h2>
                                <p>
                                Dr. K Shilpi Reddy is a distinguished name in the field 
                                of gynaecology, renowned for her expertise in aesthetic
                                gynaecology, obstetrics, and reproductive health. With a 
                                commitment to patient care and extensive experience, Dr.
                                Reddy leads our team in providing expert care for cosmetic
                                gynecology.
                                </p>
                                <h2>
                                <a href="#">Our Approach to Cosmetic Gynecology:</a>
                                </h2>
                                <p>
                                At IBU Care, we understand that cosmetic gynecology is a 
                                deeply personal journey that involves both physical and 
                                emotional aspects. Our approach combines medical excellence,
                                artistic considerations, and emotional support to ensure that
                                women undergo cosmetic gynecology procedures with confidence,
                                aesthetic consideration, and a sense of well-being. Our services
                                encompass:
                                </p>
                                <h2 >
                                <a style="color:#78CCCE" href="#">Why Choose IBU Care for Cosmetic Gynecology:</a>
                                </h2>
                                <h2>
                                <a href="#">Expertise:</a>
                                </h2>
                                <p>Dr. K Shilpi Reddy’s expertise guarantees the highest quality of cosmetic gynecology care.</p>
                                <h2>
                                <a href="#">Holistic Approach:</a>
                                </h2>
                                <p>
                                Our approach addresses medical, emotional, and aesthetic aspects, ensuring a comprehensive experience.
                                </p>
                                <h2>
                                    <a href="#"> Precision and Artistry:</a>
                                </h2>
                                <p>
                                We focus on achieving precise medical outcomes while considering aesthetic well-being.
                                </p>
                                <h2>
                                    <a href="#">  Aesthetic Integration:</a>
                                </h2>
                               <p>
                                Dr. Reddy’s expertise in aesthetic gynaecology adds a unique dimension to our cosmetic gynecology services.
                                IBU Care Aesthetic Gynaecology, Laser & Obstetrics Clinic is dedicated to providing women with cosmetic gynecology solutions that prioritize both medical precision and aesthetic consideration. With Dr. K Shilpi Reddy and her skilled team by your side, you’ll find a compassionate and comprehensive approach to cosmetic gynecology that ensures your well-being, confidence, and beauty are at the forefront. Let us be your partner in achieving optimal results and aesthetic comfort.
                               </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar-panel col-xl-3 col-lg-3">
                    <div class="theiaStickySidebar">
                    <div class="widget widget-categories border">
                        <div class="widget-title font_weight_600">ibu<span>care</span></div>
                            @if (isset($data['ibucare_list']) && $data['ibucare_list']->count() > 0)
                                <ul>
                                    @foreach($data['ibucare_list'] as $ibucare_list_row)
                                        <li class="cat-item">
                                            <a href="{{url('ibu-care/'.$ibucare_list_row->slug.'') }}">{{$ibucare_list_row->title}}</a>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection