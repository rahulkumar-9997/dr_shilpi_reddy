@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title','Blog | Insights on Pregnancy, Fertility & Women\'s Health')
@section('description', 'Read blogs offering tips and awareness on fertility, pregnancy, and holistic wellness.')
@section('keywords', 'Our Blogs,  Hyderabad, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, photo,')

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
                                <h1>Our Blogs</h1>
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>    
    <section class=" blog-posts w-100 float-left blog_list blog-list-section">
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
                            <div class="float-left post-item border mb-4 blog_list_height">
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
                                        <div class="read_more_class">
                                            <a href="{{ $blog_url }}" class="item-link read_more_btn">Read More <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                        
                    @endif                    
                    </div>
                    @if ($data['blog_list']->hasPages())
                        <div class="my-pagination mt-2 mb-2">
                            {{ $data['blog_list']->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        </section>  
@endsection