@extends('layout')
@section('content')
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
                    <script type="text/javascript">
                    // add date picker
                    $(function () {
                        $('#dateFrom').datepicker(PICK_DATE_OPT);
                        $('#dateTo').datepicker(PICK_DATE_OPT);
                    });
                    // function show view type
                    function changeDateType() {
                        $(".by-month").addClass("hidden");
                        $(".by-date").addClass("hidden");
                        dateType = $("#dateType").val();
                        if (dateType == "1") {
                            $(".by-month").removeClass("hidden");
                        }
                        if (dateType == "2") {
                            $(".by-date").removeClass("hidden");
                        }
                    }
                    </script>
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
                                        <span onclick="download()" class="fs1 btn-right" style="color: #4caf50" aria-hidden="true" data-icon=""></span>
            </div>
        </div>
    </div>

    <div class="table">
        <div class="table-title">
            SCHOOL SCHEDULE
                            </div>
        <div id="mainList" class="table-body">There is no record match with your search condition!</div>
    </div>
</div>
@endsection