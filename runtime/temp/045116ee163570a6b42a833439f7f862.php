<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"template/wap\default\Goods\brandlist.html";i:1500286963;s:30:"template/wap\default\base.html";i:1500286964;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var ADMINMAIN='ADMIN_MAIN';

$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
</style>


<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">
<style>
.sliding{
	margin-top:10px;
	overflow-y: auto;
	background: #ffffff;
}
.sliding::-webkit-scrollbar {
	display: none;
}
.sliding ul {
    white-space: nowrap;
	height:51px;
	line-height: 50px;
	text-align: center;
}
.sliding ul li {
    white-space: pre-line;
	padding:0 10px 0 10px;
    display: inline-block;
	background:#ffffff;
	border-right:2px solid #f8f8f8;
}
.sliding ul li:LAST-CHILD{
	border:0;
}
.selected{
	color:red;
}
.brand{
    width: 100%;
    height: 280px;
    overflow: hidden;
    position: relative;
    margin-top: 10px;
}
.brand_img{
	display: inline-block;
    vertical-align: middle;
    width: 100%;
    height: auto;
}
</style>

</head>
<body class="body-gray">
	

<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title">品牌专区</div>
</section>

<?php if($brand_adv['is_use'] == 1): if($brand_adv['adv_list'][0]['adv_image'] != ''): ?>
<div class="slick" style="margin-top: 47px;">
	<a href="<?php echo $brand_adv['adv_list'][0]['adv_url']; ?>">
		<img src="__UPLOAD__/<?php echo $brand_adv['adv_list'][0]['adv_image']; ?>" >
		<!-- style="height:<?php echo $brand_adv['ap_height']; ?>px;" -->
	</a>
</div>
   <?php endif; endif; ?>


	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<!-- 左侧分类-->
<?php if($brand_adv['is_use'] == 1): ?>
<div class="sliding">
	<ul id="slider">
		<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
		<li <?php if($k ==0): ?>class = "defaualt selected" <?php endif; ?>onclick="showCategorySecond(<?php echo $category['category_id']; ?>,this)"><?php echo $category['category_name']; ?></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php else: ?>
<div class="sliding" style="margin-top:47px;">
	<ul id="slider">
		<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
		<li <?php if($k ==0): ?>class = "defaualt selected" <?php endif; ?>onclick="showCategorySecond(<?php echo $category['category_id']; ?>,this)"><?php echo $category['category_name']; ?></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endif; ?>
<!-- <div class="custom-tag-list clearfix">
	<div class="mask" id="grouGoodsListmask"></div>
	<div class="custom-tag-list-menu-block">
		<div style="height: 294px; display: none;"></div>
		<ul class="custom-tag-list-side-menu" style="position: relative;width:100%;" id='goods_group'>
			<?php if(is_array($goods_category_list_1) || $goods_category_list_1 instanceof \think\Collection || $goods_category_list_1 instanceof \think\Paginator): if( count($goods_category_list_1)==0 ) : echo "" ;else: foreach($goods_category_list_1 as $k=>$category): ?>
			<li val="<?php echo $category['category_id']; ?>">
				<a <?php if($k==0): ?> class="selected" <?php endif; ?> onclick="showCategorySecond(this,<?php echo $category['category_id']; ?>)"><span><?php echo $category['category_name']; ?></span></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div> 
</div>-->
<div class="custom-tag-list-goods" id='good_list'></div>
<script type="text/javascript">

//显示二级分类
// 	$(function(){
// 		showCategorySecond(1);
// 	})
	 $(function(){
		 $('.defaualt').eq(0).click();
	 })
	function showCategorySecond(category_id,obj){
		//设置选中效果
		if(obj != null){
			if($(obj).length!=0){
				$("#slider li").removeClass("selected");
				$(obj).addClass("selected");
			}
		}
		$.ajax({
			url:'APP_MAIN/Goods/brandlist',
			async:false,
			data:{'category_id':category_id},
			dataType:'json',
			success:function(data){
				var list_html='';
				if(data.length==0){
					$('#good_list').html('<div class="nothing-data" align="center"><img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/><div>没有找到您想要的商品…</div></div>');
					return false;
				}
				for(key in data){
					var item=data[key];
					list_html+='<dl>'
					+'<div class="brand">'
					+'<a href="APP_MAIN/goods/goodslist?brand_id='+item.brand_id+'"><div style="width:100%;height:230px;"><img class="brand_img" src="__UPLOAD__/'+item.brand_ads+'" alt="'+item.brand_name+'"></div></a>'
					+'<span style="margin-top:0px;background: #FFF;">'
					+'<a href="APP_MAIN/goods/goodslist?brand_id='+item.brand_id+'"><img src="__UPLOAD__/'+item.brand_pic+'" alt="'+item.brand_name+'" style="width:60%;margin-top:3%;float:left;"></a>'
					+'<p style="width: 40%;float: right;text-align: center;height: 50px;line-height: 50px;"><a href="APP_MAIN/goods/goodslist?brand_id='+item.brand_id+'">'+item.brand_name+'</a></p>'
					+'</span>'
					+'</div>'
					+'</dl>';
				}
				$('#good_list').html(list_html);
			}
		});
	}	
</script>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>