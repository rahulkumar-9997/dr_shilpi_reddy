@extends('frontend.layouts.master')
@section('title', 'Gynecology & Wellness Services | Dr. K. Shilpi Reddy')
@section('description', 'Discover expert gynecology, women’s health, fertility, and wellness services provided by Dr. K. Shilpi Reddy, dedicated to personalized and compassionate care.')
@section('main-content')
@php
$groupedServices = $services->getCollection()->groupBy('category.title');
@endphp
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img10">
            @include('frontend.layouts.header-menu')
        </div>
    </div>
</div>
<div class="w-100 float-left header-and-banner-con  breadcrub">
    <div class="container">
        <div class="overlay-img10">
            <section>
                <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                    <div class="container">
                        <div class="generic-banner-content text-white text-center">
                            <h1>Services</h1>
                            <!-- <p class="text-white mb-0">Dr. K. Shilpi Reddy</p> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="w-100 float-left tw-pt-[50px] tw-pb-[50px]">
    <div class="container">
        @foreach ($groupedServices as $categoryTitle => $categoryServices)
        @php
        $isEven = $loop->even;           
        $accentLearn = $isEven ? 'tw-text-secondary' : 'tw-text-heading-secondary';           
        $accentCardHov = $isEven ? 'hover:tw-border-secondary/30' : 'hover:tw-border-heading-secondary/30';
        @endphp
        <div class="tw-container-start tw-mb-8">
            <div class="tw-flex tw-flex-col lg:tw-flex-row lg:tw-items-end lg:tw-justify-between tw-gap-5 tw-mb-5">
                <div>                        
                    <h2 class="tw-text-2xl md:tw-text-3xl tw-font-bold tw-text-heading tw-leading-tight tw-relative tw-pb-4 after:tw-content-[''] after:tw-absolute after:tw-left-0 after:tw-bottom-0 after:tw-w-12 after:tw-h-0.5 after:tw-rounded-full after:tw-bg-heading-secondary">
                        {{ $categoryTitle }}
                    </h2>
                </div>
            </div>
            <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-6">
                @foreach ($categoryServices as $service)
                <div class="tw-group tw-bg-white tw-rounded-3xl tw-overflow-hidden tw-flex tw-flex-col
                    tw-border tw-border-heading-secondary/10
                    tw-transition-all tw-duration-300
                    hover:-tw-translate-y-2 hover:tw-shadow-2xl {{ $accentCardHov }}
                    svc-reveal">
                    <div class="tw-relative tw-w-full tw-overflow-hidden tw-bg-heading-secondary/5 tw-shrink-0">
                        <a href="{{ route('service.details', $service->slug) }}">
                            <img
                                src="{{ asset('upload/services/'.$service->main_image) }}"
                                alt="{{ $service->title }}"
                                class="tw-w-full tw-h-auto tw-block tw-transition-transform tw-duration-500 tw-ease-out group-hover:tw-scale-[1.03]"
                                loading="lazy"
                                width="600"
                                height="400">
                            <span class="tw-absolute tw-top-3 tw-left-3 tw-bg-heading-secondary tw-text-[9px] tw-font-bold tw-uppercase tw-tracking-wider tw-px-3 tw-py-1 tw-rounded-full tw-backdrop-blur-sm tw-text-white">
                                {{ $categoryTitle }}
                            </span>
                        </a>
                    </div>
                    <div class="tw-p-5 tw-flex tw-flex-col tw-flex-1 tw-border-t tw-border-heading-secondary/8">
                        <h3 class="tw-text-[18px] tw-font-bold tw-text-heading-secondary tw-leading-snug tw-mb-2">
                            {{ $service->title }}
                        </h3>
                        @if($service->short_content || $service->subtitle)
                            <p class="tw-text-[20px] tw-leading-7 tw-text-text tw-flex-1 tw-mb-4 tw-line-clamp-3">
                                {{ $service->short_content ?: $service->subtitle }}
                            </p>
                        @endif
                        <div class="tw-flex tw-items-center tw-justify-between tw-pt-3 tw-border-t tw-border-heading-secondary/8">
                            <a href="{{ route('service.details', $service->slug) }}"
                                class="tw-inline-flex tw-items-center tw-gap-1.5 tw-text-[16px] tw-font-bold tw-no-underline tw-transition-all hover:tw-gap-3 hover:tw-opacity-80 {{ $accentLearn }} hover:tw-no-underline">
                                Learn More
                                <svg class="tw-w-3 tw-h-3 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                    <polyline points="12 5 19 12 12 19" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        @if ($services->hasPages())
        <div class="my-pagination mt-2 mb-2">
            {{ $services->links('vendor.pagination.bootstrap-4') }}
        </div>
        @endif
    </div>
</section>
@endsection