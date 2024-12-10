@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4">Create New Payment</h3>
                        <a href="{{ url('/payments') }}" class="btn btn-sm btn-secondary">All Payment</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sms.add.new.payment') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="enrollment_id" name="enrollment_id">
                                            <option selected>Enrollment No</option>
                                            @foreach ($payment as $item => $enrollment_id)
                                                <option value="{{ $item }}">{{ $enrollment_id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="date" type="text" name="paid_date"
                                            placeholder="yyyy-mm-dd" />
                                        <label for="date">Paid Data</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="amount" type="text" name="amount"
                                            placeholder="0.0" />
                                        <label for="amount">Amount</label>
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
