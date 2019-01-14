<?php
//================================================================================	
function logout(){
  	session_destroy();
    //unset($_SESSION["login_result"]);
  	echo "<script>window.location='index.php'</script>";	

}
//================================================================================
function user_admin(){

$result=mysql_query("SELECT * FROM  admin_user ") or die(mysql_error());
$rows = mysql_fetch_array($result);
?>

<script language="JavaScript">
function fncSubmit(str) {

if ( document.user.repassword.value != document.user.password.value) {
     alert('กรุณากรอก ยืนยันรหัสผ่านให้ตรงกัน');
     document.user.repassword.focus();       
     return false;
} 


 document.user.submit();
}
</script>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><div class="title-main">ข้อมูลผู้ใช้</div></li>
            <li class="breadcrumb-item"><a href="index.php?module=home&action=home_index"><button class="bttn-stretch bttn-sm bttn-danger">หน้าแรก</button></a></li>
            <li class="breadcrumb-item"><button class="bttn-stretch bttn-sm bttn-danger">ข้อมูลผู้ใช้</button>
            </li>
        </ol>

<div class="row">
    <div class="col-lg-12">
        <div class="well">

        <div class="card">
          <div class="card-block">
              <form action="index.php?module=user&action=update_user" method="post" enctype="multipart/form-data" <?php echo  "onSubmit='JavaScript:return fncSubmit();'" ?> name="user">
                <input type="hidden" name="id" class="form-control" value="<?php echo $rows['id']; ?>" required="required">

              <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>ชื่อผู้ใช้ (Username)</label>
                    </div>
                </div>
                <div class="col-lg-10">
                   <input type="text" name="username" class="form-control" value="<?php echo $rows['username']; ?>" required="required">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label>รหัสผ่าน (Password)</label>
                    </div>
                </div>
                <div class="col-lg-10">
                   <input type="password" name="password" class="form-control" value="<?php echo $rows['password']; ?>" required="required">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-2">
                      <label>ยืนยันรหัสผ่าน (Confirm password)</label>
                </div>
                <div class="col-lg-10">
                    <input type="password" name="repassword" class="form-control" value="<?php echo $rows['password']; ?>" required="required">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-2"> 
                </div>
                <div class="col-lg-10">
                   <button type="submit" class="btn btn-pj"><i class="fa fa-save"></i>&nbsp; บันทึกข้อมูล</button>
                </div>
              </div>

              </form>                             
          </div>
        </div>


        </div>
    </div>
    <!--/col-->
</div>
<!--/row--> 




  
<?php	
}
//================================================================================
function update_user(){
connect_db();

  $sql="UPDATE admin_user SET username='$_POST[username]',password='$_POST[password]' WHERE id='$_POST[id]'";
  mysql_query($sql)or die(mysql_error());
  mysql_close();

echo "<script>alert('บันทึกข้อมูลเรียบร้อย !!'),window.location='index.php?module=user&action=user_admin'</script>";
}
//================================================================================	
?>



