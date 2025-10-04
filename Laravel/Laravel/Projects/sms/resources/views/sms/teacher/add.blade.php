@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Add New Teacher</h3>
                        <a href="{{ url('/teachers') }}" class="btn btn-sm btn-secondary">All Teachers</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.add.new.teacher') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputFirstName" type="text" name="name"
                                            placeholder="Enter your first name" />
                                        <label for="inputFirstName">Full name</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="mobile" type="number" name="mobile"
                                            placeholder="Enter your mobile no" />
                                        <label for="mobile">Mobile numbre</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="email" type="email" name="email"
                                            placeholder="abc@gmail.com" />
                                        <label for="mobile">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="address" name="address"></textarea>
                                <label for="address">Full address</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block">Save Data</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
