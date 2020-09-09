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

Route::get('/', 'HomeController@login');

Route::post('/', 'HomeController@postlogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/school_schedule', 'SchoolController@school_schedule');

Route::get('/course', 'SchoolController@course');

Route::get('/course_edit/{id}', 'SchoolController@editcourse');

Route::post('/course_edit/{id}', 'SchoolController@posteditcourse');

Route::get('/addcourse', 'SchoolController@addcourse');

Route::post('/addcourse', 'SchoolController@postaddcourse');

Route::get('/deletecourse/{id}', 'SchoolController@deletecourse');









