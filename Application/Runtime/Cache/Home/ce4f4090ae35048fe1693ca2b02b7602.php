<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>宠主助手-dev</title>
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
.ch_page{
	top: 80px;
	padding-top: 10px;
	background-color: #efeff3;
}
.ch_header{
	height: 80px;
	background: #4990e2 url(/Public/images/ch_bg.png) no-repeat center;
	background-size: auto 80px;
}
.ch_page .weui-cell__ft{
	position: absolute;
	right: 15px;
	top: 0;
	height: 100%;
}
.ch_page .weui-panel__bd{
	padding-right: 40px;
}
.ch_pet_num{
	color: #e75b42;
}
</style>

<div class="page_fixed">
	<div class="ch_header"></div>
</div>
<div class="ch_page page">
	<div class="weui-panel weui-cell_access">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title">全心全意动物医院(朝阳）</h4>
				<p class="weui-media-box__desc">我的宠物<span class="ch_pet_num">（2）</span>：how do you do how do you do how do you do</p>
			</div>
		</div>
		<span class="weui-cell__ft"></span>
	</div>
	<div class="weui-panel weui-cell_access">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title">全心全意动物医院(朝阳）</h4>
				<p class="weui-media-box__desc">我的宠物<span class="ch_pet_num">（2）</span>：花花 花花 花花 花花 花花 花花 花花花 花花花 花花花花</p>
			</div>
			
		</div>
		<span class="weui-cell__ft"></span>
	</div>
	<div class="weui-footer" style="background-color: transparent;margin-top: 55px;padding-bottom: 30px;">
		<p class="weui-footer__text" style="font-size: 13px;color: #9b9b9b;">请放心选择，随时可切换医院～</p>
	</div>
</div>

<script type="text/javascript">
$(function() {
	$('.weui-cell_access').click(function(event) {
		window.location = document.referrer;
	});
});
</script>
	</div>

	<script type="text/javascript">
		var loading = weui.loading('加载中...', {
		    className: 'loading'
		});
		window.onload = function(){
			setTimeout(function(){
				loading.hide();
			}, 100);
		}
	</script>
</body>
</html>