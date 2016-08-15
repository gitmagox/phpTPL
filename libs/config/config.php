<?php 
$config = [
	//解析器的类形
	'type'   => 'Parser',
	//解析装饰器配置
	'Parser' => [
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