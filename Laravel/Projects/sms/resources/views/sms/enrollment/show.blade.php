@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4"><b>Enrollment.</b></h3>
                        <h5>{{ $enroll->enroll_no }}</h5>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><b>Batch:</b> {{ $enroll->batch->name }}</h4>
                        <p class="card-text"><b>Student:</b> {{ $enroll->student->name }}</p>
                        <p class="card-text"><b>Join Data:</b> {{ $enroll->join_date }}</p>
                        <p class="card-text"><b>Fee:</b> {{ $enroll->fee }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('sms.edit.enroll', $enroll->id) }}" class="btn btn-sm btn-dark">Update</a>
                        <a href="{{ url('/enrollments') }}" class="btn btn-sm btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
