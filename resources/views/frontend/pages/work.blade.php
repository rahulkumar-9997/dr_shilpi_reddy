@php
use App\Models\OurWorkImage;
@endphp
@extends('frontend.layouts.master')
@section('title','Work & Initiatives | Women\'s Wellness by Dr. Shilpi Reddy')
@section('description', 'Explore events, workshops, and impactful initiatives led by Dr. K. Shilpi Reddy.')
@section('keywords', 'Cuddles Baby Shower, Womens Health Conclave, Womens wings (RERF) Brahma Kumaris, photo')

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
                            <h1>Work</h1>
                            <!-- <p class="text-white mb-0">Dr. K. Shilpi Reddy</p> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section class=" blog-posts w-100 float-left work_page work-load">
    <div class="container">
        <div class="row">
            <div id="blog" class="col-xl-12">
                @if (isset($data['our_work_list']) && $data['our_work_list']->count() > 0)
                <div class="row">

                    @foreach($data['our_work_list'] as $our_work_list_row)
                    @php
                    $our_work_multiple_image = OurWorkImage::where(['our_work_id' => $our_work_list_row->id])->limit(5)->get();
                    @endphp
                    <div class="col-xl-4 mb-4">
                        <div class="float-left w-100 post-item border  work-div">
                            <div class="post-item-wrap position-relative ">
                                <div id="blogslider_{{$our_work_list_row->id}}" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
                                    <div class="carousel-inner">
                                        @php $sr_no = 1; @endphp
                                        @foreach($our_work_multiple_image as $our_work_image_row)
                                        <div class="carousel-item {{ $sr_no == 1 ? 'active' : '' }}">
                                            <img src="{{ asset('our-work/main-img/' . $our_work_image_row->our_work_image) }}" alt="work" loading="lazy" class="d-block w-100">
                                        </div>
                                        @php $sr_no++; @endphp
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#blogslider_{{$our_work_list_row->id}}" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#blogslider_{{$our_work_list_row->id}}" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>
                                        <a href="{{url('work/'.$our_work_list_row->slug.'') }}">{{$our_work_list_row->heading_name}}
                                        </a>
                                    </h2>
                                    <div class="work_details8">
                                        {!! substr($our_work_list_row->our_work_content, 0, 150) !!}
                                    </div>
                                    <div class="read_more_class">
                                        <a href="{{url('work/'.$our_work_list_row->slug.'') }}" class="item-link read_more_btn">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left professional-con-padding work_banner_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="quality-system-left-con">
                        <h3>
                            I believe in the motto of serving my
                            patients with hard work and awareness
                            about the correct knowledge
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="w-100 float-left quality-system-con Experince-section our-work-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 image_grid">
                    <div class="quality-system-right-con position-relative text-center work-img-div overlay-img">
                        <figure class="mb-0">
                            <a href="{{ route('ibu-care') }}">
                                <img src="{{asset('fronted/shilpi-img/fav-icon/ibu_care.webp')}}" alt="professional-doctor-img" class="img-fluid work_img" loading="lazy">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 image_grid">
                    <div class="quality-system-right-con position-relative work-img-div text-center overlay-img">
                        <figure class="mb-0">
                            <a href="https://www.mrsmomevent.com/" target="_blank">
                                <img src="{{asset('fronted/shilpi-img/fav-icon/mr_mom.webp')}}" alt="professional-doctor-img" class="img-fluid work_img" loading="lazy">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 image_grid">
                    <div class="quality-system-right-con position-relative work-img-div text-center overlay-img">
                        <figure class="mb-0">
                            <a href="{{ route('our-foundation') }}">
                                <img src="{{asset('fronted/shilpi-img/fav-icon/our_foundation.webp')}}" alt="professional-doctor-img" class="img-fluid work_img" loading="lazy">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection