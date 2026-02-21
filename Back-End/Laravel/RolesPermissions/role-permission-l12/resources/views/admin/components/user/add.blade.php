<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <div class="input-icon input-icon-start position-relative">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark btn-sm">
                        ← Back
                    </a>
                </div>
                <a href="{{ route('gt-users.index') }}" class="btn btn-primary btn-sm">
                    <i class="ti ti-brand-livewire me-1"></i>
                    All Users
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
                    action="{{ isset($user) ? route('gt-users.update', $user->id) : route('gt-users.store') }}">
                    @csrf
                    @if (isset($user))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Name" value="{{ $user->name ?? '' }}">
                                @error('name')
                                    <samp class="text-danger">{{ $message }}</samp>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email" value="{{ $user->email ?? '' }}">
                                @error('email')
                                    <samp class="text-danger">{{ $message }}</samp>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter Password">
                                @error('password')
                                    <samp class="text-danger">{{ $message }}</samp>
                                @enderror
                            </div>
                        </div>
                        <h6 class="fs-15">Select Roles</h6>
                        @foreach ($roles as $k => $item)
                            <div class="col-lg-12 col-12 mb-2">
                                <div class="form-check form-checkbox-danger">
                                    <input type="checkbox" class="form-check-input" name="roles[]"
                                        value="{{ $item->name }}" id="role-{{ $k + 1 }}"
                                        {{ in_array($item->name, $userRoles ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="role-{{ $k + 1 }}">{{ $item->name }}</label>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <button type="submit"
                                    class="btn btn-primary">{{ isset($user) ? 'Update' : 'Submit' }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
