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
.petc_page{
	top: 125px;
	padding-top: 10px;
	background-color: #efeff3;
}
.petc_selector{
	margin: 0;
	font-size: 13px;
	line-height: 15px;
	color: #212121;
	line-height: 45px;
	padding-left: 15px;
}
.petc_selector:before{
	height: 0;
	border: none;
}
.petc_date{
	display: inline-block;
	width: 110px;
	height: 25px;
	vertical-align: middle;
	box-sizing: border-box;
	margin: -3px 5px 0;
	position: relative;
	line-height: 27px;
	text-align: center;
	color: #9b9b9b;
}
.petc_date:before{
	content: "";
	position: absolute;
	width: 200%;
	height: 200%;
	box-sizing: border-box;
	border: 1px solid #c7c7c7;
	border-radius: 4px;
	left: -50%;
	top: -50%;
	transform-origin: center;
	transform: scale(.5);
}
.petc_page .weui-cell__ft{
	position: absolute;
	right: 15px;
	top: 0;
	height: 100%;
}
.petc_page .weui-panel__bd{
	padding-right: 40px;
}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left" href="/Home/Index/PersonCenter">个人中心</a>
		消费记录
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="/Home/Index/ChooseHospital" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
	<div class="weui-panel petc_selector">
		<div class="weui-panel__bd">
			<p>筛选：<span class="petc_date petc_date_start"></span>至<span class="petc_date petc_date_start"></span></p>
		</div>
	</div>
</div>
<div class="petc_page page">
	<a href="/Home/Index/PurchaseHistoryDetail">
		<div class="weui-panel weui-cell_access">
			<div class="weui-panel__bd">
				<div class="weui-media-box weui-media-box_text">
					<h4 class="weui-media-box__title">-￥100.00</h4>
					<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
				</div>
			</div>
			<span class="weui-cell__ft"></span>
		</div>
	</a>
	<a href="/Home/Index/PurchaseHistoryDetail">
		<div class="weui-panel weui-cell_access">
			<div class="weui-panel__bd">
				<div class="weui-media-box weui-media-box_text">
					<h4 class="weui-media-box__title">-￥8888.88</h4>
					<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
				</div>
			</div>
			<span class="weui-cell__ft"></span>
		</div>
	</a>
	<a href="/Home/Index/PurchaseHistoryDetail">
		<div class="weui-panel weui-cell_access">
			<div class="weui-panel__bd">
				<div class="weui-media-box weui-media-box_text">
					<h4 class="weui-media-box__title">-￥2.33</h4>
					<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
				</div>
			</div>
			<span class="weui-cell__ft"></span>
		</div>
	</a>
	<div style="width: 100%;height: 1px;"></div>
</div>

<script type="text/javascript">
$(function() {
	$('.petc_date').click(function(event) {
		var _this = this;
		weui.datePicker({
			start: new Date(),
			end: 2030,
			defaultValue: [new Date().getFullYear(), new Date().getMonth()+1, new Date().getDate()],
			onConfirm: function(result){
				$(_this).text(result[0].value + '-' + ((('' + result[1].value).length === 2) ? result[1].value : '0' + result[1].value) + '-' + ((('' + result[2].value).length === 2) ? result[2].value : '0' + result[2].value));
			},
			id: 'ph_date'
		});
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