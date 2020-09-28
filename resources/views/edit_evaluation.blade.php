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
                    <input readonly type="text" class="form-control" name="username" id="" value="{{$evaluation->username}}" >
                </div>
                <div class="form-group-child-right">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date" id="" value="{{$evaluation->date}}"  required>
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">Teacher</label>
                    <select class="form-control" name="teacher" id="">
                        <option value="{{$evaluation->teacher}}">{{$evaluation->teacher}}</option>
                    @foreach($teachers as $value)
                        <option value="{{$value->username}}">{{$value->username}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group-child-right">
                    <label for="">Time</label>
                    <input type="time" class="form-control" name="time" id="" value="{{$evaluation->time}}" required >
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">School</label>
                    <select class="form-control" name="school" id="">
                            <option value="{{$evaluation->school}}">{{$evaluation->school}}</option>
                        @foreach($schools as $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group-child-right">
                    <label for="">Class</label>
                    <input type="text" class="form-control" name="class" id="" value="{{$evaluation->class}}" required>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Attire</label>
                    <select class="form-control" name="attire" id="">
                        @if($evaluation->class == 0)
                            <option value="0">Proper</option>
                            <option value="1">Not Proper</option>
                        @else
                            <option value="1">Not Proper</option>
                            <option value="0">Proper</option>
                        @endif
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" id="" value="{{$evaluation->description}}" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Punctuality</label>
                    <select class="form-control" name="punctuality" id="">
                        @if($evaluation->punctuality == 0)
                            <option value="0">On time</option>
                            <option value="1">Late</option>
                        @else
                            <option value="1">Late</option>
                            <option value="0">On time</option>
                        @endif
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Assigned lessons</label>
                    <select class="form-control" name="assignlessions" id="">
                        @if($evaluation->assignlessions == 0)
                            <option value="0">Match perfectly</option>
                            <option value="1">Match partially</option>
                            <option value="2">Free style</option>
                        @elseif($evaluation->assignlessions == 1)
                            <option value="1">Match partially</option>
                            <option value="0">Match perfectly</option>
                            <option value="2">Free style</option>
                        @else
                            <option value="2">Free style</option>
                            <option value="0">Match perfectly</option>
                            <option value="1">Match partially</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Teaching preparation</label>
                    <select class="form-control" name="teachingpreparation" id="">
                        @if($evaluation->teachingpreparation == 0)
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                            <option value="2">Could imporove</option>
                        @elseif($evaluation->teachingpreparation == 1)
                            <option value="1">Acceptable</option>
                            <option value="0">Excellent</option>
                            <option value="2">Could imporove</option>
                        @else
                            <option value="2">Could imporove</option>
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                        @endif
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Friendliness</label>
                    <select class="form-control" name="friendliness" id="">
                        @if($evaluation->friendliness == 0)
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                            <option value="2">Could imporove</option>
                        @elseif($evaluation->friendliness == 1)
                            <option value="1">Acceptable</option>
                            <option value="0">Excellent</option>
                            <option value="2">Could imporove</option>
                        @else
                            <option value="2">Could imporove</option>
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Applying fun activities</label>
                    <select class="form-control" name="funactivities" id="">
                        @if($evaluation->funactivities == 0)
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                            <option value="2">Could imporove</option>
                        @elseif($evaluation->funactivities == 1)
                            <option value="1">Acceptable</option>
                            <option value="0">Excellent</option>
                            <option value="2">Could imporove</option>
                        @else
                            <option value="2">Could imporove</option>
                            <option value="0">Excellent</option>
                            <option value="1">Acceptable</option>
                        @endif
                    </select>
                </div>
                <div class="form-group-child">
                    <label for="">Classroom atmosphere</label>
                    <select class="form-control" name="atmosphere" id="">
                        @if($evaluation->atmosphere == 0)
                            <option value="0">Very active</option>
                            <option value="1">Acceptable</option>
                            <option value="2">Could imporove</option>
                        @elseif($evaluation->atmosphere == 1)
                            <option value="1">Acceptable</option>
                            <option value="0">Very active</option>
                            <option value="2">Could imporove</option>
                        @else
                            <option value="2">Could imporove</option>
                            <option value="0">Very active</option>
                            <option value="1">Acceptable</option>
                        @endif
                    </select>
                </div>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>
</div>


@endsection
