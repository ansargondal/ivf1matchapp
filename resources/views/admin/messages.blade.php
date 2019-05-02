@extends('layouts.admin.app')

@section('title', 'Messages - Ivf1match')

@section('content')
    <main class="main message" id="messages">
        <div class="c-container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="messages"><i class="fa fa-files-o" aria-hidden="true"></i></li>
                                <li>Messages</li>
                                <li><span class="divider"></span></li>
                                <li class="total">{{$message_count->total}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="read"><i class="fa fa-envelope-open" aria-hidden="true"></i></li>
                                <li>Read</li>
                                <li><span class="divider"></span></li>
                                <li class="total">{{$message_count->read}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="unread"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                                <li>Unread</li>
                                <li><span class="divider"></span></li>
                                <li class="total">{{$message_count->unread}}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table " data-toggle="table"
                           data-search="true" data-pagination="true" id="data-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Sender Id</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!--!row-->
        </div>
    </main>

    {{--Including Messages--}}
    @include('layouts.admin.modals.message.show')
    @include('layouts.admin.modals.message.reply')
    @include('layouts.admin.modals.message.notification')


@endsection

{{--Pushing Recipients only js file--}}
@push('js')
    <script src="{{asset('../js/admin/messages.min.js')}}"></script>
@endpush