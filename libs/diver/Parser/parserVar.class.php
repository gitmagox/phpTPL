<?php 
//解析模板变量
class parserVar implements parserDecorade{
	private $tpl;

	function setTpl($tpl){
		$this->tpl = $tpl;
	}

	function parser(){
		$varPattern='/\{\$([\w]+)\}/';
		if( preg_match($varPattern, $this->tpl) ){
			$this->tpl = preg_replace($varPattern, "<?php echo \$this->date['$1']; ?>", $this->tpl);
		}
		return $this->tpl;
	}
}