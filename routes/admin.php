<?php

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('admin/profile', function () {
    return view('admin.user-profile');
});
Route::get('admin/donors', function () {
    return view('admin.donors');
});
Route::get('admin/users', function () {
    return view('admin.users');
});
Route::get('admin/dq', function () {
    return view('admin.donor-questionnaire');
});
Route::get('admin/recipients', function () {
    return view('admin.recipients');
});
Route::get('admin/messages', function () {
    return view('admin.messages');
});

