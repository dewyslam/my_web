<?php
switch($action){
	case "register_list" : register_list();break;
	case "register_update" : register_update();break;
	case "insert_register" : insert_register();break;
	case 'delete_register': delete_register();break;
	case 'edit_register': edit_register();break;
	case 'confirm_register': confirm_register();break;
	case 'update_register': update_register();break;

}

?>
