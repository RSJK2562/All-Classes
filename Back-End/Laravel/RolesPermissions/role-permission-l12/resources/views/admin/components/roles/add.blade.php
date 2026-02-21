<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <div class="input-icon input-icon-start position-relative">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark btn-sm">
                        ← Back
                    </a>
                </div>
                <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">
                    <i class="ti ti-brand-livewire me-1"></i>
                    All Roles
                </a>
            </div>
            <!-- end card header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST"
                    action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}">
                    @csrf
                    @if (isset($role))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Role Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your Role Name" value="{{ $role->name ?? '' }}">
                                @error('name')
                                    <samp class="text-danger">{{ $message }}</samp>
                                @enderror
                            </div>
                        </div>
                        <h6 class="fs-15">Select Permissions</h6>
                        @foreach ($permissions as $item)
                            <div class="col-lg-3 col-6 mb-2">
                                <div class="form-check form-checkbox-success">
                                    <input type="checkbox" class="form-check-input" name="permissions[]"
                                        value="{{ $item->name }}" id="perm-{{ $item->id }}"
                                        {{ in_array($item->name, $rolePermissions ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="perm-{{ $item->id }}">{{ $item->name }}</label>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="submit"
                                    class="btn btn-primary">{{ isset($role) ? 'Update' : 'Submit' }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
