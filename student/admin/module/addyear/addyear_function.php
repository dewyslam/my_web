
<?php
function addyear_list(){
?>
<?php
  $resule_addyear=mysql_query("SELECT * FROM addyear  where addyearid ") or die(mysql_error());
  $rows = mysql_num_rows($resule_addyear);
?>
<div class="row">
  <div class="col-lg-12">
      <div class="card">

<div class="card-block">
<form name="listaddyear" action ="index.php?module=addyear&action=delete_addyear" method ="post" enctype="multipart/form-data">

  <div class="col-lg-12">
    <div class="btn-all1">
        <a href="index.php?module=addyear&action=addyear_add"  class="btn btn-add" >เพิ่ม / Add</a>
    </div>
  </div>
<div class="table-responsive" style="margin-top: 10px;">
    <table class="table table-striped table-bordered table-hover " id="dataTables-example" >
      <thead>
        <tr>
          <th style="color: #696969;" width="20%">ลำดับ</th>
          <th width="30%">ปี พ.ศ.</th>
          <th width="30%">แก้ไข / ลบ</th>
        </tr>
      </thead>
    <tbody>


<?php
$i =1;
  while($row_addyear = mysql_fetch_array($resule_addyear)){
?>

    <tr class="odd gradeX">
    <td align ="center"><?php echo $i; ?></td>
    <td align ="center">
          <a><?php echo $row_addyear['year']; ?></a>

    <td align ="center">
      <div class="btn-all">
        <a href ="index.php?module=addyear&action=edit_addyear&id=<?php echo $row_addyear['addyearid']; ?>" class="btn-sm btn-warning">
        <i class='fa fa-edit'></i></a>
        <a href ="index.php?module=addyear&action=delete_addyear&id=<?php echo $row_addyear['addyearid']; ?>" onclick="return confirm('คุณแน่ใจว่าต้องการปฏิเสธ?')" class="btn-sm btn-danger">
        <i class="fa fa-remove"></i></a>
      </div>
    </td>

    </tr>
<?php
  $i++;
}
?>
    </tbody>

 </table>
</form>

 </div>


<?php
}

//================================================================================
function addyear_add(){
?>
<div class="row">
<div class="col-lg-12">
<div class="well">

      <div class="card">
        <div class="card-block">
            <form action="" method="post" enctype="multipart/form-data">

            <div class="row">
              <div class="col-lg-2">
              <div class="form-group">
                  <label>เพิ่มปีปฏิทิน</label>
              </div>
              </div>
              <div class="col-lg-10">
                 <input type="text" name="year" required="required" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-10">
                 <button type="submit" name="save" value="save" class="btn"><i class="fa fa-save"></i>&nbsp; บันทึกข้อมูล</button>
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
if(!empty($_POST["save"])){
$year=$_POST['year'];
$save=$_POST['save'];

$query = "INSERT INTO  addyear(year)VALUES('$year');";//
mysql_query($query)or die(mysql_error());
mysql_close();
echo "<script>alert('บันทึกข้อมูลเรียบร้อย!!'),window.location='index.php?module=addyear&action=addyear_list'</script>";
}
?>

<?php
}
//================================================================================

function edit_addyear(){
?>
<?php
  $resule_addyear=mysql_query("SELECT * FROM addyear where addyearid = $_GET[id]") or die(mysql_error());
  $row_addyear = mysql_fetch_array($resule_addyear);
?>
<div class="row">
<div class="col-lg-12">
<div class="well">

      <div class="card">
        <div class="card-block">
            <form action="" method="post" enctype="multipart/form-data">

            <div class="row">
              <div class="col-lg-2">
              <div class="form-group">
                  <label>แก้ไขปฏิทิน</label>
              </div>
              </div>
              <div class="col-lg-10">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $row_addyear['addyearid'];?>" required>
                 <input type="text" name="year" required="required" value="<?php echo $row_addyear['year'];?>" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-10">
                 <button type="button" class="btn" onclick='location.replace("index.php?module=addyear&action=addyear_list")'>ย้อนกลับ</button>&nbsp
                 <button type="submit" name="save" value="save" class="btn"><i class="fa fa-save"></i>&nbsp; บันทึกข้อมูล</button>
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
if(!empty($_POST["save"])){
$year=$_POST['year'];
$save=$_POST['save'];
$id=$_POST['id'];

$query ="UPDATE addyear SET year='$_POST[year]' WHERE addyearid = $id ";
mysql_query($query)or die(mysql_error());
mysql_close();
echo "<script>alert('อัพเดทข้อมูล เลขที่ =$id เรียบร้อย!!'),window.location='index.php?module=addyear&action=addyear_list'</script>";
}
?>

<?php
}
//================================================================================
function delete_addyear(){
  $id=$_GET['id'];
  $sql = "delete from addyear where addyearid='$id'";
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('ปฏิเสธ เลขที่ =$id เรียบร้อยแล้ว!!!'),window.location='index.php?module=addyear&action=addyear_list'</script>";
}

?>
