@extends('layouts.frontend.app')
@section('title', 'Donor Sign Up')

{{--pushing  recipient sign up stylesheets--}}
@push('css')
    <!-- Include SmartWizard CSS -->
    <link href="../vendor/jquer-smart_wizard/css/smart_wizard.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/jquer-smart_wizard/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{asset('css/frontend/modal.css')}}">
    <link rel=" stylesheet" href="{{asset('css/frontend/donor-signup.css')}}">
@endpush
@section('content')
    <!--Hero section-->
    <section class=" section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Thank you for your <span>interest</span> in the <span>egg donation</span> program at IVF1</p>
                    <p>Egg donation is a very special gift that will be appreciated by the recipients for a lifetime.
                        Sign
                        up to become a donor</p>
                    <br><br>
                    <a href="{{route('recipient.register')}}" class="bttn">Become a Recipient</a>
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
                            <h2 class="highlight">What is <span>IVF1</span></h2>
                        </div>
                        <div class="col-xs-12">
                            <p>IVF1 is an infertility medical practice located in Illinois. We have three office
                                locations:
                                Naperville, Chicago and Plainfield. The medical director of IVF is Dr. Randy Morris who
                                is a
                                board certified reproductive endocrinologist (infertility specialist).</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="highlight">Donating <span>Eggs</span></h2>
                        </div>
                        <div class="col-xs-12">
                            <p>Donating eggs is a little different than donating blood or even donating sperm. It isn't
                                as
                                easy to donate eggs! Donating eggs takes a couple of weeks and requires a woman to take
                                fertility injections and have a minor procedure to remove the eggs from her ovaries. We
                                would really like you to read more about <a
                                        href="https://www.ivf1.com/egg-donor-information" target="_blank">egg
                                    donation</a>.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>If you are already sure you want to become an egg donor, take our
                                <a href="#" class="l-short-quiz" data-toggle="tooltip" data-placement="top"
                                   title="Please fill in the details to take a short quiz">short
                                    quiz</a>
                                first to see if you qualify. Its easy and will take you less than one minute</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-6">
                    <form action="#" method="POST" id="dsignup">
                        <h2 class="highlight text-lef">Become a <span>Donor</span></h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" tabindex="0" id="firstname"
                                           name="firstname">
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
                                <button class="btn bttn" type="submit">Next Step</button>
                                <br><br>
                                <p><a href="{{route('login')}}">I 'm already a member?</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--What is ivf ends here-->


    {{--Donor Quiz Modal Start Confirmation--}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
         aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="#">Take the <span>Egg Donor Quiz!</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrap">
                        <h5>Are you qualified to be an <span>egg donor?</span></h5>
                        <h5>Answer a few <span>quick questions</span> and lets find out.</h5>
                        <div class="strt">
                            <button type="button" class="btn bttn" data-toggle="modal" data-backdrop="static"
                                    data-keyboard="false" data-target="#quiz-modal" data-dismiss="modal">
                                Start Quiz
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <small>Egg donor quiz created by <a href="http://ivf1.com" target="_blank">IVF1</a>.</small>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{--!Donor Quiz confirmation modal--}}


    {{--!Donor Quiz modal--}}
    <div class="modal fade" id="quiz-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Egg Donor <span>Quiz</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <!-- SmartWizard html -->
                        <div id="smartwizard" class="sw-main sw-theme-dots">
                            <ul class="nav nav-tabs step-anchor">
                                <li class="nav-item active"><a href="#step-1" disabled="" class="nav-link">Step 1
                                        <br></a></li>
                                <li class="nav-item"><a href="#step-2" class="nav-link">Step 2 <br></a></li>
                                <li class="nav-item"><a href="#step-3" class="nav-link">Step 3 <br></a></li>
                                <li class="nav-item"><a href="#step-4" class="nav-link">Step 4 <br></a></li>
                                <li class="nav-item"><a href="#step-5" class="nav-link">Step 5 <br></a></li>
                            </ul>
                            <div class="sw-container tab-content" style="min-height: 0px;">
                                <form action="">
                                    <div id="step-1" style="">
                                        <div class="wrap">

                                            <h5>Are you <span>Female?</span></h5>
                                            <div class="radio-group" id="are_you_female">
                                                <div class="radio">
                                                    <input id="radio_yes" name="is_female" type="radio" value="yes">
                                                    <label for="radio_yes" class="radio-label">Yes</label>
                                                </div>

                                                <div class="radio">
                                                    <input id="radio_no" name="is_female" type="radio" value="no"
                                                           checked="">
                                                    <label for="radio_no" class="radio-label">No</label>
                                                </div>
                                            </div>
                                            <small class="is_female_err">*You must have eggs to be a donor.</small>

                                        </div>
                                    </div>
                                </form>
                                <div id="step-2" class="tab-pane step-content">

                                    <div class="wrap">
                                        <h5>What is your <span>age?</span></h5>
                                        <div class="form-group c-dropdown">
                                            <label for="age"></label>
                                            <input type="text" readonly="" class="form-control" id="age" name="age">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#">18</a></li>
                                                <li><a href="#">18-23</a></li>
                                                <li><a href="#">23-27</a></li>
                                                <li><a href="#">28+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-3" class="tab-pane step-content">
                                    <div class="wrap">
                                        <h5>Have you had a pelvic exam from a <span>doctor</span> and had a
                                            <span>PAP</span> smear?</h5>
                                        <div class="radio">
                                            <input id="radio-3" name="had_pelvic" type="radio" value="yes">
                                            <label for="radio-3" class="radio-label required">Yes</label>
                                        </div>

                                        <div class="radio">
                                            <input id="radio-4" name="had_pelvic" checked="" type="radio" value="no">
                                            <label for="radio-4" class="radio-label">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-4" class="tab-pane step-content">
                                    <div class="wrap">
                                        <h5>Are you willing to undergo a <span>physical exam</span> and have <span>blood tests</span>
                                            to determine your eligibility?</h5>
                                        <div class="radio">
                                            <input id="radio-5" name="are_willing" type="radio" value="yes">
                                            <label for="radio-5" class="radio-label required">Yes</label>
                                        </div>

                                        <div class="radio">
                                            <input id="radio-6" name="are_willing" type="radio" value="no" checked="">
                                            <label for="radio-6" class="radio-label">No</label>
                                        </div>
                                        <small class="are_willing_err">*You must be willing to undergo a physical
                                            exam.
                                        </small>
                                    </div>
                                </div>
                                <div id="step-5" class="tab-pane step-content">
                                    <div class="wrap">
                                        <h5><span>Egg donors</span> are required to self administer medications at home
                                            and come into the office for several
                                            <span>blood tests and ultrasounds</span>. This requires a flexible schedule
                                            and transportation to one of <span>our offices</span>. Are you able to do
                                            this? </h5>
                                        <div class="radio">
                                            <input id="radio-7" name="are_able" type="radio" value="yes">
                                            <label for="radio-7" class="radio-label required">Yes</label>
                                        </div>

                                        <div class="radio">
                                            <input id="radio-8" name="are_able" type="radio" value="no" checked="">
                                            <label for="radio-8" class="radio-label">No</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end">
                                <div class="btn-group mx-auto sw-btn-group bttn" role="group">
                                    <button class="btn sw-btn-next" id="s_f1_next" type="button" disabled=""
                                            style="background-color: rgb(189, 36, 64); color: rgb(255, 255, 255); border-radius: 5px;">
                                        Next Step
                                    </button>
                                </div>
                                <div class="btn-group sw-btn-group-extra" role="group"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <small>Egg donor quiz created by <a href="http://ivf1.com" target="_blank">IVF1</a>.</small>
                    <button type="button" class="btn btn-secondary bttn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{--Donor Quiz modal--}}


    {{--Donor Quiz success modal--}}
    <div class="modal fade" id="congrats" tabindex="-1" role="dialog" aria-labelledby="congrats" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Congratulations!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrap">
                        <h5>You may be <span>eligible</span> to become an <span>egg donor.</span></h5>
                        <h5>We would <span>encourage</span> you to read <a
                                    href="http://www.ivf1.com/egg-donor-information/" target="_blank">about egg
                                donation</a> in
                            <span>detail</span> and to complete a donor <a href="#">questionnaire online.</a></h5>
                        <br><br>
                        <div class="text-center">
                            <a href="donor-questionary.html" class="btn bttn">Proceed</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <small>Egg donor quiz created by <a href="http://ivf1.com" target="_blank">IVF1</a>.</small>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{--!Donor Quiz success modal--}}
@endsection

{{--Pushing recipient sign up js files--}}
@push('js')
    <script type="text/javascript" src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jquer-smart_wizard/js/validator.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('vendor/jquer-smart_wizard/js/jquery.smartWizard-donor.js')}}"></script>

    <!-- Custom Validation Files -->
    <script type="text/javascript" src="{{asset('js/data-validation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/validation-functions.min.js')}}"></script>
    <script src="{{asset('js/donor-signup.min.js')}}"></script>
@endpush