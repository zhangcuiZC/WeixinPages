function Loading_work_zc(triggerObj_obj, htmlObj_obj, isleft_bool, post_data_json, create_html_func, url_str) {
	this.triggerObj = triggerObj_obj;
	this.htmlObj = htmlObj_obj;
	this.isleft = isleft_bool;
	this.isloading = false;
	this.url = url_str;
	this.info = post_data_json;
	this.create_html = create_html_func.bind(this);
}

Loading_zc.prototype = {
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

		if(window.navigator.onLine == false){
			_this.isloading = false;
			_this.net_error();
			return false;
		}
		
		console.log('start loading');
		this.isloading = true;
		this.in_loading();
		this.info.currentpage += 1;
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

				var _h = _this.create_html(data.datas);

				// 插入HTML，暂未处理
				// _this.htmlObj.append(_h);
				_this.triggerObj.data('page', _this.info.currentpage).data('isleft', data.isleft);
			},
			error: function(xhr, status) {
				if (status === 'timeout') {
					_this.isloading = false;
					_this.info.currentpage -= 1;
					_this.net_error();
				}
			}
		});
	},

	init: function() {
		this.triggerObj.click(function(event) {
			if (!_this.isloading) {
				_this.fetch_by_ajax(_this.url, _this.info);
			}
		});
	}
};