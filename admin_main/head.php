<?php 
?><?='
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
<div id="header">
  <div class="con">
      <div class="aik_info"><div class="mdui-typo-body-2">&nbsp;&nbsp;&nbsp;欢迎回家！，'; echo $aik['admin_name']?><?='，&nbsp;<a href="../" target="_blank"><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-300">网站首页</button></a>&nbsp;&nbsp;&nbsp;<a href="./login.php?act=logout"><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-300">登出</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></div>
      <ul class="aik_nav">
		<li><a href="./"'; echo $nav=='home'?' class="this"':''?><?='>首页</a></li>
		<li><a href="./setting.php"'; echo $nav=='setting'?' class="this"':''?><?='>设置</a></li>
      </ul>

  </div>
</div>
';?>
