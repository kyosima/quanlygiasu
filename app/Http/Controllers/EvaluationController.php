<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;

class EvaluationController extends Controller
{
    //Evaluation
    public function evaluation(Request $request){
        if ($request->session()->has('username')){
            $evaluations = DB::table('evaluation')->get();
            return view('evaluation', ['evaluations' => $evaluations]);
        }
        else{
            return Redirect('/');
        }
    }

    public function add_evaluation(Request $request){
        if ($request->session()->has('username')){
            $username =$request->session()->get('username');
            $schools = DB::table('school_list')->get();
            $course = DB::table('course')->get();
            $teachers = DB::table('teachers')->get();
            return view('add_evaluation',['username' => $username, 'schools' => $schools, 'course' => $course, 'teachers' => $teachers]);
        }
        else{
            return Redirect('/');
        }
    }

    public function postadd_evaluation(Request $request){
        $username = $request->input('username');
        $date = $request->input('date');
        $teacher = $request->input('teacher');
        $time = $request->input('time');
        $school = $request->input('school');
        $class = $request->input('class');
        $attire = $request->input('attire');
        $description = $request->input('description');
        $punctuality = $request->input('punctuality');
        $assignlessions = $request->input('assignlessions');
        $teachingpreparation = $request->input('teachingpreparation');
        $friendliness = $request->input('friendliness');
        $funactivities = $request->input('funactivities');
        $atmosphere = $request->input('atmosphere');
        DB::table('evaluation')->insert(['username'=>$username, 'date'=>$date, 'teacher'=>$teacher, 'time'=>$time, 'school'=>$school,  'class'=>$class, 'attire'=>$attire, 'description'=>$description, 'punctuality'=>$punctuality, 'assignlessions'=>$assignlessions, 'teachingpreparation'=>$teachingpreparation, 'friendliness'=>$friendliness, 'funactivities'=>$funactivities, 'atmosphere'=>$atmosphere]);
        return redirect('/evaluation');
    }

    public function edit_evaluation(Request $request){
        if ($request->session()->has('username')){
            $schools = DB::table('school_list')->get();
            $course = DB::table('course')->get();
            $teachers = DB::table('teachers')->get();
            $evaluation = DB::table('evaluation')->where('id', $request->route('id'))->first();
            return view('edit_evaluation',['evaluation' => $evaluation, 'schools' => $schools, 'course' => $course, 'teachers' => $teachers]);
        }
        else{
            return Redirect('/');
        }
    }

}
