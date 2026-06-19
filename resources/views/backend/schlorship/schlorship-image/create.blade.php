@extends('backend.layouts.master')
@section('title','Add Schlorship Images')
@section('main-content')
@section('morecss')
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper">
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
               <a href="{{route('schlorship-image.index')}}" class="btn btn-info btn-sm"    style="margin-top: 20px;">
                    Go Back 
                </a>
            </div>            
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Add Schlorship Images </h2>               
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{ route('schlorship-image.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf  
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Schlorship Title *</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="schlorship_title" placeholder="Enter Schlorship Title" value="{{ old('schlorship_title') }}">
                                            @if ($errors->has('schlorship_title'))
                                                <span class="text-danger">
                                                    {{ $errors->first('schlorship_title') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Schlorship Main Images *</label>
                                        <div class="controls">
                                            <input type="file" class="form-control" name="schlorship_main_image" placeholder="Upload Schlorship Main Image" value="{{ old('schlorship_main_image') }}">
                                            
                                             @if ($errors->has('schlorship_main_image'))
                                                <span class="text-danger">
                                                    {{ $errors->first('schlorship_main_image') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Upload Multiple Schlorship Images</label>
                                        <div class="controls">
                                            <input type="file" class="form-control" name="image_file[]" multiple="">                                            
                                            <span class="text-info">Maximum file size: 2MB per image.
                                                and Minimum 10 images selected in one upload.
                                            </span>
                                        </div>
                                        @if ($errors->has('image_file'))
                                            <span class="text-danger">
                                                {{ $errors->first('image_file') }}
                                            </span>
                                        @endif

                                        @if ($errors->has('image_file.*'))
                                            <span class="text-danger">
                                                {{ $errors->first('image_file.*') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Schlorship Description</label>
                                        <div class="controls">
                                            <textarea type="text" class="form-control ckeditor4" name="schlorship_description">{{ old('schlorship_description') }}</textarea>
                                        </div>
                                        @if($errors->has('schlorship_description'))
                                        <div class="text-danger">{{ $errors->first('schlorship_description') }}</div>
                                        @endif
                                    </div>
                                </div>     
                            </div>           
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ route('schlorship-image.index') }}" class="btn btn-danger">Cancel</a>   
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