@extends('sms.index')
@section('sms')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Batches Application</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/sms/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Batches</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-table me-1"></i>
                        All Batches
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('sms.add.batches') }}" class="btn btn-sm btn-success">Add Batches</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Batch Name</th>
                            <th>Course Name</th>
                            <th>Start Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($batch as $value)
                            <tr>
                                <td>{{ $sr++ }}</td>
                                <td>{{ $value->name }}</td>
                                {{-- <td>{{ $value->course_id }}</td> --}}
                                <td>{{ $value->course->name }}</td>
                                <td>{{ $value->start_data }}</td>
                                <td>
                                    <a href="{{ route('sms.show.batch', $value->id) }}"
                                        class="btn btn-sm btn-secondary text-light">View</a>

                                    <a href="{{ route('sms.edit.batch', $value->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>

                                    <a href="{{ route('sms.delete.batch', $value->id) }}"
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
