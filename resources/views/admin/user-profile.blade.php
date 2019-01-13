@extends('layouts.admin.app')

@section('title', 'User Profile - Ivf1match')

@section('content')
    <main class="main" id="user-profile">
        <form action="#" method="post" class="user-info" id="user-info">
            <div class="row">
                <div class="col-md-8">
                    <h3>User Info</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" autofocus class="form-control" id="username"
                                       name="username">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" id="first-name" name="first_name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="last_name">
                            </div>
                        </div>
                    </div><!--!row-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address">

                            </div>
                        </div>
                    </div><!--!row-->
                    <!--!row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="note">Note</label>
                                <input type="text" class="form-control" id="note" name="note">

                            </div>
                        </div>
                    </div><!--!row-->
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary bttn">UPDATE
                                <i class="fa fa-spinner hide_spinner" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div><!--!row-->
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-head">
                            <img src="../img/profile.jpeg" alt="profile image" class="profile-pic">
                        </div>
                        <div class="card-body">
                            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                architecto
                                aut
                                corporis culpa,
                                dolorum eaque earum est, et explicabo fuga ipsam.</p>
                        </div>
                        <div class="card-footer">
                            <ul class="social-icons">
                                <li class="icon"><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li class="icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="icon"><a href="#"><i class="fa fa-google-plus"
                                                                aria-hidden="true"></i></a>
                                </li>
                                <li class="icon"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--!row-->
        </form>
    </main>
@endsection

{{--Pushing User Profile only js file--}}
@push('js')
    <script src="{{asset('../js/admin/user-profile.js')}}"></script>
@endpush