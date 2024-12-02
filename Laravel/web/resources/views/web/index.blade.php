@extends('web.layouts.main')
@section('main-container')
    <!-- Start Banner Area -->
    <div class="main-banner-area-two main-banner-video-area">
        <video loop="" muted="" autoplay="" poster="#" class="background-video">
            <source src="{{url('web/assets/img/banner-video.mp4')}}" type="video/mp4">
        </video>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="main-banner-content">
                                <h1>Unique Platform To Grow Your Business </h1>
                                <p>If you’re looking for the best <strong><q>Web & App Development</q></strong> for your
                                    business, <strong>GautamTech</strong> is the perfect choice. Choose from our Super
                                    Specialities.</p>
                                <div class="banner-btn">
                                    <a href="#" class="default-btn">Get Started</a>
                                    <a href="contact.html" class="optional-btn">Contact Us</a>
                                </div>
                            </div>
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
    </div>
    <!-- End Banner Area -->

    <!-- Start Features Area -->
    <section class="features-section background-art pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Creative Features</h2>
                <p></p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="features-content">
                        <div class="icon">
                            <i class="flaticon-blueprint"></i>
                        </div>
                        <h3>Great Design</h3>
                        <p></p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="features-content">
                        <div class="icon">
                            <i class="flaticon-update"></i>
                        </div>
                        <h3>Optimal Choice</h3>
                        <p></p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="features-content">
                        <div class="icon left-icon">
                            <i class="flaticon-security"></i>
                        </div>
                        <h3>Finest Quality</h3>
                        <p></p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="features-content">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3>Time Saving</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Services Area -->
    <section class="services-section bg-background pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>We Offer a Wide Variety of IT Services</h2>
                <p>Our team can assist you in transforming your business through latest tech capabilities to stay ahead
                    of the curve.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-79e8e2">
                            <i class="flaticon-setting"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-84b7fd">
                            <i class="flaticon-cellphone"></i>
                        </div>
                        <h3>App Development</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-2e1342">
                            <i class="flaticon-optimize"></i>
                        </div>
                        <h3>Software Development</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-fcc774">
                            <i class="flaticon-promotion"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-deb0fe">
                            <i class="flaticon-it"></i>
                        </div>
                        <h3>Content Management Systems (CMS)</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services services-background">
                        <div class="icon bg-fe929f">
                            <i class="flaticon-shopping-cart"></i>
                        </div>
                        <h3>E-commerce Development</h3>
                        <p></p>
                        <!-- <a href="single-services.html" class="read-btn">Read More</a> -->
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
    <!-- End Services Area -->

    <!-- Start Experience Area -->
    <section class="experience-section pricing-section pt-5 pb-100 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experience-inner-area">
                        <div class="experience-content">
                            <h3><span>Working</span> Process</h3>
                            <div class="bar"></div>
                            <p>We Are Popular Because Of Our Way Of Working.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>Analysing The Project</h3>
                            <p>Analyzing a project is a crucial step in managing any type of Project. The project’s path
                                and potential roadblocks can be better understood with analysing the project.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>Planning The Steps</h3>
                            <p>Creating a plan for a project include establishing goals for the undertaking, detailing
                                the actions to achieve those goals, identifying the resources that will be required, and
                                outlining the project’s overall direction</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>Work In Progress​</h3>
                            <p>At GautamTech, we plan our work and pipeline our projects with our expert team to ensure
                                the best possible results.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>Deliver & Explanation​</h3>
                            <p>Obviously, once the job is finished, we will provide it to the client, using analytics
                                and graphical representation, describe the working and functionality of the project.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="experience-image">
                        <img src="{{url('web/assets/img/work.png')}}" alt="image">
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
    <!-- End Experience Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h4>Technologies That Is Driving Innovation And Creating A Better Future For Generations To Come</h4>
                <p>Explore Our Offerings, an enriching gallery of enticing services to reach a monumental destination
                </p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-header">
                            <h3>Front - End</h3>
                            <hr>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                React Js
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Angular Js
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Bootstrap
                            </li>

                            <li>
                                <i class="flaticon-cancel"></i>
                                Vue Js
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                JavaScript
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                HTML / CSS
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-header">
                            <h3>Back - End</h3>
                            <hr>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                PHP
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Laravel
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Node Js
                            </li>

                            <li>
                                <i class="flaticon-cancel"></i>
                                Java
                            </li>

                            <li>
                                <i class="flaticon-cancel"></i>
                                Python
                            </li>

                            <li>
                                <i class="flaticon-cancel"></i>
                                Asp.Net / RoR
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-header">
                            <h3 class="text-center">Mobile</h3>
                            <hr>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                Flutter
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                React
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Kotlin
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Java
                            </li>

                            <li>
                                <i class="flaticon-cancel"></i>
                                Swift
                            </li>


                            <li>
                                <i class="flaticon-cancel"></i>
                                Ionic
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-header">
                            <h3 class="text-center">Design</h3>
                            <hr>
                        </div>

                        <ul class="pricing-list">
                            <li>
                                <i class="flaticon-checked"></i>
                                Photoshop
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Illustrator
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Adobe-XD
                            </li>

                            <li>
                                <i class="flaticon-checked"></i>
                                Figma
                            </li>
                        </ul>
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

    <!-- Start Counter Area -->
    <section class="counter-section pt-100">
        <div class="container">
            <div class="section-title">
                <h2>We have Completed <span>1000+</span> Projects <span>Successfully</span></h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="flaticon-check"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="950">00</span>
                        </h3>
                        <p>Completed Project</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="flaticon-happy"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="150">00</span>
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="550">00</span>
                        </h3>
                        <p>Multi Service</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="750">00</span>
                        </h3>
                        <p>Winning Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->


    <!-- Start Partner Section -->
    <div class="partner-section ptb-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img src="{{url('web/assets/img/partner/1.png')}}" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="{{url('web/assets/img/partner/2.png')}}" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="{{url('web/assets/img/partner/3.png')}}" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="{{url('web/assets/img/partner/4.png')}}" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="{{url('web/assets/img/partner/5.png')}}" alt="partner">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Section -->
@endsection
