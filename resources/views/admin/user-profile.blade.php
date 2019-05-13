@extends('layouts.admin.app')

@section('title', 'User Profile - Ivf1match')

@section('content')
    <main class="main" id="user-profile">
        <form action="{{route('admin.users.update', $user->id)}}" method="post" class="user-info" id="form-user-update">
            <div class="row">
                <div class="col-md-10 border px-3 pb-3">
                    <h3>User Info</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" id="first-name" name="first_name"
                                       value="{{$user->fname}}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" value="{{$user->lname}}" id="last-name"
                                       name="last_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" disabled class="form-control" id="email" value="{{$user->email}}"
                                       name="email">
                            </div>
                        </div>
                    </div>
                    <!--!row-->
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary bttn" id="js-btn-update">UPDATE
                                <i class="fa fa-spinner hide_spinner" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div><!--!row-->
                </div>


            </div><!--!row-->
        </form>
    </main>
@endsection

{{--Pushing User Profile only js file--}}
@push('js')
    <script src="{{asset('../js/admin/user-profile.min.js')}}"></script>
@endpush