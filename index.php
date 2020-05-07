<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>乐购商城首页</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
 <?php session_start();?>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script language="javascript"> 
function ssyz(fom){
if(fom.ss.value==''){
alert('搜索不能为空');
fom.ss.select();
return false;
}
}
</script>
<div id="header">
<div id="login">
<p> <span class="p1"><a style="margin-right:5px;">欢迎</a>
<?php if(isset($_SESSION['username']))echo $_SESSION['username'];?>
<a href='logout.php'><img  src='images/login1.gif' />注销</a>
<a href='login.php'><img  src='images/login1.gif' />请登录</a> <a href='regsiter.php'><img  src='images/login1.gif' />免费注册</a>	</span><span class="p2"> <a href="checkExistUser.php"><img  src="images/login2.gif" />购物车</a> <a href="showIndent.php"><img  src="images/login2.gif" />我的订单</a><a href="">
</a></span></a> </p>
</div>
<div id="logo">
<h1><img src="images/LeGo.gif" width="115" height="52"/>各种好用的商品尽在乐GO商城</h1>
</div>
<form  name="form1"action="search.php" method="post" class="myform" onsubmit="return ssyz(this)">
<span class="hot">热门搜索：</span>
<input name="ss" class="ispu" type="text" value="输入关键字"  onfocus="ss.value=''"/>
<input name="ok" class="button"  type="submit" id="搜索" value="搜索" />
</form>
</div>
<div id="nav" >
<ul>
<li><a href="index.php">首页</a></li>
<li><a href="goods.php">新品预售</a></li>
 
<li><a href="showRecommend.php">推荐商品</a></li> 
<li> <a href="showType.php?typeid=1">精选男装</a></li> 
<li> <a href="showType.php?typeid=2">时尚女装</a></li>
<li><a href="showType.php?typeid=3">美味零食</a></li>
<li><a href="showType.php?typeid=4">便利家电</a></li>
<li><a href="showType.php?typeid=5">潮流酷车</a></li>
<li><a href="showType.php?typeid=6">精美家居</a></li>
<li><a href="showType.php?typeid=7">电脑办公</a></li>
</ul>
</div>
<!--调用头部-->
<div id="content">
<div id="left">
<link rel="stylesheet" type="text/css" href="css/left.css" />
<div id="subnav">
<h3><img src="images/left.PNG" />商品分类</h3>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=1">男装</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=2">女装</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=3">零食</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=4">家电</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=5">汽车</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=6">家居</a></h4>
<h4><img src="images/login2.gif" /><a href="showType.php?typeid=7">电脑办公</a></h4>
</div><!--调用左部分的商品分类-->
<div id="bottom">
 
<!--导入数据库访问层代码-->
<h3><img src="images/left.PNG" />乐GO公告</h3>
<ul>
<li style="text-align:center;"><a href="advertisement.php?id=1"  style="margin:0 auto;">家庭清洁</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=2"  style="margin:0 auto;">品质生活</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=3"  style="margin:0 auto;">爆款直降</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=6"  style="margin:0 auto;">国际海购</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=5"  style="margin:0 auto;">纸品百货</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=7"  style="margin:0 auto;">居家优品</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=8"  style="margin:0 auto;">潮流前线</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=10"  style="margin:0 auto;">手机酷玩</a></li>
<li style="text-align:center;"><a href="advertisement.php?id=11"  style="margin:0 auto;">个性推荐</a></li>
</ul>
</div><!--调用左部分的乐购公告-->
</div>
<div id="con">
<!--首页图片特效代码开始-->
<div id="banner">
<script language="javascript" src="js/pptBox.js"></script>
<script> 
var box =new PPTBox();
box.width = 510; //宽度
box.height = 314;//高度
box.autoplayer = 3;//自动播放间隔时间
//box.add({"url":"图片地址","title":"悬浮标题","href":"链接地址"})
box.add({"url":"images/main1.jpg","href":"","title":"悬浮提示标题1"})//url为换图片 href为点击后链接的地址
box.add({"url":"images/main2.jpg","href":"","title":"悬浮提示标题2"})//url为换图片 href为点击后链接的地址
box.add({"url":"images/main3.jpg","href":"","title":"悬浮提示标题3"})//url为换图片 href为点击后链接的地址
box.add({"url":"images/main4.jpg","href":"","title":"悬浮提示标题4"})//url为换图片 href为点击后链接的地址
box.show();
</script>
</div>
<!--首页图片特效代码结束-->
<div id="right">
<h3><img src="images/right.gif" /><span>新品预售</span></h3>
<p id="rp"> <a href="showRecommendGoods.php?id=8"><img src="images/1.gif" />努比亚</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=9"><img src="images/2.gif" />坚果炒货</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=10"><img src="images/3.gif" />休闲运动棒球服</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=12"><img src="images/4.gif" />山楂蜜饯果干</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=13"><img src="images/5.gif" />炒米</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=14"><img src="images/6.gif" />褶裤脚七分裤</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=15"><img src="images/7.gif" />潮人卫衣</a></p>
<p id="rp"> <a href="showRecommendGoods.php?id=21"><img src="images/8.gif" />潮人卫衣</a></p>
</div>
<div id="confooter">
	
<?php include_once "include/lg_goods.php"; 
	$sqll=findRe(0,9);	
?>
	
<h3><span class="hl"><img id="conimg" src="images/right5.jpg" />商品推荐</span><a href="showRecommend.php"><span class="hr">更多商品推荐>></span></a></h3>
<ul>
	
<?php 
foreach($sqll as $info){
	

?>
<script language="javascript"> 
function resizeImage(obj){if(obj.height>55)obj.height=55;if(obj.width>60)obj.width=60; } 
</script>
<li><a href="goodsInformation.php?id=<?php echo $info['goodsid'];?>">
					<img src="admin/<?php echo $info['photo'];?>"  onload="resizeImage(this)"/>
				
		<h5><span>名称：</span>
		<!--规定标题不能超过10个字符-->
			<?php echo $info['goodsname'];?>		</h5>
		<p><?php echo mb_substr($info['introduction'],0,10)."..."; ?></p>
	</a><p>价格：<span><?php echo $info['goodsprice'];?></span></p>
</li>

 <?php 
 }
 ?>
</ul>
</div>
</div>
</div>
<div id="footer">
<p>地址：广州市天河区科华街351号   版权所有：广东科学技术职业学院</p>
<p>互联网信息服务备案编号：111111111号    技术支持：计算机工程技术学院</p>
</div>
</body>
</html>

