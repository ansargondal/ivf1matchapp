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
    <link rel="stylesheet" href="{{asset('../css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('../css/data-table.css')}}">
    <!--    <link rel="shortcut icon" href="../img/med-van.ico" type="image/x-icon">-->
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
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link " data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger badge-pill">22</span>
                    </a>
                    <div class="dropdown-menu message-dropdown">
                        <a href="#" class="dropdown-item">
                            <span class="initials">RM</span>
                            <p>
                                <span class="username font-weight-bold">Randy Moriss</span>
                                <span class="message-excerpt">I 'm new donor so feel free to get in touch with me, I 'm here
                                to donate my sperms...</span>
                            </p>
                        </a><a href="#" class="dropdown-item">
                            <span class="initials">TC</span>
                            <p>
                                <span class="username font-weight-bold">Todd Cutick</span>
                                <span class="message-excerpt">I 'm new donor so feel free to get in touch with me, I 'm here
                                to donate my sperms...</span>
                            </p>
                        </a><a href="#" class="dropdown-item">
                            <span class="initials">RB</span>
                            <p>
                                <span class="username font-weight-bold">Jason Almasy</span>
                                <span class="message-excerpt">I 'm new donor so feel free to get in touch with me, I 'm here
                                to donate my sperms...</span>
                            </p>
                        </a><a href="#" class="dropdown-item">
                            <span class="initials">AG</span>
                            <p>
                                <span class="username font-weight-bold">Alina Cutick</span>
                                <span class="message-excerpt">I 'm new donor so feel free to get in touch with me, I 'm here
                                to donate my sperms...</span>
                            </p>
                        </a><a href="#" class="dropdown-item">
                            <span class="initials">AG</span>
                            <p>
                                <span class="username font-weight-bold">John Doe</span>
                                <span class="message-excerpt">I 'm new donor so feel free to get in touch with me, I 'm here
                                to donate my sperms...</span>
                            </p>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown profile-dropdown">
                    <a href="user-profile.php" class="nav-link" data-toggle="dropdown">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">View Profile</a>
                        <a href="#" class="dropdown-item">Edit Profile</a>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</div>