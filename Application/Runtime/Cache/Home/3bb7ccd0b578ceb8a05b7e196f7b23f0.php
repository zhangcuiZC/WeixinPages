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
.pcd_table{
	margin-top: 5px;
	font-size: 13px;
	color: #212121;
	line-height: 2em;
	width: 100%;
	border-collapse: collapse;
	table-layout: fixed;
}
.pcd_table td{
	position: relative;
	padding: 4px 0;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
}
.pcd_table tr{
	position: relative;
}
.ird_table_head td{
	color: #9b9b9b;
	border-bottom: 2px solid #e4e4e4;
}
.pcd_table td:nth-last-child(1){
	text-align: right;
}
.pcd_table tr:not(.ird_table_head) td:nth-last-child(1){
	color: #e75b42;
}
.pcd_table tr:not(.ird_table_head) td:after{
	content: "";
	position: absolute;
	height: 1px;
	width: 100%;
	bottom: 0;
	left: 0;
	transform-origin: center bottom;
	transform: scaleY(.5);
	background-color: #e4e4e4;
}
.pcd_table tr:nth-last-child(1) td:after{
	height: 0;
}
.pcd_page .up{
	color: #ff5065;
}
.pcd_page .down{
	color: #7ed321;
}
</style>

<div class="page_fixed">
	<div class="page_header">
		<div class="page_header_left">检验单</div>
		检验报告
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="pcd_page page">
	<div class="weui-panel pcd_pet_title">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title">生化七项检验</h4>
				<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
			</div>
		</div>
	</div>
	<div class="weui-cells__title">检测详情</div>
	<div class="weui-panel pcd_pet_detail" style="margin-top: 0;margin-bottom: 30px;">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title" style="text-align: center;color: #4990e2;">生化七项检测单</h4>
				<table class="pcd_table">
					<tbody>
						<tr class="ird_table_head">
							<td width="40%">指标</td>
							<td width="18%">结果</td>
							<td width="18%">单位</td>
							<td width="24%">参考范围</td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td>U/L</td>
							<td>0-40</td>
						</tr>
						<tr>
							<td>并氨基酸转化并氨基酸转化并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td>U/L</td>
							<td>0-40</td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="down">↓</span></td>
							<td>U/L</td>
							<td>0-40</td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="down">↓</span></td>
							<td>U/L</td>
							<td>0-40</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div style="width: 100%;height: 1px;"></div>
</div>
	</div>
</body>
</html>