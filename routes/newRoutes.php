<?php

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
});



// new routes from here
Route::get('/student-dashboard', function () {
    return view('frontend.student.studentdashboard');
})->name('frontend.student_dashboard');
