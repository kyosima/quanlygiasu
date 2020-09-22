<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ResourceController extends Controller
{
    public function resource(Request $request){
        if ($request->session()->has('username')){
            $resource = DB::table('resource')->get();
            return view('resource',['resource' => $resource]);
        }
        else{
            return Redirect('/');
        }
    }

    public function addresource(Request $request){
        if ($request->session()->has('username')){
            return view('add_resource');
        }
        else{
            return Redirect('/');
        }
    }

    public function postaddresource(Request $request){
        $name = $request->input('name');
        $type = $request->input('type');
        $link = $request->input('link');
        $note = $request->input('note');
        DB::table('resource')->insert(['name' => $name, 'type' => $type, 'link' => $link, 'note' => $note]);
        return back();
    }

    public function editresource(Request $request){
        $id = $request->route('id');
        if($request->session()->has('username')){
            $resource = DB::table('resource')->where('id',$id)->first();
            return view('edit_resource',['resource'=>$resource]);
        }else{
            return Redirect('/');
        }
    }
    public function posteditresource(Request $request){
        $id = $request->route('id');
        $name = $request->input('name');
        $type = $request->input('type');
        $link = $request->input('link');
        $note = $request->input('note');
        DB::table('resource')->where('id', $id)->update(['name' => $name, 'type' => $type, 'link' => $link, 'note' => $note]);
        return back();
    }

    public function deleteresource(Request $request){
        $id = $request->route('id');
        DB::table('resource')->where('id',$id)->delete();
        return redirect('/resource');
    }
}
