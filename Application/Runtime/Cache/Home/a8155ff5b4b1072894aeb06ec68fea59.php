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
	<div class="pc_icon"><img src="/Public/images/nav_help_title1.png"></div>
	<p class="pc_name">Hi，茉莉花茶</p>
</div>
<div class="pc_hospital">
	全心全意动物医院（北辰店）
	<a href="/Home/Index/ChooseHospital" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
</div>
<div class="weui-cells pc_main">
    <a class="weui-cell weui-cell_access" href="/Home/Index/MyAppointment">
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_yuyue.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>我的预约</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <a class="weui-cell weui-cell_access" href="/Home/Index/PetCase">
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_bingli.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>宠物病例</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <a class="weui-cell weui-cell_access" href="/Home/Index/InspectionReport">
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_jianyan.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>检验报告</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <a class="weui-cell weui-cell_access" href="/Home/Index/PurchaseHistory">
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_moneylist.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>消费记录</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <a class="weui-cell weui-cell_access" href="/Home/Index/ConsumptionStatistics">
        <div class="weui-cell__hd"><img src="/Public/images/icon_pp_moneycount.png" alt="" style="width:20px;margin-right:15px;display:block"></div>
        <div class="weui-cell__bd">
            <p>消费统计</p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
</div>
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