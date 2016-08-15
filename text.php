<?php
$tagconfig = array();
$_sxe = simplexml_load_file("libs/config/sysvar.xml");
$tagLib=$_sxe->xpath('/root/tag');
foreach($tagLib as $tag){
	$tagconfig["$tag->name"] = "$tag->value";
}
print_r($tagconfig);