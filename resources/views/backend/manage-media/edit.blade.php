@extends('backend.layouts.master')
@section('title','Manage feature logo')
@section('main-content')
{{--@dd(Auth::check());--}}

<section id="main-content" class=" ">
   <section class="wrapper main-wrapper" style=''>
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
                <a href="{{route('manage-feature-logo.add')}}" class="btn btn-warning btn-sm" style="margin-top: 20px;">Add feature logo</a>             
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>
                  <li>
                     <a href="{{route('manage-media')}}"><i class="fa fa-home"></i>Manage Media Image</a>
                  </li>
                  
                  <li class="active">
                     <strong>Update Media Image</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Update media image</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <form action="{{ route('manage-media.update') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                        <input type="hidden" name="media_image_id_hidden" value="{{ $media_logo->id }}">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="field-1">Upload Media Image</label>
                              
                              <div class="controls">
                                 <input type="file" class="form-control" name="update_image_file">
                              </div>
                              @if($errors->has('update_image_file'))
                                 <div class="text-danger">{{ $errors->first('update_image_file') }}</div>
                              @endif
                              <br><img src="{{ asset('media-img/main-img/'.$media_logo->media_image) }}" style="width: 100px;">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-label" for="field-1">Image Title</label>
                              <div class="controls">
                                 <input type="text" class="form-control" name="media_title">
                              </div>
                              @if($errors->has('media_title'))
                                 <div class="text-danger">{{ $errors->first('media_title') }}</div>
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
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </section>
</section>
@endsection
