<?php
function profile_list(){
?>
<link rel="stylesheet" href="css/styles.min.css">
<link rel="stylesheet" href="css/year.css">
<link rel="stylesheet" href="css/table.css">
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
<div class="w3-content w3-display-container ">
  <?php
    $i=1;
    $resule_addyear=mysql_query("SELECT * FROM addyear ORDER BY addyearid ASC") or die(mysql_error());
    while($row_addyear = mysql_fetch_array($resule_addyear)){
      ?>
      <main class="page pricing-table-page mySlides">
           <section class="clean-block clean-pricing dark">
              <h2>ประวัตินักศึกษาฝึกงานประจำปี <?php echo $row_addyear['year']; ?></h2>

              <table id="t01">
              <tr>
                <th>รายชื่อ</th>
                <th width=10%>รายละเอียด</th>
              </tr>
              <tr>
                <?php $result_member=mysql_query("SELECT * FROM tb_student where status1 != '2' AND (year_start='$row_addyear[year]') ORDER BY id ASC") or die(mysql_error());
                	while($result_list = mysql_fetch_array($result_member)){
                ?>
                <td><?php echo $result_list["Name"]; ?>  <?php echo $result_list["Surname"]; ?></td>
                <td><a href ="index.php?module=register&action=edit_register&id=<?php echo $result_list['id']; ?>" class="btn-xs btn-danger">รายละเอียด</a></td>
              </tr>
                <?php } ?>
              </table>
              <?php
                $i++;
                }
              ?>
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
?>
