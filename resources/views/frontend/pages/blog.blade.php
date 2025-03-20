@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title','Dr. K Shilpireddy - Blogs')
@section('description', 'Choose lean meat, remove the skin from poultry, and try not to add extra fat or oil when cooking meat. Read more about healthily eating meat.')
@section('keywords', 'Our Blogs,  Hyderabad, Dr. K Shilpireddy Hyderabad, Dr. K Shilpireddy, photo,')

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
                                <h1>Our Blogs</h1>
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>

    
    <section class=" blog-posts w-100 float-left blog_list">
        <div class="container">
            <div class="row">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                    @if (isset($data['blog_list']) && $data['blog_list']->count() > 0)
                        @foreach($data['blog_list'] as $blog_list_row)
                        @php
                            if ($blog_list_row->is_external == 1) {
                                $blog_url = $blog_list_row->external_url;
                            } else {
                                $blog_url = url('blog/' . $blog_list_row->slug);
                            }
                        @endphp
                        <div class="col-md-4">
                            <div class="float-left w-100 post-item border mb-4 blog_list_height">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="{{ $blog_url }}">
                                            @if($blog_list_row->intro_image)
                                                <img alt="{{$blog_list_row->title}}" src="{{asset('blog-img/intro/'.$blog_list_row->intro_image) }}" loading="lazy">
                                            @else                                                  
                                                <img src="{{asset('fronted/shilpi-img/blog/obesity-and-pregnancy.png') }}" alt="{{$blog_list_row->title}}" loading="lazy">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>
                                            <a href="{{ $blog_url }}">{{$blog_list_row->title}}</a>
                                        </h2>
                                    <p>
                                    {!! strip_tags(substr($blog_list_row->intro_description, 0, 120)) !!}
                                    </p>
                                    <a href="{{ $blog_url }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <!--Blog code static-->
                    <!--<div class="col-md-4">
                        <div class="float-left w-100 post-item border mb-4 blog_list_height">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="https://www.kimscuddles.com/blog/obesity-and-pregnancy">
                                        <img alt="Obesity and Pregnancy" src="{{asset('fronted/shilpi-img/blog/obesity-and-pregnancy.png')}}" loading="lazy">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>
                                        <a href="https://www.kimscuddles.com/blog/obesity-and-pregnancy">Obesity and Pregnancy</a>
                                    </h2>
                                <p>
                                {!! strip_tags(substr('Obesity is when your BMI is 30 or higher. To calculate your body mass index, divide your weight in kilograms by your height in meters squared.', 0, 80)) !!}
                                </p>
                                <a href="https://www.kimscuddles.com/blog/obesity-and-pregnancy" class="item-link" >Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="float-left w-100 post-item border mb-4 blog_list_height">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="https://www.drkshilpireddy.com/how-to-get-the-right-nutrients/">
                                        <img alt="Bleeding in Pregnancy" src="{{asset('fronted/shilpi-img/blog/bleeding-in-pregnancy.png')}}" loading="lazy">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>
                                        <a href="https://www.drkshilpireddy.com/how-to-get-the-right-nutrients/">Bleeding in Pregnancy</a>
                                    </h2>
                                <p>
                                {!! strip_tags(substr('Bleeding during pregnancy is relatively common, but it can be a dangerous sign.', 0, 80)) !!}
                                </p>
                                <a href="https://www.drkshilpireddy.com/how-to-get-the-right-nutrients/" class="item-link" >Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--Blog code static-->
                    </div>
                </div>
            </div>
        </div>
        </section>  
@endsection