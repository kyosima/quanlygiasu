<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){
        if ($request->session()->has('username')){
            $teacher = DB::table('Teachers')->get();
            return view('teacher',['teacher'=>$teacher]);
        }
        else{
            return Redirect('/');
        }
    }
