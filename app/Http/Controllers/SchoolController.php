<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
session_start();
use Illuminate\Support\Facades\Auth;
class SchoolController extends Controller
{
    //school_schedule
    public function school_schedule(Request $request){
        if ($request->session()->has('username')){
            return view('school_schedule');
        }
        else{
            return Redirect('/');
        }

    }
    //Course
    public function course(Request $request){

        if ($request->session()->has('username')){
            $username = $request->session()->get('username');
            $course = DB::table('Course')->get();
            return view('course',['course' => $course]);
        }
        else{
            return Redirect('/');
        }
    }
    //get edit course
    public function editcourse(Request $request){
        if ($request->session()->has('username')){
            $id = $request->route('id');
            $result = DB::table('Course')->where('id',$id)->first();
            return view('course_edit',['result'=>$result]);
        }
        else{
            return Redirect('/');
        }
    }
    //post edit cource
    public function posteditcourse(Request $request){
        $id = $request->route('id');
        $courseName = $request->input('Name');
        $resource = $request->input('Resource');
        $unit = $request->input('Unit');
        $duration = $request->input('Duration');
        DB::table('Course')->where('id',$id)->update(['course'=>$courseName, 'resource'=>$resource, 'unit'=>$unit, 'duration'=>$duration ]);
        return Redirect('/course');
    }
    //add course
    public function addcourse(Request $request){
        if ($request->session()->has('username')){

            return view('addcourse');
        }
        else{
            return Redirect('/');
        }
    }
    public function postaddcourse(Request $request){
        $courseName = $request->input('Name');
        $resource = $request ->input('Resource');
        $unit = $request->input('Unit');
        $duration = $request->input('Duration');
        DB::table('Course')->insert(['course'=>$courseName,'resource'=>$resource, 'unit'=>$unit, 'duration'=>$duration]);
        return Redirect('/course');
    }
    //delete course
    public function deletecourse(Request $request){
        $id = $request->route('id');
        DB::table('Course')->where('id',$id)->delete();
        return redirect('/course');
    }

}
