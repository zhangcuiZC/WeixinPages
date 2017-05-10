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
/*		height: 0;
		overflow: hidden;*/
		/*transition: height 0.2s;*/
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
		<div class="page_header_left">宠物病例</div>
		病例明细
	</div>
	<div class="pc_hospital">
		全心全意动物医院（北辰店）
		<a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" style="float: right;margin-top: 7px;">更换</a>
	</div>
</div>
<div class="pcds_page page">
	<div class="weui-cells pcds_list">
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>皮肤科（茉茉）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>病历单（莉莉）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>病历单（花花）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
	    <div class="weui-cell weui-cell_access">
	        <div class="weui-cell__hd"></div>
	        <div class="weui-cell__bd">
	            <p>病历单（茶茶）</p>
	        </div>
	        <div class="weui-cell__ft">2017/05/04<i class="arrow"></i></div>
	    </div>
	    <div class="pcds_detail_box">
		    <div class="pcds_detail">
				<div class="weui-panel pcd_pet_detail">
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
	</div>
</div>

<script type="text/javascript">
$(function() {
	$('.weui-cell').click(function(event) {
		var $detail_box = $(this).next('.pcds_detail_box');
		
		$(this).toggleClass('active');
		$detail_box.toggleClass('active');
	});
});
</script>
	</div>
</body>
</html>