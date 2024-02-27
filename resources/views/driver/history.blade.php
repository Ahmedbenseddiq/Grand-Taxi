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
    <title>Driver</title>

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
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="Grand Taxi" />
                        </a>
                    </div>
                   <div class="header__navbar">
                         <ul class="list-unstyled">
                             
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();"> <i class="zmdi zmdi-power"></i>
                                        {{ __('Log Out') }}
                                    </a>
                               </form>  
                            </li>  
                        </ul> 
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"> <i class="zmdi zmdi-power"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>  
                        </li>  
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <!-- <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10 mt5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>{{ $userName }}!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

            <!-- END WELCOME-->

            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{ $driverCount }}</h2>
                                <span class="desc">drivers</span>
                                <div class="icon">
                                    <i class="fas fa-car"></i></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{ $clientCount }}</h2>
                                <span class="desc">clients</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{ $driverReservationsCount }}</h2>
                                <span class="desc">reservation</span>
                                <div class="icon ">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- DATA TABLE-->
            <<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">History</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                       
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{ route('driver.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Add Trip
                        </a>
                        <a href="{{ route('driver.availability') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-eye"></i>Availability
                        </a>  
                        <a href="{{ route('driver.payment') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-money"></i>Payment
                        </a>   
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($driverReservations as $reservation)
                            <tr class="tr-shadow">
                                <td>{{ $reservation->name }}</td>
                                <td>
                                    <span class="block-email">{{ $reservation->driver_trip_id }}</span>
                                </td>
                                <td class="desc">{{ $reservation->client_id }}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>
                                    <!-- <span class="status--process">{{ $reservation->status }}</span> -->
                                </td>
                               
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2024 . All rights reserved. created by <a href="">ahmed benseddiq</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{URL::asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->


