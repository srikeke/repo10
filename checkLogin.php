<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include "include/lg_user.php";
if(isset($_POST['ok'])){
	//�����û���������
	$username=$_POST['username'];
	$password=$_POST['password'];
	//�����ж�
	$rs=findUser($username,$password);
	if(!empty($rs)){
		$_SESSION['username']=$username;
		$_SESSION['islogin']=1;
		$_SESSION['userid']=$rs['userid'];
		setcookie('username',$username,time()+3600);
		echo "<script>alert('��¼�ɹ�');</script>";
		echo "<script>location.href='index.php';</script>";
	}else{
		echo "<script>alert('�û������������');</script>";
		echo "<script>location.href='login.php';</script>";
	}
}
?>