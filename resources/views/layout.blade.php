<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>RainBow Adminstration System</title>
<!-- meta name="viewport" content="width=device-width, user-scalable=no">
<!-- meta name="viewport" content="width=device-width, initial-scale=1"-->
<meta charset="utf-8">
<link rel="icon" type="image/png" href="{{asset('public/images/favicon.png')}}">
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/elegant_font.css')}}">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese">
<link rel="stylesheet" href="{{asset('public/css/common.css?id=1')}}">

<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<!-- <script src="js/loadingoverlay.js')}}"></script> -->
<script src="{{asset('public/js/common.js?id=1')}}"></script>
<script type="text/javascript" src="{{asset('public/js/date_picker/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/date_picker/bootstrap-datepicker.vi.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/js/date_picker/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/pages/school_schedule.css')}}">
<script src="{{asset('public/js/pages/school_schedule.js?ver=20191008')}}"></script>

<script href="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<style> @-webkit-keyframes loadingoverlay_animation__rotate_right { to { -webkit-transform : rotate(360deg); transform : rotate(360deg); } } @keyframes loadingoverlay_animation__rotate_right { to { -webkit-transform : rotate(360deg); transform : rotate(360deg); } } @-webkit-keyframes loadingoverlay_animation__rotate_left { to { -webkit-transform : rotate(-360deg); transform : rotate(-360deg); } } @keyframes loadingoverlay_animation__rotate_left { to { -webkit-transform : rotate(-360deg); transform : rotate(-360deg); } } @-webkit-keyframes loadingoverlay_animation__fadein { 0% { opacity   : 0; -webkit-transform : scale(0.1, 0.1); transform : scale(0.1, 0.1); } 50% { opacity   : 1; } 100% { opacity   : 0; -webkit-transform : scale(1, 1); transform : scale(1, 1); } } @keyframes loadingoverlay_animation__fadein { 0% { opacity   : 0; -webkit-transform : scale(0.1, 0.1); transform : scale(0.1, 0.1); } 50% { opacity   : 1; } 100% { opacity   : 0; -webkit-transform : scale(1, 1); transform : scale(1, 1); } } @-webkit-keyframes loadingoverlay_animation__pulse { 0% { -webkit-transform : scale(0, 0); transform : scale(0, 0); } 50% { -webkit-transform : scale(1, 1); transform : scale(1, 1); } 100% { -webkit-transform : scale(0, 0); transform : scale(0, 0); } } @keyframes loadingoverlay_animation__pulse { 0% { -webkit-transform : scale(0, 0); transform : scale(0, 0); } 50% { -webkit-transform : scale(1, 1); transform : scale(1, 1); } 100% { -webkit-transform : scale(0, 0); transform : scale(0, 0); } } </style></head>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
    .table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #d9ecf7;
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
        padding:10px;
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
                            <div class="menu-item item-end">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text"><a href="{{URL::to("logout")}}">Logout</a></div>
            </div>
        </div>
    </div>
            <div class="circleBase header-button-cir" title="" data-toggle="tooltip" data-placement="left" data-original-title="Management">
        <div class="fs1" aria-hidden="true" data-icon=""></div>
        <div id="menu-system" class="menu">
            <div class="menu-item" onclick="openPage('staff.php?type=1')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Teacher</div>
            </div>
            <div class="menu-item" onclick="openPage('staff.php?type=2')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Teacher Assistant</div>
            </div>
            <div class="menu-item" onclick="openPage('staff_report.php')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Staff Report</div>
            </div>
            <div class="menu-item" onclick="openPage('resource.php')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Resource</div>
            </div>

        </div>
    </div>
            <div class="circleBase header-button-cir" title="" data-toggle="tooltip" data-placement="left" data-original-title="School">
        <div class="fs1" aria-hidden="true" data-icon=""></div>
        <div id="menu-system" class="menu">
            <div class="menu-item" onclick="openPage('{{URL::to('school_schedule')}}')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Schedule</div>
            </div>
                            <div class="menu-item" onclick="openPage('{{URL::to('school')}}'))">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">School list</div>
            </div>
            <div class="menu-item" onclick="openPage('{{URL::to('course')}}')">
                <div class="fs1" aria-hidden="true" data-icon=""></div>
                <div class="item-text">Course</div>
            </div>
            <div class="menu-item item-end" onclick="openPage('{{URL::to('evaluation')}}')">
                <div class="fs1" aria-hidden="true" data-icon="Z"></div>
                <div class="item-text">Evaluation</div>
            </div>
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
<script type="text/javascript">
$(document).ready(function() {
loadToolTips();

});

</script>
   <div class="content">
       @yield('content')
   </div>
<div class="footer"></div>
<!-- </body> -->

<!-- a href="javascript:showImage('images/logo.png', '<font color=red>Red Alert!!</font>')" class="btn btn-primary btn-large">Launch alert</a-->
<script>
function showAlert(message, closeAction, title) {
loadingOverlay(false);
if (title != null && title != '') {
    $('#alertTitle').html(title);
} else {
    $('#alertTitle').html('');
}
$('#alertMessage').html(message);
closeAction = 'closeAlert();' + closeAction;
if (closeAction != "") {
    $('#alertClose1').attr("onclick", closeAction);
    $('#alertClose2').attr("onclick", closeAction);
}
$('#linkModalAlert').click();
setTimeout(function () { $('#alertClose1').focus(); }, 500);
}
function closeAlert() {
$('#alertClose').click();
}
</script>
<a id="linkModalAlert" data-toggle="modal" href="#alertModal" style="display:none;">linkModalAlert</a>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="alertClose1" onclick="closeAlert()" class="close">×</button>
                <h4 class="modal-title" id="alertTitle" style="text-align: center;"></h4>
            </div>
            <div class="modal-body" style="text-align: center;">
                <h5 id="alertMessage"></h5>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" id="alertClose" data-dismiss="modal" style="display: none;">Đóng</button>
                <button type="button" id="alertClose2" onclick="closeAlert()" class="btn btn-primary">Đóng</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- a href="javascript:showConfirm('Ban chac chan chu', 'showAlert(\'Có lỗi xảy ra !\')')" class="btn btn-primary btn-large">Launch Confirm</a-->
<script>
    function showConfirm(message, yesAction, label, noAction) {
        yesAction += ";closeConfirm();";
        if (label != null && label != '') {
            $('#confirmLabel').html(label);
        } else {
            $('#confirmLabel').html('');
        }

        $('#confirmMessage').html(message);
        $('#confirmYes').attr('onclick', "$('#confirmClose').click();" + yesAction);
        if(noAction != null && noAction != '') {
            noAction += ";$('#confirmClose').click();";
            $('#confirmNo').attr('onclick', noAction);
        } else {
            $('#confirmNo').remove();
        }
        $('#linkModalConfirm').click();
    }
    function closeConfirm() {
        $('#confirmClose').click();
    }
</script>

<a id="linkModalConfirm" data-toggle="modal" href="#confirmConfirm" class="btn btn-primary btn-large" style="display:none">linkModalConfirm</a>
<div id="confirmConfirm" class="modal fade" tabindex="-1" style="z-index: 1044;" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="confirmLabel"></h4>
            </div>
            <div class="modal-body">
                <h5 id="confirmMessage"></h5>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-primary" id="confirmYes">Có</button>
                <button type="button" class="btn btn-primary" id="confirmNo">Không</button>
                <button type="button" class="btn btn-primary" id="confirmClose" data-dismiss="modal">Đóng</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body></html>
