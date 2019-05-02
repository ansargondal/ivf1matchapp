@extends('layouts.admin.app')
@section('title', 'Dashboard - Overview')

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
                            <a href="{{route('admin.messages.index')}}" class="card-link">Messages<i
                                        class="fa fa-arrow-right"
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
                            <a href="{{route('admin.donors.index')}}" class="card-link">Donors<i
                                        class="fa fa-arrow-right"
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
                            <a href="{{route('admin.recipients.index')}}" class="card-link">Recipients<i
                                        class="fa fa-arrow-right"
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
                            <a href="{{route('admin.users.index')}}" class="card-link">Users<i class="fa fa-arrow-right"
                                                                                               aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--row-->
            <div class="row table-controls">
                <div class="col-12 float-right">
                    <button class="btn bttn js-btn-new float-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row tasks">
                <div class="table-responsive">
                    <table class="table dt" id="data-table">
                        <thead>
                        <tr>
                            <th>Note</th>
                            <th>Type</th>
                            <th>Created At</th>
                            <th class="text-center no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--tasks row-->
        </div>
    </main>

    {{--//including tasks new/edit modals--}}
    @include('layouts.admin.modals.task.create')
    @include('layouts.admin.modals.task.edit')

@endsection

{{--//pushing dashboard only scripts--}}
@push('js')
    <script src="{{asset('../js/admin/tasks.min.js')}}"></script>
@endpush
