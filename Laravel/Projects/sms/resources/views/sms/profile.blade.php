@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">SMS Profile</h3>
                        <a href="{{ url('/sms/dashboard') }}" class="btn btn-sm btn-secondary">My Dashboard</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.profile.store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" name="name"
                                        placeholder="Enter your full name" value="{{$profileData->name}}" />
                                    <label for="inputFirstName">Full name</label>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block">Save</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
