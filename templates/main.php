<!DOCTYPE html>
<html>
<head>

<title>普通選挙の仕組み</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	background-color:#9acd32;
	
	border:1px solid #9acd32;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:magenta;">〜実際に投票してみよう〜</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<h1 style="color:magenta;">もう一度入力してください。</h1>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="賛成、反対のいずれかを入力。" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by <a href="//mangapro.top/" target="_blank">明るい選挙管理委員会</a> <?php echo $version; ?>
</div>


</body>
</html>
