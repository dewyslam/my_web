<?php
    include("connection.php"); // ติดต่อฐานข้อมูล

      $Name=$_POST['Name'];
      $Surname=$_POST['Surname'];
      $Nickname=$_POST['Nickname'];
      $Tel=$_POST['Tel'];
      $Date1=$_POST['Date1'];
      $Address=$_POST['Address'];
			$File1=$_POST['File1'];
			$File2=$_POST['File2'];
			$Disease=$_POST['Disease'];
			$family=$_POST['family'];
			$Status=$_POST['Status'];
			$Introduce=$_POST['Introduce'];
			$DateStart=$_POST['DateStart'];
			$DateEnd=$_POST['DateEnd'];
			$University=$_POST['University'];
			$Gpa1=$_POST['Gpa1'];
			$School=$_POST['School'];
			$Gpa2=$_POST['Gpa2'];
			$Diploma=$_POST['Diploma'];
			$Gpa3=$_POST['Gpa3'];
			$Primary=$_POST['Primary'];
			$Gpa4=$_POST['Gpa4'];
			$Interested=$_POST['Interested'];
			$Ability=$_POST['Ability'];
			$Tel2=$_POST['Tel2'];
			$Email=$_POST['Email'];
			$Facebook=$_POST['Facebook'];
			$Line1=$_POST['Line1'];
			$Contact=$_POST['Contact'];
			$Namecontact=$_POST['Namecontact'];
			$Telcontact=$_POST['Telcontact'];
      $submit=$_POST['submit'];


      if(isset($submit)){
      $sqlinsert= "INSERT INTO  tb_student(Name,Surname,Nickname,Tel,Date1,Address,File1,File2,Disease,family,Status,Introduce,DateStart,DateEnd,University,Gpa1,School,Gpa2,Diploma,Gpa3,Primary,Gpa4,Interested,Ability,Tel2,Email,Facebook,Line1,Contact,Namecontact,Telcontact)
      VALUES( '$Name','$Surname','$Nickname','Tel','$Date1','$Address','$File1','$File2','$Disease','$family','$Status','$Introduce','$DateStart','$DateEnd','$University','$Gpa1','$School',
			'$Gpa2','$Diploma','$Gpa3','$Primary','$Gpa4','$Interested','$Ability','$Tel2','$Email','$Facebook','$Line1','$Contact','$Namecontact','$Telcontact');";
      $result = mysql_query($query,$link);mysql_close($link);
            echo"<script language='javascript'>alert('ทำการบันทึกข้อมูลสำเร็จแล้ว'); </script>";
            echo"<script language='javascript'>window.location='index.html';</script>";

}else{?>
