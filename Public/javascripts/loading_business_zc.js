function Loading_business_zc(triggerObj_str, isleft_bool, post_data_json, type_str, url_str, format_fn, pagenum_str) {
	this.triggerObj_str = triggerObj_str;
	this.triggerObj = $(triggerObj_str);
	this.isleft = isleft_bool;
	this.isloading = false;
	this.url = url_str;
	this.info = post_data_json;
	this.type = type_str;//'hot','pchs'
	this.format = format_fn;
	this.pagenum = +pagenum_str;
}

Loading_business_zc.prototype = {
	constructor: Loading_business_zc,

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
		this.triggerObj.html('<span class="weui-loadmore__tips">网络连接错误，点击重试</span>');
	},

	create_tr: function(datas) {
		var html = '';
		var name = 'name';
		if (this.type === 'pchs') {
			name = 'commodityname';
		}

		for (var i = 0; i < datas.length; i++) {
			html += '<tr>' +
						'<td>' + ((this.info.Page - 1) * this.pagenum + i + 1) + '</td>' +
						'<td>' + datas[i][name] + '</td>' +
						'<td>' + this.format((+datas[i].sumquantity).toFixed(0)) + '</td>' +
						'<td>' + this.format((+datas[i].summoney).toFixed(2)) + '</td>' +
					'</tr>';
		}

		return html;
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

				var html = _this.create_tr(data.datas);
				_this.triggerObj.parents('.item_content').find('tbody').append(html);
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