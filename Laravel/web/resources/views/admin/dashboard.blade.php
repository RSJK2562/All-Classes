@extends('admin.layouts.main')
@section('main')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Orders</p>
                                                <h4 class="mb-0">1,235</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-copy-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Revenue</p>
                                                <h4 class="mb-0">$35, 723</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-archive-in font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Average Price</p>
                                                <h4 class="mb-0">$16.2</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transaction</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check font-size-16 align-middle">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck01">
                                                        <label class="form-check-label" for="transactionCheck01"></label>
                                                    </div>
                                                </th>
                                                <th class="align-middle">Order ID</th>
                                                <th class="align-middle">Billing Name</th>
                                                <th class="align-middle">Date</th>
                                                <th class="align-middle">Total</th>
                                                <th class="align-middle">Payment Status</th>
                                                <th class="align-middle">Payment Method</th>
                                                <th class="align-middle">View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck02">
                                                        <label class="form-check-label" for="transactionCheck02"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a>
                                                </td>
                                                <td>Neal Matthews</td>
                                                <td>
                                                    07 Oct, 2019
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck03">
                                                        <label class="form-check-label" for="transactionCheck03"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a>
                                                </td>
                                                <td>Jamal Burnett</td>
                                                <td>
                                                    07 Oct, 2019
                                                </td>
                                                <td>
                                                    $380
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck04">
                                                        <label class="form-check-label" for="transactionCheck04"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a>
                                                </td>
                                                <td>Juan Mitchell</td>
                                                <td>
                                                    06 Oct, 2019
                                                </td>
                                                <td>
                                                    $384
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck05">
                                                        <label class="form-check-label" for="transactionCheck05"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a>
                                                </td>
                                                <td>Barry Dick</td>
                                                <td>
                                                    05 Oct, 2019
                                                </td>
                                                <td>
                                                    $412
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck06">
                                                        <label class="form-check-label" for="transactionCheck06"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a>
                                                </td>
                                                <td>Ronald Taylor</td>
                                                <td>
                                                    04 Oct, 2019
                                                </td>
                                                <td>
                                                    $404
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="transactionCheck07">
                                                        <label class="form-check-label" for="transactionCheck07"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a>
                                                </td>
                                                <td>Jacob Hunter</td>
                                                <td>
                                                    04 Oct, 2019
                                                </td>
                                                <td>
                                                    $392
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Transaction Modal -->
        <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
            aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets/images/product/img-7.png" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)
                                                </h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets/images/product/img-4.png" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Sub Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Shipping:</h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        <!-- subscribeModal -->
        <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light rounded-circle text-primary h1">
                                    <i class="mdi mdi-email-open"></i>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <h4 class="text-primary">Subscribe !</h4>
                                    <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get
                                        notification to stay update.</p>

                                    <div class="input-group bg-light rounded">
                                        <input type="email" class="form-control bg-transparent border-0"
                                            placeholder="Enter Email address" aria-label="Recipient's username"
                                            aria-describedby="button-addon2">

                                        <button class="btn btn-primary" type="button" id="button-addon2">
                                            <i class="bx bxs-paper-plane"></i>
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
@endsection
