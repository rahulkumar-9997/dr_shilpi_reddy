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
                            <div class="form-group">
                                <label class="form-label" for="field-1">Upload Multiple Schlorship Images</label>
                                <div class="controls">
                                    <input type="file" class="form-control" name="image_file[]" multiple="">
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
                            <div class="form-group">
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection