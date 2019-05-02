@extends('layouts.admin.app')

@section('title', 'Users - Ivf1match')

@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">
            <div class="row">

                @foreach($users as $user)
                    <div class="col-md-3 col-xl-3">
                        <div class="card ">
                            <div class="card-body ">
                                <img src="../img/avatar.png" alt="" class="salesman-profile">
                                <span class="salesman-info">
                        <h4>{{$user->fullName}}</h4>
                                <p>{{$user->email}}</p>
                                <p><b class="pr-4">Role:</b> {{$user->roles[0]->name}}</p>
                    </span>
                            </div>
                            <div class="card-footer">
                                <span class="blocked-on">Added On</span>
                                <span class="date">{{$user->created_at->format('M, d Y')}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!--!row-->

            <div class="row table-controls">
                <div class="col-12">
                    <button class="btn js-btn-new bttn pull-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="dt table " id="data-table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Added On</th>
                                <th scope="col" class="no-sort">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--!row-->
        </div>
    </main>

    {{--including users modals--}}
    @include('layouts.admin.modals.user.create')
    @include('layouts.admin.modals.user.edit')
@endsection

@push('js')
    <script src="{{asset('../js/admin/users.min.js')}}"></script>
@endpush
