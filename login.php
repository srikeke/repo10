<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��¼ҳ��</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
<?php header("Content-Type:text/html;charset=GB2312") ?>
<div id="logo">
<h1><img src="images/leGo.gif" width="115" height="52" />����������GO�̳ǰɣ�</h1>
<h1 id="h"> ���־�Ʒ��������������</h1>
<p style="text-align:right; color: #0C0;"><a href="index.php" style="color:#254B62">������ҳ</a>&nbsp;<a href="regsiter.php" style="color:#254B62">ע��</a></p>
<form action="checkLogin.php" method="post"> 
  <p>�û�����
    <input name="username" type="text" id="username" />
  </p>
  <p>
    ��&nbsp;&nbsp;�룺
      <input name="password" type="password" id="password" />
  </p>
  <input name="ok"  type="submit" style="background:url(images/login_btn2.gif); width:99px ; height:36px;  margin-left:30px;" value="��¼" id="ok" />
  <input name=""  type="reset" style="background:url(images/login_btn3.gif)  ; width:97px ; height:36px; margin-left:30px; " value="����" />
</form>
</div>

</body>
</html>
