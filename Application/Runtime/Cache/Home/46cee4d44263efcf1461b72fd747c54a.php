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
		
<script type="text/javascript" src="/Public/javascripts/echarts.min_3.js"></script>

<style type="text/css">
	.tw_page{
		top: 40px;
		background-color: #f5f5f9;
	}
	#chart_box{
		width: 100%;
/*		padding-top: 20px;*/
		/*padding-bottom: 20px;*/
		height: 380px;
	}
	#tw_chart_client{
		width: 100%;
		height: 400px;
	}
	.page_navbar_fixed{
		box-shadow: 0 2px 5px 0px rgba(0,0,0,.2);
	}
</style>

<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left will_redirect" href="#">返回</a>
		北京xxxxxxx医院
		<a class="page_header_right" href="#"></a>
	</div>

	<div class="weui-panel petc_selector petc_selector_fixed">
		<div class="weui-panel__bd" style="padding-right: 15px;">
			<p style="text-align: center;"><span class="petc_date petc_date_start"><?php echo ($_GET['starttime']?:'2017/06/20'); ?></span>&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;<span class="petc_date petc_date_end"><?php echo ($_GET['endtime']?:'2017/06/23'); ?></span></p>
		</div>
	</div>
	<div class="page_navbar page_navbar_fixed">
		<div class="navbar_item active">医院营业</div>
		<div class="navbar_item">库存统计</div>
		<div class="navbar_item">医院员工</div>
		<div class="navbar_item">顾客统计</div>
	</div>
</div>

