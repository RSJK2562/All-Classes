@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Box Area -->
    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-4 col-md-6">
                      <div class="single-contact-box">
                       <i class="flaticon-pin"></i>
                       <div class="content-title">
                        <h3>Address</h3>
                        <p>32 st Kilda Road, Melbourne VIC, 3004 Australia</p>
                       </div>
                      </div>
                                    </div> -->

                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="flaticon-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="mailto:raviup198@gmail.com">raviup198@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="flaticon-phone-call"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="tel:+91 7521878485">+91 7521878485</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->

    <!-- Start Contact Area -->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-text">
                        <h3>Want to Connect</h3>
                        <p>With our versatile team of designers, developers, and digital marketers, you can grow your online
                            journey with us. Our team members have a sense of responsibilty and a handfull of experience.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" required=""
                                    data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" required=""
                                    data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                    required="" data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required=""
                                    data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-image">
                        <img src="{{ url('web/assets/img/contact.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
