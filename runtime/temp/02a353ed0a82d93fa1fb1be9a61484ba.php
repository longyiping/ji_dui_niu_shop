<?php if (!defined('THINK_PATH')) exit(); /*a:13:{s:37:"template/shop\blue\\Member\index.html";i:1500599756;s:28:"template/shop\blue\base.html";i:1500287003;s:45:"template/shop\blue\controlCommonVariable.html";i:1500287009;s:34:"template/shop\blue\controlTop.html";i:1500286999;s:41:"template/shop\blue\controlHeadSerach.html";i:1500287009;s:44:"template/shop\blue\controlHeadSearchAdv.html";i:1500287009;s:43:"template/shop\blue\controlHeadGoodType.html";i:1500287009;s:40:"template/shop\blue\controlCommonNav.html";i:1500287009;s:46:"template/shop\blue\Member\controlLeftMenu.html";i:1500599756;s:45:"template/shop\blue\controlBottomLinkHelp.html";i:1500287009;s:37:"template/shop\blue\controlBottom.html";i:1500287002;s:36:"template/shop\blue\controlLogin.html";i:1500287003;s:37:"template/shop\blue\baidu_js_push.html";i:1500287009;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php echo $title_before; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<!--可共用-->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript">
	var shop_main='SHOP_MAIN';//外置JS调用
	var app_main='APP_MAIN';//外置JS调用
	var upload = "__UPLOAD__";//外置JS调用
	var ADMINMAIN='ADMIN_MAIN';
	var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
	var temp = "__TEMP__/";//外置JS调用
	$(function(){
		//一级菜单选中	
		$('#nav li>a').removeClass('current');
		var path_info='<?php echo $path_info; ?>';
		if(path_info==''){
			$("#nav li>a[href^='SHOP_MAIN/index/index']").addClass('current');
		}else{
			$("#nav li>a[href^='SHOP_MAIN/<?php echo $path_info; ?>']").addClass('current');
		}
	})
	
	window.onload=function(){
		$.footer();
	}
</script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_cart.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//跟目录

	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
</script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>

<!--继承base可重写-->




<!-- 右侧购物车 -->

<!-- 添加css、字体文件文件 -->

</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
		<ul>
			<li><a class="menu-hd home" href="SHOP_MAIN" target="_top"><i></i>商城首页</a></li>
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd myinfo" href="SHOP_MAIN/member/index" target="_blank"><i></i> 个人中心 <b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="SHOP_MAIN/member/orderlist" target="_blank">已买到的宝贝</a>
							<a href="SHOP_MAIN/member/addresslist" target="_blank">我的地址管理</a>
							<a href="SHOP_MAIN/member/goodscollectionlist" target="_blank">我收藏的宝贝</a>
						</div>
					</div>
				</div>
			</li>
			<li class="menu-item cartbox"><a class="menu-hd cart" href="SHOP_MAIN/goods/cart" target="_top"><i></i>&nbsp;购物车</a></li>
			<li><a class="menu-hd" target="_blank" href="ADMIN_MAIN">卖家中心</a></li> 
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat"
						href="javascript:;" target="_top"> <i></i>
						关注商城 <b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>" alt="官方微信"></a>
						<p class="font-14">关注官方微信</p>
					</div>
				</div>
			</li>
<!-- 			<li class="menu-item"> -->
<!-- 				<div class="menu"> -->
<!-- 					<a href="SHOP_MAIN/helpcenter/index" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a> -->
<!-- 					<div id="menu-7" class="menu-bd site-nav-main"> -->
<!-- 						<span class="menu-bd-mask"></span> -->
<!-- 						<div class="menu-bd-panel"> -->
<!-- 							<div class="site-nav-con"> -->
<!-- 								<a href="SHOP_MAIN/helpcenter/index?id=2" target="_blank" title="常见问题">常见问题</a> -->
<!-- 								<a href="SHOP_MAIN/helpcenter/index?id=7" target="_blank" title="网上支付">网上支付</a> -->
<!-- 								<a href="SHOP_MAIN/helpcenter/index?id=5" target="_blank" title="验货与签收">验货与签收</a> -->
<!-- 								<a href="SHOP_MAIN/helpcenter/index?id=9" target="_blank" title="退款说明">退款说明</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</li> -->
			<li class="menu-item"><a  href="APP_MAIN/" class="menu-hd wap-nav" > <i></i>手机端</a></li>
			<li class="menu-item"><a href="SHOP_MAIN/helpcenter/index" class="menu-hd site-nav" target="_blank">帮助中心</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$.ajax({
	type:"post",
	url:"SHOP_MAIN/components/getlogininfo",
	success:function(data){
		var login_info_html='';
		if(data!=null && data!=""){
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
				login_info_html='<a class="sn-login color" href="SHOP_MAIN/member/index" target="_top">'+data["user_info"]["nick_name"]+'</a><em>欢迎您回来！</em><a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
				$('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em><a href="#" target="_blank" class="color NS-USER-NAME"></a></em><a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
		}else{
			login_info_html='<em>欢迎来到<?php echo $title; ?></em><a class="login color" href="SHOP_MAIN/login/index" target="_top">请登录</a><a class="register" href="SHOP_MAIN/login/registerbox" target="_top">免费注册</a>';
			$('div.login-info').html('<font id="login-info" class="login-info"><a class="login color" href="SHOP_MAIN/login/index" target="_top">登录</a><a class="register bg-color" href="SHOP_MAIN/login/registerbox" target="_top">免费注册</a></font>');
		}
		$('#login-info').html(login_info_html);
	}
});

//退出登录
function logout(){
	$.ajax({
		url: "SHOP_MAIN/member/logout",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
// 				location.href='SHOP_MAIN';
				$.msg("退出成功！");
				window.location.reload();
			} else {
				if(res["message"]!=null){
					$.msg(res["message"]);
				}
			}
		}
	})
}
</script>


<!-- 头部，菜单栏、搜索、导航栏 -->

	<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:09:42
	功能描述：顶部logo、搜索 
-->
<script type="text/javascript">
	//显示搜索历史
	function SearRecord(){
		var arrSear=new Array();
		var strSear = $.cookie("searchRecord");
		var sear_html='<span>最近搜索</span>';
		if(typeof(strSear)!='undefined' && strSear!='null'){
			var arrSear=JSON.parse(strSear);
			sear_html+='<a href="javascript:clearSearRecord();" class="clear-history"> <i></i>清空</a><br/>';
			for(var i=0;i<arrSear.length;i++){
				sear_html+='<a href="SHOP_MAIN/goods/goodslist?keyword='+arrSear[i]+'" style="display:inline-block;">'+arrSear[i]+'</a>';
			}
		}
		$('#search_titles').html(sear_html);
	}
	//清除搜索历史
	function clearSearRecord(){
		clear = JSON.stringify(new Array());
		$.cookie("searchRecord", clear);
		SearRecord();
	}
	
	$(function(){
		SearRecord();
	});
</script>
<div class="as-shelter"></div>
<div class="follow-box">
	<div class="follow-box-con">
		<a href="SHOP_MAIN" class="logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>" /></a>
		<div class="search NS-SEARCH-BOX-TOP">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type" style="height: 36px; overflow: hidden;">
							<li class="search-li-top curr" num="0">宝贝</li>
<!-- 							<li class="search-li-top" num="1" >店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text"
								class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>"  value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>">
						</div>
					</div>
					<input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
					<input type="button" id="btn_search_box_submit_top" value="搜索" class="button NS-SEARCH-BOX-SUBMIT-TOP">
				</div>
			</form>
		</div>
		<div class="login-info"></div>
	</div>
</div>
<div class="header">
	<div class="w1210">
		<div class="logo-info">
			<a href="SHOP_MAIN" class="logo"> <img src="__UPLOAD__/<?php echo $web_info['logo']; ?>" /></a>
		</div>
		<div class="search NS-SEARCH-BOX">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type">
							<li class="search-li curr" num="0">宝贝</li>
<!-- 							<li class="search-li" num="1">店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>" value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>" />
						</div>
					</div>
					<!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> --> 
					<input type="button" id="btn_search_box_submit" value="搜索" class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
				</div>
				<!-- -热门搜索热搜词显示 -->
				<div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
					<ul class="history-results">
						<li class="title" id="search_titles" style="word-wrap:break-word "></li>
						
					</ul>
					<ul class="rec-results">
						<li class="title"><span>正在热搜中</span> <i class="close"></i></li>
						<?php if(is_array($hot_keys) || $hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_keys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_key): $mod = ($i % 2 );++$i;?>
						<li><a  href="SHOP_MAIN/goods/goodslist?keyword=<?php echo $hot_key; ?>" title="<?php echo $hot_key; ?>"><?php echo $hot_key; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				<li class="first"><a href="javascript:void(0);"></a></li>
			</ul>
		</div>
		<!-- 搜索框右侧小广告 _start -->
		<div class="header-right">
		<a href="SHOP_MAIN/goods/cart" class="my-cart"><span class="ico"></span>购物车结算<span class="right_border"></span></a>
			<a href="SHOP_MAIN/member" class="my-mall"><span class="ico"></span>我的商城<span class="right_border"></span></a>
		</div>
		<!-- 搜索框右侧小广告 _end -->
	</div>
</div>
<!-- logo栏小广告  -->
<!-- logo栏小广告 
	李志伟
	2017年2月10日10:28:30
 -->
<script type="text/javascript">
	//logo右侧小广告 
	var ap_id=1052;
	var data=platformAdvLoad(ap_id);
	if(data !=''){
		$('.logo-info').append('<a href="'+data[0]['adv_url']+'" class="logo-right"> <img src="__UPLOAD__/'+data[0]['adv_image']+'"> </a>');
	}
	//搜索框右侧小广告
	//$('.header-right').html('<a href="'+data[1]['adv_url']+'" target="_blank" title="">  <img src="__UPLOAD__/'+data[1]['adv_image']+'"></a>');
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// 搜索框提示显示
		$('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
		});
		// 搜索框提示隐藏
		$(".NS-SEARCH-BOX-HELPER .close").on('click',function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
		});
		// 清除记录
		$(".NS-SEARCH-BOX-HELPER .clear").click(function() {
			var url = '/search/clear-record.html';
			$.post(
				url,
				{},
				function(result) {
					if (result.code == 0) {
						$(".history-results .active").empty();
					} else {
					}
				},
				'json');
		});
	});
	function search_box_remove(key) {
		var url = '/search/delete-record.html';
		$.post(url, {
			data : key
		}, function(result) {
			if (result.code == 0) {
				$("#" + key).css("display", "none");
			} else {

			}
		}, 'json');
	}
	$(document).on("click", function(e) {
		var target = $(e.target);
		if (target.closest(".NS-SEARCH-BOX").length == 0) {
			$('.NS-SEARCH-BOX-HELPER').hide();
		}
	})
</script>
<script type="text/javascript">
	//固定搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = keyword_obj.val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = keyword_obj.attr("data-searchwords");
			}
			
			$(keyword_obj).val(keywords);
			if(keywords==null)
			{
				keywords = "";
			}

			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));

			if ($(".search-li.curr").attr('num') == 0) {
				window.location.href = 'SHOP_MAIN/goods/goodslist?keyword='+keywords;
			}else{
				window.location.href = 'SHOP_MAIN/shop/shopstreet?shopname='+keywords;
			}
		});
	});
	//浮动搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = $(keyword_obj).val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = $(keyword_obj).attr("data-searchwords");
			}

			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));

			$(keyword_obj).val(keywords);
			if ($(".search-li-top.curr").attr('num') == 0) {
				window.location.href = 'SHOP_MAIN/goods/goodslist?keyword='+keywords;
			}else{
				window.location.href = 'SHOP_MAIN/shop/shopstreet?shopname='+keywords;
			}
		});
	});
</script>


<!--头部商品分类 start-->

	<!--
	创建人：李志伟
	创建时间：2017年2月7日 12:22:28
	功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
<?php if($is_head_goods_nav == 1): ?>
<div class="category-box">
<?php else: ?>
<div class="category-box category-box-border">
<?php endif; ?>
	<div class="w1210">
		<div class="home-category fl">
			<a href="SHOP_MAIN/goods/category" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
			<?php if($is_head_goods_nav == 1): ?>
			<div class="category-layer" style="display: block;">
			<?php else: ?>
			<div class="expand-menu category-layer" style="display: none;">
			<?php endif; ?>
				<!-- 公共的菜单栏-->
				<div class="category-layer">
					<span class="category-layer-bg"></span>
					<?php foreach($goods_category_one as $vo): ?>
					<div class="list">
						<dl class="cat">
							<dt class="cat-name">
								<a href="SHOP_MAIN/goods/goodslist?category_id=<?php echo $vo['category_id']; ?>" target="_blank" title="<?php echo $vo['category_name']; ?>"><?php echo $vo['category_name']; ?></a>
							</dt>
							<?php if($vo['count'] >0): ?>
							<i class="right-arrow"></i>
							<?php endif; ?>
						</dl>
						<div class="categorys" style="display: none;">
							<div class="item-left fl">
								<div class="subitems">
								<?php foreach($goods_category_two as $vo2): if($vo2['pid'] == $vo['category_id']): ?>
										<dl class="fore1">
											<dt style="width: 5em;">
												<a href="SHOP_MAIN/goods/goodslist?category_id=<?php echo $vo2['category_id']; ?>" target="_blank" title="<?php echo $vo2['category_name']; ?>">
													<em><?php echo $vo2['category_name']; ?></em>
													<?php if($vo2['count'] >0): ?>
													<i></i>
													<?php endif; ?>
												</a>
											</dt>
											<dd>
												<?php foreach($goods_category_three as $vo3): if($vo3['pid'] == $vo2['category_id']): ?>
													<a href="SHOP_MAIN/goods/goodslist?category_id=<?php echo $vo3['category_id']; ?>" target="_blank" title="<?php echo $vo3['category_name']; ?>"><?php echo $vo3['category_name']; ?></a>
													<?php endif; endforeach; ?>
											</dd>
										</dl>
									<?php endif; endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- 公共的菜单栏-->
	<div class="all-category fl" id="nav">
	<ul>
	<?php if(is_array($navigation_list) || $navigation_list instanceof \think\Collection || $navigation_list instanceof \think\Paginator): if( count($navigation_list)==0 ) : echo "" ;else: foreach($navigation_list as $k=>$nav): ?>
		<li class="fl" >
			<?php if($nav['nav_type'] == 0): if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="SHOP_MAIN<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="SHOP_MAIN<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; else: if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; endif; ?>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="wrap-line">
		<span style="left: 15px;"></span>
	</div>
</div>
	</div>
</div>

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

<!-- 内容 -->


<div class="margin-w1210">
	<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/user.css" />
<div class="breadcrumb">
	<a href="SHOP_MAIN" class="index">首页</a>
	<span class="crumbs-arrow">&gt;</span>
	<a href="SHOP_MAIN/member/index" class="js-bread-crumb"></a>
</div>
<div class="member-menu">
	<div class="user-info">
		<header>
			<span class="level-name"><?php echo $member_detail['level_name']; ?></span>
			<span class="exit" onclick="logout()" title="退出登录"><i class="icon i-exit"></i>退出</span>
		</header>
		<div class="logo" onclick="location.href='SHOP_MAIN/member/person';" title="查看个人资料">
			<?php if($member_img != '' and $member_img != '0'): ?>
			<img id="headImagePath" src="__UPLOAD__/<?php echo $member_img; ?>" />
			<?php else: ?>
			<img id="headImagePath" src="__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png" />
			<?php endif; ?>
		</div>
		<strong onclick="location.href='SHOP_MAIN/member/person';" title="查看个人资料"><?php echo $member_info['user_info']['nick_name']; ?></strong>
	</div>
	<article class="list">
		<div class="item">
			<h3>
				<i class="icon i-member-center"></i>
				<span>会员中心</span>
			</h3>
			<ul>
				<li onclick="location.href='SHOP_MAIN/member/index';" data-href="SHOP_MAIN/member/index">
					<span>欢迎页</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/person';" data-href="SHOP_MAIN/member/person">
					<span>个人资料</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/usersecurity';" data-href="SHOP_MAIN/member/usersecurity">
					<span>账户安全</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/addresslist';" data-href="SHOP_MAIN/member/addresslist">
					<span>收货地址</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/balancelist';" data-href="SHOP_MAIN/member/balancelist">
					<span>账户余额</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/balancewithdrawlist';" data-href="SHOP_MAIN/member/balancewithdrawlist">
					<span>提现记录</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/vouchers';" data-href="SHOP_MAIN/member/vouchers">
					<span>我的优惠券</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/integral';" data-href="SHOP_MAIN/member/integrallist">
					<span>我的积分</span>
					<i class="icon i-arrow"></i>
				</li>
			</ul>
		</div>
		<div class="item">
			<h3>
				<i class="icon i-trading-center"></i>
				<span>交易中心</span>
			</h3>
			<ul>
				<li onclick="location.href='SHOP_MAIN/member/orderlist';" data-href="SHOP_MAIN/member/orderlist">
					<span>我的订单</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/backlist';" data-href="SHOP_MAIN/member/backlist">
					<span>退款/退货及维修</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/goodsevaluationlist';" data-href="SHOP_MAIN/member/goodsevaluationlist">
					<span>商品评价/晒单</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/goodscollectionlist';" data-href="SHOP_MAIN/member/goodscollectionlist">
					<span>商品收藏</span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='SHOP_MAIN/member/shopcollectionlist';" data-href="SHOP_MAIN/member/shopcollectionlist">
					<span>店铺收藏</span>
					<i class="icon i-arrow"></i>
				</li>
			</ul>
		</div>
	</article>
</div>
<script type="text/javascript">
$(function(){
	//选中
	var path_info='<?php echo $path_info; ?>';
	if(path_info==''||path_info=="member"){
		$("li[data-href^='SHOP_MAIN/member/index']").addClass('current');
		$(".js-bread-crumb").attr("href",$("li[data-href^='SHOP_MAIN/member/index']").attr("data-href"));
		$(".js-bread-crumb").text($("li[data-href^='SHOP_MAIN/member/index']").text());
	}else{
		$("li[data-href^='SHOP_MAIN/<?php echo $path_info; ?>']").addClass('current');
		$(".js-bread-crumb").attr("href",$("li[data-href^='SHOP_MAIN/<?php echo $path_info; ?>']").attr("data-href"));
		$(".js-bread-crumb").text($("li[data-href^='SHOP_MAIN/<?php echo $path_info; ?>']").text());
	}
});
</script>
	<article class="member-main">
		<!-- 快捷方式 -->
		<div class="shortcuts">
			<!-- 关注中 -->
			<article class="item focus-on">
				<h4>关注中</h4>
				<ul>
					<li onclick="location.href='SHOP_MAIN/member/goodscollectionlist'">
						<i class="icon i-goods"></i>
						<span>商品</span>
					</li>
					<li>
						<i class="icon i-footprint"></i>
						<span>足迹</span>
					</li>
				</ul>
			</article>
			
			<!-- 交易进行 -->
			<article class="item trading">
				<h4>交易进行</h4>
				<ul>
					<li onclick="location.href='SHOP_MAIN/member/orderlist?status=0'">
						<i class="icon i-obligation"></i>
						<span>待付款</span>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/orderlist?status=1'">
						<i class="icon i-send-the-goods"></i>
						<span>待发货</span>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/orderlist?status=2'">
						<i class="icon i-for-the-goods"></i>
						<span>待收货</span>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/orderlist?status=5'">
						<i class="icon i-evaluate"></i>
						<span>待评价</span>
					</li>
				</ul>
			</article>
			
			<!-- 售后服务 -->
			<article class="item after-sales-service">
				<h4>售后服务</h4>
				<ul>
					<li onclick="location.href='SHOP_MAIN/member/backlist'">
						<i class="icon i-refund"></i>
						<span>退款</span>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/backlist'">
						<i class="icon i-return-the-goods"></i>
						<span>退货</span>
					</li>
				</ul>
			</article>
			
		</div>
		
		<!-- 用户公告 -->
		<div class="user-notice">
			<h4>用户中心公告</h4>
			<!--<marquee direction="left" align="left" behavior="scroll" scrollamount="1" scrolldelay="0" loop="-1"><?php echo $user_notice; ?></marquee> -->
			<p><?php echo $user_notice; ?></p>
		</div>
		
		<div class="block">
			<!-- 余额、积分、优惠券(资产) -->
			<div class="assets">
				<ul>
					<li onclick="location.href='SHOP_MAIN/member/balancelist'" title="查看余额" data-flag="i-balance">
						<header>
							<i class="icon i-balance"></i>
							<span>余额</span>
						</header>
						<strong><?php echo $balance; ?>元</strong>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/integral'" title="查看积分" data-flag="i-integral">
						<header>
							<i class="icon i-integral"></i>
							<span>积分</span>
						</header>
						<strong><?php echo $point; ?>积分</strong>
					</li>
					<li onclick="location.href='SHOP_MAIN/member/vouchers'" title="查看优惠券" data-flag="i-coupons">
						<header>
							<i class="icon i-coupons"></i>
							<span>优惠券</span>
						</header>
						<strong><?php echo $vouchersCount; ?>张</strong>
					</li>
				</ul>
			</div>
			<!-- 安全等级 -->
			<div class="security">
				<div class="security-level">
					<h4>安全等级</h4>
					
					<?php if($member_info['user_info']['user_tel'] != '' and $member_info['user_info']['user_email'] != ''): ?>
					<span>安全</span>
					<i class="icon i-security-level"><em class="security" data-level="0"></em></i>
					<?php elseif($member_info['user_info']['user_tel'] != '' OR $member_info['user_info']['user_email'] != ''): ?>
					<span>良好</span>
					<i class="icon i-security-level"><em class="good" data-level="75"></em></i>
					<?php else: ?>
					<span>一般</span>
					<i class="icon i-security-level"><em class="general" data-level="100"></em></i>
					<?php endif; ?>
					<a href="SHOP_MAIN/member/usersecurity" title="提升账户安全等级">提升 &gt;</a>
				</div>
				<div class="info">
					<?php if($member_info['user_info']['user_tel'] != ''): ?>
					<label>手机</label>
					<span><?php echo $member_info['user_info']['user_tel']; ?></span>
					<a href="SHOP_MAIN/member/usersecurity?atc=user_mobile">解除绑定</a>
					<?php else: ?>
					<label style="margin-right:10px;">手机</label>
					<a href="SHOP_MAIN/member/usersecurity?atc=user_mobile">未绑定</a>
					<?php endif; ?>
				</div>
				<div class="info">
					<?php if($member_info['user_info']['user_email'] != ''): ?>
					<label>邮箱</label>
					<span><?php echo $member_info['user_info']['user_email']; ?></span>
					<a href="SHOP_MAIN/member/usersecurity?atc=user_email">解除绑定</a>
					<?php else: ?>
					<label style="margin-right:10px;">邮箱</label>
					<a href="SHOP_MAIN/member/usersecurity?atc=user_email">未绑定</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<div class="block">
			<!-- 交易提醒 -->
			<div class="trading-to-remind">
			
				<h4>交易提醒<span onclick="location.href='SHOP_MAIN/member/orderlist';">查看全部订单<i class="icon i-arrow"></i></span></h4>
				<header>
					<ul>
						<li onclick="location.href='SHOP_MAIN/member/orderlist?status=0';">待付款<span>(<?php echo $wait_pay_num; ?>)</span></li>
						<li onclick="location.href='SHOP_MAIN/member/orderlist?status=5';">待评价<span>(<?php echo $wait_evaluate; ?>)</span></li>
					</ul>
				</header>
				<article class="order-list">
					<?php if(count($orderList) != 0): ?>
					<table>
						<colgroup>
							<col width="15%">
							<col width="40%">
							<col width="30%">
							<col width="10%">
						</colgroup>
						
						<?php foreach($orderList as $order): ?>
						<tr>
							<td>
								<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $order['order_item_list']['0']['goods_id']; ?>" class="img">
									<img src="__UPLOAD__/<?php echo $order['order_item_list']['0']['picture']['pic_cover_small']; ?>"/>
									<span class="order-num"><?php echo $order['order_item_list']['0']['num']; ?></span>
								</a>
							</td>
							<td>
								<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $order['order_item_list']['0']['goods_id']; ?>" title="<?php echo $order['order_item_list']['0']['goods_name']; ?>" target="_blank"><?php echo $order['order_item_list']['0']['goods_name']; ?></a>
							</td>
							<td>
								<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $order['order_item_list']['0']['goods_id']; ?>" title="<?php echo $order['order_item_list']['0']['goods_name']; ?>" target="_blank"><?php echo $order['order_item_list']['0']['sku_name']; ?></a>
							</td>
							<td>
								<a class="cancel-order" href="javascript:;" onclick="cancel_order(<?php echo $order['order_id']; ?>)">取消订单</a>
							</td>
							<td>
								<a href="SHOP_MAIN/member/orderdetail?orderid=<?php echo $order['order_id']; ?>" title="查看订单" target="_blank">查看</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</table>
					<?php else: ?>
					<div class="no-order-data">
						<i class="icon i-order"></i>
						<p>您好久没在商城购物了，赶快<span onclick="location.href='SHOP_MAIN';">去看看</span>吧！</p>
					</div>
					<?php endif; ?>
				</article>
			</div>
			<!-- 我的购物车 -->
			<div class="my-shopping-cart">
				<h4>我的购物车</h4>
				<hr class="divider"/>
				<?php if(count($cart_list) != 0): ?>
				<div class="list">
					<ul>
						<?php if(is_array($cart_list) || $cart_list instanceof \think\Collection || $cart_list instanceof \think\Paginator): if( count($cart_list)==0 ) : echo "" ;else: foreach($cart_list as $key=>$cart): ?>
						<li>
							<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $cart['goods_id']; ?>" target="_blank" title="<?php echo $cart['goods_name']; ?>" class="pic">
								<?php if($cart['picture_info'] !=''): ?>
								<img src="__UPLOAD__/<?php echo $cart['picture_info']['pic_cover_small']; ?>" alt="<?php echo $cart['goods_name']; ?>" />
								<?php else: ?>
								<img src="__TEMP__/<?php echo $style; ?>/public/images/goods/default_goods_img.png" alt="<?php echo $cart['goods_name']; ?>" />
								<?php endif; ?>
							</a>
							<div class="item">
							<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $cart['goods_id']; ?>" target="_blank" title="<?php echo $cart['goods_name']; ?>" class="name"><?php echo $cart['goods_name']; ?></a>
							<p>售价：<strong>￥<?php echo $cart['price']; ?></strong></p>
							</div>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<p style="text-align: center;font-size: 12px;margin: 10px 0;padding-bottom: 5px;">
						<a href="SHOP_MAIN/goods/cart" target="_blank" title="查看购物车所有商品">查看购物车所有商品<i class="icon i-arrow"></i></a>
					</p>
				</div>
				<?php else: ?>
				<div class="no-cart-data">
					<i class="icon i-shipping-cart"></i>
					<p>您的购物车中还没有商品<br/>赶快<span onclick="location.href='SHOP_MAIN';">去看看</span>吧！</p>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
		<!-- 商品收藏 -->
		<div class="goods-collection">
			<h4>商品收藏<span onclick="location.href='SHOP_MAIN/member/goodscollectionlist';">查看收藏的所有商品<i class="icon i-arrow"></i></span></h4>
			<hr class="divider"/>
			<?php if($goods_collection_list_count>0): ?>
			<div class="list">
				<ul>
					<?php if(is_array($goods_collection_list) || $goods_collection_list instanceof \think\Collection || $goods_collection_list instanceof \think\Paginator): if( count($goods_collection_list)==0 ) : echo "" ;else: foreach($goods_collection_list as $k=>$goods): ?>
					<li>
						<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>" target="_blank" class="img">
							<?php if($goods['pic_cover_mid'] !=''): ?>
							<img src="__UPLOAD__/<?php echo $goods['pic_cover_mid']; ?>" alt="<?php echo $goods['goods_name']; ?>" />
							<?php else: ?>
							<img src="__TEMP__/<?php echo $style; ?>/public/images/goods/default_goods_img.png" alt="<?php echo $goods['goods_name']; ?>" />
							<?php endif; ?>
							<strong>￥<?php echo $goods['promotion_price']; ?></strong>
						</a>
						<a href="SHOP_MAIN/goods/goodsinfo?goodsid=<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>" target="_blank" class="name"><?php echo $goods['goods_name']; ?></a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<?php else: ?>
			<div class="no-collection-data">
				<i class="icon i-collection"></i>
				<p>您还没有收藏任何商品，赶快<span onclick="location.href='SHOP_MAIN';">去看看</span>吧！</p>
			</div>
			<?php endif; ?>
		</div>
	</article>
</div>


<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
<div class="footer">
	<div class="dsc-service">
		<div class="w w1200 relative">
			<ul class="service-list">
				<li>
					<div class="service-tit service-zheng">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-zheng.png">
					</div>
					<div class="service-txt">正品保障</div>
				</li>
				<li>
					<div class="service-tit service-qi">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-qi.png"></i>
					</div>
					<div class="service-txt">七天包退</div>
				</li>
				<li>
					<div class="service-tit service-hao">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-grin.png">
					</div>
					<div class="service-txt">好评如潮</div>
				</li>
				<li>
					<div class="service-tit service-shan">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-light.png"></i>
					</div>
					<div class="service-txt">闪电发货</div>
				</li>
				<li class="last">
					<div class="service-tit service-quan">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-tronphy.png">
					</div>
					<div class="service-txt">权威荣誉</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="dsc-help">
		<div class="w w1200">
			<div class="help-list">
				<?php if(is_array($platform_help_class) || $platform_help_class instanceof \think\Collection || $platform_help_class instanceof \think\Paginator): if( count($platform_help_class)==0 ) : echo "" ;else: foreach($platform_help_class as $key=>$class_vo): ?>
				<div class="help-item">
					<h3><?php echo $class_vo['class_name']; ?></h3>
					<ul>
						<?php if(is_array($platform_help_document) || $platform_help_document instanceof \think\Collection || $platform_help_document instanceof \think\Paginator): if( count($platform_help_document)==0 ) : echo "" ;else: foreach($platform_help_document as $key=>$document_vo): if($class_vo['class_id'] == $document_vo['class_id']): ?>
						<li><a href="SHOP_MAIN/helpcenter/index?id=<?php echo $document_vo['id']; ?>"
							title="售后流程" target="_blank"><?php echo $document_vo['title']; ?></a></li> <?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="help-cover">
				<div class="help-ctn">
					<div class="help-ctn-mt">
						<span>服务热线</span> <strong><?php echo $web_info['web_phone']; ?></strong>
					</div>
					<div class="help-ctn-mb">

						<a id="IM" im_type="dsc" onclick="openWin(this)"
							href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes"
							target="_blank" class="btn-ctn"><img
							src="__TEMP__/<?php echo $style; ?>/public/images/icon-csu.png"
							style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
					</div>
				</div>
				<div class="help-scan">
					<div class="code">
						<img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
<div class="dsc-copyright">
	<div class="w w1200">
		<p class="copyright_info">
			<a href="#">Copyright © 2015-2025 Niushop开源商城&nbsp;版权所有 保留一切权利</a>
		</p>
		<b> <a href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank"
			class="copyright-logo">山西牛酷信息科技有限公司&nbsp;&nbsp;</a> <span>提供技术支持&nbsp;400-886-7993</span>
		</b>
	</div>
</div>



<script type="text/javascript">
$(function(){
	//给安全等级添加动画效果
	$(".security-level em").animate({ width : $(".security-level em").attr("data-level") },1200);
	$(".assets li").hover(function(){
		var flag = $(this).attr("data-flag");
		$(this).find("i").removeClass(flag).addClass(flag+"-hover");
		$(this).find("span").css("color","#0689e1");
		$(this).find("strong").css("color","#0689e1");
	},function(){
		var flag = $(this).attr("data-flag");
		$(this).find("i").removeClass(flag+"-hover").addClass(flag);
		$(this).find("span").css("color","#333333");
		$(this).find("strong").css("color","#333333");
	});
});
function cancel_order(order_id){
	$.ajax({
		url:'SHOP_MAIN/member/orderclose',
		type:'post',
		data:{'order_id':order_id},
		dataType:"json",
		success:function(res){
			if(res['code']>0){
				$.msg("取消订单成功");
				location.href="SHOP_MAIN/member/index";
			}else{
				$.msg(res['message']);
			}
		}
	})
}
</script>


<?php if($uid == ''): ?>
	<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index:101;
	width:100px;
	height:30px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).on("resize",function(){
		//获取当前屏幕的宽度和高度
		var window_width = parseFloat($(window).width());
		var window_height = parseFloat($(window).height());
		//获取登录框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定登录框的显示位置
		var top = (window_height-div_height)/2;
		var left = (window_width-div_width)/2;
		$("#layui-layer").css({"top":top,"left":left});
	})
	//自执行一次resize函数
	$(window).trigger("resize");
});
function titleMove() {
	var moveable = true;
	var loginDiv = document.getElementById("layui-layer");
	//以下变量提前设置好
	var clientX = window.event.clientX;//鼠标水平位置
	var clientY = window.event.clientY;//鼠标垂直位置
	var moveTop = parseFloat(loginDiv.style.top);//登录框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//登录框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//登录框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//登录框的高度 
	var max_width = docX-divWidth;
	var max_height = docY-divHeight;
	document.onmousemove = function MouseMove() {
		if (moveable) {
			var y = moveTop + window.event.clientY - clientY;  //当前鼠标位置减去上次鼠标位置
			var x = moveLeft + window.event.clientX - clientX;
			if (x >= 0 && y >= 0 && moveTop+divHeight<=docY &&	moveLeft+divWidth<=docX) {
				loginDiv.style.top = y + "px";
				loginDiv.style.left = x + "px";
			}else{
				if(x<0){
					loginDiv.style.left = "5px";
			}else if(y<0){
				loginDiv.style.top = "5px";
			}else if(moveTop+divHeight>docY){
				loginDiv.style.top = max_height + "px";
			}else if(moveLeft+divWidth>docX){
				loginDiv.style.left = max_width + "px";
			}
		} 
	}
}

document.onmouseup = function Mouseup() {
		moveable = false;
	}
}
</script>
<input id="goods_id" value="<?php echo $goods_info['goods_id']; ?>" type="hidden">
<div id="mask-layer-login" style="display:none;position:fixed;top:0;width:100%;height:100%;z-index:999999;background:rgba(0,0,0,0.75);"></div>
<div class="layui-layer layui-layer-page layer-anim" id="layui-layer" type="page" times="100002" showtime="0" contype="string" style="display:none;z-index: 19891015;position:fixed;width:346px;height:436px;">
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();">您尚未登录<span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						还没有账号？<a href="SHOP_MAIN/login/registerbox" class="regist-link color">立即注册<i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)">会员登录</li>
						</ul>
					</div>
					<!-- 普通登录 star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="手机号/会员名/邮箱" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="请输入密码" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="请输入验证码 " />
								<img id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'" />
							</div>
						</div>
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动登录</span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="SHOP_MAIN/login/findpasswd" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="立即登录" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="APP_MAIN/login/oauthlogin?type=WCHAT" data-id="qq" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="APP_MAIN/login/oauthlogin?type=QQLOGIN" data-id="wchat" class="website-login"><i class="qq"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span><span class="layui-layer-resize"></span>
</div>
<!-- 验证码脚本 -->
<script type="text/javascript">
// 登陆 登录时 登录按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('用户名不可为空');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('密码不可为空');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('验证码不可为空');
			$("#vertification").select();
			return;
		}
	}
	$.ajax({
		type:"post",
		url:"SHOP_MAIN/login/login",
		data:{"userName" : userName,"password" : password,"vertification" : vertification},
		success : function(data){
			if(data['code']>0){
				$("#hidden_uid").val(data['code']);
				if(goodsid == ''){
					$.msg('登陆成功！');
					window.location.reload();
				}else{
					login_buy_goods(event);
				}
			}else{
				$.msg(data['message']);
				$("#verify_img").attr("src",'<?php echo captcha_src(); ?>');
			}
		}
	});
}
function login_buy_goods(event){
	var image_url = "";
	var goodsid =  $("#goods_id").val();
	var tag = $('#mask-layer-login').attr("data-tag");
	 $.cart.add(goodsid, $(".amount-input").val(), {
		is_sku: true,
		image_url: image_url,
		event: event,
		tag : tag
	})
}
</script>
<?php endif; ?>

<script>
(function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https') {
		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else {
		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
})();
</script>
<?php if($default_client): ?>
<div style="position:fixed;right:0;bottom:10%;z-index:999999;" onclick="location.href='APP_MAIN';" id="go_mobile">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_mobile.png"/>
</div>
<script>
$(function(){
	checkTerminal()
});
window.onresize = function(){
	checkTerminal();
}
function checkTerminal(){
	if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && window.screen.availWidth<768){
		//跳到手机端
		$("#go_mobile").show();
	}else{
		$("#go_mobile").hide();
	}
}
</script>
<?php endif; ?>
</body>
</html>