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
                                    <div class="post-image tw-relative tw-overflow-hidden tw-image-shine product-img tw-aspect-auto">
                                        <a href="{{ $blog_url }}">
                                            @if($blog_list_row->intro_image)
                                                <img alt="{{$blog_list_row->title}}" src="{{asset('blog-img/intro/'.$blog_list_row->intro_image) }}" loading="lazy"
                                                class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-object-contain  tw-transition-transform tw-duration-600 tw-group-hover/product:scale-105 tw-blur-up">
                                            @else                                                  
                                                <img src="{{asset('fronted/shilpi-img/blog/obesity-and-pregnancy.png') }}" alt="{{$blog_list_row->title}}" loading="lazy">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <div class="tw-flex tw-items-center tw-justify-between tw-mb-3">
                                            <div class="tw-flex tw-items-center tw-gap-3 tw-text-[18px] tw-text-gray-500">
                                                <span class="tw-flex tw-items-center tw-gap-1.5 tw-text-sm tw-text-gray-500 tw-bg-gray-50 tw-px-3 tw-py-1.5 tw-rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="tw-w-4 tw-h-4 tw-text-secondary group-hover/views:tw-scale-110 tw-transition-transform tw-duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0s-3.6 7-9 7-9-7-9-7 3.6-7 9-7 9 7 9 7z"/>
                                                    </svg>
                                                    <span class="tw-text-sm tw-font-semibold tw-text-heading-secondary">
                                                        {{ number_format($blog_list_row->visit_count) }}
                                                    </span>
                                                    <span class="tw-font-medium tw-text-heading-secondary">views</span>
                                                </span>
                                                
                                                @if(isset($blog_list_row->blog_post_date))
                                                    <span class="tw-flex tw-items-center tw-gap-1.5 tw-text-sm tw-text-gray-500 tw-bg-gray-50 tw-px-3 tw-py-1.5 tw-rounded-full ">
                                                        <svg class="tw-w-3.5 tw-h-3.5 tw-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                        </svg>
                                                        <span class="tw-text-heading-secondary tw-font-medium">{{ \Carbon\Carbon::parse($blog_list_row->blog_post_date)->format('d M, Y') }}</span>
                                                    </span>
                                                    @endif
                                            </div>
                                        </div>
                                        <h2>
                                            <a href="{{ $blog_url }}">{{$blog_list_row->title}}</a>
                                        </h2>
                                        <p>
                                         {{ \Illuminate\Support\Str::limit(strip_tags($blog_list_row->intro_description ?? ''), 120) }}
                                        </p>
                                        <div class="read_more_class tw-mt-10">
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