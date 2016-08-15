<?php 
//定义模板引擎软件库根目录
defined(TPL_ROOT) or define(TPL_ROOT,dirname(__FILE__));
require TPL_ROOT.'/tpl.class.php';
require TPL_ROOT.'/diver/parserDecorade.class.php';
require TPL_ROOT.'/config/config.php';


//定义解析引擎
defined(PARSER_TYPE) or define(PARSER_TYPE,$config['type']);

$parserClass = TPL_ROOT.'/diver/'.PARSER_TYPE.'.class.php';


//延迟加载解析器的类文件
file_exists($parserClass) && require_once $parserClass;


//自动加载装饰器
foreach ($config[PARSER_TYPE] as $value) {
	require_once TPL_ROOT.'/diver/'.PARSER_TYPE.'/'.$value.'.class.php';
}
