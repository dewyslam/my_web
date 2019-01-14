<?php session_start();
if(isset($_SESSION['login_result']) AND ($_SESSION['login_result']==true)){
  require("admin.php");
}else{
  $_SESSION['login_result']=false;
   require("login.php");
}
?>
