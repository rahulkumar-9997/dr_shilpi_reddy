@extends('frontend.layouts.master')
@section('title', $foundation->meta_title ?: $foundation->name.' | Our Foundation - Dr. K. Shilpi Reddy Foundation')
@section('description', $foundation->meta_description ?: Str::limit(strip_tags($foundation->description ?? ''), 155) ?: 'Learn about outreach and awareness programs led by Dr. K. Shilpi Reddy Foundation.')

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
                            <h1>{{ $foundation->name }}</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<section class="w-100 float-left tw-relative tw-w-full tw-bg-white tw-py-14 tw-px-4">
    <div class="tw-max-w-7xl tw-mx-auto">
        <div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-[1fr_340px] tw-gap-5">
            <div>
                @if($foundation->description)
                <div class="tw-mb-4 tw-pb-4">
                    <div class="blog-details-new tw-text-gray-600 tw-leading-relaxed">
                        {!! $foundation->description !!}
                    </div>
                </div>
                @endif
                @if($foundation->foundationImages->count() > 0)
                <div class="tw-columns-2 md:tw-columns-3 tw-gap-2 md:tw-gap-3">
                    @foreach($foundation->foundationImages as $index => $image)
                    <a href="{{ asset('foundation-img/'.$image->image_path) }}"
                        data-fancybox="foundation-gallery"
                        data-caption="{{ $foundation->name }}"
                        class="tw-group tw-relative tw-block tw-w-full tw-mb-4 md:tw-mb-5 tw-break-inside-avoid tw-rounded-2xl tw-overflow-hidden tw-bg-gray-100 tw-shadow-sm hover:tw-shadow-xl tw-transition-all tw-duration-300">
                        <img src="{{ asset('foundation-img/'.$image->image_path) }}"
                            class="tw-w-full tw-h-auto tw-block tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                            alt="{{ $foundation->name }} photo {{ $index + 1 }}"
                            loading="lazy">

                        <div class="tw-absolute tw-inset-0 tw-bg-black/0 group-hover:tw-bg-black/30 tw-transition-colors tw-duration-300 tw-flex tw-items-center tw-justify-center">
                            <span class="tw-w-10 tw-h-10 tw-rounded-full tw-bg-white/90 tw-flex tw-items-center tw-justify-center tw-opacity-0 group-hover:tw-opacity-100 tw-scale-75 group-hover:tw-scale-100 tw-transition-all tw-duration-300">
                                <svg class="tw-w-5 tw-h-5 tw-text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                                </svg>
                            </span>
                        </div>
                    </a>
                    @endforeach
                </div>                
                @endif
            </div>
            <aside class="tw-w-full">
                <div class="tw-sticky tw-top-6 tw-bg-white tw-rounded-3xl tw-border tw-border-gray-100 tw-shadow-sm tw-p-5">
                    <h3 class="tw-text-[18px] tw-font-bold tw-text-heading-secondary tw-tracking-tight tw-mb-5 tw-pb-4 tw-border-b tw-border-gray-100 tw-flex tw-items-center tw-gap-2">
                        <span class="tw-w-1.5 tw-h-5 tw-rounded-full tw-bg-gradient-to-b tw-from-[#d20048] tw-to-[#074560]"></span>
                        Other Foundations
                    </h3>
                    @if(isset($recentFoundations) && $recentFoundations->count() > 0)
                    <div class="tw-flex tw-flex-col">
                        @foreach($recentFoundations as $recent)
                            @php $recentImage = $recent->foundationImages->first(); @endphp
                            <a href="{{ route('our.foundation.details', ['slug' => $recent->slug]) }}"
                                class="tw-group tw-flex tw-items-center tw-gap-4 tw-p-2.5 tw-transition-all tw-duration-300 hover:tw--translate-y-0.5 hover:tw-no-underline {{ !$loop->last ? 'tw-border-b tw-border-gray-100 tw-mb-2 tw-pb-4' : '' }}">
                                <div class="tw-relative tw-w-20 tw-h-20 tw-shrink-0 tw-flex-shrink-0 tw-rounded-xl tw-overflow-hidden tw-bg-gray-100">
                                    @if($recentImage)
                                    <img src="{{ asset('foundation-img/'.$recentImage->image_path) }}"
                                        class="tw-absolute tw-inset-0 tw-w-full tw-h-full tw-object-cover tw-object-center tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                                        alt="{{ $recent->name }}"
                                        loading="lazy">
                                    @else
                                    <div class="tw-w-full tw-h-full tw-flex tw-items-center tw-justify-center tw-bg-gradient-to-br tw-from-gray-50 tw-via-gray-100 tw-to-gray-200">
                                        <svg class="tw-w-6 tw-h-6 tw-text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 8h16M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1z" />
                                        </svg>
                                    </div>
                                    @endif
                                </div>
                                <div class="tw-flex tw-flex-col tw-min-w-0">
                                    <h5 class="tw-text-[15px] tw-font-bold tw-text-gray-900 tw-leading-snug tw-line-clamp-2 tw-mb-1.5">
                                        {{ $recent->name }}
                                    </h5>
                                    <span class="tw-inline-flex tw-items-center tw-gap-1 tw-text-xs tw-font-semibold tw-bg-gradient-to-r tw-from-[#d20048] tw-to-[#074560] tw-bg-clip-text tw-text-transparent tw-transition-all tw-duration-300 group-hover:tw-gap-1.5">
                                        Explore More
                                        <svg class="tw-w-3.5 tw-h-3.5 tw-stroke-[#d20048] tw-transition-transform tw-duration-300 group-hover:tw-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    @else
                    <p class="tw-text-gray-400 tw-text-sm">No other foundations to show.</p>
                    @endif
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection