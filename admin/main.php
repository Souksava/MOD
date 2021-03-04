<?php
  $title = "ໜ້າຫຼັກ";
  $path = "../";
  $links = "";
  $session_path = "../";
  include ("../header-footer/header.php");
?>
<div class="row">
    <a href="<?php echo $links ?>data/user" class="m-a">
        <div class="btn btn-light mainlink">
            ຈັດການຂໍ້ມູນຜູ້ໃຊ້ລະບົບ
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
    <a href="<?php echo $links ?>edit/edit-demand" class="m-a">
        <div class="btn btn-light mainlink">
            ແກ້ໄຂແຜນສ້າງນັກຮຽບ
        </div>
    </a>
    <a href="<?php echo $links ?>edit/edit-supply" class="m-a">
        <div class="btn btn-light mainlink">
            ແກ້ໄຂແຜນຮັບນັກຮຽບ
        </div>
    </a>


</div>

<?php
 include ("../header-footer/footer.php");
?>