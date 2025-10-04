@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4"><b>Mr.</b> {{ $course->name }}</h3>

                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><b>Name:</b> {{ $course->name }}</h4>
                        <p class="card-text"><b>Syllabus:</b> {{ $course->syllabus }}</p>
                        <p class="card-text"><b>Duration:</b> {{ $course->duration }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('sms.edit.courses', $course->id) }}" class="btn btn-sm btn-dark">Update</a>
                        <a href="{{ url('/courses') }}" class="btn btn-sm btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
