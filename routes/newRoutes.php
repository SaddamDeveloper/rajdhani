<?php

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
});


// new routes from here
Route::get('/student-dashboard', function () {
    return view('frontend.student.studentdashboard');
})->name('frontend.student_dashboard');

Route::get('/student-login-register', function () {
    return view('frontend.student.studentloginregister');
})->name('frontend.student_login');
