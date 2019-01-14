<?php session_start(); ?>
<meta charset="utf-8">
<?php
	
	include("include/function.php");
	connect_db();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) or empty($password)){

		echo "<script>alert('กรุณากลับไปกรอก email username password ให้ครบ'),window.location='index.php'</script>";
		
	}else{
	
			$result="SELECT username,password FROM admin_user where username = '$username'  and password = '$password'";
			$sql=mysql_query($result)or die(mysql_error());
			list($username1,$password1)= mysql_fetch_row($sql);
				
			if($username == $username1 and $password == $password1) {
				$_SESSION['login_result'] = true;
				$_SESSION['login_user'] = $username1;
				//$_SESSION['login_type'] = 1;
					echo "<script>window.location='index.php?module=home&action=home_index'</script>";
				
			
			}else{
				$_SESSION['login_result'] = false;
				echo "<script>alert('Username หรือ Password ผิดพลาด'),window.location='index.php'</script>";
				
			}
	}
	
?>