<?php
    include("include/function.php");
    include("module/user/user_funtion.php");
    include("module/home/home_funtion.php");
    include("module/pic/pic_function.php");
    include("module/register/register_function.php");
    include("module/addyear/addyear_function.php");
    include("module/contact/contact_function.php");
    include("module/calendar/calendar_function.php");
    include("module/profile/profile_fucntion.php");     

    $module=empty($_GET['module'])?"":$_GET['module'];
    $action=empty($_GET['action'])?"":$_GET['action'];
    $login_type=empty($_SESSION['login_type'])?"":$_SESSION['login_type'];
    $login_name=empty($_SESSION['login_user'])?"":$_SESSION['login_user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo.png"/>
    <title>Admin</title>

        <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
      <!-- Icons -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/simple-line-icons.css" rel="stylesheet">

      <!-- style -->
        <link href="assets/css/style.css" rel="stylesheet">

      <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

      <!-- datetime -->
        <link href="assets/as/datetime/dist/css/bootstrap-datepicker.css" rel="stylesheet">
        <link href="assets/as/datetime/dist/css/bootstrap-datetimepicker.css" rel="stylesheet">

      <!-- lightbox img -->
        <link href='assets/lightbox/stylesheets/jquery.lighter.css' rel='stylesheet' type='text/css'>
<?php
connect_db();
?>

</head>
<!-- 272426 -->
<body class="navbar-fixed sidebar-nav fixed-nav" style="background-color:#FFF;">
     <header class="navbar">
        <div class="container-fluid">

            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">☰</button>

           <div class="navbar-header pull-left">

            </div>

            <ul class="nav navbar-nav hidden-md-down">

                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#" style="color:#FFF;">☰</a>
                </li>

                <li class="nav-item px-1">
                    <a class="nav-link" href="#"></a>
                </li>

            </ul>
            <ul class="nav navbar-nav float-xs-right hidden-md-down">

                <li class="nav-item">
                    <a class="nav-link" onclick="return confirm('คุณต้องการออกจากระบบ !!')" href="index.php?module=user&action=logout" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down" style="color:#FFF;">LOG OUT</span>
                    </a>

                </li>
                <li class="nav-item"></li>

            </ul>
        </div>
    </header>

    <div class="sidebar">

        <nav class="sidebar-nav">

            <ul class="nav nav-list">

                <li class="nav-item">
                    <a href="index.php?module=home&action=home_index" class="nav-link <?php echo $module=="home"||empty($module)?'active':''; ?>">
                        <i class="menu-icon fa fa-desktop"></i> หน้าหลัก</a>
                </li>
                 <li class="nav-item">
                    <a href="index.php?module=pic&action=pic_list" class="nav-link <?php echo $module=="pic"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> รูปหน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?module=register&action=register_list" class="nav-link <?php echo $module=="register"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> ลงทะเบียนฝึกงาน</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?module=calendar&action=calendar_list" class="nav-link <?php echo $module=="calendar"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> ปฏิทิน</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?module=contact&action=contact_list" class="nav-link <?php echo $module=="contact"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> ติดต่อ</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?module=addyear&action=addyear_list" class="nav-link <?php echo $module=="addyear"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> เพิ่มปีปฏิทิน </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?module=profile&action=profile_list" class="nav-link <?php echo $module=="profile"||empty($module)?'active':''; ?>"><i class="menu-icon fa fa fa-clipboard"></i> ประวัติ </a>
                </li>
                <li class="nav-item">
                    <a onclick="return confirm('คุณต้องการออกจากระบบ !!')" href="index.php?module=user&action=logout" class="nav-link">
                        <i class="ace-icon fa fa-unlock"></i> ออกจากระบบ</a>
                </li>


            </ul>

        </nav>
    </div>


    <!-- Main content -->
    <main class="main" style="background-color: #FFF;">

        <div class="container-fluid">
            <div class="row">
                <?php
                    if(!empty($module)){
                        get_module($module,$action);
                    }else {
                        get_module('home','home_index');
                    }
                ?>
            </div>
        </div>
        <!-- /.conainer-fluid -->

    </main>


</body>

</html>


        <!-- GenesisUI main scripts -->
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Select img-->
        <script type="text/javascript" src="assets/plugin/imgselect/js/jquery.imgareaselect.pack.js"></script>
        <script type='text/javascript' src='assets/plugin/lightbox/javascripts/jquery.lighter.js'></script>
        <script type="text/javascript" src="assets/plugin/imgselect/js/script2.js"></script>

        <!-- DataTables JavaScript -->
        <script src="assets/components/datatables/media/js/jquery.dataTables.js"></script>
        <script src="assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
        </script>

        <script src="assets/as/datetime/dist/js/moment.js"></script>
        <script src="assets/as/datetime/dist/js/bootstrap-datepicker.js"></script>
        <script src="assets/as/datetime/dist/js/bootstrap-datetimepicker.min.js"></script>

        <!-- lightbox -->
        <script src='assets/lightbox/javascripts/jquery.lighter.js' type='text/javascript'></script>




      <script src="assets/editor/js/jquery.2.1.1.min.js"></script>
      <script src="assets/editor/js/bootstrap.min.js"></script>
      <script src="assets/editor/editor/ckeditor.js"></script>
      <!-- page specific plugin scripts -->
      <script src="assets/editor/js/jquery.dataTables.min.js"></script>
      <script src="assets/editor/js/jquery.dataTables.bootstrap.min.js"></script>
      <!-- input file -->
      <script src="assets/editor/js/jquery.inputlimiter.1.3.1.min.js"></script>
      <script src="assets/editor/js/bootstrap-datepicker.min.js"></script>
      <script src="assets/editor/js/bootstrap-timepicker.min.js"></script>
      <script src="assets/editor/js/moment.min.js"></script>
      <script src="assets/editor/js/daterangepicker.min.js"></script>
      <script src="assets/editor/js/bootstrap-datetimepicker.min.js"></script>
      <script src="assets/editor/js/bootstrap-multiselect.min.js"></script>
      <script src="assets/editor/js/select2.min.js"></script>
      <script src="assets/editor/js/bootstrap-colorpicker.min.js"></script>
      <!-- ace scripts -->
      <script src="assets/editor/js/ace-elements.min.js"></script>
      <script src="assets/editor/js/ace.min.js"></script>
      <script src="assets/editor/js/app.js"></script>
      <!-- inline scripts related to this page -->
