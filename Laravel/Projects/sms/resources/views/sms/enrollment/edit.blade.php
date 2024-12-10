@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Edit Enrollment Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.edit.enroll.data', $enroll->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="enroll_no" type="text" name="enroll_no"
                                            placeholder="Enter your enroll no" value="{{ $enroll->enroll_no }}" />
                                        <label for="enroll_no">Enrollment No</label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="batch_id" name="batch_id">
                                            <option selected>Batch Name</option>
                                            @foreach ($batches as $item => $name)
                                                <option value="{{ $item }}"
                                                    @if ($enroll->batch_id == $item) {{ 'selected' }} @endif>
                                                    {{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="student_id" name="student_id">
                                            <option selected>Student Name</option>
                                            @foreach ($students as $item => $name)
                                                <option value="{{ $item }}"
                                                    @if ($enroll->student_id == $item) {{ 'selected' }} @endif>
                                                    {{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="date" type="text" name="join_date"
                                            placeholder="yyyy-mm-dd" value="{{ $enroll->join_date }}" />
                                        <label for="date">Join Data</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="fee" type="text" name="fee"
                                            placeholder="0.0" value="{{ $enroll->fee }}" />
                                        <label for="fee">Fee</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <a href="{{ url('/enrollments') }}" class="btn btn-sm btn-secondary">Back</a>
                                    <br>
                                    <button class="btn btn-primary btn-sm">Update Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
