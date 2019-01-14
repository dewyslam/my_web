<?php
function calendar_list(){
?>
<link rel="stylesheet" href="css/styles.min.css">
<link rel="stylesheet" href="css/year.css">

<div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ </button>
    <?php
      $i=1;
      $resule_addyear=mysql_query("SELECT * FROM addyear ORDER BY addyearid ASC") or die(mysql_error());
      while($row_addyear = mysql_fetch_array($resule_addyear)){
    ?>
      <button class="w3-button demo" onclick="currentDiv(<?php echo $i; ?>)"><?php echo $row_addyear['year']; ?></button>
    <?php $i++; } ?>

    <button class="w3-button w3-light-grey" onclick="plusDivs(1)"> ❯</button>
  </div>
</div>
<div class="w3-content w3-display-container  ">
  <?php
    $i=1;
    $resule_addyear=mysql_query("SELECT * FROM addyear ORDER BY addyearid ASC") or die(mysql_error());
    while($row_addyear = mysql_fetch_array($resule_addyear)){
  ?>
  <main class="page pricing-table-page mySlides">
        <section class="clean-block clean-pricing dark">
            <div class="">
                <div class=""><div class="container"><div class="cssTable">

                    <center><h2>สถานะการลงทะเบียนแต่ล่ะปี <?php echo $row_addyear['year']; ?></h2>
                    <p>เช็คสถานะ</p></center>
                    <div class="cssDiv" style="float:right;color:#d6d6f5">
                    &nbsp สถานะ &nbsp | &nbsp <i class="icon-user icon text-danger">เต็ม</i>
                    &nbsp | &nbsp <i class="fa fa-hourglass-2 text-warning">รออนุมัติ</i>
                    &nbsp | &nbsp<i></i>ว่าง &nbsp
                    </div>

                    <div class="table-responsive">
                    <table class="table table-dark" style="background-color:#d6d6f5;">
                      <thead>
                       <tr >
                          <th>เดือน</th>
                          <th>สถานะ1</th>
                          <th>สถานะ2</th>
                          <th>สถานะ3</th>
                          <th>สถานะ4</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                        foreach ($month as $j =>$value){
+
                            $m=$j+1;
                            if($m>9){
                            $month1=$m;
                          }else{
                            $month1="0".$m;
                          }
                        ?>
                        <tr>
                          	<td><br><?php echo $value; ?><br></td>
                          	<?php
                          //  echo "SELECT * FROM tb_student where status1 != '2' AND (year_start='$row_addyear[year]' AND year_end='$row_addyear[year]') ORDER BY id ASC";
                          		$result_member=mysql_query("SELECT * FROM tb_student where status1 != '2' AND (year_start='$row_addyear[year]' OR year_end='$row_addyear[year]') ORDER BY id ASC") or die(mysql_error());
                          		$num_member = mysql_num_rows($result_member);
                          		while($row_member = mysql_fetch_array($result_member)){

                                if($row_member['status1']==0){
                                  $status="<i class=\"fa fa-hourglass-2 text-warning\">รออนุมัต</i>";}else if($row_member['status1']==1){$status="<i class=\"icon-user icon text-danger\">เต็ม</i>";}else{$status="ว่าง";
                                  }
                          	?>
                          	<?php
                          		$k=1;
                          		$DateStart=substr($row_member["DateStart"],5,2);
                          		$DateEnd=substr($row_member["DateEnd"],5,2);

                              if($row_member["year_start"]!=$row_member["year_end"]){ //ระหว่างปี


                                if($row_member["year_start"]==$row_addyear["year"]){ //ปีเริ่มต้น
                                   $DateEnd1=12; // สิ้นสุดของเดือน
                                   $DateStart1=$DateStart; // เริ่มต้นจากเดือน ของวันที่เริ่มต้น
                                }else{ //ปีสิ้นสุด
                                   if($DateEnd<=$DateStart){ //เดือนของปีสิ้นสุด น้อยกว่า ปีเริ่มต้น
                                      $DateEnd1=$DateEnd; //สิ้นสุดของเดือนสุดท้าย ในปีสิ้นสุด
                                      $DateStart1=1; //เริ่มต้นจากเดือนแรก
                                    }else{ //เดือนของปีสิ้นสุด มากกว่า ปีเริ่มต้น
                                       $DateEnd1=$DateEnd;
                                       $DateStart1=1;
                                    }

                                }



                              }else{
                                $DateEnd1=$DateEnd;
                                $DateStart1=$DateStart;
                              }


                          		for($j=$DateStart1; $j<=$DateEnd1; $j++){
                          	?>
                          				<?php if($m==$j){ ?>

                          					<td>
                                      <?php echo $status; ?><br>
                                      <?php echo " ชื่อ: ",$row_member["Name"]; ?><br>
                                      <a href ="index.php?module=register&action=edit_register&id=<?php echo $row_member['id']; ?>" class="btn-xs btn-danger">รายละเอียด</a>
                                    </td>

                          				<?php  }?>


                          	<?php  $k++;} ?>

                          	<?php   } ?>
                          </tr>
                          <?php   } ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
<?php $i++; } ?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-red", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-red";
    }
</script>

<?php
}

//================================================================================
function calendar_add(){
?>


<?php
}
//================================================================================

function insert_calendar(){

}

?>
