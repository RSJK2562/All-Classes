@extends('web.layouts.app')
@section('main')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Shop now</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Default Sorting:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                    form="fruitform">
                                    <option value="volvo">Nothing</option>
                                    <option value="saab">Popularity</option>
                                    <option value="opel">Organic</option>
                                    <option value="audi">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Categories</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                            @foreach ($category as $item)
                                                <li data-cat_id="{{ $item->id }}" class="cat_li">
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="javascript:void(0)"><i
                                                                class="fas fa-apple-alt me-2"></i>{{ $item->name }}</a>
                                                        <span>(3)</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Price</h4>
                                        <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput"
                                            min="0" max="100000" value="0"
                                            oninput="amount.value=rangeInput.value">
                                        <output id="amount" name="amount" min-value="0" max-value="100000"
                                            for="rangeInput">0</output>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Sub Categories</h4>
                                        @foreach ($subcategories as $item)
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-1" name="sub_category"
                                                    value="{{ $item->id }}">
                                                <label for="Categories-1"> {{ $item->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center shop_search_product">
                                @include('web.inc.shop_search')


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('input[name=sub_category]').on('click', function() {
                const sub_cat_id = $(this).val();
                var data = {
                    sub_cat_id: sub_cat_id
                };
                getProduct(data)
            });

            $('.cat_li').on('click', function() {
                const cat_id = $(this).data('cat_id');
                var data = {
                    cat_id: cat_id
                };
                getProduct(data)
            });

            $('input[name=rangeInput]').on('change', function() {
                const range = $(this).val();
                var data = {
                    range: range
                };
                getProduct(data)
            });

            function getProduct(data) {
                $.ajax({
                    type: "GET",
                    url: "{{ url()->current() }}",
                    data: data,
                    success: function(response) {
                        $('.shop_search_product').html(response);
                    }
                });
            }



            // long type
            
            // $('input[name=sub_category]').on('click', function() {
            //     const sub_cat_id = $(this).val();
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ url()->current() }}",
            //         data: {
            //             sub_cat_id,
            //         },
            //         success: function(response) {
            //             $('.shop_search_product').html(response);
            //         }
            //     });
            // });

            // $('.cat_li').on('click', function() {
            //     const cat_id = $(this).data('cat_id');
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ url()->current() }}",
            //         data: {
            //             cat_id,
            //         },
            //         success: function(response) {
            //             $('.shop_search_product').html(response);
            //         }
            //     });
            // });

            // $('input[name=rangeInput]').on('change', function() {
            //     const range = $(this).val();
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ url()->current() }}",
            //         data: {
            //             range,
            //         },
            //         success: function(response) {
            //             $('.shop_search_product').html(response);
            //         }
            //     });
            // });
        });
    </script>
@endpush
