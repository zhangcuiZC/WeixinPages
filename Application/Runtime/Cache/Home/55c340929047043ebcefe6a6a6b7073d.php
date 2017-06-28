<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>宠主小助手</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<link rel="stylesheet" href="/Public/stylesheets/weui.min.css?v=4">
	<link rel="stylesheet" href="/Public/stylesheets/common.css?t=<?php echo time();?>">
	<script type="text/javascript" src="/Public/javascripts/weui.min.js"></script>
	<script type="text/javascript" src="/Public/javascripts/zepto.min.js"></script>
</head>
<body ontouchstart="">
	<div id="container">
		
<script type="text/javascript" src="/Public/javascripts/echarts.min.js"></script>

<style type="text/css">
	.mw_page{
		top: 40px;
		background-color: #f5f5f9;
	}
	#chart_box{
		width: 100%;
		height: 275px;
	}

	.petc_selector_fixed{
		box-shadow: 0 2px 5px 0px rgba(0,0,0,.2);
	}
</style>

<div class="page_fixed">
	<div class="page_header">
		<!-- <a class="page_header_left will_redirect" href="#">返回</a> -->
		李亚雷
		<a class="page_header_right" href="#"></a>
	</div>

	<div class="weui-panel petc_selector petc_selector_fixed">
		<div class="weui-panel__bd" style="padding-right: 15px;">
			<p style="text-align: center;"><span class="petc_date petc_date_start"><?php echo ($_GET['starttime']?:'2017/06/20'); ?></span>&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;<span class="petc_date petc_date_end"><?php echo ($_GET['endtime']?:'2017/06/23'); ?></span></p>
		</div>
	</div>
</div>

