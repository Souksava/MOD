<?php
  $title = "ໜ້າຫຼັກ";
  $path = "../";
  $links = "";
  $session_path = "../";
  include ("../header-footer/header.php");
?>
<div class="row">
    <a href="<?php echo $links ?>file/type" class="m-a">
        <div class="btn btn-light mainlink">
            ຈັດການປະເພດຟາຍ
        </div>
    </a>
    <a href="<?php echo $links ?>file/upload" class="m-a">
        <div class="btn btn-light mainlink">
            ອັບໂຫຼດຟາຍ
        </div>
    </a>
    <a href="<?php echo $links ?>data/group" class="m-a">
        <div class="btn btn-light mainlink">
            ຈັດການຂໍ້ມູນກົມ
        </div>
    </a>
    <a href="<?php echo $links ?>data/university" class="m-a">
        <div class="btn btn-light mainlink">
            ຈັດການຂໍ້ມູນມະຫາໄລ
        </div>
    </a>
    <a href="<?php echo $links ?>period/year" class="m-a">
        <div class="btn btn-light mainlink">
            ເປີດສົກຮຽນ
        </div>
    </a>
    <a href="<?php echo $links ?>divide/share" class="m-a">
        <div class="btn btn-light mainlink">
            ແບ່ງປັນທຶນ
        </div>
    </a>
    <a href="<?php echo $links ?>divide/distribute" class="m-a">
        <div class="btn btn-light mainlink">
            ແຈກຢາຍທິນ
        </div>
    </a>
    <a href="<?php echo $links ?>edit/edit-share" class="m-a">
        <div class="btn btn-light mainlink">
            ແກ້ໄຂການແບ່ງປັນ
        </div>
    </a>
    <a href="<?php echo $links ?>edit/edit-distribute" class="m-a">
        <div class="btn btn-light mainlink">
            ແກ້ໄຂການແຈກຢາຍ
        </div>
    </a>
    <a href="<?php echo $links ?>report/report-supply" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານແຜນຮັບ
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