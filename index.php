<?php 
include('inc/aik.config.php');?>
<!DOCTYPE html>
<html lang="zh" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title><?php echo $aik['title'];?></title>
  <link rel="icon" href="./img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="https://cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
  <meta name=\"keywords\" content=\""; <?php echo $aik['keywords'];?>">
  <meta name="description" content=""; <?php echo $aik['description'];?>">
 </head>

 <body>
  <div class="mdui-typo">
  <!--BODY-->
  <div class="BodyMain">
    <div class="mdui-ripple">
  <a href=""><img class="mdui-img-fluid" src="<?php echo $aik['logo_dh'];?>"/></a>
</div>
   <div class="mdui-textfield">
    <form action="http://www.baidu.com/baidu" target="_blank">
    <label class="mdui-textfield-label" title="dawdwa">输入你想要搜索的关键字...</label>
    <input class="mdui-textfield-input" type="text" name="word" />
  </form>
   </div>
 
   <!--网址推荐-->
   <div class="mdui-typo-title">优站精选</div>
   <div class="mdui-row-sm-2 mdui-row-md-5">
	<div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['1zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['1zi'];?></div>
         <div class="mdui-card-primary-subtitle"><?php echo $aik['1miaoshu']?></div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['1lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe63a;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['2zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['2zi'];?></div>
         <div class="mdui-card-primary-subtitle">认真你就输啦 </div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['2lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe63a;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['3zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['3zi'];?></div>
         <div class="mdui-card-primary-subtitle">孤独的音乐生活</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['3lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe405;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['4zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['4zi'];?></div>
         <div class="mdui-card-primary-subtitle">二次元高清图片</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['4lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe3f4;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['5zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['5zi'];?></div>
         <div class="mdui-card-primary-subtitle">随时跨设备传文件</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['5lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe24d;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['6zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['6zi'];?></div>
         <div class="mdui-card-primary-subtitle">免费无限制网盘</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['6lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe2bd;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['7zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['7zi'];?></div>
         <div class="mdui-card-primary-subtitle">集成服务器环境</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['7lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe918;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['8zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['8zi'];?></div>
         <div class="mdui-card-primary-subtitle">简洁的前端框架</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['8lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe3c1;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=<?php echo $aik['9zi'];?>"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title"><?php echo $aik['9zi'];?></div>
         <div class="mdui-card-primary-subtitle">开源代码托管平台</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="<?php echo $aik['9lianjie'];?>" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">立即前往</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe86f;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    <!--ONECARD-->
      <div class="mdui-col">
     <div class="mdui-card">
      <div class="mdui-card-media">
       <img src="https://iph.href.lu/150x100?text=MoeSX"/>
       <div class="mdui-card-media-covered">
        <div class="mdui-card-primary">
         <div class="mdui-card-primary-title">自定义</div>
         <div class="mdui-card-primary-subtitle">登录管理QwQ</div>
        </div>
       </div>
      </div>
      <div class="mdui-card-actions">
        <a href="./admin" target="_blank">
          <center>
            <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">登录注册</button>
          </center>
        </a>
        <i class="mdui-icon material-icons">&#xe853;</i>
      </div>
     </div>
    </div>
    <!--ONECARD-->
    </div>
   </div>
 </div>
 <!--底部-->

 <!--l2d-->

  </body>
</html>
