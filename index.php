<?php
	$str = "reverse string";
	rev($str);

	function rev($str){
	if (strlen($str)>0)
	  rev(substr($str, 1));

	  echo substr($str, 0, 1);

	return;
	}
?>
