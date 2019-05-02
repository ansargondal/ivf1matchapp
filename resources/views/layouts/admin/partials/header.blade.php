<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/data-table/data-table.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/data-table.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
    <title>@yield('title', 'Dashboard - Overview')</title>
</head>
<body id="dashboard-page">
<div class="box header-box">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand">
            <a href="#" class="navbar-brand js-sb-toggle">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <span class="page-title">Dashboard</span>
            <ul class="nav navbar-nav ml-auto ">
                <li class="nav-item">
                    <a href="{{route('frontend.index')}}" class="nav-link" data-toggle="tooltip" data-placement="bottom"
                       title="Visit Website"><i class="fa fa-space-shuttle"></i></a>
                </li>
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link " data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger badge-pill">{{sprintf('%01d',$message_count->unread)}}</span>
                    </a>
                    @if(count($messages))
                        <div class="dropdown-menu message-dropdown">
                            @foreach($messages as $message)
                                <a href="{{route('admin.messages.index', ['filter' => $message->id])}}"
                                   class="dropdown-item">
                                    <span class="initials">{{$message->sender->intials}}</span>
                                    <p>
                                        <span class="username font-weight-bold">{{$message->sender->fullName}} </span>
                                        <span class="message-excerpt">{{$message->message}}</span>
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </li>
                <li class="nav-item dropdown profile-dropdown">
                    <a href="user-profile.php" class="nav-link" data-toggle="dropdown">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{route('admin.user.profile')}}" class="dropdown-item">Edit Profile</a>
                        <a href="{{route('admin.user.password.edit')}}" class="dropdown-item">Change Password</a>
                        <a href="{{route('auth.logout')}}" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</div>