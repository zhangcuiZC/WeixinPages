function setup_selector(fn) {
	$('.petc_date_start').click(function(event) {
		var _this = this;
		weui.datePicker({
			start: 2000,
			end: new Date(),
			defaultValue: $(".petc_date_start").eq(0).text().split('/'),
			onConfirm: function(result){
				var start_time_choosed = result[0].value + '/' + ((('' + result[1].value).length === 2) ? result[1].value : '0' + result[1].value) + '/' + ((('' + result[2].value).length === 2) ? result[2].value : '0' + result[2].value);
				var end_time = $(".petc_date_end").eq(0).text();
				if (new Date(start_time_choosed) > new Date(end_time)) {
					start_time_choosed = end_time;
				}
				fn(start_time_choosed, end_time);
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
			defaultValue: $(".petc_date_end").eq(0).text().split('/'),
			onConfirm: function(result){
				var end_time_choosed = result[0].value + '/' + ((('' + result[1].value).length === 2) ? result[1].value : '0' + result[1].value) + '/' + ((('' + result[2].value).length === 2) ? result[2].value : '0' + result[2].value);
				var start_time = $(".petc_date_start").eq(0).text();
				if (new Date(start_time) > new Date(end_time_choosed)) {
					end_time_choosed = start_time;
				}
				fn(start_time, end_time_choosed);
			},
			id: 'ph_date_end'
		});
	});
}