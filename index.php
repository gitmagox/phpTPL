<?php 
//根目录
date_default_timezone_set('PRC');
define('ROOT_DIR',dirname(__FILE__));
define('OB_START',0);

require ROOT_DIR."/demo/config.php";

header('content-type:text/html;charset=utf-8');

require ROOT_DIR.'/libs/Tpl.include.php';



$tpl = new Tpl();
$name = 'magox';
$tpl->assign('array',array(1,2,3,4));
$tpl->assign('name',$name);
$tpl->assign('a',false);
$tpl->display('index.tpl');