@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Blogs</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-section pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Latest</span> News</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore
                    magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="BlogDetails">
                                <img src="assets/img/blog/1.jpg" alt="image">
                            </a>
                        </div>

                        <div class="content">
                            <span>20 March 2024</span>
                            <h3>
                                <a href="BlogDetails">
                                    Great Tips To Earn More Money From Digital Industry
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>
                            <a href="BlogDetails" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="BlogDetails">
                                <img src="assets/img/blog/2.jpg" alt="image">
                            </a>
                        </div>

                        <div class="content">
                            <span>23 April 2024</span>
                            <h3>
                                <a href="BlogDetails">
                                    The Billionaire Guide On Design That will Get You Rich
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>
                            <a href="BlogDetails" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="BlogDetails">
                                <img src="assets/img/blog/3.jpg" alt="image">
                            </a>
                        </div>

                        <div class="content">
                            <span>27 June 2024</span>
                            <h3>
                                <a href="BlogDetails">
                                    Making Peace With The Feast Or Famine Of Freelancing
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>
                            <a href="BlogDetails" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers">
                            <i class="flaticon-left"></i>
                        </a>
                        <a href="#" class="page-numbers">1</a>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
