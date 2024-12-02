@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Digital Marketing</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Digital Marketing </li>
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
                        <h3>Digital <span>Marketing</span></h3>
                        <div class="bar"></div>
                        <p>We help you to boost your reputation and grow your business with affordable digital marketing
                            services such as SEO and SMM. Our expertise in these areas can help you develop effective
                            strategies that will allow you to achieve your goals with our affordable services.</p>
                        <p class="fw-bold">Search Engine Optimization</p>
                        <p>
                            Benefit from professional search engine optimization services and see your website rise in the
                            rankings on all the major search engines. Make more people aware of your website by employing
                            best practises in search engine optimization and seeing your lead count rise.
                        </p>
                        <p class="fw-bold">Social Media Management</p>
                        <p>
                            Social Media Marketing (SMM) is a popular and acknowledged way for businesses and start-ups to
                            advertise their product or services and reach their target audience. SMM helps exposing the
                            various benefits of social media to businesses.
                        </p>
                        <ul class="digital-list">
                            <li>
                                <i class="flaticon-check"></i>
                                SEO Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Social Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Facebook Marketing
                            </li>
                            <li>
                                <i class="flaticon-check"></i>
                                Email Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Page Ranking
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Youtube Marketing
                            </li>


                        </ul>

                        <div class="digital-btn">
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="digital-image">
                        <img src="{{url('web/assets/img/digital.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Area -->
@endsection
