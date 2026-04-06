@extends('frontend.layouts.master')
@section('title','Scholarships | Dr. K. Shilpi Reddy')
@section('description', 'Explore scholarship opportunities for aspiring medical professionals. Dr. K. Shilpi Reddy is committed to supporting education and fostering the next generation of healthcare leaders through scholarships and financial aid programs.')
@section('main-content')

<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
    <div class="container">
        <div class="overlay-img">
            @include('frontend.layouts.header-menu')
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
                            <h1>Scholarships</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@if(isset($data['schlorship']) && $data['schlorship']->count() > 0)
<section class="schlorship_list_section w-100 float-left">
    <div class="schlorship-div">
        <div class="container">
            <div class="schlorship-title text-center">
                <h2>Scholarship</h2>
            </div>
            <div class="our_core_value">
                <div class="row ml-0 mr-0">
                    @foreach($data['schlorship'] as $index => $schlorship_row)
                    <div class="col-md-6 px-2 mb-4">
                        <div class="scholarship-card">
                            <div class="scholarship-img-ratio">
                                <a href="javascript:void(0);" class="scholarship-img-link" data-schlorshipid="{{ $schlorship_row->id }}" data-url="{{ route('schlorship.details', ['id' => $schlorship_row->id]) }}" data-schlorship="true" data-size="lg">
                                    <div class="scholarship-img">
                                        <img src="{{asset('upload/schlorship/'.$schlorship_row->main_image)}}" class="img-fluid"
                                            alt="{{$schlorship_row->title}}">
                                    </div>
                                </a>
                            </div>
                            <div class="scholarship-text">
                                <h5>{{$schlorship_row->title}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
@push('scripts')
<script src="{{asset('fronted/js/schlorship.js') }}?v={{ env('ASSET_VERSION', '1.0.0') }}"></script>
@endpush