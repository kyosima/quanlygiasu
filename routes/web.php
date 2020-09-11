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

//course

Route::get('/course', 'SchoolController@course');

Route::get('/course_edit/{id}', 'SchoolController@editcourse');

Route::post('/course_edit/{id}', 'SchoolController@posteditcourse');

Route::get('/addcourse', 'SchoolController@addcourse');

Route::post('/addcourse', 'SchoolController@postaddcourse');

Route::get('/deletecourse/{id}', 'SchoolController@deletecourse');



//school

Route::get('/school', 'SchoolController@school');

Route::get('/school-edit/{id}', 'SchoolController@editschool');

Route::post('/school-edit/{id}', 'SchoolController@posteditschool');

Route::get('/deleteschool/{id}', 'SchoolController@deleteschool');

Route::get('/addschool', 'SchoolController@addschool');

Route::post('/addschool', 'SchoolController@postaddschool');








//evaluation

Route::get('/evaluation', 'SchoolController@evaluation');


//Teacher

Route::get('/teacher', 'TeacherController@teacher');

Route::get('/addteacher', 'TeacherController@addteacher');

Route::post('/addteacher', 'TeacherController@postaddteacher');

Route::get('/teacher/{id}', 'TeacherController@editteacher');

Route::post('/teacher/{id}', 'TeacherController@posteditteacher');

Route::get('/deleteteacher/{id}', 'TeacherController@deleteteacher');



