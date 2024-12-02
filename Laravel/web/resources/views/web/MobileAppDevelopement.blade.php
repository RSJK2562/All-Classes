@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Mobile App Development</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Mobile App Development </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Digital Area -->
    <section class="digital-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="digital-content">
                        <h3><span> Mobile App</span> Development</h3>
                        <div class="bar"></div>
                        <p>
                            Mobile app development involves creating applications for mobile devices such as
                            smartphones, tablets, and personal digital assistants. These apps can be pre-installed on
                            devices during manufacturing or delivered as web applications that use server-side or
                            client-side processing (e.g., JavaScript) to offer an "app-like" experience within a web
                            browser. Developers must account for a wide range of screen sizes, hardware specifications,
                            and configurations due to the competitive nature of the mobile software market and the
                            frequent updates to platforms. The field of mobile app development has seen steady growth,
                            generating significant revenue and job opportunities.
                        </p>
                        <br>
                        <p class="fw-bold">Our Mobile Application Development Service:</p>
                        <ul class="digital-list">
                            <li>
                                <i class="flaticon-check"></i>
                                Android App Development
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                iOS App Development
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Hybrid App Development
                            </li>
                        </ul>

                        <div class="digital-btn">
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="digital-image">
                        <img src="{{url('web/assets/img/webbg/Mobile UI-UX-bro.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Area -->
@endsection
