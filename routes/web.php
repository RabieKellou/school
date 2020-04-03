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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();
 Route::get('/home', 'HomeController@index');
// Route::get('/login', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('admins.index');
// Route::get('/etudiant', 'StudentController@index')->name('students.index');
Route::view('/enseignant', 'teachers.teacher');
// Route::get('/admin', 'AdminController@index')->name('admin');


// Route::get('/admin', 'AdminController@index')->name('admin');

/*Route::get('/admin/std', 'AdminController@index')->name('stdl');

Route::view('/admin/stds', 'admin.std.index');*/



Route::resource('admin/students', 'Student\StudentController')->middleware('auth');

// News
Route::resource('/news', 'News\NewsController')->except('show');
Route::get('/news/{id}/{title?}','News\NewsController@show')->name('news.show');
