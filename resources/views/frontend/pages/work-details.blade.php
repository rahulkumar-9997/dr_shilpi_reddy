@php 
use App\Models\OurWorkImage;
@endphp
@extends('frontend.layouts.master')
@section('title', $our_work->heading_name . ' - Dr. K Shilpireddy')
@section('description', substr($our_work->our_work_content, 0, 70))
@section('keywords', 'Cuddles Baby Shower, Womens Health Conclave, Womens wings (RERF) Brahma Kumaris, photo')

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
                            <h1>Our Work</h1>
                            <p class="text-white mb-0">{{$our_work->heading_name}}</p>
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>
    
    <section>
        <div class="w-100 float-left professional-con">
            <div class="container">
                <div class="professional-title">
                {!! $our_work->our_work_content !!}
                </div>
                <div class="professional-box">
                    <div class="row grid-services">
                        @php 
                        $our_work_multiple_image = OurWorkImage::where(['our_work_id' => $our_work->id])->orderBy('id','DESC')->get();
                        if ($our_work_multiple_image){
                        @endphp
                        @foreach($our_work_multiple_image as $image) 
                            <div class="col-lg-4 col-md-4 ">
                                <article class="single_blog agree_bazar_image">
                                    <figure>
                                        <div class="blog_thumb">
                                        <a class="lightbox" title="" data-fancybox="images-1" data-caption="" href="{{ asset('our-work/main-img/' . $image->our_work_image) }}">
                                            <div class="media">
                                                <img src="{{ route('resize.image', ['filename' => $image->our_work_image, 'width' => 400, 'height' => 400]) }}" alt="" class="img-responsive main-img" loading="lazy">
                                            </div>
                                        </a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                        @php
                        }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection