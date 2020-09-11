@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            add teacher
                            </div>
            <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">FullName</label>
            <input type="text" name="fullname" id="" value="" required>
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <label for="">Username</label>
            <input type="text" name="username" id="" value="" required>
            </div>
            <div class="form-group">
                <label for="">Phone</label>
            <input type="number" name="phone" id="" value="" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
            <input type="email" name="email" id="" value="" required>
            </div>
            <div class="form-group">
                <label for="">Language</label>
            <select name="language" id="">
                <option value="Vietnamese">Vietnamese</option>
                <option value="English">English</option>
                <option value="Vietnamese + English">Vietnamese + English</option>
            </select>
            </div>
            <div class="form-group">
                <label for="">Wordking status</label>
            <select name="status" id="">
                <option value="Not working yet">Not working yet</option>
                <option value="Working">Working</option>
                <option value="Pause working">Pause working</option>
                <option value="Stop working">Stop working</option>
            </select>
            </div>
            <div class="form-group">
                <label for="">Intro</label>
                <textarea name="intro" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>



@endsection
