@extends('admin.layouts.app')
@section('title', 'Security Setting')
@section('main')
@section('pageName', 'Security Setting')
<!-- start row -->
<div class="row mb-3">

    @include('admin.pages.settings.sidebar')

    <div class="col-xl-9 col-lg-12">

        <div class="card mb-0">
            <div class="card-body">
                <div class="border-bottom mb-3 pb-3">
                    <h5 class="mb-0 fs-17">Security</h5>
                </div>
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                        <h6 class="mb-1">Update Password</h6>
                        <p class="mb-0">Ensure your account is using a long, random password to stay secure.</p>

                    </div>

                    <div class="border-bottom mb-3">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Current Password <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="update_password_current_password"
                                        name="current_password" type="password" autocomplete="current-password">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        New Password <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="update_password_password" name="password"
                                        type="password" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Confirm Password <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="update_password_password_confirmation"
                                        name="password_confirmation" type="password" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="d-flex align-items-center justify-content-end flex-wrap gap-2">
                        <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                    </div>

                </form>
            </div> <!-- end card body -->
        </div> <!-- end card -->

    </div>

</div>
<!-- end row -->
@endsection
