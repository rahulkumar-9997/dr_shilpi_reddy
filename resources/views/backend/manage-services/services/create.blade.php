@extends('backend.layouts.master')
@section('title','Creatye Services')
@section('main-content')
@push('style')

@endpush
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper">
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Create Services</h2>
                    <div class="actions panel_actions pull-right">
                        <a href="{{ route('manage-services.index') }}" data-bs-toggle="tooltip" class="btn btn-warning btn-sm" data-bs-original-title="Back to Services Page">
                            Back to Services Page
                        </a>
                    </div>
                </header>
                <div class="content-body">
                                            <form action="{{ isset($service)
                                ? route('manage-services.update',$service->id)
                                : route('manage-services.store') }}"
                            method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            @if(isset($service))
                                @method('PUT')
                            @endif

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Service Category *</label>

                                        <select name="services_category_id"
                                                class="form-control">

                                            <option value="">-- Select Category --</option>

                                            @foreach($serviceCategories as $category)

                                                <option value="{{ $category->id }}"
                                                    {{ old('services_category_id',
                                                    isset($service) ? $service->services_category_id : '')
                                                    == $category->id ? 'selected' : '' }}>

                                                    {{ $category->title }}

                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Title *</label>

                                        <input type="text"
                                            class="form-control"
                                            name="title"
                                            value="{{ old('title',
                                            isset($service) ? $service->title : '') }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Sub Title</label>

                                        <input type="text"
                                            class="form-control"
                                            name="subtitle"
                                            value="{{ old('subtitle',
                                            isset($service) ? $service->subtitle : '') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Short Description</label>

                                        <textarea class="form-control"
                                                name="short_content">{{ old('short_content',
                                                isset($service) ? $service->short_content : '') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Description</label>

                                        <textarea class="ckeditor4"
                                                name="content">{{ old('content',
                                                isset($service) ? $service->content : '') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Main Image</label>

                                        @if(isset($service) && $service->main_image)
                                            <br>
                                            <img src="{{ asset('service-images/'.$service->main_image) }}"
                                                width="100">
                                        @endif

                                        <input type="file"
                                            class="form-control"
                                            name="main_image">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Icon Image</label>

                                        @if(isset($service) && $service->icon_image)
                                            <br>
                                            <img src="{{ asset('service-images/'.$service->icon_image) }}"
                                                width="100">
                                        @endif

                                        <input type="file"
                                            class="form-control"
                                            name="icon_image">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Details Image</label>

                                        @if(isset($service) && $service->details_image)
                                            <br>
                                            <img src="{{ asset('service-images/'.$service->details_image) }}"
                                                width="100">
                                        @endif

                                        <input type="file"
                                            class="form-control"
                                            name="details_image">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Breadcrumb Image</label>

                                        @if(isset($service) && $service->breadcrumb_image)
                                            <br>
                                            <img src="{{ asset('service-images/'.$service->breadcrumb_image) }}"
                                                width="100">
                                        @endif

                                        <input type="file"
                                            class="form-control"
                                            name="breadcrumb_image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Sort Order</label>

                                        <input type="number"
                                            class="form-control"
                                            name="sort_order"
                                            value="{{ old('sort_order',
                                            isset($service) ? $service->sort_order : 0) }}">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ isset($service) ? 'Update' : 'Submit' }}
                            </button>

                        </form>
                </div>
            </section>
        </div>
    </section>
</section>
@endsection
@push('scripts')
<script src="{{ asset('backend/assets/ckeditor-4/ckeditor.js') }}"></script>
<script>
    document.querySelectorAll('.ckeditor4').forEach(function(el) {
        CKEDITOR.replace(el, {
            removePlugins: 'exportpdf'
        });
    });
</script>
@endpush