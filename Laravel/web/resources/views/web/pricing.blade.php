@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Packages</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h3><span> <big>1</big> year free</span> maintenance for <span>all IT services</span> Plan.</h3>
                <p>PRICING AND PACKAGES</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing">
                        <div class="pricing-header">
                            <h3>WEBSITE</h3>
                            <p>STARTER</p>
                        </div>

                        <div class="price">
                            <sup>$</sup>95.83<sub></sub>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                Dynamic Website  
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                SEO
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Official Emails
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                1 Year Hosting
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                1 Year Domain
                            </li>

                            <li>
                                Many More...
                            </li>
                        </ul>

                        <div class="price-btn">
                            <a href="Contact" class="default-btn">
                                Get this Offer !
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing">
                        <div class="pricing-header">
                            <h3>MOBILE APP</h3>
                            <p>STARTER</p>
                        </div>

                        <div class="price">
                            <sup>$</sup>239.59<sub></sub>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                E Commerce App
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Taxi Booking App
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Food Delivery App
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Service App
                            </li>

                            <li>
                               <i class="flaticon-checked"></i>
                                MLM Application
                            </li>

                            <li>
                                Many more...
                            </li>
                        </ul>

                        <div class="price-btn">
                            <a href="Contact" class="default-btn">
                                Get this Offer !
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-pricing">
                        <div class="pricing-header">
                            <h3>SOFTWARE</h3>
                            <p>STARTER</p>
                        </div>

                        <div class="price">
                            <sup>$</sup>179.69<sub></sub>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                Billing Software
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                CRM & ERP
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Inventory Software
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                School Management ERP
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                MLM Software
                            </li>

                            <li>
                                Many More...
                            </li>
                        </ul>

                        <div class="price-btn">
                            <a href="Contact" class="default-btn">
                                Get this Offer !
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="{{url('web/assets/img/shape/4.png')}}" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="{{url('web/assets/img/shape/5.svg')}}" alt="image">
            </div>

            <div class="shape-3">
                <img src="{{url('web/assets/img/shape/6.svg')}}" alt="image">
            </div>

            <div class="shape-4">
                <img src="{{url('web/assets/img/shape/7.png')}}" alt="image">
            </div>

            <div class="shape-5">
                <img src="{{url('web/assets/img/shape/8.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->
@endsection