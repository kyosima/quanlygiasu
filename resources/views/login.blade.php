<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from anhngurainbow.tk/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 08:44:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<title>RainBow Adminstration System</title>
	<!-- meta name="viewport" content="width=device-width, user-scalable=no">
	<!-- meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="i{{asset('public/mages/favicon.png')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/elegant_font.css')}}"/>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese">
	<link rel="stylesheet" href="{{asset('public/css/common681a.css?id=1')}}"/>

	<script src="{{asset('public/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/loadingoverlay.js')}}"></script>
	<script src="{{asset('public/js/common681a.js?id=1')}}"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('public/css/pages/index.css')}}"/>
</head>
<body>
	<div class="container">
		<div class="header">
	<div class="button-list">
		<div class="logo"><img src="{{asset('public/images/logo.png')}}"></div>
		        <div onclick="openPage('index-2.html')" class="circleBase header-button-cir"  title="Đăng nhập" data-toggle="tooltip" data-placement="bottom">
			<div class="fs1" aria-hidden="true" data-icon="&#xe06c;"></div>
		</div>
		    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	loadToolTips();

});
function logout() {
	$.post("ajax/ajax_cm.html", {
		Method: 'logout'
	}, function(data) {
        openPage('index-2.html');
	});
}
</script>

		<div class="content">
			<div class="login-form">
                <div class="login-header">System login</div>
                <?php
                    $messenger = Session::get('messenger');
                    if($messenger){
                        echo "<center style='color:red;'>$messenger</center>";
                        echo '<br>';
                        Session::put('messenger',null);
                    }
                ?>
				<div class="login-item">
                    <form action="" method="POST">
                    {{ csrf_field() }}
					<input id="user" type="text" placeholder="User name" name="Username" required>
					<input id="pass" type="password"  placeholder="Password" name="Password" required>
                    <input id="keep_login" value="1" type="checkbox" checked> <div class="keep_me">Keep me logged in</div>
                    <button type="submit" class="login-button">Login</button>
                </form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"></div><!--

</body> -->
</body>
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
					<button type="button" id="alertClose1" onclick="closeAlert()" class="close">&times;</button>
					<h4 class="modal-title" id="alertTitle"style="text-align: center;"></h4>
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
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
	<script type="text/javascript">
function checkEnter() {
	if (event.keyCode == 13) {
		login();
	}
}
function login() {
	let user = $("#user").val();
	let pass = $("#pass").val();
	let chk_keep = $("#keep_login:checked").val();

	if (user === '' || pass === '') {
		showAlert('Please input "User name" / "Password".');
		return;
	}
	loadingOverlay(true);
	$.post("ajax/ajax_index.html", {
		Method: 'login',
		user: user,
		pass: pass,
        chk_keep: chk_keep,

	}, 	function(data) {
		if (data != "") {
			showAlert(data);
			loadingOverlay(false);
		} else {
			openPage("index-2.html");
		}
	});
}

</script>

<!-- Mirrored from anhngurainbow.tk/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 08:44:37 GMT -->
</html>
