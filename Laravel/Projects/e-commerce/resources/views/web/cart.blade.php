@extends('web.layouts.app')
@section('main')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartData as $item)
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($item->product->image) }}" class="img-fluid me-5 rounded-circle"
                                            style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->product->name }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->product->discount_price }} ₹</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button
                                                class="btn btn-sm btn-minus rounded-circle bg-light border cartPlusMinus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="number" class="form-control form-control-sm text-center border-0"
                                            value="{{ $item->quantity }}" name="quantity" data-cart_id="{{ $item->id }}"
                                            data-price="{{ $item->product->discount_price }}">
                                        <div class="input-group-btn">
                                            <button
                                                class="btn btn-sm btn-plus rounded-circle bg-light border cartPlusMinus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4 total_product_price">{{ $item->product->discount_price }} ₹</p>
                                </td>
                                <td>
                                    <button class="btn btn-md rounded-circle bg-light border mt-4 removeCartData"
                                        data-cart_id="{{ $item->id }}">
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
                <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply
                    Coupon</button>
            </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal:</h5>
                                <p class="mb-0" id="subTotal">00.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Shipping</h5>
                                <div class="">
                                    <p class="mb-0">40 ₹</p>
                                </div>
                            </div>
                            <p class="mb-0 text-end"></p>
                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p class="mb-0 pe-4" id="grandTotal">00.00</p>
                        </div>
                        <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="button">Proceed Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            function calculateTotals() {
                let grandTotal = 0;
                let subTotal = 0;
                // Loop through each row in the table body
                $("tbody tr").each(function() {
                    const quantity = parseFloat($(this).find("input[name='quantity']").val());
                    const price = parseFloat($(this).find("input[name='quantity']").data("price"));

                    if (!isNaN(quantity) && !isNaN(price)) {
                        const total = quantity * price;

                        // Update the total price for this product
                        $(this).find(".total_product_price").text(`${total.toFixed(2)} ₹`);

                        // Add to grand total
                        grandTotal += total;

                    }
                });
                subTotal = grandTotal + 40;

                $("#subTotal").text(`${grandTotal.toFixed(2)} ₹`);

                // Update the grand total in a designated element (if needed)
                $("#grandTotal").text(`${subTotal.toFixed(2)} ₹`);

            }
            calculateTotals();

            $('.cartPlusMinus').click(function() {
                var $quantityInput = $(this).parents('td').find('input[name=quantity]');
                var qty = $quantityInput.val();
                var cartId = $quantityInput.data('cart_id');
                var price = $quantityInput.data('price');
                // var total = price * qty;
                // $(this).closest('tr').find('.total_product_price').text(total.toFixed(2) + ' ₹');
                calculateTotals();

                $.ajax({
                    type: "POST",
                    url: "{{ route('add.cart') }}",
                    data: {
                        qty: qty,
                        cartId: cartId,
                        price: price,
                    },
                    // dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                        }
                    }
                });
            });

            $('.removeCartData').click(function() {
                var cartId = $(this).data('cart_id');
                var $this = $(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('remove.cart') }}",
                    data: {
                        cartId: cartId,
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            $this.parents('tr').remove();
                            $('.cart_counter').text(response.cart_count);
                        }
                    }
                });
            });
        });
    </script>
@endpush
