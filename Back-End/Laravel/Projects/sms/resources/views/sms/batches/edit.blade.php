@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Edit Batches Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.edit.batch.data', $batch->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputBatchName" type="text" name="name"
                                            placeholder="Enter your Batch name" value="{{ $batch->name }}" />
                                        <label for="inputBatchName">Batch Name</label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="course_id" name="course_id">
                                            <option selected>Course Name</option>
                                            @foreach ($course as $item => $name)
                                                <option value="{{ $item }}"
                                                    @if ($batch->course_id == $item) {{ 'selected' }} @endif>
                                                    {{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="date" type="text" name="start_data"
                                            placeholder="yyyy-mm-dd" value="{{ $batch->start_data }}" />
                                        <label for="date">Start Data</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <a href="{{ url('/batches') }}" class="btn btn-sm btn-secondary">Back</a>
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
