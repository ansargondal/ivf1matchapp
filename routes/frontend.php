<?php
//
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/profiles', function () {
    return view('frontend.donor-profiles');
});

Route::get('/profiles/1', function () {
    return view('frontend.donor-details');
});

Route::get('/recipients', function () {
    return view('frontend.recipient-signup');
});
Route::get('/donors-su', function () {
    return view('frontend.donor-signup');
});

Route::get('/dq', function () {
    return view('frontend.donor-questionnaire');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::resource('donors', 'Frontend\ProfileController');


