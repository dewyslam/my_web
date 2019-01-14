<?php include("connection.php"); ?>

<?php
if(!empty($_POST["save"])){

    @$Name=$_POST['Name'];
    @$Surname=$_POST['Surname'];
    @$Nickname=$_POST['Nickname'];
    @$Tel=$_POST['Tel'];
    @$B_Date=$_POST['B_Date'];
    @$Address=$_POST['Address'];
    @$File1=$_POST['File1'];
    @$File2=$_POST['File2'];
    @$Disease=$_POST['Disease'];
    @$family=$_POST['family'];
    @$Status=$_POST['Status'];
    @$Introduce=$_POST['Introduce'];
    @$DateStart=$_POST['DateStart'];
    @$DateEnd=$_POST['DateEnd'];
    @$University=$_POST['University'];
    @$Gpa1=$_POST['Gpa1'];
    @$School=$_POST['School'];
    @$Gpa2=$_POST['Gpa2'];
    @$Diploma=$_POST['Diploma'];
    @$Gpa3=$_POST['Gpa3'];
    @$S_Primary=$_POST['S_Primary'];
    @$Gpa4=$_POST['Gpa4'];
    @$_attention=$_POST['_attention'];
    @$Skill=$_POST['Skill'];
    @$Tel2=$_POST['Tel2'];
    @$_Email=$_POST['_Email'];
    @$_Facebook=$_POST['_Facebook'];
    @$_Line_id=$_POST['_Line_id'];
    @$_Contact=$_POST['_Contact'];
    @$__Namecontact=$_POST['_Namecontact'];
    @$_TelContact=$_POST['_TelContact'];
    @$_Position=$_POST['_Position'];
    @$save=$_POST['save'];

    $ext =pathinfo(basename($_FILES['File1']['name']), PATHINFO_EXTENSION);
    $new_image_name = 'img_'.uniqid().".".$ext;
    $image_path ="image/";
    $upload_path = $image_path.$new_image_name;
    //uploads
      move_uploaded_file(@$_FILES['File1']['tmp_name'],@$upload_path);
    $File1 = $new_image_name;

    $ext2 =pathinfo(basename($_FILES['File2']['name']), PATHINFO_EXTENSION);
    $new_image_name2 = 'img_'.uniqid().".".$ext2;
    $image_path2 ="image2/";
    $upload_path2 = $image_path2.$new_image_name2;
    //uploads
      move_uploaded_file(@$_FILES['File2']['tmp_name'],@$upload_path2);
    $File2 = $new_image_name2;

    $year_start=substr($DateStart,0,4);
    $year_end=substr($DateEnd,0,4);

    $query = "INSERT INTO  tb_student(Name,Surname,Nickname,Tel,B_Date,Address,File1,File2,Disease,family,Status,Introduce,DateStart,DateEnd,
      University,Gpa1,School,Gpa2,Diploma,Gpa3,S_Primary,Gpa4,_attention,Skill,Tel2,_Email,_Facebook,_Line_id,_Contact,_Namecontact,_TelContact,_Position,status1,year_start,year_end)
    VALUES('$Name','$Surname','$Nickname','$Tel','$B_Date','$Address','$File1','$File2','$Disease','$family','$Status','$Introduce','$DateStart','$DateEnd','$University','$Gpa1',
      '$School','$Gpa2','$Diploma','$Gpa3','$S_Primary','$Gpa4','$_attention','$Skill','$Tel2','$_Email','$_Facebook','$_Line_id','$_Contact','$__Namecontact','$_TelContact','$_Position','0','$year_start','$year_end');";//
    $result=$conn->query ($query);
    $conn->close();
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย!!'),window.location='register.php'</script>";
  
}

	?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนฝึกงาน</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>


   <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php" style="font-size:30px;color:blue;">นักศึกษาฝึกงาน</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="psentation"><a class="nav-link" href="index.php">หน้าหลัก</a></li>
                    <li class="nav-item" role="psentation"><a class="nav-link" href="check.php">ลงทะเบียนฝึกงาน</a></li>
                    <li class="nav-item" role="psentation"><a class="nav-link" href="pricing.php">ปฏิทินฝึกงาน<br></a></li>
                    <li class="nav-item" role="psentation"><a class="nav-link" href="contact-us.php">ติดต่อ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page _Contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">นักศึกษาฝึกงาน</h2>
                    <h5>กรอกแบบฟอร์มฝึกงาน</h5>
                </div>
            </div>
            <div class="container"><div>
    <form class="needs-validation" method="post" enctype="multipart/form-data" id="submit_form"  novalidate>
            <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>ประวัติส่วนตัว</center> </h4>
        <div class="form-row ">
		<br>
            <div class="col-md-6">
            <label for="Name">ชื่อ</label>
            <input type="text" class="form-control" id="Name"  name="Name" <?php echo @$_GET['Name'];?> placeholder="กรุณากรอกชื่อ" required>
			<div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
             <div class="col-md-6">
            <label for="Surname">นามสกุล</label>
            <input type="text" class="form-control" id="Surname" name="Surname"<?php echo @$_GET['Surname'];?> placeholder="กรุณากรอกนามสกุล" required>
			<div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
      </div>
              <br>

    <div class="form-row">
        <div class="col-md-6">
        <label for="Nickname">ชื่อเล่น</label>
        <input type="text" class="form-control" id="Nickname" name="Nickname" <?php echo @$_GET['Nickname'];?> placeholder="กรุณากรอกชื่อเล่น" required>
		<div class="invalid-feedback">กรุณากรอกชื่อเล่น</div>
        </div>
         <div class="col-md-6">
        <label for="Tel">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="Tel" name="Tel"  <?php echo @$_GET['Tel'];?>placeholder="กรุณากรอกเบอร์โทรศัพท์" required>
		<div class="invalid-feedback">กรุณากรอกเบอร์โทรศัพท์</div>
        </div>
    </div>
        <br>

    <div class="form-row">
            <div class="col-md-6">
       <label for="Date">วัน/เดือน/ปีเกิด</label>
            <input class="form-control"  type="date" value="" id="Date" name="B_Date"  <?php echo @$_GET['B_Date'];?> required>
            <label style="font-size:12px;">*ตัวอย่าง 01/01/2018</label>

			<div class="invalid-feedback">กรุณากรอก วัน เดือน ปีเกิด</div>
            </div>
    </div>
	<br>
    <div class="form-group">
        <label for="Address">ที่อยู่</label>
        <textarea rows="3" cols="50" class="form-control" id="Address" name="Address"<?php echo @$_GET['Address'];?> placeholder="กรุณาใส่บ้านเลขที่/หมู่ที่ ตำบล อำเภอ จังหวัด รหัสไปรษณีย์" required></textarea>
		<div class="invalid-feedback">กรุณากรอกที่อยู่</div>
      </div>

    <div class="form-row ">
	<div class="col-md-6">
        <label for="File1">แนบรูปถ่าย</label><br>
   

    
        <input type="file" class="form-control-file" id="File1" name="File1"<?php echo @$_GET['File1'];?> onchange="document.getElementById('File1').src = window.URL.createObjectURL(this.files[0])" >
		<div class="invalid-feedback"></div>
  </div>
  <form class="" action="index.html" method="post">
    <div class="col-md-6">
          <label for="File2">แนบใบแสดงผลการเรียน</label><br>

          <input type="file" class="form-control-file" id="File2" name="File2"<?php echo @$_GET['File2'];?> onchange="document.getElementById('File2').src = window.URL.createObjectURL(this.files[0])" >
  		<div class="invalid-feedback"></div>
    </div>
  </div>
    <br>
      <div class="form-group ">

          <label for="Disease">โรคประจำตัว</label>
          <textarea rows="3" cols="50" class="form-control" id="Disease" name="Disease" <?php echo @$_GET['Disease'];?> placeholder="กรุณาใส่โรคประจำตัวถ้ามี" ></textarea>
         </div>

     <div class="form-row ">
		   <div class="col-md-6 ">
          <label for="family">พี่น้อง</label>
          <select id="family" class="form-control form-control-sm " name="family"  <?php echo @$_GET['family'];?>  required>
            <option value="">กรุณาเลือกจำนวนพี่น้อง</option>
            <option>ไม่มี</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
           </div>
           <div class="col-md-6">
            <label for="Status" >สถานะ</label>
            <select id="Status" class="form-control form-control-sm" name="Status"  <?php echo @$_GET['Status'];?>  required>
                <option value="">กรุณาเลือกสถานะ</option>
                <option>โสด</option>
                <option>หมั้น</option>
                <option>แต่งงานแล้ว</option>
                <option>แยกกันอยู่</option>
                <option>หย่า</option>
                <option>หม้าย</option>
            </select>
            </div>

	  </div>
	  <br>


      <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>แนะนำตัวเอง</center> </h4>
        <div class="form-group ">

                <label for="Introduce">แนะนำตัวเอง</label>
                <textarea rows="3" cols="50" class="form-control" id="Introduce" name="Introduce"  <?php echo @$_GET['Introduce'];?>  placeholder="" required></textarea>
				<div class="invalid-feedback">กรุณากรอกแนะนำตัวเอง</div>
               </div>

         <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>วันที่ฝึกงาน</center> </h4>

      <div class="form-row">
         <div class="col-md-6">
       <label for="DateStart">วันที่เริ่มฝึกงาน</label>

            <input class="form-control"  type="date" value="" id="DateStart"  name="DateStart"  <?php echo @$_GET['DateStart'];?>  required>
            <label style="font-size:12px;">*ตัวอย่าง 01/01/2018</label>

			<div class="invalid-feedback">กรุณากรอกวันที่เริ่มฝึกงาน</div>
    </div>

        <div class="col-md-6">
       <label for="DateEnd">วันที่สิ้นสุดการฝึกงาน</label>

            <input class="form-control"  type="date" value="" id="DateEnd" name="DateEnd"  <?php echo @$_GET['DateEnd'];?>  required>
            <label style="font-size:12px;">*ตัวอย่าง 01/01/2018</label>

			<div class="invalid-feedback">กรุณากรอกวันที่สิ้นสุดการฝึก</div>
    </div>
      </div>
	  <br>

      <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>การศึกษา</center> </h4>
	<br>
	<div class="form-row">
			<div class=" col-md-6 ">
				<label for="University">มหาลัยปัจจุบัน</label>
				<input type="text" class="form-control" id="University" placeholder="กรุณากรอกชื่อมหาลัย" name="University"  <?php echo @$_GET['University'];?>>
				
			</div>

			<div class="col-md-6">
				<label for="Gpa1">เกรดเฉลี่ย</label>
				<input type="text" class="form-control" id="Gpa1" name="Gpa1" placeholder="กรุณากรอกเกรด"  <?php echo @$_GET['Gpa1'];?> >
				
			</div>
	</div>
	<br>
	<div class="form-row">
		<div class="col-md-6">
				<label for="School">มัธยมจบ</label>
				<input type="text" class="form-control" id="School" name="School" placeholder="กรุณากรอกชื่อมัธยม"  <?php echo @$_GET['School'];?>>
				
			</div>


			<div class="col-md-6">
				<label for="Gpa2">เกรดเฉลี่ย</label>
				<input type="text" class="form-control" id="Gpa2" name="Gpa2" placeholder="กรุณากรอกเกรด"  <?php echo @$_GET['Gpa2'];?>>
	
			</div>
    </div>
    <br>
    <div class="form-row">
		<div class="col-md-6">
				<label for="Diploma">ปวช,ปวสจบ</label>
				<input type="text" class="form-control" id="Diploma" name="Diploma" placeholder="กรุณากรอกชือ ปวช,ปวส"  <?php echo @$_GET['Diploma'];?>>
			</div>


			<div class="col-md-6">
				<label for="Gpa3">เกรดเฉลี่ย</label>
				<input type="text" class="form-control" id="Gpa3" name="Gpa3" placeholder="กรุณากรอกเกรด"  <?php echo @$_GET['Gpa3'];?>>
			</div>
    </div>
    <br>
    <div class="form-row">
		<div class="col-md-6">
				<label for="S_Primary">ประถมจบ</label>
				<input type="text" class="form-control" id="S_Primary" name="S_Primary" placeholder="กรุณากรอกชื่อประถม"  <?php echo @$_GET['S_Primary'];?>>
			</div>

			<div class="col-md-6">
				<label for="Gpa4">เกรดเฉลี่ย</label>
				<input type="text" class="form-control" id="Gpa4" name="Gpa4" placeholder="กรุณากรอกเกรด"  <?php echo @$_GET['Gpa4'];?>>
			</div>
	</div>
