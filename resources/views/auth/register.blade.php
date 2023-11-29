<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>UD AMIRA TANI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo_1/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('') }}">
    <link href="{{ asset('admin/assets/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">

                        {{-- <h2 class="text-center mb-4">Register</h2> --}}
                        <div class="auto-form-wrapper">
                            <div class="login-logo text-center">
                                <img src="{{ asset('images/logo-ud-amira.png') }}" alt="Selamat Datang" width="100px">
                                <br class="text-center mb-4">Register</br>
                                {{-- <a href="#">
                                <img src="{{ asset('images/article.png')}}" alt="Wedding" width="50px">
                            </a> --}}
                            </div>
                            <div class="login-form">
                                <form action="/authenticate" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="au-input au-input--full @error('name') is-invalid @enderror" type="text" name="username" value="{{ old('name') }}" placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                                        <div class="col-md-6 captcha">
                                            <span>{!! captcha_img('flat') !!}</span>
                                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter Captcha</label>
                                        <div class="col-md-6">
                                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                        </div>
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="aggree">Agree The Terms And Policy
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class=""au-input au-input--full
                                                @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" placeholder="Username">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <input type="email class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked> I agree to the
                                                terms </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary submit-btn btn-block">Register</button>
                                    </div>
                                    <div class="text-block text-center my-3">
                                        <span class="text-small font-weight-semibold">Already have and account ?</span>
                                        <a href="login.html" class="text-black text-small">Login</a>
                                    </div> --}}
                                </form>
                                <div class="register-link">
                                    <p>
                                        Sudah punya akun?
                                        <a href="{{ route('login') }}">Daftar Di sini</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/assets/js/demo_1/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('admin/assets/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/js/jquery.form-validator.min.js') }}"></script>
    <script src="{{ asset('plugins/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('plugins/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->

</body>

</html>