<div class="tw_page page">
	<div class="summary_info">
		<table>
			<tbody>
				<tr >
					<td width="30%">顾客 (人)</td>
					<td width="40%">营业额 (元)</td>
					<td width="30%">收银 (元)</td>
				</tr>
				<tr>
					<td style="font-size: 15px;">1000</td>
					<td style="font-size: 23px;">190000</td>
					<td style="font-size: 15px;">500000</td>
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

	<div class="page_navbar">
		<div class="navbar_item active">医院营业</div>
		<div class="navbar_item">库存统计</div>
		<div class="navbar_item">医院员工</div>
		<div class="navbar_item">顾客统计</div>
	</div>
	
	<!-- nav 1 -->
	<div class="page_navcontent">
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					营业额占比
				</span>
				<span class="right">
					<span class="r_title">共计</span>
					<span class="r_price">￥19999999</span>
				</span>
			</div>
			<div class="item_content">
				<div class="percent_bar">
					<div class="title"><span class="left">挂号</span><span class="right">¥100.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">0%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">处方</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">2%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">处置</span><span class="right">¥100220.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">8%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">手术</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">39%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">化验检查</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">20%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">影像检查</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">20%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">商品</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">26%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">住院</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">70%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">寄养</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">5%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">疫苗驱虫</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">10%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">美容洗澡</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">0%</div></div>
					</div>
				</div>
				<div class="percent_bar">
					<div class="title"><span class="left">次卡充值</span><span class="right">¥1000.00</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">0%</div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					收银台汇总<span style="font-size: 12px;"> (元) </span>
				</span>
			</div>
			<div class="item_content" style="padding-top: 0">
				<div class="checkout_summary">
					<div class="cs_title"><span style="font-weight: normal;padding-left: 15px">收银台汇总</span><span style="font-size: 12px;padding-right: 15px;float: right;">不含医院运营&库存成本</span></div>
					<div class="cs_icon">￥</div>
					<div class="cs_content">
						<p>＋920908.00&nbsp;&nbsp;&nbsp;总收入</p>
						<p>－1000.00&nbsp;&nbsp;&nbsp;总支出</p>
						<p><span style="font-size: 18px;font-weight: normal;">+7800.00</span>&nbsp;&nbsp;&nbsp;合<i style="display: inline-block;width: 1em"></i>计</p>
					</div>
				</div>
				<div id="chart_box"></div>
			</div><!-- item_content end -->
		</div>
		<p class="bottom_msg">到底啦~</p>
	</div>
	
	<!-- nav 2 -->
	<div class="page_navcontent" style="display: none;">
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					热卖商品排行
				</span>
			</div>
			<div class="item_content" style="padding-top: 0">

				<div class="weui-panel pcd_pet_detail" style="background-color: #fff">
					<div class="weui-panel__bd">
						<div class="weui-media-box weui-media-box_text">
							<table class="pcd_table tw_table">
								<tbody>
									<tr class="ird_table_head">
										<td width="10%">排名</td>
										<td width="40%">名称</td>
										<td width="20%">数量</td>
										<td width="30%">金额(元）</td>
									</tr>
									<?php $__FOR_START_1203258865__=1;$__FOR_END_1203258865__=11;for($i=$__FOR_START_1203258865__;$i < $__FOR_END_1203258865__;$i+=1){ ?><tr>
											<td><?php echo ($i); ?></td>
											<td>皇家幼年犬粮舒化奶糕皇家幼年犬粮舒化奶糕</td>
											<td>80</td>
											<td>1000000.00</td>
										</tr><?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="click_load weui-cell_access">加载更多</div>

			</div>
		</div>
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					采购入库明细
				</span>
			</div>
			<div class="item_content" style="padding-top: 0">

				<div class="weui-panel pcd_pet_detail" style="background-color: #fff">
					<div class="weui-panel__bd">
						<div class="weui-media-box weui-media-box_text">
							<table class="pcd_table tw_table">
								<tbody>
									<tr class="ird_table_head">
										<td width="10%">序号</td>
										<td width="40%">名称</td>
										<td width="20%">入库数</td>
										<td width="30%">金额(元）</td>
									</tr>
									<?php $__FOR_START_1912933994__=1;$__FOR_END_1912933994__=11;for($i=$__FOR_START_1912933994__;$i < $__FOR_END_1912933994__;$i+=1){ ?><tr>
											<td><?php echo ($i); ?></td>
											<td>皇家幼年犬粮舒化奶糕皇家幼年犬粮舒化奶糕</td>
											<td>80</td>
											<td>1000000.00</td>
										</tr><?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="click_load weui-cell_access">加载更多</div>

			</div>
		</div>
		<p class="bottom_msg">到底啦~</p>
	</div>

	<!-- nav 3 -->
	<div class="page_navcontent" style="display: none;">
		<div class="page_item" style="padding: 0;padding-top: 10px;overflow: auto;">
			<?php $__FOR_START_1131539538__=1;$__FOR_END_1131539538__=11;for($i=$__FOR_START_1131539538__;$i < $__FOR_END_1131539538__;$i+=1){ ?><div class="hospital_employee">
					<div class="he_icon"><div class="he_num"><?php echo ($i); ?></div><img src="/Public/images/touxiang_yuangong@2x.png"></div>
					<div class="he_name">王美美</div>
					<div class="he_job">院长</div>
				</div><?php } ?>
		</div>
		<p class="bottom_msg">到底啦~</p>
	</div>
	
	<!-- nav 4 -->
	<div class="page_navcontent" style="display: none;">
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					顾客来源
				</span>
				<span class="right">
					<span class="r_title">共计顾客</span>
					<span class="r_price" style="color: #FF6565;">100人</span>
				</span>
			</div>
			<div class="item_content">
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">90%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">80%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">70%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">60%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">50%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">40%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">30%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">20%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">10%</div></div>
					</div>
				</div>
				<div class="percent_bar percent_bar_red">
					<div class="title"><span class="left">美团</span><span class="right">50人</span></div>
					<div class="bar">
						<div class="innerbar"><div class="num">0%</div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="page_item">
			<div class="item_title">
				<span class="left">
					顾客分布
				</span>
				<span class="right">
					<span class="r_title">共计区域</span>
					<span class="r_price" style="color: #4990E2;">10</span>
				</span>
			</div>
			<div class="item_content">
				<div id="tw_chart_client"></div>
			</div>
		</div>
		<p class="bottom_msg">到底啦~</p>
	</div>
</div>

<script type="text/javascript" src="/Public/javascripts/selector_work_zc.js?v=5"></script>
<script type="text/javascript">
	// 添加标签页hash
	if (!window.location.hash) {
		history.replaceState(null, null, '#p=0');
	}

	// 横向柱状图动画
	window.onload = function() {
		show_percent_bar(0);
		if (window.location.href.indexOf('starttime') > -1) {
			$(window).trigger('popstate');
		}
	};

	function show_percent_bar(index) {
		$innerbar = $('.page_navcontent').eq(index).find('.innerbar');

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

	// 返回切换标签页功能实现
	$(window).on('popstate', function(event) {
		var idx = + (window.location.hash && window.location.hash.substr(-1));
		$('.page_navbar').eq(0).find('.navbar_item').eq(idx).trigger('click');
	});

	$('.navbar_item').click(function(event) {
		var page_idx = + (window.location.hash && window.location.hash.substr(-1));
		var idx = $(this).index();
		if (page_idx !== idx) {
			history.pushState(null, null, '#p='+idx);
		}
		$('.page_navbar').forEach(function(ele, idx2) {
			$(ele).find('.navbar_item').eq(idx).addClass('active').siblings('.navbar_item').removeClass('active');
		});
		$('.page_navcontent').eq(idx).show().siblings('.page_navcontent').hide();
		$('.page').scrollTop(0);

		if (idx === 3) {
			show_percent_bar(3);
			var twChartClient = echarts.init(document.getElementById('tw_chart_client'));
			twChartClient.setOption(option_client);
		}

	});


	// 加载柱状图
	var twChart = echarts.init(document.getElementById('chart_box'));

	var xAxisData = ['次卡', '会员卡', '商品服务', '押金'];
	var data1 = [];
	var data2 = [];


	for (var i = 0; i < 4; i++) {
	    data1.push((Math.random() * 2000).toFixed(2));
	    data2.push((-Math.random() * 2000).toFixed(2));

	}

	option = {
	    xAxis: {
	    	offset: 10,
	        data: xAxisData,
	        name: '',
	        silent: false,
	        axisLine: {onZero: true},
	        splitLine: {show: false},
	        splitArea: {show: false},
	        axisTick: {show: false},
	        axisLine: {
	        	lineStyle: {
	        		width: 2,
	        		color: '#9b9b9b'
	        	}
	        }
	    },
	    yAxis: {
	    	name: '收入/退款',
	    	nameGap: 10,
	        inverse: false,
	        splitLine: {show: false},
	        splitArea: {show: false},
	        axisTick: {show: false},
	        axisLabel: {show: false},
	        axisLine: {
	        	lineStyle: {
	        		width: 2,
	        		color: '#9b9b9b'
	        	}
	        }
	    },
	    grid: {
	        left: 30
	    },
	    series: [
	        {
	            name: 'bar',
	            type: 'bar',
	            stack: 'one',
	            barWidth: '18px',
	            label: {
	            	normal: {
	            		show: true,
	            		position: 'top'
	            	}
	            },
	            itemStyle: {
				    normal: {
				    	color: '#1585F9'
				    },
				    emphasis: {
				        barBorderWidth: 1,
				        shadowBlur: 10,
				        shadowOffsetX: 0,
				        shadowOffsetY: 0,
				        shadowColor: 'rgba(0,0,0,0.5)'
				    }
				},
	            data: data1
	        },
	        {
	            name: 'bar2',
	            type: 'bar',
	            stack: 'one',
	            barWidth: '18px',
	            label: {
	            	normal: {
	            		show: true,
	            		position: 'bottom'
	            	}
	            },
	            itemStyle: {
				    normal: {
				    	color: '#FF8C7E'
				    },
				    emphasis: {
				        barBorderWidth: 1,
				        shadowBlur: 10,
				        shadowOffsetX: 0,
				        shadowOffsetY: 0,
				        shadowColor: 'rgba(0,0,0,0.5)'
				    }
				},
	            data: data2
	        }
	    ]
	};

	twChart.setOption(option);

	
	var colors = ['#C6DBEF', '#A1D99B', '#FFB06C', '#9E9AC9', '#6BAED6', '#9ECAE1', '#C7E9C0', '#FD8C3C', '#DADAEB', '#BCBDDC'];
	var option_client = {
	    animationDuration: 3000,
	    animationEasingUpdate: 'quinticInOut',
	    series: [{
	        type: 'graph',
	        layout: 'force',

	        force: {
	            repulsion: 90
	        },
	        data: [{
	            "name": "华严北里小区\n100",
	            "symbolSize": 100,
	            "draggable": "true",
	            "value": 100,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n90",
	            "symbolSize": 90,
	            "draggable": "true",
	            "value": 90,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n80",
	            "symbolSize": 80,
	            "draggable": "true",
	            "value": 80,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n70",
	            "value": 70,
	            "symbolSize": 70,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n60",
	            "symbolSize": 60,
	            "draggable": "true",
	            "value": 60,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n50",
	            "symbolSize": 50,
	            "draggable": "true",
	            "value": 50,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n40",
	            "value": 40,
	            "symbolSize": 40,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n30",
	            "symbolSize": 30,
	            "draggable": "true",
	            "value": 30,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n20",
	            "symbolSize": 20,
	            "draggable": "true",
	            "value": 20,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n10",
	            "value": 10,
	            "symbolSize": 10,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n702",
	            "value": 70,
	            "symbolSize": 70,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n602",
	            "symbolSize": 60,
	            "draggable": "true",
	            "value": 60,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n502",
	            "symbolSize": 50,
	            "draggable": "true",
	            "value": 50,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n402",
	            "value": 40,
	            "symbolSize": 40,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n1002",
	            "symbolSize": 100,
	            "draggable": "true",
	            "value": 100,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n903",
	            "symbolSize": 90,
	            "draggable": "true",
	            "value": 90,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n803",
	            "symbolSize": 80,
	            "draggable": "true",
	            "value": 80,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n703",
	            "value": 70,
	            "symbolSize": 70,
	            "draggable": "true",
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n603",
	            "symbolSize": 60,
	            "draggable": "true",
	            "value": 60,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }, {
	            "name": "华严北里小区\n503",
	            "symbolSize": 50,
	            "draggable": "true",
	            "value": 50,
	            itemStyle: {
	            	normal: {
	            		color: colors[Math.ceil(Math.random()*(colors.length))-1]
	            	}
	            }
	        }],
	        left: 'center',
	        focusNodeAdjacency: true,
	        roam: false,
	        label: {
	            normal: {
	                show: true,
	                position: 'inside',
	                textStyle: {
	                	color: '#5d5d5d',
	                	fontWeight: 'lighter'
	                }
	            }
	        },
	        lineStyle: {
	            normal: {
	            	opacity: 0
	            }
	        }
	    }]
	};
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