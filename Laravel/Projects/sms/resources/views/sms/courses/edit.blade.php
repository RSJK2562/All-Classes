@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Edit Course Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.edit.course.data', $course->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCourseName" type="text" name="name"
                                            placeholder="Enter your Course name" value="{{ $course->name }}" />
                                        <label for="inputCourseName">Course name</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="syllabus" type="text" name="syllabus"
                                            placeholder="Enter your syllabus" value="{{ $course->syllabus }}" />
                                        <label for="syllabus">Syllabus</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="duration" name="duration">{{ $course->duration }}</textarea>
                                <label for="duration">Duration</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <a href="{{ url('/courses') }}" class="btn btn-sm btn-secondary">Back</a>
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
