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

            return view('evaluation');
        }
        else{
            return Redirect('/');
        }
    }

    public function add_evaluation(Request $request){
        if ($request->session()->has('username')){

            return view('add_evaluation');
        }
        else{
            return Redirect('/');
        }
    }
}
