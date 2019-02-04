@extends('layouts.frontend.app')
@section('title', 'Donor Profile Details')

{{--Pushing Donor Profile details only stylesheets--}}
@push('css')
    <link rel="stylesheet" href="{{asset('vendor/lightbox/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/donor-profile-details.css')}}">
@endpush
@section('content')
    <!--profile starts-->
    <section class="section profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="wrap">
                        @foreach($profile->images as $image)
                            @if($loop->first)
                                <a href="{{asset('storage/' . $image->path)}}" data-lightbox="profile-images">
                                    <img src="{{asset('storage/photos/' . $image->path)}}" alt=""
                                         class="img-responsive">
                                </a>
                            @else
                                <a href="{{asset('storage/'. $image->path)}}"
                                   data-lightbox="profile-images" class="hide"> <img
                                            src="{{asset('storage/photos/' . $image->path)}}" alt=""
                                            class="img-responsive"></a>
                            @endif
                        @endforeach
                        <h3>Donor #BG 1061</h3>
                        <p>{{str_limit($profile->personal_message, 130)}}</p>
                        <a href="#" class="btn bttn">Contact Donor</a>
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
                                                <li>Age <span class="pull-right">{{$profile->age}}</span></li>
                                                <li>Height <span class="pull-right">{{$profile->height}}</span></li>
                                                <li>Weight <span class="pull-right">{{$profile->weight}}</span></li>
                                                <li>Race <span class="pull-right">{{$profile->race}}</span></li>
                                                <li>Donation <i class="fa {{$profile->donated}} pull-right"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Religion <span class="pull-right">{{$profile->religion}}</span>
                                                </li>
                                                <li>Adopted <i class="pull-right fa {{$profile->adopted}}"></i></li>
                                                <li>Local <span class="pull-right">Yes</span></li>
                                                <li>Current Cycle <span class="pull-right check"><i
                                                                class="fa fa-check"></i></span>
                                                </li>
                                                <li>Donations <span
                                                            class="pull-right">{{sprintf('%02d', $profile->number_of_donations)}}</span>
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
                                                <li>Mother's race <span class="pull-right">{{$profile->mother}}</span>
                                                </li>
                                                <li>Maternal grandmother's race <span
                                                            class="pull-right">{{$profile->mothers_mother}}</span>
                                                </li>
                                                <li>Maternal grandfather's race <span
                                                            class="pull-right">{{$profile->mothers_father}}</span>
                                                </li>
                                                <li>Father's race <span
                                                            class="pull-right">	{{$profile->father}}</span></li>
                                                <li>Paternal grandmother's race<span
                                                            class="pull-right">{{$profile->fathers_father}}</span>
                                                </li>
                                                <li>Paternal grandfather's race<span
                                                            class="pull-right">{{$profile->fathers_mother}}</span>
                                                </li>
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
                                                <li>Dexterity<span class="pull-right">{{$profile->dexterity}}</span>
                                                </li>
                                                <li>Body and facial features<span
                                                            class="pull-right">{{$profile->body_facial_features}}</span>
                                                </li>
                                                <li>Bone structure<span class="pull-right"></span></li>
                                                <li>Complexion<span class="pull-right">{{$profile->complexion}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <ul class="text-left">
                                                <li>Tanning ability<span class="pull-right">{{$profile->tan}}</span>
                                                </li>
                                                <li>Skin condition<span class="pull-right">{{$profile->skin}}</span>
                                                </li>
                                                <li>Dimples <i class="pull-right fa {{$profile->dimples}}"></i></li>
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
                                                <li>Hearing<span class="pull-right">{{$profile->hearing}}</span></li>
                                                <li>Vision<span class="pull-right">{{$profile->vision}}</span></li>
                                                <li>Prescription<span
                                                            class="pull-right">{{$profile->vision_prescription}}</span>
                                                </li>
                                                <li>Glasses or corrective laser surgery<i
                                                            class="pull-right fa {{$profile->glasses}}"></i>
                                                </li>
                                                <li>Corrected problem<span class="pull-right check"></span></li>
                                                <li>Other Problem<span class="pull-right"></span></li>
                                                <li>Stigmatism<i class="pull-right fa {{$profile->stigmatism}}"></i>
                                                </li>
                                                <li>Age when stigmatism diagnosed<span
                                                            class="pull-right">{{$profile->stigmatism_age}}</span></li>
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
                                                <li>Hair color<span
                                                            class="pull-right">	{{$profile->hair_color}}</span></li>
                                                <li>Hair type<span class="pull-right">{{$profile->hair_type}}</span>
                                                </li>
                                                <li>Hair texture<span
                                                            class="pull-right">{{$profile->hair_texture}}</span></li>
                                                <li>Hair fullness<span
                                                            class="pull-right">{{$profile->hair_fullness}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Baldness<i class="pull-right fa {{$profile->baldness}}"></i></li>
                                                <li>Baldness in family<i
                                                            class="pull-right fa {{$profile->baldness_family}}"></i>
                                                </li>
                                                <li>Premature graying<i
                                                            class="pull-right fa {{$profile->graying}}"></i>
                                                </li>
                                                <li>Age when started graying<span
                                                            class="pull-right">{{$profile->graying_age}}</span></li>
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
                                                <li>Eye color<span class="pull-right">{{$profile->eye_color}}</span>
                                                </li>
                                                <li>Eye set<span class="pull-right">{{$profile->eye_set}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <ul class="text-left">
                                                <li>Eye size<span class="pull-right">{{$profile->eye_size}}</span></li>
                                                <li>Eye shape<span class="pull-right">{{$profile->eye_shape}}</span>
                                                </li>
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
                                                <li>Teeth condition<span class="pull-right">{{$profile->teeth}}</span>
                                                </li>
                                                <li>Periodontal or orthodontic work<i
                                                            class="pull-right fa {{$profile->orthodontic_work}}"></i></span>
                                                </li>
                                                <li>Age when work was done<span
                                                            class="pull-right">{{$profile->orthodontic_age}}</span></li>
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
                                                @if($profile->knows_someone)
                                                    <li><i class="fa fa-check "></i> I know someone with
                                                        infertility and always wanted to help.
                                                    </li>
                                                @endif

                                                @if($profile->rewarding)
                                                    <li><i class="fa fa-check "></i> I think it would be a
                                                        rewarding experience for me.
                                                    </li>
                                                @endif

                                                @if($profile->fascinating)
                                                    <li><i class="fa fa-check "></i> I think the process is
                                                        fascinating and wanted to be involved.
                                                    </li>
                                                @endif
                                                @if($profile->need_money)
                                                    <li><i class="fa fa-check "></i> I need the money.</li>
                                                @endif
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

{{--Pushing Donor Profile Details only JS files --}}
@push('js')
    <script src="{{asset('js/donor-details.min.js')}}"></script>
    <script src="{{asset('vendor/lightbox/lightbox.js')}}"></script>
@endpush
