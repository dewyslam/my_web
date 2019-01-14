<?php
function contact_list(){
  ?>
  <?php
    $resule_contact=mysql_query("SELECT * FROM contact ORDER BY contact_id DESC") or die(mysql_error());
    $rows = mysql_num_rows($resule_contact);
  ?>

  <div class="row">
    <div class="col-lg-12">
        <div class="card">

  <div class="card-block">
  <form name="listcontact" action ="index.php?module=contact&action=delete_contact" method ="post" enctype="multipart/form-data">

  <div class="table-responsive" style="margin-top: 10px;">
      <table class="table table-striped table-bordered table-hover " id="dataTables-example" >
        <thead>
          <tr>
            <th style="color: #696969;">ลำดับ</th>
            <th width="10%">ชื่อผู้ติดต่อ</th>
            <th width="15%">ชื่อบริษัท</th>
            <th width="18%">Email</th>
            <th width="11%">เบอร์โทรศัพท์</th>
            <th width="15%">Enquiry</th>
            <th width="20%">Message</th>
            <th width="5%">ลบ</th>
          </tr>
        </thead>
      <tbody>


  <?php
  $i =1;
    while($row_contact = mysql_fetch_array($resule_contact)){
  ?>

      <tr class="odd gradeX">
      <td align ="center"><?php echo $i; ?></td>
      <td>
            <a><?php echo $row_contact['c_name']; ?> </a>
      </td>
      <td>
            <a><?php echo $row_contact['c_company']; ?> </a>
      </td>
      <td>
            <a><?php echo $row_contact['c_email']; ?> </a>
      </td>
      <td>
            <a><?php echo $row_contact['c_phone']; ?> </a>
      </td>
      <td>
            <a><?php echo $row_contact['c_enquiry']; ?> </a>
      </td>
      <td>
            <a><?php echo $row_contact['c_message']; ?> </a>
      </td>
      <td>
        <a href ="index.php?module=contact&action=contact_delete&id=<?php echo $row_contact['contact_id']; ?>" onclick="return confirm('คุณแน่ใจว่าต้องการปฏิเสธ?')" class="btn-sm btn-danger">
        <i class="fa fa-remove"></i></a>
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
function contact_delete(){
  $id=$_GET['id'];
  $sql = "delete from contact where contact_id='$id'";
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('ลบข้อมูล เลขที่ =$id เรียบร้อยแล้ว!!!'),window.location='index.php?module=contact&action=contact_list'</script>";

?>

<?php
}
//================================================================================

function insert_contact(){




}

?>
