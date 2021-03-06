function Loading_work_zc(triggerObj_str, isleft_bool, post_data_json, create_html_func, create_tr_func, url_str, last_date_str, format_fn) {
	this.triggerObj_str = triggerObj_str;
	this.triggerObj = $(triggerObj_str);
	this.isleft = isleft_bool;
	this.isloading = false;
	this.url = url_str;
	this.info = post_data_json;
	this.create_html = create_html_func;
	this.create_tr = create_tr_func;
	this.last_date = last_date_str;
	this.format = format_fn;
}

Loading_work_zc.prototype = {
	constructor: Loading_work_zc,

	load_more: function() {
		this.triggerObj.html('加载更多');
	},

	in_loading: function() {
		this.triggerObj.html('<i class="weui-loading"></i><span class="weui-loadmore__tips">正在加载</span>');
	},

	no_more: function() {
		this.triggerObj.html('<span class="weui-loadmore__tips">无更多数据</span>').removeClass('weui-cell_access');
	},

	net_error: function() {
		var _this = this;
		this.triggerObj.html('<span class="weui-loadmore__tips">网络连接错误，点击重试</span>');
	},

	fetch_by_ajax: function(url, info) {
		var _this = this;
		console.log('isleft',_this.isleft);
		if (!_this.isleft) {
			return false;
		}

		if(!window.navigator.onLine){
			_this.isloading = false;
			_this.net_error();
			return false;
		}
		
		console.log('start loading');
		this.isloading = true;
		this.in_loading();
		this.info.Page += 1;
		console.log(this.info);
		$.ajax({
			url: url,
			type: 'POST',
			timeout: 15000,
			dataType: 'json',
			data: {info: info},
			success: function(data) {
				console.log(data);

				_this.isloading = false;

				if (data.isleft) {
					_this.load_more();
				}else{
					_this.no_more();
					_this.isleft = false;
				}

				var first_date = Object.keys(data.datas)[0];
				if (first_date === _this.last_date) {
					var html_tr = _this.create_tr(data.datas[first_date]);
					_this.triggerObj.parents('.item_content').find('.pcd_table').last().find('tbody').append(html_tr);
					var $last_num_box = _this.triggerObj.parents('.item_content').find('.weui-cell__bd').last();
					var prev_num = +$last_num_box.find('.item_num').text();
					$last_num_box.find('.item_num').text(prev_num + data.datas[first_date].length);

					var remain_commission = 0;
					for (var i = 0; i < data.datas[first_date].length; i++) {
						remain_commission += +(data.datas[first_date][i].commission);
					}
					var $last_money = _this.triggerObj.parents('.item_content').find('.item_num').last();
					var last_money = +($last_money.text().slice(1).replace(',', ''));
					$last_money.text('￥' + _this.format((remain_commission + last_money).toFixed(2)));
					delete data.datas[first_date];
				}

				var html_table = _this.create_html(data.datas);

				if (Object.keys(data.datas)[Object.keys(data.datas).length - 1]) {
					_this.last_date = Object.keys(data.datas)[Object.keys(data.datas).length - 1];
				}
				console.log('lastdata',_this.last_date);
				$(html_table).insertBefore(_this.triggerObj_str);


			},
			error: function(xhr, status) {
				if (status === 'timeout') {
					_this.isloading = false;
					_this.info.Page -= 1;
					_this.net_error();
				}
			}
		});
	},

	init: function() {
		var _this = this;
		this.triggerObj.click(function(event) {
			console.log('click');
			if (!_this.isloading) {
				_this.fetch_by_ajax(_this.url, _this.info);
			}
		});
	}
};