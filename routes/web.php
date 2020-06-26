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

use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//home
Route::get('/', 'HomeController@index')->name('home');

//Authentication
Auth::routes();

// Route::get('/login', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('admins.index');
// Route::get('/etudiant', 'StudentController@index')->name('students.index');
Route::view('/enseignant', 'teachers.teacher');
// Route::get('/admin', 'AdminController@index')->name('admin');


// Route::get('/admin', 'AdminController@index')->name('admin');

/*Route::get('/admin/std', 'AdminController@index')->name('stdl');

Route::view('/admin/stds', 'admin.std.index');*/



Route::resource('students', 'Student\StudentController')->middleware('auth');

// News
Route::resource('news', 'News\NewsController')->except('show');

//Departments

Route::get('/news/{id}', 'News\NewsController@show')->name('news.show');

Route::get('/admin', function () {
    dd(Role::getRoleIdByName('e'));
    dd(Auth::user()->isAdmin());
    //dd(Auth::user());
    //dd(Role::where('role_name', 'like', 'admin')->pluck('role_id')->first());
});
