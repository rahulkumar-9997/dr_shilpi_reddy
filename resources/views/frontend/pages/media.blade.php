@extends('frontend.layouts.master')
@section('title','Media & Talks | Videos Featuring Dr. Shilpi Reddy')
@section('description', 'Watch Dr. Shilpi Reddy\'s interviews and media coverage on health, motherhood, and healing.')
@section('keywords', 'Media, Hyderabad, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, photo,')

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
                            <h1>Media</h1>
                            <p class="text-white mb-0">Glimpse of events and activities conducted by Dr.K.Shilpi Reddy</p>
                            </div>
                        </div>
                    </div>
		        </section>
            </div>
        </div>
    </div>

    
    @if (isset($data['media_list']) && $data['media_list']->count() > 0)
    <section>
        <div class="w-100 float-left professional-con media-box">
            <div class="container">
                <div class="professional-box">
                    <div class="row grid-services media-box-image">
                    @foreach($data['media_list'] as $media_list_row)
                        <div class="col-lg-4 col-md-4">
                            <article class="single_blog agree_bazar_image">
                                <figure>
                                    <div class="blog_thumb border border-radius">
                                    <a class="lightbox" title="{{$media_list_row->title}}" data-fancybox="images-1" data-caption="" href="{{asset('media-img/main-img/' . $media_list_row->media_image) }}">
                                        <div class="media">
                                            <img src="{{asset('media-img/main-img/' . $media_list_row->media_image) }}" alt="{{$media_list_row->title}}" class="img-responsive main-img" >
                                        </div>
                                        @if(isset($media_list_row->title))
                                        <div class="media_title">
                                            <h4 class="text-center">
											@if($media_list_row->media_link_url)
											        <a target="_blank" href="{{$media_list_row->media_link_url}}">{{$media_list_row->title}}</a>
											@else
												{{$media_list_row->title}}
											@endif
                                            </h4>
                                        </div>
                                        @endif
                                    </a>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                    </div>
                    @if ($data['media_list']->hasPages())
                        <div class="my-pagination mt-2 mb-2">
                            {{ $data['media_list']->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </div>
            
        </div>
    </section>
@endif
@endsection