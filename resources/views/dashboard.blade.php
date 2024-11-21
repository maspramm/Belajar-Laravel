<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pram</title>
    <link rel="shortcut icon" type="image/png"
        href="{{asset('Modernize/src/assets/images/logos/app-development.png')}}" />
    <link rel="stylesheet" href="{{asset('Modernize/src/assets/css/styles.min.css')}}">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @extends('partial/sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!--  Sidebar End -->
            <!--  Main wrapper -->
            <div class="body-wrapper">
                <!--  Header Start -->
                <header class="app-header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('Modernize/src/assets/images/profile/user-1.jpg')}}" alt=""
                                            width="35" height="35" class="rounded-circle">
                                        <span class="ms-2">{{ Auth::user()->name }}</span> <!-- Add this line -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href={{route('profile.edit')}}
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-user fs-6"></i>
                                                <p class="mb-0 fs-3">My Profile</p>
                                            </a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="d-flex align-items-center gap-2 dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    <i class="ti ti-logout fs-6"></i>
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <!--  Header End -->
                <div class="container-fluid">
                    <!--  Row 1 -->
                    <div class="row">
                        @section('content')
                        @show
                    </div>
                </div>
            </div>
            <script src="{{asset('Modernize/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/js/sidebarmenu.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/js/app.min.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/libs/simplebar/dist/simplebar.js')}}"></script>
            <script src="{{asset('Modernize/src/assets/js/dashboard.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>


</html>