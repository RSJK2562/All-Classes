@extends('admin.layouts.app')
@section('title', 'My Profile')
@section('main')
    <div class="page-content">
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profileData->photo) ? url('admin/upload/admin_img/' . $profileData->photo) : url('admin/upload/no_image.jpg') }}"
                                    alt="profile">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                            <p class="text-muted">{{ $profileData->name ?? '-' }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profileData->phone ?? '-' }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profileData->email ?? '-' }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                            <p class="text-muted">{{ $profileData->role == 0 ? 'Admin' : 'User' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Update Admin Profile</h6>

                                <form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            autocomplete="off" value="{{ $profileData->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            value="{{ $profileData->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phono No</label>
                                        <input type="number" name="phone" class="form-control" id="phone"
                                            value="{{ $profileData->phone }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="file" class="form-label">Photo</label>
                                        <input type="file" name="photo" class="form-control" id="file"
                                            autocomplete="off">
                                    </div>

                                    <div class="mb-3">
                                        <img id="showImg" class="wd-60 rounded-circle"
                                            src="{{ !empty($profileData->photo) ? url('admin/upload/admin_img/' . $profileData->photo) : url('admin/upload/no_image.jpg') }}"
                                            alt="profile">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#file').change(function(e) {
                e.preventDefault();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImg').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
