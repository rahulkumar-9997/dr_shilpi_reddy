@extends('backend.layouts.master')
@section('title','Manage testimonials')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
<link href="{{asset('backend/assets//plugins/datatables/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('backend/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" media="screen"/>    
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper" style=''>
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
                <a href="{{route('manage-testimonials.add')}}" class="btn btn-warning btn-sm" style="margin-top: 20px;">Add bew testimonials</a>             
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>
                  
                  <li class="active">
                     <strong>Manage testimonials</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Manage Testimonials</h2>
               <div class="actions panel_actions pull-right">
                  <i class="box_toggle fa fa-chevron-down"></i>
                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                  <i class="box_close fa fa-times"></i>
               </div>
            </header>
            <div class="content-body">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  @if (isset($data['testimonials_list']) && $data['testimonials_list']->count() > 0)
                     <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Name</th>
                              <th>Profile Image</th>
                              <th style="width: 40%;">Content</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        
                        <tbody>
                        @php
                           $sr_no = 1;
                        @endphp
                        @foreach($data['testimonials_list'] as $testimonials_list_row)
                        @php
                        $testimonial_criteria = $testimonials_list_row->testimonial_criteria;
                        @endphp
                           <tr>
                              <td>{{ $sr_no }}</td>
                              
                                 <td>{{ $testimonials_list_row->name }}</td>
                                 <td>
                                 @if($testimonials_list_row->testimonial_criteria=='testimonials_video')
                                    
                                    <div class="embed-responsive1 embed-responsive-16by9-1">
                                          <video  controls width="200" height="200" class="embed-responsive-item">
                                             <source src="
                                             {{ asset('testimonials-img/testimonials-videos/'. $testimonials_list_row->testimonial_video) }}
                                             " type="video/mp4">
                                             Your browser does not support the video tag.
                                          </video>
                                    </div>
                                 @elseif($testimonials_list_row->testimonial_criteria == 'testimonials_content')
                                    <img src="{{ asset('testimonials-img/thumb/'. $testimonials_list_row->profile_image) }}" style="width: 50px;">
                                
                                 
                                 @endif
                                 </td>
                                 <td>
                                    <div style="max-height: 150px; overflow: auto; white-space: pre-wrap;">
                                       {{ $testimonials_list_row->testimonials_content }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="d-flex gap-2">
                                       <a href="{{ url('manage-testimonials/edit/' . $testimonials_list_row->id . '?testimonials_criteria=' . $testimonial_criteria) }}" class="btn btn-primary btn-sm">
                                       <i class="fa fa-pencil icon-xs"></i>  
                                       </a>
                                       <a href="{{ url('manage-testimonials/delete/' . $testimonials_list_row->id . '?testimonials_criteria=' . $testimonial_criteria) }}" class="btn btn-danger btn-sm">
                                          <i class="fa fa-trash icon-xs"></i>
                                       </a> 
                                    </div>
                                 </td>
                           </tr>
                           @php
                              $sr_no++; 
                           @endphp
                        @endforeach
                        </tbody>
                     </table>
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
<script src="{{asset('backend/assets/plugins/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js')}}" type="text/javascript">

</script>
<script>
   $(document).ready(function () {
    $(".delete-testimonial").on("click", function (e) {
        e.preventDefault();
        var deleteUrl = $(this).data("url");

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            }
        });
    });
});

</script>
@endsection