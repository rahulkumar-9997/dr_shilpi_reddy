@extends('backend.layouts.master')
@section('title','Manage Services')
@section('main-content')
@push('style')

@endpush
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper">
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Manage Services</h2>
                    <div class="actions panel_actions pull-right">

                        <a href="{{ route('manage-services.create') }}" data-bs-toggle="tooltip" class="btn btn-warning btn-sm" data-bs-original-title="Add Services">
                            Add new Services
                        </a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 service-category-content">
                            @include('backend.manage-services.services.partials.services-list', ['services' => $services])
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
@endsection
@push('scripts')
    <script src="{{ asset('backend/assets/js/pages/servicesCategory.js') }}"></script>
@endpush