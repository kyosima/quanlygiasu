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
            return view('add_schoolschedule');
        }
        else{
            return redirect('/');
        }
    }

}
