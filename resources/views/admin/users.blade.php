@extends('layouts.admin.app')

@section('title', 'Users - Ivf1match')

@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">
            <div class="row">
                <div class="col-md-3 col-xl-3">
                    <div class="card blocked-user">
                        <div class="card-body ">
                            <img src="../img/customer-2.jpg" alt="" class="salesman-profile">
                            <span class="salesman-info">
                        <h4>Alena Cutick</h4>
                        <p>Lorem consectetur adipisicing elit. Omnis, voluptas!</p>
                    </span>
                        </div>
                        <div class="card-footer">
                            <span class="blocked-on">Blocked On</span>
                            <span class="date">Oct 10, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-3">
                    <div class="card new-user">
                        <div class="card-body">
                            <img src="../img/customer-1.jpg" alt="" class="salesman-profile">
                            <span class="salesman-info">
                        <h4>Alena Cutick</h4>
                        <p>Lorem consectetur adipisicing elit. Omnis, voluptas!</p>
                    </span>
                        </div>
                        <div class="card-footer">
                            <span class="blocked-on">Created On</span>
                            <span class="date">Oct 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div><!--!row-->

            <div class="row table-controls">
                <!--
                            <div class="col-6">
                                <div class="form-group float-left">
                                    <label for="search">Search</label>
                                    <input type="text" class="form-control" id="search">
                                </div>
                            </div>
                -->
                <!--            <div class="col-md-8"></div>-->
                <div class="col-12">
                    <button class="btn js-btn-new bttn pull-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="dt table  " data-toggle="table" data-search="true"
                               data-pagination="true" id="data-table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Sales Man</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Added By</th>
                                <th scope="col">Added On</th>
                                <th scope="col" class="no-sort">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-warning">Editor</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-info">Employee</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-info">Employee</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-info">Employee</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">01</td>
                                <td>Randy Moriss</td>
                                <td>randy348</td>
                                <td><span class="badge badge-success">Admin</span></td>
                                <td>Todd Cutick</td>
                                <td>Oct 09, 2018</td>
                                <td class="actions">
                                    <a href="#" class="action js-btn-user-edit" data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                       title="Delete"><i
                                                class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
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
    <script src="{{asset('../js/admin/users.js')}}"></script>
@endpush
