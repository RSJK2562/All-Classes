@extends('admin.layouts.app')
@section('main')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Create All Product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Website</a></li>
                        <li class="breadcrumb-item active">Create Products</li>
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
                    <h4 class="card-title">Create Product</h4>

                    <form id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="col-md-2 col-form-label">Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" placeholder="Product title"
                                    id="title" name="title" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="price" class="col-md-2 col-form-label">Price</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" placeholder="₹ 0.0" id="price"
                                    name="price" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="discount_price" class="col-md-2 col-form-label">Discount Price</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" placeholder="₹ 0.0"
                                    id="discount_price" name="discount_price" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Category</label>
                            <div class="col-md-10">
                                <select class="form-select" name="category_id" id="category_id" required>
                                    <option>Select category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sub_category_id" class="col-md-2 col-form-label">SubCategory</label>
                            <div class="col-md-10">
                                <select class="form-select" name="sub_category_id" id="sub_category_id" required>
                                    <option>Select sub category</option>
                                    @foreach ($subCategory as $item)
                                        <option value="{{ $item->id }}" class="sub_cat_options" data-category-id="{{ $item->category_id }}" style="display: none">
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="mb-3 row">
                            <label for="sub_category_id" class="col-md-2 col-form-label">Sub Category</label>
                            <div class="col-md-10">
                                <select class="form-select" name="sub_category_id" id="sub_category_id" required>
                                    <option>Select sub category</option>
                                    @foreach ($subCategory as $item)
                                        <option value="{{ $item->id }}" class="sub_cat_options"
                                            data-category-id="{{ $item->category_id }}" style="display: none">
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="mb-3 row">
                            <label for="image" class="col-md-2 col-form-label">Product image</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" id="image" name="image" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="description" class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" type="file" id="description" name="description" required> </textarea>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-md-10 mt-4">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary waves-effect waves-light">Create Product</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@push('scripts')
    <script>
        $('select[name=category_id]').change(function(e) {
            e.preventDefault();
            var category_id = $(this).val();
            $('.sub_cat_options').hide();
            $('.sub_cat_options[data-category-id=' + category_id + ']').show();
        });
    </script>

    {{-- ajax --}}
    <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('product.store') }}",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    success: function(response) {
                        $('#myForm')[0].reset();
                        if (response.success) {
                            alert('Product created successfully!');
                        }
                    },
                    error: function(err) {
                        alert(
                            'An error occurred while creating the product. Please try again.'
                        );
                    },
                });

            });
        });
    </script>
@endpush
