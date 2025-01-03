@extends('web.layouts.main')
@section('main-container')
    <!-- Start Error Area -->
    <section class="error-area mb-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="{{url('web/assets/img/404.png')}}" alt="error">

                        <h3>Page Not Found</h3>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable.</p>

                        <a href="{{url('/')}}" class="default-btn">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->
@endsection
