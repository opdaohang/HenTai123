<?php 
  include('config.php');include('admincore.php');?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
'; include('inc.php');?>
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
</head>
<body>
<?php $nav='home';include('head.php');?>
<?='<div id="hd_main">
   <div style="margin:20px;">
   ';
 $path=$_SERVER['SCRIPT_NAME'];

 if(strpos($path,'/admin/')>-1)
 {echo '
<div style="text-align:center; color:red; font-size:16px; margin-bottom:15px;">
注意事项
<form>
  <label class="mdui-radio">
    <input type="radio" name="group1" disabled checked/>
    <i class="mdui-radio-icon"></i>
    请尽快修改后台admin的文件夹名称,不然会被盗用哦
  </label>
</form>
</div>';}
 if($aik['admin_name']=='aik' && $aik['admin_pass']=='a13a02276910cbc879f020ed88816512')
 	{echo '<div style="text-align:center; color:red; font-size:16px; margin-bottom:15px;">
 <form>
  <label class="mdui-radio">
    <input type="radio" name="group1" disabled checked/>
    <i class="mdui-radio-icon"></i>
    您的账号密码为系统默认，请尽快修改
  </label>
</form>
 </div>';}?>
 <div class="mdui-table-fluid">
  <table class="mdui-table">
    <thead>
      <tr>
        <th>权限名</th>
        <th>状态</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>导航版本</td>
        <td>Beta 0.3</td>
      </tr>
      <tr>
        <td>服务器操作系统：	</td>
        <td> <?php $os=explode(' ',php_uname());echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];}?></td>
      </tr>
      <tr>
        <td>服务器解译引擎：	</td>
        <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
      </tr>
      <tr>
      	<td>PHP版本：</td>
      	<td><?php echo PHP_VERSION?></td>
      </tr>
      <tr>
      	<td>域名：</td>
      	<td><?php echo $_SERVER['HTTP_HOST']?></td>
      </tr>
      <tr>
      	<td>allow_url_fopen：</td>
      	<td><?php echo ini_get('allow_url_fopen')?'<span class="green">支持</span>' :'<span class="red">不支持</span>'?></td>
      </tr>
      <tr>
      	<td>curl_init：</td>
      	<td><?php if(function_exists('curl_init')){echo '<span class="green">支持</span>';}else{echo '<span class="red">不支持</span>';}?></td>
      </tr>
      <tr>
      	<td>/data/目录权限检测：	</td>
      	<td><?php echo is_writable('../data/')?'<span class="green">可写</span>' :'<span class="red">不可写</span>'?></td>
      </tr>
      <tr>
      	<td>正版授权查询</td>
      	<td>
      		<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-300">主线路查询</button>
      		<a href="javascript:alert('当前不可用,预计1.0正式版推出');"><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-300">本地检测</button></a>
      	</td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<br>
<?php include('foot.php');?>
</body>
</html>
