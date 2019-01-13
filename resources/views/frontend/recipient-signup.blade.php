@extends('layouts.frontend.app')
@section('title', 'Recipient Signup - Ivf1match')

{{--pushing  recipient sign up stylesheets--}}
@push('css')
    <!-- Include SmartWizard CSS -->
    <link href="vendor/jquer-smart_wizard/css/smart_wizard.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/jquer-smart_wizard/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/recipient-signup.css">
@endpush


@section('content')
    <!--Hero section-->
    <section class="section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Thank you for your <span>interest</span> in the <span>egg donation</span> program at IVF1</p>
                    <p>If you are already a patient of IVF1, you can start browsing though our available egg donors now.
                        Otherwise, you'll need to sign up on this site to go deeper.</p>
                    <br><br>
                    <a href="donor-signup.html" class="bttn">Become a Donor</a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section ends-->

    <!--What is ivf starts here-->
    <section class="section ivf">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="highlight">Getting <span>Started</span></h2>
                        </div>
                        <div class="col-xs-12">
                            <p>If you find a donor you like and want to be matched, simply call us or send us a message
                                through the <a href="https://patient.ivf1.com/patient/NewPatient/welcome.asp"
                                               target="_blank">patient
                                    portal</a> with the donor code.</p>
                            <p>If you are not a patient of IVF1, you can still browse through our egg donors and even
                                sign
                                up to see more detailed donor information, but if you want to use an egg donor you find
                                here, you will need to <a href="https://patient.ivf1.com/patient/ivflogin.asp"
                                                          target="_blank">become a patient</a> of IVF1 first.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="highlight">Messaging <span>Rules</span></h2>
                        </div>
                        <div class="col-xs-12">

                            <p>IVF1Match is the only egg donor / recipient matching program in which recipients can
                                correspond anonymously with donors. If you have a question or if you just want to relay
                                your
                                thanks, Now you can do it directly!</p>
                            <div class="row">
                                <div class="col-12 col-sm-1"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                                <div class="col-12 col-sm-11">
                                    <p>Messages will be reviewed by an administrator at IVF1. We want to make sure that
                                        neither donors or recipients accidentally reveal their identity.If your message
                                        is
                                        inappropriate, it will be deleted & you will be notified..</p>
                                </div>
                                <div class="col-12 col-sm-1"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                                <div class="col-12 col-sm-11">
                                    <p>Only recipients can initiate a conversation. donors can only reply to
                                        messages.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-6">
                    <form action="#" method="post" id="rsignup">
                        <h2 class="highlight text-lef">Become a <span>Recipient</span></h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" tabindex="0" id="firstname"
                                           name="firstname" autofocu>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email"
                                           name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button class="btn bttn" type="submit">Sign Up</button>
                                <br><br>
                                <p><a href="login.html">I 'm already a member?</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--What is ivf ends here-->


    <!--signup modal----->
    <div class="modal" id="signup_modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <h3>Donor <span>Sign Up</span></h3>
                            <p>Thank you for your interest in the egg donation program at IVF1. Egg donation is very
                                special
                                gift.</p>
                            <a href="donor-signup.html" class="btn bttn">Sign up</a>
                        </div>
                        <div class="col-6 text-center">
                            <h3>Recipient <span>Sign Up</span></h3>
                            <p>Thank you for your interest in the egg donation program at IVF1. Egg donation is very
                                special
                                gift.</p>
                            <a href="recipient-signup.html" class="btn bttn">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--signup modal----->
@endsection


{{--Pushing recipient sign up js files--}}
@push('js')
    <script type="text/javascript" src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jquer-smart_wizard/js/validator.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jquer-smart_wizard/js/jquery.smartWizard-donor.js')}}"></script>

    <!-- Custom Validation Files -->
    <script type="text/javascript" src="{{asset('js/data-validation.min.js')}}"></script>
    <script src="{{asset('js/donor-signup.min.js')}}"></script>
    <script>
        $().ready(function () {
            $('#rsignup').validate({
                rules: {
                    firstname: {
                        required: true,
                        minlength: 2
                    },
                    lastname: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    firstname: {
                        required: "Please enter your firstname.",
                        minlength: "Firstname must have 2 atleast characters."
                    },
                    lastname: {
                        required: "Please enter your lastname.",
                        minlength: "Lastname must have 2 atleast characters."
                    },
                    email: "Pease enter valid email.",
                    password: {
                        required: "Please enter your password.",
                        minlength: "Password must have 5 atleast characters."
                    }
                }
            });
        });

    </script>
@endpush