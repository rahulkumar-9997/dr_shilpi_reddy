@extends('backend.layouts.master')
@section('title','Manage Schlorship')
@section('main-content')
@section('morecss')
@endsection
<section id="main-content" class=" ">
   <section class="wrapper main-wrapper">
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
         <div class="page-title">
            <div class="pull-left">
               <a href="{{route('schlorship-image.create')}}" class="btn btn-warning btn-sm"    style="margin-top: 20px;">
                    Add Schlorship Images
                </a>
            </div>
            <div class="pull-right hidden-xs">
               <ol class="breadcrumb">
                  <li>
                     <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                  </li>

                  <li class="active">
                     <strong>Manage Schlorship</strong>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-12">
         <section class="box ">
            <header class="panel_header">
               <h2 class="title pull-left">Manage Schlorship</h2>               
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if (isset($data['schlorships']) && $data['schlorships']->count() > 0)
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="60">#</th>
                                    <th width="120">Main Images</th>
                                    <th>Title</th>
                                    <th width="100">Status</th>
                                    <th width="120">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['schlorships'] as $key => $schlorship)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if($schlorship->main_image)
                                        <img src="{{ asset('upload/schlorship/'.$schlorship->main_image) }}"
                                            class="img-thumbnail"
                                            width="50" height="50" alt="{{ $schlorship->title ?? 'Schlorship Image' }}">
                                        @endif
                                        @if($schlorship->images && $schlorship->images->count() > 0)
                                            <span class="badge bg-info text-light mt-1">{{ $schlorship->images->count() }} Images</span>
                                        @endif  
                                    </td>
                                    <td>
                                        {{ $schlorship->title ?? '-' }}
                                    </td>
                                    <td>
                                        @if($schlorship->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('schlorship-image.edit',$schlorship->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('schlorship-image.destroy',$schlorship->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-name="{{ $schlorship->main_image }}"
                                            class="btn btn-danger btn-sm show_confirm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-pagination">
                            {{ $data['schlorships']->links('vendor.pagination.bootstrap-4') }}
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
<script>
$(document).ready(function() {
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();

        Swal.fire({
                title: `Are you sure you want to delete this ${name}?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
                dangerMode: true,
        }).then((result) => {
                if (result.isConfirmed) {
                form.submit();
                }
        });
    });
    });
</script>
@endsection