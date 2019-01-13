@extends('layouts.admin.app')
@section('title', 'Dashboard - Overview')

@push('css')
    <link rel="stylesheet" href="{{asset('../css/dashboardonly.css')}}">
@endpush
@section('content')
    <main class="main">
        <div class="c-container">
            <div class="row  overview-cards">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-head">
                            <i class="fa fa-envelope-open" aria-hidden="true"></i>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <span class="sales-text">Messages</span>
                                    <span class="sales-amount">2000</span>
                                </li>
                                <li>
                                    <span class="sales-text">Unread</span>
                                    <span class="sales-amount">1000</span>
                                </li>
                                <li>
                                    <span class="sales-text">Read</span>
                                    <span class="sales-amount">1000</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="message.html" class="card-link">Messages<i class="fa fa-arrow-right"
                                                                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-head">
                            <i class="fa fa-code-fork" aria-hidden="true"></i>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <span class="sales-text">Donors</span>
                                    <span class="sales-amount">4000</span>
                                </li>
                                <li>
                                    <span class="sales-text">Active</span>
                                    <span class="sales-amount">170</span>
                                </li>
                                <li>
                                    <span class="sales-text">In Active</span>
                                    <span class="sales-amount">700</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="donor.html" class="card-link">Donors<i class="fa fa-arrow-right"
                                                                            aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-head">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <span class="sales-text">Recipients</span>
                                    <span class="sales-amount">4000</span>
                                </li>
                                <li>
                                    <span class="sales-text">Active</span>
                                    <span class="sales-amount">170</span>
                                </li>
                                <li>
                                    <span class="sales-text">In Active</span>
                                    <span class="sales-amount">700</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="recipient.html" class="card-link">Recipients<i class="fa fa-arrow-right"
                                                                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-head">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <span class="sales-text">Users</span>
                                    <span class="sales-amount">9,000</span>
                                </li>
                                <li>
                                    <span class="sales-text">Active</span>
                                    <span class="sales-amount">200</span>
                                </li>
                                <li>
                                    <span class="sales-text">Blocked</span>
                                    <span class="sales-amount">200</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="users.html" class="card-link">Users<i class="fa fa-arrow-right"
                                                                           aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--row-->
            <div class="row table-controls">
                <!--
                            <div class="col-md-2 ">
                                <div class="form-group float-left">
                                    <label for="search">Search</label>
                                    <input type="text" class="form-control" id="search">
                                </div>
                            </div>
                -->
                <div class="col-12 float-right">
                    <button class="btn bttn js-btn-new float-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row tasks">
                <div class="table-responsive">
                    <table class="table table-justified dt" data-toggle="table" data-search="true"
                           data-pagination="true"
                           id="data-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Note</th>
                            <th>Type</th>
                            <th>Added On</th>
                            <!--
                                                    <th>Due Date</th>
                                                    <th class="text-center">Time Remaining</th>
                            -->
                            <th class="text-center no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td>
                            <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--tasks row-->
        </div>
    </main>

    //including tasks new/edit modals
    @include('layouts.admin.modals.task.create')
    @include('layouts.admin.modals.task.edit')
    
@endsection


