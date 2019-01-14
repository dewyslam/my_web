<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
$post=array("ธรรมดา","ลงทะเบียน","ems");
?>
