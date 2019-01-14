<?php include("connection.php"); ?>
<?php
if(!empty($_POST["save"])){

	require_once "assets/captcha/recaptchalib.php";
	// your secret key
	$secret = "6Lc8g2MUAAAAAABlASa1M0l07HjP5ThQcQmtJCDh";
	 // empty response
	$response = null;
	 // check secret key
	$reCaptcha = new ReCaptcha($secret);

	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
	    $response = $reCaptcha->verifyResponse(
	        $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}



	  if ($response != null && $response->success) {
				$c_name=$_POST['c_name'];
				$c_company=$_POST['c_company'];
				$c_email=$_POST['c_email'];
				$c_phone=$_POST['c_phone'];
				$c_enquiry=$_POST['c_enquiry'];
				$c_message=$_POST['c_message'];

				$save=$_POST['save'];

				//////////////Send email//////////////////////////////////////////////////////////////////////////////////////////
						$to      = 'siriwat_96@hotmail.com'; //parn69@gmail.com
						$subject = 'Contact us';
						$body = "Contact us". "\r\n";
						$body .= "Name : $c_name ". "\r\n";
						$body .= "Email : $c_email". "\r\n";
						$body .= "Tel. : $c_phone". "\r\n";
						$body .= "Subject : $c_enquiry". "\r\n";
						$body .= "Message : $c_message". "\r\n";

						$headers = 'From: '.$c_name."<".$c_email.">"."\r\n" .
								'Reply-To: '.$c_email. "\r\n" .
								'X-Mailer: PHP/' . phpversion();
						mail($to, $subject, $body, $headers);

						/*
						$strTo = $_POST["thanagithz@hotmail.com"];
						$strSubject = $_POST["c_enquiry"];
						$strHeader = "Content-type: text/html; charset=windows-874\r\n"; // or UTF-8 //
						$strHeader .= "From: ".$_POST["c_name"]."<".$_POST["c_email"].">\r\nReply-To: ".$_POST["c_email"]."";
						$strMessage = nl2br($_POST["c_message"]);
						$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
						if($flgSend)
						{
							echo "Email Sending.";
						}
						else
						{
							echo "Email Can Not Send.";
						}
						*/
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////


				$query = "INSERT INTO  contact(c_name,c_company,c_email,c_phone,c_enquiry,c_message)
				VALUES('$c_name','$c_company','$c_email','$c_phone','$c_enquiry','$c_message');";//
				$result=$conn->query ($query);
				$conn->close();
				echo "<script>alert('บันทึกข้อมูลเรียบร้อย!!'),window.location='contact-us.php'</script>";

			}else {
      echo "<script type='text/javascript'>alert('กรอกรหัสป้องกันผิดพลาดกรุณากรอกใหม่!');</script>";
      echo "<script>window.location='contact-us.php'</script>";
  }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อ</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>

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
    <main class="page contact-us-page">
        <section class="clean-block features">
            <div class="container-fluid">
            <br>
                <form class="needs-validation" method="post" novalidate>
                  <div class="fullWidth contactwel">
	 <div class="container-fluid"><br>
	   <br><center style="margin-top: -38px"><img src="assets/img/tech/fffff.png" class="img-responsive"  width="40%"></center>
	  <div class="row conbody">
	  <div class="col-md-1"></div>
	   <div class="col-md-4 text-left">
		<p>Chiangmaizone Dot Com Limited Partnership<br><br>
			405 หมู่ 5 ต.สันพระเนตร อ.สันทราย จ.เชียงใหม่ 50210<br><br>
			Office Hour : 10.00 AM - 17.00 PM<br>
		</p>
			<table>
								<tr>
									<td>Mobile :</td>
									<td>&nbsp;</td>
									<td>086-6542433 l 086-7358835</td>
								</tr>
								<tr>
									<td>Tel Office :</td>
									<td>&nbsp;</td>
									<td>053-380899</td>
								</tr>
								<tr>
									<td>FAX :</td>
									<td>&nbsp;</td>
									<td>053-380899</td>
								</tr>
			</table>
			<br>
			<table>
								<tr>
									<td>E-mail :</td>
									<td>&nbsp;</td>
									<td>chiangmaizone@hotmail.com</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>chatnaja@hotmail.com</td>
								</tr>
							</table>
			<br>
			<table>
								<tr>
									<td>Line ID :</td>
									<td>&nbsp;</td>
									<td>chiangmaizonedotcom</td>
								</tr>
								<tr>
									<td>Varity Web :</td>
									<td>&nbsp;</td>
									<td>www.doocm.com </td>
								</tr>
			</table>




<div>
 <img src="assets/img/tech/contact_us_button.png" class="img-responsive" alt="" width="30%">
</div>
	   </div>
	   <div class="col-md-5 text-right">
		<form class="contact-form" name="contactformfree" action="" >
      <div class="form-group">
        <input type="Name" class="form-control" name="c_name" <?php echo @$_GET['$c_name'];?>  placeholder="Name" required>
        <div class="invalid-feedback">กรุณากรอกชื่อ</div>
      </div>
  <div class="form-group">
    <input type="Company" class="form-control" name="c_company" <?php echo @$_GET['$c_company'];?>  placeholder="Company" required>
      <div class="invalid-feedback">กรุณากรอกบริษัท</div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="c_email"  <?php echo @$_GET['c_email'];?> placeholder="Email" required>
          <div class="invalid-feedback">กรุณากรอกอีเมล์</div>
  </div>
  <div class="form-group">
    <input type="Phone" class="form-control" name="c_phone"  maxlength="10"<?php echo @$_GET['c_phone'];?>  placeholder="Phone" required>
      <div class="invalid-feedback">กรุณากรอกเบอร์โทรศัพท์</div>
  </div>
  <div class="form-group">
    <input type="Enquiry" class="form-control" name="c_enquiry"<?php echo @$_GET['c_enquiry'];?>  placeholder="Enquiry" required>
    <div class="invalid-feedback">กรุณากรอกคำสอบถาม</div>
  </div>
  <div class="form-group">
	<textarea class="form-control" name="c_message"  rows="5"<?php echo @$_GET['c_message'];?>  placeholder="Message"></textarea>

  </div>
	<div class="g-recaptcha" data-sitekey="6Lc8g2MUAAAAAPzRsqfcKLP5Ha6Kvq4kUPvft1Ys"></div>
	  <button type="submit" name="save" value="save" class="btn btn-primary"  OnClick="JavaScript:fncAlert();">ส่งข้อมูล</button><br>
	  <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.850453492159!2d99.0280215323408!3d18.80481678724406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfee732fe3136f175!2z4Lir4LiI4LiBLuC5gOC4iuC4teC4ouC4h-C5g-C4q-C4oeC5iOC5guC4i-C4meC4lOC4reC4l-C4hOC4reC4oQ!5e0!3m2!1sth!2sth!4v1525149686456" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	</form>
	   </div>
	  </div>
	 </div>
	</div>
                </form>
                        </div>
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
