<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>宠主助手-dev</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<link rel="stylesheet" href="/Public/stylesheets/weui.min.css?v=1">
	<link rel="stylesheet" href="/Public/stylesheets/common.css?t=<?php echo time();?>">
	<script type="text/javascript" src="/Public/javascripts/weui.min.js"></script>
	<script type="text/javascript" src="/Public/javascripts/zepto.min.js"></script>
</head>
<body ontouchstart="">
	<div id="container">
		

<style type="text/css">
	#container, .phd_page{
		background-color: #efeff3;
	}
	.phd_page{
		top: 80px;
	}
	.pcd_pet_title:before{
		height: 0;
		border: none;
	}
	.phd_num{
		color: #4aa500;
	}
	.phd_table{
		margin-bottom: 15px;
		font-size: 13px;
		color: #212121;
		line-height: 2em;
		width: 100%;
		border-collapse: collapse;
		text-align: center;
		table-layout: fixed;
	}
	.phd_table td{
		position: relative;
		padding: 4px 0;
	}
	.phd_table td:nth-child(1){
		text-align: left;

	}
	.phd_table td:nth-child(1) div{
		width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	.phd_table tr{
		position: relative;
	}
	.phd_table_head td{
		color: #9b9b9b;
		border-bottom: 2px solid #e4e4e4;
	}
	.phd_table_head td:nth-child(1){
		color: #4990e2;
		font-size: 15px;
	}
	.phd_table tr:not(.phd_table_head) td:after{
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
	.phd_table tr:nth-last-child(1) td:after{
		height: 0;
	}
</style>

<div class="page_fixed">
	<div class="page_header">
		<div class="page_header_left">消费记录</div>
		账单详情
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="phd_page page">
	<div class="weui-panel pcd_pet_title">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<h4 class="weui-media-box__title">消费总额<span class="phd_num" style="float: right;font-size: 16px;">￥100</span></h4>
				<p class="weui-media-box__desc">2017/09/09（周三）&nbsp;&nbsp;&nbsp;&nbsp;宠物：嘟嘟</p>
			</div>
		</div>
	</div>

	<div class="weui-cells__title">09-02（周一）</div>
	<div class="weui-panel" style="margin-top: 0;">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<table class="phd_table">
					<tbody>
						<tr class="phd_table_head">
							<td width="60%">处方类消费</td>
							<td width="20%">数量</td>
							<td width="20%">实付</td>
						</tr>
						<tr>
							<td><div>并氨基酸转化并氨基酸转化并氨基酸转化并氨基酸转化</div></td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
					</tbody>
				</table>
				<table class="phd_table">
					<tbody>
						<tr class="phd_table_head">
							<td width="60%">商品类消费</td>
							<td width="20%">数量</td>
							<td width="20%">实付</td>
						</tr>
						<tr>
							<td><div>并氨基酸转化并氨基酸转化并氨基酸转化并氨基酸转化</div></td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="weui-cells__title">09-02（周一）</div>
	<div class="weui-panel" style="margin-top: 0;">
		<div class="weui-panel__bd">
			<div class="weui-media-box weui-media-box_text">
				<table class="phd_table">
					<tbody>
						<tr class="phd_table_head">
							<td width="60%">处方类消费</td>
							<td width="20%">数量</td>
							<td width="20%">实付</td>
						</tr>
						<tr>
							<td><div>并氨基酸转化并氨基酸转化并氨基酸转化并氨基酸转化</div></td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
					</tbody>
				</table>
				<table class="phd_table">
					<tbody>
						<tr class="phd_table_head">
							<td width="60%">商品类消费</td>
							<td width="20%">数量</td>
							<td width="20%">实付</td>
						</tr>
						<tr>
							<td><div>并氨基酸转化并氨基酸转化并氨基酸转化并氨基酸转化</div></td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
						<tr>
							<td>并氨基酸转化</td>
							<td>10<span class="up">↑</span></td>
							<td><span class="phd_num">￥100</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div style="width: 100%;height: 1px;margin-top: 30px;"></div>
</div>
	</div>
</body>
</html>