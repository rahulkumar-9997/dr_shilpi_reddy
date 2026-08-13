<div class="modal-popup-inner schlorship-modal-content tw-bg-white tw-rounded-3xl tw-overflow-hidden tw-max-h-[90vh] tw-flex tw-flex-col">
    <div class="close-modal tw-absolute tw-top-4 tw-right-4 tw-z-10 tw-w-9 tw-h-9 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-bg-white/90 tw-shadow-md hover:tw-bg-gray-100 tw-cursor-pointer tw-transition-colors">
        <i class="fa fa-times tw-text-gray-700"></i>
    </div>
    <div class="modal_box tw-overflow-y-auto tw-p-6 md:tw-p-8">
        <div class="schlorship-details">
            <div class="tw-mb-6">
                <span class="tw-inline-block tw-px-3 tw-py-1 tw-bg-[#fce7ef] tw-text-[#d20048] tw-text-xs tw-font-bold tw-tracking-wider tw-uppercase tw-rounded-full tw-mb-3">
                    Scholarship
                </span>
                <h4 class="schlorship-title tw-text-[22px] md:tw-text-[28px] tw-font-bold tw-text-gray-900 tw-leading-tight">
                    {{ $schlorship->title }}
                </h4>
            </div>
            @if($schlorship->main_image || $schlorship->images->count() > 0)
            <div class="schlorship-images tw-mb-8">
                <div class="tw-grid tw-grid-cols-2 md:tw-grid-cols-3 tw-gap-3 md:tw-gap-4">

                    @if($schlorship->main_image)
                    <a data-fancybox="schlorship"
                        href="{{ asset('upload/schlorship/'.$schlorship->main_image) }}"
                        class="tw-group tw-relative tw-block tw-aspect-square tw-rounded-2xl tw-overflow-hidden tw-bg-gray-100 tw-shadow-sm hover:tw-shadow-xl tw-ring-1 tw-ring-black/5 tw-transition-all tw-duration-300">
                        <img src="{{ asset('upload/schlorship/'.$schlorship->main_image) }}"
                            class="tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                            alt="Main Image - {{ $schlorship->title }}">
                        <div class="tw-absolute tw-inset-0 tw-bg-black/0 group-hover:tw-bg-black/30 tw-transition-colors tw-duration-300 tw-flex tw-items-center tw-justify-center">
                            <span class="tw-w-9 tw-h-9 tw-rounded-full tw-bg-white/90 tw-flex tw-items-center tw-justify-center tw-opacity-0 group-hover:tw-opacity-100 tw-scale-75 group-hover:tw-scale-100 tw-transition-all tw-duration-300">
                                <svg class="tw-w-4 tw-h-4 tw-text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                                </svg>
                            </span>
                        </div>
                    </a>
                    @endif
                    @foreach($schlorship->images as $image)
                    <a data-fancybox="schlorship"
                        href="{{ asset('upload/schlorship/'.$image->image) }}"
                        class="tw-group tw-relative tw-block tw-aspect-square tw-rounded-2xl tw-overflow-hidden tw-bg-gray-100 tw-shadow-sm hover:tw-shadow-xl tw-ring-1 tw-ring-black/5 tw-transition-all tw-duration-300">
                        <img src="{{ asset('upload/schlorship/'.$image->image) }}"
                            class="tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-700 group-hover:tw-scale-110"
                            alt="{{ $image->title ?? $schlorship->title }}">
                        <div class="tw-absolute tw-inset-0 tw-bg-black/0 group-hover:tw-bg-black/30 tw-transition-colors tw-duration-300 tw-flex tw-items-center tw-justify-center">
                            <span class="tw-w-9 tw-h-9 tw-rounded-full tw-bg-white/90 tw-flex tw-items-center tw-justify-center tw-opacity-0 group-hover:tw-opacity-100 tw-scale-75 group-hover:tw-scale-100 tw-transition-all tw-duration-300">
                                <svg class="tw-w-4 tw-h-4 tw-text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                                </svg>
                            </span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
            @if($schlorship->description)
            <div class="schlorship-description tw-pt-6 tw-border-t tw-border-gray-100">
                <div class="tw-text-gray-600 tw-leading-relaxed tw-text-[15px]">
                    {!! $schlorship->description !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>