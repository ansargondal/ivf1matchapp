@extends('layouts.frontend.app')
@section('title', 'Donor Profile Details')

{{--Pushing Donor Profile details only stylesheets--}}
@push('css')
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightbox/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/donor-profile-details.css')}}">
@endpush

@section('content')
    <!--profile starts-->
    <section class="section profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="wrap">
                        {{--@foreach($profile->images as $image)--}}
                        {{--@if($loop->first)--}}
                        {{--<a href="{{$image->path}}" data-lightbox="profile-images"> <img src="{{$image->path}}"--}}
                        {{--alt=""--}}
                        {{--class="img-responsive"></a>--}}
                        {{--@else--}}
                        {{--<a href="{{$image->path}}" data-lightbox="profile-images" class="hide"> <img--}}
                        {{--src="{{$image->path}}" alt="" class="img-responsive"></a>--}}
                        {{--@endif--}}
                        {{--@endforeach--}}
                        <h3>Donor #BG 1061</h3>
                    {{--                        <p>{{$profile->personal_message}}</p>--}}
                    <!--                    <button class="btn bttn">Contact Doner</button>-->
                        <a href="#" class="btn bttn">Contact Doner</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">Personal <span>Info</span></a></h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                {{--<li>Age <span class="pull-right">{{$profile->age}}</span></li>--}}
                                                {{--<li>Height <span class="pull-right">{{$profile->height}}</span></li>--}}
                                                {{--<li>Weight <span class="pull-right">{{$profile->weight}}</span></li>--}}
                                                {{--<li>Race <span class="pull-right">{{$profile->race}}</span></li>--}}
                                                {{--<li>Donation <i class="fa {{$profile->donated}} pull-right"></i>--}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                {{--<li>Religion <span class="pull-right">{{$profile->religion}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Adopted <i class="pull-right fa {{$profile->adopted}}"></i></li>--}}
                                                {{--<li>Local <span class="pull-right">Yes</span></li>--}}
                                                {{--<li>Current Cycle <span class="pull-right check"><i--}}
                                                {{--class="fa fa-check"></i></span>--}}
                                                </li>
                                                <li>Donations <span
                                                    {{--class="pull-right">{{sprintf('%02d', $profile->number_of_donations)}}</span>--}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="tru"
                                       aria-controls="collapse2">Family <span>Heritage</span></a></h4>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <ul class="text-left">
                                                {{--<li>Mother's race <span class="pull-right">{{$profile->mother}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Maternal grandmother's race <span--}}
                                                {{--class="pull-right">{{$profile->mothers_mother}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Maternal grandfather's race <span--}}
                                                {{--class="pull-right">{{$profile->mothers_father}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Father's race <span--}}
                                                {{--class="pull-right">	{{$profile->father}}</span></li>--}}
                                                {{--<li>Paternal grandmother's race<span--}}
                                                {{--class="pull-right">{{$profile->fathers_father}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Paternal grandfather's race<span--}}
                                                {{--class="pull-right">{{$profile->fathers_mother}}</span>--}}
                                                {{--</li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
                                       aria-controls="collapse3">Skin & <span>Features</span></a></h4>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <ul class="text-left">
                                                {{--<li>Dexterity<span class="pull-right">{{$profile->dexterity}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Body and facial features<span--}}
                                                {{--class="pull-right">{{$profile->body_facial_features}}</span>--}}
                                                {{--</li>--}}
                                                {{--<li>Bone structure<span class="pull-right"></span></li>--}}
                                                {{--<li>Complexion<span class="pull-right">{{$profile->complexion}}</span>--}}
                                                {{--</li>--}}
                                            </ul>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <ul class="text-left">
                                                {{--<li>Tanning ability<span class="pull-right">Slight</span></li>--}}
                                                {{--<li>Skin condition<span class="pull-right">Medium</span></li>--}}
                                                {{--<li>Dimples<span class="pull-right">No</span></li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                       aria-controls="collapse4">Hearing & <span>Vision</span></a></h4>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="text-left">
                                                <li>Hearing<span class="pull-right">Excellent</span></li>
                                                <li>Vision<span class="pull-right">Excellent</span></li>
                                                <li>Prescription<span class="pull-right"></span></li>
                                                <li>Glasses or corrective laser surgery<span
                                                            class="pull-right">No</span>
                                                </li>
                                                <li>Corrected problem<span class="pull-right check"></span></li>
                                                <li>Other Problem<span class="pull-right"></span></li>
                                                <li>Stigmatism<span class="pull-right">No</span></li>
                                                <li>Age when stigmatism diagnosed<span class="pull-right"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
                                       aria-controls="collapse5">Hair</a></h4>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Hair color<span class="pull-right">	Md brown</span></li>
                                                <li>Hair type<span class="pull-right">Straight</span></li>
                                                <li>Hair texture<span class="pull-right">Medium</span></li>
                                                <li>Hair fullness<span class="pull-right">Thick</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Baldness<span class="pull-right">No</span></li>
                                                <li>Baldness in family<span class="pull-right">Yes</span></li>
                                                <li>Premature graying<span class="pull-right">No</span></li>
                                                <li>Age when started graying<span class="pull-right"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading6">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
                                       aria-controls="collapse6">Eyes</a></h4>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Eye color<span class="pull-right">Blue</span></li>
                                                <li>Eye set<span class="pull-right">Average</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Eye size<span class="pull-right">Average</span></li>
                                                <li>Eye shape<span class="pull-right">Round</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading7">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
                                       aria-controls="collapse7">Teeth</a></h4>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="text-left">
                                                <li>Teeth condition<span class="pull-right">Good</span></li>
                                                <li>Periodontal or orthodontic work<span class="pull-right">Yes</span>
                                                </li>
                                                <li>Age when work was done<span class="pull-right">8</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading8">
                                <h4><a href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true"
                                       aria-controls="collapse8">Donations <span>Reasons</span></a></h4>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="text-left">
                                                <li>I know someone with infertility and always wanted to help.</li>
                                                <li>I think it would be a rewarding experience for me.</li>
                                                <li>I think the process is fascinating and wanted to be involved.</li>
                                                <li>I need the money.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--profile ends-->
@endsection