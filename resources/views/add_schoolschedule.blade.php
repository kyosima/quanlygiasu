@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            add school shedule

        </div>
        <div class="table-body">
            <form action="" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group-child">
                        <label for="">Tag</label>
                        <input type="text" class="form-control" name="tag" id="" value="" >
                    </div>
                </div>
                <hr>

                <div class="form-group form-group-date">
                    <div class="form-group-child">
                        <label for="">Date</label>
                    <input type="date" class="form-control" name="date" id="" value="" required>
                    </div>
                    <div class="form-group-child">
                        <label for="">From</label>
                        <input type="time" class="form-control" name="from" id="time-from" value="" required>
                    </div>
                    <div class="form-group-child">
                        <label for="">To</label>
                        <input type="time" class="form-control" name="to" id="time-to" value="" required>
                    </div>
                </div>
                <script>


                        var from = $('#time-from');
                        from.change(function(){
                            var time = from.val();
                            var hours = parseInt(time.split(":")[0]);
                            var minutes = parseInt(time.split(":")[1]);
                            minutes = minutes + 35;
                            if(minutes >= 60){
                                minutes = minutes - 60;
                                hours = hours +1;
                                if(minutes < 10){
                                    var m = "0" + minutes.toString();
                                }else{
                                    var m =  minutes.toString();
                                }
                            }else{
                                var m =  minutes.toString();
                            }
                            if(hours < 10){
                                    var h = "0" + hours.toString();
                                }else{
                                    var h =  hours.toString();
                                }


                            var timeto = h + ":" + m;
                            document.getElementById("time-to").value = timeto;

                        });

                        </script>

                <div class="form-group form-group-school">

                    <div class="form-group-child">
                        <label for="">School</label>
                        <select id="" class="form-control" name="school">
                            <option value=""></option>
                            @foreach($school as $value)
                                <option value="{{$value->name}}">{{$value->name }}"</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-child">
                        <label for="">Class</label>
                        <input id="" class="form-control" name="class"/>
                    </div>
                </div>

                <div class="form-group form-group-course">

                    <div class="form-group-child">
                        <label for="">Course</label>
                        <select id="" class="form-control" name="course">
                            <option value=""></option>
                            @foreach($course as $value)
                                <option value="{{$value->course}}">{{$value->course}}"</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-child">
                        <label for="">Room</label>
                        <input id="" class="form-control" name="room"/>
                    </div>
                </div>

                <div class="form-group form-group-teacher">

                    <div class="form-group-child">
                        <label for="">Teacher</label>
                        <select id="" class="form-control" name="teacher">
                            <option value=""></option>
                            @foreach($teachers as $value)
                                <option value="{{$value->fullname}}">{{$value->fullname}}"</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-child">
                        <label for="">Teacher Assistant</label>
                        <select id="" class="form-control" name="teacher_assistant">
                            <option value=""></option>
                            @foreach($teachers_assistant as $value)
                                <option value="{{$value->fullname}}">{{$value->fullname}}"</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-group-note">

                    <div class="form-group-child">
                        <label for="">Note(teacher)</label>
                        <textarea id="" name="note_teacher" rows="4" cols="35">
                        </textarea>

                    </div>
                    <div class="form-group-child">
                        <label for="">Note(school)</label>
                        <textarea id="" name="note_school" rows="4" cols="35">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group-child">
                        <label for="">Status</label>
                        <select id="" class="form-control" name="status">
                            <option value="0">Cancel</option>
                            <option value="1">On going</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="login-button">Save</button>
            </form>
        </div>
    </div>





@endsection
