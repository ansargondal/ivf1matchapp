<?php
//

//get available donors for index page
use Illuminate\Support\Facades\Route;

Route::get('/', 'Frontend\Donor\DonorProfileController@availableDonors')->name('frontend.index');


Route::group(['middleware' => 'guest'], function () {

    //Donor Registration Routes
    Route::get('donor/register', 'Admin\DonorController@create')->name('donor.register.show');
    Route::post('donor/register', 'Admin\DonorController@store')->name('donor.register.store');

    //Recipient Registration Routes
    Route::get('recipient/register', 'Admin\RecipientController@create')->name('recipient.register.show');
    Route::post('recipient/register', 'Admin\RecipientController@store')->name('recipient.register.store');

    //Authentication Common routes showLogin/Login/Logout
    Route::get('login', 'Auth\LoginController@show')->name('login.show');
    Route::post('login', 'Auth\LoginController@authenticate')->name('login.authenticate');
});


Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');


//Donor Profile Filters routes
Route::group(['prefix' => 'donor', 'namespace' => 'Frontend\Donor'], function () {

    Route::get('profiles', 'DonorProfileController@index')->name('donor.profiles');
    Route::get('profile/{id}', 'DonorProfileController@show')->name('donor.show');

    Route::post('profiles/filter', 'DonorProfileController@filter')->name('donor.filter');
});


/**
 * Donor Questioner Form Routes
 */
Route::group(['namespace' => 'Frontend\Donor', 'middleware' => 'auth'], function () {

    //show donor questionnaire form
    Route::get('donor/questionnaire', function () {

        return view('frontend.donor-questionnaire');

    })->name('donor-questionnaire');

    //redirects to last edited step
    Route::get('donor/questionnaire/redirect', 'DQProgressController@redirect')->name('questionnaire.last.edited');

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


Route::get('roles/create', function () {
    \Spatie\Permission\Models\Role::create(['name' => 'Donor']);
    \Spatie\Permission\Models\Role::create(['name' => 'Recipient']);
    \Spatie\Permission\Models\Role::create(['name' => 'Admin']);
    \Spatie\Permission\Models\Role::create(['name' => 'Employee']);
    \Spatie\Permission\Models\Role::create(['name' => 'Manager']);
});
