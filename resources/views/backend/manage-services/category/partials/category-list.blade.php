<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10%">#</th>
                <th>Service Category Name</th>
                <th>Slug</th>
                <th width="15%">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $key => $service)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $service->title }}</td>
                <td>
                    {{ $service->slug }}
                </td>
                <td>
                    <div class="d-flex gap-2" style="display: flex;">
                        <a href="javascript:void(0);" data-edit-service-category="true" data-size="md" data-title="Edit {{ $service->name }}" data-url="{{ route('service-categories.edit', $service->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Edit {{ $service->name }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil icon-xs"></i>
                        </a>
                        <form method="POST" action="{{ route('service-categories.destroy', $service->id) }}" style="margin-left: 10px;">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <a href="javascript:void(0);" title="Delete {{ $service->name }}" data-name="{{ $service->name }}" class="show_confirm btn btn-danger btn-sm" data-title="Delete {{ $service->name }}" data-bs-toggle="tooltip">
                                <i class="fa fa-trash icon-xs"></i>
                            </a>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    No service categories found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>