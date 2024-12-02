@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-tab">
                        <h2>About US</h2>
                        <div class="bar"></div>
                        <p>Our Secret Work Recipe - Customer Interaction - Scope Analysis - Brainstorming - Sprints
                            Planning - Sprint Development - Testing - Deployment - After Support.</p>

                        <div class="tab about-list-tab">
                            <ul class="tabs fw-bold">
                                <li>
                                    <a href="#">
                                        Who We Are
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Our Mission & Vision Statement
                                    </a>
                                </li>
                            </ul>

                            <div class="tab_content">
                                <div class="tabs_item">
                                    <div class="text">
                                        <h3>Over a decade, we have grown steadily to meet the changing requirements and
                                            challenging demands of our clients.</h3>
                                    </div>

                                    <ul class="list">
                                        <li>
                                            <i class="flaticon-tick"></i>
                                            Today we are successful software development and consultation company known
                                            for our experience, professionalism and creativity in Software development,
                                            Digital Branding, Web and Mobile Apps development, SEO/SMO, Software
                                            Consultancy and Software Re-engineering.
                                        </li>

                                        <li>
                                            <i class="flaticon-tick"></i>
                                            At GautamTech, we are passionate about turning innovative ideas into
                                            powerful realities. As a leading software development company, we strive to
                                            create cutting-edge solutions that drive success and growth for businesses
                                            worldwide. Our team of dedicated professionals is committed to delivering
                                            high-quality, customized software solutions that cater to the unique needs
                                            of our clients.
                                        </li>
                                    </ul>

                                    <a class="default-btn" href="#">
                                        Get Started
                                    </a>
                                </div>

                                <div class="tabs_item">
                                    <div class="text">
                                        <h3>Mission Statement</h3>
                                    </div>
                                    <p>At Gautam Technologies, our mission is to inject a burst of innovation into every
                                        business we touch. We're on a relentless pursuit to shake up the IT solutions
                                        scene, fueled by a fiery passion for pushing boundaries and sparking digital
                                        revolutions. Our mission? To administer game-changing tech solutions that pack a
                                        punch, leaving our clients equipped. So buckle up, because with us, the future
                                        of IT isn't just bright – it's idiosyncratic.</p>

                                    <div class="text">
                                        <h3>Vision Statement</h3>
                                    </div>
                                    <p>
                                        Gautam Technologies is here to redefine the panorama of IT solutions and empower
                                        businesses to flourish in this digital era. We envision a future where
                                        technology indefectibly integrates with every aspect of business operations,
                                        driving efficiency, innovation, and growth. With a commitment to excellence and
                                        a passion for innovation, we strive to be the trusted acquaintance that entitles
                                        businesses to achieve their full potential.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Choose Area -->
    <section class="choose-section mt-5 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>"Strive not to be a success, but rather to be of value." -- Albert Einstein</p>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center services-details-overview">
                <div class="col-lg-6 services-details-desc">
                    <div class="services-details-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Expertise:
                                </a>

                                <p class="accordion-content show">
                                    With years of experience in the industry, our team of talented developers, designers,
                                    and engineers brings a wealth of expertise to every project. We stay ahead of the curve
                                    by continually upgrading our skills and staying abreast of the latest technological
                                    advancements.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Customer-Centric Approach:
                                </a>

                                <p class="accordion-content">
                                    At GautamTech, our clients' success is our top priority. We take the time to understand
                                    our clients' goals and objectives, tailoring our solutions to meet their specific
                                    requirements. Our customer-centric approach ensures that we deliver solutions that
                                    exceed expectations.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Cutting-Edge Solutions:
                                </a>

                                <p class="accordion-content">
                                    We are passionate about innovation and embrace the latest technologies to deliver
                                    state-of-the-art solutions. From mobile app development and web applications to
                                    enterprise software, we take pride in providing cutting-edge solutions that give our
                                    clients a competitive edge.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Quality Assurance:
                                </a>

                                <p class="accordion-content">
                                    Our commitment to quality is unwavering. We follow stringent quality assurance processes
                                    throughout the development lifecycle, ensuring that every product we deliver is robust,
                                    secure, and scalable.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Timely Delivery:
                                </a>

                                <p class="accordion-content">
                                    We understand the importance of timely project delivery. Our DevOps methodology allows
                                    us to stay on track, delivering projects on time without compromising on quality.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Long-Term Support:
                                </a>

                                <p class="accordion-content">
                                    Our relationship with our clients doesn't end after project delivery. We provide
                                    comprehensive post-launch support and maintenance services, ensuring smooth operation
                                    and troubleshooting, whenever required.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 my-auto text-center">
                    <div class="choose-image">
                        <img src="{{url('web/assets/img/experience.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Area-->

    <!-- Start Team Area -->
    <section class="team-section pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Expert Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item">
                        <div class="image">
                            <img src="{{url('web/assets/img/team/1.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Alex Maxwel</h3>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item">
                        <div class="image">
                            <img src="{{url('web/assets/img/team/2.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Williams Halimton</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3">
                    <div class="team-item">
                        <div class="image">
                            <img src="{{url('web/assets/img/team/3.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Juhon Dew</h3>
                            <span>CEO</span>
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
    <!-- End Team Area -->

    <!-- Start Faq Area -->
    <section class="faq-section pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Frequently <span>Asked</span> Questions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    What access do I have on the free plan?
                                </a>

                                <div class="accordion-content show">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    What access do I have on a free trial?
                                </a>

                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Does the price go up as my team gets larger?
                                </a>

                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    How can I cancel my subscription?
                                </a>

                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Can I pay via an Invoice?
                                </a>

                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-image">
                        <img src="{{url('web/assets/img/faq.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq Area -->

    <!-- Start Clients Area -->
    <section class="clients-section pb-100">
        <div class="container">
            <div class="section-title">
                <h2>What Clients Say About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="clients-slider owl-carousel owl-theme">
                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Moris Jacker</h3>
                        <span>Web Developer</span>
                    </div>
                </div>

                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Alex Maxwel</h3>
                        <span>Agent Management</span>
                    </div>
                </div>

                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Edmond Halley</h3>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Area -->
@endsection