<div class="mw_page page">
	<div class="summary_info">
		<table>
			<tbody>
				<tr >
					<td width="30%">业绩量 (单)</td>
					<td width="40%">业绩额 (元)</td>
					<td width="30%">提成 (元)</td>
				</tr>
				<tr>
					<td style="font-size: 15px;">10</td>
					<td style="font-size: 23px;">123993</td>
					<td style="font-size: 15px;">5000</td>
				</tr>
			</tbody>
		</table>
		<div class="date_quickpick">
			<?php if($_GET['starttime'] == ''): ?><span>
					<button>前日</button>
					<button class="active">昨日</button>
					<button>本月</button>
				</span>
			<?php else: ?>
				<span>
					<button>昨日</button>
					<button class="active"><?php echo (substr($_GET['starttime'],5)); ?>-<?php echo (substr($_GET['endtime'],5)); ?></button>
					<button>本月</button>
				</span><?php endif; ?>
		</div>
	</div>
	
	<div class="weui-panel petc_selector petc_selector_position">
		<div class="weui-panel__bd" style="padding-right: 15px;">
			<p style="text-align: center;"><span class="petc_date petc_date_start"><?php echo ($_GET['starttime']?:'2017/06/20'); ?></span>&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;<span class="petc_date petc_date_end"><?php echo ($_GET['endtime']?:'2017/06/23'); ?></span></p>
		</div>
	</div>

	
	<div class="page_item">
		<div class="item_title">
			<span class="left">
				业绩额占比
			</span>
			<span class="right">
				<span class="r_title">共计</span>
				<span class="r_price">￥19999</span>
			</span>
		</div>
		<div class="item_content">
			<div class="percent_bar">
				<div class="title"><span class="left">挂号</span><span class="right">¥100.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">90%</div></div>
				</div>
			</div>
			<div class="percent_bar">
				<div class="title"><span class="left">处方</span><span class="right">¥1000.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">75%</div></div>
				</div>
			</div>
			<div class="percent_bar">
				<div class="title"><span class="left">请求</span><span class="right">¥100220.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">58%</div></div>
				</div>
			</div>
			<div class="percent_bar">
				<div class="title"><span class="left">分逢恶导非</span><span class="right">¥1000.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">32%</div></div>
				</div>
			</div>
			<div class="percent_bar">
				<div class="title"><span class="left">处方</span><span class="right">¥1000.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">18%</div></div>
				</div>
			</div>
			<div class="percent_bar">
				<div class="title"><span class="left">处方</span><span class="right">¥1000.00</span></div>
				<div class="bar">
					<div class="innerbar"><div class="num">2%</div></div>
				</div>
			</div>
		</div>
	</div>

	<div class="page_item">
		<div class="item_title">
			<span class="left">
				业绩量
			</span>
			<span class="right">
				<span class="r_title">共计</span>
				<span class="r_price" style="color: #EF5A4A">100单</span>
			</span>
		</div>
		<div class="item_content" id="chart_box">
			
		</div>
	</div>

	<div class="page_item">
		<div class="item_title">
			<span class="left">
				销售提成明细
			</span>
			<span class="right">
				<span class="r_title">共计</span>
				<span class="r_price" style="color: #EF5A4A">￥5000</span>
			</span>
		</div>
		<div class="item_content" style="padding-top: 0">
			<?php $__FOR_START_1290011812__=1;$__FOR_END_1290011812__=5;for($i=$__FOR_START_1290011812__;$i < $__FOR_END_1290011812__;$i+=1){ ?><div class="weui-cell weui-cell_access">
		        <div class="weui-cell__bd">
		            <p><span class="item_date">2017/05/04</span> (<span class="item_num">10</span>) 项提成</p>
		        </div>
		        <div class="weui-cell__ft"><span class="item_num">￥80.00</span><i class="arrow"></i></div>
		    </div>
		    <div class="pcds_detail_box">
			    <div class="pcds_detail">
					<div class="weui-panel pcd_pet_detail">
						<div class="weui-panel__bd">
							<div class="weui-media-box weui-media-box_text">
								<table class="pcd_table">
									<tbody>
										<tr class="ird_table_head">
											<td width="40%">项目</td>
											<td width="16%">销售量</td>
											<td width="22%">销售额</td>
											<td width="22%">提成</td>
										</tr>
										
											<tr>
												<td>手术</td>
												<td>2</td>
												<td>800.00</td>
												<td>20.00</td>
											</tr>
											<tr>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
											</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
			    </div>
		    </div><?php } ?>
		    <div class="seperator_line"></div>
		    <div class="click_load weui-cell_access">加载更多</div>
		</div><!-- item_content end -->
	</div>

	<div class="page_item">
		<div class="item_title">
			<span class="left">
				服务提成明细
			</span>
			<span class="right">
				<span class="r_title">共计</span>
				<span class="r_price" style="color: #EF5A4A">￥500000</span>
			</span>
		</div>
		<div class="item_content" style="padding-top: 0">
			<?php $__FOR_START_819010967__=1;$__FOR_END_819010967__=5;for($i=$__FOR_START_819010967__;$i < $__FOR_END_819010967__;$i+=1){ ?><div class="weui-cell weui-cell_access">
		        <div class="weui-cell__bd">
		            <p><span class="item_date">2017/05/04</span> (<span class="item_num">10</span>) 项提成</p>
		        </div>
		        <div class="weui-cell__ft"><span class="item_num">￥80.00</span><i class="arrow"></i></div>
		    </div>
		    <div class="pcds_detail_box">
			    <div class="pcds_detail">
					<div class="weui-panel pcd_pet_detail">
						<div class="weui-panel__bd">
							<div class="weui-media-box weui-media-box_text">
								<table class="pcd_table">
									<tbody>
										<tr class="ird_table_head">
											<td width="40%">项目</td>
											<td width="16%">销售量</td>
											<td width="22%">销售额</td>
											<td width="22%">提成</td>
										</tr>
										
											<tr>
												<td>手术</td>
												<td>2</td>
												<td>800.00</td>
												<td>20.00</td>
											</tr>
											<tr>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
											</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
			    </div>
		    </div><?php } ?>
		    <div class="seperator_line"></div>
		    <div class="click_load weui-cell_access">加载更多</div>
		</div><!-- item_content end -->
	</div>
	<p class="bottom_msg">到底啦~</p>
</div>

<script type="text/javascript" src="/Public/javascripts/selector_work_zc.js?v=2"></script>
<script type="text/javascript">
	// 横向柱状图动画
	window.onload = show_percent_bar;

	function show_percent_bar() {
		$innerbar = $('.innerbar');

		$innerbar.forEach(function(ele, idx){
			var width = $(ele).find('.num').text();
			$(ele).css('width', width);

			setTimeout(function() {
				var bar_width = $(ele).width();
				var num_width = $(ele).find('.num').width();
				if (bar_width < num_width) {
					$(ele).find('.num').css('float', 'left');
				}
				$(ele).find('.num').css('visibility', 'visible');
			}, 500);
		});
	}
