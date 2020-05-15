<?php

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
});


// new routes from here
// Route::get('/student/dashboard', function () {
//     return view('frontend.student.studentdashboard');
// })->name('frontend.student_dashboard');

Route::get('/student-login', function () {
    return view('frontend.student.login');
})->name('frontend.student_login');

Route::get('/student-register', function () {
    return view('frontend.student.register');
})->name('frontend.student_register');

// Route::get('/student-admission-1-10', function () {
//     return view('frontend.student.admission1to10');
// })->name('frontend.student_admission_1_to_10');

Route::get('/student-admission-11-12', function () {
    return view('frontend.student.admission11to12');
})->name('frontend.student_admission_11_to_12');

Route::get('/blogs', function () {
    return view('frontend.blog.blogs');
})->name('frontend.blogs');

Route::get('/blogs-detail', function () {
    return view('frontend.blog.blog-detail');
})->name('frontend.blog_detail');