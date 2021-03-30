<?php
	/*
	* this function will return characters,numbers and -. other than this will be replaced by -
	* @input <string>
	* @return string
	*/
	function create_slug($str){
		return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $str)));
	}
?>