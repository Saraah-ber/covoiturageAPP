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

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
      Route::get('/dashboard', 'AdminController@index')->name('dashboard');
      Route::resource('members', 'MemberController');
      Route::resource('users', 'UserController');
      Route::resource('assurances', 'AssuranceController');
      Route::resource('vehicules', 'VehiculeController');
      Route::resource('trajets', 'TrajetController');
  });
});


