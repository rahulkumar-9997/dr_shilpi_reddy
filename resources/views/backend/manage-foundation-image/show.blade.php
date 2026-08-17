@extends('backend.layouts.master')
@section('title','Manage Foundation Image')
@section('main-content')
{{--@dd(Auth::check());--}}
@section('morecss')
@endsection
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">
                        {{ $foundation_category->name }}
                        <a href="{{ url()->previous() }}"
                            rel="tooltip" data-color-class="danger" data-animate=" animated fadeIn " data-toggle="tooltip" data-original-title="Go Back to Previous Page"
                            class="btn btn-sm btn-danger">
                            &lt;&lt; Go Back to Previous Page
                        </a>
                    </h2>

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="sort-div role=" tabpanel">
                                <ul class="list-unstyled list-group sortable stage ui-sortable" id="sortable_foundation_image">
                                    @if($foundation_category && $foundation_category->foundationImages->isNotEmpty())
                                    @foreach($foundation_category->foundationImages as $media)
                                    <li class="d-flex align-items-center justify-content-between list-group-item ui-sortable-handle"
                                        data-id="{{ $media->id }}"
                                        style="position: relative; left: 0px; top: 0px; padding: 5px;">
                                        <div class="mb-1 mt-1">
                                            @if($media->media_type === 'image')
                                            <img src="{{ asset('foundation-img/' . $media->image_path) }}?v={{ time() }}"
                                                class="img-thumbnail me-3"
                                                style="width: 120px; height: 80px; object-fit: cover;"
                                                alt="{{ $foundation_category->name }}">
                                            @elseif($media->media_type === 'video')
                                            <video controls
                                                class="img-thumbnail me-3"
                                                style="width: 150px; height: 100px; object-fit: cover;">
                                                <source src="{{ asset('foundation-video/' . $media->image_path) }}">
                                                Your browser does not support the video tag.
                                            </video>
                                            @endif
                                        </div>
                                        <div class="flex-grow-1">
                                            <strong>
                                                {{ $media->image_path }}
                                            </strong>
                                            <br>
                                            <span class="badge badge-info">
                                                {{ ucfirst($media->media_type) }}
                                            </span>
                                        </div>
                                        <span class="float-end d-flex">
                                            <form method="POST"
                                                action="{{ route('foundation-image.destroy', $media->id) }}"
                                                accept-charset="UTF-8"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    class="btn btn-sm btn-danger show_confirm"
                                                    data-name="{{ $media->file_path }}"
                                                    title="Delete">
                                                    <i class="fa fa-trash icon-xs"></i>
                                                </button>
                                            </form>
                                            @if($media->media_type === 'image')
                                            <form method="POST"
                                                action="{{ route('foundation-image.rotate', $media->id) }}"
                                                class="d-inline"
                                                style="margin-left: 10px;">
                                                @csrf
                                                <input type="hidden"
                                                    name="degree"
                                                    value="90">
                                                <button type="submit"
                                                    class="btn btn-sm btn-primary"
                                                    title="Rotate">
                                                    <i class="fa fa-undo icon-xs"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </span>
                                    </li>
                                    @endforeach
                                    @else
                                    <li class="list-group-item">No images available</li>
                                    @endif
                                </ul>
                            </div>
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
    $(function() {
        $('#sortable_foundation_image').sortable({
            placeholder: "ui-sortable-placeholder",
            update: function(event, ui) {
                var order = $(this).sortable('toArray', {
                    attribute: 'data-id'
                });
                /*alert(JSON.stringify(order));*/
                $.ajax({
                    url: '{{ route("foundation-image.sort") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        order: order
                    },
                    success: function(response) {
                        if (response.success) {
                            showSuccess(response.message);
                        } else {
                            showSuccess('Failed to update sort order.');
                        }
                    },
                    error: function() {
                        showSuccess('Error updating sort order.');
                    }
                });
            }
        });
    });
    /*Delete Images */
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
    /*Delete Images */
</script>
@endsection