<?php
    include("include/function.php");
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/Admincss.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo.png"/>

        <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>

    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">LOG IN</div>
            <form action="check_login.php" method="post">
                <div class="body bg-gray">
                    
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">   
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>          

                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-blue btn-block">LOG IN</button>  
                </div>
            </form>

            <div class="margin text-center">
                <span>Log in using Admin</span><br>
            </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>