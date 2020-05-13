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
// Route::resource('hire', 'HireController');
// Route::resource('price', 'PriceController');
Route::get('/change_password', 'Auth\ChangePasswordController@index');
Route::post('/change_password', 'Auth\ChangePasswordController@changepassword');
Route::get('/logout', 'Auth\LoginController@logout');


});
