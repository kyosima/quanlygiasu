<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


session_start();
class SchoolController extends Controller
{

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

    //School
    public function school(Request $request){
        if ($request->session()->has('username')){
            $school = DB::table('School_list')->get();
            return view('school',['school'=>$school]);
        }
        else{
            return Redirect('/');
        }
    }

    public function editschool(Request $request){
        $id = $request->route('id');
        if ($request->session()->has('username')){
            $school = DB::table('School_list')->where('id',$id)->first();
            $user = DB::table('users')->get();
            $schooltype = DB::table('schooltype')->get();
            $district = DB::table('district')->get();
            return view('edit_school', ['school'=>$school, 'schooltype' => $schooltype, 'district' => $district, 'user'=>$user]);
        }
        else{
            return Redirect('/');
        }
    }

    public function posteditschool(Request $request){
        $id = $request->route('id');
        $name = $request->input('Nameschool');
        $prodate = $request->input('Prodate');
        $staff = $request->input('Staffname');
        $schooltype = $request->input('Schooltype');
        $district = $request->input('District');
        $follow = $request->input('Followup');
        $intro = $request->input('intro');
        $status = $request->input('status');
        DB::table('School_list')->where('id',$id)->update(['name'=>$name, 'prodate'=>$prodate, 'staffname'=>$staff, 'schooltype'=>$schooltype, 'district'=>$district ,'followup'=> $follow, 'intro'=>$intro, 'status'=>$status]);
        return redirect('/school');
    }

    public function deleteschool(Request $request){
        $id = $request->route('id');
        DB::table('School_list')->where('id',$id)->delete();
        return redirect('/school');
    }

    public function addschool(Request $request){
        if ($request->session()->has('username')){
            $user = DB::table('users')->get();
            $schooltype = DB::table('schooltype')->get();
            $district = DB::table('district')->get();
            return view('add_school', ['schooltype' => $schooltype, 'district' => $district, 'user'=>$user]);
        }
        else{
            return Redirect('/');
        }
    }
    public function postaddschool(Request $request){
        $name = $request->input('Nameschool');
        $prodate = $request->input('Prodate');
        $staff = $request->input('Staffname');
        $schooltype = $request->input('Schooltype');
        $district = $request->input('District');
        $follow = $request->input('Followup');
        $intro = $request->input('intro');
        $status = $request->input('status');
        DB::table('School_list')->insert(['name'=>$name, 'prodate'=>$prodate, 'staffname'=>$staff, 'schooltype'=>$schooltype, 'district'=>$district ,'followup'=> $follow, 'intro'=>$intro, 'status'=>$status]);
        return redirect('/school');
    }





}
