function setup_selector(starttime, endtime) {
	$('.petc_date_start').click(function(event) {
		var _this = this;
		weui.datePicker({
			start: 2000,
			end: new Date(),
			defaultValue: starttime.split('-'),
			onConfirm: function(result){
				var start_time_choosed = result[0].value + '-' + ((('' + result[1].value).length === 2) ? result[1].value : '0' + result[1].value) + '-' + ((('' + result[2].value).length === 2) ? result[2].value : '0' + result[2].value);
				var end_time = $(".petc_date_end").eq(0).text();
				if (new Date(start_time_choosed) > new Date(end_time)) {
					start_time_choosed = end_time;
				}
				if (window.location.href.indexOf('starttime') > -1) {
					var url = window.location.pathname + window.location.search;
					url = url.replace(/starttime=(.{10})/, 'starttime=' + start_time_choosed).replace(/endtime=(.{10})/, "endtime=" + end_time) + window.location.hash;

				}else {
					var url = window.location.pathname + (window.location.search ? (window.location.search + '&') : '?') + 'starttime=' + start_time_choosed + "&endtime=" + end_time + window.location.hash;
				}
				window.location = url;
			},
			id: 'ph_date_start'
		});
	});
	$('.petc_date_end').click(function(event) {
		var _this = this;
		var url = window.location.href;
		weui.datePicker({
			start: 2000,
			end: new Date(),
			defaultValue: endtime.split('-'),
			onConfirm: function(result){
				var end_time_choosed = result[0].value + '-' + ((('' + result[1].value).length === 2) ? result[1].value : '0' + result[1].value) + '-' + ((('' + result[2].value).length === 2) ? result[2].value : '0' + result[2].value);
				var start_time = $(".petc_date_start").eq(0).text();
				if (new Date(start_time) > new Date(end_time_choosed)) {
					end_time_choosed = start_time;
				}
				if (window.location.href.indexOf('starttime') > -1) {
					var url = window.location.pathname + window.location.search;
					url = url.replace(/starttime=(.{10})/, 'starttime=' + start_time).replace(/endtime=(.{10})/, "endtime=" + end_time_choosed) + window.location.hash;

				}else {
					var url = window.location.pathname + (window.location.search ? (window.location.search + '&') : '?') + 'starttime=' + start_time + "&endtime=" + end_time_choosed + window.location.hash;
				}
				window.location = url;
			},
			id: 'ph_date_end'
		});
	});
}