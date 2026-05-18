@extends('backend.layouts.master') 
@section('title','Add Our Work') 
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
                            <strong>Add Our Work</strong>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Add Our Work</h2>
                    
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="{{ route('manage-our-work.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Our Work Heading Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="our_work_heading_name">
                                            </div>
                                            @if($errors->has('our_work_heading_name'))
                                            <div class="text-danger">{{ $errors->first('our_work_heading_name') }}</div>
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
                                                    value="{{ old('meta_title') }}">
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
                                                rows="4">{{ old('meta_description') }}</textarea>
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
                                                <textarea class="ckeditor4" placeholder="Enter text ..."  name="work_content"></textarea>
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
                                            @if($errors->has('work_multiple_image'))
                                            <div class="text-danger">{{ $errors->first('work_multiple_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <div class="controls">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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