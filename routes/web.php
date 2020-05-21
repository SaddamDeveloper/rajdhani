<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__ . '/newRoutes.php';
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/student/login', 'Student\StudentLoginController@showStudentLoginForm')->name('student.login');
Route::post('/student/login', 'Student\StudentLoginController@studentLogin');
Route::post('/student/logout', 'Student\StudentLoginController@logout')->name('student.logout');


Route::get('/student-register','Student\StudentLoginController@showStudentRegistrationForm')->name('frontend.student_register');
Route::post('/student/register/submit', 'Student\StudentLoginController@store')->name('student.registration.store');

Route::group(['middleware'=>'auth:student','prefix'=>'student','namespace'=>'Student'],function(){
    Route::get('/dashboard', 'StudentDashboardController@index')->name('student.dashboard');
    Route::get('/student-admission', 'StudentDashboardController@showAdmissionForm')->name('frontend.student_admission');
    Route::post('/student/form/submit', 'StudentDashboardController@store')->name('student.form.store');
    Route::get('/payment', 'StudentDashboardController@showPaymentForm')->name('frontend.payment');
});

// Blog Post Frontend
Route::get('/blogs', 'PagesController@blogs')->name('frontend.blogs');
Route::get('/blog/{slug}/{id}', 'PagesController@getBlogs')->name('frontend.singleblog');

Route::get('/','PagesController@index');
// Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/gallery','PagesController@gallery');
Route::get('/about','PagesController@about');
Route::get('/our_school','PagesController@our_school');
Route::get('/facilities','PagesController@facilities');
Route::get('/more','PagesController@more');
Route::get('/courses','PagesController@courses');
Route::get('/exam','PagesController@exam');
Route::get('/results','PagesController@results');
// Route::get('/studentsmore','PagesController@studentsmore');
Route::get('/ad_procedure','PagesController@ad_procedure');
Route::get('/registration','PagesController@registration');
Route::get('/process','PagesController@process');
// Route::get('/tour','PagesController@tour');
Route::get('/payment', 'PaymentController@index');

Route::get('paymentresponse', 'PaymentController@paymentresponse');
Route::post('pay', 'PaymentController@pay');

Route::post('/contact', 'ContactController@contact');
Route::post('/admission', 'AdmissionController@admission');



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');





//Admin pannel
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


Route::resource('contact', 'ContactController');
// Route::('/admission', 'AdmissionController@index');
// Route::get('/news', 'NewsController@index');
Route::resource('news', 'NewsController');
Route::resource('event', 'EventController');
Route::resource('gallery', 'GalleryController');
Route::resource('admission', 'AdmissionController');
Route::get('payment', 'PaymentController@payment');
Route::resource('blog', 'BlogController');
Route::get('/status/blog/{id}/{status}','BlogController@statusBlog')->name('admin.blog_status');
Route::post('/blog/update', 'BlogController@blogUpdate')->name('blog.blog_update');
// Route::resource('price', 'PriceController');
Route::get('/applicants', 'ApplicationController@applicants')->name('admin.applicants');
Route::get('/applicant/show/{id}', 'ApplicationController@show')->name('applicant.show');
Route::get('/change_password', 'Auth\ChangePasswordController@index');
Route::post('/change_password', 'Auth\ChangePasswordController@changepassword');
Route::get('/logout', 'Auth\LoginController@logout');
});
