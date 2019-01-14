<?php
function connect_db(){
	include("include/connect_db.php");
	}
	function get_module($module,$action){
		include("module/".$module."/index.php");
	}
	
?>

