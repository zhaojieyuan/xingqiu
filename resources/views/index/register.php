<!doctype html>
<html>
<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="screen-orientation" content="portrait">
		<meta name="x5-orientation" content="portrait | landscape" />
		<meta name="x5-fullscreen" content="true" />
		<meta name="full-screen" content="yes">
		<meta name="format-detection" content="telephone=no, email=no" />
		<link href="/css/index.css" rel="stylesheet">
		<script language="javascript" src="/js/xmlhttprequest.js"></script>
        <script language="javascript" src="/js/register.js" charset="UTF-8"></script>
		<title>注册界面</title>
	</head>

	<body class="register-body">
		<div class="register-zong">
			<div class="register-fanhui">
				<a href="/index/main"><img src="/img/register-fanhui.png"></a>
			</div>
			<div class="register-touxiang">
				<div class="register-touxiang-bg">
				</div>
			</div>
			<!--
  	作者：3223891963@qq.com
  	时间：2017-04-12
  	描述：注册
  -->
			<div class="register-content">
				<div class="register-yuan1"></div>
				<div class="register-yuan2"></div>
				<div class="register-yuan3"></div>
				<div class="register-yuan4"></div>
				<div class="register-yuan5"></div>
				<div class="register-yuan6"></div>
				<div class="register-xian"></div>
				<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：用户名
     --><form name="send" method="post" action="register_ok.php" onSubmit="return Check()">
					<div class="register-name">
						<div class="register-name-left">
							<img src="/img/zc_04.png">
						</div>
						<div class="register-name-right">
							<input id="regname" name="regname" type="text" placeholder="选择中文，英文作为你的用户名" class="register-p">
						</div>
						<div id="namediv" class="register-check" style="font-size: 0.24rem;"></div>
					</div>
					<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：手机
      -->
					<div class="register-name register-top">
						<div class="register-name-left">
							<img src="/img/zc_06.png">
						</div>
						<div class="register-name-right">
							<input type="text" name="email"  id="email" placeholder="填写手机号或邮箱，不可更改" class="register-p">
						</div>
						<div id="namediv" class="register-check"></div>
					</div>
					<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：密码
      -->
					<div class="register-name register-top">
						<div class="register-name-left">
							<img src="/img/zc_08.png">
						</div>
						<div class="register-name-right">
							<input id="regpwd1" name="regpwd1" type="password" placeholder="请填写您的密码" class="register-p">
						</div>
						<div id="pwddiv1" class="register-check"></div>
					</div>
					<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：二次密码
      -->
					<div class="register-name register-top">
						<div class="register-name-left">
							<img src="/img/zc_04.png">
						</div>
						<div class="register-name-right">
							<input id="regpwd2" name="regpwd2" type="password" placeholder="请再次填写您的密码" class="register-p">
						</div>
						<div id="pwddiv2" class="register-check"></div>
					</div>
							<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：提交按钮
      -->
					<div class="register-name register-top1">
						<input type="image" src="/img/zc_22.png" class="register-submit1" id="regbtn1" disabled="disabled">  
						<input type="image" src="/img/zc_25.png" class="register-submit2" id="regbtn2" style="display:none">  
					</div>
				<!--
      	作者：3223891963@qq.com
      	时间：2017-04-12
      	描述：登录按钮
     -->
						  <a href="/index/log"><div class="register-zc">已有账号？立即登录</div></a>
					</form>
			</div>
		</div>
	</body>

</html>