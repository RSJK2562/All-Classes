﻿@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Sign Up</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Signup Area -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="signup-form">
                <h3>Create your Account</h3>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Keep Me Sign Up</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Sign Up Now
                                </button>
                            </div>
                            <br>
                            <span>Already a registered user? <a href="logIn">Login!</a></span>
                        </div>
                    </div>
                </form>
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
    <!-- End Signup Area -->
@endsection
