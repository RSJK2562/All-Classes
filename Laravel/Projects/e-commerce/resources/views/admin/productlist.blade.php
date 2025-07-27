@extends('admin.layouts.app')
@section('main')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">All Product list</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Website</a></li>
                        <li class="breadcrumb-item active">All Product</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Products</h4>
                    <p class="card-title-desc"></p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>


                        <tbody>
                            @php
                                $sr = 1;
                            @endphp

                            @foreach ($product as $key)
                                <tr>
                                    <td>{{ $sr++ }}</td>
                                    <td>{{ $key->name }}</td>
                                    <td>{{ $key->price }}</td>
                                    <td>{{ $key->discount_price }}</td>
                                    <td>{{ $key->categories->name }}</td>
                                    <td>{{ $key->subcategories->name }}</td>
                                    <td>{{ $key->description }}</td>
                                    <td>
                                        <img src="{{ asset($key->image) }}" alt="{{ $key->name }}" height="50">
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
