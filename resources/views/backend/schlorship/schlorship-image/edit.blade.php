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
                            <form action="{{ route('schlorship-image.update',$data['schlorship_image']->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ old('title',$data['schlorship_image']->title) }}">
                                            @if ($errors->has('title'))
                                            <span class="text-danger">
                                                {{ $errors->first('title') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Upload Image</label>
                                            <input type="file" class="form-control" name="image_file">
                                            @if ($errors->has('image_file'))
                                            <span class="text-danger">
                                                {{ $errors->first('image_file') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Current Image</label><br>
                                            @if($data['schlorship_image']->image)
                                            <img src="{{ asset('upload/schlorship/thumb/'.$data['schlorship_image']->image) }}" class="img-thumbnail" width="120">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ $data['schlorship_image']->status == 1 ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="0"
                                                    {{ $data['schlorship_image']->status == 0 ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
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