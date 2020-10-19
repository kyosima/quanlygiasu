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

//SchoolShedule
Route::get('/school-schedule', 'SchoolScheduleController@school_schedule');

Route::get('/add-schoolschedule', 'SchoolScheduleController@add_schoolschedule');

Route::post('/add-schoolschedule', 'SchoolScheduleController@postadd_schoolschedule');

Route::get('/edit-schoolschedule/{id}', 'SchoolScheduleController@edit_schoolschedule');

Route::post('/edit-schoolschedule/{id}', 'SchoolScheduleController@postedit_schoolschedule');

Route::get('/delete-schoolschedule/{id}', 'SchoolScheduleController@delete_schoolschedule');

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

Route::get('/evaluation', 'EvaluationController@evaluation');

Route::get('/add-evaluation', 'EvaluationController@add_evaluation');

Route::post('/add-evaluation', 'EvaluationController@postadd_evaluation');

Route::get('/edit-evaluation/{id}', 'EvaluationController@edit_evaluation');

Route::post('/edit-evaluation/{id}', 'EvaluationController@postedit_evaluation');

//Teacher
Route::get('/teacher', 'TeacherController@teacher');

//Teacher_assistant
Route::get('/teacher-assistant', 'TeacherController@teacher_assistant');

//Dùng cho teacher + teacher_assistant
Route::get('/deleteteacher/{type}/{id}', 'TeacherController@deleteteacher');

Route::get('/addteacher/{type}', 'TeacherController@addteacher');

Route::post('/addteacher/{type}', 'TeacherController@postaddteacher');

Route::get('/teacher/{type}/{id}', 'TeacherController@editteacher');

Route::post('/teacher/{type}/{id}', 'TeacherController@posteditteacher');

//Resource
Route::get('/resource', 'ResourceController@resource');

Route::get('/addresource', 'ResourceController@addresource');

Route::post('/addresource', 'ResourceController@postaddresource');

Route::get('/resource/editresource/{id}', 'ResourceController@editresource');

Route::post('/resource/editresource/{id}', 'ResourceController@posteditresource');

Route::get('/resource/deleteresource/{id}', 'ResourceController@deleteresource');

//District
Route::get('/district', 'DistrictController@district');

Route::post('district/adddistrict', 'DistrictController@postadddistrict');

Route::get('/district/deletedistrict/{id}', 'DistrictController@deletedistrict');

Route::post('district/updatedistrict', 'DistrictController@updatedistrict');

//SchoolType
Route::get('/schooltype', 'SchoolTypeController@schooltype');

Route::post('schooltype/addschooltype', 'SchoolTypeController@postaddschooltype');

Route::get('/schooltype/deleteschooltype/{id}', 'SchoolTypeController@deleteschooltype');

Route::post('schooltype/updateschooltype', 'SchoolTypeController@updateschooltype');
