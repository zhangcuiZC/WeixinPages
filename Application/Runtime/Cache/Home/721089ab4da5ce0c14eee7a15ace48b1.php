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
#container, .pcd_page{
	background-color: #efeff3;
}
.pcd_page{
	top: 80px;
}
.pcd_pet_title .weui-media-box{
	padding-top: 10px;
	padding-bottom: 5px;
}
.pcd_pet_title{
	margin-top: 0;
}
.pcd_pet_title:before{
	height: 0;
	border: none;
}
.pcd_pet_detail .pcd_pet_item{
	padding: 0 8px;
	color: #212121;
	line-height: 1.8em;
}
.pcd_pet_detail .pcd_pet_item:before{
	content: "";
	position: absolute;
	width: 200%;
	height: 200%;
	left: -50%;
	top: -50%;
	border: 1px solid #c7c7c7;
	border-radius: 4px;
	transform-origin: center;
	transform: scale(.5);
	box-sizing: border-box;
}
.pcd_table{
	margin-top: 5px;
	font-size: 13px;
	color: #9b9b9b;
	line-height: 2em;
	width: 100%;
	border-spacing: 0 8px;
}
.pcd_table td{
	position: relative;
	padding: 4px 0;
}
.pcd_table tr{
	position: relative;
}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left" href="javascript:history.back();">病历单</a>
		宠物病历
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="/Home/Index/ChooseHospital" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="pcd_page page">
	<div class="weui-panel pcd_pet_title">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title">肠胃炎</h4>
				<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
			</div>
		</div>
	</div>
	<div class="weui-cells__title">病例详情</div>
	<div class="weui-panel pcd_pet_detail" style="margin-top: 0;margin-bottom: 30px;">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title" style="text-align: center;color: #4990e2;">病历单</h4>
				<table class="pcd_table">
					<tbody>
						<tr>
							<td width="60px">诊疗科目</td>
							<td class="pcd_pet_item">外科</td>
						</tr>
						<tr>
							<td>病情分类</td>
							<td class="pcd_pet_item">皮肤科</td>
						</tr>
						<tr>
							<td>就诊时间</td>
							<td class="pcd_pet_item">2017-05-04</td>
						</tr>
						<tr>
							<td>主治医生</td>
							<td class="pcd_pet_item">张海科</td>
						</tr>
						<tr>
							<td>宠物体重</td>
							<td class="pcd_pet_item">2.3kg</td>
						</tr>
						<tr>
							<td>主诉记录</td>
							<td class="pcd_pet_item">食欲正常，无拉肚子，精神活泼，之前打过一针疫苗，感冒初愈</td>
						</tr>
						<tr>
							<td>检验分析</td>
							<td class="pcd_pet_item">犬大小孢子菌感染，头部有螨虫细菌混合感染。</td>
						</tr>
						<tr>
							<td>病情诊断</td>
							<td class="pcd_pet_item">重度猫癣（3级）</td>
						</tr>
						<tr>
							<td>医<span style="color: transparent;">医嘱</span>嘱</td>
							<td class="pcd_pet_item">每日早晚喷皮特分于病灶处，一周3次药浴。每周打一次抗真菌疫苗。每日早晚喷皮特分于病灶处，一周3次药浴。每周打一次抗真菌疫苗。每日早晚喷皮特分于病灶处，一周3次药浴。每周打一次抗真菌疫苗。每日早晚喷皮特分于病灶处，一周3次药浴。每周打一次抗真菌疫苗。</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
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