# **phpTPL**
*** 
### 一、phpTPL简介
***
	phpTPL 是一个实验性的模板引擎，可用于你的项目；
	phpTPL 架构采用策略模式与装饰器模式,易于扩展；
	phpTPL 是一个方便扩展灵活配置PHP的模板引擎；
### 二、phpTPL功能
***
	分离视图与模板文件view:index.tpl php:index.php

	灵活配置扩展解析器
	 libs/config/config.php

	<?php 
		$config = [
		//解析器的类形
		'type'   => 'Parser',
		//解析装饰器配置`
		'Parser' => [
				//解析系统变量
				'parserSysvar',
				//解析单个变量
				'parserVar',
				//解析if语句
				'parserIf',
				//解析foreach语句
				'parserForeach',
				//解析include方法
				'parserInclude'
			],
		]

	?>

	扩展解析的引擎类方法：
		比如你要增加一个新类形(htmlParser)
		1、上面的配置文件中，'type'=>'htmlParser'
		2、在libs/diver/Parser目录中新增你的类文件:htmlParser.class.php;
		3、在libs/diver/Parser目录新增一个目录:libs/diver/Parser/htmlParser/;
		4、在你新增的htmlParser目录中新增解析器类(例如htmlVar,命名为:htmlVar.class.php);

### 三、phpTPL使用
***
	#### 配置项：

	<?php
	//模板目录
	define('TPL_DIR',ROOT_DIR.'/demo/templates/');
	//编译目录
	define('TPL_C',ROOT_DIR.'/demo/templates_c/');
	//缓存文件
	define('TPL_CACHE',ROOT_DIR.'/demo/cache/');

	#### 引用：

	require ROOT_DIR.'/libs/Tpl.include.php';

	#### 实例化：

	$tpl = new Tpl();

	####注入变量:

	$name = 'magox';
	$tpl->assign('name',$name);

	####加载模板:

	$tpl->display('index.tpl');
	
	####模板中语法
		请参照本程序中的示例程序

***