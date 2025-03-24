
@extends('frontend.layouts.master')
@section('title', $ibucare->title . ' - Dr. K. Shilpireddy')
@section('description', substr($ibucare->description, 0, 70))
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
                                <img src="{{asset('fronted/shilpi-img/wow_mom_white.png')}}" alt="IBU Care logo" class="ibu_care_logo" loading="lazy">
                                
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
    <section class="blog-posts ibu_care_page ibu_care_details w-100 float-left">
        <div class="container">
            
            <div class="row">
                
                <div class="col-xl-8 col-lg-8">
                    <div id="blog" class="blog-details three-column">
                    
                    <div class="post-item box-shadow1 mb-4">
                        <div class="post-item-wrap position-relative">
                            <div class="post-item-description">
                                <div class="col-lg-12">
                                    <div class="text-center padding-b10 ibu_care_main">
                                    <h2>{{$ibucare->title}}</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 image-left1">
                                        <div class="post-image">
                                            <a href="#">
                                                <img alt="" src="{{ asset('ibucare-img/main-img/'.$ibucare->img_file) }}" class="img-responsive" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 image-left1 d-flex align-items-center">
                                        <div class="ibucare_details">
                                            {!!$ibucare->description!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar-panel col-xl-4 col-lg-4 col-lg-3 mobile-order">
                    <div class="theiaStickySidebar">
                    <div class="widget widget-categories box-shadow1">
                        <div class="widget-title font_weight_600">Core Components of <br>WOW MOM</div>
                            @if (isset($data['ibucare_list']) && $data['ibucare_list']->count() > 0)
                            @php
                              $i=0;          
                            @endphp
                                <ul>
                                    @foreach($data['ibucare_list'] as $ibucare_list_row)
                                        @php
                                        $class_current ='';
                                        if($ibucare->slug==$ibucare_list_row->slug){
                                            $class_current = "currentibucare";
                                        }
                                        @endphp
                                        <li class="cat-item" style="background-color: {{ !empty($array_color) && isset($array_color[$i]) ? $array_color[$i] : '#ffffff' }};">
                                            <a href="{{url('ibu-care/'.$ibucare_list_row->slug.'') }}" class="{{$class_current}}">{{$ibucare_list_row->title}}</a>
                                        </li>
                                        @php
                                        $i++;          
                                        @endphp
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