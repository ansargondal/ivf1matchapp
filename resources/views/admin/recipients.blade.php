@extends('layouts.admin.app')

@section('title', 'Recipients - Ivf1match')

@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">

            <div class="row">
                @foreach($recipients as $recipient)
                    <div class="col-md-6 col-xl-3">
                        <div class="card user">
                            <div class="card-body ">
                                <img src="../img/avatar.png" alt="" class="salesman-profile">
                                <span class="salesman-info">
                        <h4>{{$recipient->fullName}}</h4>
                                <p>{{$recipient->email}}</p>
                                <p><b class="mr-4">Status: </b>
                                    <span class="{{$recipient->statusClass}}">{{ucfirst($recipient->status)}}</span>
                                </p>
                    </span>
                            </div>
                            <div class="card-footer">
                                <span class="blocked-on">Last Updated</span>
                                <span class="date">{{$recipient->updated_at->format('M, d Y')}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!--!row-->

            <div class="row">
                <div class="table-responsive">
                    <table class="dt table" data-toggle="table" data-search="true"
                           data-pagination="true" id="data-table">
                        <thead>

                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="no-sort ">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!--!row-->
        </div>
        {{--        <p>{{route('admin.recipient.status')}}</p>--}}
    </main>

    //including modals
    @include('layouts.admin.modals.recipient.edit')
@endsection

{{--Pushing Recipients only js file--}}
@push('js')
    <script src="{{asset('../js/admin/recipients.min.js')}}"></script>
@endpush