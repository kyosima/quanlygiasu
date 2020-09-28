
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        Evaluation Form
    </div>

    <div class="table-body">
        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">User</label>
                    <input readonly type="text" class="form-control" name="username" id="" value="{{$username}}" >
                </div>
                <div class="form-group-child-right">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date" id="" value=""  required>
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">Teacher</label>
                    <select class="form-control" name="teacher" id="">
                    @foreach($teachers as $value)
                        <option value="{{$value->username}}">{{$value->username}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group-child-right">
                    <label for="">Time</label>
                    <input type="time" class="form-control" name="time" id="" value="" required >
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">School</label>
                    <select class="form-control" name="school" id="">
                        @foreach($schools as $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group-child-right">
                    <label for="">Class</label>
                    <input type="text" class="form-control" name="class" id="" value="" required>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Attire</label>
                    <select class="form-control" name="attire" id="">
                        <option value="0">Proper</option>
                        <option value="1">Not Proper</option>
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" id="" value="" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Punctuality</label>
                    <select class="form-control" name="punctuality" id="">
                        <option value="0">On time</option>
                        <option value="1">late</option>
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Assigned lessons</label>
                    <select class="form-control" name="assignlessions" id="">
                        <option value="0">Match perfectly</option>
                        <option value="1">Match partially</option>
                        <option value="2">Free style</option>
                    </select>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Teaching preparation</label>
                    <select class="form-control" name="teachingpreparation" id="" value="" >
                        <option value="0">Excellent</option>
                        <option value="1">Acceptable</option>
                        <option value="2">Could imporove</option>
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Friendliness</label>
                    <select class="form-control" name="friendliness" id="" value="" >
                        <option value="0">Excellent</option>
                        <option value="1">Acceptable</option>
                        <option value="2">Could imporove</option>
                    </select>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Applying fun activities</label>
                    <select class="form-control" name="funactivities" id="" value="" >
                        <option value="0">Excellent</option>
                        <option value="1">Acceptable</option>
                        <option value="2">Could imporove</option>
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Classroom atmosphere</label>
                    <select class="form-control" name="atmosphere" id="" value="" >
                        <option value="0">Very active</option>
                        <option value="1">Acceptable</option>
                        <option value="2">Could imporove</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>
</div>


@endsection
