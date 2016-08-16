<?php 
//定义模板引擎软件库根目录
defined(TPL_ROOT) or define(TPL_ROOT,dirname(__FILE__));
defined(OB_START) or define(OB_START,0);
require TPL_ROOT.'/tpl.class.php';
require TPL_ROOT.'/diver/parserDecorade.class.php';
require TPL_ROOT.'/common.function.php';

//定义解析引擎
defined(PARSER_TYPE) or define(PARSER_TYPE,get_tpl_config('type'));
$parserClass = TPL_ROOT.'/diver/'.PARSER_TYPE.'.class.php';


//延迟加载解析器的类文件
file_exists($parserClass) && require_once $parserClass;


//自动加载装饰器
foreach (get_tpl_config(PARSER_TYPE) as $value) {
	require_once TPL_ROOT.'/diver/'.PARSER_TYPE.'/'.$value.'.class.php';
}
