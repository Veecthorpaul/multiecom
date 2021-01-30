  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DBillsInvest - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Best Cryptocurrency Investment Platform" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset("assets/images/favs.png")}}" style="width: 4%">

        <!-- Bootstrap Css -->
        <link href="{{asset("assets/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- App Css--> 
        <link href="{{asset("assets/css/app.min.css")}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index-2.html" class="logo logo-dark">
                                <span class="logo-sm">
                                
                                    <img src="{{asset("assets/images/favs.png")}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset("assets/images/billslogo.png")}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="'index')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src=" {{asset("assets/images/favs.png")}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset("assets/images/billslogo.png")}}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset("assets/images/users/user.jpg")}}"
                                    alt="Header Avatar">
                                {{-- <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span> --}}
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="admin.profile"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{url('admin/settings')}}"><i class="bx bx-lock font-size-16 align-middle mr-1"></i>Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ url('admin/logout') }}" class="dropdown-item text-danger"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>