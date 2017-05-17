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
.ma_page{
	top: 40px;
	/*padding-bottom: 150%;*/
}
.ma_page.inputing{
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
	height: 82px;
	font-size: 13px;
	padding: 5px;
	box-sizing: border-box;
	color: #9b9b9b;
	position: relative;
}
.ma_textarea:before{
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
	z-index: 1;
}
.page_btn{
	margin-bottom: 80px;
}

</style>
<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left" href="/Home/Index/PersonCenter">个人中心</a>
		在线预约
		<a class="page_header_right" href="/Home/Index/AppointmentNotice"></a>
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
		<div class="ma_textarea">
			<textarea rows="4" class="weui-textarea" placeholder="您的特殊要求，如多宠物，新宠物等" style="position: relative;z-index: 2;"></textarea>
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
				}, 600);
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
		
		var symbol = [
			{
				label: ':',
				value: 0
			}
		];

		weui.picker(hours, symbol, minites, {
			defaultValue: [new Date().getHours()+1, 0],
			onConfirm: function(result) {
				var time = result[0].label + ':' + result[2].label;
				var expect_date = date + ' ' + time;
				$(_this).find('.weui-cell__ft').text(expect_date);
			},
			id: 'ma_expect_time'
		});
	}

	$('.ma_textarea textarea').click(function(event) {
		setTimeout(function() {
			$('.ma_page').scrollTop(180);
		}, 500);
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