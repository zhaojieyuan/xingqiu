<!DOCTYPE html>
<html>

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
		<script type="text/javascript" src="/js/dashen.js"></script>
		<title>登录界面</title>
	</head>

	<body class="register-body">
		<div class="log-fanhui"><a href="/index/register"><img src="/img/register-fanhui.png"></a></div>
		<div class="log-touxiang"><a href="/tql/wd-1.html"></a></div>
		<form name="send" method="post" action="log_ok.php" onSubmit="return Check()">
			<div class="log-content">
				<!--
                	作者：3223891963@qq.com
                	时间：2017-04-13
                	描述：用户名
                -->

				<div class="log-name">
					<div class="log-left"><img src="/img/dl_14.png"></div>
					<div class="log-center">
						<input id="regname" name="regname" type="text" placeholder="请输入你的用户名" class="log-p">
					</div>
					<div id="namediv" class="register-check" style="font-size: 0.24rem;"></div>
				</div>
				<!--
                	作者：3223891963@qq.com
                	时间：2017-04-13
                	描述：密码
                -->
				<div class="log-pwd">
					<div class="log-left"><img src="/img/dl_16.png"></div>
					<div class="log-center"><input id="regpwd1" name="regpwd1" type="password" placeholder="请填写您的密码" class="log-p"></div>
					<div id="pwddiv1" class="register-check"></div>
				</div>
			</div>
			<div class="log-input">
				<a href="tql/wd-1.html"><input type="image" name="submit" src="/img/dl_28.png" class="log-submit1" id="regbtn1" disabled="disabled"></a>
				<input type="image" name="submit" src="/img/dl_36.png" class="log-submit2" id="regbtn2" style="display: none;">
			</div>
		</form>
		<!--
        	作者：3223891963@qq.com
        	时间：2017-04-13
        	描述：第三方
        -->
		<div class="log-dsf">
			<div class="log-dsf-left">
				<div class="log-yuan1"></div>
			</div>
			<div class="log-dsf-center">第三方登录</div>
			<div class="log-dsf-right">
				<div class="log-yuan2"></div>
			</div>
		</div>
		<!--
        	作者：3223891963@qq.com
        	时间：2017-04-13
        	描述：登录
        -->
		<div class="log-dl">
			<img src="/img/dl_08.png">
			<img src="/img/dl_11.png">
			<img src="/img/dl_19.png">
		</div>
		<a href="/index/register">
			<div class="register-zc">还没有账号么?立即注册</div>
		</a>
	</body>

</html>