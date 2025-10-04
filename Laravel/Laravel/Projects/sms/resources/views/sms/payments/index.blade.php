@extends('sms.index')
@section('sms')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Payments</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/sms/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Payment</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-table me-1"></i>
                        All Payment
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('sms.create.payment') }}" class="btn btn-sm btn-success">Create Payment</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enroll NO</th>
                            <th>Paid Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($payment as $value)
                            <tr>
                                <td>{{ $sr++ }}</td>
                                <td>{{ $value->enrollment->enroll_no }}</td>
                                <td>{{ $value->paid_date }}</td>
                                <td>{{ $value->amount }}</td>
                                <td>
                                    <a href="{{ route('sms.show.payment', $value->id) }}"
                                        class="btn btn-sm btn-secondary text-light">View</a>

                                    <a href="{{ route('sms.edit.payment', $value->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>

                                    <a href="{{ route('sms.delete.payment', $value->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>

                                    <a href="{{ route('sms.print.report', $value->id) }}" class="btn btn-dark btn-sm">
                                        <i class="fa-solid fa-print"></i> Print
                                    </a>
                                </td>   
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
