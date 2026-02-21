<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Gtechs</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" id="app-style">
</head>

<body class="account-page bg-white">

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <div class="overflow-hidden p-3 acc-vh">

            <!-- start row -->
            <div class="row vh-100 w-100 g-0">

                <div class="col-lg-6 vh-100 overflow-y-auto overflow-x-hidden">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-md-10 mx-auto">
                            <form method="POST" action="{{ route('login') }}"
                                class=" vh-100 d-flex justify-content-between flex-column p-4 pb-0">
                                @csrf

                                <div class="text-center mb-4 auth-logo">
                                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <h3 class="mb-2">Sign In</h3>
                                        <p class="mb-0">Access the CRMS panel using your email and passcode.</p>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" class="form-control" name="email"
                                                :value="old('email')" required autofocus autocomplete="username">
                                            <span class="input-group-text">
                                                <i class="ti ti-mail"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group input-group-flat pass-group">
                                            <input type="password" class="form-control pass-input" name="password"
                                                required autocomplete="current-password">
                                            <span class="input-group-text toggle-password">
                                                <i class="ti ti-eye-off"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="form-check form-check-md d-flex align-items-center">
                                            <input class="form-check-input mt-0" type="checkbox" name="remember"
                                                id="checkebox-md" checked>
                                            <label class="form-check-label text-dark ms-1" for="checkebox-md">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                    </div>
                                </div>
                                <div class="text-center pb-4">
                                    <p class="text-dark mb-0">Copyright &copy;
                                        <script type="880a94ffb112f24e446a15e5-text/javascript">document.write(new Date().getFullYear())</script> - Gtechs
                                    </p>
                                </div>
                            </form>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>

                <div class="col-lg-6 account-bg-01"></div> <!-- end col -->

            </div>
            <!-- end row -->

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/assets/js/jquery-3.7.1.min.js')}}" type="880a94ffb112f24e446a15e5-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}" type="880a94ffb112f24e446a15e5-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/assets/js/script.js')}}" type="880a94ffb112f24e446a15e5-text/javascript"></script>

    <script src="{{ asset('admin/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="880a94ffb112f24e446a15e5-|49" defer=""></script>
</body>

</html>
