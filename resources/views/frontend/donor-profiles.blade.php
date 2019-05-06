@extends('layouts.frontend.app')
@section('title', 'Donor Profiles')

{{--pushing donor profiles stylesheets--}}
@push('css')
    <link rel="stylesheet" href="{{asset('css/frontend/donor-profiles.css')}}">
@endpush
@section('content')
    <section class="section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Browse All the available <span>donors</span> based on their <span>Race, Location</span> , Eyes &
                        Local
                        or</p>
                    <p>Sign Up as recipient to get in touch with them.All of the messages will be moderated by admin</p>
                    <br><br>
                    <a href="{{route('recipient.register.show')}}" class="bttn">Become a Recipient</a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section ends-->

    <!--DONOR PROFILE FILTERS-->
    <section class="section filters">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Donor Profile <span>Filters</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="race-tab" data-toggle="tab" href="" data-target="#race"
                               role="tab" aria-controls="race" aria-selected="true">Race</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hair-tab" data-toggle="tab" href="" data-target="#hair" role="tab"
                               aria-controls="hair" aria-selected="false">Hair</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eyes-tab" data-toggle="tab" href="" data-target="#eyes" role="tab"
                               aria-controls="eyes" aria-selected="false">Eyes</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="filters">
                        <div class="tab-pane fade show active" id="race" role="tabpanel" aria-labelledby="race-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="caucasian">
                                    <span class='indicator'></span>
                                    Caucasian
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="hispanic">
                                    <span class='indicator'></span>
                                    Hispanic
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="mixed">
                                    <span class='indicator'></span>
                                    Mixed
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="black(carib)">
                                    <span class='indicator'></span>
                                    Black (Carib)
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="black(african)">
                                    <span class='indicator'></span>
                                    Black (African)
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="black (hispanic)">
                                    <span class='indicator'></span>
                                    Black (Hispanic)
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show" id="hair" role="tabpanel" aria-labelledby="hair-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="md brown">
                                    <span class='indicator'></span>
                                    Md Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="black">
                                    <span class='indicator'></span>
                                    Black
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="dk blonde">
                                    <span class='indicator'></span>
                                    Dk Blonde
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="it brown">
                                    <span class='indicator'></span>
                                    It Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="dk brown">
                                    <span class='indicator'></span>
                                    Dk Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="red">
                                    <span class='indicator'></span>
                                    Red
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="md blonde">
                                    <span class='indicator'></span>
                                    Md Blonde
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="it blonde">
                                    <span class='indicator'></span>
                                    It Blonde
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show" id="eyes" role="tabpanel" aria-labelledby="eyes-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="blue">
                                    <span class='indicator'></span>
                                    Blue
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="brown">
                                    <span class='indicator'></span>
                                    Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="hazel">
                                    <span class='indicator'></span>
                                    Hazel
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox' value="green">
                                    <span class='indicator'></span>
                                    Green
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="local">
                        <div class="col-xs-12">
                            <p>Local
                                <span class="wrapper pull-right">
                                <input type="checkbox" name="is_local" id="is_local">
                                <label for='is_local' tabindex="-1">
                                  <span class="check"></span>
                                </label>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-8">
                    <div class="row" id="donor-cards-row">
                        @empty($donors)
                            <p>No profiles to show!</p>

                        @endempty

                        @foreach($donors as $donor)
                            {{--check if donor profile exists for a donor --}}
                            @isset($donor->profile)
                                <div class="col-xs-12 col-md-6">
                                    <div class="wrap text-center">
                                        {{--                                        @if($donor->profile->photo_permission)--}}
                                        <img src="{{asset('storage/'. $donor->images->first()->path)}}"
                                             alt="EGG DONOR"
                                             class="img-fluid">
                                        {{--                                        @else--}}
                                        {{--                                            <img src="{{asset('img/avatar.png')}}"--}}
                                        {{--                                                 alt="EGG DONOR"--}}
                                        {{--                                                 class="img-fluid">--}}
                                        {{--                                        @endif--}}
                                        <h4>DONOR INFO</h4>
                                        <ul class="text-left">
                                            <li>Age <span class="pull-right">{{$donor->profile->age}}</span></li>
                                            <li>Eyes <span class="pull-right">{{$donor->profile->eye_color}}</span></li>
                                            <li>Cycle <span class="pull-right">{{$donor->cycle}}</span></li>
                                        </ul>
                                        <a href="{{route('donor.show', $donor->id)}}" class="btn bttn">More
                                            Details</a>
                                    </div>
                                </div>
                            @endisset
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <nav aria-label="Page navigation">
                                {{$donors->links('vendor.pagination.bootstrap-4')}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--Pushing Donor Profile Filters only JS files --}}
@push('js')
    <script src="{{asset('js/filters.min.js')}}"></script>
@endpush

