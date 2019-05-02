<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ivf1match') </title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/ivf1match.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
</head>
<body id="page-top" data-spy="scroll" data-target="#navbar-main" data-offset="100">

<!--Main Navigation-->
<nav class="navbar navbar-dark navbar-dark navbar-expand-md" id="navbar-main">
    <a href="{{route('frontend.index')}}" class="navbar-brand">
        <img src="{{asset('img/ivf1-match-logo.png')}}" alt="LOGO" class="img-fluid">
    </a>
    <button class="navbar-toggler" data-target="#main-nav" data-toggle="collapse">
        <!--<span class="navbar-toggler-icon"></span>-->
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('frontend.index')}}#process" class="nav-link active">HOW IT WORKS</a>
            </li>
            @guest
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#signup_modal" class="nav-link">SIGN
                        UP</a></li>
                <li class="nav-item"><a href="{{route('login.show')}}" class="nav-link">LOG IN</a></li>
            @endguest
            @auth
                <li class="nav-item"><a href="{{route('admin.dashboard')}}" class="nav-link">DASHBOARD</a></li>
                <li class="nav-item"><a href="{{route('auth.logout')}}" class="nav-link">LOG OUT</a></li>
            @endauth
            <li class="nav-item text-center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('donor.profiles')}}"
                                                                         class="bttn btn">Donor
                    Profiles</a></li>
        </ul>
    </div>
</nav><!--nav-->