<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function district(Request $request){
        if ($request->session()->has('username')){
            $district = DB::table('district')->get();
            return view('district',['district' => $district]);
        }
        else{
            return Redirect('/');
        }
    }
    public function postadddistrict(Request $request){
        $name = $request->input('name');
        DB::table('district')->insert(['name' => $name]);
        return back();
    }

    public function updatedistrict(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        DB::table('district')->where('id', $id)->update(['name' => $name]);
        return redirect('/district');
    }

    public function deletedistrict(Request $request){
        $id = $request->route('id');
        DB::table('district')->where('id',$id)->delete();
        return redirect('/district');
    }

}
