<?php

use Illuminate\Support\Facades\Route;

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
// home page routes Controller
Route::get('/', 'FrontendController@index')->name('welcome');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController');
Route::resource('/slider', 'SliderController');
Route::resource('/package', 'PackageController');
Route::resource('/customer', 'CustomerController');
Route::resource('/post', 'PostController');
Route::post('/comment', 'CommentController@comment')->name('comment');

Route::resource('/address', 'AddressController');
Route::resource('/contact', 'ContactController');
Route::resource('/ideas', 'IdeasliderController');
Route::resource('/packagecategory', 'PackagecategoryController');
Route::resource('/booking', 'BookingController');
Route::resource('/time', 'TimeController');
Route::resource('/guests', 'GuestController');
