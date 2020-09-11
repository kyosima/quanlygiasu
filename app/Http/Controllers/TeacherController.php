<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //teacher
    public function teacher(Request $request){
        if ($request->session()->has('username')){
            $teacher = DB::table('Teachers')->get();
            return view('teacher',['teacher'=>$teacher]);
        }
        else{
            return Redirect('/');
        }
    }

    public function addteacher(Request $request){
        if ($request->session()->has('username')){
            return view('add_teacher');
        }
        else{
            return Redirect('/');
        }
    }
    public function postaddteacher(Request $request){
        $fullname = $request->input('fullname');
        $username = $request->input('username');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $language = $request->input('language');
        $status = $request->input('status');
        $intro = $request->input('intro');
        DB::table('Teachers')->insert(['username'=>$username, 'fullname'=>$fullname, 'email'=>$email, 'phone'=>$phone, 'language'=>$language, 'status'=>$status, 'intro'=>$intro]);
        return redirect('/teacher');
    }

    public function editteacher(Request $request){
        $id = $request->route('id');
        if($request->session()->has('username')){
        $teacher = DB::table('Teachers')->where('id',$id)->first();
        return view('edit_teacher',['teacher'=>$teacher]);
        }
        else{
            return Redirect('/');
        }
    }
    public function posteditteacher(Request $request){
        $id = $request->route('id');
        $username = $request->input('username');
        $fullname = $request->input('fullname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $language = $request->input('language');
        $status = $request->input('status');
        $intro = $request->input('intro');
        DB::table('Teachers')->where('id',$id)->update(['username'=>$username, 'fullname'=>$fullname, 'email'=>$email, 'phone'=>$phone, 'language'=>$language, 'status'=>$status, 'intro'=>$intro]);
        return redirect('/teacher');
    }
    public function deleteteacher(Request $request){
        $id = $request->route('id');
        DB::table('Teachers')->where('id',$id)->delete();
        return redirect('/teacher');
    }

}
