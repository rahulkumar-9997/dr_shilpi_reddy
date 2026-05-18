@php
use App\Models\OurWorkImage;
@endphp
@extends('backend.layouts.master')
@section('title','Edit Our Work')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
@endsection
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper">
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{route('manage-our-work')}}"><i class="fa fa-home"></i>Manage Our Work</a>
                        </li>

                        <li class="active">
                            <strong>Edit Our Work</strong>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Edit Our Work</h2>

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="{{ route('manage-our-work.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $our_work->id}}" name="our_work_hidden_id">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Our Work Heading Name</label>
                                            <div class="controls">
                                                <input type="text"
                                                    class="form-control"
                                                    name="our_work_heading_name"
                                                    value="{{ old('our_work_heading_name', $our_work->heading_name) }}">
                                            </div>
                                            @if($errors->has('our_work_heading_name'))
                                            <div class="text-danger">
                                                {{ $errors->first('our_work_heading_name') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Meta Title</label>
                                            <div class="controls">
                                                <input type="text"
                                                    class="form-control"
                                                    name="meta_title"
                                                    value="{{ old('meta_title', $our_work->meta_title) }}">
                                            </div>
                                            @if($errors->has('meta_title'))
                                            <div class="text-danger">
                                                {{ $errors->first('meta_title') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Meta Description</label>
                                            <div class="controls">
                                                <textarea class="form-control"
                                                    name="meta_description"
                                                    rows="4">{{ old('meta_description', $our_work->meta_description) }}</textarea>
                                            </div>
                                            @if($errors->has('meta_description'))
                                            <div class="text-danger">
                                                {{ $errors->first('meta_description') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Our Work Content</label>
                                            <div class="controls">
                                                <textarea class="ckeditor4" placeholder="Enter text ..." name="work_content">{{ $our_work->our_work_content }}</textarea>
                                            </div>
                                            @if($errors->has('work_content'))
                                            <div class="text-danger">{{ $errors->first('work_content') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Image (Upload Multiple images)</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="work_multiple_image[]" multiple>
                                            </div>
                                            @if($errors->has('our_work_heading_name'))
                                            <div class="text-danger">{{ $errors->first('our_work_heading_name') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        @php
                        $our_work_multiple_img = OurWorkImage::where(['our_work_id' => $our_work->id])->orderBy('id','DESC')->get();

                        if ($our_work_multiple_img){
                        @endphp
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach($our_work_multiple_img as $image)
                                <div class="col-lg-2">
                                    <div class="product-element-top img-bg">
                                        <img src="{{ asset('our-work/main-img/' . $image->our_work_image) }}?v={{ time() }}" class="img-responsive thumbnail_img">
                                    </div>
                                    <div class="mt-1" style="margin-bottom: 10px;">
                                        <a href="{{url('delete-multiple-img/'.$image->id.'/'.$our_work->id.'') }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o icon-xs"></i>
                                        </a>
                                        @foreach([90] as $degree)
                                        <a href="{{ route('manage-blog.image.rotate', ['image_id' => $image->id, 'degree' => $degree]) }}"
                                            class="btn btn-warning btn-sm"
                                            data-toggle="tooltip"
                                            style="margin-right: 5px;"
                                            title="Rotate {{ $degree }} deg">
                                            <i class="fa fa-undo icon-xs"></i>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @php
                        }
                        @endphp
                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
@endsection
@section('morescripts')
<script src="{{ asset('backend/assets/ckeditor-4/ckeditor.js') }}"></script>
<script>
    document.querySelectorAll('.ckeditor4').forEach(function(el) {
        CKEDITOR.replace(el, {
            removePlugins: 'exportpdf'
        });
    });
</script>


@endsection