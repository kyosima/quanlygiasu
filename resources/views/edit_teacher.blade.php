@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            edit teacher
        <a href="{{URL::to('deleteteacher/'.$teacher->id)}}"><span class="fs1 btn-right" aria-hidden="true" data-icon=""></span></a>
                            </div>
            <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">FullName</label>
            <input type="text" name="fullname" id="" value="{{$teacher->fullname}}">
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <label for="">Username</label>
            <input type="text" name="username" id="" value="{{$teacher->username}}">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
            <input type="number" name="phone" id="" value="{{$teacher->phone}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
            <input type="email" name="email" id="" value="{{$teacher->email}}">
            </div>
            <div class="form-group">
                <label for="">Language</label>
            <select name="language" id="">
                <option value="{{$teacher->language}}">{{$teacher->language}}</option>
                <option value="Vietnamese">Vietnamese</option>
                <option value="English">English</option>
                <option value="Vietnamese + English">Vietnamese + English</option>
            </select>
            </div>
            <div class="form-group">
                <label for="">Wordking status</label>
            <select name="status" id="">
                <option value="{{$teacher->status}}">{{$teacher->status}}</option>
                <option value="Not working yet">Not working yet</option>
                <option value="Working">Working</option>
                <option value="Pause working">Pause working</option>
                <option value="Stop working">Stop working</option>
            </select>
            </div>
            <div class="form-group">
                <label for="">Intro</label>
                <textarea name="intro" id="" cols="30" rows="10">{{$teacher->intro}}
                    </textarea>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>



@endsection
