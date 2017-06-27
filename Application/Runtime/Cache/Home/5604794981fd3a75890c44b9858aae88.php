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
		

<style type="text/css">
#container{
	background-color: #efeff3;
}
.petc_page{
	top: 125px;
	padding-top: 10px;
	background-color: #efeff3;
}
.petc_selector{
	margin: 0;
	font-size: 13px;
	line-height: 15px;
	color: #212121;
	line-height: 45px;
	padding-left: 15px;
}
.petc_selector:before{
	height: 0;
	border: none;
}
.petc_date{
	display: inline-block;
	width: 100px;
	height: 25px;
	vertical-align: middle;
	box-sizing: border-box;
	margin: -3px 5px 0;
	position: relative;
	line-height: 27px;
	text-align: center;
	color: #9b9b9b;
}
.petc_date:before{
	content: "";
	position: absolute;
	width: 200%;
	height: 200%;
	box-sizing: border-box;
	border: 1px solid #c7c7c7;
	border-radius: 4px;
	left: -50%;
	top: -50%;
	transform-origin: center;
	transform: scale(.5);
}
.petc_page .weui-cell__ft{
	position: absolute;
	right: 15px;
	top: 0;
	height: 100%;
}
.petc_page .weui-panel__bd{
	padding-right: 40px;
}
</style>
<div class="page_fixed">
	<div class="page_header">
		<a class="page_header_left back_to_home will_redirect" href="/WxPersonalCenter/personCenter?regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&consumermid=<?php echo ($_GET['consumermid']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">个人中心</a>
		宠物病历
	</div>
	<div class="pc_hospital">
		<?php echo ($_GET['regname']); ?>
		<?php if($_GET['ismulti'] != ''): ?><a href="/WxPersonalCenter/chooseHospital?type=REPORT&wxid=<?php echo ($_GET['wxid']); ?>" class="weui-btn weui-btn_mini weui-btn_primary will_redirect">更换</a><?php endif; ?>
	</div>
	<div class="weui-panel petc_selector">
		<div class="weui-panel__bd" style="padding-right: 15px;">
			<p>筛选：<span class="petc_date petc_date_start"><?php echo ($starttime); ?></span>至<span class="petc_date petc_date_end"><?php echo ($endtime); ?></span></p>
		</div>
	</div>
</div>

<div class="petc_page page">
	<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/WxPetCase/petCaseDetail?mid=<?php echo ($vo['Mid']); ?>&regcode=<?php echo ($_GET['regcode']); ?>&regname=<?php echo ($_GET['regname']); ?>&wxid=<?php echo ($_GET['wxid']); ?>&ismulti=<?php echo ($_GET['ismulti']); ?>">
			<div class="weui-panel weui-cell_access will_redirect">
				<div class="weui-panel__bd">
					<div class="weui-media-box weui-media-box_text">
						<h4 class="weui-media-box__title"><?php echo ($vo['Abstract']); ?>(<?php echo ($vo['PetName']); ?>)</h4>
						<p class="weui-media-box__desc"><?php echo ($vo['EventTime']); ?>（<?php $w=date('w',strtotime($vo['EventTime']));$weekArr=array("周日","周一","周二","周三","周四","周五","周六");echo $weekArr[$w]; ?>）&nbsp;&nbsp;&nbsp;&nbsp;主治医生：<?php echo ($vo['Con_Employee_Name']); ?></p>
					</div>
				</div>
				<span class="weui-cell__ft"></span>
			</div>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>

	<?php if($isleft == 1): ?><div class="weui-loadmore">
		    <span class="weui-loadmore__tips click_to_load">加载更多</span>
		</div>
	<?php else: ?>
		<div class="weui-loadmore">
		    <span class="weui-loadmore__tips">无更多数据</span>
		</div><?php endif; ?>

</div>

<script type="text/javascript" src="/Public/javascripts/loading_zc.js?v=31"></script>
<script type="text/javascript" src="/Public/javascripts/selector_zc.js?v=4"></script>
<script type="text/javascript" src="/Public/javascripts/remain_status_zc.js?v=2"></script>
<script type="text/javascript">
	// -----------------------------------
	// ---------需要loading_zc.js，返回后保持ajax请求后的状态
	show_prev_html();
	scroll_prev_position();
	bind_position_event();

$(function() {
	// -----------------------------------
	// ---------selector_zc.js-加载选择器
	var startTime = "<?php echo ($starttime); ?>";
	var endTime = "<?php echo ($endtime); ?>";
	var this_url = window.location.pathname + window.location.search;
	setup_selector(this_url, startTime, endTime);

	// -----------------------------------
	// ---------loading_zc.js-ajax加载数据
	// 1-是否有剩余数据
	var isleft = $('.weui-loadmore').data('isleft') !== undefined ? $('.weui-loadmore').data('isleft') : "<?php echo ($isleft); ?>";
	// 2-拼装post数据
	var regcode = "<?php echo ($_GET['regcode']); ?>";
	var consumermid = "<?php echo ($_GET['consumermid']); ?>";
	var currentpage = + ($('.weui-loadmore').data('page') || "<?php echo ($currentpage); ?>");
	var info = {
		"regcode": regcode,
		"consumermid": consumermid,
		"startTime": startTime,
		"endTime": endTime,
		"currentpage": currentpage
	};
	// 3-将ajax返回数据进行拼装
	function create_html(datas) {
		var len = datas.length;
		var _html = '';

		for (var i = 0; i < len; i++) {
			var data = JSON.parse(datas[i]);
			console.log(data);
			var week_idx = new Date(data.EventTime).getDay();
			var week_arr=["周日","周一","周二","周三","周四","周五","周六"];
			var week = week_arr[week_idx];
			var item = '<a href="/WxPetCase/petCaseDetail?mid=' + data.Mid + '&regcode=' + "<?php echo ($_GET['regcode']); ?>" + '&regname=' + "<?php echo ($_GET['regname']); ?>" + '&wxid=' + "<?php echo ($_GET['wxid']); ?>" + '&ismulti=' + "<?php echo ($_GET['ismulti']); ?>" + '">' + 
					     '<div class="weui-panel weui-cell_access">' +
					       '<div class="weui-panel__bd">' +
						     '<div class="weui-media-box weui-media-box_text">' +
							   '<h4 class="weui-media-box__title">' + data.Abstract + '(' + data.PetName + ')</h4>' +
							   '<p class="weui-media-box__desc">' + data.EventTime + '（' + week + '）&nbsp;&nbsp;&nbsp;&nbsp;主治医生：' +
							   data.Con_Employee_Name + '</p>' + 
						     '</div>' +
					       '</div>' +
					       '<span class="weui-cell__ft"></span>' +
				         '</div>' +
			           '</a>';
			_html += item;
		}

		return _html;
	}
	// 4-post目标url
	var post_url = '/WxPetCase/ajaxPetCase';
	// 5-创建实例并加载
	var loading = new Loading_zc(isleft, info, create_html, post_url, bind_position_event, bind_redirect_event);
	loading.init();
	// -----------------------------------
});
</script>
	</div>
	<script type="text/javascript">
		$(function() {
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

				var o = $('.nomore_detail').offset();
				if (o.top + o.height - 1 <= box_height && changedY < 0) {
					event.preventDefault();
				}
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
		function bind_redirect_event() {
			$('.will_redirect').click(function(event) {
				if(window.navigator.onLine == false){
					alert('网络错误，请检查网络连接');
					return false;
				}else{
					var loading = weui.loading('加载中...', {
					    className: 'loading'
					});
				}
			});
		}
		bind_redirect_event();
	</script>
</body>
</html>