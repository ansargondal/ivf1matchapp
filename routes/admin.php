<?php


//all the routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {


    Route::post('recipients/{id}/update-status', 'RecipientController@updateStatus')->name('recipient.status');

    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');


    Route::get('profile', function () {
        return view('admin.user-profile');
    })->name('profile');

    Route::get('users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('dq', function () {
        return view('admin.donor-questionnaire');
    })->name('dq');

    Route::get('recipients', function () {
        return view('admin.recipients');
    })->name('recipients');

    Route::get('messages', function () {
        return view('admin.messages');
    })->name('messages');


    Route::Resource('donors', 'DonorController');
    Route::Resource('recipients', 'RecipientController');
    Route::Resource('tasks', 'TaskController');

    Route::post('subscribe', 'SubscriptionController@store')->name('subscription.store');


    //Data table  ajax data routes Routes
    Route::get('tasksAjax', 'TaskController@tasksDTData')->name('tasks.ajax');
    Route::get('donorsAjax', 'DonorController@donorsDTData')->name('donors.ajax');
    Route::get('recipientsAjax', 'RecipientController@recipientsDTData')->name('recipients.ajax');

});
