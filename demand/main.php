<?php
  $title = "ໜ້າຫຼັກ";
  $path = "../";
  $links = "";
  $session_path = "../";
  include ("../header-footer/header.php");
?>
<div class="row">
    <a href="<?php echo $links ?>create/new-demand" class="m-a">
        <div class="btn btn-light mainlink">
            ສະເໜີແຜນສ້າງ
        </div>
    </a>
    <a href="<?php echo $links ?>report/report-demand" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານແຜນສ້າງ
        </div>
    </a>
    <a href="<?php echo $links ?>report/report-hrd" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງາບແບ່ງປັນ
        </div>
    </a>
    
</div>

<?php
 include ("../header-footer/footer.php");
?>