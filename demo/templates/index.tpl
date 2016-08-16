<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>测试模板文件</title>
</head>
<body>
<center>

<h3>变量测试</h3>
	<br>{$name}<br>
<h3>IF语句</h3>
	<br>
	
	{if $a}
		<div> iftrue do this</div>
		{else}
		<div> else do this </div>
	{/if}

	<br>
<h3>foreach语句</h3>

{foreach $array(key,value)}
	{@key}==>{@value}<br>
{/foreach}

<h3>include语句</h3>
text.php:<br>
{include file="text.php"}

<br>
<h4>系统变量</h4>
sitename:{$$sitename}<br>
pagesize:{$$pagesize}
</center>
fsdffsasdfdsfdfsd

afdsgsdfdfsdfsfsdfsd
</body>
</html>