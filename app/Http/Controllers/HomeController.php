<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    //
    public function login(Request $request){
        if ($request->session()->has('username')) {
            return view('school_schedule');
        }
        else{
            return view('login');
        }

    }
    public function postlogin(Request $request){
        $username = $request -> input('Username');
        $password = $request -> input('Password');
        $result = DB::table('users')->where('username',$username)->where('password',$password)->first();

        if($result){
            $request->session()->put('username', $result->username);
            return Redirect('/school_schedule');
        }
        else{
            $request->session()->put('messenger', 'Wrong username or password!');
            return Redirect('/');
        }
        }







    public function logout(Request $request){
        $request->session()->put('username', null);
        return Redirect('/');
    }

}
