<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;


class SchoolScheduleController extends Controller
{
    //
    public function school_schedule(Request $request){
        if ($request->session()->has('username')) {
            $schoolschedule = DB::table('schoolschedule')->get();
            return view('school_schedule',['schoolschedule' => $schoolschedule]);
        }
        else{
            return redirect('/');
        }

    }

    public function add_schoolschedule(Request $request){
        if ($request->session()->has('username')) {
            $school = DB::table('school_list')->get();
            $course = DB::table('course')->get();
            $teachers = DB::table('teachers')->get();
            $teachers_assistant = DB::table('teachers_assistant')->get();

            return view('add_schoolschedule',['course' => $course, 'teachers' => $teachers, 'teachers_assistant' => $teachers_assistant, 'school' => $school]);
        }
        else{
            return redirect('/');
        }
    }

    public function postadd_schoolschedule(Request $request){
        $tag = $request->input('tag');
        $date = $request->input('date');
        $from = $request->input('from');
        $to = $request->input('to');
        $school = $request->input('school');
        $class = $request->input('class');
        $course = $request->input('course');
        $room = $request->input('room');
        $teacher = $request->input('teacher');
        $teacher_assistant = $request->input('teacher_assistant');
        $note_teacher = $request->input('note_teacher');
        $note_school = $request->input('note_school');
        $status = $request->input('status');
        $book = DB::table('course')->where('course', $course)->value('resource');

        DB::table('schoolschedule')->insert(['tag'=>$tag, 'date'=>$date, 'from'=>$from, 'to'=>$to, 'school'=>$school,  'class'=>$class, 'course'=>$course, 'book'=>$book,  'room'=>$room, 'teacher'=>$teacher, 'teacher_assistant'=>$teacher_assistant, 'note_teacher'=>$note_teacher, 'note_school'=>$note_school, 'status'=>$status]);
        return redirect('/add_schoolschedule');
    
    }

    public function edit_schoolschedule(Request $request){
        if ($request->session()->has('username')) {
            $schoolschedule = DB::table('schoolschedule')->where('id', $request->route('id'))->first();
            $school = DB::table('school_list')->get();
            $course = DB::table('course')->get();
            $teachers = DB::table('teachers')->get();
            $teachers_assistant = DB::table('teachers_assistant')->get();
            return view('edit_schoolschedule',['schoolschedule'=>$schoolschedule ,'course' => $course, 'teachers' => $teachers, 'teachers_assistant' => $teachers_assistant, 'school' => $school]);
        }
        else{
            return redirect('/');
        }
    }

    public function postedit_schoolschedule(Request $request){
        $tag = $request->input('tag');
        $date = $request->input('date');
        $from = $request->input('from');
        $to = $request->input('to');
        $school = $request->input('school');
        $class = $request->input('class');
        $course = $request->input('course');
        $room = $request->input('room');
        $teacher = $request->input('teacher');
        $teacher_assistant = $request->input('teacher_assistant');
        $note_teacher = $request->input('note_teacher');
        $note_school = $request->input('note_school');
        $status = $request->input('status');
        $book = DB::table('course')->where('course', $course)->value('resourse');
        DB::table('schoolschedule')->where('id', $request->route('id'))->update(['tag'=>$tag, 'date'=>$date, 'from'=>$from, 'to'=>$to, 'school'=>$school,  'class'=>$class, 'course'=>$course, 'book'=>$book, 'room'=>$room, 'teacher'=>$teacher, 'teacher_assistant'=>$teacher_assistant, 'note_teacher'=>$note_teacher, 'note_school'=>$note_school, 'status'=>$status]);
        return redirect('/edit_schoolschedule/'.$request->route('id'));
    
    }
    public function delete_schoolschedule(Request $request){
        DB::table('schoolschedule')->where('id', $request->route('id'))->delete();
        return back();
    }

}