<br>
    <div class="form-group">
        <label for="_attention">ความสนใจ</label>
        <textarea rows="3" cols="50" class="form-control" id="_attention" name="_attention" placeholder=""  <?php echo @$_GET['_attention'];?>></textarea>
      </div>
      <div class="form-group">
        <label for="Skill">ความสามารถ</label>
        <textarea rows="3" cols="50" class="form-control"  name="Skill" placeholder=""  <?php echo @$_GET['Skill'];?>  required></textarea>
      </div>


      <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>ติดต่อ</center> </h4>
      <div class="form-row">
		<div class="col-md-6">
				<label for="Tel2">เบอร์โทร</label>
				<input type="text" class="form-control" id="Tel2" name="Tel2" placeholder="กรุณากรอกเบอร์โทร"  <?php echo @$_GET['Tel2'];?>  required>
				<div class="invalid-feedback">กรุณากรอกเบอร์โทรศัพท์</div>
			</div>


			<div class="col-md-6">
				<label for="_Email">อีเมล์</label>
				<input type="text" class="form-control" id="_Email" name="_Email" placeholder="กรุณากรอกเมล์"  <?php echo @$_GET['_Email'];?>  required>
				<div class="invalid-feedback">กรุณากรอกอีเมล์</div>
			</div>
    </div>
    <br>
    <div class="form-row">
            <div class="col-md-6">
                    <label for="_Facebook">Facebook</label>
                    <input type="text" class="form-control" id="_Facebook" name="_Facebook" placeholder="กรุณากรอกชื่อ Facebook"  <?php echo @$_GET['_Facebook'];?>  required>
					<div class="invalid-feedback">กรุณากรอก_Facebook</div>
                </div>
                <div class="col-md-6">
                    <label for="Line">Line ID</label>
                    <input type="text" class="form-control" id="_Line_id" name="_Line_id" placeholder="กรุณากรอก Line_id"  <?php echo @$_GET['_Line_id'];?>  required>
					<div class="invalid-feedback">กรุณากรอก Line ID</div>
                </div>
        </div><br>
		<br>
        <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>บุคคลที่ติดต่อได้</center>   </h4>
        <br>
		<div class="form-row">
      <div class="col-md-4">
                    <label for="_Contact">บุคคลที่ติดต่อได้</label>
                    <input type="text" class="form-control" id="_Contact" name="_Contact" <?php echo @$_GET['_Contact'];?>  placeholder="กรุณาใส่บุคคลที่ติดต่อได้" required>
					<div class="invalid-feedback">กรุณาใส่บุคคลที่ติดต่อได้</div>
      </div>
			<div class="col-md-4">
                    <label for="_Namecontact">ชื่อบุคคลที่ติดต่อได้</label>
                    <input type="text" class="form-control" id="_Namecontact" name="_Namecontact" <?php echo @$_GET['_Namecontact'];?>  placeholder="กรุณาใส่ชื่อ" required>
					<div class="invalid-feedback">กรุณากรอกชื่อ</div>
      </div>
			<div class="col-md-4">
					<label for="_TelContact">เบอร์โทรศัพท์บุคคลที่ติดต่อได้</label>
                    <input type="text" class="form-control" id="_TelContact" name="_TelContact" <?php echo @$_GET['_TelContact'];?>  placeholder="กรุณาใส่เบอร์โทรศัพท์" required>
					<div class="invalid-feedback">กรุณากรอกเบอร์โทรศัพท์</div>
			</div>
		</div>

    <br>
        <h4 style="background-color:rgb(71, 187, 255)"; id="rcorners"  ><center>ตำแหน่งที่ต้องการฝึก</center> </h4>
        <br>
    <div class="form-row">
      <div class="col-md-4">
            <label for="_Position">ตำแหน่งที่ต้องการฝึก</label>
            <select id="_Position" name="_Position" class="form-control form-control-sm" <?php echo @$_GET['_Position'];?>  required>
                <option value="">กรุณาเลือกตำแหน่งที่ต้องการฝึก</option>
                <option>web design</option>
                <option>web programming</option>
                <option>marketing</option>
            </select>
            </div>
          </div>
		<br>
    <div class="form-group"  align="center">
      <div class="g-recaptcha" data-sitekey="6Lc8g2MUAAAAAPzRsqfcKLP5Ha6Kvq4kUPvft1Ys"></div> 
    </div>
      <div class="form-group" align="center">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" required>
          <label class="form-check-label" for="gridCheck"> ยืนยันความถูกต้อง
		  <div class="invalid-feedback">กรุณายืนยันตัวตน</div>
          </label>
        </div>
      </div>


	  <div align="center">
		<button type="reset" class="myButton1">ยกเลิก</button>&nbsp
		<button type="submit" name="save" class="myButton" value="save" >บันทึกข้อมูล</button>
	  </div>
    </form>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>เริ่มต้น</h5>
                    <ul>
                        <li><a href="index.php">หน้าหลัก</a></li>
                        <li><a href="check.php">ลงทะเบียนฝึกงาน</a></li>
                        <li><a href="pricing.php">ปฏิทินฝึกงาน</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>ติดต่อ</h5>
                    <ul>
                        <li><a href="contact-us.php">ติดต่อเรา</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>เว็บหลัก</h5>
                    <ul>
                        <li><a href="http://www.chiangmaizone.com/">Chiangmaizone</a></li>
                    </ul>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>
</html>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 <script src='https://www.google.com/recaptcha/api.js'></script>