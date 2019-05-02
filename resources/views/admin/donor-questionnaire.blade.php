@extends('layouts.admin.app')

@section('title', 'Donor Questionnaire')

{{--Pushing donor questionnaire only stylesheets --}}
@push('css')
    <link rel="stylesheet" href="{{asset('../vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.structure.css')}}">
    <link rel="stylesheet" href="{{asset('../vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.theme.css')}}">

    <!-- Include SmartWizard CSS -->
    <link href="{{asset('../vendor/jquer-smart_wizard/css/smart_wizard.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Optional SmartWizard theme -->
    <link href="{{asset('../vendor/jquer-smart_wizard/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{asset('../css/donor-questionary.css')}}">
@endpush
@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div id="smartwizard" class="sw-main sw-theme-arrows">
                        <ul class="nav nav-tabs step-anchor">
                            <li class="nav-item active"><a href="#step-1" disabled="" class="nav-link">Contact Info</a>
                            </li>
                            <li class="nav-item"><a href="#step-2" disabled="" class="nav-link">Education</a></li>
                            <li class="nav-item"><a href="#step-3" class="nav-link">Sexual History</a></li>
                            <li class="nav-item"><a href="#step-4" class="nav-link">Pregnanacy</a></li>
                            <li class="nav-item"><a href="#step-5" class="nav-link">Lifestyle</a></li>
                            <li class="nav-item"><a href="#step-6" class="nav-link">Medical History</a></li>
                            <li class="nav-item"><a href="#step-7" class="nav-link">Medical History</a></li>
                            <li class="nav-item"><a href="#step-8" class="nav-link">Medical History</a></li>
                            <li class="nav-item"><a href="#step-9" class="nav-link">Medical History</a></li>
                            <li class="nav-item"><a href="#step-10" class="nav-link">Donor Profile</a></li>
                        </ul>
                        <div class="sw-container tab-content" style="min-height: 726px;">
                            <div id="step-1" class="tab-pane step-content" style="display: block;">
                                <div class="col-xs-12">
                                    <form action="#" method="post" id="step1" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname" class="">First Name</label>
                                                    <input type="text" class="form-control" tabindex="0" id="firstname"
                                                           name="firstname" autofocus=""><span
                                                            class="bar-animator"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                           name="lastname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="date_birth">Date Birth</label>
                                                    <input type="text" class="form-control date-picker hasDatepicker"
                                                           id="date_birth" name="date_birth">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="home_phone">Home Phone</label>
                                                    <input type="text" class="form-control" id="home_phone"
                                                           name="home_phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile" name="mobile">
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
                                                    <input type="text" class="form-control" id="street" name="street">
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
                                                    <input type="text" class="form-control" id="state" name="state">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="zip_code">Zip Code</label>
                                                    <input type="text" class="form-control" id="zip_code"
                                                           name="zip_code">
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
                                                <!--                                    <h3>Applicant <span>Type</span></h3>-->
                                                <p>I would like to be a known egg donor for </p>
                                            </div>

                                            <div class="col-12 col-lg-3 ">
                                                <div class="form-group c-dropdown">
                                                    <label for="any_patient"></label>

                                                    <input type="text" readonly="" class="form-control" id="any_patient"
                                                           name="any_patient" placeholder="Any Type">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Any Patient</a></li>
                                                        <li><a href="#">A specific ad</a></li>
                                                        <li><a href="#">A donor egg agency</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 ">
                                                <div class="form-group mt-3">
                                                    <label for="couple_code"></label>
                                                    <input type="text" class="form-control" id="couple_code"
                                                           name="any_patient" placeholder="Couple Code / Agency Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <p><br>If accepted as an egg donor, I would be available to serve as a
                                                    donor.
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="i_starting_from">Starting From</label>
                                                    <input type="text" class="form-control date-picker hasDatepicker"
                                                           id="i_starting_from" name="i_starting_from">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn bttn donor-submit" type="submit" id="submit1">Next
                                                    Step
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="step-2" class="tab-pane step-content">
                                <div class="col-xs-12">
                                    <form action="#" method="post" id="step2" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h3>High <span>School</span></h3>
                                                    <div class="checkboxes">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="attended_school">
                                                            <span class="indicator"></span>
                                                            Attended high school but did not graduate.
                                                        </label>
                                                    </div>
                                                    <div class="checkboxes">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="graduated_school">
                                                            <span class="indicator"></span>
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
                                                            <div class="checkboxes">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="attended_college">
                                                                    <span class="indicator"></span>
                                                                    Attended college but did not graduate.
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="checkboxes">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="attending_college"
                                                                           id="c_c_attending_college">
                                                                    <span class="indicator"></span>
                                                                    Currently attending college
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Major/Degree" id="i_c_attending_college"
                                                                   name="college_major">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="checkboxes">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="have_graduate_degree"
                                                                           id="c_graduate_degree">
                                                                    <span class="indicator"></span>
                                                                    Graduate Degree
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <input type="text" id="i_graduate_degree"
                                                                   class="form-control" name="graduage_degree"
                                                                   placeholder="Graduate Degree">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="checkboxes">
                                                                <label class="checkbox">
                                                                    <input type="checkbox"
                                                                           name="have_post_graduate_degree"
                                                                           id="c_post_graduate_degree">
                                                                    <span class="indicator"></span>
                                                                    Post Graduate Degree
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <input type="text" placeholder="Post Graduate Field"
                                                                   id="i_post_graduate_degree"
                                                                   name="post_graduate_degree" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="checkboxes">
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="have_other"
                                                                           id="c_degree_other">
                                                                    <span class="indicator"></span>
                                                                    Other
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <input type="text" placeholder="Please explain"
                                                                   id="i_degree_other" name="other"
                                                                   class="form-control">
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
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Which Languages?</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Musical talent or instrument</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Artistic talent</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Athletic talent</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Other skills/hobbies/interests</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
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
                                                    <input id="radio1" name="radio" type="radio">
                                                    <label for="radio1" class="radio-label">Full Time</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="radio">
                                                    <input id="radio2" name="radio" type="radio">
                                                    <label for="radio2" class="radio-label">Part Time</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="radio">
                                                    <input id="radio3" name="radio" type="radio" checked="">
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
                                                    <input type="text" readonly="" class="form-control" id="occupation"
                                                           name="occupation">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="activ">I work in the home</a></li>
                                                        <li><a href="#">I am currently a full or part time student</a>
                                                        </li>
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
                            <div id="step-3" class="tab-pane step-content">
                                <div class="col-xs-12">
                                    <form action="#" method="post" id="step3" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Martial Status</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group c-dropdown martialstatus">
                                                    <label for="martialStatus"></label>

                                                    <input type="text" readonly="" class="form-control"
                                                           id="martialStatus" name="martialStatus"
                                                           placeholder="Single/Married">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="livingArrangement" name="livingArrangement"
                                                           placeholder="Please Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Living Alone</a></li>
                                                        <li><a href="#">Living with parents/family</a></li>
                                                        <li><a href="#">Living together with a sexual partner</a></li>
                                                        <li><a href="#">Living together with a non sexual partner/
                                                                Friend</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Sexual orientation &amp;<span> Sexual Activity</span></h3>
                                            </div>
                                            <div class="col-12">
                                                <p>Please answer all of the following questions regarding your sexual
                                                    activity
                                                    in the
                                                    last 5 years: (includes any type of activity including vaginal
                                                    intercourse,
                                                    oral sex
                                                    received, oral sex given, anal intercourse, group sex)</p>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Number of sexual partners
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="row" id="sexual_partners">
                                                    <div class="col-4">
                                                        <div class="form-group c-dropdown">
                                                            <label for="oneMonth"></label>

                                                            <input type="text" readonly="" class="form-control"
                                                                   id="oneMonth" name="sexual_partners"
                                                                   placeholder="1 Month">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">1 in last 1 month</a>
                                                                </li>
                                                                <li><a href="#">2 in last 1 month</a></li>
                                                                <li><a href="#">3 in last 1 month</a></li>
                                                                <li><a href="#">4 in last 1 month</a></li>
                                                                <li><a href="#">5 in last 1 month</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group c-dropdown">
                                                            <label for="sixmonth"></label>

                                                            <input type="text" readonly="" class="form-control"
                                                                   id="sixmonth" name="sexual_partners"
                                                                   placeholder="6 Months">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">1 in last 6 months</a>
                                                                </li>
                                                                <li><a href="#">2 in last 6 months</a></li>
                                                                <li><a href="#">3 in last 6 months</a></li>
                                                                <li><a href="#">4 in last 6 months</a></li>
                                                                <li><a href="#">5 in last 6 months</a></li>
                                                                <li><a href="#">6 in last 6 months</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group c-dropdown">
                                                            <label for="year"></label>

                                                            <input type="text" readonly="" class="form-control"
                                                                   id="year" name="sexual_partners" placeholder="Year">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">1 in last 1 year</a></li>
                                                                <li><a href="#">2 in last 1 year</a></li>
                                                                <li><a href="#">3 in last 1 year</a></li>
                                                                <li><a href="#">4 in last 1 year</a></li>
                                                                <li><a href="#">5 in last 1 year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox1">
                                                        <span class="indicator"></span>
                                                        Have you had sexual contact with a person who has injected drugs
                                                        for
                                                        a
                                                        non-medical reason? (includes intravenous, intramuscular or
                                                        subcutaneous
                                                        injections)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox2">
                                                        <span class="indicator"></span>
                                                        Have you had sexual contact with a person who has hemophilia or
                                                        another
                                                        blood
                                                        clotting disorder who may have received human derived blood
                                                        clotting
                                                        factors?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox3">
                                                        <span class="indicator"></span>
                                                        Have you engaged in sexual contact in exchange for money or
                                                        drugs?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox4">
                                                        <span class="indicator"></span>
                                                        Have you engaged in sexual contact with a person who has had sex
                                                        in
                                                        exchange for
                                                        money or drugs?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox5">
                                                        <span class="indicator"></span>
                                                        Have you had sexual contact with any person known or suspected
                                                        to
                                                        have
                                                        infection
                                                        with HIV (AIDS), a positive HIV test, Hepatitis B infection,
                                                        Hepatitis C
                                                        infection, Zika Virus, or any other sexually transmitted
                                                        infection –
                                                        (Syphilis,
                                                        Gonorrhea, Chlamydia, Venereal Warts, Herpes)?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox6">
                                                        <span class="indicator"></span>
                                                        Have you had sexual contact with a man who is homosexual or
                                                        bisexual?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox7">
                                                        <span class="indicator"></span>
                                                        In the last year, have you had vaginal intercourse without the
                                                        use
                                                        of a
                                                        condom?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="sh_checkbox8">
                                                        <span class="indicator"></span>
                                                        Have you had sexual contact with an individual who was born in
                                                        or
                                                        lived
                                                        in any
                                                        of the following countries since 1977: Cameroon, Central African
                                                        Republic, Chad,
                                                        Congo, Equatorial Guinea, Gabon, Niger or Nigeria?
                                                    </label>
                                                </div>
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

                                                    <input type="text" readonly="" class="form-control" id="sexual"
                                                           name="sexual" placeholder="Hetrosexual">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Hetrosexual</a></li>
                                                        <li><a href="#">Homosexual</a></li>
                                                        <li><a href="#">Bisexual</a></li>
                                                        <li><a href="#">I consider myself hetrosexual but i have
                                                                homosexual
                                                                relation in
                                                                the past.</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li>Current sexual practice (in the last 6 months -- check ALL that
                                                        apply)
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row" id="current">
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="currentsexual">
                                                                <span class="indicator"></span>
                                                                Vaginal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="currentsexual">
                                                                <span class="indicator"></span>
                                                                Oral given
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="currentsexual">
                                                                <span class="indicator"></span>
                                                                Anal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="currentsexual">
                                                                <span class="indicator"></span>
                                                                Oral Received
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="currentsexual">
                                                                <span class="indicator"></span>
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
                                                    <li>Previous sexual practice (more than 6 months ago -- check ALL
                                                        that
                                                        apply)
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row" id="previous">
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="previousSexual">
                                                                <span class="indicator"></span>
                                                                Vaginal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="previousSexual">
                                                                <span class="indicator"></span>
                                                                Oral given
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="previousSexual">
                                                                <span class="indicator"></span>
                                                                Anal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="previousSexual">
                                                                <span class="indicator"></span>
                                                                Oral Received
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-2">
                                                        <div class="checkboxes">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="previousSexual">
                                                                <span class="indicator"></span>
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
                            <div id="step-4" class="tab-pane step-content">
                                <div class="col-xs-12">
                                    <form action="#" method="" id="step4" novalidate="novalidate">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="pregnancyHistory" name="pregnancyHistory"
                                                           placeholder="I have tried to become pregnant in the past.">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">I have tried to become pregnant
                                                                in
                                                                the
                                                                past but
                                                                was never successful</a></li>
                                                        <li><a href="#">I have never been pregnant and have naver tried
                                                                to
                                                                become
                                                                pregnant.</a></li>
                                                        <li><a href="#">I have rarely used contraception in the past but
                                                                have
                                                                not become
                                                                pregnant.</a></li>
                                                        <li><a href="#">I have had difficulty in becoming pregnant at
                                                                least
                                                                once
                                                                in my
                                                                life.</a></li>
                                                        <li><a href="#">I have been pregnant without really trying.</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Sexual orientation &amp; <span>Sexual Activity</span></h3>
                                            </div>
                                        </div>
                                        <div class="row table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Did you deliver a live baby?</th>
                                                    <th scope="col">Year of Pregnancy</th>
                                                    <th scope="col">Boy or Girl</th>
                                                    <th scope="col">Does the child have any medical problems? Explain
                                                    </th>
                                                    <th scope="col">If No, how did the pregnancy end?</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" id="c_did_you_deliver_1"
                                                                       name="c_did_you_deliver_1">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="d_yearofpregnancy_1"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_yearofpregnancy_1" name="d_yearofpregnancy_1"
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
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_boyGirl_1" name="d_boyGirl_1"
                                                                   placeholder="Select">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Boy</a></li>
                                                                <li><a href="#">Girl</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="i_child_have_prob_1"
                                                               name="i_child_have_prob_1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               id="i_how_pregnancy_end_1" name="i_how_pregnancy_end_1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" id="c_did_you_deliver_2"
                                                                       name="c_did_you_deliver_2">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="d_yearofpregnancy_2"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_yearofpregnancy_2" name="d_yearofpregnancy_2"
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
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_boyGirl_2" name="d_boyGirl_2"
                                                                   placeholder="Select">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Boy</a></li>
                                                                <li><a href="#">Girl</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="i_child_have_prob_2"
                                                               name="i_child_have_prob_2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               id="i_how_pregnancy_end_2" name="i_how_pregnancy_end_2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" id="c_did_you_deliver_3"
                                                                       name="c_did_you_deliver_3">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="d_yearofpregnancy_3"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_yearofpregnancy_3" name="d_yearofpregnancy_3"
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
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_boyGirl_3" name="d_boyGirl_3"
                                                                   placeholder="Select">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Boy</a></li>
                                                                <li><a href="#">Girl</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="i_child_have_prob_3"
                                                               name="i_child_have_prob_3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               id="i_how_pregnancy_end_3" name="i_how_pregnancy_end_3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" id="c_did_you_deliver_4"
                                                                       name="c_did_you_deliver_4">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="d_yearofpregnancy_4"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_yearofpregnancy_4" name="d_yearofpregnancy_4"
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
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="d_boyGirl_4" name="d_boyGirl_4"
                                                                   placeholder="Select">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Boy</a></li>
                                                                <li><a href="#">Girl</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="i_child_have_prob_4"
                                                               name="i_child_have_prob_4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               id="i_how_pregnancy_end_4" name="i_how_pregnancy_end_4">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li>If you are currently using birth control (pills, patches, or
                                                        injections), please
                                                        answer these questions about your cycles when you are not on
                                                        birth
                                                        control.
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
                                                           name="firstPeriod" placeholder="<10">
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
                                                    <li>My menstrual bleeding begins every</li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group c-dropdown">
                                                    <!-- <label for="menstrualday"></label> -->
                                                    <input type="text" class="form-control" id="menstrualbleeding"
                                                           name="menstrualday" placeholder="From">
                                                    <!-- <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">15</a></li>
                                        </ul> -->
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-4">
                                                <div class="form-group c-dropdown" id="menmonth">
                                                    <!-- <label for="menstrualMonths"></label> -->

                                                    <input type="text" class="form-control" id="menstrualMonths"
                                                           name="menstrualbleeding" placeholder="To">
                                                    <!-- <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul> -->
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever had a pelvic exam?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever had an abnormal PAP smear?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever been told you might have trouble having children?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        I sometimes have bleeding in between my normal periods.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        I sometimes have bleeding after intercourse.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <ul>
                                                    <li>Date of last PAP smear</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group c-dropdown">
                                                    <!-- <label for="lastpap"></label> -->

                                                    <input type="text" class="form-control" id="lastpap" name="lastpap"
                                                           placeholder="">
                                                    <!-- <ul class="c-dropdown-menu">
                                            <li><a href="#" class="active">&lt;10</a></li>
                                            <li><a href="#">&lt;12</a></li>
                                            <li><a href="#">&lt;15</a></li>
                                        </ul> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li>Use of <b>Birth Control</b> (Answer <b>ALL</b> of the following
                                                        questions. Do
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="oralContraceptives" name="oralContraceptives"
                                                           placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="birthControl" name="birthControl" placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="progesteroneInjections" name="progesteroneInjections"
                                                           placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="progesteroneImplants" name="progesteroneImplants"
                                                           placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="intrauterineDevice" name="intrauterineDevice"
                                                           placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="sterilization" name="sterilization" placeholder="Never">
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

                                                    <input type="text" readonly="" class="form-control" id="condoms"
                                                           name="condoms" placeholder="Never">
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
                            <div id="step-5" class="tab-pane step-content">
                                <div class="col-xs-12">
                                    <form action="#" method="" id="step5" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Lifestyle,<span> Habbits</span></h3>
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

                                                    <input type="text" readonly="" class="form-control" id="exercise"
                                                           name="exercise" placeholder="Please Select">
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
                                                    <input type="text" class="form-control" name="typeofexercise">
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

                                                    <input type="text" readonly="" class="form-control" id="diet"
                                                           name="diet" placeholder="Please Select">
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

                                                    <input type="text" readonly="" class="form-control" id="qualitydiet"
                                                           name="qualitydiet" placeholder="Please Select">
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
                                                    <input type="text" class="form-control" name="dietaryRestrictions">
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
                                                           name="d_cigarettesTabacco" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_cigarettesTobacco"
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

                                                    <input type="text" readonly="" class="form-control" id="d_alcohol"
                                                           name="d_alcohol" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_alcohol"
                                                           id="i_alcohol" placeholder="How Much">
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

                                                    <input type="text" readonly="" class="form-control" id="d_marijuana"
                                                           name="d_marijuana" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_marijuana"
                                                           id="i_marijuana" placeholder="How Much">
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

                                                    <input type="text" readonly="" class="form-control" id="d_heroin"
                                                           name="d_heroin" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_heroin"
                                                           id="i_heroin" placeholder="How Much">
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

                                                    <input type="text" readonly="" class="form-control" id="d_cocaine"
                                                           name="d_cocaine" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_cocaine"
                                                           id="i_cocaine" placeholder="How Much">
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="d_crystalmeth" name="d_crystalmeth" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_crystalmeth"
                                                           id="i_crystalmeth" placeholder="How Much">
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

                                                    <input type="text" readonly="" class="form-control" id="d_lsd"
                                                           name="d_lsd" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_lsd" id="i_lsd"
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

                                                    <input type="text" readonly="" class="form-control" id="d_pcp"
                                                           name="d_pcp" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_pcp" id="i_pcp"
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

                                                    <input type="text" readonly="" class="form-control"
                                                           id="d_injectable" name="d_injectable" placeholder="Select">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#" class="active">Never</a></li>
                                                        <li><a href="#">Tried</a></li>
                                                        <li><a href="#">Currently</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="i_injectable"
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
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="c_trouble_with_law"
                                                               name="c_trouble_with_law">
                                                        <span class="indicator"></span>
                                                        I have been in trouble with the law.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_arrested" id="c_arrested">
                                                        <span class="indicator"></span>
                                                        I have been arrested before, but not convicted.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="If yes, what happened?" name="i_arrested"
                                                           id="i_arrested">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_convicted" id="c_convicted">
                                                        <span class="indicator"></span>
                                                        I have been convicted of a crime.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="What Crime(s)?"
                                                           name="i_convicted" id="i_convicted">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_spent_one" id="c_spent_one">
                                                        <span class="indicator"></span>
                                                        I have spent at least one hour in jail or prison.
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_spent_seventy_two"
                                                               id="c_spent_seventy_two">
                                                        <span class="indicator"></span>
                                                        I have spent more than 72 consecutive hours in prison in the
                                                        last
                                                        year.
                                                    </label>
                                                </div>
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
                                                                <input type="checkbox" name="s_n_used_1"
                                                                       id="s_n_used_1">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="d_n_used_1"></label>
                                                            <input type="text"
                                                                   class="form-control date-picker hasDatepicker"
                                                                   id="d_n_used_1" name="d_n_used_1" placeholder="Date">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="t_n_used_1"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   id="t_n_used_1" name="t_n_used_1"
                                                                   placeholder="Select">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Tattoo</a></li>
                                                                <li><a href="#">Piercing</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="i_n_used_1"
                                                                   id="i_n_used_1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" name="s_n_used_2"
                                                                       id="s_n_used_2">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="d_n_used_2"></label>
                                                            <input type="text"
                                                                   class="form-control date-picker hasDatepicker"
                                                                   name="d_n_used_2" id="d_n_used_2" placeholder="Date">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="t_n_used_2"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   name="t_n_used_2" id="t_n_used_2"
                                                                   placeholder="Tattoo">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Tattoo</a></li>
                                                                <li><a href="#">Piercing</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="i_n_used_2"
                                                                   id="i_n_used_2">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="checkboxes text-center">
                                                            <label class="checkbox mx-auto">
                                                                <input type="checkbox" name="s_n_used_3"
                                                                       id="s_n_used_3">
                                                                <span class="indicator"> &nbsp;</span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="form-group ">
                                                            <label for="d_n_used_3"></label>
                                                            <input type="text"
                                                                   class="form-control date-picker hasDatepicker"
                                                                   name="d_n_used_3" id="d_n_used_3" placeholder="Date">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group c-dropdown">
                                                            <label for="t_n_used_3"></label>
                                                            <input type="text" readonly="" class="form-control"
                                                                   name="t_n_used_3" id="t_n_used_3"
                                                                   placeholder="Tattoo">
                                                            <ul class="c-dropdown-menu">
                                                                <li><a href="#" class="active">Tattoo</a></li>
                                                                <li><a href="#">Piercing</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="i_n_used_3"
                                                                   id="i_n_used_3">
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
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever been diagnosed with vCJD or any other form of CJD?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever been diagnosed with dementia or any degenerative
                                                        or
                                                        demyelinating
                                                        disease of the central nervous system (CNS) or other
                                                        neurological
                                                        disease of
                                                        unknown etiology?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever received a dura mater transplant?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever received injections of human pituitary-derived
                                                        growth
                                                        hormone?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Has one or more blood relatives been diagnosed with CJD?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you spent three months or more cumulatively in the U.K.
                                                        from
                                                        the
                                                        beginning
                                                        of 1980 through the end of 1996?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Are you a current or former U.S. military member, civilian
                                                        military
                                                        employee, or
                                                        dependent of a military member or civilian employee who resided
                                                        at
                                                        U.S.
                                                        military
                                                        bases in Northern Europe, Germany, U.K., Belgium, and the
                                                        Netherlands)
                                                        for 6
                                                        months or more from 1980 through 1990, or elsewhere in Europe
                                                        (Greece,
                                                        Turkey,
                                                        Spain, Portugal, and Italy) for 6 months or more from 1980
                                                        through
                                                        1996?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you lived cumulatively for 5 years or more in Europe from
                                                        1980
                                                        until the
                                                        Present?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you received any transfusion of blood or blood components
                                                        in
                                                        the
                                                        U.K. or
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
                            <div id="step-6" class="tab-pane step-content">
                                <div class="col-xs-12">
                                    <h3>S<span>tep</span> <span>01</span></h3>
                                    <form action="#" id="step6" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Check all <span>that apply</span></h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you injected drugs for a non-medical reason in the last 5
                                                        years?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Do you have hemophilia and/or received human-derived clotting
                                                        factor
                                                        concentrates in the last 5 years?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you in the last 12 months lived in the same dwelling with
                                                        another
                                                        person
                                                        with hepatitis B infection or hepatitis C infection?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you been exposed in the preceding 12 months to known or
                                                        suspected
                                                        HIV
                                                        (AIDS), Hepatitis B, and/or Hepatitis C infected blood through
                                                        percutaneous
                                                        inoculation (e.g., needle stick) or through contact with an open
                                                        wound,
                                                        non-intact skin, or mucous membrane?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever been diagnosed with any form of hepatitis?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you been in juvenile detention, lock up, jail or prison in
                                                        the
                                                        last
                                                        12
                                                        months?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 12 months, have you gotten a new tattoo, ear
                                                        piercing or
                                                        body
                                                        piercing, or had acupuncture treatment in which sterile
                                                        procedures
                                                        may
                                                        not have
                                                        been used?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 8 weeks, did you receive a smallpox vaccination
                                                        (vaccinia
                                                        virus)?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 12 months, have you had any contact with someone who
                                                        received a
                                                        smallpox vaccination or who was diagnosed with smallpox?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever been diagnosed with smallpox?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 12 months, were you diagnosed with or treated for
                                                        West
                                                        Nile
                                                        Virus?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 12 months, were you diagnosed with or treated for
                                                        Syphilis?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        In the last 12 months, were you diagnosed with or treated for
                                                        Chlamydia
                                                        or
                                                        gonorrhea infection?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-8">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="c_blood_transfusion">
                                                        <span class="indicator"></span>
                                                        Have you ever received a blood transfusion? If yes, when?

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="i_blood_transfusion"
                                                           name="i_blood_transfusion">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-8">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="c_blood_donor">
                                                        <span class="indicator"></span>
                                                        Have you ever been turned down to be a blood donor? If yes, why?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="i_blood_donor"
                                                           name="i_blood_donor">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever received a transplant of any tissue, cells or
                                                        fluids
                                                        from
                                                        a
                                                        non-human, animal source?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you ever had intimate contact with a recipient of a
                                                        transplant
                                                        of
                                                        any
                                                        tissue, cells or fluids from a non-human, animal source?
                                                        (Intimate
                                                        contact means
                                                        exchange of body fluids like blood, saliva, semen; this includes
                                                        sexual
                                                        partners, household members that share razors or toothbrushes)
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Were you born in or did you live in any of the following
                                                        countries
                                                        since
                                                        1977?
                                                        Cameroon, Central African Republic, Chad, Congo, Equatorial
                                                        Guinea,
                                                        Gabon, Niger
                                                        or Nigeria?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Did you have a blood transfusion or have any medical treatment
                                                        involving
                                                        blood
                                                        in any of the following countries since 1977? Cameroon, Central
                                                        African
                                                        republic, Chad, Congo, Equatorial Guinea, Gabon, Niger or
                                                        Nigeria?
                                                    </label>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Zika Virus <span>Screening</span></h3>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you been diagnosed with Zika virus infection in the past 6
                                                        months?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you traveled to an area with active Zika virus transmission
                                                        in
                                                        the
                                                        last 6
                                                        months?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you had sex with a male who has been diagnosed with Zika
                                                        virus
                                                        infection in
                                                        the last 6 months?
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="indicator"></span>
                                                        Have you had sex with a male who has traveled to an area with
                                                        active
                                                        Zika virus
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
                            <div id="step-7" class="tab-pane step-content">
                                <h3>S<span>tep</span> <span>02</span></h3>
                                <form action="#" method="" id="step7" novalidate="novalidate">
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

                                                <input type="text" readonly="" class="form-control"
                                                       id="d_have_vaccinated" name="d_have_vaccinated">
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
                                                       name="i_have_vaccinated">
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
                                                <th scope="col">Medical Problem:</th>
                                                <th scope="col">Age of Onset:</th>
                                                <th scope="col">Comments (resolved, currently being treated, etc)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_prob_1"
                                                               name="i_medical_prob_1">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_age_onset_1"
                                                               name="i_age_onset_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_comment_1"
                                                               name="i_medical_comment_1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_prob_2"
                                                               name="i_medical_prob_2">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_age_onset_2"
                                                               name="i_age_onset_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_comment_2"
                                                               name="i_medical_comment_2">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_prob_3"
                                                               name="i_medical_prob_3">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_age_onset_3"
                                                               name="i_age_onset_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_comment_3"
                                                               name="i_medical_comment_3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_prob_4"
                                                               name="i_medical_prob_4">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_age_onset_4"
                                                               name="i_age_onset_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_comment_4"
                                                               name="i_medical_comment_4">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_prob_5"
                                                               name="i_medical_prob_5">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_age_onset_5"
                                                               name="i_age_onset_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_medical_comment_5"
                                                               name="i_medical_comment_5">
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
                                                <th scope="col">Type of Surgery:</th>
                                                <th scope="col">Date:</th>
                                                <th scope="col">Complications?</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_surgery_1"
                                                               name="i_type_surgery_1">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group ">
                                                        <input type="text"
                                                               class="form-control date-picker hasDatepicker"
                                                               id="i_surgery_date_1" name="i_surgery_date_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_surgery_complication_1"
                                                               name="i_surgery_complication_1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_surgery_2"
                                                               name="i_type_surgery_2">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_surgery_date_2"
                                                               name="i_surgery_date_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_surgery_complication_2"
                                                               name="i_surgery_complication_2">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group ">
                                                        <input type="text" class="form-control" id="i_type_surgery_3"
                                                               name="i_type_surgery_3">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control date-picker hasDatepicker"
                                                               id="i_surgery_date_3" name="i_surgery_date_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_surgery_complication_3"
                                                               name="i_surgery_complication_3">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_surgery_4"
                                                               name="i_type_surgery_4">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text"
                                                               class="form-control date-picker hasDatepicker"
                                                               id="i_surgery_date_4" name="i_surgery_date_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_surgery_complication_4"
                                                               name="i_surgery_complication_4">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_surgery_5"
                                                               name="i_type_surgery_5">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control date-picker hasDatepicker"
                                                               id="i_surgery_date_5" name="i_surgery_date_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_surgery_complication_5"
                                                               name="i_surgery_complication_5">
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
                                                <th scope="col">Medication:</th>
                                                <th scope="col">How Often?</th>
                                                <th scope="col">Reason:</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_medication_1"
                                                               name="i_p_medication_1">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_how_often_1"
                                                               name="i_p_how_often_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_p_medication_reason_1"
                                                               name="i_p_medication_reason_1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_medication_2"
                                                               name="i_p_medication_2">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_how_often_2"
                                                               name="i_p_how_often_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_p_medication_reason_2"
                                                               name="i_p_medication_reason_2">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_medication_3"
                                                               name="i_p_medication_3">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_how_often_3"
                                                               name="i_p_how_often_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_p_medication_reason_3"
                                                               name="i_p_medication_reason_3">
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_medication_4"
                                                               name="i_p_medication_4">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_how_often_4"
                                                               name="i_p_how_often_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_p_medication_reason_4"
                                                               name="i_p_medication_reason_4">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_medication_5"
                                                               name="i_p_medication_5">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_p_how_often_5"
                                                               name="i_p_how_often_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_p_medication_reason_5"
                                                               name="i_p_medication_reason_5">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>List all current over-the-counter <span>medications (include hormones, vitamins, aspirin, antacids, laxatives, herbal &amp; sports supplements, performance-enhancing supplements</span>
                                                including steroids, etc.):</h3>
                                        </div>
                                    </div>
                                    <div class="row table-responsive">
                                        <table class="table">
                                            <thead class="text-center">
                                            <tr>
                                                <th scope="col">Medication:</th>
                                                <th scope="col">How Often?</th>
                                                <th scope="col">Reason:</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_medication_1"
                                                               name="i_c_medication_1">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_how_often_1"
                                                               name="i_c_how_often_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_c_medication_reason_1"
                                                               name="i_c_medication_reason_1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_medication_2"
                                                               name="i_c_medication_2">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_how_often_2"
                                                               name="i_c_how_often_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_c_medication_reason_2"
                                                               name="i_c_medication_reason_2">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_medication_3"
                                                               name="i_c_medication_3">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_how_often_3"
                                                               name="i_c_how_often_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_c_medication_reason_3"
                                                               name="i_c_medication_reason_3">
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_medication_4"
                                                               name="i_c_medication_4">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_how_often_4"
                                                               name="i_c_how_often_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_c_medication_reason_4"
                                                               name="i_c_medication_reason_4">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_medication_5"
                                                               name="i_c_medication_5">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_c_how_often_5"
                                                               name="i_c_how_often_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control"
                                                               id="i_c_medication_reason_5"
                                                               name="i_c_medication_reason_5">
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
                                                <th scope="col">Substance:</th>
                                                <th scope="col">Type of Reaction:</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_substance_1"
                                                               name="i_substance_1">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_reaction_1"
                                                               name="i_type_reaction_1">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_substance_2"
                                                               name="i_substance_2">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_reaction_2"
                                                               name="i_type_reaction_2">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_substance_3"
                                                               name="i_substance_3">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_reaction_3"
                                                               name="i_type_reaction_3">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_substance_4"
                                                               name="i_substance_4">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_reaction_4"
                                                               name="i_type_reaction_4">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_substance_5"
                                                               name="i_substance_5">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <input type="text" class="form-control" id="i_type_reaction_5"
                                                               name="i_type_reaction_5">
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
                            <div id="step-8" class="tab-pane step-content">
                                <h3>S<span>tep</span> <span>03</span></h3>
                                <form action="" id="step8" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3><span>Please answer the following </span>questions about you and your
                                                family
                                            </h3>
                                            <h4>You must provide an <span>answer</span> for all the
                                                <span>questions</span>.<br>The
                                                first
                                                column is for you only. <br>Second column is for family members
                                                only.<br>If
                                                answer yes
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_cleftlip" name="d_cleftlip" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_cleftlip"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_cleftlip" name="d_f_cleftlip"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_cleftlip"
                                                               name="i_cleftlip">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_cleftpalate" name="d_cleftpalate"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_cleftpalate"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_cleftpalate" name="d_f_cleftpalate"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_cleftpalate"
                                                               name="i_cleftpalate">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_congenitalhip" name="d_congenitalhip"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_congenitalhip"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_congenitalhip" name="d_f_congenitalhip"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_congenitalhip"
                                                               name="i_congenitalhip">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_clubfoot" name="d_clubfoot" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_clubfoot"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_clubfoot" name="d_f_clubfoot"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_clubfoot"
                                                               name="i_clubfoot">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_heartdefect" name="d_heartdefect"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_heartdefect"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_heartdefect" name="d_f_heartdefect"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_heartdefect"
                                                               name="i_heartdefect">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hearingproblems" name="d_hearingproblems"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_hearingproblems"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hearingproblems" name="d_f_hearingproblems"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hearingproblems"
                                                               name="i_hearingproblems">
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
                                                        <input type="text" readonly="" class="form-control" id="d_spina"
                                                               name="d_spina" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_spina"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_spina" name="d_f_spina" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_spina"
                                                               name="i_spina">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_microcephaly" name="d_microcephaly"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_microcephaly"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_microcephaly" name="d_f_microcephaly"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_microcephaly"
                                                               name="i_microcephaly">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_holoprosencephaly" name="d_holoprosencephaly"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_holoprosencephaly"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_holoprosencephaly" name="d_f_holoprosencephaly"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_holoprosencephaly"
                                                               name="i_holoprosencephaly">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_babiesdiedatbirth" name="d_babiesdiedatbirth"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_babiesdiedatbirth"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_babiesdiedatbirth" name="d_f_babiesdiedatbirth"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_babiesdiedatbirth"
                                                               name="i_babiesdiedatbirth">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_dwarfism" name="d_dwarfism" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_dwarfism"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_dwarfism" name="d_f_dwarfism"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_dwarfism"
                                                               name="i_dwarfism">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hypospadias" name="d_hypospadias"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_hypospadias"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hypospadias" name="d_f_hypospadias"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hypospadias"
                                                               name="i_hypospadias">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_phenylketonuria" name="d_phenylketonuria"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_phenylketonuria"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_phenylketonuria" name="d_f_phenylketonuria"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_phenylketonuria"
                                                               name="i_phenylketonuria">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_polycystickidney" name="d_polycystickidney"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_polycystickidney"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_polycystickidney" name="d_f_polycystickidney"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_polycystickidney"
                                                               name="i_polycystickidney">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_pyloricstenosis" name="d_pyloricstenosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_pyloricstenosis"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_pyloricstenosis" name="d_f_pyloricstenosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_pyloricstenosis"
                                                               name="i_pyloricstenosis">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_othercogenital" name="d_othercogenital"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_othercogenital"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_othercogenital" name="d_f_othercogenital"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_othercogenital"
                                                               name="i_othercogenital">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <h3>Chromosomal <span>Abnormalities</span></h3>
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_downsyndrome" name="d_downsyndrome"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_downsyndrome"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_downsyndrome" name="d_f_downsyndrome"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_downsyndrome"
                                                               name="i_downsyndrome">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_fragilex" name="d_fragilex" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_fragilex"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_fragilex" name="d_f_fragilex"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_fragilex"
                                                               name="i_fragilex">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_turnursyndrom" name="d_turnursyndrom"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_turnursyndrom"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_turnursyndrom" name="d_f_turnursyndrom"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_turnursyndrom"
                                                               name="i_turnursyndrom">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_klinefelter" name="d_klinefelter"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_klinefelter"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_klinefelter" name="d_f_klinefelter"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_klinefelter"
                                                               name="i_klinefelter">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_otherchromosomal" name="d_otherchromosomal"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_otherchromosomal"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_otherchromosomal" name="d_f_otherchromosomal"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_otherchromosomal"
                                                               name="i_otherchromosomal">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_alpha_1" name="d_alpha_1" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_alpha_1"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_alpha_1" name="d_f_alpha_1" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_alpha_1"
                                                               name="i_alpha_1">
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
                                                        <input type="text" readonly="" class="form-control" id="d_bloom"
                                                               name="d_bloom" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_bloom"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_bloom" name="d_f_bloom" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_bloom"
                                                               name="i_bloom">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_canavan" name="d_canavan" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_canavan"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_canavan" name="d_f_canavan" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_canavan"
                                                               name="i_canavan">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_cysticfibroses" name="d_cysticfibroses"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_cysticfibroses"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_cysticfibroses" name="d_f_cysticfibroses"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_cysticfibroses"
                                                               name="i_cysticfibroses">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_fabrydisease" name="d_fabrydisease"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_fabrydisease"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_fabrydisease" name="d_f_fabrydisease"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_fabrydisease"
                                                               name="i_fabrydisease">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_factorv" name="d_factorv" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_factorv"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_factorv" name="d_f_factorv" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_factorv"
                                                               name="i_factorv">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_familial" name="d_familial" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_familial"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_familial" name="d_f_familial"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_familial"
                                                               name="i_familial">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_familialfever" name="d_familialfever"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_familialfever"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_familialfever" name="d_f_familialfever"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_familialfever"
                                                               name="i_familialfever">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_fanconi" name="d_fanconi" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_fanconi"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_fanconi" name="d_f_fanconi" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_fanconi"
                                                               name="i_fanconi">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hemophilia" name="d_hemophilia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_hemophilia"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hemophilia" name="d_f_hemophilia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hemophilia"
                                                               name="i_hemophilia">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_marfan" name="d_marfan" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_marfan"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_marfan" name="d_f_marfan" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_marfan"
                                                               name="i_marfan">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_mucolipidosis" name="d_mucolipidosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_mucolipidosis"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_mucolipidosis" name="d_f_mucolipidosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_mucolipidosis"
                                                               name="i_mucolipidosis">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_niemann" name="d_niemann" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_niemann"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_niemann" name="d_f_niemann" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_niemann"
                                                               name="i_niemann">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_sickle" name="d_sickle" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_sickle"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_sickle" name="d_f_sickle" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_sickle"
                                                               name="i_sickle">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_taysachs" name="d_taysachs" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_taysachs"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_taysachs" name="d_f_taysachs"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_taysachs"
                                                               name="i_taysachs">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_thallasmia" name="d_thallasmia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_thallasmia"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_thallasmia" name="d_f_thallasmia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_thallasmia"
                                                               name="i_thallasmia">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_blindness" name="d_blindness" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_blindness"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_blindness" name="d_f_blindness"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_blindness"
                                                               name="i_blindness">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_colorblind" name="d_colorblind"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_colorblind"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_colorblind" name="d_f_colorblind"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_colorblind"
                                                               name="i_colorblind">
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
                                                        <label for="d_deafness"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_deafness" name="d_deafness" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_deafness"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_deafness" name="d_f_deafness"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_deafness"
                                                               name="i_deafness">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_albinism" name="d_albinism" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_albinism"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_albinism" name="d_f_albinism"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_albinism"
                                                               name="i_albinism">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_muscular" name="d_muscular" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_muscular"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_muscular" name="d_f_muscular"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_muscular"
                                                               name="i_muscular">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_galactosemia" name="d_galactosemia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_galactosemia"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_galactosemia" name="d_f_galactosemia"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_galactosemia"
                                                               name="i_galactosemia">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hurler" name="d_hurler" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_hurler"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hurler" name="d_f_hurler" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hurler"
                                                               name="i_hurler">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_other_genetic" name="d_other_genetic"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for="d_f_other_genetic"></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_other_genetic" name="d_f_other_genetic"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_other_genetic"
                                                               name="i_other_genetic">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_breast_cancer" name="d_breast_cancer"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_breast_cancer" name="d_f_breast_cancer"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_breast_cancer"
                                                               name="i_breast_cancer">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_colon_cancer" name="d_colon_cancer"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_colon_cancer" name="d_f_colon_cancer"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_colon_cancer"
                                                               name="i_colon_cancer">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hereditary_non" name="d_hereditary_non"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hereditary_non" name="d_f_hereditary_non"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hereditary_non"
                                                               name="i_hereditary_non">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_ovarian_cancer" name="d_ovarian_cancer"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_ovarian_cancer" name="d_f_ovarian_cancer"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_ovarian_cancer"
                                                               name="i_ovarian_cancer">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_any_other_cancer" name="d_any_other_cancer"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_any_other_cancer" name="d_f_any_other_cancer"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_any_other_cancer"
                                                               name="i_any_other_cancer">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_alzheimer" name="d_alzheimer" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_alzheimer" name="d_f_alzheimer"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_alzheimer"
                                                               name="i_alzheimer">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_autism" name="d_autism" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_autism" name="d_f_autism" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_autism"
                                                               name="i_autism">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_cerebral" name="d_cerebral" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_cerebral" name="d_f_cerebral"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_cerebral"
                                                               name="i_cerebral">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_creultzfeldt" name="d_creultzfeldt"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_creultzfeldt" name="d_f_creultzfeldt"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_creultzfeldt"
                                                               name="i_creultzfeldt">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_depression" name="d_depression"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_depression" name="d_f_depression"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_depression"
                                                               name="i_depression">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_gaucher" name="d_gaucher" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_gaucher" name="d_f_gaucher" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_gaucher"
                                                               name="i_gaucher">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_huntington" name="d_huntington"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_huntington" name="d_f_huntington"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_huntington"
                                                               name="i_huntington">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_hydrocephalus" name="d_hydrocephalus"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_hydrocephalus" name="d_f_hydrocephalus"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_hydrocephalus"
                                                               name="i_hydrocephalus">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_obsessive_compulsive" name="d_obsessive_compulsive"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_obsessive_compulsive"
                                                               name="d_f_obsessive_compulsive" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                               id="i_obsessive_compulsive"
                                                               name="i_obsessive_compulsive">
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
                                                        <input type="text" readonly="" class="form-control" id="d_mania"
                                                               name="d_mania" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_mania" name="d_f_mania" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_mania"
                                                               name="i_mania">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_mental" name="d_mental" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_mental" name="d_f_mental" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_mental"
                                                               name="i_mental">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_neurofibro" name="d_neurofibro"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_neurofibro" name="d_f_neurofibro"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_neurofibro"
                                                               name="i_neurofibro">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_schizo" name="d_schizo" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_schizo" name="d_f_schizo" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_schizo"
                                                               name="i_schizo">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_tourette" name="d_tourette" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_tourette" name="d_f_tourette"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_tourette"
                                                               name="i_tourette">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_tuberous" name="d_tuberous" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_tuberous" name="d_f_tuberous"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_tuberous"
                                                               name="i_tuberous">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_wilson_disease" name="d_wilson_disease"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_wilson_disease" name="d_f_wilson_disease"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_wilson_disease"
                                                               name="i_wilson_disease">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_multiple_sclerosis" name="d_multiple_sclerosis"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_multiple_sclerosis" name="d_f_multiple_sclerosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                               id="i_multiple_sclerosis" name="i_multiple_sclerosis">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_parkinson" name="d_parkinson" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_parkinson" name="d_f_parkinson"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_parkinson"
                                                               name="i_parkinson">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_lou_gehrig" name="d_lou_gehrig"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_lou_gehrig" name="d_f_lou_gehrig"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_lou_gehrig"
                                                               name="i_lou_gehrig">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_any_other_neuro" name="d_any_other_neuro"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_any_other_neuro" name="d_f_any_other_neuro"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_any_other_neuro"
                                                               name="i_any_other_neuro">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_diabetes" name="d_diabetes" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_diabetes" name="d_f_diabetes"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_diabetes"
                                                               name="i_diabetes">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_heart_disease" name="d_heart_disease"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_heart_disease" name="d_f_heart_disease"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_heart_disease"
                                                               name="i_heart_disease">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_high_blood" name="d_high_blood"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_high_blood" name="d_f_high_blood"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_high_blood"
                                                               name="i_high_blood">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_asthma" name="d_asthma" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_asthma" name="d_f_asthma" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_asthma"
                                                               name="i_asthma">
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
                                                        <input type="text" readonly="" class="form-control" id="d_lupus"
                                                               name="d_lupus" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_lupus" name="d_f_lupus" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_lupus"
                                                               name="i_lupus">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_obesity" name="d_obesity" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_obesity" name="d_f_obesity" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_obesity"
                                                               name="i_obesity">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_alcoholism" name="d_alcoholism"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_alcoholism" name="d_f_alcoholism"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_alcoholism"
                                                               name="i_alcoholism">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_infertility" name="d_infertility"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_infertility" name="d_f_infertility"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_infertility"
                                                               name="i_infertility">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_recurrent" name="d_recurrent" placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group c-dropdown">
                                                        <label for=""></label>
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_recurrent" name="d_f_recurrent"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_recurrent"
                                                               name="i_recurrent">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_endometriosis" name="d_endometriosis"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_endometriosis" name="d_f_endometriosis"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_endometriosis"
                                                               name="i_endometriosis">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_polycystic_ovary" name="d_polycystic_ovary"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_polycystic_ovary" name="d_f_polycystic_ovary"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_polycystic_ovary"
                                                               name="i_polycystic_ovary">
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_uterine_fibroids" name="d_uterine_fibroids"
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
                                                        <input type="text" readonly="" class="form-control"
                                                               id="d_f_uterine_fibroids" name="d_f_uterine_fibroids"
                                                               placeholder="Select">
                                                        <ul class="c-dropdown-menu">
                                                            <li><a href="#" class="active">Yes</a></li>
                                                            <li><a href="#">No</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="i_uterine_fibroids"
                                                               name="i_uterine_fibroids">
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
                            <div id="step-9" class="tab-pane step-content">
                                <h3>S<span>tep</span> <span>04</span></h3>
                                <form action="" id="step9" novalidate="novalidate">
                                    <div class="row">
                                        <h3><span>Please answer the following </span>questions about your medical
                                            history.
                                        </h3>
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
                                                <input type="text" readonly="" class="form-control" id="d_aids"
                                                       name="d_aids" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_aids" name="i_aids"
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
                                                <input type="text" readonly="" class="form-control" id="d_herpes"
                                                       name="d_herpes" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_herpes" name="i_herpes"
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
                                                <input type="text" readonly="" class="form-control" id="d_gonorrhea"
                                                       name="d_gonorrhea" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_gonorrhea"
                                                       name="i_gonorrhea"
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
                                                <input type="text" readonly="" class="form-control" id="d_chlamydia"
                                                       name="d_chlamydia" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_chlamydia"
                                                       name="i_chlamydia"
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
                                                <input type="text" readonly="" class="form-control" id="d_condyloma"
                                                       name="d_condyloma" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_condyloma"
                                                       name="i_condyloma"
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
                                                <input type="text" readonly="" class="form-control" id="d_syphilis"
                                                       name="d_syphilis" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_syphilis"
                                                       name="i_syphilis"
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
                                                <input type="text" readonly="" class="form-control" id="d_pid"
                                                       name="d_pid" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_pid" name="i_pid"
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
                                                <input type="text" readonly="" class="form-control" id="d_hepatitisB"
                                                       name="d_hepatitisB" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_hepatitisB"
                                                       name="i_hepatitisB"
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
                                                <input type="text" readonly="" class="form-control" id="d_hepatitisC"
                                                       name="d_hepatitisC" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_hepatitisC"
                                                       name="i_hepatitisC"
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
                                                <input type="text" readonly="" class="form-control" id="d_tuberculosis"
                                                       name="d_tuberculosis" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_tuberculosis"
                                                       name="i_tuberculosis"
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
                                                <input type="text" readonly="" class="form-control" id="d_allergies"
                                                       name="d_allergies" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_allergies"
                                                       name="i_allergies"
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
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_allergiesLatex" name="d_allergiesLatex"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_allergiesLatex"
                                                       name="i_allergiesLatex"
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
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_previousSurgery" name="d_previousSurgery"
                                                       placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="i_previousSurgery"
                                                       name="i_previousSurgery"
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
                                                <input type="text" readonly="" class="form-control" id="d_emotional"
                                                       name="d_emotional" placeholder="Select">
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
                                                <input type="text" readonly="" class="form-control" id="d_psychologist"
                                                       name="d_psychologist" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <ul>
                                                <li>I have used medications such as anti-anxiety or antidepressants to
                                                    treat
                                                    an
                                                    emotional or psychological problem.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group c-dropdown">
                                                <label for="d_antiAnxiety"></label>
                                                <input type="text" readonly="" class="form-control" id="d_antiAnxiety"
                                                       name="d_antiAnxiety" placeholder="Select">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <ul>
                                                <li>If you answered yes to any of the above questions, please explain
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="if_y_p_e" name="if_y_p_e">
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

                            <div id="step-10" class="tab-pane step-content">
                                <form action="#" id="step10" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_height">Height</label>
                                                <input type="text" class="form-control" id="i_height" name="i_height">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_weight">Weight</label>
                                                <input type="text" class="form-control" id="i_weight" name="i_weight">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_race">Race</label>
                                                <input type="text" class="form-control" id="i_race" name="i_race">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_home_phone">Home Phone</label>
                                                <input type="text" class="form-control" id="i_home_phone"
                                                       name="i_home_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3><span>Ethnic</span> Background
                                                <span>(Your family's country(ies) of origin.)Example: </span>German,
                                                Russian
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_mother">Mother</label>
                                                <input type="text" class="form-control" id="i_mother" name="i_mother">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_maternal_grandmother"> Maternal Grandmother</label>
                                                <input type="text" class="form-control" id="i_maternal_grandmother"
                                                       name="i_maternal_grandmother">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_maternal_grandfather">Maternal Grandfather</label>
                                                <input type="text" class="form-control" id="i_maternal_grandfather"
                                                       name="i_maternal_grandfather">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">

                                                <label for="i_father">Father</label>
                                                <input type="text" class="form-control" id="i_father" name="i_father">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_paternal_grandmother">Paternal Grandmother</label>
                                                <input type="text" class="form-control" id="i_paternal_grandmother"
                                                       name="i_paternal_grandmother">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_paternal_grandfather">Paternal Grandfather</label>
                                                <input type="text" class="form-control" id="i_paternal_grandfather"
                                                       name="i_paternal_grandfather">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="i_religion">Religion</label>
                                                <input type="text" class="form-control" id="i_religion"
                                                       name="i_religion">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_adopted">Adopted</label>
                                                <input type="text" readonly="" class="form-control" id="d_adopted"
                                                       name="d_adopted">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_weight_gain_loss">Weight Gain Or Loss?</label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_weight_gain_loss" name="d_weight_gain_loss">
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
                                                       name="i_weight_gain_loss">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_dexterity">Dexterity</label>
                                                <input type="text" readonly="" class="form-control" id="d_dexterity"
                                                       name="d_dexterity">
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
                                                <input type="text" readonly="" class="form-control" id="d_boneStructure"
                                                       name="d_boneStructure">
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
                                                <input type="text" readonly="" class="form-control" id="d_complexion"
                                                       name="d_complexion">
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
                                                <input type="text" readonly="" class="form-control" id="d_tanAbility"
                                                       name="d_tanAbility">
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
                                                <input type="text" readonly="" class="form-control" id="d_skinCondition"
                                                       name="d_skinCondition">
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
                                                <input type="text" readonly="" class="form-control" id="d_dimples"
                                                       name="d_dimples">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_eyecolor">Eye Color</label>
                                                <input type="text" readonly="" class="form-control" id="d_eyecolor"
                                                       name="d_eyecolor">
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
                                                <label for="d_eyesize">Eye Size</label>
                                                <input type="text" readonly="" class="form-control" id="d_eyesize"
                                                       name="d_eyesize">
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
                                                <input type="text" readonly="" class="form-control" id="d_eyeShape"
                                                       name="d_eyeShape">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#">Round</a></li>
                                                    <li><a href="#">Oval</a></li>
                                                    <li><a href="#">Almond</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_haircolor">Hair Color</label>
                                                <input type="text" readonly="" class="form-control" id="d_haircolor"
                                                       name="d_haircolor">
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
                                                <input type="text" readonly="" class="form-control" id="d_hairType"
                                                       name="d_hairType">
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
                                                <input type="text" readonly="" class="form-control" id="d_hairtexture"
                                                       name="d_hairtexture">
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
                                                <input type="text" readonly="" class="form-control" id="d_hairfulness"
                                                       name="d_hairfulness">
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
                                                <input type="text" readonly="" class="form-control" id="d_baldness"
                                                       name="d_baldness">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_baldnessinfamily">Baldness in Family</label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_baldnessinfamily" name="d_baldnessinfamily">
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_prematureGraying">Premature Growing</label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_prematureGraying" name="d_prematureGraying">
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
                                                       name="i_prematureGraying">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_bodyfacialfeatures">Body and Facial Features</label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_bodyfacialfeatures" name="d_bodyfacialfeatures">
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
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_teethcondition" name="d_teethcondition">
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
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_periodonalword" name="d_periodonalword">
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
                                                       name="i_periodonalword">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_hearing">Hearing</label>
                                                <input type="text" readonly="" class="form-control" id="d_hearing"
                                                       name="d_hearing">
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
                                                <input type="text" readonly="" class="form-control" id="d_vision"
                                                       name="d_vision">
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
                                                <label for="d_glassesCorrective">Glasses or corrective laser
                                                    surgery?</label>
                                                <input type="text" readonly="" class="form-control"
                                                       id="d_glassesCorrective" name="d_glassesCorrective">
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
                                                       name="i_glassesCorrective">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group c-dropdown">
                                                <label for="d_stigmatism">Stigmatism</label>
                                                <input type="text" readonly="" class="form-control" id="d_stigmatism"
                                                       name="d_stigmatism">
                                                <!--placeholder="Do you have a stigmatism (blurred vision due to an irregularity in the curvature of the cornea)?">-->
                                                <ul class="c-dropdown-menu">
                                                    <li><a href="#" class="active">Yes</a></li>
                                                    <li><a href="#">No</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="form-group c-drop-down">
                                                    <label for="i_stigmatism">If yes, age diagnosed</label>
                                                    <input type="text" class="form-control" id="i_stigmatism"
                                                           name="i_stigmatism">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row step-10-b-row">
                                            <div class="col-12">
                                                <h3><span>Egg Donation </span>Experience</h3>
                                            </div>
                                            <div class="col-12">
                                                <h4><span>Important:</span> All women who have previously donated must
                                                    obtain
                                                    the
                                                    medical records from each donation. Records must include:</h4>
                                            </div>
                                            <div class="col-12">
                                                <p>The treatment flow sheet containing information about protocol, dose
                                                    and
                                                    monitoring
                                                    results Complete
                                                    <span>embryology information-total number of eggs retrieved</span>,
                                                    percent mature egg, percent that fertilized, embryo development
                                                    information.
                                                    <br>Were
                                                    embryos frozen? <br><span>Outcomes:</span> Did pregnancy result from
                                                    the
                                                    cycle?</p>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="i_num_times_donated"
                                                           name="i_num_times_donated"
                                                           placeholder="Number of times donated">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <p>Tell us something about yourself that you would like a prospective
                                                    egg
                                                    recipient to
                                                    know. Providing a personal answer to this question is
                                                    <span>extremely important:</span></p>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="" id="" cols="20" rows="10"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <p>All applicants must submit two <span>good quality photographs</span>.
                                                    One
                                                    must be of
                                                    your head and shoulders and clearly show your face. The other must
                                                    be of
                                                    your <span>entire body.</span>
                                                    <br>
                                                    Please make sure your <span>image isn't too large</span>. Images
                                                    must be
                                                    in
                                                    JPEG
                                                    format (.jpeg or .jpg).</p>
                                            </div>
                                            <div class="col-6 col-sm-3 imgs">
                                                <div class="wrap">
                                                    <div class="form-group text-center">
                                                        <div class="img-fake">
                                                            <img class="img-fluid js-img-choosed"
                                                                 src="../img/avatar.png" alt="product image">
                                                        </div>
                                                        <label for="img-chooser-1">
                                                            <span class="btn btn-file btn-primary">Choose Image</span>
                                                        </label>
                                                        <input type="file" name="img" id="img-chooser-1"
                                                               class="d-none file-chooser">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3 imgs">
                                                <div class="wrap">
                                                    <div class="form-group text-center">
                                                        <div class="img-fake">
                                                            <img class="img-fluid js-img-choosed"
                                                                 src="../img/avatar.png" alt="product image">
                                                        </div>
                                                        <label for="img-chooser-2">
                                                            <span class="btn btn-file btn-primary">Choose Image</span>
                                                        </label>
                                                        <input type="file" name="img" id="img-chooser-2"
                                                               class="d-none file-chooser">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3 imgs">
                                                <div class="wrap">
                                                    <div class="form-group text-center">
                                                        <div class="img-fake">
                                                            <img class="img-fluid js-img-choosed"
                                                                 src="../img/avatar.png" alt="product image">
                                                        </div>
                                                        <label for="img-chooser-3">
                                                            <span class="btn btn-file btn-primary">Choose Image</span>
                                                        </label>
                                                        <input type="file" name="img" id="img-chooser-3"
                                                               class="d-none file-chooser">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3 imgs">
                                                <div class="wrap">
                                                    <div class="form-group text-center">
                                                        <div class="img-fake">
                                                            <img class="img-fluid js-img-choosed"
                                                                 src="../img/avatar.png" alt="product image">
                                                        </div>
                                                        <label for="img-chooser-4">
                                                            <span class="btn btn-file btn-primary">Choose Image</span>
                                                        </label>
                                                        <input type="file" name="img" id="img-chooser-4"
                                                               class="d-none file-chooser">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-8">
                                                <ul>
                                                    <li class="mt-4 pt-3 mb-4">Is it okay to have prospective egg
                                                        recipients
                                                        to
                                                        view
                                                        your photographs?
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group c-dropdown">
                                                    <label for=""></label>
                                                    <input type="text" readonly="" class="form-control" id="d_is_it_ok"
                                                           name="d_is_it_ok" placeholder="No">
                                                    <ul class="c-dropdown-menu">
                                                        <li><a href="#">Yes</a></li>
                                                        <li><a href="#" class="active">No</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h4>I am interested in becoming an egg donor because:
                                                    <span>(check all that apply)</span></h4>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_egg_don_reason">
                                                        <span class="indicator"></span>
                                                        I know someone with infertility and always wanted to help.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_egg_don_reason">
                                                        <span class="indicator"></span>
                                                        I think it would be a rewarding experience for me.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_egg_don_reason">
                                                        <span class="indicator"></span>
                                                        I think the process is fascinating and wanted to be involved.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkboxes">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="c_egg_don_reason">
                                                        <span class="indicator"></span>
                                                        I need the money.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Other">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12 text-center">
                                                <p><b>Your answers will be saved as soon as you click next step. You may
                                                        take a
                                                        break
                                                        and come back later, but you cannot undo any previous answers.
                                                        Please
                                                        check
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
                        <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end">
                            <div class="btn-group mx-auto sw-btn-group bttn" role="group" style="opacity: 1;">
                                <button class="btn btn-secondary sw-btn-prev bttn disabled" type="button">Previous
                                </button>
                            </div>
                            <div class="btn-group sw-btn-group-extra bttn" role="group"></div>
                        </div>
                        <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end sw-container tab-content"
                             style="min-height: 726px;">
                            <div class="btn-group mx-auto sw-btn-group bttn tab-pane step-content" role="group"
                                 style="opacity: 0;">
                                <button class="btn sw-btn-next" id="donor_q_next" type="button"
                                        style="background-color: transparent; color: rgb(255, 255, 255); border-radius: 5px; width: 0px; height: 0px; padding: 0px; transform: scale(0, 0);">
                                    Next Step
                                </button>
                            </div>
                            <div class="btn-group sw-btn-group-extra tab-pane step-content" role="group"></div>
                        </div>
                        <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end">
                            <div class="btn-group mx-auto sw-btn-group bttn" role="group" style="opacity: 1;">
                                <button class="btn btn-secondary sw-btn-prev bttn disabled" type="button">Previous
                                </button>
                            </div>
                            <div class="btn-group sw-btn-group-extra bttn" role="group"></div>
                        </div>
                    </div>
                </div>

            </div><!--!row-->
        </div>
    </main>
@endsection
{{--Pushing donor questionnaire only  JS files --}}
@push('js')
    <script src="{{asset('vendor/jquery-ui/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{asset('js/donor-questionary.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('../js/ivf1match.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('../vendor/jquer-smart_wizard/js/jquery.smartWizard-admin.js')}}"></script>
@endpush
