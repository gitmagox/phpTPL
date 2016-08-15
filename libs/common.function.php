<?php

//定义tpl_config函数
function get_tpl_config($val){
	require TPL_ROOT.'/config/config.php';
	if( isset($config[$val]) )
		return $config[$val];
	else 
		exit('ERROR:不存在('.$val.')配置项;');
}