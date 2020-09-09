// javascript constant
var PICK_DATE_OPT = {
        format: 'dd/mm/yyyy',
        todayBtn: "linked",
        weekStart: 1,
        autoclose: true
    };
let regex = /\n/g;
let cm_ajax_action = "ajax/ajax_cm.php";
let multiId = undefined;
function openPage(url) {
	window.open (url,'_self',false);
}

function isTouchDevice(){
    return true === ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
}
function loadToolTips() {
	if(isTouchDevice()===false) {
		$('[data-toggle="tooltip"]').tooltip();  
	}
}
function removeError(item) {
	$(item).removeAttr("style");
}
function addError(item, focusItem) {
	$(item).css("border", "solid 1px red");
	if (focusItem === "") {
		focusItem = item;
	}
	return focusItem;
}
function jsonParse(data) {
	try {
		retObj = JSON.parse(data);
		return retObj;
	} catch (e) {
		showAlert(data); // error in the above string (in this case, yes)!
		return;
	}
}
/* loading overlay*/
var loadingOverlayShow = false;
function loadingOverlay(loading) {
    if (loading == true) {
        if (!loadingOverlayShow) {
            $.LoadingOverlay("show");
            loadingOverlayShow = true;
        }
    } else {
        $.LoadingOverlay("hide");
        loadingOverlayShow = false;
    }
}

function CallPrint(divId) {
		var prtContent = $("#" + divId);
		var cssAddOn = "<style>body{font-size=10px} .col-action, .paging_section{display:none} .col-date{width: 10%} .col-from, .col-to {width: 6%}</style>";
	    var WinPrint = window.open('', '', 'letf=0,top=0,width=1200,height=800,toolbar=0,scrollbars=0,status=0');
	    WinPrint.document.write('<html><head><title></title>');
	    WinPrint.document.write("<link rel='stylesheet' href='css/common.css' type='text/css' />");
	    WinPrint.document.write("<link rel='stylesheet' href='css/pages/school_schedule.css' type=\"text/css\"/>");
	    WinPrint.document.write(cssAddOn);
	    WinPrint.document.write('</head><body >');
	    WinPrint.document.write(prtContent.html());
	    WinPrint.document.write('</body></html>');
	    setTimeout(function(){
	    	WinPrint.print();
	    	WinPrint.close();
	    },300);
	    //WinPrint.print();
	    
}
/* edit Item common action */

function downloadFile(id, objName) {
	$.post(cm_ajax_action, {
		Method: 'downloadFile',
		id: id,
		objName: objName
	}, 	function(data) {
		
		if (data != "") {
			window.location.href = data;
		} else {
			showAlert('There is no file to download');
		}
	});
}

