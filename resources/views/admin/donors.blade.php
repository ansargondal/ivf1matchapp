@extends('layouts.admin.app')

@section('title', 'Donors - Ivf1match')

@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">
            <div class="row mx-auto">
                {{--                @foreach($donors as $donor)--}}
                {{--<div class="col-md-6 col-xl-3">--}}
                {{--<div class="card user">--}}
                {{--<div class="card-body ">--}}
                {{--<img src="../img/avatar.png" alt="" class="salesman-profile">--}}
                {{--<span class="salesman-info">--}}
                {{--<h4>{{$donor->fullName}}</h4>--}}
                {{--<p>{{$donor->email}}</p>--}}
                {{--<p><b class="mr-4">Status: </b>--}}
                {{--<span class="{{$donor->statusClass}}">{{ucfirst($donor->status)}}</span>--}}
                {{--</p>--}}
                {{--</span>--}}
                {{--</div>--}}
                {{--<div class="card-footer">--}}
                {{--<span class="blocked-on">Last Updated</span>--}}
                {{--<span class="date">{{$donor->updated_at->format('M, d Y')}}</span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}
            </div><!--!row-->
            <div class="row">
                <div class="table-responsive">
                    <table class="dt table  " data-toggle="table" data-search="true"
                           data-pagination="true" id="data-table">
                        <thead>
                        <tr>
                            <th>Donor ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Weight</th>
                            <th>Cycle</th>
                            <th>Status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!--!row-->
        </div>
    </main>

@endsection

{{--Pushing Donor js file--}}
@push('js')
    <script src="{{asset('../js/admin/donor.min.js')}}"></script>
@endpush