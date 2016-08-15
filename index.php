<?php 
//根目录
define('ROOT_DIR',dirname(__FILE__));

require ROOT_DIR."/demo/config.php";

header('content-type:text/html;charset=utf-8');

require ROOT_DIR.'/libs/Tpl.include.php';

//测试变量函数，调试用
function p($arr){
	if(is_array($arr) || is_object($arr)){
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}else{
		echo $arr;
	}
	exit();
}

$tpl = new Tpl();
$name = 'magox';
$tpl->assign('name',$name);
$tpl->display('index.tpl');