@extends('layout')
@section('content')
<style>
    .cancel_schedule{
        background: #ffabab !important;
    }
</style>
<div>
    <div class="search-area">
        <div class="search-row">
            <div class="search-date">
                <div class="date-type">
                    Date:
                    <select id="dateType" onchange="changeDateType()">
                        <option value="">All</option>
                        <option value="1">By Month</option>
                        <option value="2">By Period</option>
                    </select>
                </div>
                <div class="by-month">
                                                Month:
                    <select id="cmbMonth">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8" selected="selected">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>

                                            Year:
                    <select id="cmbYear">
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020" selected="selected">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                    </select>
                </div>
                <div class="by-date hidden">
                    From: <input id="dateFrom" type="text">
                    To: <input id="dateTo" type="text">
                </div>
            </div>
            <div class="search-note">
                Note <input id="txtNote" type="text">
                Cancel:
                    <select id="cmbCancel">
                        <option value="">All</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
            </div>
        </div>
        <div class="search-row">

            School: <select id="cmbSchool" onchange="loadCmbTaTe()"><option value="">All</option><option value="5">Lý Cảnh Hớn (D5)</option><option value="8">Lạc Hồng</option><option value="9">Nguyễn Chí Thanh</option><option value="17">Phạm Hữu Lầu</option></select>
            Teacher: <select id="cmbTe"><option value="">All</option><option value="0">Blank</option><option value="203">Adam Halliday</option><option value="268">Alexander Feldman</option><option value="41">Allen De reuck</option><option value="247">Andrew Cullum</option><option value="167">Aust Rice</option><option value="249">Claudia</option><option value="256">Dalmain Snyman</option><option value="281">Dasha Mamont</option><option value="88">Dimitry</option><option value="286">Ed-win</option><option value="51">Emily</option><option value="21">Jacques Van der Merwe</option><option value="317">Jay Ahmet</option><option value="221">Joe Medina</option><option value="87">Johan Moolman</option><option value="204">John M Tran</option><option value="228">Karlien van Zyl</option><option value="169">Keenan</option><option value="168">Keith</option><option value="170">Kirill</option><option value="25">Lazlo Demis Ratcliffe</option><option value="218">Masood</option><option value="278">Millers Francis David</option><option value="86">Monique Botha</option><option value="238">Noor Adam</option><option value="95">Oisin</option><option value="229">Patricia</option><option value="177">Tyler</option><option value="165">William Andrew Bolland</option></select>
            TA: <select id="cmbTa"><option value="">All</option><option value="0">Blank</option><option value="191">Cao Hoàng Quyên</option><option value="340">Nguyễn Ngọc Trâm Anh</option><option value="330">Nguyễn Thị Minh Hiếu</option><option value="277">Phạm Lưu Yến Nhi</option><option value="262">Phạm Song Toàn</option><option value="257">Phạm Văn Tuấn</option><option value="199">Phan Hoài Nam</option></select>

        </div>
        <div class="search-row">
            <div class="left">
            Day: 	<select id="cmbDay">
                        <option selected="selected" value="">All</option>
                        <option value="2">Monday</option>
                        <option value="3">Tuesday</option>
                        <option value="4">Wednesday</option>
                        <option value="5">Thursday</option>
                        <option value="6">Friday</option>
                        <option value="7">Saturday</option>
                        <option value="1">Sunday</option>
                    </select>
            Class: <input id="txtClass" type="text">
            Room: <input id="txtRoom" type="text">
            </div>
            <div class="right">
                <span onclick="viewPage(1, true)" class="fs1 btn-right" style="color: #0080FF" aria-hidden="true" data-icon="U"></span>
                <span onclick="javascript:CallPrint('mainList');" style="color: #0080FF" class="fs1 btn-right" aria-hidden="true" data-icon=""></span>
                                        <span id="btnExport" onclick="download()" class="fs1 btn-right" style="color: #4caf50" aria-hidden="true" data-icon=""></span>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#schedule-table').DataTable({
            });



            $("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' + $('#schedule-table').html());
    e.preventDefault();
});
        });




    </script>
    <div class="table-title">
            SCHOOL SCHEDULE
            <a href="{{URL::to('add-schoolschedule')}}"><span class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div>
<<<<<<< HEAD
    <div>
        <table id="schedule-table" class="table table-striped table-bordered table-striped" >
=======

<br/>
<br/>
        <table id="schedule-table" class="table table-striped table-bordered table-striped display" style="width:100%;">
<<<<<<< HEAD
>>>>>>> e37f32f5581f9eb3f32540d37951b21ba7665f1e
=======
>>>>>>> e37f32f5581f9eb3f32540d37951b21ba7665f1e
            <thead>
                <tr>
                    <th></th>
                    <th>Date</th>
                    <th>School</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Teacher</th>
                    <th>Teacher Assistant</th>
                    <th>Class</th>
                    <th>Room</th>
                    <th>Book</th>
                    <th>Note<br/>(Teacher)</th>
                    <th>Note<br/>(School )</th>
                    <th>Cancel</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($schoolschedule as $value)
                    @if($value->status == 0)
                        <tr class="cancel_schedule" id="row{{$value->id}}">
                    @else
                        <tr class="" id="row{{$value->id}}">
                    @endif
                        <td class="text-center schedule-check"><input type="checkbox"/></td>
                        <td>{{date("d/m/Y",strtotime($value->date)) }}</td>
                        <td>{{$value->school}}</td>
                        <td>{{date("h:i A",strtotime($value->from)) }}</td>
                        <td>{{date("h:i A",strtotime($value->to))}}</td>
                        <td>{{$value->teacher}}</td>
                        <td>{{$value->teacher_assistant}}</td>
                        <td>{{$value->class}}</td>
                        <td>{{$value->room}}</td>
                        <td>{{$value->book}}</td>s
                        <td>{{$value->note_teacher}}</td>
                        <td>{{$value->note_school}}</td>
                        <td class="text-center schedule-status">
                                @if($value->status == 0 )
                                    <input id="cancel_sch{{$value->id}}" value="{{$value->id}}"  onclick="changestatus(this.value)" type="checkbox" checked/>
                                @else
                                    <input id="cancel_sch{{$value->id}}" value="{{$value->id}}" onclick="changestatus(this.value)" type="checkbox"/>
                                @endif
                        </td>
                        <td>
                            <div class="">
                                <a href="edit-schoolschedule/{{$value->id}}"><span class="fs1" aria-hidden="true" data-icon="j"></span></a>
                                <a href="delete-schoolschedule/{{$value->id}}"><span class="fs1" aria-hidden="true" data-icon=""></span></a>
                                <span class="fs1" aria-hidden="true" data-icon="b"></span>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<<<<<<< HEAD
        <script>
            function changestatus(id){
                $.ajax({
                    url: '<?php echo url()->current(); ?>/changestt/'+id,
                    type: 'get',
                    data: {id:id}, // serializes the form's elements.
                    
                    success: function(data)
                    {
                        if ($('#cancel_sch'+id).prop('checked')) {
                            $( "#row"+id ).addClass("cancel_schedule");
                        }else{
                            $( "#row"+id ).removeClass("cancel_schedule");
                        }

                    }
                });
            }
                
        </script>

    </div>
=======
>>>>>>> e37f32f5581f9eb3f32540d37951b21ba7665f1e
</div>
@endsection
