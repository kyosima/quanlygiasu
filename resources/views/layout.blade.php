<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>RainBow Adminstration System</title>
<!-- meta name="viewport" content="width=device-width, user-scalable=no">
<!-- meta name="viewport" content="width=device-width, initial-scale=1"-->
<meta charset="utf-8">
<link rel="icon" type="image/png" href="{{asset('public/images/favicon.png')}}">
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/elegant_font.css')}}">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese">
<link rel="stylesheet" href="{{asset('public/css/common.css')}}">

<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<!-- <script src="js/loadingoverlay.js')}}"></script> -->
<script type="text/javascript" src="{{asset('public/js/date_picker/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/date_picker/bootstrap-datepicker.vi.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/js/date_picker/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/pages/school_schedule.css')}}">

<script href="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js">
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js">
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
    .form-group-react .form-group-child{
        display: table-cell;
        width: 50%;
    }
    .form-group-user-teacher-school .form-group-child-left{
        display: table-cell;
        width: 80%;
    }

    .form-group-user-teacher-school .form-group-child-right{
        display: table-cell;
        padding-left: 5px;
        width: 20%;
    }
    .schedule-status input, .schedule-check input{
        margin: auto;
        height: unset !important;
    }
    .form-group-child{
        padding: 0 5px;
    }
    .form-group-note textarea{
        width: 100%;
    }
    .form-group-react, .form-group-user-teacher-school, .form-group-school, .form-group-course, .form-group-date, .form-group-teacher, .form-group-note{
        padding: 3px;
        display: table !important;
        width: 100% !important;
        border-bottom: 1px dashed #ddd;
    }
    .form-group-date .form-group-child{

        display: table-cell;
        width: 33.33%;
    }
    .form-group-school .form-group-child, .form-group-course .form-group-child, .form-group-teacher .form-group-child, .form-group-note .form-group-child{
        display: table-cell;
        width: 50%;
    }
    .toolbar-table{
        width: 100%;
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #d9ecf7;
    }
    .dataTables_length, .dataTables_filter{
        display: none;
    }
    .edit:hover{
        text-decoration: underline;
    }
    .login-button {
    display: block;
    width: 100%;
    height: 42px;
    margin-top: 20px;
    font-size: 16px;
    font-weight: bold;
    color: #494d59;
    text-align: center;
    text-shadow: 0 1px rgba(255, 255, 255, 0.5);
    background: #fcfcfc;
    border: 1px solid;
    border-color: #d8d8d8 #d1d1d1 #c3c3c3;
    border-radius: 2px;
    cursor: pointer;
    background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
    background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
    -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
    box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
}
    .content{
        padding:10px !important;
    }
    .form-group{
        display: inline-grid;
        width: 100%;
    }
   input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    height: 40px;
    border: 1px solid #e2e2e2;
    border-radius: 10px;
    padding-left: 10px;
}
</style>
<body cz-shortcut-listen="true">
<div class="container">
    <div class="header">
<div class="button-list">
    <div class="logo"><img src="{{asset('public/images/logo.png')}}"></div>

    <div id="btnProfile" class="circleBase header-button-cir" title="" data-toggle="tooltip" data-placement="left" data-original-title="System">
        <div class="fs1" aria-hidden="true" data-icon=""></div>
        <div id="menu-system" class="menu">
            <a href="{{URL::to("logout")}}">
            <div class="menu-item item-end">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Logout</div>
            </div>
        </a>
        </div>
    </div>
            <div class="circleBase header-button-cir" title="" data-toggle="tooltip" data-placement="left" data-original-title="Management">
        <div class="fs1" aria-hidden="true" data-icon=""></div>
        <div id="menu-system" class="menu">
        <a href="{{url::to('teacher')}}">
                <div class="menu-item" >
                    <div class="fs1" aria-hidden="true" data-icon=""></div>
                    <div class="item-text">Teacher</div>
                </div>
            </a>
        <a href="{{url::to('teacher-assistant')}}">
            <div class="menu-item" onclick="openPage('staff.php?type=2')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Teacher Assistant</div>
            </div>
        </a>
            <div class="menu-item" onclick="openPage('staff_report.php')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Staff Report</div>
            </div>
        <a href="{{url::to('resource')}}">
            <div class="menu-item">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Resource</div>
            </div>
        </a>
        <a href="{{URL::to('course')}}">
            <div class="menu-item">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Course</div>
            </div>
        </a>
        <a href="{{URL::to('district')}}">
            <div class="menu-item">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                    <div class="item-text">District</div>
            </div>
        </a>
        <a href="{{URL::to('schooltype')}}">
            <div class="menu-item">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                    <div class="item-text">School type</div>
            </div>
        </a>

        </div>
    </div>
            <div class="circleBase header-button-cir" title="" data-toggle="tooltip" data-placement="left" data-original-title="School">
        <div class="fs1" aria-hidden="true" data-icon=""></div>
        <div id="menu-system" class="menu">
            <a href="{{URL::to('school_schedule')}}">
                <div class="menu-item">
                    <div class="fs1" aria-hidden="true" data-icon=""></div>
                    <div class="item-text">Schedule</div>
                </div>
            </a>
                <a href="{{URL::to('school')}}">
                <div class="menu-item">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">School list</div>
            </div>
        </a>

            <a href="{{URL::to('evaluation')}}">
                <div class="menu-item item-end" >
                    <div class="fs1" aria-hidden="true" data-icon="Z"></div>
                    <div class="item-text">Evaluation</div>
                </div>
            </a>

                        </div>
    </div>
    <!--div id="btnProfile" class="circleBase header-button-cir"  title="Center" data-toggle="tooltip" data-placement="left">
        <div class="fs1" aria-hidden="true" data-icon="&#xe0d9;"></div>
        <div id="menu-system" class="menu">

            <div class="menu-item item-end" onclick="openPage('center_schedule.php')">
                <div class="fs1" aria-hidden="true" data-icon="&#xe025;"></div>
                <div class="item-text">schedule</div>
            </div>
        </div>
    </div-->

        <!-- >div onclick="openPage('school.php')" class="circleBase header-button-cir"  title="Trường" data-toggle="tooltip" data-placement="bottom">
            <div class="fs1" aria-hidden="true" data-icon="&#xe0fd;"></div>
        </div-->

        </div>
</div>

   <div class="content">
       @yield('content')
   </div>
<div class="footer"></div>
<!-- </body> -->

<!-- a href="javascript:showImage('images/logo.png', '<font color=red>Red Alert!!</font>')" class="btn btn-primary btn-large">Launch alert</a-->


<!-- a href="javascript:showConfirm('Ban chac chan chu', 'showAlert(\'Có lỗi xảy ra !\')')" class="btn btn-primary btn-large">Launch Confirm</a-->

</body></html>
