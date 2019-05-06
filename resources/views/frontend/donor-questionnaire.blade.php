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
                                        <input type="text" class="form-control" id="date_birth"
                                               name="dob" readonly>
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

                                        <input type="text" readonly="" class="form-control" id="firstPeriod"
                                               name="first_period" placeholder="<10">
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
                                               name="bleeding_begins" placeholder="From">
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="form-group c-dropdown" id="menmonth">
                                        <!-- <label for="menstrualMonths"></label> -->

                                        <input type="text" class="form-control" id="bleeding_ends" name="bleeding_ends"
                                               placeholder="To">
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
                                               name="bleeding_lasts_from" placeholder="From">
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="form-group c-dropdown" id="menmonth">
                                        <input type="text" class="form-control" id="bleeding_lasts_to"
                                               name="bleeding_lasts_to" placeholder="To">
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container mb-3 mt-3">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline mr-2">
                                            <strong>Yes</strong>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline pl-0">
                                            <strong>No</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="abnormal-pap-yes" name="abnormal_pap"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="abnormal-pap-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="abnormal-pap-no" name="abnormal_pap"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="abnormal-pap-no"></label>
                                        </div>
                                    </div>
                                    <label for="abnormal-pap-yes" class="statement">
                                        Have you ever had an abnormal PAP smear?
                                    </label>
                                </div>

                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="pregnancy-issues-yes" name="pregnancy_issues"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="pregnancy-issues-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pregnancy-issues-no" name="pregnancy_issues"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="pregnancy-issues-no"></label>
                                        </div>
                                    </div>
                                    <label for="pregnancy-issues-yes" class="statement">
                                        Have you ever been told you might have trouble having children?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container mt-0">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="bleeding-between-yes" name="bleeding_between"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="bleeding-between-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bleeding-between-no" name="bleeding_between"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="bleeding-between-no"></label>
                                        </div>
                                    </div>
                                    <label for="bleeding-between-yes" class="statement">
                                        I sometimes have bleeding in between my normal periods.
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="bleeding-after-yes" name="bleeding_after"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="bleeding-after-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bleeding-after-no" name="bleeding_after"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="bleeding-after-no"></label>
                                        </div>
                                    </div>
                                    <label for="bleeding-after-yes" class="statement">
                                        I sometimes have bleeding after intercourse.
                                    </label>
                                </div>
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
                                <div class="col-12 radio-boxes-container mb-3 mt-3">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline mr-2">
                                            <strong>Yes</strong>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline pl-0">
                                            <strong>No</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="law-trouble-yes" name="law_trouble"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="law-trouble-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="law-trouble-no" name="law_trouble"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="law-trouble-no"></label>
                                        </div>
                                    </div>
                                    <label for="law-trouble-yes" class="statement">
                                        I have been in trouble with the law.
                                    </label>
                                </div>

                                <div class="col-6 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="arrested-yes" name="arrested"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="arrested-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="arrested-no" name="arrested"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="arrested-no"></label>
                                        </div>
                                    </div>
                                    <label for="arrested-yes" class="statement statement-input">
                                        I have been arrested before, but not convicted.
                                    </label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="If yes, what happened?"
                                               name="arrest_reason" id="i_arrested">
                                    </div>
                                </div>

                                <div class="col-6 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="convicted-yes" name="convicted"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="convicted-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="convicted-no" name="convicted"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="convicted-no"></label>
                                        </div>
                                    </div>
                                    <label for="convicted-yes" class="statement statement-input">
                                        I have been convicted of a crime.
                                    </label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="What Crime(s)?"
                                               name="convicted_crimes" id="i_convicted">
                                    </div>
                                </div>

                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="hour-jail-yes" name="hour_jail"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="hour-jail-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="hour-jail-no" name="hour_jail"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="hour-jail-no"></label>
                                        </div>
                                    </div>
                                    <label for="hour-jail-yes" class="statement">
                                        I have spent at least one hour in jail or prison.
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="three-days-jail-yes" name="three_days_jail"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="three-days-jail-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="three-days-jail-no" name="three_days_jail"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="three-days-jail-no"></label>
                                        </div>
                                    </div>
                                    <label for="three-days-jail-yes" class="statement">
                                        I have spent more than 72 consecutive hours in prison in the last year.
                                    </label>
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
                            <div class="row other-history-section">

                                <div class="col-12">
                                    <h3>Other <span>History</span></h3>
                                </div>
                                <div class="col-12 radio-boxes-container mb-3 mt-3">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline mr-2">
                                            <strong>Yes</strong>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline pl-0">
                                            <strong>No</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="cjd-yes" name="cjd"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="cjd-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="cjd-no" name="cjd"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="cjd-no"></label>
                                        </div>
                                    </div>
                                    <label for="cjd-yes" class="statement">
                                        Have you ever been diagnosed with vCJD or any other form of CJD?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="dementia-yes" name="dementia"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="dementia-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="dementia-no" name="dementia"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="dementia-no"></label>
                                        </div>
                                    </div>
                                    <label for="dementia-yes" class="statement">
                                        Have you ever been diagnosed with dementia or any degenerative or
                                        demyelinating
                                        disease of the central nervous system (CNS) or other neurological disease of
                                        unknown etiology?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="dura-mater-yes" name="dura_mater"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="dura-mater-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="dura-mater-no" name="dura_mater"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="dura-mater-no"></label>
                                        </div>
                                    </div>
                                    <label for="dura-mater-yes" class="statement">
                                        Have you ever received a dura mater transplant?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="human-gh-yes" name="human_gh"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="human-gh-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="human-gh-no" name="human_gh"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="human-gh-no"></label>
                                        </div>
                                    </div>
                                    <label for="human-gh-yes" class="statement">
                                        Have you ever received injections of human pituitary-derived growth hormone?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="cjd-family-yes" name="cjd_family"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="cjd-family-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="cjd-family-no" name="cjd_family"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="cjd-family-no"></label>
                                        </div>
                                    </div>
                                    <label for="cjd-family-yes" class="statement">
                                        Has one or more blood relatives been diagnosed with CJD?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="visit-uk-yes" name="visit_uk"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="visit-uk-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="visit-uk-no" name="visit_uk"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="visit-uk-no"></label>
                                        </div>
                                    </div>
                                    <label for="visit-uk-yes" class="statement">
                                        Have you spent three months or more cumulatively in the U.K. from the
                                        beginning
                                        of 1980 through the end of 1996?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="military-member-yes" name="military_member"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="military-member-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="military-member-no" name="military_member"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="military-member-no"></label>
                                        </div>
                                    </div>
                                    <label for="military-member-yes" class="statement">
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
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="lived-europe-yes" name="lived_europe"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="lived-europe-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="lived-europe-no" name="lived_europe"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="lived-europe-no"></label>
                                        </div>
                                    </div>
                                    <label for="lived-europe-yes" class="statement">
                                        Have you lived cumulatively for 5 years or more in Europe from 1980 until
                                        the
                                        Present?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="radio-boxes checkboxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="blood-uk-yes" name="blood_uk"
                                                   class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="blood-uk-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="blood-uk-no" name="blood_uk"
                                                   class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="blood-uk-no"></label>
                                        </div>
                                    </div>
                                    <label for="blood-uk-yes" class="statement">
                                        Have you received any transfusion of blood or blood components in the U.K.
                                        or
                                        France between 1980 to the present?
                                    </label>
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
                                            <input type="radio" id="injectable-last-5-yes" name="injectable_last_5"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="injectable-last-5-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="injectable-last-5-no" name="injectable_last_5"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="injectable-last-5-no"></label>
                                        </div>
                                    </div>
                                    <label for="injectable-last-5-yes" class="statement">
                                        Have you injected drugs for a non-medical reason in the last 5 years?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="hemophilia-yes" name="hemophilia"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="hemophilia-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="hemophilia-no" name="hemophilia"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="hemophilia-no"></label>
                                        </div>
                                    </div>
                                    <label for="hemophilia-yes" class="statement">
                                        Do you have hemophilia and/or received human-derived clotting factor
                                        concentrates in the last 5 years?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="hepatitis-contact-yes" name="hepatitis_contact"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="hepatitis-contact-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="hepatitis-contact-no" name="hepatitis_contact"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="hepatitis-contact-no"></label>
                                        </div>
                                    </div>
                                    <label for="hepatitis-contact-yes" class="statement">
                                        Have you in the last 12 months lived in the same dwelling with another
                                        person
                                        with hepatitis B infection or hepatitis C infection?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="hiv-yes" name="hiv" class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="hiv-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="hiv-no" name="hiv" class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="hiv-no"></label>
                                        </div>
                                    </div>
                                    <label for="hiv-yes" class="statement">
                                        Have you been exposed in the preceding 12 months to known or suspected HIV
                                        (AIDS), Hepatitis B, and/or Hepatitis C infected blood through percutaneous
                                        inoculation (e.g., needle stick) or through contact with an open wound,
                                        non-intact skin, or mucous membrane?
                                    </label>
                                </div>

                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="hepatitis-yes" name="hepatitis"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="hepatitis-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="hepatitis-no" name="hepatitis"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="hepatitis-no"></label>
                                        </div>
                                    </div>
                                    <label for="hepatitis-yes" class="statement">
                                        Have you ever been diagnosed with any form of hepatitis?
                                    </label>
                                </div>

                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="prison-yes" name="prison"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="prison-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="prison-no" name="prison"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="prison-no"></label>
                                        </div>
                                    </div>
                                    <label for="prison-yes" class="statement">
                                        Have you been in juvenile detention, lock up, jail or prison in the last 12
                                        months?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="tattoo-yes" name="tattoo"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="tattoo-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="tattoo-no" name="tattoo"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="tattoo-no"></label>
                                        </div>
                                    </div>
                                    <label for="tattoo-yes" class="statement">
                                        In the last 12 months, have you gotten a new tattoo, ear piercing or body
                                        piercing, or had acupuncture treatment in which sterile procedures may not
                                        have
                                        been used?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="smallpox-vaccine-yes" name="smallpox_vaccine"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="smallpox-vaccine-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="smallpox-vaccine-no" name="smallpox_vaccine"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="smallpox-vaccine-no"></label>
                                        </div>
                                    </div>
                                    <label for="smallpox-vaccine-yes" class="statement">
                                        In the last 8 weeks, did you receive a smallpox vaccination (vaccinia
                                        virus)?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="smallpox-contact-yes" name="smallpox_contact"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="smallpox-contact-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="smallpox-contact-no" name="smallpox_contact"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="smallpox-contact-no"></label>
                                        </div>
                                    </div>
                                    <label for="smallpox-contact-yes" class="statement">
                                        In the last 12 months, have you had any contact with someone who received a
                                        smallpox vaccination or who was diagnosed with smallpox?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="smallpox-yes" name="smallpox"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="smallpox-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="smallpox-no" name="smallpox"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="smallpox-no"></label>
                                        </div>
                                    </div>
                                    <label for="smallpox-yes" class="statement">
                                        Have you ever been diagnosed with smallpox?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="west-nile-virus-yes" name="west_nile_virus"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="west-nile-virus-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="west-nile-virus-no" name="west_nile_virus"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="west-nile-virus-no"></label>
                                        </div>
                                    </div>
                                    <label for="west-nile-virus-yes" class="statement">
                                        In the last 12 months, were you diagnosed with or treated for West Nile
                                        Virus?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="syphilis-yes" name="syphilis"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="syphilis-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="syphilis-no" name="syphilis"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="syphilis-no"></label>
                                        </div>
                                    </div>
                                    <label for="syphilis-yes" class="statement">
                                        In the last 12 months, were you diagnosed with or treated for Syphilis?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="gonorrhea-yes" name="gonorrhea"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="gonorrhea-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="gonorrhea-no" name="gonorrhea"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="gonorrhea-no"></label>
                                        </div>
                                    </div>
                                    <label for="gonorrhea-yes" class="statement">
                                        In the last 12 months, were you diagnosed with or treated for Chlamydia or
                                        gonorrhea infection?
                                    </label>
                                </div>
                                <div class="col-6 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="transfusion-yes" name="transfusion"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="transfusion-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="transfusion-no" name="transfusion"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="transfusion-no"></label>
                                        </div>
                                    </div>
                                    <label for="transfusion-yes" class="statement">
                                        Have you ever received a blood transfusion? If yes, when?
                                    </label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="i_blood_transfusion"
                                               name="transfusion_date">
                                    </div>
                                </div>

                                <div class="col-6 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="donor-rejection-yes" name="donor_rejection"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="donor-rejection-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="donor-rejection-no" name="donor_rejection"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="donor-rejection-no"></label>
                                        </div>
                                    </div>
                                    <label for="donor-rejection-yes" class="statement">
                                        Have you ever been turned down to be a blood donor? If yes, why?
                                    </label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="i_blood_donor"
                                               name="rejection_reason">
                                    </div>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="transplant-yes" name="transplant"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="transplant-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="transplant-no" name="transplant"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="transplant-no"></label>
                                        </div>
                                    </div>
                                    <label for="transplant-yes" class="statement">
                                        Have you ever received a transplant of any tissue, cells or fluids from a
                                        non-human, animal source?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="transplant-contact-yes" name="transplant_contact"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="transplant-contact-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="transplant-contact-no" name="transplant_contact"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="transplant-contact-no"></label>
                                        </div>
                                    </div>
                                    <label for="transplant-contact-yes" class="statement">
                                        Have you ever had intimate contact with a recipient of a transplant of any
                                        tissue, cells or fluids from a non-human, animal source? (Intimate contact
                                        means
                                        exchange of body fluids like blood, saliva, semen; this includes sexual
                                        partners, household members that share razors or toothbrushes)
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="african-countries-yes" name="african_countries"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="african-countries-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="african-countries-no" name="african_countries"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="african-countries-no"></label>
                                        </div>
                                    </div>
                                    <label for="african-countries-yes" class="statement">
                                        Were you born in or did you live in any of the following countries since
                                        1977?
                                        Cameroon, Central African Republic, Chad, Congo, Equatorial Guinea, Gabon,
                                        Niger
                                        or Nigeria?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="african-transfusion-yes" name="african_transfusion"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="african-transfusion-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="african-transfusion-no" name="african_transfusion"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="african-transfusion-no"></label>
                                        </div>
                                    </div>
                                    <label for="african-transfusion-yes" class="statement">
                                        Did you have a blood transfusion or have any medical treatment involving
                                        blood
                                        in any of the following countries since 1977? Cameroon, Central African
                                        republic, Chad, Congo, Equatorial Guinea, Gabon, Niger or Nigeria?
                                    </label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <h3>Zika Virus <span>Screening</span></h3>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="zika-virus-1-yes" name="zika_virus_1"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="zika-virus-1-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="zika-virus-1-no" name="zika_virus_1"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="zika-virus-1-no"></label>
                                        </div>
                                    </div>
                                    <label for="zika-virus-1-yes" class="statement">
                                        Have you been diagnosed with Zika virus infection in the past 6 months?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="zika-virus-2-yes" name="zika_virus_2"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="zika-virus-2-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="zika-virus-2-no" name="zika_virus_2"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="zika-virus-2-no"></label>
                                        </div>
                                    </div>
                                    <label for="zika-virus-2-yes" class="statement">
                                        Have you traveled to an area with active Zika virus transmission in the last
                                        6
                                        months?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="zika-virus-3-yes" name="zika_virus_3"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="zika-virus-3-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="zika-virus-3-no" name="zika_virus_3"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="zika-virus-3-no"></label>
                                        </div>
                                    </div>
                                    <label for="zika-virus-3-yes" class="statement">
                                        Have you had sex with a male who has been diagnosed with Zika virus
                                        infection in
                                        the last 6 months?
                                    </label>
                                </div>
                                <div class="col-12 radio-boxes-container">
                                    <div class="checkboxes radio-boxes">
                                        <div class="custom-control custom-radio custom-control-inline first mr-2">
                                            <input type="radio" id="zika-virus-4-yes" name="zika_virus_4"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label class="custom-control-label" for="zika-virus-4-yes"></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="zika-virus-4-no" name="zika_virus_4"
                                                   class="custom-control-input"
                                                   value="0">
                                            <label class="custom-control-label" for="zika-virus-4-no"></label>
                                        </div>
                                    </div>
                                    <label for="zika-virus-4-yes" class="statement">
                                        Have you had sex with a male who has traveled to an area with active Zika
                                        virus
                                        transmission in the last 6 months?
                                    </label>
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
                                <h3>List any serious <span>medical problems</span> or illnesses.
                                    <span>Include any past problems</span>,
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
                                    <th scope="col"><strong>You</strong></th>
                                    <th scope="col"><strong>Family</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes &nbsp; No</th>
                                    <th scope="col">Yes &nbsp; No</th>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cleft-lip-yes" name="cleft_lip"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="cleft-lip-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cleft-lip-no" name="cleft_lip"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="cleft-lip-no"></label>
                                            </div>
                                        </div>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cleft-lip-family-yes" name="cleft_lip_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="cleft-lip-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cleft-lip-family-no" name="cleft_lip_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="cleft-lip-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cleft-palate-yes" name="cleft_palate"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="cleft-palate-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cleft-palate-no" name="cleft_palate"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="cleft-palate-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cleft-palate-family-yes"
                                                       name="cleft_palate_family" class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="cleft-palate-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cleft-palate-family-no"
                                                       name="cleft_palate_family" class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="cleft-palate-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hip-dislocation-yes" name="hip_dislocation"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hip-dislocation-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hip-dislocation-no" name="hip_dislocation"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hip-dislocation-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hip-dislocation-family-yes"
                                                       name="hip_dislocation_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="hip-dislocation-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hip-dislocation-family-no"
                                                       name="hip_dislocation_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="hip-dislocation-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="clubfoot-yes" name="clubfoot"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="clubfoot-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="clubfoot-no" name="clubfoot"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="clubfoot-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="clubfoot-family-yes" name="clubfoot_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="clubfoot-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="clubfoot-family-no" name="clubfoot_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="clubfoot-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="heart-defect-yes" name="heart_defect"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="heart-defect-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="heart-defect-no" name="heart_defect"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="heart-defect-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="heart-defect-family-yes"
                                                       name="heart_defect_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="heart-defect-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="heart-defect-family-no"
                                                       name="heart_defect_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="heart-defect-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hearing-issue-yes" name="hearing_issue"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hearing-issue-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hearing-issue-no" name="hearing_issue"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hearing-issue-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hearing-issue-family-yes"
                                                       name="hearing_issue_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="hearing-issue-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hearing-issue-family-no"
                                                       name="hearing_issue_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="hearing-issue-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="spina-bifida-yes" name="spina_bifida"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="spina-bifida-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="spina-bifida-no" name="spina_bifida"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="spina-bifida-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="spina-bifida-family-yes"
                                                       name="spina_bifida_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="spina-bifida-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="spina-bifida-family-no"
                                                       name="spina_bifida_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="spina-bifida-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="microcephaly-yes" name="microcephaly"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="microcephaly-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="microcephaly-no" name="microcephaly"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="microcephaly-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="microcephaly-family-yes"
                                                       name="microcephaly_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="microcephaly-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="microcephaly-family-no"
                                                       name="microcephaly_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="microcephaly-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="holoprosencephaly-yes" name="holoprosencephaly"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="holoprosencephaly-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="holoprosencephaly-no" name="holoprosencephaly"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="holoprosencephaly-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="holoprosencephaly-family-yes"
                                                       name="holoprosencephaly_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="holoprosencephaly-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="holoprosencephaly-family-no"
                                                       name="holoprosencephaly_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="holoprosencephaly-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="death-at-birth-yes" name="death_at_birth"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="death-at-birth-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="death-at-birth-no" name="death_at_birth"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="death-at-birth-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="death-at-birth-family-yes"
                                                       name="death_at_birth_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="death-at-birth-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="death-at-birth-family-no"
                                                       name="death_at_birth_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="death-at-birth-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="dwarfism-yes" name="dwarfism"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="dwarfism-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="dwarfism-no" name="dwarfism"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="dwarfism-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="dwarfism-family-yes" name="dwarfism_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="dwarfism-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="dwarfism-family-no" name="dwarfism_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="dwarfism-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hypospadias-yes" name="hypospadias"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hypospadias-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hypospadias-no" name="hypospadias"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hypospadias-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hypospadias-family-yes"
                                                       name="hypospadias_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="hypospadias-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hypospadias-family-no" name="hypospadias_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hypospadias-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="pheny-yes" name="pheny"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="pheny-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="pheny-no" name="pheny"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="pheny-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="pheny-family-yes" name="pheny_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="pheny-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="pheny-family-no" name="pheny_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="pheny-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="polycystic-yes" name="polycystic"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="polycystic-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="polycystic-no" name="polycystic"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="polycystic-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="polycystic-family-yes" name="polycystic_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="polycystic-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="polycystic-family-no" name="polycystic_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="polycystic-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="pyloric-yes" name="pyloric"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="pyloric-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="pyloric-no" name="pyloric"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="pyloric-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="pyloric-family-yes" name="pyloric_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="pyloric-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="pyloric-family-no" name="pyloric_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="pyloric-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-congenital-yes" name="other_congenital"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="other-congenital-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-congenital-no" name="other_congenital"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="other-congenital-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-congenital-family-yes"
                                                       name="other_congenital_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-congenital-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-congenital-family-no"
                                                       name="other_congenital_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-congenital-family-no"></label>
                                            </div>
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
                            {{--                            <h3>Chromosomal <span>Abnormalities</span></h3>--}}
                            <h3>Psychological <span>History (Answer each question)</span></h3>
                        </div>
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><strong>You</strong></th>
                                    <th scope="col"><strong>Family</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes No</th>
                                    <th scope="col">Yes No</th>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="downs-yes" name="downs"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="downs-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="downs-no" name="downs"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="downs-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="downs-family-yes" name="downs_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="downs-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="downs-family-no" name="downs_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="downs-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fragile-x-yes" name="fragile_x"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fragile-x-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fragile-x-no" name="fragile_x"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fragile-x-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fragile-x-family-yes" name="fragile_x_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fragile-x-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fragile-x-family-no" name="fragile_x_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fragile-x-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="turner-yes" name="turner"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="turner-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="turner-no" name="turner"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="turner-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="turner-family-yes" name="turner_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="turner-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="turner-family-no" name="turner_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="turner-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="klinefelter-yes" name="klinefelter"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="klinefelter-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="klinefelter-no" name="klinefelter"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="klinefelter-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="klinefelter-family-yes"
                                                       name="klinefelter_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="klinefelter-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="klinefelter-family-no" name="klinefelter_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="klinefelter-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-abnormality-yes" name="other_abnormality"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="other-abnormality-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-abnormality-no" name="other_abnormality"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="other-abnormality-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-abnormality-family-yes"
                                                       name="other_abnormality_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-abnormality-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-abnormality-family-no"
                                                       name="other_abnormality_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-abnormality-family-no"></label>
                                            </div>
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
                                    <th scope="col"><strong>You</strong></th>
                                    <th scope="col"><strong>Family</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes &nbsp; No</th>
                                    <th scope="col">Yes &nbsp; No</th>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alpha-1-yes" name="alpha_1"
                                                       class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="alpha-1-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alpha-1-no" name="alpha_1"
                                                       class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="alpha-1-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alpha-1-family-yes" name="alpha_1_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="alpha-1-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alpha-1-family-no" name="alpha_1_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="alpha-1-family-no"></label>
                                            </div>
                                        </div>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_alpha_1_comment"
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="bloom-yes" name="bloom"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="bloom-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="bloom-no" name="bloom"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="bloom-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="bloom-family-yes" name="bloom_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="bloom-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="bloom-family-no" name="bloom_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="bloom-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="canavan-yes" name="canavan"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="canavan-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="canavan-no" name="canavan"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="canavan-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="canavan-family-yes" name="canavan_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="canavan-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="canavan-family-no" name="canavan_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="canavan-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cystic-fibrosis-yes" name="cystic_fibrosis"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="cystic-fibrosis-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cystic-fibrosis-no" name="cystic_fibrosis"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="cystic-fibrosis-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cystic-fibrosis-family-yes"
                                                       name="cystic_fibrosis_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="cystic-fibrosis-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cystic-fibrosis-family-no"
                                                       name="cystic_fibrosis_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="cystic-fibrosis-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fabry-yes" name="fabry"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fabry-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fabry-no" name="fabry"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fabry-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fabry-family-yes" name="fabry_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fabry-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fabry-family-no" name="fabry_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fabry-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="factor-v-yes" name="factor_v"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="factor-v-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="factor-v-no" name="factor_v"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="factor-v-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="factor-v-family-yes" name="factor_v_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="factor-v-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="factor-v-family-no" name="factor_v_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="factor-v-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="familial-dis-yes" name="familial_dis"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="familial-dis-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="familial-dis-no" name="familial_dis"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="familial-dis-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="familial-dis-family-yes"
                                                       name="familial_dis_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="familial-dis-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="familial-dis-family-no"
                                                       name="familial_dis_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="familial-dis-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="familial-med-yes" name="familial_med"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="familial-med-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="familial-med-no" name="familial_med"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="familial-med-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="familial-med-family-yes"
                                                       name="familial_med_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="familial-med-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="familial-med-family-no"
                                                       name="familial_med_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="familial-med-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fanconi-yes" name="fanconi"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fanconi-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fanconi-no" name="fanconi"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fanconi-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="fanconi-family-yes" name="fanconi_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="fanconi-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="fanconi-family-no" name="fanconi_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="fanconi-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hemophilia-yes" name="hemophilia"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hemophilia-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hemophilia-no" name="hemophilia"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hemophilia-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hemophilia-family-yes" name="hemophilia_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hemophilia-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hemophilia-family-no" name="hemophilia_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hemophilia-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="marfan-yes" name="marfan"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="marfan-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="marfan-no" name="marfan"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="marfan-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="marfan-family-yes" name="marfan_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="marfan-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="marfan-family-no" name="marfan_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="marfan-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="mucolipidosis4-yes" name="mucolipidosis4"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="mucolipidosis4-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="mucolipidosis4-no" name="mucolipidosis4"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="mucolipidosis4-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="mucolipidosis4-family-yes"
                                                       name="mucolipidosis4_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="mucolipidosis4-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="mucolipidosis4-family-no"
                                                       name="mucolipidosis4_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="mucolipidosis4-family-no"></label>
                                            </div>
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
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="niemann-pick-yes" name="niemann_pick"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="niemann-pick-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="niemann-pick-no" name="niemann_pick"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="niemann-pick-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="niemann-pick-family-yes"
                                                       name="niemann_pick_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="niemann-pick-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="niemann-pick-family-no"
                                                       name="niemann_pick_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="niemann-pick-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="sickle-cell-yes" name="sickle_cell"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="sickle-cell-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sickle-cell-no" name="sickle_cell"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="sickle-cell-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="sickle-cell-family-yes"
                                                       name="sickle_cell_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="sickle-cell-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sickle-cell-family-no" name="sickle_cell_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="sickle-cell-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tay-sachs-yes" name="tay_sachs"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="tay-sachs-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tay-sachs-no" name="tay_sachs"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="tay-sachs-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tay-sachs-family-yes" name="tay_sachs_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="tay-sachs-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tay-sachs-family-no" name="tay_sachs_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="tay-sachs-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="thallasemia-yes" name="thallasemia"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="thallasemia-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="thallasemia-no" name="thallasemia"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="thallasemia-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="thallasemia-family-yes"
                                                       name="thallasemia_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="thallasemia-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="thallasemia-family-no" name="thallasemia_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="thallasemia-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="blindness-yes" name="blindness"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="blindness-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="blindness-no" name="blindness"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="blindness-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="blindness-family-yes" name="blindness_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="blindness-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="blindness-family-no" name="blindness_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="blindness-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="color-blind-yes" name="color_blind"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="color-blind-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="color-blind-no" name="color_blind"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="color-blind-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="color-blind-family-yes"
                                                       name="color_blind_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="color-blind-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="color-blind-family-no" name="color_blind_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="color-blind-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="deafness-yes" name="deafness"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="deafness-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="deafness-no" name="deafness"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="deafness-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="deafness-family-yes" name="deafness_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="deafness-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="deafness-family-no" name="deafness_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="deafness-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="albinism-yes" name="albinism"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="albinism-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="albinism-no" name="albinism"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="albinism-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="albinism-family-yes" name="albinism_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="albinism-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="albinism-family-no" name="albinism_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="albinism-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="muscular-dystrophy-yes"
                                                       name="muscular_dystrophy"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="muscular-dystrophy-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="muscular-dystrophy-no" name="muscular_dystrophy"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="muscular-dystrophy-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="muscular-dystrophy-family-yes"
                                                       name="muscular_dystrophy_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="muscular-dystrophy-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="muscular-dystrophy-family-no"
                                                       name="muscular_dystrophy_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="muscular-dystrophy-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="galactosemia-yes" name="galactosemia"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="galactosemia-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="galactosemia-no" name="galactosemia"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="galactosemia-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="galactosemia-family-yes"
                                                       name="galactosemia_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="galactosemia-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="galactosemia-family-no"
                                                       name="galactosemia_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="galactosemia-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hurlers-yes" name="hurlers"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hurlers-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hurlers-no" name="hurlers"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hurlers-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hurlers-family-yes" name="hurlers_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hurlers-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hurlers-family-no" name="hurlers_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hurlers-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-genetic-yes" name="other_genetic"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="other-genetic-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-genetic-no" name="other_genetic"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="other-genetic-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-genetic-family-yes"
                                                       name="other_genetic_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-genetic-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-genetic-family-no"
                                                       name="other_genetic_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-genetic-family-no"></label>
                                            </div>
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
                                    <th scope="col"><strong>You</strong></th>
                                    <th scope="col"><strong>Family</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes &nbsp;No</th>
                                    <th scope="col">Yes &nbsp;No</th>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="breast-yes" name="breast"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="breast-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="breast-no" name="breast"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="breast-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="breast-family-yes" name="breast_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="breast-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="breast-family-no" name="breast_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="breast-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="colon-yes" name="colon"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="colon-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="colon-no" name="colon"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="colon-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="colon-family-yes" name="colon_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="colon-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="colon-family-no" name="colon_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="colon-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hnpcc-yes" name="hnpcc"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hnpcc-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hnpcc-no" name="hnpcc"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hnpcc-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hnpcc-family-yes" name="hnpcc_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hnpcc-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hnpcc-family-no" name="hnpcc_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hnpcc-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="ovarian-yes" name="ovarian"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="ovarian-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="ovarian-no" name="ovarian"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="ovarian-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="ovarian-family-yes" name="ovarian_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="ovarian-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="ovarian-family-no" name="ovarian_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="ovarian-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-cancer-yes" name="other_cancer"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="other-cancer-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-cancer-no" name="other_cancer"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="other-cancer-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-cancer-family-yes"
                                                       name="other_cancer_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-cancer-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-cancer-family-no"
                                                       name="other_cancer_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-cancer-family-no"></label>
                                            </div>
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
                                    <th scope="col"><strong>You</strong></th>
                                    <th scope="col"><strong>Family</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Medical Problem</th>
                                    <th scope="col">Yes &nbsp;No</th>
                                    <th scope="col">Yes &nbsp;No</th>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alzhemers-yes" name="alzhemers"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="alzhemers-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alzhemers-no" name="alzhemers"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="alzhemers-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alzhemers-family-yes"
                                                       name="alzhemers_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="alzhemers-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alzhemers-family-no" name="alzhemers_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="alzhemers-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="autism-yes" name="autism"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="autism-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="autism-no" name="autism"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="autism-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="autism-family-yes" name="autism_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="autism-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="autism-family-no" name="autism_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="autism-family-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_autism"
                                                   name="autism_comment">
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cerebral-palsy-yes" name="cerebral_palsy"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="cerebral-palsy-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cerebral-palsy-no" name="cerebral_palsy"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="cerebral-palsy-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="cerebral-palsy-family-yes"
                                                       name="cerebral_palsy_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="cerebral-palsy-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cerebral-palsy-family-no"
                                                       name="cerebral_palsy_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="cerebral-palsy-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="creultzfeldt-yes" name="creultzfeldt"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="creultzfeldt-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="creultzfeldt-no" name="creultzfeldt"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="creultzfeldt-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="creultzfeldt-family-yes"
                                                       name="creultzfeldt_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="creultzfeldt-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="creultzfeldt-family-no"
                                                       name="creultzfeldt_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="creultzfeldt-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="depression-yes" name="depression"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="depression-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="depression-no" name="depression"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="depression-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="depression-family-yes"
                                                       name="depression_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="depression-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="depression-family-no"
                                                       name="depression_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="depression-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="gauchers-yes" name="gauchers"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="gauchers-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="gauchers-no" name="gauchers"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="gauchers-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="gauchers-family-yes" name="gauchers_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="gauchers-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="gauchers-family-no" name="gauchers_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="gauchers-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="huntingtons-yes" name="huntingtons"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="huntingtons-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="huntingtons-no" name="huntingtons"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="huntingtons-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="huntingtons-family-yes"
                                                       name="huntingtons_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="huntingtons-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="huntingtons-family-no"
                                                       name="huntingtons_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="huntingtons-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hydrocephalus-yes" name="hydrocephalus"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="hydrocephalus-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hydrocephalus-no" name="hydrocephalus"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="hydrocephalus-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="hydrocephalus-family-yes"
                                                       name="hydrocephalus_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="hydrocephalus-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="hydrocephalus-family-no"
                                                       name="hydrocephalus_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="hydrocephalus-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="obsessive-yes" name="obsessive"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="obsessive-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="obsessive-no" name="obsessive"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="obsessive-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="obsessive-family-yes"
                                                       name="obsessive_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="obsessive-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="obsessive-family-no" name="obsessive_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="obsessive-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="mania-yes" name="mania"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="mania-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="mania-no" name="mania"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="mania-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="mania-family-yes" name="mania_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="mania-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="mania-family-no" name="mania_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="mania-family-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_mania"
                                                   name="mania_comment">
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="retardation-yes" name="retardation"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="retardation-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="retardation-no" name="retardation"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="retardation-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">

                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="retardation-family-yes"
                                                       name="retardation_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="retardation-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="retardation-family-no"
                                                       name="retardation_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="retardation-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="neurofibromatosis-yes"
                                                       name="neurofibromatosis"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="neurofibromatosis-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="neurofibromatosis-no"
                                                       name="neurofibromatosis"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="neurofibromatosis-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="neurofibromatosis-family-yes"
                                                       name="neurofibromatosis_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="neurofibromatosis-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="neurofibromatosis-family-no"
                                                       name="neurofibromatosis_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="neurofibromatosis-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="schizophrenia-yes" name="schizophrenia"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="schizophrenia-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="schizophrenia-no" name="schizophrenia"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="schizophrenia-no"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="schizophrenia-family-yes"
                                                       name="schizophrenia_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="schizophrenia-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="schizophrenia-family-no"
                                                       name="schizophrenia_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="schizophrenia-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tourette-yes" name="tourette"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="tourette-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tourette-no" name="tourette"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="tourette-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tourette-family-yes" name="tourette_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="tourette-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tourette-family-no" name="tourette_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="tourette-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tuberous-yes" name="tuberous"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="tuberous-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tuberous-no" name="tuberous"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="tuberous-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="tuberous-family-yes" name="tuberous_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="tuberous-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tuberous-family-no" name="tuberous_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="tuberous-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="wilsons-yes" name="wilsons"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="wilsons-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="wilsons-no" name="wilsons"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="wilsons-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="wilsons-family-yes" name="wilsons_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="wilsons-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="wilsons-family-no" name="wilsons_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="wilsons-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="multiple-sclerosis-yes"
                                                       name="multiple_sclerosis"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="multiple-sclerosis-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="multiple-sclerosis-no"
                                                       name="multiple_sclerosis"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="multiple-sclerosis-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="multiple-sclerosis-family-yes"
                                                       name="multiple_sclerosis_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="multiple-sclerosis-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="multiple-sclerosis-family-no"
                                                       name="multiple_sclerosis_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="multiple-sclerosis-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="parkinsons-yes" name="parkinsons"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="parkinsons-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="parkinsons-no" name="parkinsons"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="parkinsons-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="parkinsons-family-yes"
                                                       name="parkinsons_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="parkinsons-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="parkinsons-family-no"
                                                       name="parkinsons_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="parkinsons-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="lougehrigs-yes" name="lougehrigs"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="lougehrigs-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lougehrigs-no" name="lougehrigs"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="lougehrigs-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="lougehrigs-family-yes"
                                                       name="lougehrigs_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="lougehrigs-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lougehrigs-family-no"
                                                       name="lougehrigs_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="lougehrigs-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-neurologic-yes"
                                                       name="other_neurologic"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-neurologic-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-neurologic-no" name="other_neurologic"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-neurologic-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="other-neurologic-family-yes"
                                                       name="other_neurologic_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="other-neurologic-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="other-neurologic-family-no"
                                                       name="other_neurologic_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="other-neurologic-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="diabetes-yes" name="diabetes"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="diabetes-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="diabetes-no" name="diabetes"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="diabetes-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="diabetes-family-yes" name="diabetes_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="diabetes-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="diabetes-family-no" name="diabetes_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="diabetes-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="heart-disease-yes" name="heart_disease"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="heart-disease-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="heart-disease-no" name="heart_disease"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="heart-disease-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="heart-disease-family-yes"
                                                       name="heart_disease_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="heart-disease-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="heart-disease-family-no"
                                                       name="heart_disease_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="heart-disease-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="high-bp-yes" name="high_bp"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="high-bp-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="high-bp-no" name="high_bp"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="high-bp-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="high-bp-family-yes" name="high_bp_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="high-bp-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="high-bp-family-no" name="high_bp_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="high-bp-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="asthma-yes" name="asthma"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="asthma-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="asthma-no" name="asthma"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="asthma-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="asthma-family-yes" name="asthma_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="asthma-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="asthma-family-no" name="asthma_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="asthma-family-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_asthma"
                                                   name="asthma_comment">
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="lupus-yes" name="lupus"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="lupus-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lupus-no" name="lupus"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="lupus-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="lupus-family-yes" name="lupus_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="lupus-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lupus-family-no" name="lupus_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="lupus-family-no"></label>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="i_lupus"
                                                   name="lupus_comment">
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="obesity-yes" name="obesity"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="obesity-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="obesity-no" name="obesity"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="obesity-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="obesity-family-yes" name="obesity_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="obesity-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="obesity-family-no" name="obesity_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="obesity-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alcoholism-yes" name="alcoholism"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="alcoholism-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alcoholism-no" name="alcoholism"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="alcoholism-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="alcoholism-family-yes"
                                                       name="alcoholism_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="alcoholism-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alcoholism-family-no"
                                                       name="alcoholism_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="alcoholism-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="infertility-yes" name="infertility"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="infertility-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="infertility-no" name="infertility"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="infertility-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="infertility-family-yes"
                                                       name="infertility_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="infertility-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="infertility-family-no"
                                                       name="infertility_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="infertility-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="miscarriage-yes" name="miscarriage"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="miscarriage-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="miscarriage-no" name="miscarriage"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="miscarriage-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="miscarriage-family-yes"
                                                       name="miscarriage_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="miscarriage-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="miscarriage-family-no"
                                                       name="miscarriage_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="miscarriage-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="endometriosis-yes" name="endometriosis"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="endometriosis-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="endometriosis-no" name="endometriosis"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="endometriosis-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="endometriosis-family-yes"
                                                       name="endometriosis_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="endometriosis-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="endometriosis-family-no"
                                                       name="endometriosis_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="endometriosis-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="polycystic-ovary-yes"
                                                       name="polycystic_ovary"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="polycystic-ovary-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="polycystic-ovary-no" name="polycystic_ovary"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="polycystic-ovary-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="polycystic-ovary-family-yes"
                                                       name="polycystic_ovary_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="polycystic-ovary-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="polycystic-ovary-family-no"
                                                       name="polycystic_ovary_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="polycystic-ovary-family-no"></label>
                                            </div>
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

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="uterine-fibroids-yes"
                                                       name="uterine_fibroids"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="uterine-fibroids-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="uterine-fibroids-no" name="uterine_fibroids"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="uterine-fibroids-no"></label>
                                            </div>
                                        </div>


                                    </td>
                                    <td>

                                        <div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="uterine-fibroids-family-yes"
                                                       name="uterine_fibroids_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label"
                                                       for="uterine-fibroids-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="uterine-fibroids-family-no"
                                                       name="uterine_fibroids_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label"
                                                       for="uterine-fibroids-family-no"></label>
                                            </div>
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
                                <div class="form-group c-dropdown">
                                    <label for="i_height">Height</label>
                                    <input type="text" readonly class="form-control" id="i_height"
                                           name="height">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#">4’</a></li>
                                        <li><a href="#">4’ 1”</a></li>
                                        <li><a href="#">4’ 2”</a></li>
                                        <li><a href="#">4’ 3”</a></li>
                                        <li><a href="#">4’ 4”</a></li>
                                        <li><a href="#">4’ 5”</a></li>
                                        <li><a href="#">4’ 6”</a></li>
                                        <li><a href="#">4’ 7”</a></li>
                                        <li><a href="#">4’ 8”</a></li>
                                        <li><a href="#">4’ 9”</a></li>
                                        <li><a href="#">5’</a></li>
                                        <li><a href="#">5’ 1”</a></li>
                                        <li><a href="#">5’ 2”</a></li>
                                        <li><a href="#">5’ 3”</a></li>
                                        <li><a href="#">5’ 4”</a></li>
                                        <li><a href="#">5’ 5”</a></li>
                                        <li><a href="#">5’ 6”</a></li>
                                        <li><a href="#">5’ 7”</a></li>
                                        <li><a href="#">5’ 8”</a></li>
                                        <li><a href="#">5’ 9”</a></li>
                                        <li><a href="#">6’ 1”</a></li>
                                        <li><a href="#">6’ 2”</a></li>
                                        <li><a href="#">6’ 3”</a></li>
                                        <li><a href="#">6’ 4”</a></li>
                                        <li><a href="#">6’ 5”</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_weight">Weight (lbs)</label>
                                    <input type="text" class="form-control" id="i_weight" name="weight">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group c-dropdown">
                                    <label for="i_race">Race</label>
                                    <input type="text" readonly class="form-control" id="i_race"
                                           name="race">
                                    <ul class="c-dropdown-menu">
                                        <li><a href="#" class="">Caucasian</a></li>
                                        <li><a href="#">Hispanic</a></li>
                                        <li><a href="#">Mixed</a></li>
                                        <li><a href="#">Black (Carib)</a></li>
                                        <li><a href="#">Black (African)</a></li>
                                        <li><a href="#">Black (Hispanic)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="i_home_phone">Age</label>
                                    <input type="text" class="form-control" id="i_home_phone" name="age" readonly>
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
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Hazel</a></li>
                                        <li><a href="#">Green</a></li>
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
                                        <li><a href="#" class="">Md Brown</a></li>
                                        <li><a href="#" class="">Black</a></li>
                                        <li><a href="#" class="">Dk Blonde</a></li>
                                        <li><a href="#">Lt Brown</a></li>
                                        <li><a href="#">Dk Brown</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Md Blonde</a></li>
                                        <li><a href="#">Lt Blonde</a></li>
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

                                {{--                                <div class="col-12 col-md-8">--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li class="mt-4 pt-3 mb-4">Is it okay to have prospective egg recipients to view--}}
                                {{--                                            your photographs?--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-12 col-md-4">--}}
                                {{--                                    <div class="form-group c-dropdown dd-photo-permission">--}}
                                {{--                                        <label for=""></label>--}}
                                {{--                                        <input type="text" readonly class="form-control" id="d_is_it_ok"--}}
                                {{--                                               name="photo_permission"--}}
                                {{--                                               placeholder="No">--}}
                                {{--                                        <ul class="c-dropdown-menu">--}}
                                {{--                                            <li><a href="#">Yes</a></li>--}}
                                {{--                                            <li><a href="#" class="active">No</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

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
