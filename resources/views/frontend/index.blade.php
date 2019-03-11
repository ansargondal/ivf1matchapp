@extends('layouts.frontend.app')
@section('content')

    <!--Hero section-->
    <section class="section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Egg <span>donation</span> is a special gift that will be appreciated for a <span>lifetime.</span>
                    </p>
                    <p>IVF1Match is the only egg donor / recipient matching program in which recipients can correspond
                        anonymously with donors.</p>
                    <br><br>
                    <a href="{{route('donor.register.show')}}" class="bttn">Join the Cause</a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section ends-->



    <!--Donate or recieve section starts-->
    <section class="section donate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="highlight">DONATE OR <span>RECEIVE</span></h2>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur consequatur
                        cum
                        distinctio dolorum eos fugiat harum laborum magnam, molestiae necessitatibus omnis quos
                        repellendus
                        ut.
                        Iste quae veniam vitae.</p>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="wrap text-center">
                        <img src="img/become-egg-donor.png" alt="EGG DONOR" class="img-fluid">
                        <h4>DONATE EGGS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry'</p>
                        <a href="{{route('donor.register.show')}}" class="btn bttn">Become a Donor</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="wrap text-center">
                        <img src="img/become-recipient.png" alt="RECEIVE EGGS" class="img-fluid">
                        <h4>RECEIVE EGGS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry'</p>
                        <a href="{{route('recipient.register.show')}}" class="btn bttn">Become a Recipient</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="wrap text-center">
                        <img src="img/donor-group.png" alt="DONOR GROUPS" class="img-fluid">
                        <h4>DONOR GROUPS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry'</p>
                        <a href="{{route('donor.profiles')}}" class="btn bttn">Browse Donors</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate or recieve section ends-->

    <!--Our Process Section-->
    <section class="section process" id="process">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="highlight">HOW IT <span>WORKS</span></h2>
                </div>
                <div class="col-xs-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur consequatur
                        cum
                        distinctio dolorum eos fugiat harum laborum magnam, molestiae necessitatibus omnis quos
                        repellendus
                        ut.
                        Iste quae veniam vitae.</p>
                </div>
            </div><!--row-->
            <div class="row process-flow-container">
                <ul class="process-flow">
                    <li>
                        <div class="flow-icon">
                            <img class="img-fluid" src="img/choices.svg" alt="">
                        </div>
                        <p class="flow-text">SIGN IN</p>
                    </li>
                    <li>
                        <div class="flow-icon">
                            <img class="img-fluid" src="img/search.png" alt="">
                        </div>
                        <p class="flow-text">BROWSE</p>
                    </li>
                    <li>
                        <div class="flow-icon">
                            <img class="img-fluid" src="img/like.png" alt="">
                        </div>
                        <p class="flow-text">RECEIVE</p>
                    </li>
                </ul>
            </div>
        </div><!--container-->
    </section><!--process section-->

    <!--Available donor starts here-->
    <section class="section available">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="highlight">AVAILABLE <span>DONORS</span></h2>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur consequatur
                        cum distinctio dolorum eos fugiat harum laborum magnam, molestiae necessitatibus omnis quos
                        repellendus
                        ut.
                        Iste quae veniam vitae.</p>
                </div>
            </div><!--row-->
            <div class="row">
                @foreach($donors as $donor)
                    <div class="col-xs-12 col-md-4">
                        <div class="wrap text-center">
                            @if($donor->profile->photo_permission)
                                <img src="{{asset('storage/'. $donor->images->first()->path)}}"
                                     alt="EGG DONOR"
                                     class="img-fluid">
                            @else
                                <img src="{{asset('img/avatar.png')}}"
                                     alt="EGG DONOR"
                                     class="img-fluid">
                            @endif
                            <h4>DONOR INFO</h4>
                            <ul class="text-left">
                                <li>Age <span class="pull-right">{{$donor->profile->age}}</span></li>
                                <li>Eyes <span class="pull-right">{{$donor->profile->eye_color}}</span></li>
                                <li>Cycle <span class="pull-right">{{$donor->cycle}}</span></li>
                            </ul>
                            <a href="{{route('donor.show', $donor->id)}}" class="btn bttn">More Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Available donor ends here-->

    <!--Reviews Section-->
    <section class="section reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>TESTIMONIALS</h2>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="carousel slide" data-ride="carousel" id="review-slider">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" class="active" data-target="#review-slider"></li>
                            <li data-slide-to="1" data-target="#review-slider"></li>
                            <li data-slide-to="2" data-target="#review-slider"></li>
                            <li data-slide-to="3" data-target="#review-slider"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="img/customer-1.jpg" alt="" class="img-fluid client-image">
                                        <p class="client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                    </div>

                                    <div class="col-md-9">
                                        <p class="client-review">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. A
                                            alias,
                                            aut consequatur culpa
                                            cumque dignissimos distinctio dolor ducimus ea enim expedita itaque labore
                                            nesciunt
                                            odio
                                            optio pariatur quisquam, recusandae reiciendis!</p>
                                        <p class="client-name"><span>&mdash;</span>Anglena Cutick</p>
                                    </div>
                                </div><!--row-->
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="img/customer-2.jpg" alt="" class="img-fluid client-image">
                                        <p class="client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                    </div>

                                    <div class="col-md-9">
                                        <p class="client-review">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. A
                                            alias,
                                            aut consequatur culpa
                                            cumque dignissimos distinctio dolor ducimus ea enim expedita itaque labore
                                            nesciunt
                                            odio
                                            optio pariatur quisquam, recusandae reiciendis!</p>
                                        <p class="client-name"><span>&mdash;</span>Anglena Cutick</p>
                                    </div>
                                </div><!--row-->
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="img/profile.jpeg" alt="" class="img-fluid client-image">
                                        <p class="client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                    </div>

                                    <div class="col-md-9">
                                        <p class="client-review">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. A
                                            alias,
                                            aut consequatur culpa
                                            cumque dignissimos distinctio dolor ducimus ea enim expedita itaque labore
                                            nesciunt
                                            odio
                                            optio pariatur quisquam, recusandae reiciendis!</p>
                                        <p class="client-name"><span>&mdash;</span>Anglena Cutick</p>
                                    </div>
                                </div><!--row-->
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="img/face.jpg" alt="" class="img-fluid client-image">
                                        <p class="client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                    </div>

                                    <div class="col-md-9">
                                        <p class="client-review">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. A
                                            alias,
                                            aut consequatur culpa
                                            cumque dignissimos distinctio dolor ducimus ea enim expedita itaque labore
                                            nesciunt
                                            odio
                                            optio pariatur quisquam, recusandae reiciendis!</p>
                                        <p class="client-name"><span>&mdash;</span>Anglena Cutick</p>
                                    </div>
                                </div><!--row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--reviews section-->
@endsection

{{--Pushing Home page only JS files --}}
@push('js')
    <script src="vendor/jquery-easing/jquery.easing.js"></script>
@endpush