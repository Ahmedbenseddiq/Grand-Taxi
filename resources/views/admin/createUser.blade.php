<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" href="favicon.png">

    <!-- Title Page-->
    <title>sing up</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Full Name" required autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required autocomplete="email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input class="au-input au-input--full" type="file" name="image" accept="image/*">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label>Are you a driver or a passenger?</label>
                                    <select class="au-input au-input--full" name="role" style="padding: 10px;">
                                        <option value="driver">Driver</option>
                                        <option value="client">Client</option>
                                    </select>
                                </div>



                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                            </form>

                            <div class="register-link">
                                <p>Already have an account? <a href="{{ route('login') }}">Login Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->