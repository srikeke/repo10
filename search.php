<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>搜索结果</title>
<link rel="stylesheet" type="text/css" href="css/yuding.css" />
</head>
<body>
<?php include "header.php";?>
<div id="content">
<div id="left">
<?php include "left.php";?><!--调用左部分的商品分类-->
<?php include "leftAdvertisement.php";	
?><!--调用左部分的乐购公告-->
</div>
<div id="right">
<?php

include_once "include/lg_goods.php";//导入数据库访问层函数
//以下内容为搜索效果的实现
$sosu = "";//搜索关键词
$rownums = 0;//总记录数
$page_num = 0;//总页数

if(@$_GET['sosuq']){
	$sosu=$_GET['sosuq'];
}
if(isset($_POST['ok'])){
    $sosu=$_POST['ss'];
}

$size=10; //页面显示大小
if(@$_GET['page_id']){
	$page_id=$_GET['page_id'];
	$sosuq=$sosu;//$_GET['sosuq'];
	$start=($page_id-1)*$size;
}else{
	$page_id=1;
	$start=0;
 }

$cx=findGoodsByName($sosu);//调用函数进行模糊查询
if($cx) {
        $rownums = count($cx);
       // alert("总记录数".$rownums);
}
else{
	$cx=0;//调用函数进行模糊查询
 }
$page_num=ceil( $rownums/$size);
if($rownums){
	$fycx=findGoodsByNamelist($sosu,$start,$size);//调用函数进行模糊查询并分页
}else{
	$fycx=array();findGoodsByNamelist($sosu,$start,$size);//调用函数进行模糊查询并分页
 }
if(count($fycx)==0){
	echo "对不起,没有相关的内容";
}else{
	foreach($fycx as $row){
?>
<div id="r1"  style="margin-top:10px;">
<script language="javascript"> 
function resizeImage(obj){if(obj.height>150)obj.height=150;if(obj.width>150)obj.width=150; } 
</script> 
<div id="rleft"><a href="goodsingfo.php?id=<?php echo $row['goodsid'];?>"><img src="admin/<?php echo $row['photo'];?>" onload="resizeImage(this)"/></a></div>
<div id="rright">
<h4><?php echo $row['goodsname'];?></h4> <p>
<?php 
$nr=$row['introduction'];
if(strlen($nr)>220){
	$nr=substr($nr,0,220);
}
  echo $nr."..";
?> </p>

<p  class="rp">现价<span class="xianjia"> ￥
<?php 
$bookprice=sprintf('%.2f',$row['goodsprice']);
$vipprice=sprintf('%.2f',$row['vipprice']);
$d=$vipprice/10;
$dz=sprintf('%.2f',$d);
$jg=$bookprice*$dz;
echo sprintf('%.2f',$jg);
?> </span>原价<span class="yuanjia">￥<?php echo sprintf('%.2f',$row['goodsprice']);?></span> 折扣：<span class="zheko"><?php echo sprintf('%.2f',$row['vipprice']);?>折 </span></p>
<a href="gmgoods.php?id=<?php echo $row['goodsid'];?>"><img src="images/buy_btn.png" /></a><img src="images/collect_btn.png" /></div>
</div>
<?php 
	}
}
?>
<p style=" clear:both; text-align:right;">
<?php
echo "本站共有&nbsp;".$rownums."&nbsp;条记录&nbsp;";
echo "每页显示&nbsp;".$size."&nbsp;条&nbsp;";
echo "第&nbsp;".$page_id."&nbsp;页/共&nbsp;".$page_num."&nbsp;页&nbsp;";
$prepage=$page_id-1;    //上一页  
$nextpage=$page_id+1;   //下一页
if($page_id>=1 && $page_num>1){
echo "<a href='?page_id=1&sosuq=$sosu'>第一页</a>";
}
if($page_id>1 && $page_num>1){
echo "<a href='?page_id=$prepage&sosuq=$sosu'>上一页</a>";
}
if($page_id>=1 && $page_num>$page_id){
echo "<a href='?page_id=$nextpage&sosuq=$sosu'>下一页</a>";
}
if($page_id>=1 && $page_num>1){
echo "<a href='?page_id=$page_num&sosuq=$sosu'>尾页</a>";
}
?>
</p>
</div>
</div>
<div id="footer">
<p>地址：北京朝阳区***路***号   版权所有：北京天天书屋有限公司</p>
<p>互联网信息服务备案编号：京ICP备06001111号    技术支持：计算机信息工程系</p>
</div>
</body>
</html>
