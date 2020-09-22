@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table table-left">
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
                        <input type="time" class="form-control" name="from" id="" value="" required>
                    </div>
                    <div class="form-group-child">
                        <label for="">To</label>
                        <input type="time" class="form-control" name="to" id="" value="" required>
                    </div>
                </div>

                <div class="form-group form-group-course">

                    <div class="form-group-child">
                        <label for="">Course</label>
                        <select id="" class="form-control" name="course">
                            <option value="0">Cancel</option>
                            <option value="1">On going</option>
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
                            <option value="0">Cancel</option>
                            <option value="1">On going</option>
                        </select>
                    </div>
                    <div class="form-group-child">
                        <label for="">Teacher Assistant</label>
                        <select id="" class="form-control" name="teacher_assistant">
                            <option value="0">Cancel</option>
                            <option value="1">On going</option>
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

    <div class="table table-right">
        <div class="table-title">Tool</div>
        <div class="table-body">
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Ta_id"> &nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">
                    <button type="button" class="btn btn-default" onclick="dataClone()">Clone</button>
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title">&nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">
                    <button type="button" class="btn btn-default" onclick="dataApply()">Apply</button>
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title">&nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">
                    <button type="button" class="btn btn-default" onclick="doPush()">Push</button>
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">Loop number</span>
                </div>
                <div class="item-content">
                    <input id="loopNum" value="1" type="text" class="form-control">
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">Add day</span>
                </div>
                <div class="item-content">
                    <input id="addDay" value="7" type="text" class="form-control">
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">&nbsp;</span>
                </div>
                <div class="item-content" style="text-align: center;">
                    <button onclick="dataLoop()" type="button" class="btn btn-default">Loop</button>
                </div>
            </div>

            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">Number of Week</span>
                </div>
                <div class="item-content">
                    <input id="weekNum" value="1" type="text" class="form-control">
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">Day Start</span>
                </div>
                <div class="item-content">
                    <input id="startDay" type="text" placeholder="Choose the start week" class="form-control">
                    <script type="text/javascript">
                        $(function() {
                            $('#startDay').datepicker(PICK_DATE_OPT);
                        });
                    </script>
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Loop">&nbsp;</span>
                </div>
                <div class="item-content" style="text-align: center;">
                    <button onclick="weekLoop()" type="button" class="btn btn-default">Week Loop</button>
                </div>
            </div>

            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Ta_id">&nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">
                    <button type="button" class="btn btn-default" onclick="dataDirection('back')">&lt; &lt;</button>
                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Ta_id">&nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">

                </div>
            </div>
            <div class="item-info box-sperator sp1-3">
                <div class="item-title">
                    <span class="title-name" id="title-Ta_id">&nbsp;</span>
                </div>
                <div class="item-content " style="text-align: center;">
                    <button type="button" class="btn btn-default" onclick="dataDirection('next')">&gt; &gt;</button>
                </div>
            </div>
        </div>
    </div>




@endsection
