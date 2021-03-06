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
	.an_page{
		top: 40px;
		padding: 15px;
		font-size: 13px;
		color: #9b9b9b;
	}
	.an_title{
		font-size: 18px;
		color: #4a4a4a;
		line-height: 25px;
		margin: 10px 0 20px;
	}
	.an_item_title{
		margin: 10px 0;
		color: #4a4a4a;
		padding-left: 24px;
		line-height: 20px;
	}
	.an_page .item1{
		background: url(/Public/images/1.png) no-repeat left top;
		background-size: 18px;
	}
	.an_page .item2{
		background: url(/Public/images/2.png) no-repeat left top;
		background-size: 18px;
	}
	.an_page .item3{
		background: url(/Public/images/3.png) no-repeat left top;
		background-size: 18px;
	}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left" href="javascript:history.back();">返回</a>
		预约须知
	</div>
</div>
<div class="an_page page">
	<p class="an_title">申请预约须知</p>
	<p class="an_item_title item1">等待医院确认预约</p>
	<p class="an_item_content">预约发送成功后，请您耐心等待医院确认。确认结果小助手会通过公众号发送给您。</p>
	<p class="an_item_title item2">您预约的时间也许会有调整</p>
	<p class="an_item_content">医院会尽量满足您的期望预约时间，但有时并不能满足您的时间，医院回馈给您的预约时间也许会有小调整。<br><br>当医院为您调整的时间您不满意时，或您需要修改已成功的预约时间，请在我的预约里电话联系医院。<br><br>若您想马上与医院确认一个确切时间，请选择通过电话或其他方式预约医院。</p>
	<p class="an_item_title item3">您有特殊需求时</p>
	<p class="an_item_content">若您有特殊需求，比如多只宠物，宠物药物过敏等，请填写在备注里，医院人员是会看到的哦。</p>
	<a href="/Home/Index/MakeAppointment" class="weui-btn weui-btn_primary" style="margin-top: 30px;margin-bottom: 30px;">申请预约</a>
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