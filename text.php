<?php
ob_start();
$tagconfig = array();
$_sxe = simplexml_load_file("libs/config/sysvar.xml");
$tagLib=$_sxe->xpath('/root/tag');
foreach($tagLib as $tag){
	$tagconfig["$tag->name"] = "$tag->value";
}
echo "<br>";
print_r($tagconfig);
$str= ob_get_contents();
ob_end_clean();
echo $str;

