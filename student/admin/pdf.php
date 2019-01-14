<?php
  require_once('assets/mpdf/mpdf.php');
  ob_start();
?>
<?php
  include("../connect_db.php");
 ?>
 <?php
     $id=$_GET['id'];
     $resule_register=mysql_query("SELECT * FROM tb_student where id = '$id' order by id ") or die(mysql_error());
     $row_register = mysql_fetch_array($resule_register);

 ?>
 </style>
           <table width="900" border="0">
              <tr>
                <td colspan="3" align="center"><h2>ประวัติส่วนตัว</h2></td>
              </tr>
              <br />
              <tr>
                <td width="185" height="35"><h4>ชื่อ</h4></td>
                <td width="408"><?php echo $row_register['Name'];?></td>
                <td width="293"><h4>รูปถ่าย</td>
              </tr>
              <tr>
                <td height="35"><h4>นามสุกล</td>
                <td><?php echo $row_register['Surname'];?></td>
                <td rowspan="4"><img id="File1" alt="เพิ่มรูปภาพ" width="30%" class="img-responsive" src="../image/<?php echo $row_register['File1'];?>" /></td>
              </tr>
              <tr>
                <td height="35"><h4>ชื่อเล่น</td>
                <td><?php echo $row_register['Nickname'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>เบอร์โทรศัพท์</td>
                <td><?php echo $row_register['Tel'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>วันเกิด</td>
                <td><?php echo $row_register['B_Date'];?></td>
              </tr>
              <tr>
                <td height="50"><h4>ที่อยู่</td>
                <td colspan="2"><?php echo $row_register['Address'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>โรคประจำตัว</td>
                <td><?php echo $row_register['Disease'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="35"><h4>จำนวนพี่น้อง</td>
                <td><?php echo $row_register['family'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="35"><h4>สถานะ</td>
                <td><?php echo $row_register['Status'];?></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <hr />
            <table width="900" border="0">
              <tr>
                <td colspan="2" align="center"><h2>แนะนำตัวเอง</h2></td>
              </tr>
              <tr>
                <td width="185" height="46"><h4>แนะนำตัวเอง</td>
                <td width="705"><?php echo $row_register['Introduce'];?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <hr />
            <table width="900" border="0">
              <tr>
                <td height="35" colspan="2" align="center"><h2>วันที่ฝึกงาน</h2></td>
              </tr>
              <tr>
                <td width="185" height="36"><h4>วันที่เริ่มฝึกงาน</td>
                <td width="705"><?php echo $row_register['DateStart'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>วันที่สิ้นสุดการฝึกงาน</td>
                <td><?php echo $row_register['DateEnd'];?></td>
              </tr>
            </table>
            <br />
            <hr />
            <table width="900" border="0">
              <tr>
                <td colspan="4" align="center"><h2>การศึกษา</h2></td>
              </tr>
              <tr>
                <td width="185" height="35"><h4>มหาลัยปัจจุบัน</td>
                <td width="350"><?php echo $row_register['University'];?></td>
                <td width="113"><h4>เกรดเฉลี่ย</td>
                <td width="234"><?php echo $row_register['Gpa1'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>มัธยมจบ</td>
                <td><?php echo $row_register['School'];?></td>
                <td><h4>เกรดเฉลี่ย</td>
                <td><?php echo $row_register['Gpa2'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>ปวช,ปวสจบ</td>
                <td><?php echo $row_register['Diploma'];?></td>
                <td><h4>เกรดเฉลี่ย</td>
                <td><?php echo $row_register['Gpa3'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>ประถมจบ</td>
                <td><?php echo $row_register['S_Primary'];?></td>
                <td><h4>เกรดเฉลี่ย</td>
                <td><?php echo $row_register['Gpa4'];?></td>
              </tr>
              <br />
            </table>
            <hr />
            <br /><br /><br />
            <table width="900" border="0">
              <tr>
                <td width="185" height="52"><h4>ความสนใจ</td>
                <td width="699"><?php echo $row_register['_attention'];?></td>
              </tr>
              <tr>
                <td height="60"><h4>ความสามารถ</td>
                <td><?php echo $row_register['Skill'];?></td>
              </tr>
            </table>
            <hr />
            <table width="900" border="0">
              <tr>
                <td colspan="2" align="center"><h2>ติดต่อ</h2></td>
              </tr>
              <tr>
                <td width="185" height="35"><h4>เบอร์โทร</td>
                <td width="699"><?php echo $row_register['Tel2'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>อีเมล์</td>
                <td><?php echo $row_register['_Email'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>Facebook</td>
                <td><?php echo $row_register['_Facebook'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>Line ID</td>
                <td><?php echo $row_register['_Line_id'];?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <hr />
            <table width="900" border="0">
              <tr>
                <td colspan="2" align="center"><h2>บุคคลที่ติดต่อได้</h2></td>
              </tr>
              <tr>
                <td width="185" height="35"><h4>บุคคลที่ติดต่อได้</td>
                <td width="699"><?php echo $row_register['_Contact'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>ชื่อบุคคลที่ติดต่อได้</td>
                <td><?php echo $row_register['_Namecontact'];?></td>
              </tr>
              <tr>
                <td height="35"><h4>เบอร์โทรศัพท์</td>
                <td><?php echo $row_register['_Telcontact'];?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <hr />
            <table width="900" border="0">
              <tr>
                <td colspan="2" align="center"><h2>ตำแหน่งที่ต้องการฝึก</h2></td>
              </tr>
              <tr>
                <td width="185" height="35"><h4>ตำแหน่งที่ต้องการฝึก</td>
                <td width="699"><?php echo $row_register['_Position'];?></td>
              </tr>
            </table>
           <?php
           $html = ob_get_contents();
           ob_end_clean();
           $pdf = new mPDF('th', 'A4', '0', 'THSaraban');
           $pdf->SetAutoFont();
           $pdf->SetDisplayMode('fullpage');
           $pdf->WriteHTML($html, 2);
           $pdf->Output();


           ?>
