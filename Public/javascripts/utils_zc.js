function thousand_separator(num) {
	return num && (num
		.toString().indexOf('.') != -1 ? num.toString().replace(/(\d)(?=(\d{3})+\.)/g, function($1, $2) {
			return $2 + ",";
		}) : num.toString().replace(/(\d)(?=(\d{3})+\b)/g, function($1, $2) {
			return $2 + ",";
		}));
}

function showDate(time){
	var date_obj = new Date(time),
		year,
		month,
		date;

	year = date_obj.getFullYear();
	month = String(date_obj.getMonth() + 1).length === 2 ? (date_obj.getMonth() + 1) : "0" + (date_obj.getMonth() + 1);
	date = String(date_obj.getDate()).length === 2 ? (date_obj.getDate()) : "0" + date_obj.getDate();
	return (year+"/"+month+"/"+date);
}

function clone_obj(obj){
	var str, newobj = obj.constructor === Array ? [] : {};
	if(typeof obj !== 'object'){
		return;
	} else if(window.JSON){
		str = JSON.stringify(obj);
		newobj = JSON.parse(str);
	} else {
		for(var i in obj){
			newobj[i] = typeof obj[i] === 'object' ? clone_obj(obj[i]) : obj[i]; 
		}
	}
	return newobj;
}

// 快速选择时间
function register_quickpick(ajax_get_all_data){
	$('.show_this_month').click(function(event) {
		var start = showDate(Date.now()).replace(/\d{2}$/,"01");
		var end = showDate(Date.now());
		if (!$(this).hasClass('active')) {
			ajax_get_all_data(start, end, 'tm');
		}
	});

	$('.show_dby').click(function(event) {
		var start = showDate(Date.now() - 2*24*3600*1000);
		if (!$(this).hasClass('active')) {
			ajax_get_all_data(start, start, 'dby');
		}
	});

	$('.show_prev_month').click(function(event) {
		var this_month_1 = showDate(Date.now()).replace(/\d{2}$/,"01").split('/');
		this_month_1[1] -= 1;
		var end = showDate(new Date(this_month_1[0], this_month_1[1], this_month_1[2])-24*3600*1000);
		var start = end.replace(/\d{2}$/,"01");
		if (!$(this).hasClass('active')) {
			ajax_get_all_data(start, end, 'pm');
		}
	});
}