<?php
function pic_list(){
?>

<?php
  $resule_pic=mysql_query("SELECT * FROM pic ORDER BY pic_id ASC") or die(mysql_error());
  $rows = mysql_num_rows($resule_pic);
?>

<div class="row">
  <div class="col-lg-12">
      <div class="card">

<div class="card-block">
<form name="listpic" action ="index.php?module=pic&action=delete_pic" method ="post" enctype="multipart/form-data">

  <div class="col-lg-12">
    <div class="btn-all1">
        <a href="index.php?module=pic&action=pic_add"  class="btn btn-add" >เพิ่ม / Add</a>
    </div>
  </div>
<div class="table-responsive" style="margin-top: 10px;">
    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
      <thead>
        <tr>
          <th style="color: #696969;">ลำดับ</th>
          <th width="30%">รูปภาพ</th>
          <th> สถานะ </th>
          <th> แสดงรูป </th>
          <th>แก้ไข / ลบ </th>
        </tr>
      </thead>
    <tbody>
<?php
$i =1;
  while($row_pic = mysql_fetch_array($resule_pic)){

    if($row_pic['status1']==0){
            $status="ไม่แสดง";
    }else{
            $status="แสดง";
    }

?>
    <tr class="odd gradeX">
    <td align ="center"><?php echo $i; ?></td>
    <td>
          <a  data-lighter='../uploads/picture_index/<?php echo $row_pic['pic_name']; ?>' href='../uploads/picture_index/<?php echo $row_pic['pic_name']; ?>'><img src ="../uploads/picture_index/<?php echo $row_pic['pic_name']; ?>" class="img-responsive w3-hover-opacity media-object" width='20%'  style="display: inline;"></a>
    </td>
    <td>
          <a><?php echo $status ?> </a>
    </td>
    <td align ="center">
      <div class="btn-all">
        <a href ="index.php?module=pic&action=show_pic&id=<?php echo $row_pic['pic_id']; ?>" class="btn  btn-success">
        show</i></a>
        <a href ="index.php?module=pic&action=notshow_pic&id=<?php echo $row_pic['pic_id']; ?>" class="btn  btn-danger">
        Not</i></a>
      </div>
    </td>
    <td align ="center">
      <div class="btn-all">
        <a href ="index.php?module=pic&action=edit_pic&id=<?php echo $row_pic['pic_id']; ?>" class="btn  btn-warning">
        <i class="fa fa-edit"></i></a>
        <a href ="index.php?module=pic&action=delete_pic&id=<?php echo $row_pic['pic_id']; ?>" onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูล?')" class="btn  btn-danger">
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
function pic_add(){
?>

  <div class="row">
    <div class="col-lg-12">

  <div class="well">

        <div class="card">
          <div class="card-block">
              <form action="index.php?module=pic&action=insert_pic" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-lg-2">
                <div class="form-group">
                    <label>ไฟล์รูปภาพ</label>
                </div>
                </div>
                <div class="col-lg-10">
                   <input type="file" name="files" id="files_pic" required="required" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-10">
                   <button type="submit" class="btn"><i class="fa fa-save"></i>&nbsp; บันทึกข้อมูล</button>
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

function insert_pic(){

  $resule_pic=mysql_query("SELECT * FROM pic ORDER BY pic_id ASC") or die(mysql_error());
  $rows = mysql_num_rows($resule_pic);
  $resule_row=$rows+1;

      if(isset($_FILES['files']['name'])){
        $pic_name_file = md5(time()).".".end(explode("."."_",$_FILES['files']['name']));
        $pic_name_tmp=$_FILES['files']['tmp_name'];
      }else{
        $pic_name_file="";
      }
      if($pic_name_file){
        $update_pic="$pic_name_file";
        if (isset($update_pic)) {
          copy($pic_name_tmp,"../uploads/picture_index/$pic_name_file");
        }
      }else{
        $update_pic="";
      }
        $sql = "INSERT INTO pic values('','".$update_pic."','".$resule_row."','0')";
        mysql_query($sql)or die(mysql_error());

        echo "<script>alert('บันทึกข้อมูลเรียบร้อย!!'),window.location='index.php?module=pic&action=pic_list'</script>";
        mysql_close();
?>
<?php
}
//================================================================================
function delete_pic(){

  $id=$_GET['id'];
  $query = "delete from pic where pic_id='$id'";
  mysql_query($query)or die(mysql_error());
  mysql_close();
  echo "<script>alert('ลบข้อมูล เลขที่ =$id เรียบร้อยแล้ว!!!'),window.location='index.php?module=pic&action=pic_list'</script>";
}
?>

<?php
//================================================================================
function edit_pic(){
?>

<?php
  $resule=mysql_query("SELECT * FROM pic where pic_id = $_GET[id]") or die(mysql_error());
  $row_pic = mysql_fetch_array($resule);
?>

<div class="row">
  <div class="col-lg-12">

<div class="well">

      <div class="card">
        <div class="card-block">
            <form  method="post" action="index.php?module=pic&action=update_pic" enctype="multipart/form-data" >
            <input type="hidden" class="form-control" name="id" value="<?php echo $row_pic['pic_id'];?>" required>
            <div class="row">
              <div class="col-lg-2">
              <div class="form-group">
                  <label>ไฟล์รูปภาพ</label>
              </div>
              </div>
              <div class="col-lg-10">
                <img id="pic_name" alt="เพิ่มรูปภาพ" width="906px" height="400px" src="../uploads/picture_index/<?php echo $row_pic['pic_name'];?>" />
                <input type="hidden" name="img1" value="<?php echo $row_pic['pic_name'];?>">
                <input type="file" name="pic_name"  class="form-control" onchange="document.getElementById('pic_name').src = window.URL.createObjectURL(this.files[0])">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-10" >
                 <button type="submit" class="btn"><i class="fa fa-save"></i>&nbsp; บันทึกข้อมูล</button>
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
function update_pic(){

  $pic_id=$_POST['id'];
/////////////////// image1 ////////////////////
  if(!empty($_FILES['pic_name']['name'])){
        $name_gallary_img3 = md5(time()).".".end(explode("."."_",$_FILES['pic_name']['name']));
        $name_gallary_img_tmp3=$_FILES['pic_name']['tmp_name'];
        @copy($name_gallary_img_tmp3,"../uploads/picture_index/$name_gallary_img3");
  }else{
        $name_gallary_img3="";
  }

  if(empty($_FILES['pic_name']['name'])){
      $name_gallary_img3=$_POST['img1'];
      @copy($name_gallary_img_tmp3,"../uploads/picture_index/$name_gallary_img3");
  }else{
    $resule_delete3=mysql_query("SELECT pic_name FROM pic WHERE pic_id='$_POST[id]'") or die(mysql_error());
    $row_delete3 = mysql_fetch_array($resule_delete3);
      @unlink("../uploads/picture_index/$row_delete3[pic_name]");
  }


  $sql = "UPDATE pic SET pic_name='$name_gallary_img3' WHERE pic_id = $pic_id ";
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('อัพเดทข้อมูล เลขที่ =$pic_id เรียบร้อยแล้ว'),window.location='index.php?module=pic&action=pic_list'</script>";
}
?>

<?php
//================================================================================
function show_pic(){
  $sql = "UPDATE pic SET status1 = '1' WHERE pic_id = $_GET[id] ";
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('แสดงรูปภาพบนหน้าจอหลักเรียบร้อยแล้ว!!!'),window.location='index.php?module=pic&action=pic_list'</script>";
}
?>

<?php
//================================================================================
function notshow_pic(){
  include("../connection.php");
  $sql = "UPDATE pic SET status1 = '0' WHERE pic_id = $_GET[id] ";
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('ยกเลิกการแสดงรูปภาพบนหน้าจอหลักเรียบร้อยแล้ว!!!'),window.location='index.php?module=pic&action=pic_list'</script>";
}
?>
