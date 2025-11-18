@extends('sms.index')
@section('sms')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-4"><b>Enrollment: </b> {{ $payment->enrollment->enroll_no }}</h3>

                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><b>Enrollment No:</b> {{ $payment->enrollment->enroll_no }}</h4>
                        <p class="card-text"><b>Paid Data:</b> {{ $payment->paid_date }}</p>
                        <p class="card-text"><b>Amount:</b> {{ $payment->amount }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('sms.edit.payment', $payment->id) }}" class="btn btn-sm btn-dark">Update</a>
                        <a href="{{ url('/payments') }}" class="btn btn-sm btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
