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
.ma_page{
	top: 40px;
}
.ma_selectors{
	font-size: 15px;
	color: #4a4a4a;
	margin: 0;
}
.ma_selectors:before{
	height: 0;
	border: none;
}
.ma_selectors:after{
	height: 0;
	border: none;
}
.ma_selectors .weui-cell:before{
	left: 15px;
	right: 15px;
}
.ma_textarea{
	margin: 0 15px 25px;
	height: 80px;
	font-size: 13px;
	padding: 5px;
	box-sizing: border-box;
	color: #9b9b9b;
	position: relative;
}
.ma_textarea:after{
	content: "";
	position: absolute;
	box-sizing: border-box;
	width: 200%;
	height: 200%;
	left: -50%;
	top: -50%;
	transform-origin: center;
	transform: scale(0.5);
	border: 1px solid #e4e4e4;
}
.page_btn{
	margin-bottom: 30px;
}

</style>
<div class="page_fixed">
	<div class="page_header">
		<div class="page_header_left">个人中心</div>
		在线预约
		<div class="page_header_right"></div>
	</div>
</div>

<div class="ma_page page">
	<div class="weui-cells ma_selectors">
		<a class="weui-cell weui-cell_access ma_hospital_choose" href="javascript:;">
			<div class="weui-cell__bd">
				<p>医院选择</p>
			</div>
			<div class="weui-cell__ft">
			请选择
			</div>
		</a>
		<a class="weui-cell weui-cell_access ma_pet_choose" href="javascript:;">
			<div class="weui-cell__bd">
				<p>宠物选择</p>
			</div>
			<div class="weui-cell__ft">
			请选择
			</div>
		</a>
		<a class="weui-cell weui-cell_access ma_sevice_choose" href="javascript:;">
			<div class="weui-cell__bd">
				<p>服务选择</p>
			</div>
			<div class="weui-cell__ft">
			请选择
			</div>
		</a>
		<a class="weui-cell weui-cell_access ma_expect_date" href="javascript:;">
			<div class="weui-cell__bd">
				<p>期望时间</p>
			</div>
			<div class="weui-cell__ft">
			请选择
			</div>
		</a>
		<a class="weui-cell" href="javascript:;" style="color: inherit;">
			<div class="weui-cell__bd">
				<p>备<i style="color:transparent;">备注</i>注</p>
			</div>
		</a>
		<div class="ma_textarea" contenteditable="true">
			您的特殊要求，如多宠物，新宠物等
		</div>
	</div>
	<div class="page_btn">
		<a href="javascript:;" class="weui-btn weui-btn_primary">申请预约</a>
	</div>
	
</div>

<script type="text/javascript">
$(function() {
	// -----------------------各种选项，后端数据
	var hospital_options = [
		{
			label: '动物医院一',
			value: 1
		},
		{
			label: '动物医院二',
			value: 2
		},
		{
			label: '动物医院三',
			value: 3
		},
		{
			label: '动物医院四',
			value: 4
		}
	];
	var pet_options = [
		{
			label: '花花',
			value: 1
		},
		{
			label: '茶茶',
			value: 2
		},
		{
			label: '茉茉',
			value: 3
		},
		{
			label: '莉莉',
			value: 4
		}
	];
	var service_options = [
		{
			label: '按摩',
			value: 1
		},
		{
			label: '捏脚',
			value: 2
		},
		{
			label: '美容',
			value: 3
		},
		{
			label: '美发',
			value: 4
		}
	];
	// -----------------------选择调用
	$('.ma_hospital_choose').click(function(event) {
		var _this = this;
		weui.picker(hospital_options, {
			defaultValue: [1],
			onConfirm: function(result) {
				$(_this).find('.weui-cell__ft').text(result[0].label);
			},
			id: 'ma_hospital_choose'
		});
	});
	$('.ma_pet_choose').click(function(event) {
		var _this = this;
		weui.picker(pet_options, {
			defaultValue: [1],
			onConfirm: function(result) {
				$(_this).find('.weui-cell__ft').text(result[0].label);
			},
			id: 'ma_pet_choose'
		});
	});
	$('.ma_sevice_choose').click(function(event) {
		var _this = this;
		weui.picker(service_options, {
			defaultValue: [1],
			onConfirm: function(result) {
				$(_this).find('.weui-cell__ft').text(result[0].label);
			},
			id: 'ma_sevice_choose'
		});
	});
	$('.ma_expect_date').click(function(event) {
		var _this = this;
		weui.datePicker({
			start: new Date(),
			end: 2030,
			defaultValue: [new Date().getFullYear(), new Date().getMonth()+1, new Date().getDate()],
			onConfirm: function(result){
				setTimeout(function(){
					// 二级调用：时间
					show_expect_time_picker(_this, result);
				}, 1000);
			},
			id: 'ma_expect_date'
		});
	});
	// -----------------------二级调用：时间
	function show_expect_time_picker(_this, date) {
		var date = date[0].label + date[1].label + date[2].label;
		var hours = [];
		for (var i = 0; i< 24; i++) {
			var hours_item = {};
			hours_item.label = ('' + i).length === 1 ? '0' + i : '' + i;
			hours_item.value = i;
			hours.push(hours_item);
		}
		var minites = [];
		for (var j= 0; j < 60; j++) {
			var minites_item = {};
			minites_item.label = ('' + j).length === 1 ? '0' + j : '' + j;
			minites_item.value = j;
			minites.push(minites_item);
		}
		
		weui.picker(hours, minites, {
			defaultValue: [new Date().getHours()+1, 0],
			onConfirm: function(result) {
				var time = result[0].label + ':' + result[1].label;
				var expect_date = date + ' ' + time;
				$(_this).find('.weui-cell__ft').text(expect_date);
			},
			id: 'ma_expect_time'
		});
	}

	// -----------------------备注placeholder效果
	$('.ma_textarea').focus(function(event) {
		var text = $(this).text() || '';
		if (text.replace(/^\s*|\s*$/g, '') === '您的特殊要求，如多宠物，新宠物等') {
			$(this).text('');
		}
	});
	$('.ma_textarea').blur(function(event) {
		var text = $(this).text() || '';
		if (text.replace(/^\s*|\s*$/g, '') === '') {
			$(this).text('您的特殊要求，如多宠物，新宠物等');
		}
	});
});
</script>
	</div>
</body>
</html>