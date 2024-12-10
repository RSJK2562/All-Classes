@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Edit Student Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.edit.student.data', $students->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="name"
                                            placeholder="Enter your first name" value="{{ $students->name }}" />
                                        <label for="inputFirstName">Full name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="mobile" type="number" name="mobile"
                                            placeholder="Enter your mobile no" value="{{ $students->mobile }}" />
                                        <label for="mobile">Mobile numbre</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="address" name="address">{{ $students->address }}</textarea>
                                <label for="address">Full address</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <a href="{{ url('/students') }}" class="btn btn-sm btn-secondary">Back</a>
                                    <br>
                                    <button class="btn btn-primary">Update Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
