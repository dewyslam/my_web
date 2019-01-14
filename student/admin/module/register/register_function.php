<?php
function register_list(){
?>


<?php
  $resule_register=mysql_query("SELECT * FROM tb_student  where id and status1 != '2' ORDER BY id DESC") or die(mysql_error());
  $rows = mysql_num_rows($resule_register);
?>

<div class="row">
  <div class="col-lg-12">
      <div class="card">

<div class="card-block">
<form name="listregister" action ="index.php?
module=register&action=delete_register" method ="post" enctype="multipart/form-data">

<div class="table-responsive" style="margin-top: 10px;">
    <table class="table table-striped table-bordered table-hover " id="dataTables-example" >
      <thead>
        <tr>
          <th style="color: #696969;">ลำดับ</th>
          <th width="15%">ชื่อ-สกุล</th>
          <th width="6%">ชื่อเล่น</th>
          <th width="11%">เบอร์โทรศัพท์</th>
          <th width="12%">ตำแหน่งที่ฝึก</th>
          <th width="20%">มหาลัย</th>
          <th width="8%">ปีที่ฝึก</th>
          <th width="8%">สถานะ</th>
          <th width="8%">ประวัติ</th>
          <th>อนุมัติ/ปฏิเสธ</th>
        </tr>
      </thead>
    <tbody>


<?php
$i =1;
  while($row_register = mysql_fetch_array($resule_register)){

    if($row_register['status1']==0){
            $status="รออนุมัติ";
    }else if($row_register['status1']==1){
            $status="อนุมัติ";
    }else{
            $status="ว่าง";
    }
?>

    <tr class="odd gradeX">
    <td align ="center"><?php echo $i; ?></td>
    <td>
          <a><?php echo $row_register['Name']; ?> &nbsp; <?php echo $row_register['Surname']; ?></a>
    </td>
    <td>
          <a><?php echo $row_register['Nickname']; ?> </a>
    </td>
    <td>
          <a><?php echo $row_register['Tel']; ?> </a>
    </td>
    <td>
          <a><?php echo $row_register['_Position']; ?> </a>
    </td>
    <td>
          <a><?php echo $row_register['University']; ?> </a>
    </td>
    <td>
      <a><?php echo $row_register['DateStart']; ?></a>
    </td>
    <td>
      <form name="confirm" action="index.php?module=register&action=confirm_register" method="post">
          <a><?php //echo $status; ?> </a>
          <input type="hidden" name="register_id" value="<?php echo $row_register['id']; ?>">
          <select name="status" class="form-control">
            <option value="0" <?php if($row_register['status1']==0){ echo "selected"; } ?>>รออนุมัติ</option>
            <option value="1" <?php if($row_register['status1']==1){ echo "selected"; } ?>>อนุมัติ</option>
          </select>
      </form>
    </td>
    <td align ="center">
      <div class="btn-all">
        <a href ="index.php?module=register&action=edit_register&id=<?php echo $row_register['id']; ?>" class="btn btn-warning">
        <i class='fa fa-edit'></i></a>
      </div>
    </td>

    <td align ="center">
      <div class="btn-all">
        <!--
        <a href ="index.php?module=register&action=confirm_register&id=<?php echo $row_register['id']; ?>" class="btn btn-success">
        <i class='fa fa-save'></i></a>
        -->
         <button class="btn btn-success" type="submit">
        <i class='fa fa-save'></i></button>


        <a href ="index.php?module=register&action=delete_register&id=<?php echo $row_register['id']; ?>" onclick="return confirm('คุณแน่ใจว่าต้องการปฏิเสธ?')" class="btn btn-danger">
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
function register_update(){

  }
?>

<?php
//================================================================================


function insert_register(){

}

?>

<?php

//================================================================================


function confirm_register(){
//$id=$_GET['id'];
$sql = "UPDATE tb_student SET status1 = '$_POST[status]' WHERE id = $_POST[register_id] ";
mysql_query($sql)or die(mysql_error());
mysql_close();
echo "<script>alert('ยอมรับ เลขที่ =$id เรียบร้อยแล้ว'),window.location='index.php?module=register&action=register_list'</script>";
}

?>
<?php
//================================================================================

function edit_register(){
?>
<?php
  $resule_register=mysql_query("SELECT * FROM tb_student where id = $_GET[id]") or die(mysql_error());
  $row_register = mysql_fetch_array($resule_register);
?>
<link rel="stylesheet" href="css/bootstrap1.min.css">
<link rel="stylesheet" href="css/styles.min.css">
            <div class="container"><div><br />
    <form class="needs-validation" method="post" novalidate action="index.php?
    module=register&action=update_register" enctype="multipart/form-data">
      <input type="hidden" class="form-control" name="id" value="<?php echo $row_register['id'];?>" required>
      <div class="btn-all1">
          <a href="pdf.php?id=<?php echo $row_register['id']; ?>" target ="_blank"  class="btn btn-add" >ดูข้อมูลแบบ PDF</a>
      </div>
            <h4><center>ประวัติส่วนตัว</center> </h4><br>
        <div class="form-row ">
		<br>
            <div class="col-md-6">
            <label for="Name">ชื่อ</label>
            <input type="text" class="form-control" name="Name" value="<?php echo $row_register['Name'];?>" placeholder="กรุณากรอกชื่อ" required>
            </div>
             <div class="col-md-6">
            <label for="Surname">นามสกุล</label>
            <input type="text" class="form-control" name="Surname" value="<?php echo $row_register['Surname'];?>" placeholder="กรุณากรอกนามสกุล" required>
            </div>
      </div>
              <br>

    <div class="form-row">
        <div class="col-md-6">
        <label for="Nickname">ชื่อเล่น</label>
        <input type="text" class="form-control" name="Nickname" value="<?php echo $row_register['Nickname'];?>" placeholder="กรุณากรอกชื่อเล่น" required>
        </div>
         <div class="col-md-6">
        <label for="Tel">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control"  name="Tel"  value="<?php echo $row_register['Tel'];?>" placeholder="กรุณากรอกเบอร์โทรศัพท์" required>
        </div>
    </div>
        <br>

    <div class="form-row">
            <div class="col-md-6">
       <label for="Date">วัน/เดือน/ปีเกิด</label>
            <input class="form-control"  type="date" value="<?php echo $row_register['B_Date'];?>"   name="B_Date" required>
            </div>
    </div>
	<br>
    <div class="form-group">
        <label for="Address">ที่อยู่</label>
        <textarea rows="1" cols="50" class="form-control"  name="Address"  placeholder="บ้านเลขที่ 99/34 หมู่ 33 ต.กกกก อ.นนนนน จ.กกกกกก 57000" required><?php echo $row_register['Address'];?></textarea>
      </div>
   <div class="container">
    <div class="form-row ">
  <div class="col-md-6">
        <label for="File1">แนบรูปถ่าย</label><br>
        <img id="File1" alt="เพิ่มรูปภาพ" width="30%" class="img-responsive" src="../image/<?php echo $row_register['File1'];?>" />
        <div style="text-indent: 1.5em;">
          <a href="../image/<?php echo $row_register['File1'];?>">คลิกเพื่อดูรูปขนาดใหญ่</a>
        </div>
        <input type="hidden" name="img1" value="<?php echo $row_register['File1'];?>">
        <input type="file" class="form-control-file" id="File1" name="File1"   onchange="document.getElementById('File1').src = window.URL.createObjectURL(this.files[0])">
    <div class="invalid-feedback"></div>
  </div>
  <div class="col-md-6">
        <label for="File2">แนบรูปแสดงผลการเรียน</label><br>
        <img src="img/pdf.png" class="img-responsive"  width="30%"><br>
        <div style="text-indent: 2em;">
          <a href="../image2/<?php echo $row_register['File2'];?>">คลิกเพื่อดูผลการเรียน</a>
        </div>
        <input type="hidden" name="img2" value="<?php echo $row_register['File2'];?>">
        <input type="file" class="form-control-file"  onchange="document.getElementById('File2').src = window.URL.createObjectURL(this.files[0])"  name="File2" value="<?php echo $row_register['File2'];?>" >
    <div class="invalid-feedback"></div>
  </div>
  </div>
  </div>
    <br>
      <div class="form-group ">

          <label for="Disease">โรคประจำตัว</label>
          <textarea rows="1" cols="50" class="form-control"  name="Disease"  placeholder="กรุณาใส่โรคประจำตัวถ้ามี" ><?php echo $row_register['Disease'];?></textarea>

         </div>

     <div class="form-row ">
		   <div class="col-md-6 ">
          <label for="family">พี่น้อง</label>
          <select  class="form-control form-control-sm " name="family"  value="<?php echo $row_register['family'];?>"   required>
            <option value="">กรุณาเลือกจำนวนพี่น้อง</option>
            <option value="ไม่มี" <?php if ($row_register["family"]=='ไม่มี'){ echo "Selected"; }?>>ไม่มี</option>

            <option value="1" <?php if ($row_register["family"]=='1'){ echo "Selected"; }?>>1</option>

            <option value="2" <?php if ($row_register["family"]=='2'){ echo "Selected"; }?>>2</option>

            <option value="3" <?php if ($row_register["family"]=='3'){ echo "Selected"; }?>>3</option>

            <option value="4" <?php if ($row_register["family"]=='4'){ echo "Selected"; }?>>4</option>

            <option value="5" <?php if ($row_register["family"]=='5'){ echo "Selected"; }?>>5</option>

          </select>
           </div>
           <div class="col-md-6">
            <label for="Status" >สถานะ</label>
            <select class="form-control form-control-sm" name="Status"  value="<?php echo $row_register['Status'];?>"  required>
                <option value="">กรุณาเลือกสถานะ</option>
                <option value="โสด" <?php if ($row_register["Status"]=='โสด'){ echo "Selected"; }?>>โสด</option>
                <option value="หมั้น" <?php if ($row_register["Status"]=='หมั้น'){ echo "Selected"; }?>>หมั้น</option>
                <option value="แต่งงานแล้ว" <?php if ($row_register["Status"]=='แต่งงานแล้ว'){ echo "Selected"; }?>>แต่งงานแล้ว</option>
                <option value="แยกกันอยู่" <?php if ($row_register["Status"]=='แยกกันอยู่'){ echo "Selected"; }?>>แยกกันอยู่</option>
                <option value="หย่า" <?php if ($row_register["Status"]=='หย่า'){ echo "Selected"; }?>>หย่า</option>
                <option value="หม้าย" <?php if ($row_register["Status"]=='หม้าย'){ echo "Selected"; }?>>หม้าย</option>
            </select>
            </div>

	  </div>
	  <br>


      <h4><center>แนะนำตัวเอง</center> </h4>
        <div class="form-group ">

                <label for="Introduce">แนะนำตัวเอง</label>
                <textarea rows="4" cols="50" class="form-control" name="Introduce"   placeholder="" required><?php echo $row_register['Introduce'];?></textarea>
               </div>
         <h4><center>วันที่ฝึกงาน</center> </h4>
      <div class="form-row">
         <div class="col-md-6">
       <label for="DateStart">วันที่เริ่มฝึกงาน</label>
            <input class="form-control"  type="date"   name="DateStart"  value="<?php echo $row_register['DateStart'];?>"  required>
        </div>
        <div class="col-md-6">
       <label for="DateEnd">วันที่สิ้นสุดการฝึกงาน</label>
            <input class="form-control"  type="date" name="DateEnd"  value="<?php echo $row_register['DateEnd'];?>"  required>
    </div>
      </div>
	  <br>
      <h4><center>การศึกษา</center> </h4>
	<br>
	<div class="form-row">
			<div class=" col-md-6 ">
				<label for="University">มหาลัยปัจจุบัน</label>
				<input type="text" class="form-control" placeholder="กรุณากรอกชื่อมหาลัย" name="University"  value="<?php echo $row_register['University'];?>"  required>
			</div>

			<div class="col-md-6">
				<label for="Gpa1">เกรดเฉลี่ย</label>
				<input type="text" class="form-control" name="Gpa1" placeholder="กรุณากรอกเกรด"  value="<?php echo $row_register['Gpa1'];?>"  required>
			</div>
	</div>
	<br>
	<div class="form-row">
		<div class="col-md-6">
				<label for="School">มัธยมจบ</label>
				<input type="text" class="form-control"  name="School" placeholder="กรุณากรอกชื่อมัธยม"  value="<?php echo $row_register['School'];?>"  required>
			</div>


			<div class="col-md-6">
				<label for="Gpa2">เกรดเฉลี่ย</label>
				<input type="text" class="form-control"  name="Gpa2" placeholder="กรุณากรอกเกรด"  value="<?php echo $row_register['Gpa2'];?>"  required>
			</div>
    </div>
    <br>
    <div class="form-row">
		<div class="col-md-6">
				<label for="Diploma">ปวช,ปวสจบ</label>
				<input type="text" class="form-control"  name="Diploma" placeholder="กรุณากรอกชือ ปวช,ปวส"  value="<?php echo $row_register['Diploma'];?>"  required>
			</div>


			<div class="col-md-6">
				<label for="Gpa3">เกรดเฉลี่ย</label>
				<input type="text" class="form-control"  name="Gpa3" placeholder="กรุณากรอกเกรด"  value="<?php echo $row_register['Gpa3'];?>"  required>

			</div>
    </div>
    <br>
    <div class="form-row">
		<div class="col-md-6">
				<label for="S_Primary">ประถมจบ</label>
				<input type="text" class="form-control"  name="S_Primary" placeholder="กรุณากรอกชื่อประถม"  value="<?php echo $row_register['S_Primary'];?>"  required>
			</div>

			<div class="col-md-6">
				<label for="Gpa4">เกรดเฉลี่ย</label>
				<input type="text" class="form-control"  name="Gpa4" placeholder="กรุณากรอกเกรด"  value="<?php echo $row_register['Gpa4'];?>"  required>
			</div>
	</div>
<br>
    <div class="form-group">
        <label for="_attention">ความสนใจ</label>
        <textarea rows="4" cols="50" class="form-control"  name="_attention" placeholder="" required><?php echo $row_register['_attention'];?></textarea>
      </div>
      <div class="form-group">
        <label for="Skill">ความสามารถ</label>
        <textarea rows="4" cols="50" class="form-control"  name="Skill" placeholder=""required><?php echo $row_register['Skill'];?></textarea>
      </div>

      <h4 style="background-color:rgb(71, 187, 255)";   ><center>ติดต่อ</center> </h4>
      <div class="form-row">
		<div class="col-md-6">
				<label for="Tel2">เบอร์โทร</label>
				<input type="text" class="form-control" name="Tel2" placeholder="กรุณากรอกเบอร์โทร"  value="<?php echo $row_register['Tel2'];?>"  required>
			</div>
			<div class="col-md-6">
				<label for="_Email">อีเมล์</label>
				<input type="text" class="form-control"  name="_Email" placeholder="กรุณากรอกเมล์"  value="<?php echo $row_register['_Email'];?>"  required>
			</div>
    </div>
    <br>
    <div class="form-row">
            <div class="col-md-6">
                    <label for="_Facebook">Facebook</label>
                    <input type="text" class="form-control"  name="_Facebook" placeholder="กรุณากรอกชื่อ_Facebook"  value="<?php echo $row_register['_Facebook'];?>"  required>

                </div>
                <div class="col-md-6">
                    <label for="Line">Line ID</label>
                    <input type="text" class="form-control"  name="_Line_id" placeholder="กรุณากรอก_Line_id"  value="<?php echo $row_register['_Line_id'];?>"  required>
                </div>
        </div><br>
		<br>
        <h4><center>บุคคลที่ติดต่อได้</center>   </h4>
        <br>
		<div class="form-row">
      <div class="col-md-4">
                    <label for="_Contact">บุคคลที่ติดต่อได้</label>
                    <input type="text" class="form-control" id="_Contact" name="_Contact"  placeholder="กรุณาใส่บุคคลที่ติดต่อได้" value="<?php echo $row_register['_Contact'];?>" required>
					<div class="invalid-feedback">กรุณาใส่บุคคลที่ติดต่อได้</div>
      </div>
			<div class="col-md-4">
                    <label for="_Namecontact">ชื่อบุคคลที่ติดต่อได้</label>
                    <input type="text" class="form-control"  name="_Namecontact" placeholder="กรุณากรอกชื่อ"  value="<?php echo $row_register['_Namecontact'];?>"  required>
                </div>
			<div class="col-md-4">
					<label for="_Telcontact">เบอร์โทรศัพท์บุคคลที่ติดต่อได้</label>
          <input type="text" class="form-control"  name="_Telcontact" placeholder="กรุณากรอกเบอร์โทรศัพท์"  value="<?php echo $row_register['_Telcontact'];?>"  required>
			</div>
		</div>

    <br>
        <h4><center>ตำแหน่งที่ต้องการฝึก</center> </h4>
        <br>
    <div class="form-row">
      <div class="col-md-6">
            <label for="_Position">ตำแหน่งที่ต้องการฝึก</label>
            <select  name="_Position" class="form-control form-control-sm" value="<?php echo $row_register['_Position'];?>"  required>
                <option value="">กรุณาเลือกตำแหน่งที่ต้องการฝึก</option>
                <option value="web design" <?php if ($row_register["_Position"]=='web design'){ echo "Selected"; }?>>web design</option>
                <option value="web programming" <?php if ($row_register["_Position"]=='web programming'){ echo "Selected"; }?>>web programming</option>
                <option value="marketing" <?php if ($row_register["_Position"]=='marketing'){ echo "Selected"; }?>>marketing</option>
            </select>
            </div>
          </div>
		<br>

	  <div align="center">
		<button type="button" class="myButton1" onclick='location.replace("index.php?module=register&action=register_list")'>ย้อนกลับ</button>&nbsp
    <button type="submit" name="save" value="save" class="myButton">บันทึกข้อมูล</button>
	  </div>
    </form>

<?php
}
//================================================================================

function update_register(){

  $id=$_POST['id'];
/////////////////// image1 ////////////////////
  if(!empty($_FILES['File1']['name'])){
        $ext =pathinfo(basename($_FILES['File1']['name']), PATHINFO_EXTENSION);
        $name_gallary_img = 'img_'.uniqid().".".$ext;
        $name_gallary_img_tmp=$_FILES['File1']['tmp_name'];
        @copy($name_gallary_img_tmp,"../image/$name_gallary_img");
  }else{
        $name_gallary_img="";
  }

  if(empty($_FILES['File1']['name'])){
      $name_gallary_img=$_POST['img1'];
      @copy($name_gallary_img_tmp,"../image/$name_gallary_img");
  }else{
    $resule_delete=mysql_query("SELECT File1 FROM tb_student WHERE id='$_POST[id]'") or die(mysql_error());
    $row_delete = mysql_fetch_array($resule_delete);
      @unlink("../image/$row_delete[File1]");
  }
/////////////////// image2 ////////////////////
  if(!empty($_FILES['File2']['name'])){
        $ext2 =pathinfo(basename($_FILES['File2']['name']), PATHINFO_EXTENSION);
        $name_gallary_img2 = 'img_'.uniqid().".".$ext2;
        $name_gallary_img_tmp2=$_FILES['File2']['tmp_name'];
        @copy($name_gallary_img_tmp2,"../image2/$name_gallary_img2");
  }else{
        $name_gallary_img2="";
  }

  if(empty($_FILES['File2']['name'])){
      $name_gallary_img2=$_POST['img2'];
      @copy($name_gallary_img_tmp2,"../image2/$name_gallary_img2");
  }else{
    $resule_delete2=mysql_query("SELECT File2 FROM tb_student WHERE id='$_POST[id]'") or die(mysql_error());
    $row_delete2 = mysql_fetch_array($resule_delete2);
      @unlink("../image2/$row_delete2[File2]");
  }



  $year_start =substr($_POST['DateStart'],0,4);
  $year_end =substr($_POST['DateEnd'],0,4);

  $sql = "UPDATE tb_student SET Name='$_POST[Name]',Surname='$_POST[Surname]',Nickname='$_POST[Nickname]',Tel='$_POST[Tel]',B_Date='$_POST[B_Date]',Address='$_POST[Address]',File1='$name_gallary_img',File2='$name_gallary_img2',
  Disease='$_POST[Disease]',family='$_POST[family]',Status='$_POST[Status]',Introduce='$_POST[Introduce]',DateStart='$_POST[DateStart]',DateEnd='$_POST[DateEnd]',University='$_POST[University]',Gpa1='$_POST[Gpa1]',
  School='$_POST[School]',Gpa2='$_POST[Gpa2]',Diploma='$_POST[Diploma]',Gpa3='$_POST[Gpa3]',S_Primary='$_POST[S_Primary]',Gpa4='$_POST[Gpa4]',_attention='$_POST[_attention]',Skill='$_POST[Skill]',Tel2='$_POST[Tel2]',
  _Email='$_POST[_Email]',_Facebook='$_POST[_Facebook]',_Line_id='$_POST[_Line_id]',_Contact='$_POST[_Contact]',_Namecontact='$_POST[_Namecontact]',_Telcontact='$_POST[_Telcontact]',_Position='$_POST[_Position]',year_start='$year_start',year_end='$year_end'
   WHERE id = $id ";
   mysql_query($sql)or die(mysql_error());
   mysql_close();
  echo "<script>alert('อัพเดทข้อมูล เลขที่ =$id เรียบร้อยแล้ว'),window.location='index.php?module=register&action=register_list'</script>";


}
//================================================================================

function delete_register(){

  $id=$_GET['id'];
  $sql="DELETE FROM tb_student WHERE id ='".$_GET["id"]."'"; 
  mysql_query($sql)or die(mysql_error());
  mysql_close();
  echo "<script>alert('ปฏิเสธ เลขที่ =$id เรียบร้อยแล้ว!!!'),window.location='index.php?module=register&action=register_list'</script>";
}
?>
