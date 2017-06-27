function Loading_zc(isleft_bool, post_data_json, create_html_func, url_str, bind_position_event_func, bind_redirect_event_func) {
	this.isleft = isleft_bool;
	this.isloading = false;
	this.url = url_str;
	this.info = post_data_json;
	this.create_html = create_html_func.bind(this);
	this.box_height = $('#container').height();
	this.loading_timer = null;
	this.bind_position_event = bind_position_event_func;
	this.bind_redirect_event = bind_redirect_event_func;
}

Loading_zc.prototype = {
	constructor: Loading_zc,

	load_more: function() {
		var _this = this;
		$('.weui-loadmore').html('<span class="weui-loadmore__tips click_to_load">加载更多</span>');
		$(".click_to_load").click(function(event) {
			if (!_this.isloading) {
				_this.fetch_by_ajax(_this.url, _this.info);
			}
		});
	},

	in_loading: function() {
		$('.weui-loadmore').html('<i class="weui-loading"></i><span class="weui-loadmore__tips">正在加载</span>');
	},

	no_more: function() {
		$('.weui-loadmore').html('<span class="weui-loadmore__tips">无更多数据</span>');
	},

	net_error: function() {
		var _this = this;
		$('.weui-loadmore').html('<span class="weui-loadmore__tips click_to_load">网络连接错误，点击重试</span>');
		$(".click_to_load").click(function(event) {
			if (!_this.isloading) {
				_this.fetch_by_ajax(_this.url, _this.info);
			}
		});
	},

	show_week: function(str) {
		var _date = new Date(str);
		var day = _date.getDay();
		var week_arr=["周日","周一","周二","周三","周四","周五","周六"];
		return week_arr[day];
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
				$(_h).insertBefore('.weui-loadmore');
				$('.weui-loadmore').data('page', _this.info.currentpage).data('isleft', data.isleft);
				history.replaceState({current_html: $('.page').html()}, '', '');

				if (_this.bind_position_event) {
					_this.bind_position_event();
				}
				if (_this.bind_redirect_event) {
					_this.bind_redirect_event();
				}
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
		var _this = this;
		var startY2, endY2;
		$('.page').on('touchstart', function(event) {
			event.stopPropagation();
			startY2 = event.touches[0].pageY;
		});
		$('.page').on('touchmove', function(event) {
			event.stopPropagation();
			var endY2 = event.changedTouches[0].pageY;
			var changedY2 = endY2 - startY2;
			var o = $('.weui-loadmore').offset();
			if (o.top + o.height - 3 <= _this.box_height && changedY2 < 0) {
				event.preventDefault();
			}
		});

		$(".page").on('scroll', function(event) {

			if (!_this.isleft || _this.isloading) {
				return false;
			}
			if (_this.loading_timer) {
				clearTimeout(_this.loading_timer);
			}

			_this.loading_timer = setTimeout(function() {
				var o = $('.weui-loadmore').offset();
				if (o.top + o.height - 3 <= _this.box_height) {
					_this.fetch_by_ajax(_this.url, _this.info);
				}
			}, 100);
		});

		$(".click_to_load").click(function(event) {
			if (!_this.isloading) {
				_this.fetch_by_ajax(_this.url, _this.info);
			}
		});

		$(window).on('pageshow', function(event) {
			if (event.persisted) {
				var loading = $('body > .loading');
				if (loading.length) {
					loading.remove();
				}
				if (_this.isloading) {
					_this.isloading = false;
					_this.info.currentpage -= 1;
					_this.load_more();
				}
			}
		});
	}
};