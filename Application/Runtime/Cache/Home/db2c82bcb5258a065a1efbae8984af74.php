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
		

<div class="weui-msg">
    <div class="weui-msg__icon-area"><img src="/Public/images/icon_send.png" style="width: 25%;max-width: 160px;"></div>
    <div class="weui-msg__text-area">
        <h2 class="weui-msg__title">预约发送成功</h2>
        <p class="weui-msg__desc">请您等待医院方确认预约<br>您也可以在<a href="javascript:;">查看预约</a>里联系医院</p>
    </div>
    <div class="weui-msg__opr-area">
        <p class="weui-btn-area">
            <a href="javascript:history.back();" class="weui-btn weui-btn_primary">查看预约</a>
            <a href="javascript:history.back();" class="weui-btn weui-btn_default">返<i style="color: transparent;">返回</i>回</a>
        </p>
    </div>
    <div class="weui-msg__extra-area">
        <div class="weui-footer">
            <p class="weui-footer__links">
                <a href="javascript:void(0);" class="weui-footer__link">预约须知</a>
            </p>
        </div>
    </div>
</div>
	</div>
</body>
</html>