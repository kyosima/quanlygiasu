@extends('layout')
@section('content')
<style>
    .form-group{
        padding: 10px;
    }
</style>
    <form action="" method="POST">
    {{ csrf_field() }}
    <div class="table table-left">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            school information
                            </div>
        <div class="table-body">
            <div class="form-group">
                <label for="">Name</label>
            <input type="text" name="Nameschool" id="" required>
            </div>
            <div class="form-group">
                <label for="">Proposing date</label>
            <input type="date" name="Prodate" id=""  required>
            </div>
            <div class="form-group">
                <label for="">School Type</label>
                <select name="Schooltype" id="" >
                    @foreach($schooltype as $value)
                        <option value="{{$value->name}}">{{$value->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="">District</label>
                <select name="District" id="" >
                    @foreach($district as $value)
                        <option value="{{$value->name}}">{{$value->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" >
                    <option value="0">Not procesing yet</option>
                    <option value="1">Procesing</option>
                    <option value="2">Running</option>
                    <option value="3">STOP</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Intro</label>
            <textarea  name="intro" id="" cols="4" rows="5" >

            </textarea>
            </div>
        </div>
    </div>
                <div class="table table-right">
        <div class="table-title">ASSIGNED USER</div>
        <div class="form-group">
            <select name="Staffname" id="" >
                <option value=""></option>
                @foreach($user as $value)
                    <option value="{{$value->username}}">{{$value->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="table-title">FOLLOW-UP</div>
        <div class="table-body">
            <div class="form-group">
            <label for="">Content</label>
            <textarea name="Followup" id="" cols="30" rows="10" value="" required></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="login-button">Save</button>
</form>


@endsection
