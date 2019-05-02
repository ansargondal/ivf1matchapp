@extends('layouts.admin.app')

@section('title', 'Change Password - Ivf1match')

@section('content')
    <main class="main" id="user-profile">
        <form action="{{route('admin.user.password.update')}}" method="post" class="user-info" id="user-info">
            @csrf
            <div class="row">
                <div class="col-md-10 border px-3 pb-3">
                    <h3>Change Password</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="old-password">Old Password</label>
                                <input type="password" class="form-control" id="old-password" name="old_password"
                                       required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" class="form-control" id="new-password" name="new_password">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="repeat_password"
                                       name="repeat_password">
                            </div>
                        </div>
                    </div>
                    <!--!row-->
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary bttn">UPDATE
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
    <script src="{{asset('../js/admin/user-profile.js')}}"></script>
@endpush