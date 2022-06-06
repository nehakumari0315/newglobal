<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
    <title>
        Businesses
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{url('assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>
<style>
    .card {
    box-shadow: none;
    border: 1px solid #7361ec36;
}
</style>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="index.html" target="_blank">
                    <img src="{{url('assets/img/logo.svg')}}" class="navbar-brand-img h-100" alt="main_logo">
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  " href="index.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-dashboard cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-users cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="businesses.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-suitcase cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Businesses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="categories.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-bars cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="specializations.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-american-sign-language-interpreting cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Specializations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="banner.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sliders cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Banners</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="profile.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user cursor-pointer" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav ms-md-auto  justify-content-end">
                        <li class="nav-item dropdown pe-2 d-flex align-items-center ">
                            <a href="javascript:;"
                                class="nav-link text-body  icon-lg profile shadow border-radius-md w-100 bg-white"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="profile-img">
                                    <img src="{{url('assets/img/marie.jpg')}}" alt="profile" class="img-fluid">
                                </div>
                                <span class="d-sm-inline d-none">John Deo</span>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item border-radius-md" href="profile.html">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient3  me-3  my-auto">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Profile
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="login.html">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-danger  me-3  my-auto">
                                                <i class="fa fa-power-off"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Logout
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center ">
                            <a href="javascript:;"
                                class="nav-link text-body icon-lg notification shadow border-radius-md bg-white"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{url('assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{url('assets/img/small-logos/logo-spotify.svg')}}"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center shadow border-radius-md bg-white text-body icon-lg">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="content-wrapper">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="header-area">
                                <h4 class="font-weight-bolder mb-0">Specializations</h4>
                                <a href="add-specializations.html" class="btn bg-gradient-primary"> Add Specializations</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body specialization-area">
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>
                                <button type="button" class="btn btn-lg mb-0 me-2">Specializations1</button>

                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <footer class="footer pt-3 pb-3 ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            Copyright © 2021
                            <a href="index.html" class="font-weight-bold" target="_blank">Findirly.</a>
                            All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <!--   Core JS Files   -->
    <script src="{{url('assets/js/core/popper.min.js')}}"></script>
    <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>