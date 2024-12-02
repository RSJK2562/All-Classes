@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Website Development</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Website Development </li>
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
                        <h3><span>Website</span> Development</h3>
                        <div class="bar"></div>
                        <p>Web development encompasses the tasks involved in creating websites for the Internet (World
                            Wide Web) or a private network (intranet). It can range from developing a simple static page
                            of plain text to complex web-based applications, electronic businesses, and social
                            networking services. Key tasks in web development include web engineering, web design, web
                            content development, client-side and server-side scripting, web server and network security
                            configuration, and e-commerce development. Among professionals, "web development" typically
                            refers to the core non-design aspects of building websites, such as writing markup and
                            coding. Content management systems (CMS) are often used in web development to facilitate
                            easier content updates, even for those with basic technical skills.</p>
                        <br>
                        <p class="fw-bold">Our Website Designing and Development Packages:</p>
                        <ul class="digital-list">
                            <li>
                                <i class="flaticon-check"></i>
                                Startup Website (Best for Small Business)
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Small Business (Best for Midsize Business)
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                Ecommerce Website (Best for eCommerce and Large-Scale Business)
                            </li>
                        </ul>

                        <div class="digital-btn">
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="digital-image">
                        <img src="{{url('web/assets/img/webbg/UI-UX design-pana.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Area -->
@endsection
