@extends('admin.layouts.app')
@section('title', 'Profile Information')
@section('main')
@section('pageName', 'Profile Information')
<!-- start row -->
<div class="row mb-3">

    @include('admin.pages.settings.sidebar')
    
    <div class="col-xl-9 col-lg-12">

        <div class="card mb-0">
            <div class="card-body">
                <div class="border-bottom mb-3 pb-3">
                    <h5 class="mb-0 fs-17">Profile</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <h6 class="mb-1">Profile Information</h6>
                        <p class="mb-0">Update your account's profile information and email address.</p>
                    </div>

                    <div class="border-bottom mb-3">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Name <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="name" name="name" type="text"
                                        value="{{ $user->name }}" required="required" autofocus autocomplete="name">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        value="{{ $user->email }}" required="required" autocomplete="username">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="d-flex align-items-center justify-content-end flex-wrap gap-2">
                        <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                    </div>

                </form>
            </div> <!-- end card body -->
        </div> <!-- end card -->

    </div> <!-- end col -->

</div>
<!-- end row -->
@endsection
