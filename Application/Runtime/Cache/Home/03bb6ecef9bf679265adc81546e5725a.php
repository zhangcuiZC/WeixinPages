<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>宠主小助手</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<link rel="stylesheet" href="/Public/stylesheets/weui.min.css?v=4">
	<link rel="stylesheet" href="/Public/stylesheets/common.css?t=<?php echo time();?>">
	<script type="text/javascript" src="/Public/javascripts/weui.min.js"></script>
	<script type="text/javascript" src="/Public/javascripts/zepto.min.js"></script>
</head>
<body ontouchstart="">
	<div id="container">
		

<style type="text/css">
#container{
	background-color: #efeff3;
}
.mya_page{
	top: 80px;
	padding-top: 10px;
	background-color: #efeff3;
}
.mya_page .weui-cell{
	height: 32px;
}
.mya_contact_box{
	font-size: 13px;
	color: #4a4a4a;
}
.mya_contact{
	padding-left: 25px;
	margin: 0 auto;
	background: url(/Public/images/icon_dianhua.png) no-repeat left -5px;
	background-size: 25px;
}
.mya_success{
	font-size: 13px;
	color: #04ad02;
	position: absolute;
	right: 15px;
	top: 15px;
	line-height: 27px;
}
.mya_waiting{
	font-size: 13px;
	color: #e75b41;
	position: absolute;
	line-height: 27px;
	right: 15px;
	top: 15px;
	text-align: center;
}
.item_cancelled{
	text-decoration: line-through;
	color: #9b9b9b !important;
}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left will_redirect" href="/WxPersonalCenter/personCenter?regcode=<?php echo ($_GET['regcode']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&regname=<?php echo ($_GET['regname']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">个人中心</a>
		我的预约
		<a class="page_header_right will_redirect" href="/WxAppointment/appointmentNotice?regcode=<?php echo ($_GET['regcode']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&regname=<?php echo ($_GET['regname']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>"></a>
	</div>
	<div class="pc_hospital">
		<?php echo ($_GET['regname']); ?>
		<?php if($_GET['ismulti'] != ''): ?><a href="/WxPersonalCenter/chooseHospital?type=APPOINT&wxid=<?php echo ($_GET['wxid']); ?>" class="weui-btn weui-btn_mini weui-btn_primary will_redirect">更换</a><?php endif; ?>
	</div>
</div>

<div class="mya_page page">
	<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-panel">
			<div class="weui-panel__bd">
				<div class="weui-media-box weui-media-box_text">
					<?php if(($vo['state'] == 2) AND ($vo['actualtime'] != $vo['expecttime'])): ?><p class="weui-media-box__desc">预约时间：<span class="item_content item_cancelled"><?php echo ($vo['expecttime']); ?></span></p>
						<p class="weui-media-box__desc">预约调整：<span class="item_content"><?php echo ($vo["actualtime"]); ?></span></p>
					<?php else: ?>
						<p class="weui-media-box__desc">预约时间：<span class="item_content"><?php echo ($vo['expecttime']); ?></span></p><?php endif; ?>
					<p class="weui-media-box__desc">预约项目：<span class="item_content"><?php echo ($vo['servicetype'] == 1 ? '手术预约' : ( $vo['servicetype'] == 2 ? '美容洗澡' : ( $vo['servicetype'] == 3 ? '门诊预约' : ( $vo['servicetype'] == 4 ? '疫苗驱虫' : ( $vo['servicetype'] == 5 ? '其他预约' : ( $vo['servicetype'] == 6 ? '回访预约' : '未知类型')))))); ?></span></p>
					<p class="weui-media-box__desc">预约宠物：<span class="item_content"><?php echo ($vo['petname']); ?></span></p>
				</div>
			</div>
			<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access contact_btn" onclick="show_contact_modal();">
				<span class="mya_contact">联系医院</span>
			</div>
			
			<?php if($vo['state'] == '0'): ?><div class="mya_waiting">
					等待确认
					<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0;" data-id="<?php echo ($vo['id']); ?>" data-urgetime="<?php echo ($vo['urgetime']); ?>" onclick="urge_appointment(event);">催医院</a>
				</div>
			<?php elseif($vo['state'] == '1'): ?>
				<div class="mya_waiting">
					取消预约
				</div>
			<?php else: ?>
				<div class="mya_success">
					预约成功
				</div><?php endif; ?>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	
	<?php if($isleft == 1): ?><div class="weui-loadmore">
		    <span class="weui-loadmore__tips click_to_load">加载更多</span>
		</div>
	<?php else: ?>
		<div class="weui-loadmore">
		    <span class="weui-loadmore__tips">无更多数据</span>
		</div><?php endif; ?>

	<!-- <div class="weui-footer" style="background-color: transparent;margin-top: 55px;padding-bottom: 30px">
		<p class="weui-footer__text" style="font-size: 13px;color: #9b9b9b;">预约成功后请准时赴约哦～</p>
	</div> -->
</div>

<div style="display: none;" class="contact_dialog">
    <div class="weui-mask"></div>
    <div class="weui-dialog">
        <div class="weui-dialog__hd"><strong class="weui-dialog__title">拨打号码</strong></div>
        <div class="weui-dialog__bd">您是否要拨打<?php echo ($_GET['regname']); ?>电话？（<?php echo ($telephone); ?>）</div>
        <div class="weui-dialog__ft">
            <a href="javascript:close_contact_modal();" class="weui-dialog__btn weui-dialog__btn_default contact_cancel">取消</a>
            <a href="tel:<?php echo ($telephone); ?>" class="weui-dialog__btn weui-dialog__btn_primary">确认</a>
        </div>
    </div>
</div>
<div class="alert_msg"></div>

<script type="text/javascript" src="/Public/javascripts/loading_zc.js?v=27"></script>
<script type="text/javascript" src="/Public/javascripts/remain_status_zc.js?v=2"></script>

<script type="text/javascript">
	// --------------------------------------------------
	// 功能函数：弹出提示框
	var show_alert_msg = (function(){
		var timer = null;
		var $alert_msg = $('.alert_msg');

		return function (msg) {
			$alert_msg.text(msg);
			if (timer) {
				clearTimeout(timer);
				$alert_msg.removeClass('active');
			}
			$alert_msg.addClass('active');
			timer = setTimeout(function() {
				$alert_msg.removeClass('active');
			}, 3000);
		};
	}());
	// -----------------------------------
	// ---------需要loading_zc.js，返回后保持ajax请求后的状态
	show_prev_html();

	// -----------------------------------
	// 联系医院modal层
	function show_contact_modal() {
		$('.contact_dialog').show();
	}
	function close_contact_modal() {
		$('.contact_dialog').hide();
	}

	function urge_appointment(event) {
		var id = $(event.target).data('id');
		var time_str = $(event.target).data('urgetime');
		var urgetime;
		if (!time_str || time_str.indexOf('0000-00-00') !== -1) {
			urgetime = 0;
		}else {
			urgetime = new Date(time_str);
		}

		if (Date.now() - urgetime >= 1800000) {
			if(window.navigator.onLine == false){
				show_alert_msg('操作失败，请检查网络连接');
				return false;
			}

			var loading_post = weui.loading('处理中...', {
			    className: 'loading_post'
			});
			var info = { id: id,wxid:"<?php echo ($_GET['wxid']); ?>"};
			var urge_url = "/WxAppointment/ajaxUrgeAppointment";
			$.ajax({
				url: urge_url,
				timeout: 15000,
				type: 'POST',
				data: {info: info},
				success: function(data) {
					var d = JSON.parse(data);
					if(d.code === 0) {
						loading_post.hide();
						weui.toast('操作成功', 2000);
						$(event.target).data('urgetime', d.data);
					}else{
						show_alert_msg('请求错误，请重试');
						loading_post.hide();
					}
				},
				error: function(xhr, status) {
					if (status === 'timeout') {
						show_alert_msg('操作失败，请检查网络连接');
						loading_post.hide();
					}
				}
			});
		}else{
			show_alert_msg('医院将尽快处理您的预约，请稍候');
		}
	}
$(function() {
	// -----------------------------------
	// ---------loading_zc.js-ajax加载数据
	// 1-是否有剩余数据
	var isleft = $('.weui-loadmore').data('isleft') !== undefined ? $('.weui-loadmore').data('isleft') : "<?php echo ($isleft); ?>";

	// 2-拼装post数据
	var regcode = "<?php echo ($_GET['regcode']); ?>";
	var consumermid = "<?php echo ($_GET['consumermid']); ?>";
	var currentpage = + ($('.weui-loadmore').data('page') || "<?php echo ($currentpage); ?>") || 1;
	var info = {
		"regcode": regcode,
		"consumermid": consumermid,
		"currentpage": currentpage
	};
	// 3-将ajax返回数据进行拼装
	function create_html(datas) {
		var len = datas.length;
		var _html = '';

		for (var i = 0; i < len; i++) {
			var data = datas[i];
			console.log(data);
			var _service = (
					data.servicetype == 1 ? '手术预约' : (
					data.servicetype == 2 ? '美容洗澡' : (
					data.servicetype == 3 ? '门诊预约' : (
					data.servicetype == 4 ? '疫苗驱虫' : (
					data.servicetype == 5 ? '其他预约' : (
					data.servicetype == 6 ? '回访预约' : '未知类型'))))));
			var state = data.state;
			var _state_html = '';

			switch(state) {
				case '0':
					_state_html = '<div class="mya_waiting">' +
								    '等待确认' +
									'<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0"' + 'data-id="' + data.id + '" data-urgetime="' + data.urgetime + '" onclick="urge_appointment(event);">催医院</a>' +
								  '</div>';
					break;
				case '1':
					_state_html = '<div class="mya_waiting">' +
				            	    '取消预约' +
			              		  '</div>';				
					break;
				case '2':
					_state_html = '<div class="mya_success">' +
				            	    '预约成功' +
			              		  '</div>';
			        break;
			}
			var _adjust = function(data) {
				if (data.state == 2 && data.actualtime !== data.expecttime) {
					return (
						'<p class="weui-media-box__desc">预约调整：<span class="item_content">' + data.actualtime + '</span></p>'
					);
				}else {
					return '';
				}
			};
			var item = '<div class="weui-panel">' +
					      '<div class="weui-panel__bd">' +
				            '<div class="weui-media-box weui-media-box_text">' +
					          '<p class="weui-media-box__desc">预约时间：<span class="item_content ' + 
					          ((data.state==2&&data.actualtime!==data.expecttime) ? 'item_cancelled' : '') + 
					          '">' + data.expecttime + '</span></p>' +
					          _adjust(data) +
					          '<p class="weui-media-box__desc">预约项目：<span class="item_content">' + _service + '</span></p>' +
					          '<p class="weui-media-box__desc">预约宠物：<span class="item_content">' + data.petname + '</span></p>' +
				            '</div>' +
			              '</div>' +
			              '<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access contact_btn" onclick="show_contact_modal();">' +
				            '<span class="mya_contact">联系医院</span>' +
			              '</div>' + 
			               _state_html +
			            '</div>';
			_html += item;
		}

		return _html;
	}
	// 4-post目标url
	var post_url = "/WxAppointment/ajaxMyAppointment";
	// 5-创建实例并加载
	var loading = new Loading_zc(isleft, info, create_html, post_url, null, bind_redirect_event);
	loading.init();
	// -----------------------------------
});
</script>
	</div>
	<script type="text/javascript">
		$(function() {
			var startY, endY;
			var box_height = $('#container').height();
			$('.page').on('touchstart', function(event) {
				event.stopPropagation();
				startY = event.touches[0].pageY;
			});
			$('.page').on('touchmove', function(event) {
				event.stopPropagation();
				var endY = event.changedTouches[0].pageY;
				var changedY = endY - startY;
				var scroll_top = $('.page').scrollTop();
				if (scroll_top === 0 && changedY > 0) {
					event.preventDefault();
				}

				var o = $('.nomore_detail').offset();
				if (o.top + o.height - 1 <= box_height && changedY < 0) {
					event.preventDefault();
				}
			});
		});

		$(window).on('pageshow', function(event) {
			if (event.persisted) {
				var loading = $('body > .loading');
				if (loading.length) {
					loading.remove();
				}
			}
		});
		function bind_redirect_event() {
			$('.will_redirect').click(function(event) {
				if(window.navigator.onLine == false){
					alert('网络错误，请检查网络连接');
					return false;
				}else{
					var loading = weui.loading('加载中...', {
					    className: 'loading'
					});
				}
			});
		}
		bind_redirect_event();
	</script>
</body>
</html>