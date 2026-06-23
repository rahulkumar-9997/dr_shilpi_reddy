@extends('frontend.layouts.master')
@section('title', $service->title . ' | Dr. K. Shilpi Reddy')
@section(
    'description',
    \Illuminate\Support\Str::limit(
        strip_tags($service->short_content ?: $service->content),
        160
    )
)
@section('main-content')
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img10">
            <!-- navbar-start -->
            @include('frontend.layouts.header-menu')
            <!-- navbar-end -->
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
                            <h1>{{ $service->title }}</h1>
                            <!-- <p class="text-white mb-0">Dr. K. Shilpi Reddy</p> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="w-100 float-left tw-pt-[50px] tw-pb-[50px]">
    <div class="container">
        <div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-8 lg:tw-gap-10 tw-py-2">
            <div class="lg:tw-col-span-2"> 
                @php
                    $image = $service->details_image ?: $service->main_image;
                @endphp
                @if($image)
                    <div class="tw-rounded-2xl tw-overflow-hidden tw-border tw-border-heading-secondary/10 tw-shadow-sm tw-mb-8">
                        <img
                            src="{{ asset('upload/services/' . $image) }}"
                            alt="{{ $service->title }}"
                            class="tw-w-full tw-h-auto tw-block"
                            width="900"
                            height="500">
                    </div>
                @endif
                <div class="tw-mb-6">
                    @if($service->category)
                    <div class="tw-inline-flex tw-items-center tw-gap-2 tw-bg-heading-secondary/10 tw-text-heading-secondary tw-text-xs tw-font-semibold tw-uppercase tw-tracking-widest tw-px-3 tw-py-1.5 tw-rounded-full tw-mb-3">
                        <span class="tw-w-1.5 tw-h-1.5 tw-rounded-full tw-bg-heading-secondary tw-shrink-0"></span>
                        {{ $service->category->title }}
                    </div>
                    @endif
                    @if($service->subtitle)                    
                        <h2 class="tw-text-[23px] md:tw-text-2xl lg:tw-text-3xl tw-font-bold tw-text-heading tw-leading-tight tw-mb-2">
                            {{ $service->subtitle }}
                        </h2>
                        <span class="tw-block tw-w-14 tw-h-0.5 tw-rounded-full tw-bg-heading-secondary tw-mb-4"></span>
                    @endif
                </div>
                @if($service->short_content)
                <div class="tw-bg-heading-secondary/5 tw-border-l-4 tw-border-heading-secondary tw-rounded-r-xl tw-px-5 tw-py-4 tw-mb-8">
                    <p class="tw-text-[16px] tw-leading-relaxed tw-text-text tw-mb-0">
                        {{ $service->short_content }}
                    </p>
                </div>
                @endif
                @if($service->content)
                <div class="tw-prose-custom services-details tw-mb-8">
                    {!! $service->content !!}
                </div>
                @endif
            </div>
            <div class="lg:tw-col-span-1">
                <div class="tw-bg-primary-gradient tw-rounded-2xl tw-p-6 tw-text-white tw-relative tw-overflow-hidden tw-shadow-lg tw-mb-5">
                    <div class="tw-absolute -tw-right-8 -tw-top-8 tw-w-32 tw-h-32 tw-rounded-full tw-bg-white/8 tw-pointer-events-none"></div>
                    <div class="tw-absolute -tw-left-6 -tw-bottom-6 tw-w-24 tw-h-24 tw-rounded-full tw-bg-white/6 tw-pointer-events-none"></div>
                    <div class="tw-relative">
                        <div class="tw-w-11 tw-h-11 tw-rounded-xl tw-bg-white/20 tw-flex tw-items-center tw-justify-center tw-mb-4">
                            <svg class="tw-w-5 tw-h-5 tw-text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                        </div>
                        <h3 class="tw-text-lg tw-font-bold tw-text-white tw-mb-1">Book an Appointment</h3>
                        <p class="tw-text-white/75 tw-text-[16px] tw-leading-relaxed tw-mb-5">
                            Schedule a personalised consultation with Dr. K. Shilpi Reddy.
                        </p>
                        <a href="{{ route('contact-us') }}"
                            class="tw-flex tw-items-center tw-justify-center tw-gap-2 tw-w-full tw-py-3 tw-rounded-full tw-bg-white tw-text-heading-secondary tw-text-sm tw-font-bold tw-no-underline tw-transition-opacity hover:tw-opacity-90 tw-mb-3 hover:tw-no-underline hover:tw-text-heading">
                            <svg class="tw-w-3.5 tw-h-3.5 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            Book Online
                        </a>
                        <a href="tel:+919503606049"
                            class="tw-flex tw-items-center tw-justify-center tw-gap-2 tw-w-full tw-py-3 tw-rounded-full tw-border-2 tw-border-white/40 tw-text-white tw-text-sm tw-font-semibold tw-no-underline tw-transition-all hover:tw-bg-white/10 hover:tw-no-underline hover:tw-text-heading">
                            <svg class="tw-w-3.5 tw-h-3.5 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.6 9.66 19.79 19.79 0 01.55 1.1 2 2 0 012.52.02h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.16 6.16l.92-.92a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                            </svg>
                            +91 9503606049
                        </a>
                    </div>
                </div>
                <a href="https://wa.me/919503606049?text={{ urlencode('Hi Dr. Shilpi, I would like to know more about your services.') }}"
                    class="tw-flex tw-items-center tw-gap-3 tw-bg-white tw-rounded-2xl tw-border tw-border-heading-secondary/10 tw-p-4 tw-no-underline tw-shadow-sm tw-transition-all tw-duration-200 hover:tw-shadow-md hover:tw-border-heading-secondary/25 hover:-tw-translate-y-0.5 hover:tw-no-underline">
                    <span class="tw-w-10 tw-h-10 tw-rounded-xl tw-bg-green-50 tw-flex tw-items-center tw-justify-center tw-shrink-0">
                        <i class="fab fa-whatsapp tw-text-base tw-text-[#15803d]"></i>
                    </span>
                    <div>
                        <p class="tw-text-[16px] tw-font-bold tw-text-heading tw-mb-0 tw-leading-tight">Chat on WhatsApp</p>
                        <p class="tw-text-xs tw-text-[14px] tw-mb-0">Quick replies, 9 AM – 9 PM</p>
                    </div>
                    <svg class="tw-w-4 tw-h-4 tw-text-text/30 tw-ml-auto tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </a>
                @if($relatedServices->count() > 0)
                <div class="tw-bg-white tw-rounded-2xl tw-border tw-border-heading-secondary/10 tw-shadow-sm tw-overflow-hidden tw-mt-5">
                    <div class="tw-flex tw-items-center tw-justify-between tw-px-5 tw-py-4 tw-bg-heading-secondary/5 tw-border-b tw-border-heading-secondary/10">
                        <h4 class="tw-text-[18px] tw-leading-relaxed tw-font-bold tw-text-heading tw-mb-0 tw-flex tw-items-center tw-gap-2">                            
                            Related Services
                        </h4>                        
                    </div>
                    <div class="tw-divide-y tw-divide-heading-secondary/8">
                        @foreach($relatedServices as $related)
                        <a href="{{ route('service.details', $related->slug) }}"
                            class="tw-group tw-flex tw-items-start tw-gap-3 tw-p-4 tw-no-underline tw-transition-all tw-duration-200 hover:tw-bg-heading-secondary/4 hover:tw-no-underline">
                            @if($related->main_image)
                            <div class="tw-w-16 tw-h-16 tw-rounded-xl tw-overflow-hidden tw-shrink-0 tw-bg-heading-secondary/5 tw-border tw-border-heading-secondary/10">
                                <img
                                    src="{{ asset('upload/services/'.$related->main_image) }}"
                                    alt="{{ $related->title }}"
                                    class="tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-300 group-hover:tw-scale-105">
                            </div>
                            @else
                            <div class="tw-w-16 tw-h-16 tw-rounded-xl tw-shrink-0 tw-bg-heading-secondary/10 tw-flex tw-items-center tw-justify-center tw-border tw-border-heading-secondary/10">
                                <svg class="tw-w-6 tw-h-6 tw-text-heading-secondary/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="3" y="3" width="18" height="18" rx="2" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <polyline points="21 15 16 10 5 21" />
                                </svg>
                            </div>
                            @endif
                            <div class="tw-flex-1 tw-min-w-0 tw-py-0.5">
                                <p class="tw-text-[16px] tw-font-semibold tw-text-heading-secondary tw-leading-snug tw-mb-0.5 tw-line-clamp-2 group-hover:tw-text-heading tw-transition-colors">
                                    {{ $related->title }}
                                </p>
                                @if($related->short_content)
                                <p class="tw-text-[17px] tw-text-text tw-leading-relaxed tw-line-clamp-1 tw-mb-0.5">
                                    {{ $related->short_content }}
                                </p>
                                @endif
                                <span class="tw-inline-flex tw-items-center tw-gap-1 tw-text-[16px] tw-font-bold tw-text-heading tw-transition-all group-hover:tw-gap-2">
                                    Learn More
                                    <svg class="tw-w-2.5 tw-h-2.5 tw-shrink-0 tw-transition-transform group-hover:tw-translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <polyline points="12 5 19 12 12 19" />
                                    </svg>
                                </span>
                            </div>

                        </a>
                        @endforeach
                    </div>
                    @if($service->category)
                    <div class="tw-px-4 tw-py-3 tw-bg-heading-secondary/5 tw-border-t tw-border-heading-secondary/10">
                        <a href="{{ route('services.index') }}"
                            class="tw-flex tw-items-center tw-justify-center tw-gap-2 tw-w-full tw-py-2.5 tw-rounded-xl tw-border tw-border-heading-secondary/20 tw-text-[16px] tw-font-bold tw-text-heading-secondary tw-no-underline tw-transition-all hover:tw-bg-heading-secondary hover:tw-text-white hover:tw-no-underline">
                            View All Services
                            <svg class="tw-w-3 tw-h-3 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>
                @endif  
            </div>
        </div>
    </div>
</div>
</section>
@endsection