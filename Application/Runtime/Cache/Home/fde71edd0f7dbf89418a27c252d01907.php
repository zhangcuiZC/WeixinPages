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
.pc_header{
	width: 100%;
	height: 144px;
	font-size: 13px;
	color: #fff;
	box-sizing: border-box;
	padding-top: 25px;
	background: url(/Public/images/pc_bg.png) no-repeat center;
	background-size: cover;
}
.pc_icon{
	width: 60px;
	height: 60px;
	border: 3px solid #fff;
	box-shadow: 0 0 10px 0 rgba(255,255,255,0.8);
	overflow: hidden;
	border-radius: 50%;
	margin: 0 auto 10px;
}
.pc_icon img{
	width: 100%;
	height: 100%;
}
.pc_name{
	text-align: center;
}
.pc_hospital{
	font-size: 13px;
	color: #4a4a4a;
	padding: 0 15px;
	height: 40px;
	line-height: 40px;
	background-color: #f0f0f0;
	position: relative;
}
.pc_hospital:after{
	content: "";
	height: 0;
	width: 100%;
	border-bottom: 1px solid #c7c7c7;
	position: absolute;
	bottom: 0;
	left: 0;
	transform-origin: center bottom;
	transform: scaleY(.5);
}
.pc_main{
	margin-bottom: 30px;
}
.pc_main:before{
	height: 0;
	border: none;
}
</style>

<div class="pc_header">
	<div class="pc_icon"><img src="/Public/images/touxiang@2x.png"></div>
	<p class="pc_name"><?php echo ($info['consumername']); if($info['consumermobile']){echo '(' . $info['consumermobile'] . ')';} ?></p>
</div>
<div class="pc_hospital">
	<?php echo ($_GET['regname']); ?>
	<?php if($_GET['ismulti'] != ''): ?><a href="/WxPersonalCenter/chooseHospital?type=HOME&wxid=<?php echo ($_GET['wxid']); ?>" class="weui-btn weui-btn_mini weui-btn_primary will_redirect" >更换</a><?php endif; ?>
</div>
<div class="weui-cells pc_main">
	<?php if($info['isappointment'] == '1'): ?><a class="weui-cell weui-cell_access will_redirect" href="/WxAppointment/myAppointment?regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">
    <?php else: ?>
    	<a class="weui-cell weui-cell_access" href="javascript:show_alert_msg('<?php echo ($_GET['regname']); ?>尚未开通该功能');"><?php endif; ?>
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_yuyue.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>我的预约</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>

    <?php if($info['isreport'] == '1'): ?><a class="weui-cell weui-cell_access will_redirect" href="/WxPetCase/petCase?regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">
    <?php else: ?>
    	<a class="weui-cell weui-cell_access" href="javascript:show_alert_msg('<?php echo ($_GET['regname']); ?>尚未开通该功能');"><?php endif; ?>
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_bingli.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>宠物病历</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>

	<?php if($info['isexamine'] == '1'): ?><a class="weui-cell weui-cell_access will_redirect" href="/WxInspection/inspectionReport?regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">
    <?php else: ?>
    	<a class="weui-cell weui-cell_access" href="javascript:show_alert_msg('<?php echo ($_GET['regname']); ?>尚未开通该功能');"><?php endif; ?>
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_jianyan.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>检验报告</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>

    <?php if($info['isbill'] == '1'): ?><a class="weui-cell weui-cell_access will_redirect" href="/WxPurchase/purchaseHistory?regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">
    <?php else: ?>
    	<a class="weui-cell weui-cell_access" href="javascript:show_alert_msg('<?php echo ($_GET['regname']); ?>尚未开通该功能');"><?php endif; ?>
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_moneylist.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>消费记录</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
</div>
<div class="alert_msg"></div>
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