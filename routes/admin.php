<?php


//subscription route is public and don't need auth middleware
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::post('subscribe', 'SubscriptionController@store')->name('subscription.store');
});

//all the routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {

    //TODO:: Redirect users properly after logging in... Recipient| Donor| Admin
    Route::get('/', 'TaskController@index')->name('dashboard');

    Route::get('dq', function () {
        return view('admin.donor-questionnaire');
    })->name('dq');


    Route::resource('users', 'UserController');
    Route::get('profile', 'UserController@profile')->name('user.profile');
    Route::get('password/edit', 'UserController@passwordEdit')->name('user.password.edit');
    Route::post('password/update', 'UserController@passwordUpdate')->name('user.password.update');


    Route::resource('donors', 'DonorController');
    Route::post('donors/{id}/update-status', 'DonorController@updateStatus')
        ->name('donor.status');

    Route::post('donors/{id}/update-cycle', 'DonorController@updateCycle')
        ->name('donor.cycle');


    Route::resource('recipients', 'RecipientController');
    Route::post('recipients/{id}/update-status', 'RecipientController@updateStatus')
        ->name('recipient.status');

    Route::resource('tasks', 'TaskController');

    Route::resource('messages', 'MessageController');
    Route::post('messages/{id}/update-status', 'MessageController@updateStatus')
        ->name('messages.status');
    Route::post('messages/{id}/mark-as-read', 'MessageController@markAsRead')
        ->name('messages.mark.as.read');


    //Data table  ajax data routes Routes
    Route::get('tasksAjax', 'TaskController@tasksDTData')->name('tasks.ajax');
    Route::get('messagesAjax', 'MessageController@messagesDTData')->name('messages.ajax');
    Route::get('usersAjax', 'UserController@usersDTData')->name('users.ajax');
    Route::get('donorsAjax', 'DonorController@donorsDTData')->name('donors.ajax');
    Route::get('recipientsAjax', 'RecipientController@recipientsDTData')->name('recipients.ajax');

});
