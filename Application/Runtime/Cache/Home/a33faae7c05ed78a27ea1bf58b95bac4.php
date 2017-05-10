<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>宠主助手-dev</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<link rel="stylesheet" href="/Public/stylesheets/weui.min.css">
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
</style>

<div class="page_fixed">
	<div class="page_header">
		<div class="page_header_left">个人中心</div>
		我的预约
		<div class="page_header_right"></div>
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="mya_page page">
	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_success">
			预约成功
		</div>
	</div>

	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content" style="text-decoration: line-through;">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约调整：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_success">
			预约成功
		</div>
	</div>

	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_waiting">
			等待确认
			<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0">催医院</a>
		</div>
	</div>
	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_waiting">
			等待确认
			<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0">催医院</a>
		</div>
	</div>
	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_waiting">
			等待确认
			<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0">催医院</a>
		</div>
	</div>
	<div class="weui-panel">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<p class="weui-media-box__desc">预约时间：<span class="item_content">2017/09/03 16:00</span></p>
				<p class="weui-media-box__desc">预约项目：<span class="item_content">美容洗澡</span></p>
				<p class="weui-media-box__desc">预约时间：<span class="item_content">花花</span></p>
			</div>
		</div>
		<div class="weui-panel__ft weui-cell mya_contact_box weui-cell_access">
				<span class="mya_contact">联系医院</span>
		</div>
		<div class="mya_waiting">
			等待确认
			<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_warn" style="display: block;width: 60px;padding: 0">催医院</a>
		</div>
	</div>
	<div class="weui-footer" style="background-color: transparent;margin-top: 55px;padding-bottom: 30px">
		<p class="weui-footer__text" style="font-size: 13px;color: #9b9b9b;">预约成功后请准时赴约哦～</p>
	</div>
</div>
	</div>
</body>
</html>