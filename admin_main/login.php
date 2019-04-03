<?php 

session_start();error_reporting(0);if($_GET['act']=='logout'){unset($_SESSION);header('location: ./login.php');die;}$tips='';if($_POST['username']&& $_POST['password']){include('../inc/aik.config.php');$admin_name=htmlspecialchars($_POST['username']);$admin_pass=md5ff(htmlspecialchars($_POST['password']));if($admin_name==$aik['admin_name']&& $admin_pass==$aik['admin_pass']){$_SESSION['admin_aik']='http://www.ff6.wang/';echo '<script>window.location.href="./index.php";</script>';die;}else{$tips='账号或密码错误！';}}function md5ff($xzv_0=1){return md5($xzv_0.'ff371');}?>
<!DOCTYPE html>
<html>
<head>
<title>后台-Powered By 狱杰</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="utf-8">
<link rel="icon" href="./images/favicon.ico">
<!--MDUI-->
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
<!--MDUI-->
<style>
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,select,input,textarea,button,p,blockquote,th,td {margin:0; padding:0; outline:none;}
body {
 font-size:12px; color:#343434; 
 background-image:url(https://ws3.sinaimg.cn/large/006TQkcqgy1g1bsnzirsnj30yi0n0ax0.jpg);
 	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
img{border:0;vertical-align:top;}
h3{font-size:14px;}
ul,ol,li{list-style:none;line-height:180%;}
table{border-collapse:collapse; border-spacing:0;}
input,button,select {color:#000; font:100% arial; vertical-align:middle; overflow:visible;}
select {height:20px; line-height:20px;}

.cl{clear:both; height:0px; overflow:hidden;}
.cl5{clear:both; height:5px; overflow:hidden;}

.in{ background-color:#FFC}

input{ outline:none;}


.tablecss{margin:0px auto;word-break:break-all;}
.tablecss tr{background:#e3f2fd61;}
.tablecss td{ padding:5px 5px; font-size:12px;border:#64b5f6 solid 1px; *border:0px;}
.tablecss textarea{font-family:Courier New;padding:1px 3px 1px 3px;}
.tablecss input{font-family:11px; padding:1px 2px 1px 2px;}
.tablecss tr.header td{ padding:5px 7px 5px 7px; background-color:#64b5f6; color:#FFFFFF;}
.tablecss tr.header td a{ color:#FFF;}

#footer{ text-align:center; clear:both; padding:10px auto; margin:20px; overflow:hidden; height:40px; color:#036}
#footer a{color:#03C}
</style>
<meta name="robots" content="noindex, nofollow" />
<script type="text/javascript">
function ck(){
    if(document.getElementById(\'username\').value==\'\'){
		alert(\'喂喂,你的用户名呢\');
		document.getElementById(\'username\').focus();
		return false;
	}else if(document.getElementById(\'password\').value==\'\'){
		alert(\'没有密码你要登录啥呀！\');
		document.getElementById(\'password\').focus();
		return false;
	}else{
		return true;

	}
}
</script>
<style>
.inp{height:25px; width:170px; font-size:16px; line-height:25px;}
</style>
</head>
<BODY>

<div class="mt2"></div>
<div class="mdui-textfield mdui-textfield-floating-label">
<form name="loginform" method="post" action="" onsubmit="return ck();" style="padding:0;">
	<table border="0" cellspacing="1" cellpadding="0" width="400" class="tablecss" style="margin-top:100px; overflow:hidden;">
<tr class="header">
			<td colspan="4" align="center" style=" height:30px; font-size:18px; font-weight:bold;">很太导航后台</td>
		</tr>
		<tr>
			<td width="117" align="right" valign="middle" class="tx" style="font-size:16px;">用户名：</td>
		  <td width="260" align="left" valign="middle"><input name="username" type="text" class="mdui-textfield-input" id="username" value="" size="30" maxlength="32" autocomplete="off"></td>
		</tr>
		<tr>
			<td valign="middle" align="right" class="tx" style="font-size:16px;">密　码：</td>
		  <td align="left" valign="middle"><input name="password" type="password" class="mdui-textfield-input" id="password" value="" size="30" maxlength="64"><span class="gray tips"></span></td>
		</tr>
        
		<tr>
			<input name="act" type="hidden" value="go" />
			<input type="hidden" name="token" value=""/>   
		  	<td align="center" colspan="4">
		  	<div class="cl5"></div>
		  	<input type="submit" name="go" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-300" value="登录">
		  	<div class="mdui-typo">
		  		<a href="javascript:alert('默认账号admin\n默认密码admin\n进入后台后记得改密码\n我叫雷锋，不用谢我（笑）')">不知道账号密码？</a>
		  	</div>
			<div class="cl5"></div>
			<div style="height:30px; color:#F00; text-align:center; line-height:30px;"></div>
          </td>
		</tr>
	</table>
<div class="mt2"></div>
</form>
<div class="mt"></div> 
<div class="cl10"></div>
</div>
<?php include('foot.php');?>
</BODY>
</HTML>
