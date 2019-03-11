@extends('layouts.frontend.app')
@section('title', 'Login - Ivf1match')
{{--Pushing Login Only css file--}}
@push('css')
    <link rel="stylesheet" href="{{asset('css/frontend/login.css')}}">
@endpush
@section('content')
    <div class="wrap1">
        <div class="login-container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <form action="{{route('login.authenticate')}}" method="post" id="form-login" class="ivf" autocomplete="off">
                        @csrf
                        <div class="user-group text-center">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="error"></span>
                            <a href="#forgot-password-modal" data-backdrop="static" data-keyboard="false"
                               data-toggle="modal" id="forgot">Forgot
                                password?</a><br>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-login bttn btn-submit" type="submit" id="submit">Sign In</button>
                        </div>

                        <div class="form-group link-signup">
                            <a href="#" data-toggle="modal" data-target="#signup_modal">Don't have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="forgot-password-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post">
                    <div class="modal-header">
                        <h6 class="modal-title">RECOVER PASSWORD</h6>
                        <a href="#" class="close" data-dismiss="modal">&times</a>
                    </div>
                    <div class="modal-body">
                        <div class="row px-2 py-3">
                            <div class="col-md-12 mx-auto">
                                <div class="form-group">
                                    <label for="email">Enter your registered email address</label>
                                    <input type="text" class="form-control" tabindex="0" id="user-email"
                                           name="email" autofocus>
                                    <!--<span class="error">Email is invalid</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  bg-danger" id="js-btn-delete" type="submit">Recover Password</button>
                        <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{--Pushing Login Only js file--}}
@push('js')
    <script src="js/login.min.js"></script>
@endpush
