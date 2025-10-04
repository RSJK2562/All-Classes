@extends('sms.index')
@section('sms')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Enrollment Application</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/sms/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Enrollment</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-table me-1"></i>
                        All Enrollment
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('sms.add.enroll') }}" class="btn btn-sm btn-success">Add Enrollment</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enroll No</th>
                            <th>Batch</th>
                            <th>Student</th>
                            <th>Join Date</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($enroll as $value)
                            <tr>
                                <td>{{ $sr++ }}</td>
                                <td>{{ $value->enroll_no }}</td>
                                <td>{{ $value->batch->name }}</td>
                                <td>{{ $value->student->name }}</td>
                                <td>{{ $value->join_date }}</td>
                                <td>{{ $value->fee }}</td>
                                <td>
                                    <a href="{{ route('sms.show.enroll', $value->id) }}"
                                        class="btn btn-sm btn-secondary text-light">View</a>

                                    <a href="{{ route('sms.edit.enroll', $value->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>

                                    <a href="{{ route('sms.delete.enroll', $value->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
