<?php 
//根目录
define('ROOT_DIR',dirname(__FILE__));

require ROOT_DIR."/demo/config.php";

header('content-type:text/html;charset=utf-8');

require ROOT_DIR.'/libs/Tpl.include.php';



$tpl = new Tpl();
$name = 'magox';
$tpl->assign('name',$name);
$tpl->assign('a',false);
$tpl->display('index.tpl');