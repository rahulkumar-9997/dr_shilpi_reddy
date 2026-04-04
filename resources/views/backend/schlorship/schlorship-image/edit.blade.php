@extends('backend.layouts.master')
@section('title','Edit Schlorship Image')
@section('main-content')
<section id="main-content">
    <section class="wrapper main-wrapper">
        <div class='col-lg-12'>
            <div class="page-title">
                <div class="pull-left">
                    <a href="{{ route('schlorship-image.index') }}" class="btn btn-info btn-sm"
                        style="margin-top:20px;">
                        Go Back
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box">
                <header class="panel_header">
                    <h2 class="title pull-left">Edit Schlorship Image</h2>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('schlorship-image.update', $data['schlorship']->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Scholarship Title *</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="schlorship_title" placeholder="Enter Scholarship Title" value="{{ old('schlorship_title', $data['schlorship']->title) }}">
                                                @if ($errors->has('schlorship_title'))
                                                    <span class="text-danger">{{ $errors->first('schlorship_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Scholarship Main Image</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="schlorship_main_image" placeholder="Upload Scholarship Main Image">
                                                @if ($errors->has('schlorship_main_image'))
                                                    <span class="text-danger">{{ $errors->first('schlorship_main_image') }}</span>
                                                @endif
                                                @if($data['schlorship']->main_image)
                                                    <div class="mt-2">
                                                        <img src="{{ asset('upload/schlorship/'.$data['schlorship']->main_image) }}" width="50" class="img-thumbnail">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <div class="controls">
                                                <select name="status" class="form-control">
                                                    <option value="1" {{ $data['schlorship']->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $data['schlorship']->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Scholarship Description</label>
                                            <div class="controls">
                                                <textarea type="text" class="form-control ckeditor4" name="schlorship_description">{{ old('schlorship_description', $data['schlorship']->description) }}</textarea>
                                            </div>
                                            @if($errors->has('schlorship_description'))
                                                <div class="text-danger">{{ $errors->first('schlorship_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($data['schlorship']->images->count() > 0)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Current Gallery Images (Check to Delete)</label>
                                            <div class="row">
                                                @foreach($data['schlorship']->images as $image)
                                                <div class="col-md-2 col-sm-3 col-xs-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="delete_images[]" value="{{ $image->id }}">
                                                            <img src="{{ asset('upload/schlorship/'.$image->image) }}" width="100" class="img-thumbnail">
                                                        </label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Upload Multiple Scholarship Images</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="image_file[]" multiple>
                                                <span class="text-info">Maximum file size: 2MB per image.</span>
                                            </div>
                                            @if ($errors->has('image_file'))
                                                <span class="text-danger">{{ $errors->first('image_file') }}</span>
                                            @endif
                                            @if ($errors->has('image_file.*'))
                                                <span class="text-danger">{{ $errors->first('image_file.*') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">Update</button>
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