let ajax_action = "ajax/ajax_school_schedule.php";
let cmb_loaded = false;
$(document).ready(function() {
	loadCmbData();
	viewPage();
	
});

function loadCmbData() {
	$.post(ajax_action, {
		Method: 'loadCmbData'
	}, 	function(data) {		
    	retObj = JSON.parse(data);
       	ajax_status = retObj.ajax_status;
       	if (ajax_status == "test") {
       		showAlert(data);
       	}
		if (ajax_status == "success") {
			$("#cmbSchool").html(retObj.cmbSchool);
			$("#cmbTa").html(retObj.cmbTa);
			$("#cmbTe").html(retObj.cmbTe);
			cmb_loaded = true;
		}
	});
}
let p_all_ta = "";
let p_all_te = "";
function loadCmbTaTe() {
	if (p_all_ta === "") {
        p_all_ta = $("#cmbTa").html();
        p_all_te = $("#cmbTe").html();
	}
	let school_id = $("#cmbSchool").val();
	if (school_id === "" || school_id === "0") {
        $("#cmbTa").html(p_all_ta);
        $("#cmbTe").html(p_all_te);
		return;
	}

    $.post(ajax_action, {
        Method: 'loadCmbTaTe',
        school_id: school_id,
    }, 	function(data) {
        retObj = JSON.parse(data);
        ajax_status = retObj.ajax_status;
        if (ajax_status == "test") {
            showAlert(data);
        }
        if (ajax_status == "success") {
            $("#cmbTa").html(retObj.cmbTa);
            $("#cmbTe").html(retObj.cmbTe);
        }
    });
}
function createSearchCond(method, page) {
	var dateFrom = "";
	var dateTo = "";
	var cmbMonth = "";
	var cmbYear = "";
	var dateType = $("#dateType").val();
	if (dateType == 1) {
		cmbMonth = $('#cmbMonth').val();
		cmbYear = $('#cmbYear').val();
	} else if (dateType == 2) {
		dateFrom = $('#dateFrom').val();
		dateTo = $('#dateTo').val();
	} 
	var note = $("#txtNote").val();
	var cmbSchool = $("#cmbSchool").val();
	var cmbCancel = $("#cmbCancel").val();
	var cmbTe = $("#cmbTe").val();
	var cmbTa = $("#cmbTa").val();
	var cmbDay = $("#cmbDay").val();
	var txtClass = $("#txtClass").val();
	var txtRoom = $("#txtRoom").val();
	
	searchData = {
			Method: method,
			page: page,
			dateType: dateType,
			cmbMonth: cmbMonth,
			cmbYear: cmbYear,
			dateFrom: dateFrom,
			dateTo: dateTo,
			txtNote: note,
			cmbSchool: cmbSchool,
			cmbCancel: cmbCancel,
			cmbTe: cmbTe,
			cmbTa: cmbTa,
			cmbDay: cmbDay,
			txtClass: txtClass,
			txtRoom: txtRoom,
		};
	
	return searchData;
}

function setSearchCond(searchData) {
	if (cmb_loaded == false) {
		setTimeout(function(){ setSearchCond(searchData); }, 800);
		return;
	}
	searchData = searchData.replace(/}/g, "");
	searchData = searchData.replace(/{/g, "");
	searchData = searchData.replace(/"/g, "");
	arrSearch = searchData.split(",");
	
	for (i = 0; i < arrSearch.length; i++) {
		sItem = arrSearch[i];
		arrItem = sItem.split(":");
		if (arrItem[0] == "Method" || arrItem[0] == "page") {
			continue;
		}
		
		if (arrItem.length > 1 ) {
			id = arrItem[0];
			vl = arrItem[1];
			if (vl != "") {
				$("#" + id).val(vl);
			}
		}
	}
	changeDateType();
    loadCmbTaTe();
}

function viewPage(page, newCond) {
	// getCondition from storage
	var search = "";
	
	if (newCond) {
		search = createSearchCond("viewPage", 1);
		localStorage.schoolSearch = JSON.stringify(search);
	} else {
		if (localStorage.schoolSearch) {
			setSearchCond(localStorage.schoolSearch);
			search = jsonParse(localStorage.schoolSearch);
			if (page != undefined) {
				search.page = page;
				localStorage.schoolSearch = JSON.stringify(search);
			}
		} else {
			search = createSearchCond("viewPage", page);
		    localStorage.schoolSearch = JSON.stringify(search);
		}
	}
	p_page = page;
	loadingOverlay(true);
	//var search = $("#txtSearch").val();
	cPage = page;
	$.post(ajax_action, search, function(data) {
		if (data != "") {
			$("#mainList").html(data);
		} 
		loadingOverlay(false);
	});
}
function download() {
	loadingOverlay(true);
	search = createSearchCond("download", 0);
	
	$.post(ajax_action, search, function(data) {
		//showAlert(data);
		if (data != "") {
			window.location.href = "data/" + data;
			loadingOverlay(false);
		} else {
			showAlert("No data to download");
		}
		
		
	});
}
function downloadRes(file_name) {
	window.location.href = "data/upload/resource/" + file_name;
}
function checkAll() {
	$(".chk_id").prop('checked', $("#checkAll").prop('checked'));
}
function deleteId(id, confirm) {
	if (confirm == undefined) {
		showConfirm("Are you sure to delete this schedule ?", "deleteId(" + id + ", 'Ok')");
		return;
	}
	$.post(ajax_action, {
		Method: 'deleteData',
		id: id		
	}, function(data) {	
		if (data != "") {
			showAlert(data);
			return;
		}
		viewPage(cPage);
	});
}
function deleteData(confirm) {
	arrDelId = "";
	$( ".chk_id:checkbox:checked " ).each(function() {
		if (arrDelId != "") {
			arrDelId += ",";
		} 
		arrDelId += this.id;
	});
	if (arrDelId == "") {
		showAlert("You need check 1 row or more rows to delete");
		return;
	}
	if (confirm == undefined) {
		showConfirm("Are you sure to delete this schedule ?", "deleteData('Ok')");
		return;
	}
	
	
	$.post(ajax_action, {
		Method: 'deleteData',
		id: arrDelId		
	}, function(data) {	
		if (data != "") {
			showAlert(data);
			return;
		}
		viewPage(cPage);
	});
}
function multiEdit() {
	arrDelId = "";
	$( ".chk_id:checkbox:checked " ).each(function() {
		if (arrDelId != "") {
			arrDelId += ",";
		} 
		arrDelId += this.id;
	});
	if (arrDelId == "") {
		showAlert("You need check 2 rows or more rows to multi Edit");
		return;
	}
	openPage('school_schedule_edit.php?mainId=' + arrDelId + '&mode=multi');
}
function cancelRow(id, val, confirm) {
	if (confirm == undefined) {
		$("#status-" + id).removeAttr("checked");
		showConfirm("Are you sure to cancel this schedule ?", "cancelRow(" + id + ", "+val+",'Ok')");
		return;
	}
	if (val == "1") {
		$("#status-" + id).prop('checked', true);
	}
	
	$.post(ajax_action, {
		Method: 'cancelRow',
		id: id,
		val: val
	}, function(data) {	
		if (data == "") {
			showAlert("The record has been deleted by some one. The page will be reloaded");
			viewPage(cPage);
			return;
		}
		if (val == "1") {
			$("#row-" + id).addClass("row_cancel");
		} else {
			$("#row-" + id).removeClass("row_cancel");
		}
		$("#status-" + id).attr("onclick", "cancelRow(" + id + ", " + data + ")");
	});
}