$(function() {
	// selector_work_zc.js-加载选择器
	var startTime = "2017/06/20";
	var endTime = "2017/06/23";
	setup_selector(startTime, endTime);

	// 点击展开详情
	$('.weui-cell').click(function(event) {
		var $detail_box = $(this).next('.pcds_detail_box');
		$(this).toggleClass('active');
		$detail_box.toggleClass('active');
	});

	// 加载环状图
	var myChart = echarts.init(document.getElementById('chart_box'));

	var series_data = [
        {
        	value:12, 
        	name:'门诊',
        	itemStyle: {
        		normal: {
        			color: '#EF5A4A'
        		}
        	}
        },
        {
        	value:50, 
        	name:'寄养',
        	itemStyle: {
        		normal: {
        			color: '#FF8C7E'
        		}
        	}
        },
        {
        	value:17, 
        	name:'美容',
        	itemStyle: {
        		normal: {
        			color: '#FF7D29'
        		}
        	}
        },
        {
        	value:13, 
        	name:'住院',
        	itemStyle: {
        		normal: {
        			color: '#FFB400'
        		}
        	}
        },
        {
        	value:18, 
        	name:'疫苗',
        	itemStyle: {
        		normal: {
        			color: '#FEDD43'
        		}
        	}
        }
    ].sort(function(a, b) { return b.value - a.value});
    var tmp_data_odd = series_data.filter(function(el, index) {
    	return !(index % 2);
    });
    var tmp_data_even = series_data.filter(function(el, index) {
    	return !!(index % 2);
    });

    series_data = tmp_data_odd.concat(tmp_data_even.reverse());


    var legend_data = [
    	{	
    		value: 12,
    		name: '门诊',
    		icon: 'image:///Public/images/icon_yiliao@2x.png'
    	},
    	{	
    		value: 50,
    		name: '寄养',
    		icon: 'image:///Public/images/icon_jiyang@2x.png'
    	},
    	{	
    		value: 17,
    		name: '美容',
    		icon: 'image:///Public/images/icon_meirong@2x.png'
    	},
    	{	
    		value: 13,
    		name: '住院',
    		icon: 'image:///Public/images/icon_zhuyuan@2x.png'
    	},
    	{	
    		value: 18,
    		name: '疫苗',
    		icon: 'image:///Public/images/icon_yimiao@2x.png'
    	},
    ].sort(function(a, b) { return b.value - a.value});

	var option = {
	    legend: {
	        x: 'center',
	        y: 'bottom',
	        itemWidth: 25,
	        itemHeight: 25,
	        textStyle: {
	        	color: '#9b9b9b',
	        	fontSize: 11
	        },
	        data: legend_data
	    },
	    series: [
	        {
	            name:'消费统计',
	            type:'pie',
	            radius: ['20%', '50%'],
	            minAngle: 1,
	            clockwise: false,
	            label: {
	            	normal: {
	            		formatter: '{c}单\n{b}'
	            	},
	            	emphasis: {
	            		formatter : '{d}%\n{b}'
	            	}
	            },
	            data: series_data,
	            markPoint: {
	            	symbol: 'circle'
	            }
	        }
	    ]
	};
    myChart.setOption(option);
});
</script>
	</div>
	<script type="text/javascript">
		$(function() {
			// 到顶或者到底后禁止滑动（防止拖动微信浏览器窗口）
			var startY, endY;
			var box_height = $('#container').height();
			$('.page').on('touchstart', function(event) {
				event.stopPropagation();
				startY = event.touches[0].pageY;
			});
			$('.page').on('touchmove', function(event) {
				event.stopPropagation();
				var endY = event.changedTouches[0].pageY;
				var changedY = endY - startY;
				var scroll_top = $('.page').scrollTop();
				if (scroll_top === 0 && changedY > 0) {
					event.preventDefault();
				}

				var o = $('.bottom_msg').offset();
				if (o.top + o.height - 1 <= box_height && changedY < 0) {
					event.preventDefault();
				}
			});


			// petc_selector置顶
			var selector_timer = null;
			$('.page').scroll(function(event) {
				if (selector_timer) {
					clearTimeout(selector_timer);
				}
				selector_timer = setTimeout(function(){
					var offset = $('.petc_selector_position').offset();
					if (offset.top < offset.height) {
						$('.petc_selector_fixed').show();
						$('.page_navbar_fixed').show();
					}else {
						$('.petc_selector_fixed').hide();
						$('.page_navbar_fixed').hide();
					}
				}, 100);
			});
		});

		$(window).on('pageshow', function(event) {
			if (event.persisted) {
				var loading = $('body > .loading');
				if (loading.length) {
					loading.remove();
				}
			}
		});
		// function bind_redirect_event() {
		// 	$('.will_redirect').click(function(event) {
		// 		if(window.navigator.onLine == false){
		// 			alert('网络错误，请检查网络连接');
		// 			return false;
		// 		}else{
		// 			var loading = weui.loading('加载中...', {
		// 			    className: 'loading'
		// 			});
		// 		}
		// 	});
		// }
		// bind_redirect_event();
		$('.page_header_right').click(function(event) {
			event.preventDefault();
	    	weui.dialog({
			    title: '联宠软件－提示',
			    content: '感谢您使用我们的软件，微信端目前开发还未完备，暂时只能显示昨日数据。<br><br>欢迎在软件给我们留言您的建议。',
			    className: 'mw_notice',
			    buttons: [{
			        label: '确定',
			        type: 'primary'
			    }]
			});
	    });
	</script>
</body>
</html>