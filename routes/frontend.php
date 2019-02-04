<?php
//
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/recipient/register', function () {
    return view('frontend.recipient-signup');
})->name('recipient.register');


Route::get('/login', function () {
    return view('frontend.login');
})->name('login');


Route::group(['prefix' => 'donor', 'namespace' => 'Frontend\Donor'], function () {

    Route::get('profiles', 'DonorProfileController@index')->name('donor.profiles');
    Route::get('profile/{id}', 'DonorProfileController@show')->name('donor.show');

    Route::post('profiles/filter', 'DonorProfileController@filter')->name('donor.filter');

    Route::get('register', function () {
        return view('frontend.donor-signup');
    })->name('donor.register');

    Route::get('questionnaire', function () {
        return view('frontend.donor-questionnaire');
    })->name('donor-questionnaire');
});

/**
 * Donor Questioner Form Routes
 */
Route::group(['namespace' => 'Frontend\Donor'], function () {
    Route::post('contact', 'ContactController@store')->name('contact.store');
    Route::post('education', 'EducationController@store')->name('education.store');
    Route::post('sexual-history', 'SexualHistoryController@store')->name('sexual.history.store');
    Route::post('pregnancy', 'PregnancyController@store')->name('pregnancy.store');
    Route::post('lifestyle', 'LifestyleController@store')->name('lifestyle.store');
    Route::post('s1-med-question', 'S1MedQuestionController@store')->name('s1.questions.store');
    Route::post('s2-med-history', 'S2MedHistoryController@store')->name('s2.med.history.store');
    Route::post('s3-med-abnormality', 'S3MedAbnormalityController@store')->name('s3.med.abnormality.store');
    Route::post('s4-med-problem', 'S4MedProblemController@store')->name('s4.med.problem.store');
    Route::post('donor-profile', 'DonorProfileController@store')->name('donor.profile.store');
});



