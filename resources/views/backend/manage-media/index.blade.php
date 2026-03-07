@extends('backend.layouts.master')
@section('title','Manage Media Images')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper">
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
               <a href="{{route('manage-media.add')}}" class="btn btn-warning btn-sm" style="margin-top: 20px;">Add
                  Media Images</a>
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>

                  <li class="active">
                     <strong>Manage Media Images</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Manage Media Images</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     @if (isset($data['media_image_list']) && $data['media_image_list']->count() > 0)
                     <div class="sort-div" role="tabpanel">
                        <ul class="list-unstyled list-group sortable stage ui-sortable" id="sortable_media_image">
                           @foreach($data['media_image_list'] as $image)
                           <li class="d-flex align-items-center justify-content-between list-group-item ui-sortable-handle"
                              data-id="{{ $image->id }}" data-sort_order="{{ $image->sort_order ?? $loop->iteration }}"
                              style="position: relative; left: 0px; top: 0px; padding: 10px;">
                              <div class="d-flex align-items-center">
                                 <i class="fa fa-grip-vertical"
                                    style="margin-right: 10px; color: #999; cursor: grab;"></i>
                                 <div class="mb-0 mt-0 product-element-top img-bg-none" style="margin-right: 15px;">
                                    <img src="{{ asset('media-img/thumb/'. $image->media_image) }}"
                                       class="img-thumbnail"
                                       alt="{{ $image->title }}">
                                 </div>
                                 <span style="
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    max-width: 500px;
                                    display: inline-block;
                                    " title="{{ $image->title }}">
                                    {{ $image->title }}
                                 </span>
                              </div>
                              <span class="float-end">
                                 <a href="{{ url('manage-media/edit/'.$image->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                 </a>
                                 <a href="{{ url('manage-media/delete/'.$image->id) }}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this image?')">
                                    <i class="fa fa-trash"></i>
                                 </a>
                              </span>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                     <div class="my-pagination">
                        {{ $data['media_image_list']->links('vendor.pagination.bootstrap-4') }}
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </section>
      </div>
   </section>
</section>
@endsection
@section('morescripts')
<script src="{{asset('backend/assets/js/pages/sort-jquery-ui.min.js')}}" type="text/javascript"></script>
<script>
   var mediaImageSortUrl = "{{ route('media-image.sort') }}";
</script>
<script>
   $(function() {
      $('#sortable_media_image').sortable({
         placeholder: "ui-sortable-placeholder",
         update: function(event, ui) {
            var movedItem = ui.item; 
            var previousItem = movedItem.prev();
            var nextItem = movedItem.next(); 
            var swapData = []; 
            if (previousItem.length > 0) {
               swapData.push({
                  id: movedItem.attr('data-id'),
                  sort_order: previousItem.attr('data-id') 
               });
               swapData.push({
                  id: previousItem.attr('data-id'),
                  sort_order: movedItem.attr('data-id') 
               });
            } else if (nextItem.length > 0) {
               swapData.push({
                  id: movedItem.attr('data-id'),
                  sort_order: nextItem.attr('data-id') 
               });
               swapData.push({
                  id: nextItem.attr('data-id'),
                  sort_order: movedItem.attr('data-id') 
               });
            }
            console.log("Swapped Order:", swapData);
            $.ajax({
               url: mediaImageSortUrl,
               method: 'POST',
               data: {
                  _token: '{{ csrf_token() }}',
                  swaps: swapData
               },
               success: function(response) {
                  console.log("Sort Response:", response);
                  if (response.success) {
                     showSuccess(response.message);
                  } else {
                     showSuccess('Failed to swap order.');
                  }
               },
               error: function() {
                  showSuccess('Error swapping sort order.');
               }
            });
         }
      });
   });
</script>
@endsection