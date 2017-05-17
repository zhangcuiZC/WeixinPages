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
	.pcds_page{
		top: 80px;
		background-color: #efeff3;
	}
	.pcds_page .weui-cell:before{
		color: #c7c7c7;
		border-color: #c7c7c7;
	}
	.pcds_page .weui-panel{
		background-color: #fafafa;
		margin-bottom: 0;
	}
	.pcds_list{
		margin-bottom: 30px;
	}
	.pcds_list:before{
		height: 0;
		border: none;
	}
	.pcds_page .weui-cell__ft:after{
		display: none;
	}
	.pcds_page .weui-cell__ft{
		padding-right: 0;
		
	}
	.pcds_page .weui-cell .arrow{
		float: right;
		margin-left: 15px;
		width: 20px;
		height: 20px;
		background: url(/Public/images/arrow.png) no-repeat center;
		transform: rotateZ(180deg);
		transition: transform 0.4s;
	}
	.pcds_page .weui-cell.active .arrow{
		transform: rotateZ(0deg);
	}
	.pcds_detail{
		background-color: #efeff3;
		padding-bottom: 10px;
		position: relative;
	}
	.pcds_detail_box{
		/*height: 0;
		overflow: hidden;
		transition: all 0.2s;*/
		transform-origin: center top;
		transform: scaleY(0);
	}
	.pcds_detail_box.active{
		transform: scaleY(1);
		transition: transform 0.4s;
	}
	.pcds_detail_box .pcds_detail{
		display: none;
	}
	.pcds_detail_box.active .pcds_detail{
		display: block;
	}
	.pcds_detail_box:nth-last-child(1) .pcds_detail{
		padding-bottom: 0;
	}
	.pcds_detail:before{
		content: "";
		position: absolute;
		width: 100%;
		height: 1px;
		background-color: #c7c7c7;
		top: 0;
		left: 0;
		transform-origin: center top;
		transform: scaleY(.5);
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
	.pcds_page .up{
		color: #ff5065;
	}
	.pcds_page .down{
		color: #7ed321;
	}
	.pcds_page .weui-cells{
		background-color: #efeff3;
	}
	.pcds_page .weui-cell{
		background-color: #fff;
	}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left" href="/Home/Index/InspectionReport">检验单</a>
		检验报告
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="/Home/Index/ChooseHospital" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="pcds_page page">
	<div class="weui-cells pcds_list">
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>血常规检查（茶茶）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
										<td>并氨基酸转化</td>
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
		    </div>
	    </div>
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>血常规检查（茶茶）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
										<td>并氨基酸转化并氨基酸转化并氨基酸转化并氨基酸转化</td>
										<td>10<span class="up">↑</span></td>
										<td>U/L</td>
										<td>0-40</td>
									</tr>
									<tr>
										<td>并氨基酸转化</td>
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
		    </div>
	    </div>
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>血常规检查（茶茶）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
										<td>并氨基酸转化</td>
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
		    </div>
	    </div>


	</div>
	<div style="height: 1px;width: 100%;"></div>
</div>

<script type="text/javascript">
$(function() {
	$('.weui-cell').click(function(event) {
		var $detail_box = $(this).next('.pcds_detail_box');
		// var $detail = $detail_box.find('.pcds_detail');
		// var h = $detail.height();
		// var h_box = $detail_box.height();
		// if (!h_box) {
		// 	$detail_box.css('height', h);
		// 	$(this).find('.arrow').addClass('active');
		// }else{
		// 	$detail_box.css('height', '0');
		// 	$(this).find('.arrow').removeClass('active');
		// }
		$(this).toggleClass('active');
		$detail_box.toggleClass('active');
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