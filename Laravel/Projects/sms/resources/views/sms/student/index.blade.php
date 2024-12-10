@extends('sms.index')
@section('sms')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Student Application</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/sms/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Student</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-table me-1"></i>
                        All Student
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('sms.add.student') }}" class="btn btn-sm btn-success">Add Student</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($students as $value)
                            <tr>
                                <td>{{ $sr++ }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td>{{ $value->address }}</td>
                                <td>
                                    <a href="{{ route('sms.show.student', $value->id) }}"
                                        class="btn btn-sm btn-secondary text-light">View</a>

                                    <a href="{{ route('sms.edit.student', $value->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                        
                                    <a href="{{ route('sms.delete.student', $value->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
