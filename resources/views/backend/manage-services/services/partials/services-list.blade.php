<table class="table table-striped dt-responsive display">
    <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Main Image</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse($services as $key => $service)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>
                {{ $service->category->title ?? 'N/A' }}
            </td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->subtitle }}</td>
            <td>
                @if($service->main_image)
                <img src="{{ asset('upload/services/'.$service->main_image) }}"
                    width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('manage-services.edit', $service->id) }}"
                    class="btn btn-primary btn-sm">
                    Edit
                </a>
                <form action="{{ route('manage-services.destroy', $service->id) }}"
                    method="POST"
                    style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="btn btn-danger btn-sm show_confirm"
                        data-name="{{ $service->title }}">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">
                No services found.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
<div class="my-pagination">
    {{ $services->links('vendor.pagination.bootstrap-4') }}
</div>