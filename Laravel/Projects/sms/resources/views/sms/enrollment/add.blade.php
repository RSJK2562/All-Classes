@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Add New Enrollment</h3>
                        <a href="{{ url('/enrollments') }}" class="btn btn-sm btn-secondary">All Enrollment</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.add.new.enroll') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="enroll_no" type="text" name="enroll_no"
                                            placeholder="Enter your enroll no" />
                                        <label for="enroll_no">Enrollment No</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="batch_id" name="batch_id">
                                            <option selected>Batch Name</option>
                                            @foreach ($batches as $item => $name)
                                                <option value="{{ $item }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="student_id" name="student_id">
                                            <option selected>Student Name</option>
                                            @foreach ($students as $item => $name)
                                                <option value="{{ $item }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="date" type="text" name="join_date"
                                            placeholder="yyyy-mm-dd" />
                                        <label for="date">Join Data</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="fee" type="text" name="fee"
                                            placeholder="0.0" />
                                        <label for="fee">Fee</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block btn-sm">Save Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
