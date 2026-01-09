@extends('backend.layouts.master') 
@section('title','Edit Ibucare') 
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
                            <a href="{{route('manage-ibucare')}}"><i class="fa fa-home"></i>Manage Ibucare</a>
                        </li>

                        <li class="active">
                            <strong>Edit Ibucare</strong>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Edit Ibucare</h2>
                    
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{ route('manage-ibucare.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$ibucare_edit->id}}" name="ibucare_id_hidden">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Ibucare Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="ibucare_name" value="{{$ibucare_edit->title}}">
                                            </div>
                                            @if($errors->has('ibucare_name'))
                                            <div class="text-danger">{{ $errors->first('ibucare_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Ibucare Image</label>
                                            
                                            <div class="controls">
                                                <input type="file" class="form-control" name="ibucare_image">
                                                <br><img src="{{ asset('ibucare-img/thumb/' . $ibucare_edit->img_file) }}" style="width: 100px;">
                                            </div>
                                            @if($errors->has('ibucare_image'))
                                            <div class="text-danger">{{ $errors->first('ibucare_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Ibucare Description</label>
                                            <div class="controls">
                                            <textarea name="ibucare_description" class="ckeditor4" placeholder="Enter text ...">{{$ibucare_edit->description}}</textarea>
                                            </div>
                                            @if($errors->has('ibucare_description'))
                                                <div class="text-danger">{{ $errors->first('ibucare_description') }}</div>
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