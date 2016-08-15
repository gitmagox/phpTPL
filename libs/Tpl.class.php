<?php
class Tpl
{
	//解析器类形
	private $parser_type;
	//注入变量数组
	private $date = array();
	//构造方法
	public function __construct($parser_type =PARSER_TYPE)
	{
		if( !is_dir(TPL_DIR) || !is_dir(TPL_CACHE) || !is_dir(TPL_C) )
			exit('ERROR:模板目录 or 缓存目录 or 编译目录 不存在！！');

		$this->setParser(new $parser_type()) or exit('ERROR:实例化模板解析类('.$parser_type.')失败');
	}
	//注义变量
	public function assign($tplvar,$var)
	{
		if( isset($tplvar) && !empty($tplvar) )
			$this->date[$tplvar] = $var;
		else 
			exit('ERROR:没有指定模板变量名'.$tplvar);
	}
	//加载解析模板
	public function display($_tplfile)
	{
		$tplfile = TPL_DIR.$_tplfile;
		if( !file_exists( $tplfile ) )
			exit('ERROR:'.$tplfile.'文件不存在');

		$parserfile = TPL_C.md5($_tplfile).$_tplfile.".php";
		if( !file_exists( $parserfile ) ){
			$this->parser_type->setTpl($tplfile);
			$this->parser_type->run($parserfile);
		}

		include $parserfile;

	}

	//设置解析器
	private function setParser(parser $ParserType){
		$this->parser_type = $ParserType;
		return true;
	}
}