<?php 
  include('config.php');$tips='';include('admincore.php');?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
'; include('inc.php');?>
<?='<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>


</head>

<body>
'; $nav='setting';include('head.php');?>
<?='
<div id="hd_main">
  <div align="center">'; echo $tips?><?='</div>
 <form name="configform" id="configform" action="./setting.php?act=setting&t='; echo time()?><?='" method="post" onsubmit="return subck()">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="tablecss">
<tr class="thead">
<td colspan="10" align="center">基础设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
    <td ><input type="text" name="aik[title]" value="'; echo $aik['title']?><?='" size="50"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
    <td ><textarea name="aik[keywords]" cols="80" rows="2">'; echo $aik['keywords']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
    <td ><textarea name="aik[description]" cols="80" rows="3">'; echo $aik['description']?><?='</textarea></td>
</tr>

<tr class="thead">
<td colspan="10" align="center">账号设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
    <td ><input type="text" name="aik[admin_name]" value="'; echo $aik['admin_name']?><?='" ></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
    <td ><input type="text" name="aik[admin_pass]" value="" size="30"></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">LOGO设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">导航栏LOGO：</td>
    <td ><textarea name="aik[logo_dh]" cols="80" rows="1">'; echo $aik['logo_dh']?><?='</textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">文字及链接配置</td>
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图一文字</td>
    <td ><textarea name="aik[1zi]" cols="40" rows="2">'; echo $aik['1zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[1lianjie]" cols="40" rows="2">'; echo $aik['1lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图二文字</td>
    <td ><textarea name="aik[2zi]" cols="40" rows="2">'; echo $aik['2zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[2lianjie]" cols="40" rows="2">'; echo $aik['2lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图三文字</td>
    <td ><textarea name="aik[3zi]" cols="40" rows="2">'; echo $aik['3zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[3lianjie]" cols="40" rows="2">'; echo $aik['3lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图四文字</td>
    <td ><textarea name="aik[4zi]" cols="40" rows="2">'; echo $aik['4zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[4lianjie]" cols="40" rows="2">'; echo $aik['4lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图五文字</td>
    <td ><textarea name="aik[5zi]" cols="40" rows="2">'; echo $aik['5zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[5lianjie]" cols="40" rows="2">'; echo $aik['5lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图六文字</td>
    <td ><textarea name="aik[6zi]" cols="40" rows="2">'; echo $aik['6zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[6lianjie]" cols="40" rows="2">'; echo $aik['6lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图七文字</td>
    <td ><textarea name="aik[7zi]" cols="40" rows="2">'; echo $aik['7zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[7lianjie]" cols="40" rows="2">'; echo $aik['7lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图八文字</td>
    <td ><textarea name="aik[8zi]" cols="40" rows="2">'; echo $aik['8zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[8lianjie]" cols="40" rows="2">'; echo $aik['8lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图九文字</td>
    <td ><textarea name="aik[9zi]" cols="40" rows="2">'; echo $aik['9zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[9lianjie]" cols="40" rows="2">'; echo $aik['9lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十文字</td>
    <td ><textarea name="aik[10zi]" cols="40" rows="2">'; echo $aik['10zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[10lianjie]" cols="40" rows="2">'; echo $aik['10lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十一文字</td>
    <td ><textarea name="aik[11zi]" cols="40" rows="2">'; echo $aik['11zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[11lianjie]" cols="40" rows="2">'; echo $aik['11lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十二文字</td>
    <td ><textarea name="aik[12zi]" cols="40" rows="2">'; echo $aik['12zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[12lianjie]" cols="40" rows="2">'; echo $aik['12lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十三文字</td>
    <td ><textarea name="aik[13zi]" cols="40" rows="2">'; echo $aik['13zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[13lianjie]" cols="40" rows="2">'; echo $aik['13lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十四文字</td>
    <td ><textarea name="aik[14zi]" cols="40" rows="2">'; echo $aik['14zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[14lianjie]" cols="40" rows="2">'; echo $aik['14lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十五文字</td>
    <td ><textarea name="aik[15zi]" cols="40" rows="2">'; echo $aik['15zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[15lianjie]" cols="40" rows="2">'; echo $aik['15lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十六文字</td>
    <td ><textarea name="aik[16zi]" cols="40" rows="2">'; echo $aik['16zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[16lianjie]" cols="40" rows="2">'; echo $aik['16lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十七文字</td>
    <td ><textarea name="aik[17zi]" cols="40" rows="2">'; echo $aik['17zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[17lianjie]" cols="40" rows="2">'; echo $aik['17lianjie']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" valign="middle" class="s_title">图十八文字</td>
    <td ><textarea name="aik[18zi]" cols="40" rows="2">'; echo $aik['18zi']?><?='</textarea>
	<span width="125" valign="middle" class="s_title">跳转链接</span>
    <textarea name="aik[18lianjie]" cols="40" rows="2">'; echo $aik['18lianjie']?><?='</textarea></td>
      
</tr>


<tr><!--此处为更新及重要补充，请保留-->
<td colspan="10" align="center"><input name="edit" type="hidden" value="1" /><input id="configSave" type="submit" onclick="return getsort()" value="保 存"></td>
</tr>
</table>
</form>
<script type="text/javascript">
	$(".sxlist:first").dragsort();
</script>
</div>
'; include('foot.php');?>
</body>
</html>
