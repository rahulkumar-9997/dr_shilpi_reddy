@extends('backend.layouts.master')
@section('title','Manage Foundation Category')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper" style=''>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Manage Foundation Category</h2>
               <div class="actions panel_actions pull-right">
                  
                  <a href="javascript:void(0)" data-foundation-category-popup="true" data-size="lg" data-title="Add New Foundation Category" data-url="{{ route('foundation-category.create') }}" data-bs-toggle="tooltip" class="btn btn-warning btn-sm" data-bs-original-title="Add New Foundation Category">
                  Add New Foundation Category
                  </a>
                  
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 foundation-category-content">
                     @include('backend.manage-foundation-category.partials.ajax-foundation-category-list', ['data' => $data])
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
    if ($.fn.modal && $.fn.modal.Constructor) {
        $.fn.modal.Constructor.prototype._enforceFocus = function () {};
    }
</script>
<script src="{{asset('backend/assets/js/pages/foundation-category.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/pages/foundation-image.js')}}" type="text/javascript"></script>
@endsection