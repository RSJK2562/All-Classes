<!-- start row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <div class="input-icon input-icon-start position-relative">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark btn-sm">
                        ← Back
                    </a>
                </div>
                @can('role.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">
                        <i class="ti ti-square-rounded-plus-filled me-1"></i>
                        Add Role
                    </a>
                @endcan
            </div>
            <!-- end card header -->
            <div class="card-body">
                <div class="table-search d-flex align-items-center">
                    <div class="search-input">
                        <a href="javascript:void(0);" class="btn-searchset"><i
                                class="isax isax-search-normal fs-12"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $k => $item)
                                <tr>
                                    <td>{{ $k + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @foreach ($item->permissions as $permission)
                                            <span class="badge bg-secondary-gradient">
                                                {{ $permission->name }}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @can('role.edit')
                                            <a href="{{ route('roles.edit', $item->id) }}" class="btn btn-sm btn-info">
                                                <i class="ti ti-edit text-blue"></i>
                                            </a>
                                        @endcan

                                        @can('role.delete')
                                            <form action="{{ route('roles.destroy', $item->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->
