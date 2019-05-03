@extends('layouts.frontend.app')
@section('title', 'Donor Questionnaire')

{{--Pusing Donor questionnaire only stylesheets--}}
@push('css')
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.structure.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.theme.css')}}">

    <!-- Include SmartWizard CSS -->
    <link href="{{asset('vendor/jquer-smart_wizard/css/smart_wizard.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Optional SmartWizard theme -->
    <link href="{{asset('vendor/jquer-smart_wizard/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/frontend/donor-questionary.css')}}">
    <style type="text/css">
        .btn-toolbar.sw-toolbar.sw-toolbar-bottom.justify-content-end {
            display: none !important;
        }
    </style>
@endpush
@section('content')
    <div class="container questionary">
        <div class="row">
            <div class="col-12">
                <h2>Egg Donor <span>Questionnaire</span></h2>
                <p>Your contact information on this page will not be viewable by recipients.</p>
            </div>
        </div>
        <!-- SmartWizard 1 html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1" disabled>Contact Info</a></li>
                <li><a href="#step-2" disabled>Education</a></li>
                <li><a href="#step-3">Sexual History</a></li>
                <li><a href="#step-4">Pregnancy</a></li>
                <li><a href="#step-5">Lifestyle</a></li>
                <li><a href="#step-6">Medical History</a></li>
                <li><a href="#step-7">Medical History</a></li>
                <li><a href="#step-8">Medical History</a></li>
                <li><a href="#step-9">Medical History</a></li>
                <li><a href="#step-10">Donor Profile</a></li>
            </ul>

            <div>
                <div id="step-1" class="">
                    <div class="col-xs-12">
                        <form action="{{route('contact.store')}}" method="post" id="step1">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" tabindex="0" id="fname"
                                               name="fname"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="date_birth">Date Birth</label>
                                        <input type="text" class="form-control date-picker" id="date_birth"
                                               name="dob">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="home_phone">Home Phone</label>
                                        <input type="text" class="form-control" id="home_phone" name="home">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" class="form-control" id="mobile"
                                               name="mobile">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="work">Work</label>
                                        <input type="text" class="form-control" id="work" name="work">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" id="street"
                                               name="street">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state"
                                               name="state">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" id="zip_code" name="zip">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Applicant <span>Type</span></h3>
                                </div>
                                <br>
                                <div class="col-12 col-lg-6 mt-3">
                                    <p>I'd like to be a donor for </p>
                                </div>

                                <div class="col-12 col-lg-3 ">
                                    <div class="form-group c-dropdown">
                                        <label for="any_patient"></label>

                                        <input type="text" readonly class="form-control" id="any_patient"
                                               name="donation_for"
                                               placeholder="Any Type">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Any Patient</a></li>
                                            <li><a href="#">A specific couple</a></li>
                                            <li><a href="#">A donor egg agency</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 ">
                                    <div class="form-group mt-3">
                                        <label for="couple_code"></label>
                                        <input type="text" class="form-control" id="couple_code" name="agency_name"
                                               placeholder="Couple Code / Agency Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p><br>If accepted as an egg donor, I would be available to serve as a donor.</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="i_starting_from">Starting From</label>
                                        <input type="text" class="form-control date-picker" id="i_starting_from"
                                               name="donation_date">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn bttn donor-submit" type="submit" id="submit1">Next Step</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="step-2" class="">
                    <div class="col-xs-12">
                        <form action="{{route('education.store')}}" method="post" id="step2">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group" id="high-school">
                                        <h3>High <span>School</span></h3>
                                        <div class='checkboxes'>
                                            <label class='checkbox' for="high_school_1">
                                                <input type='hidden' name="attended_school" value="0">
                                                <input type='checkbox' name="attended_school" class="high-school"
                                                       id="high_school_1" value="1">
                                                <span class='indicator'></span>
                                                Attended high school but did not graduate.
                                            </label>
                                        </div>
                                        <div class='checkboxes'>
                                            <label class='checkbox'>
                                                <input type='hidden' name="graduated_school" value="0">
                                                <input type='checkbox' name="graduated_school" class="high-school"
                                                       value="1">
                                                <span class='indicator'></span>
                                                Graduated high school.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>College</h3>
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class='checkboxes'>
                                                    <label class='checkbox'>

                                                        <input type='hidden' name="attended_college" value="0">
                                                        <input type='checkbox' name="attended_college" class="college"
                                                               value="1">
                                                        <span class='indicator'></span>
                                                        Attended college but did not graduate.
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class='checkboxes'>
                                                    <label class='checkbox'>

                                                        <input type='hidden' name="attending_college" value="0">
                                                        <input type='checkbox' name="attending_college"
                                                               id="c_c_attending_college" class="college" value="1">
                                                        <span class='indicator'></span>
                                                        Currently attending college
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" class="form-control" placeholder="Major/Degree"
                                                       id="i_c_attending_college"
                                                       name="college_major">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class='checkboxes'>
                                                    <label class='checkbox'>
                                                        <input type='hidden' name="have_graduate_degree" value="0">
                                                        <input type='checkbox' name="have_graduate_degree"
                                                               id="c_graduate_degree" class="college" value="1">
                                                        <span class='indicator'></span>
                                                        Graduate Degree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" id="i_graduate_degree" class="form-control"
                                                       name="graduate_degree" placeholder="Graduate Degree">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class='checkboxes'>
                                                    <label class='checkbox'>
                                                        <input type='hidden' name="have_post_graduate_degree" value="0">
                                                        <input type='checkbox' name="have_post_graduate_degree"
                                                               id="c_post_graduate_degree" class="college" value="1">
                                                        <span class='indicator'></span>
                                                        Post Graduate Degree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" placeholder="Post Graduate Field"
                                                       id="i_post_graduate_degree" name="post_graduate_degree"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class='checkboxes'>
                                                    <label class='checkbox'>
                                                        <input type='hidden' name="have_other" value="0">
                                                        <input type='checkbox' name="have_other" id="c_degree_other"
                                                               class="college" value="1">
                                                        <span class='indicator'></span>
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" placeholder="Please explain" id="i_degree_other"
                                                       name="other" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Other <span>Training/Skills/Talents</span></h3>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>How many languages do you speak?</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="num_languages">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Which Languages?</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="languages">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Musical talent or instrument</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="musical_talent">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Artistic talent</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="art_talent">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Athletic talent</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="athletic_talent">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Other skills/hobbies/interests</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="hobbies">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Employment</h3>
                                </div>
                                <div class="col-12">
                                    <ul>
                                        <li>I 'm currently employed outside the home</li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <div class="radio">
                                        <input id="radio1" name="occupation_type" type="radio" value="1">
                                        <label for="radio1" class="radio-label">Full Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="radio">
                                        <input id="radio2" name="occupation_type" type="radio" value="2">
                                        <label for="radio2" class="radio-label">Part Time</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="radio">
                                        <input id="radio3" name="occupation_type" type="radio" checked value="3">
                                        <label for="radio3" class="radio-label">Neither</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mt-4 pt-3">
                                    <ul>
                                        <li>Other Occupation</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="occupation">Select Occupation</label>
                                        <input type="text" readonly class="form-control" id="occupation"
                                               name="occupation">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="activ">I work in the home</a></li>
                                            <li><a href="#">I am currently a full or part time student</a></li>
                                            <li><a href="#">I am not working currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit2" class="bttn btn donor-submit">Next Step</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="step-3" class="">
                    <div class="col-xs-12">
                        <form action="{{route('sexual.history.store')}}" method="post" id="step3">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Martial Status</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown martialstatus">
                                        <label for="martialStatus"></label>

                                        <input type="text" readonly class="form-control" id="martialStatus"
                                               name="martial_status" placeholder="Single/Married">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Married</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Engaged</a></li>
                                            <li><a href="#">Separated</a></li>
                                            <li><a href="#">Widowed</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Living Arrangement</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown livingarrangment">
                                        <label for="livingArrangement"></label>

                                        <input type="text" readonly class="form-control" id="livingArrangement"
                                               name="living_arrangement" placeholder="Please Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Living Alone</a></li>
                                            <li><a href="#">Living with parents/family</a></li>
                                            <li><a href="#">Living together with a sexual partner</a></li>
                                            <li><a href="#">Living together with a non sexual partner/ Friend</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Sexual orientation &<span> Sexual Activity</span></h3>
                                </div>
                                <div class="col-12">
                                    <p>Please answer all of the following questions regarding your sexual activity in
                                        the
                                        last 5 years: (includes any type of activity including vaginal intercourse, oral
                                        sex
                                        received, oral sex given, anal intercourse, group sex)</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <span class='indicator bg-secondary'></span>
                                            Number of sexual partners in the last
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row" id="sexual_partners">
                                        <div class="col-4">
                                            <div class="form-group c-dropdown">
                                                <label for="oneMonth">1 Month</label>
                                                <input type="text" class="form-control" id="oneMonth"
                                                       name="partners_1_month">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group c-dropdown">
                                                <label for="sixmonth">6 Months</label>
                                                <input type="text" class="form-control" id="sixmonth"
                                                       name="partners_6_months">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group c-dropdown">
                                                <label for="year">5 Years</label>

                                                <input type="text" class="form-control" id="year"
                                                       name="partners_5_years">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container mb-3">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline mr-2">
                                            <strong>Yes</strong>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline pl-0">
                                            <strong>No</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q1-yes-radio" name="q1"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q1-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q1-no-radio" name="q1"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q1-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q1-yes-radio" class="statement"> Have you had sexual contact with a
                                        person who has injected drugs for a
                                        non-medical reason? (includes intravenous, intramuscular or subcutaneous
                                        injections)</label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q2-yes-radio" name="q2"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q2-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q2-no-radio" name="q2"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q2-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q2-yes-radio" class="statement">
                                        Have you had sexual contact with a person who has hemophilia or another
                                        blood
                                        clotting disorder who may have received human derived blood clotting
                                        factors?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q3-yes-radio" name="q3"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q3-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q3-no-radio" name="q3"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q3-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q3-yes-radio" class="statement"> Have you engaged in sexual contact in
                                        exchange for money or drugs?</label>

                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q4-yes-radio" name="q4"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q4-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q4-no-radio" name="q4"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q4-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q4-yes-radio" class="statement"> Have you engaged in sexual contact with
                                        a person who has had sex in exchange
                                        for
                                        money or drugs?</label>
                                </div>
                                <div class="col-12 radio-boxes-container">

                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q5-yes-radio" name="q5"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q5-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q5-no-radio" name="q5"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q5-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q5-yes-radio" class="statement">
                                        Have you had sexual contact with any person known or suspected to have
                                        infection
                                        with HIV (AIDS), a positive HIV test, Hepatitis B infection, Hepatitis C
                                        infection, Zika Virus, or any other sexually transmitted infection –
                                        (Syphilis,
                                        Gonorrhea, Chlamydia, Venereal Warts, Herpes)?</label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q6-yes-radio" name="q6"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q6-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q6-no-radio" name="q6"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q6-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q6-yes-radio" class="statement"> Have you had sexual contact with a man
                                        who is homosexual or bisexual? </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q7-yes-radio" name="q7"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q7-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q7-no-radio" name="q7"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q7-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q7-yes-radio" class="statement"> In the last year, have you had vaginal
                                        intercourse without the use of a condom?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q8-yes-radio" name="q8"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q8-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q8-no-radio" name="q8"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q8-no-radio"></label>
                                        </div>
                                    </div>
                                    <label for="q8-yes-radio" class="statement">Have you had sexual contact with an
                                        individual who was born in or lived in any
                                        of the following countries since 1977: Cameroon, Central African Republic, Chad,
                                        Congo, Equatorial Guinea, Gabon, Niger or Nigeria?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Sexual <span>Activity</span></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Choose the best answer to describe yourself</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="sexual"></label>
                                        <input type="text" readonly class="form-control" id="sexual" name="orientation"
                                               placeholder="Hetrosexual">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Hetrosexual</a></li>
                                            <li><a href="#">Homosexual</a></li>
                                            <li><a href="#">Bisexual</a></li>
                                            <li><a href="#">I consider myself hetrosexual but i have homosexual relation
                                                    in
                                                    the past.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul>
                                        <li>Current sexual practice (in the last 6 months -- check ALL that apply)</li>
                                    </ul>
                                </div>
                                <div class="col-12" id="current">
                                    <div class="row">
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="c_vaginal" value="0">
                                                    <input type='checkbox' name="c_vaginal"
                                                           class="current-sexual cb-current-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Vaginal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="c_oral" value="0">
                                                    <input type='checkbox' name="c_oral"
                                                           class="current-sexual cb-current-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Oral given
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="c_anal" value="0">
                                                    <input type='checkbox' name="c_anal"
                                                           class="current-sexual cb-current-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Anal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="c_oral_received" value="0">
                                                    <input type='checkbox' name="c_oral_received"
                                                           class="current-sexual cb-current-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Oral Received
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="c_group" value="0">
                                                    <input type='checkbox' name="c_group"
                                                           class="current-sexual cb-current-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Group
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul>
                                        <li>Previous sexual practice (more than 6 months ago -- check ALL that apply)
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <div class="row" id="previous">
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="p_vaginal" value="0">
                                                    <input type='checkbox' name="p_vaginal"
                                                           class="cb-previous-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Vaginal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="p_oral" value="0">
                                                    <input type='checkbox' name="p_oral"
                                                           class="cb-previous-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Oral given
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="p_anal" value="0">
                                                    <input type='checkbox' name="p_anal"
                                                           class="cb-previous-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Anal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="p_oral_received" value="0">
                                                    <input type='checkbox' name="p_oral_received"
                                                           class="cb-previous-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Oral Received
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class='checkboxes'>
                                                <label class='checkbox'>
                                                    <input type="hidden" name="p_group" value="0">
                                                    <input type='checkbox' name="p_group"
                                                           class="cb-previous-sexual" value="1">
                                                    <span class='indicator'></span>
                                                    Group
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit3" class="bttn btn donor-submit">Next Step</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="step-4" class="">
                    <div class="col-xs-12">
                        <form action="{{route('pregnancy.store')}}" method="post" id="step4">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h2>Pregnancy History</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Pregnancy History</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="pregnancyHistory"></label>

                                        <input type="text" readonly class="form-control" id="pregnancyHistory"
                                               name="pregnancy_history"
                                               placeholder="I have tried to become pregnant in the past.">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">I have tried to become pregnant in the past
                                                    but
                                                    was never successful</a></li>
                                            <li><a href="#">I have never been pregnant and have naver tried to become
                                                    pregnant.</a></li>
                                            <li><a href="#">I have rarely used contraception in the past but have not
                                                    become
                                                    pregnant.</a></li>
                                            <li><a href="#">I have had difficulty in becoming pregnant at least once in
                                                    my
                                                    life.</a></li>
                                            <li><a href="#">I have been pregnant without really trying.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Sexual orientation & <span>Sexual Activity</span></h3>
                                </div>
                            </div>
                            <div class="row table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Did you deliver a live baby?</th>
                                        <th scope="col">Year of Pregnancy</th>
                                        <th scope="col">Boy or Girl</th>
                                        <th scope="col">Does the child have any medical problems? Explain</th>
                                        <th scope="col">If No, how did the pregnancy end?</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class='checkboxes text-center'>
                                                <label class='checkbox mx-auto'>
                                                    <input type='checkbox' id="c_did_you_deliver_1"
                                                           name="delivered_baby[]" value="1">
                                                    <span class='indicator'> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_yearofpregnancy_1"></label>
                                                <input type="text" readonly class="form-control"
                                                       id="d_yearofpregnancy_1"
                                                       placeholder="2000">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">2000</a></li>
                                                    <li><a href="#">2001</a></li>
                                                    <li><a href="#">2002</a></li>
                                                    <li><a href="#">2003</a></li>
                                                    <li><a href="#">2004</a></li>
                                                    <li><a href="#">2005</a></li>
                                                    <li><a href="#">2006</a></li>
                                                    <li><a href="#">2007</a></li>
                                                    <li><a href="#">2008</a></li>
                                                    <li><a href="#">2009</a></li>
                                                    <li><a href="#">2010</a></li>
                                                    <li><a href="#">2011</a></li>
                                                    <li><a href="#">2012</a></li>
                                                    <li><a href="#">2013</a></li>
                                                    <li><a href="#">2014</a></li>
                                                    <li><a href="#">2015</a></li>
                                                    <li><a href="#">2016</a></li>
                                                    <li><a href="#">2017</a></li>
                                                    <li><a href="#">2018</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_boyGirl_1"></label>
                                                <input type="text" readonly class="form-control" id="d_boyGirl_1"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Boy</a></li>
                                                    <li><a href="#">Girl</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_child_have_prob_1"
                                            >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_how_pregnancy_end_1"
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class='checkboxes text-center'>
                                                <label class='checkbox mx-auto'>
                                                    <input type='checkbox' id="c_did_you_deliver_2"
                                                           name="delivered_baby[]" value="1">
                                                    <span class='indicator'> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_yearofpregnancy_2"></label>
                                                <input type="text" readonly class="form-control"
                                                       id="d_yearofpregnancy_2"
                                                       placeholder="2000">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">2000</a></li>
                                                    <li><a href="#">2001</a></li>
                                                    <li><a href="#">2002</a></li>
                                                    <li><a href="#">2003</a></li>
                                                    <li><a href="#">2004</a></li>
                                                    <li><a href="#">2005</a></li>
                                                    <li><a href="#">2006</a></li>
                                                    <li><a href="#">2007</a></li>
                                                    <li><a href="#">2008</a></li>
                                                    <li><a href="#">2009</a></li>
                                                    <li><a href="#">2010</a></li>
                                                    <li><a href="#">2011</a></li>
                                                    <li><a href="#">2012</a></li>
                                                    <li><a href="#">2013</a></li>
                                                    <li><a href="#">2014</a></li>
                                                    <li><a href="#">2015</a></li>
                                                    <li><a href="#">2016</a></li>
                                                    <li><a href="#">2017</a></li>
                                                    <li><a href="#">2018</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_boyGirl_2"></label>
                                                <input type="text" readonly class="form-control" id="d_boyGirl_2"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Boy</a></li>
                                                    <li><a href="#">Girl</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_child_have_prob_2"
                                            >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_how_pregnancy_end_2"
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class='checkboxes text-center'>
                                                <label class='checkbox mx-auto'>
                                                    <input type='checkbox' id="c_did_you_deliver_3"
                                                           name="delivered_baby[]" value="1">
                                                    <span class='indicator'> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_yearofpregnancy_3"></label>
                                                <input type="text" readonly class="form-control"
                                                       id="d_yearofpregnancy_3"
                                                       placeholder="2000">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">2000</a></li>
                                                    <li><a href="#">2001</a></li>
                                                    <li><a href="#">2002</a></li>
                                                    <li><a href="#">2003</a></li>
                                                    <li><a href="#">2004</a></li>
                                                    <li><a href="#">2005</a></li>
                                                    <li><a href="#">2006</a></li>
                                                    <li><a href="#">2007</a></li>
                                                    <li><a href="#">2008</a></li>
                                                    <li><a href="#">2009</a></li>
                                                    <li><a href="#">2010</a></li>
                                                    <li><a href="#">2011</a></li>
                                                    <li><a href="#">2012</a></li>
                                                    <li><a href="#">2013</a></li>
                                                    <li><a href="#">2014</a></li>
                                                    <li><a href="#">2015</a></li>
                                                    <li><a href="#">2016</a></li>
                                                    <li><a href="#">2017</a></li>
                                                    <li><a href="#">2018</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_boyGirl_3"></label>
                                                <input type="text" readonly class="form-control" id="d_boyGirl_3"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Boy</a></li>
                                                    <li><a href="#">Girl</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_child_have_prob_3"
                                            >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_how_pregnancy_end_3"
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class='checkboxes text-center'>
                                                <label class='checkbox mx-auto'>
                                                    <input type='checkbox' id="c_did_you_deliver_4"
                                                           name="delivered_baby[]" value="1">
                                                    <span class='indicator'> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_yearofpregnancy_4"></label>
                                                <input type="text" readonly class="form-control"
                                                       id="d_yearofpregnancy_4"
                                                       placeholder="2000">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">2000</a></li>
                                                    <li><a href="#">2001</a></li>
                                                    <li><a href="#">2002</a></li>
                                                    <li><a href="#">2003</a></li>
                                                    <li><a href="#">2004</a></li>
                                                    <li><a href="#">2005</a></li>
                                                    <li><a href="#">2006</a></li>
                                                    <li><a href="#">2007</a></li>
                                                    <li><a href="#">2008</a></li>
                                                    <li><a href="#">2009</a></li>
                                                    <li><a href="#">2010</a></li>
                                                    <li><a href="#">2011</a></li>
                                                    <li><a href="#">2012</a></li>
                                                    <li><a href="#">2013</a></li>
                                                    <li><a href="#">2014</a></li>
                                                    <li><a href="#">2015</a></li>
                                                    <li><a href="#">2016</a></li>
                                                    <li><a href="#">2017</a></li>
                                                    <li><a href="#">2018</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="d_boyGirl_4"></label>
                                                <input type="text" readonly class="form-control" id="d_boyGirl_4"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Boy</a></li>
                                                    <li><a href="#">Girl</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_child_have_prob_4"
                                            >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="i_how_pregnancy_end_4">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul>
                                        <li>If you are currently using birth control (pills, patches, or injections),
                                            please
                                            answer these questions about your cycles when you are not on birth control.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Age when you had your first period</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="firstPeriod"></label>

                                        <input type="text" readonly class="form-control" id="firstPeriod"
                                               name="first_period"
                                               placeholder="<10">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="">&lt;8</a></li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">11</a></li>
                                            <li><a href="#">12</a></li>
                                            <li><a href="#">13</a></li>
                                            <li><a href="#">14</a></li>
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">16</a></li>
                                            <li><a href="#">17</a></li>
                                            <li><a href="#">18</a></li>
                                            <li><a href="#">&gt;18</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>My menstrual bleeding begins every (Ex: every 28 to 35 days)</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3 ">
                                    <div class="form-group c-dropdown">
                                        <input type="text" class="form-control" id="bleeding_begins"
                                               name="bleeding_begins"
                                               placeholder="From">
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="form-group c-dropdown" id="menmonth">
                                        <!-- <label for="menstrualMonths"></label> -->
                                        <input type="text" class="form-control" id="bleeding_ends"
                                               name="bleeding_ends" placeholder="To">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>My menstrual bleeding lasts for (Ex: last for 3 to 5 days)</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3 ">
                                    <div class="form-group c-dropdown">
                                        <input type="text" class="form-control" id="bleeding_lasts_from"
                                               name="bleeding_lasts_from"
                                               placeholder="From">
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="form-group c-dropdown" id="menmonth">

                                        <input type="text" class="form-control" id="bleeding_lasts_to"
                                               name="bleeding_lasts_to" placeholder="To">
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="q2-yes-radio" name="q2"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="q2-yes-radio"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="q2-no-radio" name="q2"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="q2-no-radio"></label>
                                        </div>
                                        <label for="q2-yes-radio" class=".statement">Have you ever had a pelvic
                                            exam?</label>
                                    </div>
                                </div>
                                {{--                                <div class="col-12">
                                                                    <div class='checkboxes'>
                                                                        <label class='checkbox'>
                                                                            <input type="hidden" name="pelvic_exam" value="0">
                                                                            <input type='checkbox' name="pelvic_exam" value="1">
                                                                            <span class='indicator'></span>
                                                                            Have you ever had a pelvic exam?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class='checkboxes'>
                                                                        <label class='checkbox'>
                                                                            <input type="hidden" name="abnormal_pap" value="0">
                                                                            <input type='checkbox' name="abnormal_pap" value="1">
                                                                            <span class='indicator'></span>
                                                                            Have you ever had an abnormal PAP smear?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class='checkboxes'>
                                                                        <label class='checkbox'>
                                                                            <input type="hidden" name="pregnancy_issues" value="0">
                                                                            <input type='checkbox' name="pregnancy_issues" value="1">
                                                                            <span class='indicator'></span>
                                                                            Have you ever been told you might have trouble having children?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class='checkboxes'>
                                                                        <label class='checkbox'>

                                                                            <input type="hidden" name="bleeding_between" value="0">
                                                                            <input type='checkbox' name="bleeding_between" value="1">
                                                                            <span class='indicator'></span>
                                                                            I sometimes have bleeding in between my normal periods.
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class='checkboxes'>
                                                                        <label class='checkbox'>
                                                                            <input type="hidden" name="bleeding_after" value="0">
                                                                            <input type='checkbox' name="bleeding_after" value="1">
                                                                            <span class='indicator'></span>
                                                                            I sometimes have bleeding after intercourse.
                                                                        </label>
                                                                    </div>
                                                                </div>--}}
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Date of last PAP smear</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <!-- <label for="lastpap"></label> -->

                                        <input type="text" class="form-control" id="lastpap" name="last_pap_date"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul>
                                        <li>Use of <b>Birth Control</b> (Answer <b>ALL</b> of the following questions.
                                            Do
                                            not leave any blank)
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 textcenter">
                                    <h3>Questions</h3>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Oral Contraceptives (birth control pills)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="oralContraceptives"></label>

                                        <input type="text" readonly class="form-control" id="oralContraceptives"
                                               name="pills" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Birth Control Patches (Ortho-Evra)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="birthControl"></label>

                                        <input type="text" readonly class="form-control" id="birthControl"
                                               name="ortho_evra" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Progesterone Injections (Depo-Provera)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="progesteroneInjections"></label>

                                        <input type="text" readonly class="form-control" id="progesteroneInjections"
                                               name="depo_provera" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Progesterone Implants (Norplant)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="progesteroneImplants"></label>

                                        <input type="text" readonly class="form-control" id="progesteroneImplants"
                                               name="norplant" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Intrauterine Device (IUD)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="intrauterineDevice"></label>

                                        <input type="text" readonly class="form-control" id="intrauterineDevice"
                                               name="iud" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Sterilization (tubal ligation, tubal plugs)</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="sterilization"></label>

                                        <input type="text" readonly class="form-control" id="sterilization"
                                               name="tubal_ligation" placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Condoms</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="condoms"></label>

                                        <input type="text" readonly class="form-control" id="condoms" name="condoms"
                                               placeholder="Never">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Past</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit4" class="bttn btn donor-submit">Next Step</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="step-5" class="">
                    <div class="col-xs-12">
                        <form action="{{route('lifestyle.store')}}" method="post" id="step5">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h3>Lifestyle,<span> Habits</span></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Exercise</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="exercise"></label>

                                        <input type="text" readonly class="form-control" id="exercise"
                                               name="exercise_routine"
                                               placeholder="Please Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">None</a></li>
                                            <li><a href="#">Occasional</a></li>
                                            <li><a href="#">Regular</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Type of Exercise</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="exercise_type">
                                    </div>
                                </div>
                                <br>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Diet</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="diet"></label>

                                        <input type="text" readonly class="form-control" id="diet" name="diet_type"
                                               placeholder="Please Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Non-vegetarian</a></li>
                                            <li><a href="#">Vegetarian</a></li>
                                            <li><a href="#">Vegan</a></li>
                                            <li><a href="#">Pescetarian</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Quality of Diet</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="qualitydiet"></label>

                                        <input type="text" readonly class="form-control" id="qualitydiet"
                                               name="diet_quality"
                                               placeholder="Please Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="">Poor/Unhealthy</a></li>
                                            <li><a href="#">Average</a></li>
                                            <li><a href="#">Excellent/Healthy</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Dietary restrictions</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="diet_restrictions">
                                    </div>
                                </div>
                                <br>

                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <h3>Drug<span> History</span></h3>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Cigarettes/Tobacco</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_cigarettesTabacco"></label>

                                        <input type="text" class="form-control" id="d_cigarettesTabacco"
                                               name="tobacco" placeholder="Select" readonly>
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tobacco_amount"
                                               id="i_cigarettesTobacco" placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Alcohol</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_alcohol"></label>

                                        <input type="text" readonly class="form-control" id="d_alcohol" name="alcohol"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="alcohol_amount" id="i_alcohol"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Marijuana</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_marijuana"></label>

                                        <input type="text" readonly class="form-control" id="d_marijuana"
                                               name="marijuana"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="marijuana_amount" id="i_marijuana"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Heroin or opiates</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_heroin"></label>

                                        <input type="text" readonly class="form-control" id="d_heroin" name="heroin"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="heroin_amount" id="i_heroin"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Cocaine</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_cocaine"></label>

                                        <input type="text" readonly class="form-control" id="d_cocaine" name="cocaine"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cocaine_amount" id="i_cocaine"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Crystal Meth</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_crystalmeth"></label>

                                        <input type="text" readonly class="form-control" id="d_crystalmeth"
                                               name="meth" placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="meth_amount" id="i_crystalmeth"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>LSD</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_lsd"></label>

                                        <input type="text" readonly class="form-control" id="d_lsd" name="lsd"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lsd_amount" id="i_lsd"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>PCP</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_pcp"></label>

                                        <input type="text" readonly class="form-control" id="d_pcp" name="pcp"
                                               placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pcp_amount" id="i_pcp"
                                               placeholder="How Much">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <ul>
                                        <li>Any injectable drug</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group c-dropdown">
                                        <label for="d_injectable"></label>

                                        <input type="text" readonly class="form-control" id="d_injectable"
                                               name="injectable_drug" placeholder="Select">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">Never</a></li>
                                            <li><a href="#">Tried</a></li>
                                            <li><a href="#">Currently</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="injectable_amount"
                                               placeholder="How Much">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Legal<span> History</span></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="law_trouble" value="0">
                                            <input type='checkbox' id="c_trouble_with_law" name="law_trouble" value="1">
                                            <span class='indicator'></span>
                                            I have been in trouble with the law.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="arrested" value="0">
                                            <input type='checkbox' name="arrested" id="c_arrested" value="1">
                                            <span class='indicator'></span>
                                            I have been arrested before, but not convicted.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="If yes, what happened?"
                                               name="arrest_reason" id="i_arrested">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="convicted" value="0">
                                            <input type='checkbox' name="convicted" id="c_convicted" value="1">
                                            <span class='indicator'></span>
                                            I have been convicted of a crime.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="What Crime(s)?"
                                               name="convicted_crimes" id="i_convicted">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="hour_jail" value="0">
                                            <input type='checkbox' name="hour_jail" id="c_spent_one" value="1">
                                            <span class='indicator'></span>
                                            I have spent at least one hour in jail or prison.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="three_days_jail" value="0">
                                            <input type='checkbox' name="three_days_jail" id="c_spent_seventy_two"
                                                   value="1">
                                            <span class='indicator'></span>
                                            I have spent more than 72 consecutive hours in prison in the last year.
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Tattoos and <span> Piercings</span></h3>
                                </div>
                            </div>
                            <div class="row table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sterile Needles Used?</th>
                                        <th scope="col">Date if use</th>
                                        <th scope="col">Tattoo or piercing?</th>
                                        <th scope="col">Location on body</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="checkboxes text-center">
                                                <label class="checkbox mx-auto">
                                                    <input type="checkbox" name="sterile_used[]" id="s_n_used_1"
                                                           value="1">
                                                    <span class="indicator"> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <label for="d_n_used_1" class=""></label>
                                                <input type="text" class="form-control date-picker"
                                                       id="d_n_used_1" placeholder="Date"><span
                                                        class="bar-animator"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="t_n_used_1" class=""></label>
                                                <input type="text" readonly="" class="form-control" id="t_n_used_1"
                                                       placeholder="Select"><span
                                                        class="bar-animator"></span>
                                                <ul class="c-dropdown-menu" style="display: none;">
                                                    <li><a href="#" class="active">Tattoo</a></li>
                                                    <li><a href="#">Piercing</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="i_n_used_1"><span class="bar-animator"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="checkboxes text-center">
                                                <label class="checkbox mx-auto">
                                                    <input type="checkbox" name="sterile_used[]" id="s_n_used_2"
                                                           value="1">
                                                    <span class="indicator"> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <label for="d_n_used_2" class=""></label>
                                                <input type="text" class="form-control date-picker "
                                                       id="d_n_used_2" placeholder="Date"><span
                                                        class="bar-animator"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="t_n_used_1" class=""></label>
                                                <input type="text" readonly="" class="form-control" id="t_n_used_2"
                                                       placeholder="Select"><span
                                                        class="bar-animator"></span>
                                                <ul class="c-dropdown-menu" style="display: none;">
                                                    <li><a href="#" class="active">Tattoo</a></li>
                                                    <li><a href="#">Piercing</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="i_n_used_2"><span class="bar-animator"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="checkboxes text-center">
                                                <label class="checkbox mx-auto">
                                                    <input type="checkbox" name="sterile_used[]" id="s_n_used_3"
                                                           value="1">
                                                    <span class="indicator"> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <label for="d_n_used_3" class=""></label>
                                                <input type="text" class="form-control date-picker "
                                                       id="d_n_used_3" placeholder="Date"><span
                                                        class="bar-animator"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="t_n_used_1" class=""></label>
                                                <input type="text" readonly="" class="form-control" id="t_n_used_3"
                                                       placeholder="Select"><span
                                                        class="bar-animator"></span>
                                                <ul class="c-dropdown-menu" style="display: none;">
                                                    <li><a href="#" class="active">Tattoo</a></li>
                                                    <li><a href="#">Piercing</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="i_n_used_3"><span class="bar-animator"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="checkboxes text-center">
                                                <label class="checkbox mx-auto">
                                                    <input type="checkbox" name="sterile_used[]" id="s_n_used_4"
                                                           value="1">
                                                    <span class="indicator"> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <label for="d_n_used_2" class=""></label>
                                                <input type="text" class="form-control date-picker "
                                                       id="d_n_used_4" placeholder="Date"><span
                                                        class="bar-animator"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="t_n_used_2" class=""></label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="t_n_used_4" placeholder="Select"><span
                                                        class="bar-animator"></span>
                                                <ul class="c-dropdown-menu" style="display: none;">
                                                    <li><a href="#" class="active">Tattoo</a></li>
                                                    <li><a href="#">Piercing</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="i_n_used_4"><span class="bar-animator"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="checkboxes text-center">
                                                <label class="checkbox mx-auto">
                                                    <input type="checkbox" name="sterile_used[]" id="s_n_used_5"
                                                           value="1">
                                                    <span class="indicator"> &nbsp;</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="form-group ">
                                                <label for="d_n_used_3" class=""></label>
                                                <input type="text" class="form-control date-picker "
                                                       id="d_n_used_5" placeholder="Date"><span
                                                        class="bar-animator"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group c-dropdown">
                                                <label for="t_n_used_3" class=""></label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="t_n_used_5" placeholder="Select"><span
                                                        class="bar-animator"></span>
                                                <ul class="c-dropdown-menu" style="display: none;">
                                                    <li><a href="#" class="active">Tattoo</a></li>
                                                    <li><a href="#">Piercing</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="i_n_used_5"><span class="bar-animator"></span>
                                            </div>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Other <span>History</span></h3>
                                </div>
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="cjd" value="0">
                                            <input type='checkbox' name="cjd" value="1">
                                            <span class='indicator'></span>
                                            Have you ever been diagnosed with vCJD or any other form of CJD?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="dementia" value="0">
                                            <input type='checkbox' name="dementia" value="1">
                                            <span class='indicator'></span>
                                            Have you ever been diagnosed with dementia or any degenerative or
                                            demyelinating
                                            disease of the central nervous system (CNS) or other neurological disease of
                                            unknown etiology?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="dura_mater" value="0">
                                            <input type='checkbox' name="dura_mater" value="1">
                                            <span class='indicator'></span>
                                            Have you ever received a dura mater transplant?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="human_gh" value="0">
                                            <input type='checkbox' name="human_gh" value="1">
                                            <span class='indicator'></span>
                                            Have you ever received injections of human pituitary-derived growth hormone?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="cjd_family" value="0">
                                            <input type='checkbox' name="cjd_family" value="1">
                                            <span class='indicator'></span>
                                            Has one or more blood relatives been diagnosed with CJD?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="visit_uk" value="0">
                                            <input type='checkbox' name="visit_uk" value="1">
                                            <span class='indicator'></span>
                                            Have you spent three months or more cumulatively in the U.K. from the
                                            beginning
                                            of 1980 through the end of 1996?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="military_member" value="0">
                                            <input type='checkbox' name="military_member" value="1">
                                            <span class='indicator'></span>
                                            Are you a current or former U.S. military member, civilian military
                                            employee, or
                                            dependent of a military member or civilian employee who resided at U.S.
                                            military
                                            bases in Northern Europe, Germany, U.K., Belgium, and the Netherlands) for 6
                                            months or more from 1980 through 1990, or elsewhere in Europe (Greece,
                                            Turkey,
                                            Spain, Portugal, and Italy) for 6 months or more from 1980 through 1996?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="lived_europe" value="0">
                                            <input type='checkbox' name="lived_europe" value="1">
                                            <span class='indicator'></span>
                                            Have you lived cumulatively for 5 years or more in Europe from 1980 until
                                            the
                                            Present?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="blood_uk" value="0">
                                            <input type='checkbox' name="blood_uk" value="1">
                                            <span class='indicator'></span>
                                            Have you received any transfusion of blood or blood components in the U.K.
                                            or
                                            France between 1980 to the present?

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit5" class="bttn btn donor-submit">Next Step</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="step-6" class="">
                    <div class="col-xs-12">
                        <h3>S<span>tep</span> <span>01</span></h3>
                        <form action="{{route('s1.questions.store')}}" method="post" id="step6">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h3>Check all <span>that apply</span></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        {{--                                        <div class="col-12 radio-boxes-container">--}}
                                        {{--                                            <div class="radio-boxes">--}}
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="ddk" name="q3" class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="ddk"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="ddkk" name="q3" class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="ddkk"></label>
                                        </div>
                                    </div>
                                    <label for="ddk" class="statement"> Have you engaged in sexual contact in
                                        exchange for money or drugs?</label>

                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="injectable_last_5" value="0">
                                            <input type='checkbox' name="injectable_last_5" value="1">
                                            <span class='indicator'></span>
                                            Have you injected drugs for a non-medical reason in the last 5 years?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="hemophilia" value="0">
                                            <input type='checkbox' name="hemophilia" value="1">
                                            <span class='indicator'></span>
                                            Do you have hemophilia and/or received human-derived clotting factor
                                            concentrates in the last 5 years?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="hepatitis_contact" value="0">
                                            <input type='checkbox' name="hepatitis_contact" value="1">
                                            <span class='indicator'></span>
                                            Have you in the last 12 months lived in the same dwelling with another
                                            person
                                            with hepatitis B infection or hepatitis C infection?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="hiv" value="0">
                                            <input type='checkbox' name="hiv" value="1">
                                            <span class='indicator'></span>
                                            Have you been exposed in the preceding 12 months to known or suspected HIV
                                            (AIDS), Hepatitis B, and/or Hepatitis C infected blood through percutaneous
                                            inoculation (e.g., needle stick) or through contact with an open wound,
                                            non-intact skin, or mucous membrane?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="hepatitis" value="0">
                                            <input type='checkbox' name="hepatitis" value="1">
                                            <span class='indicator'></span>
                                            Have you ever been diagnosed with any form of hepatitis?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="prison" value="0">
                                            <input type='checkbox' name="prison" value="1">
                                            <span class='indicator'></span>
                                            Have you been in juvenile detention, lock up, jail or prison in the last 12
                                            months?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="tattoo" value="0">
                                            <input type='checkbox' name="tattoo" value="1">
                                            <span class='indicator'></span>
                                            In the last 12 months, have you gotten a new tattoo, ear piercing or body
                                            piercing, or had acupuncture treatment in which sterile procedures may not
                                            have
                                            been used?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="smallpox_vaccine" value="0">
                                            <input type='checkbox' name="smallpox_vaccine" value="1">
                                            <span class='indicator'></span>
                                            In the last 8 weeks, did you receive a smallpox vaccination (vaccinia
                                            virus)?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="smallpox_contact" value="0">
                                            <input type='checkbox' name="smallpox_contact" value="1">
                                            <span class='indicator'></span>
                                            In the last 12 months, have you had any contact with someone who received a
                                            smallpox vaccination or who was diagnosed with smallpox?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="smallpox" value="0">
                                            <input type='checkbox' name="smallpox" value="1">
                                            <span class='indicator'></span>
                                            Have you ever been diagnosed with smallpox?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="west_nile_virus" value="0">
                                            <input type='checkbox' name="west_nile_virus" value="1">
                                            <span class='indicator'></span>
                                            In the last 12 months, were you diagnosed with or treated for West Nile
                                            Virus?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="syphilis" value="0">
                                            <input type='checkbox' name="syphilis" value="1">
                                            <span class='indicator'></span>
                                            In the last 12 months, were you diagnosed with or treated for Syphilis?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="gonorrhea" value="0">
                                            <input type='checkbox' name="gonorrhea" value="1">
                                            <span class='indicator'></span>
                                            In the last 12 months, were you diagnosed with or treated for Chlamydia or
                                            gonorrhea infection?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="transfusion" value="0">
                                            <input type='checkbox' id="c_blood_transfusion" name="transfusion"
                                                   value="1">
                                            <span class='indicator'></span>
                                            Have you ever received a blood transfusion? If yes, when?

                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="i_blood_transfusion"
                                               name="transfusion_date">
                                    </div>
                                </div>

                                <div class="col-12 col-md-8">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="donor_rejection" value="0">
                                            <input type='checkbox' id="c_blood_donor" name="donor_rejection" value="1">
                                            <span class='indicator'></span>
                                            Have you ever been turned down to be a blood donor? If yes, why?
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="i_blood_donor"
                                               name="rejection_reason">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="transplant" value="0">
                                            <input type='checkbox' name="transplant" value="1">
                                            <span class='indicator'></span>
                                            Have you ever received a transplant of any tissue, cells or fluids from a
                                            non-human, animal source?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="transplant_contact" value="0">
                                            <input type='checkbox' name="transplant_contact" value="1">
                                            <span class='indicator'></span>
                                            Have you ever had intimate contact with a recipient of a transplant of any
                                            tissue, cells or fluids from a non-human, animal source? (Intimate contact
                                            means
                                            exchange of body fluids like blood, saliva, semen; this includes sexual
                                            partners, household members that share razors or toothbrushes)
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="african_countries" value="0">
                                            <input type='checkbox' name="african_countries" value="1">
                                            <span class='indicator'></span>
                                            Were you born in or did you live in any of the following countries since
                                            1977?
                                            Cameroon, Central African Republic, Chad, Congo, Equatorial Guinea, Gabon,
                                            Niger
                                            or Nigeria?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="african_transfusion" value="0">
                                            <input type='checkbox' name="african_transfusion" value="1">
                                            <span class='indicator'></span>
                                            Did you have a blood transfusion or have any medical treatment involving
                                            blood
                                            in any of the following countries since 1977? Cameroon, Central African
                                            republic, Chad, Congo, Equatorial Guinea, Gabon, Niger or Nigeria?
                                        </label>
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <h3>Zika Virus <span>Screening</span></h3>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="zika_virus_1" value="0">
                                            <input type='checkbox' name="zika_virus_1" value="1">
                                            <span class='indicator'></span>
                                            Have you been diagnosed with Zika virus infection in the past 6 months?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="zika_virus_2" value="0">
                                            <input type='checkbox' name="zika_virus_2" value="1">
                                            <span class='indicator'></span>
                                            Have you traveled to an area with active Zika virus transmission in the last
                                            6
                                            months?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="zika_virus_3" value="0">
                                            <input type='checkbox' name="zika_virus_3" value="1">
                                            <span class='indicator'></span>
                                            Have you had sex with a male who has been diagnosed with Zika virus
                                            infection in
                                            the last 6 months?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="zika_virus_4" value="0">
                                            <input type='checkbox' name="zika_virus_4" value="1">
                                            <span class='indicator'></span>
                                            Have you had sex with a male who has traveled to an area with active Zika
                                            virus
                                            transmission in the last 6 months?
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit6" class="bttn btn donor-submit">Next Step</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="step-7">
                    <h3>S<span>tep</span> <span>02</span></h3>
                    <form action="{{route('s2.med.history.store')}}" method="post" id="step7">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h3>Medical <span>History:</span></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul>
                                    <li>Have you been vaccinated in the last 6 months?</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_have_vaccinated">Yes/No</label>

                                    <input type="text" readonly class="form-control" id="d_have_vaccinated"
                                           name="vaccinated">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <ul>
                                    <li>If yes, what were you vaccinated for?</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <input type="text" class="form-control" id="i_have_vaccinated"
                                           name="vaccinated_for">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>List any serious <span>medical problems</span> or illnesses. <span>Include any past problems</span>,
                                    even if they have resolved:</h3>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Age of Onset</th>
                                    <th scope="col">Comments (resolved, currently being treated, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_medical_prob_1"
                                                   name="problem[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown mt-5">
                                            <input type="text" class="form-control" id="i_age_onset_1"
                                                   name="age[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_medical_comment_1"
                                                   name="comment[]">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_prob_2"
                                                   name="problem[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_age_onset_2"
                                                   name="age[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_comment_2"
                                                   name="comment[]">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_prob_3"
                                                   name="problem[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_age_onset_3"
                                                   name="age[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_comment_3"
                                                   name="comment[]">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_prob_4"
                                                   name="problem[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_age_onset_4"
                                                   name="age[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_comment_4"
                                                   name="comment[]">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_prob_5"
                                                   name="problem[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_age_onset_5"
                                                   name="age[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_medical_comment_5"
                                                   name="comment[]">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>List all <span>surgical procedures</span> you have had since birth:</h3>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th scope="col">Type of Surgery</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Complications?</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_type_surgery_1"
                                                   name="surgery_type[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown mt-5">
                                            <input type="text" class="form-control date-picker"
                                                   id="i_surgery_date_1"
                                                   name="surgery_date[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_surgery_complication_1"
                                                   name="complications[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_surgery_2"
                                                   name="surgery_type[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control date-picker" id="i_surgery_date_2"
                                                   name="surgery_date[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_surgery_complication_2"
                                                   name="complications[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group ">
                                            <input type="text" class="form-control" id="i_type_surgery_3"
                                                   name="surgery_type[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker"
                                                   id="i_surgery_date_3"
                                                   name="surgery_date[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_surgery_complication_3"
                                                   name="complications[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_surgery_4"
                                                   name="surgery_type[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control date-picker"
                                                   id="i_surgery_date_4"
                                                   name="surgery_date[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_surgery_complication_4"
                                                   name="complications[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_surgery_5"
                                                   name="surgery_type[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker"
                                                   id="i_surgery_date_5"
                                                   name="surgery_date[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_surgery_complication_5"
                                                   name="complications[]">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>List all <span>medications</span> that you have taken in the preceding
                                    <span>12 months</span> (prescription):</h3>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th scope="col">Medication</th>
                                    <th scope="col">How Often?</th>
                                    <th scope="col">Reason</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_p_medication_1"
                                                   name="prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown mt-5">
                                            <input type="text" class="form-control" id="i_p_how_often_1"
                                                   name="how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_p_medication_reason_1"
                                                   name="reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_2"
                                                   name="prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_how_often_2"
                                                   name="how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_reason_2"
                                                   name="reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_3"
                                                   name="prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_how_often_3"
                                                   name="how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_reason_3"
                                                   name="reason[]">
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_4"
                                                   name="prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_how_often_4"
                                                   name="how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_reason_4"
                                                   name="reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_5"
                                                   name="prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_how_often_5"
                                                   name="how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_p_medication_reason_5"
                                                   name="reason[]">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>List all current over-the-counter <span>medications (include hormones, vitamins, aspirin, antacids, laxatives, herbal & sports supplements, performance-enhancing supplements</span>
                                    including steroids, etc.):</h3>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th scope="col">Medication</th>
                                    <th scope="col">How Often?</th>
                                    <th scope="col">Reason</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_c_medication_1"
                                                   name="non_prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown mt-5">
                                            <input type="text" class="form-control" id="i_c_how_often_1"
                                                   name="non_how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_c_medication_reason_1"
                                                   name="non_reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_2"
                                                   name="non_prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_how_often_2"
                                                   name="non_how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_reason_2"
                                                   name="non_reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_3"
                                                   name="non_prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_how_often_3"
                                                   name="non_how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_reason_3"
                                                   name="non_reason[]">
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_4"
                                                   name="non_prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_how_often_4"
                                                   name="non_how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_reason_4"
                                                   name="non_reason[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_5"
                                                   name="non_prescription[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_how_often_5"
                                                   name="non_how_often[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_c_medication_reason_5"
                                                   name="non_reason[]">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3><span>List all of your</span> allergies:</h3>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th scope="col">Substance</th>
                                    <th scope="col">Type of Reaction</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown pt-5">
                                            <input type="text" class="form-control" id="i_substance_1"
                                                   name="allergy[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown mt-5">
                                            <input type="text" class="form-control" id="i_type_reaction_1"
                                                   name="reaction[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_substance_2"
                                                   name="allergy[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_reaction_2"
                                                   name="reaction[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_substance_3"
                                                   name="allergy[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_reaction_3"
                                                   name="reaction[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_substance_4"
                                                   name="allergy[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_reaction_4"
                                                   name="reaction[]">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_substance_5"
                                                   name="allergy[]">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <input type="text" class="form-control" id="i_type_reaction_5"
                                                   name="reaction[]">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-12 last text-center">
                                <button class="btn bttn donor-submit" id="submit7">Next Step</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="step-8" class="">
                    <h3>S<span>tep</span> <span>03</span></h3>
                    <form action="{{route('s3.med.abnormality.store')}}" method="post" id="step8">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <h3><span>Please answer the following </span>questions about you and your family</h3>
                                <h4>You must provide an <span>answer</span> for all the <span>questions</span>.<br>The
                                    first
                                    column is for you only. <br>Second column is for family members only.<br>If answer
                                    yes
                                    to anything, <span>use comments box</span> to explain</h4>
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Family</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Comments (Which family member, severity, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Cleft Lip</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_cleftlip"></label>
                                            <input type="text" readonly class="form-control" id="d_cleftlip"
                                                   name="cleft_lip" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_cleftlip"></label>
                                            <input type="text" readonly class="form-control" id="d_f_cleftlip"
                                                   name="cleft_lip_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="cleft_lip_comment"
                                                   id="i_cleftlip">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Cleft Palate</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_cleftPalate"></label>
                                            <input type="text" readonly class="form-control" id="d_cleftpalate"
                                                   name="cleft_palate" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_cleftpalate"></label>
                                            <input type="text" readonly class="form-control" id="d_f_cleftpalate"
                                                   name="cleft_palate_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_cleftpalate"
                                                   name="cleft_palate_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Congenital Hip Dislocation</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_congenitalhip"></label>
                                            <input type="text" readonly class="form-control" id="d_congenitalhip"
                                                   name="hip_dislocation" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_congenitalhip"></label>
                                            <input type="text" readonly class="form-control" id="d_f_congenitalhip"
                                                   name="hip_dislocation_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_congenitalhip"
                                                   name="hip_dislocation_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Clubfoot</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_clubfoot"></label>
                                            <input type="text" readonly class="form-control" id="d_clubfoot"
                                                   name="clubfoot" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_clubfoot"></label>
                                            <input type="text" readonly class="form-control" id="d_f_clubfoot"
                                                   name="clubfoot_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_clubfoot"
                                                   name="clubfoot_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Heart Defects</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_heartDefect"></label>
                                            <input type="text" readonly class="form-control" id="d_heartdefect"
                                                   name="heart_defect" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_heartdefect"></label>
                                            <input type="text" readonly class="form-control" id="d_f_heartdefect"
                                                   name="heart_defect_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_heartdefect"
                                                   name="heart_defect_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hearing problems</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_hearingproblems"></label>
                                            <input type="text" readonly class="form-control" id="d_hearingproblems"
                                                   name="hearing_issue" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_hearingproblems"></label>
                                            <input type="text" readonly class="form-control" id="d_f_hearingproblems"
                                                   name="hearing_issue_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hearingproblems"
                                                   name="hearing_issue_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Spina Bifida</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_spina"></label>
                                            <input type="text" readonly class="form-control" id="d_spina"
                                                   name="spina_bifida"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_spina"></label>
                                            <input type="text" readonly class="form-control" id="d_f_spina"
                                                   name="spina_bifida_family"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_spina"
                                                   name="spina_bifida_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Microcephaly</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_microcephaly"></label>
                                            <input type="text" readonly class="form-control" id="d_microcephaly"
                                                   name="microcephaly" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_microcephaly"></label>
                                            <input type="text" readonly class="form-control" id="d_f_microcephaly"
                                                   name="microcephaly_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_microcephaly"
                                                   name="microcephaly_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Holoprosencephaly</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_holoprosencephaly"></label>
                                            <input type="text" readonly class="form-control" id="d_holoprosencephaly"
                                                   name="holoprosencephaly" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_holoprosencephaly"></label>
                                            <input type="text" readonly class="form-control" id="d_f_holoprosencephaly"
                                                   name="holoprosencephaly_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_holoprosencephaly"
                                                   name="holoprosencephaly_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Babies who died at birth</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_babiesdiedatbirth"></label>
                                            <input type="text" readonly class="form-control" id="d_babiesdiedatbirth"
                                                   name="death_at_birth" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_babiesdiedatbirth"></label>
                                            <input type="text" readonly class="form-control" id="d_f_babiesdiedatbirth"
                                                   name="death_at_birth_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_babiesdiedatbirth"
                                                   name="death_at_birth_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Dwarfism</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_dwarfism"></label>
                                            <input type="text" readonly class="form-control" id="d_dwarfism"
                                                   name="dwarfism" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_dwarfism"></label>
                                            <input type="text" readonly class="form-control" id="d_f_dwarfism"
                                                   name="dwarfism_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_dwarfism"
                                                   name="dwarfism_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hypospadias</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_hypospadias"></label>
                                            <input type="text" readonly class="form-control" id="d_hypospadias"
                                                   name="hypospadias" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_hypospadias"></label>
                                            <input type="text" readonly class="form-control" id="d_f_hypospadias"
                                                   name="hypospadias_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hypospadias"
                                                   name="hypospadias_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Phenylketonuria</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_phenylketonuria"></label>
                                            <input type="text" readonly class="form-control" id="d_phenylketonuria"
                                                   name="pheny" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_phenylketonuria"></label>
                                            <input type="text" readonly class="form-control" id="d_f_phenylketonuria"
                                                   name="pheny_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_phenylketonuria"
                                                   name="pheny_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Polycystic kidney</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_polycystickidney"></label>
                                            <input type="text" readonly class="form-control" id="d_polycystickidney"
                                                   name="polycystic" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_polycystickidney"></label>
                                            <input type="text" readonly class="form-control" id="d_f_polycystickidney"
                                                   name="polycystic_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_polycystickidney"
                                                   name="polycystic_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Pyloric Stenosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_pyloricstenosis"></label>
                                            <input type="text" readonly class="form-control" id="d_pyloricstenosis"
                                                   name="pyloric" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_pyloricstenosis"></label>
                                            <input type="text" readonly class="form-control" id="d_f_pyloricstenosis"
                                                   name="pyloric_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_pyloricstenosis"
                                                   name="pyloric_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Other Congenital Abnor-malities or Birth Defects</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_othercogenital"></label>
                                            <input type="text" readonly class="form-control" id="d_othercogenital"
                                                   name="other_congenital" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_othercogenital"></label>
                                            <input type="text" readonly class="form-control" id="d_f_othercogenital"
                                                   name="other_congenital_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_othercogenital"
                                                   name="other_congenital_comment">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h3>Chromosomal <span>Abnormalities</span></h3>
                            <h3>Psychological History (Answer each question)</h3>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Family</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Comments (Which family member, severity, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Down's Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_downsyndrome"></label>
                                            <input type="text" readonly class="form-control" id="d_downsyndrome"
                                                   name="downs" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_downsyndrome"></label>
                                            <input type="text" readonly class="form-control" id="d_f_downsyndrome"
                                                   name="downs_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_downsyndrome"
                                                   name="downs_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Fragile X Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_fragilex"></label>
                                            <input type="text" readonly class="form-control" id="d_fragilex"
                                                   name="fragile_x" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_fragilex"></label>
                                            <input type="text" readonly class="form-control" id="d_f_fragilex"
                                                   name="fragile_x_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_fragilex"
                                                   name="fragile_x_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Turner Syndrom</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_turnursyndrom"></label>
                                            <input type="text" readonly class="form-control" id="d_turnursyndrom"
                                                   name="turner" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_turnursyndrom"></label>
                                            <input type="text" readonly class="form-control" id="d_f_turnursyndrom"
                                                   name="turner_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_turnursyndrom"
                                                   name="turner_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Klinefelter Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_klinefelter"></label>
                                            <input type="text" readonly class="form-control" id="d_klinefelter"
                                                   name="klinefelter" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_klinefelter"></label>
                                            <input type="text" readonly class="form-control" id="d_f_klinefelter"
                                                   name="klinefelter_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_klinefelter"
                                                   name="klinefelter_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Other Chromosomal Abnormalities</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_otherchromosomal"></label>
                                            <input type="text" readonly class="form-control" id="d_otherchromosomal"
                                                   name="other_abnormality" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_otherchromosomal"></label>
                                            <input type="text" readonly class="form-control" id="d_f_otherchromosomal"
                                                   name="other_abnormality_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_otherchromosomal"
                                                   name="other_abnormality_comment">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <h3>Genetic <span>Abnormalities</span></h3>
                        </div>

                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Family</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Comments (Which family member, severity, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Alpha-1 Antitrypsin deficiency</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_alpha_1"></label>
                                            <input type="text" readonly class="form-control" id="d_alpha_1"
                                                   name="alpha_1"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_alpha_1"></label>
                                            <input type="text" readonly class="form-control" id="d_f_alpha_1"
                                                   name="alpha_1_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_alpha_1"
                                                   name="alpha_1_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Bloom Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_bloom"></label>
                                            <input type="text" readonly class="form-control" id="d_bloom" name="bloom"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_bloom"></label>
                                            <input type="text" readonly class="form-control" id="d_f_bloom"
                                                   name="bloom_family"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_bloom" name="bloom_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Canavan disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_canavan"></label>
                                            <input type="text" readonly class="form-control" id="d_canavan"
                                                   name="canavan"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_canavan"></label>
                                            <input type="text" readonly class="form-control" id="d_f_canavan"
                                                   name="canavan_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_canavan"
                                                   name="canavan_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Cystic Fibrosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_cysticfibroses"></label>
                                            <input type="text" readonly class="form-control" id="d_cysticfibroses"
                                                   name="cystic_fibrosis" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_cysticfibroses"></label>
                                            <input type="text" readonly class="form-control" id="d_f_cysticfibroses"
                                                   name="cystic_fibrosis_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_cysticfibroses"
                                                   name="cystic_fibrosis_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Fabry disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_fabrydisease"></label>
                                            <input type="text" readonly class="form-control" id="d_fabrydisease"
                                                   name="fabry" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_fabrydisease"></label>
                                            <input type="text" readonly class="form-control" id="d_f_fabrydisease"
                                                   name="fabry_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_fabrydisease"
                                                   name="fabry_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Factor V Leiden</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_factorv"></label>
                                            <input type="text" readonly class="form-control" id="d_factorv"
                                                   name="factor_v"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_factorv"></label>
                                            <input type="text" readonly class="form-control" id="d_f_factorv"
                                                   name="factor_v_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_factorv"
                                                   name="factor_v_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Familial Disautonomia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_familial"></label>
                                            <input type="text" readonly class="form-control" id="d_familial"
                                                   name="familial_dis" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_familial"></label>
                                            <input type="text" readonly class="form-control" id="d_f_familial"
                                                   name="familial_dis_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_familial"
                                                   name="familial_dis_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Familial Mediterranean Fever</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_familialfever"></label>
                                            <input type="text" readonly class="form-control" id="d_familialfever"
                                                   name="familial_med" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="familial_med_family"></label>
                                            <input type="text" readonly class="form-control" id="d_f_familialfever"
                                                   name="familial_med_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_familialfever"
                                                   name="familial_med_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Fanconi Anemia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_fanconi"></label>
                                            <input type="text" readonly class="form-control" id="d_fanconi"
                                                   name="fanconi"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_fanconi"></label>
                                            <input type="text" readonly class="form-control" id="d_f_fanconi"
                                                   name="fanconi_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_fanconi"
                                                   name="fanconi_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hemophilia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_hemophilia"></label>
                                            <input type="text" readonly class="form-control" id="hemophilia"
                                                   name="hemophilia" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_hemophilia"></label>
                                            <input type="text" readonly class="form-control" id="d_f_hemophilia"
                                                   name="hemophilia_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hemophilia"
                                                   name="hemophilia_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Marfan Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_marfan"></label>
                                            <input type="text" readonly class="form-control" id="d_marfan"
                                                   name="marfan"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_marfan"></label>
                                            <input type="text" readonly class="form-control" id="d_f_marfan"
                                                   name="marfan_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_marfan" name="marfan_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Mucolipidosis Type IV</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_mucolipidosis"></label>
                                            <input type="text" readonly class="form-control" id="d_mucolipidosis"
                                                   name="mucolipidosis4" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_mucolipidosis"></label>
                                            <input type="text" readonly class="form-control" id="d_f_mucolipidosis"
                                                   name="mucolipidosis4_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_mucolipidosis"
                                                   name="mucolipidosis4_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Niemann-Pick Disease (include type)</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_niemann"></label>
                                            <input type="text" readonly class="form-control" id="d_niemann"
                                                   name="niemann_pick"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_niemann"></label>
                                            <input type="text" readonly class="form-control" id="d_f_niemann"
                                                   name="niemann_pick_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_niemann"
                                                   name="niemann_pick_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Sickle Cell Anemia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_sickle"></label>
                                            <input type="text" readonly class="form-control" id="d_sickle"
                                                   name="sickle_cell"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_sickle"></label>
                                            <input type="text" readonly class="form-control" id="d_f_sickle"
                                                   name="sickle_cell_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_sickle"
                                                   name="sickle_cell_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Tay Sachs Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_taysachs"></label>
                                            <input type="text" readonly class="form-control" id="d_taysachs"
                                                   name="tay_sachs" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_taysachs"></label>
                                            <input type="text" readonly class="form-control" id="d_f_taysachs"
                                                   name="tay_sachs_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_taysachs"
                                                   name="tay_sachs_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Thallasemia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_thallasmia"></label>
                                            <input type="text" readonly class="form-control" id="d_thallasmia"
                                                   name="thallasemia" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_thallasmia"></label>
                                            <input type="text" readonly class="form-control" id="d_f_thallasmia"
                                                   name="thallasemia_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_thallasmia"
                                                   name="thallasemia_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Blindness</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_blindness"></label>
                                            <input type="text" readonly class="form-control" id="d_blindness"
                                                   name="blindness" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_blindness"></label>
                                            <input type="text" readonly class="form-control" id="d_f_blindness"
                                                   name="blindness_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_blindness"
                                                   name="blindness_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Color Blindness</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_colorblind"></label>
                                            <input type="text" readonly class="form-control" id="d_colorblind"
                                                   name="color_blind" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_colorblind"></label>
                                            <input type="text" readonly class="form-control" id="d_f_colorblind"
                                                   name="color_blind_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_colorblind"
                                                   name="color_blind_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Deafness</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="deafness"></label>
                                            <input type="text" readonly class="form-control" id="d_deafness"
                                                   name="deafness" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_deafness"></label>
                                            <input type="text" readonly class="form-control" id="d_f_deafness"
                                                   name="deafness_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_deafness"
                                                   name="deafness_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Albinism</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_albinism"></label>
                                            <input type="text" readonly class="form-control" id="d_albinism"
                                                   name="albinism" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_albinism"></label>
                                            <input type="text" readonly class="form-control" id="d_f_albinism"
                                                   name="albinism_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_albinism"
                                                   name="albinism_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Muscular Dystrophy</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_muscular"></label>
                                            <input type="text" readonly class="form-control" id="d_muscular"
                                                   name="muscular_dystrophy" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_muscular"></label>
                                            <input type="text" readonly class="form-control" id="d_f_muscular"
                                                   name="muscular_dystrophy_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_muscular"
                                                   name="muscular_dystrophy_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Galactosemia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_galactosemia"></label>
                                            <input type="text" readonly class="form-control" id="d_galactosemia"
                                                   name="galactosemia" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_galactosemia"></label>
                                            <input type="text" readonly class="form-control" id="d_f_galactosemia"
                                                   name="galactosemia_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_galactosemia"
                                                   name="galactosemia_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hurler's Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_hurler"></label>
                                            <input type="text" readonly class="form-control" id="d_hurler"
                                                   name="hurlers"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_hurler"></label>
                                            <input type="text" readonly class="form-control" id="d_f_hurler"
                                                   name="hurlers_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hurler"
                                                   name="hurlers_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Other Genetic Diseases or Abnormalities</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_other_genetic"></label>
                                            <input type="text" readonly class="form-control" id="d_other_genetic"
                                                   name="other_genetic" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for="d_f_other_genetic"></label>
                                            <input type="text" readonly class="form-control" id="d_f_other_genetic"
                                                   name="other_genetic_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_other_genetic"
                                                   name="other_genetic_comment">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="row">
                            <h3>Cancer</h3>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Family</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Comments (Which family member, severity, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Breast Cancer</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_breast_cancer"
                                                   name="breast" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_breast_cancer"
                                                   name="breast_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_breast_cancer"
                                                   name="breast_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Colon Cancer</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_colon_cancer"
                                                   name="colon" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_colon_cancer"
                                                   name="colon_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_colon_cancer"
                                                   name="colon_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hereditary non-polyposis colorectal cancer (HNPCC)</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_hereditary_non"
                                                   name="hnpcc" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_hereditary_non"
                                                   name="hnpcc_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hereditary_non"
                                                   name="hnpcc_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Ovarian Cancer</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_ovarian_cancer"
                                                   name="ovarian" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_ovarian_cancer"
                                                   name="ovarian_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_ovarian_cancer"
                                                   name="ovarian_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Any Other Cancer</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_any_other_cancer"
                                                   name="other_cancer" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_any_other_cancer"
                                                   name="other_cancer_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_any_other_cancer"
                                                   name="other_cancer_comment">
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <h3>Neurologic</h3>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Family</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Comments (Which family member, severity, etc)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Alzheimer's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_alzheimer"
                                                   name="alzhemers" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_alzheimer"
                                                   name="alzhemers_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_alzheimer"
                                                   name="alzhemers_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Autism / Asperger's</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_autism"
                                                   name="autism"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_autism"
                                                   name="autism_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_autism" name="autism_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Cerebral Palsy</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_cerebral"
                                                   name="cerebral_palsy" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_cerebral"
                                                   name="cerebral_palsy_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_cerebral"
                                                   name="cerebral_palsy_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Creultzfeldt - Jakob Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_creultzfeldt"
                                                   name="creultzfeldt" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_creultzfeldt"
                                                   name="creultzfeldt_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_creultzfeldt"
                                                   name="creultzfeldt_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Depression</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_depression"
                                                   name="depression" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_depression"
                                                   name="depression_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_depression"
                                                   name="depression_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Gaucher's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_gaucher"
                                                   name="gauchers"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_gaucher"
                                                   name="gauchers_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_gaucher"
                                                   name="gaucher_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Huntington's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_huntington"
                                                   name="huntingtons" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_huntington"
                                                   name="huntingtons_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_huntington"
                                                   name="huntingtons_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Hydrocephalus</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_hydrocephalus"
                                                   name="hydrocephalus" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_hydrocephalus"
                                                   name="hydrocephalus_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_hydrocephalus"
                                                   name="hydrocephalus_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Obsessive/Compulsive</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_obsessive_compulsive"
                                                   name="obsessive" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control"
                                                   id="d_f_obsessive_compulsive"
                                                   name="obsessive_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_obsessive_compulsive"
                                                   name="obsessive_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Mania</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_mania" name="mania"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_mania"
                                                   name="mania_family"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_mania" name="mania_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Mental Retardation</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_mental"
                                                   name="retardation"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_mental"
                                                   name="retardation_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_mental"
                                                   name="retardation_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Neurofibromatosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_neurofibro"
                                                   name="neurofibromatosis" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_neurofibro"
                                                   name="neurofibromatosis_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_neurofibro"
                                                   name="neurofibromatosis_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Schizophrenia</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_schizo"
                                                   name="schizophrenia"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_schizo"
                                                   name="schizophrenia_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_schizo"
                                                   name="schizophrenia_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Tourette Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_tourette"
                                                   name="tourette" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_tourette"
                                                   name="tourette_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_tourette"
                                                   name="tourette_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Tuberous Sclerosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_tuberous"
                                                   name="tuberous" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_tuberous"
                                                   name="tuberous_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_tuberous"
                                                   name="tuberous_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Wilson's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_wilson_disease"
                                                   name="wilsons" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_wilson_disease"
                                                   name="wilsons_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_wilson_disease"
                                                   name="wilsons_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Multiple Sclerosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_multiple_sclerosis"
                                                   name="multiple_sclerosis" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_multiple_sclerosis"
                                                   name="multiple_sclerosis_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="multiple_sclerosis_comment"
                                                   name="i_multiple_sclerosis">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Parkinson's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_parkinson"
                                                   name="parkinsons" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_parkinson"
                                                   name="parkinsons_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_parkinson"
                                                   name="parkinsons_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Lou Gehrig's Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_lou_gehrig"
                                                   name="lougehrigs" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_lou_gehrig"
                                                   name="lougehrigs_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_lou_gehrig"
                                                   name="lougehrigs_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Any Other Neurologic Disorders</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_any_other_neuro"
                                                   name="other_neurologic" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_any_other_neuro"
                                                   name="other_neurologic_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_any_other_neuro"
                                                   name="other_neurologic_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Diabetes</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_diabetes"
                                                   name="diabetes" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_diabetes"
                                                   name="diabetes_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_diabetes"
                                                   name="diabetes_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Heart Disease</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_heart_disease"
                                                   name="heart_disease" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_heart_disease"
                                                   name="heart_disease_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_heart_disease"
                                                   name="heart_disease_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>High Blood Pressure</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_high_blood"
                                                   name="high_bp" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_high_blood"
                                                   name="high_bp_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_high_blood"
                                                   name="high_bp_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Asthma</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_asthma"
                                                   name="asthma"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_asthma"
                                                   name="asthma_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_asthma" name="asthma_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Lupus</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_lupus" name="lupus"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_lupus"
                                                   name="lupus_family"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_lupus" name="lupus_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Obesity</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_obesity"
                                                   name="obesity"
                                                   placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_obesity"
                                                   name="obesity_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_obesity"
                                                   name="obesity_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Alcoholism</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_alcoholism"
                                                   name="alcoholism" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_alcoholism"
                                                   name="alcoholism_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_alcoholism"
                                                   name="alcoholism_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Infertility</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_infertility"
                                                   name="infertility" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_infertility"
                                                   name="infertility_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_infertility"
                                                   name="infertility_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Recurrent Miscarriage</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_recurrent"
                                                   name="miscarriage" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_recurrent"
                                                   name="miscarriage_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_recurrent"
                                                   name="miscarriage_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Endometriosis</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_endometriosis"
                                                   name="endometriosis" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_endometriosis"
                                                   name="endometriosis_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_endometriosis"
                                                   name="endometriosis_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Polycystic Ovary Syndrome</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_polycystic_ovary"
                                                   name="polycystic_ovary" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_polycystic_ovary"
                                                   name="polycystic_ovary_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_polycystic_ovary"
                                                   name="polycystic_ovary_comment">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul>
                                            <li>Uterine Fibroids</li>
                                        </ul>
                                    </th>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_uterine_fibroids"
                                                   name="uterine_fibroids" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group c-dropdown">
                                            <label for=""></label>
                                            <input type="text" readonly class="form-control" id="d_f_uterine_fibroids"
                                                   name="uterine_fibroids_family" placeholder="Select">
                                            <ul class="c-dropdown-menu">
                                                <li><a href="#" class="active">Yes</a></li>
                                                <li><a href="#">No</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_uterine_fibroids"
                                                   name="uterine_fibroids_comment">
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <button id="submit8" class="bttn btn donor-submit">Next Step</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="step-9">
                    <h3>S<span>tep</span> <span>04</span></h3>
                    <form action="{{route('s4.med.problem.store')}}" id="step9" method="post">
                        @csrf

                        <div class="row">
                            <h3><span>Please answer the following </span>questions about your medical history.</h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <b>Medical Problems</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>AIDS (HIV)</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_aids"></label>
                                    <input type="text" readonly class="form-control" id="d_aids" name="aids"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_aids" name="aids_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Herpes</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_herpes"></label>
                                    <input type="text" readonly class="form-control" id="d_herpes" name="herpes"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_herpes" name="herpes_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Gonorrhea</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_gonorrhea"></label>
                                    <input type="text" readonly class="form-control" id="d_gonorrhea" name="gonorrhea"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_gonorrhea" name="gonorrhea_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Chlamydia</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_chlamydia"></label>
                                    <input type="text" readonly class="form-control" id="d_chlamydia" name="chlamydia"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_chlamydia" name="chlamydia_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Condyloma (Genital Warts)</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_condyloma"></label>
                                    <input type="text" readonly class="form-control" id="d_condyloma" name="condyloma"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_condyloma" name="condyloma_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Syphilis</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_syphilis"></label>
                                    <input type="text" readonly class="form-control" id="d_syphilis" name="syphilis"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_syphilis" name="syphilis_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>PID - Pelvic Inflammatory Disease</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_pid"></label>
                                    <input type="text" readonly class="form-control" id="d_pid" name="pid"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_pid" name="pid_comment"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Hepatitis B</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_hepatitisB"></label>
                                    <input type="text" readonly class="form-control" id="d_hepatitisB"
                                           name="hepb"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_hepatitisB" name="hepb_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Hepatitis C</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_hepatitisC"></label>
                                    <input type="text" readonly class="form-control" id="d_hepatitisC"
                                           name="hepc"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_hepatitisC" name="hepc_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Tuberculosis</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_tuberculosis"></label>
                                    <input type="text" readonly class="form-control" id="d_tuberculosis"
                                           name="tuberculosis" placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_tuberculosis"
                                           name="tuberculosis_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Allergies to medication</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_allergies"></label>
                                    <input type="text" readonly class="form-control" id="d_allergies"
                                           name="medication_allergies"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_allergies"
                                           name="medication_allergies_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Allergies to Latex</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_allergiesLatex"></label>
                                    <input type="text" readonly class="form-control" id="d_allergiesLatex"
                                           name="latex_allergies" placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_allergiesLatex"
                                           name="latex_allergies_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                            <div class="col-12 col-md-5">
                                <ul>
                                    <li>Previous surgery</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group c-dropdown">
                                    <label for="d_previousSurgery"></label>
                                    <input type="text" readonly class="form-control" id="d_previousSurgery"
                                           name="previous_surgery" placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="i_previousSurgery"
                                           name="previous_surgery_comments"
                                           placeholder="Comments (Which family member, severity, etc)">
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12">
                                <h3><span>Chromosomal</span> Abnormalities</h3>
                            </div>
                            <div class="col-12 col-md-8">
                                <ul>
                                    <li>I have sought counseling for emotional problems.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group c-dropdown">
                                    <label for="d_emotional"></label>
                                    <input type="text" readonly class="form-control" id="d_emotional"
                                           name="emotional_problems"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 col-md-8">
                                <ul>
                                    <li>I have been seen or treated by a psychologist or psychiatrist.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group c-dropdown">
                                    <label for="d_psychologist"></label>
                                    <input type="text" readonly class="form-control" id="d_psychologist"
                                           name="psychologist" placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 col-md-8">
                                <ul>
                                    <li>I have used medications such as anti-anxiety or antidepressants to treat an
                                        emotional or psychological problem.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group c-dropdown">
                                    <label for="d_antiAnxiety"></label>
                                    <input type="text" readonly class="form-control" id="d_antiAnxiety"
                                           name="anti_depressants"
                                           placeholder="Select">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12">
                                <ul>
                                    <li>If you answered yes to any of the above questions, please explain</li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="if_y_p_e" name="psychological_comments">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <button id="submit9" class="bttn btn donor-submit">Next Step</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="step-10">
                    <form action="{{route('donor.profile.store')}}" id="step10" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_height">Height</label>
                                    <input type="text" class="form-control" id="i_height" name="height">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_weight">Weight</label>
                                    <input type="text" class="form-control" id="i_weight" name="weight">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_race">Race</label>
                                    <input type="text" class="form-control" id="i_race" name="race">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_home_phone">Age</label>
                                    <input type="text" class="form-control" id="i_home_phone" name="age">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3><span>Ethnic</span> Background
                                    <span>(Your family's country(ies) of origin.)Example: </span>German, Russian</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_mother">Mother</label>
                                    <input type="text" class="form-control" id="i_mother" name="mother">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">

                                    <label for="i_father">Father</label>
                                    <input type="text" class="form-control" id="i_father" name="father">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_maternal_grandmother"> Maternal Grandmother</label>
                                    <input type="text" class="form-control" id="i_maternal_grandmother"
                                           name="mothers_mother">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_paternal_grandmother">Paternal Grandmother</label>
                                    <input type="text" class="form-control" id="i_paternal_grandmother"
                                           name="fathers_mother">
                                </div>
                            </div>


                        </div>
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_maternal_grandfather">Maternal Grandfather</label>
                                    <input type="text" class="form-control" id="i_maternal_grandfather"
                                           name="mothers_father">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_paternal_grandfather">Paternal Grandfather</label>
                                    <input type="text" class="form-control" id="i_paternal_grandfather"
                                           name="fathers_father">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_religion">Religion</label>
                                    <input type="text" class="form-control" id="i_religion" name="religion">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_adopted">Are you adopted?</label>
                                    <input type="text" readonly class="form-control" id="d_adopted" name="adopted">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3><span>Physical </span>Characteristics</h3>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_weight_gain_loss">Weight Gain Or Loss?</label>
                                    <input type="text" readonly class="form-control" id="d_weight_gain_loss"
                                           name="weight_change">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_weight_gain_loss">If so, lbs gained or lost</label>
                                    <input type="text" class="form-control" id="i_weight_gain_loss"
                                           name="amount_lost">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_dexterity">Dexterity</label>
                                    <input type="text" readonly class="form-control" id="d_dexterity"
                                           name="dexterity">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Right-handed</a></li>
                                        <li><a href="#">Left-handed</a></li>
                                        <li><a href="#">Ambidextrous</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_boneStructure">Bone Structure</label>
                                    <input type="text" readonly class="form-control" id="d_boneStructure"
                                           name="bones">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Small</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Very Large</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_complexion">Complexion</label>
                                    <input type="text" readonly class="form-control" id="d_complexion"
                                           name="complexion">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Very fair</a></li>
                                        <li><a href="#">Fair</a></li>
                                        <li><a href="#">Light</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Olive</a></li>
                                        <li><a href="#">Light Brown</a></li>
                                        <li><a href="#">Dark Brown</a></li>
                                        <li><a href="#">Ebony</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_tanAbility">Tan Ability</label>
                                    <input type="text" readonly class="form-control" id="d_tanAbility"
                                           name="tan">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">None</a></li>
                                        <li><a href="#">Slight</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Easy</a></li>
                                        <li><a href="#">Freckle</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_skinCondition">Skin Condition</label>
                                    <input type="text" readonly class="form-control" id="d_skinCondition"
                                           name="skin">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Oily</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Dry</a></li>
                                        <li><a href="#">Combination</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_dimples">Dimples</label>
                                    <input type="text" readonly class="form-control" id="d_dimples" name="dimples">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_eyecolor">Eye Color</label>
                                    <input type="text" readonly class="form-control" id="d_eyecolor" name="eye_color">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Lt Brown</a></li>
                                        <li><a href="#">Dk Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Hazel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_eyeset">Eye Set</label>
                                    <input type="text" readonly class="form-control" id="d_eyeset" name="eye_set">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Narrow</a></li>
                                        <li><a href="#">Average</a></li>
                                        <li><a href="#">Wide</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_eyesize">Eye Size</label>
                                    <input type="text" readonly class="form-control" id="d_eyesize" name="eye_size">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Small</a></li>
                                        <li><a href="#">Average</a></li>
                                        <li><a href="#">Large</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_eyeShape">Eye Shape</label>
                                    <input type="text" readonly class="form-control" id="d_eyeShape" name="eye_shape">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#">Round</a></li>
                                        <li><a href="#">Oval</a></li>
                                        <li><a href="#">Almond</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_haircolor">Natural Hair Color</label>
                                    <input type="text" readonly class="form-control" id="d_haircolor"
                                           name="hair_color">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Black</a></li>
                                        <li><a href="#">Lt Blonde</a></li>
                                        <li><a href="#">Md Blonde</a></li>
                                        <li><a href="#">Dk Blonde</a></li>
                                        <li><a href="#">Lt Brown</a></li>
                                        <li><a href="#">Md Brown</a></li>
                                        <li><a href="#">Dk Brown</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_hairType">Hair Type</label>
                                    <input type="text" readonly class="form-control" id="d_hairType" name="hair_type">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Curly</a></li>
                                        <li><a href="#">Straight</a></li>
                                        <li><a href="#">Wavy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_hairtexture">Hair Texture</label>
                                    <input type="text" readonly class="form-control" id="d_hairtexture"
                                           name="hair_texture">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Fine</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Coarse</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_hairfulness">Hair Fullness</label>
                                    <input type="text" readonly class="form-control" id="d_hairfulness"
                                           name="hair_fullness">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Thin</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Thick</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_baldness">Baldness</label>
                                    <input type="text" readonly class="form-control" id="d_baldness" name="baldness">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_baldnessinfamily">Baldness in Family</label>
                                    <input type="text" readonly class="form-control" id="d_baldnessinfamily"
                                           name="baldness_family">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_prematureGraying">Premature Graying</label>
                                    <input type="text" readonly class="form-control" id="d_prematureGraying"
                                           name="graying">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_prematureGraying">if yes, at what age?</label>
                                    <input type="text" class="form-control" id="i_prematureGraying"
                                           name="graying_age">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_bodyfacialfeatures">Body and Facial Features</label>
                                    <input type="text" readonly class="form-control" id="d_bodyfacialfeatures"
                                           name="body_facial_features">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Small</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Large</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_teethcondition">Teeth Condition</label>
                                    <input type="text" readonly class="form-control" id="d_teethcondition"
                                           name="teeth">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Poor</a></li>
                                        <li><a href="#">Fair</a></li>
                                        <li><a href="#">Good</a></li>
                                        <li><a href="#">Excellent</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_periodonalword">Periodontal or Orthodontic work?</label>
                                    <input type="text" readonly class="form-control" id="d_periodonalword"
                                           name="orthodontic_work">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_periodonalword">If yes, at what age?</label>
                                    <input type="text" class="form-control" id="i_periodonalword"
                                           name="orthodontic_age">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_hearing">Hearing</label>
                                    <input type="text" readonly class="form-control" id="d_hearing" name="hearing">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Poor</a></li>
                                        <li><a href="#">Fair</a></li>
                                        <li><a href="#">Good</a></li>
                                        <li><a href="#">Excellent</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_vision">Vision</label>
                                    <input type="text" readonly class="form-control" id="d_vision" name="vision">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Poor</a></li>
                                        <li><a href="#">Fair</a></li>
                                        <li><a href="#">Good</a></li>
                                        <li><a href="#">Excellent</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="vision_prescription">Vision Prescription, if known</label>
                                    <input type="text" class="form-control" id="vision_prescription"
                                           name="vision_prescription">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_glassesCorrective">Glasses or corrective laser surgery?</label>
                                    <input type="text" readonly class="form-control" id="d_glassesCorrective"
                                           name="glasses">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-drop-down">
                                    <label for="i_glassesCorrective">If yes, at what age?</label>
                                    <input type="text" class="form-control" id="i_glassesCorrective"
                                           name="vision_problem">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="d_stigmatism">Stigmatism</label>
                                    <input type="text" readonly class="form-control" id="d_stigmatism"
                                           name="stigmatism">
                                    <!--placeholder="Do you have a stigmatism (blurred vision due to an irregularity in the curvature of the cornea)?">-->
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="active">Yes</a></li>
                                        <li><a href="#">No</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group c-drop-down">
                                    <label for="i_stigmatism">If yes, age diagnosed</label>
                                    <input type="text" class="form-control" id="i_stigmatism" name="stigmatism_age">
                                </div>
                            </div>

                            <div class="row step-10-b-row">
                                <div class="col-12">
                                    <h3><span>Egg Donation </span>Experience</h3>
                                </div>
                                <div class="col-12">
                                    <h4><span>Important:</span> All women who have previously donated must obtain the
                                        medical records from each donation. Records must include:</h4>
                                </div>
                                <div class="col-12">
                                    <p>The treatment flow sheet containing information about protocol, dose and
                                        monitoring
                                        results Complete
                                        <span>embryology information-total number of eggs retrieved</span>,
                                        percent mature egg, percent that fertilized, embryo development information.
                                        <br>Were
                                        embryos frozen? <br><span>Outcomes:</span> Did pregnancy result from the cycle?
                                    </p>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="donated_eggs">Have You Donated Eggs Before</label>
                                        <input type="text" readonly class="form-control" id="donated_eggs"
                                               name="donated">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Yes</a></li>
                                            <li><a href="#" class="active">No</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="i_num_times_donated">Number of times donated</label>
                                        <input type="text" class="form-control" id="i_num_times_donated"
                                               name="number_of_donations">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Tell us something about yourself that you would like a prospective egg recipient
                                        to
                                        know. Providing a personal answer to this question is
                                        <span>extremely important:</span></p>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    <textarea cols="20" rows="10" id="i_detail_self"
                                              name="personal_message"
                                              class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <p>All applicants must submit two <span>good quality photographs</span>. One must be
                                        of
                                        your head and shoulders and clearly show your face. The other must be of your
                                        <span>entire body.</span>
                                        <br>
                                        Please make sure your <span>image isn't too large</span>. Images must be in JPEG
                                        format (.jpeg or .jpg).</p>
                                </div>
                                <div class="col-6 col-sm-3 imgs">
                                    <div class="wrap">
                                        <div class="form-group text-center">
                                            <div class="img-fake">
                                                <img class="img-fluid js-img-choosed" src="../img/avatar.png"
                                                     alt="product image">
                                            </div>
                                            <label for="img-chooser-1">
                                                <span class="btn btn-file btn-primary">Choose Image</span>
                                            </label>
                                            <input type="file" name="img[]" id="img-chooser-1"
                                                   class="d-none file-chooser" accept="image/*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 imgs">
                                    <div class="wrap">
                                        <div class="form-group text-center">
                                            <div class="img-fake">
                                                <img class="img-fluid js-img-choosed" src="../img/avatar.png"
                                                     alt="product image" required>
                                            </div>
                                            <label for="img-chooser-2">
                                                <span class="btn btn-file btn-primary">Choose Image</span>
                                            </label>
                                            <input type="file" name="img[]" id="img-chooser-2"
                                                   class="d-none file-chooser" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 imgs">
                                    <div class="wrap">
                                        <div class="form-group text-center">
                                            <div class="img-fake">
                                                <img class="img-fluid js-img-choosed" src="../img/avatar.png"
                                                     alt="product image">
                                            </div>
                                            <label for="img-chooser-3">
                                                <span class="btn btn-file btn-primary">Choose Image</span>
                                            </label>
                                            <input type="file" name="img[]" id="img-chooser-3"
                                                   class="d-none file-chooser" accept="image/*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 imgs">
                                    <div class="wrap">
                                        <div class="form-group text-center">
                                            <div class="img-fake">
                                                <img class="img-fluid js-img-choosed" src="../img/avatar.png"
                                                     alt="product image">
                                            </div>
                                            <label for="img-chooser-4">
                                                <span class="btn btn-file btn-primary">Choose Image</span>
                                            </label>
                                            <input type="file" name="img[]" id="img-chooser-4"
                                                   class="d-none file-chooser" accept="image/*" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8">
                                    <ul>
                                        <li class="mt-4 pt-3 mb-4">Is it okay to have prospective egg recipients to view
                                            your photographs?
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group c-dropdown dd-photo-permission">
                                        <label for=""></label>
                                        <input type="text" readonly class="form-control" id="d_is_it_ok"
                                               name="photo_permission"
                                               placeholder="No">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Yes</a></li>
                                            <li><a href="#" class="active">No</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 " id="egg-donation-reason">
                                    <h4>I am interested in becoming an egg donor because:
                                        <span>(check all that apply)</span></h4>
                                </div>
                                <div class="col-12 donation-reason">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="knows_someone" value="0">
                                            <input type='checkbox' name="knows_someone" class="egg-donation-reason"
                                                   value="1">
                                            <span class='indicator'></span>
                                            I know someone with infertility and always wanted to help.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="rewarding" value="0">
                                            <input type='checkbox' name="rewarding" class="egg-donation-reason"
                                                   value="1">
                                            <span class='indicator'></span>
                                            I think it would be a rewarding experience for me.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="fascinating" value="0">
                                            <input type='checkbox' name="fascinating" class="egg-donation-reason"
                                                   value="1">
                                            <span class='indicator'></span>
                                            I think the process is fascinating and wanted to be involved.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class='checkboxes'>
                                        <label class='checkbox'>
                                            <input type="hidden" name="need_money" value="0">
                                            <input type='checkbox' name="need_money" class="egg-donation-reason"
                                                   value="1">
                                            <span class='indicator'></span>
                                            I need the money.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="d_other">Other</label>
                                        <input type="text" id="other" class=" form-control"
                                               name="other">
                                    </div>
                                </div>
                                <br>
                                <div class="col-12 text-center">
                                    <p><b>Your answers will be saved as soon as you click next step. You may take a
                                            break
                                            and come back later, but you cannot undo any previous answers. Please check
                                            your
                                            work before proceeding to the next page. </b></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <button id="submit10" class="bttn btn donor-submit">Finish</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Smartwizard ends here-->
    </div>

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

    <!--Successfully submitted-->
    <div class="modal fade" id="successfully" tabindex="-1" role="dialog" aria-labelledby="congrats" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Application Submitted Successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrap">
                        <h5>Your application has been submitted to IVF 1 for <span>review.</span></h5>
                        <h5>You will <span>receive an email</span> when your application has been approved. <br>Please
                            <a
                                    href="#">contact us</a> if you have any questions.</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <small class="pull-left">Egg donor quiz created by <a href="#">IVF1</a>.</small>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--Pushing Donor Questionnairy only JS files --}}
@push('js')
    <script src="{{asset('vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jquer-smart_wizard/js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('js/donor-questionary.min.js')}}"></script>
@endpush
