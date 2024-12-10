@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4"><b>Mr.</b> {{ $students->name }}</h3>

                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><b>Name:</b> {{ $students->name }}</h4>
                        <p class="card-text"><b>Mobile:</b> {{ $students->mobile }}</p>
                        <p class="card-text"><b>Address:</b> {{ $students->address }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('sms.edit.student', $students->id) }}" class="btn btn-sm btn-dark">Update</a>
                        <a href="{{ url('/students') }}" class="btn btn-sm btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
