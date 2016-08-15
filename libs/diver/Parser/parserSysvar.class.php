<?php 
//解析系统变量
class parserSysvar implements parserDecorade{
	private $tpl;

	function setTpl($tpl){
		$this->tpl = $tpl;
	}

	function parser(){
		$varPattern='/\{\$\$([\w]+)\}/';
		if( preg_match($varPattern, $this->tpl) ){
			$this->tpl = preg_replace($varPattern, "<?php echo \$this->sysdate['$1']; ?>", $this->tpl);
		}
		return $this->tpl;
	}
}