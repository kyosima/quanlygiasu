<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SchoolTypeController extends Controller
{
    public function schooltype(Request $request){
        if ($request->session()->has('username')){
            $schooltype = DB::table('schooltype')->get();
            return view('schooltype',['schooltype' => $schooltype]);
        }
        else{
            return Redirect('/');
        }
    }
    public function postaddschooltype(Request $request){
        $name = $request->input('name');
        DB::table('schooltype')->insert(['name' => $name]);
        return back();
    }

    public function updateschooltype(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        DB::table('schooltype')->where('id', $id)->update(['name' => $name]);
        return redirect('/schooltype');
    }

    public function deleteschooltype(Request $request){
        $id = $request->route('id');
        DB::table('schooltype')->where('id',$id)->delete();
        return redirect('/schooltype');
    }
}
