<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmznet_student";
$conn = new mysqli($servername, $username, $password, $dbname,$conn);
mysqli_set_charset($conn,"utf8");
$post=array("บันทึกข้อมูลแล้ว","ไม่สามารถบันทึกข้อมูลได้");


?>
