<?php
  $title = "ແກ້ໄຂແຜນສ້າງນັກຮຽນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header_admin.php");
  $conn = mysqli_connect("Localhost", "root", "12345678", "test");
?>



<style>
table {
    font-size: 20px;
    font-family: '10B Muc Zeit', 'Noto Sans Lao' !important;
    font-weight: bold !important;
}
</style>




<form action="senddemand.php" target="_blank" method="Post">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h2>ແຜນສ້າງນັກຮຽນ</h2>
            <h5>ກະລຸນາປ້ອນຈຳນວນນັກສຶກສາທີ່ຕ້ອງການຂໍທຶນ</h5>
        </div>
        <div class="col-xs-12 col-md-6" align="right">
            <h5>ລວມທັງໝົດ <input type="number" class="totalall" value="0" name="totalall" id="amount"
                    style="border: none;width:100px;font-weight: bold;"></h5>

        </div>


        <div class="col-xs-12 col-md-3 dropdown">
        <br>
            <select name="status" id="status" style="width:250px;" class="form-control" >
                <option value="" disabled selected>ເລືອກກົມ </option>
                <option value="1">ກົມການສຶກສາຊັ້ນສູງ - 2020-2021</option>
                <option value="2">ກົມສ້າງຄູ - 2020-2021</option>
                <option value="3">ກົມອາຊີວະສຶກສາ - 2020-2021</option>
                <option value="4">ກະຊວງທີ່ມີ - 2020-2021</option>
            </select>

        </div>
    </div>
    <br>


    <div class="table-responsive table-edit">
        <table id="detail_table" class="table-bordered" style="width: 1500px;">
            <tr>
                <th rowspan="2" style="text-align: center!important;margin: 0 auto;">ລຳດັບ</th>
                <th rowspan="2" style="text-align: center;">ສາຂາວິຊາຮຽນ</th>
                <th rowspan="2" style="text-align: center;">ລະດັບຊັ້ນ</th>
                <th rowspan="2" style="text-align: center;">ລວມ</th>
                <th colspan="2" style="text-align: center; position:st">ຈຳນວນ</th>
            </tr>
            <tr style="text-align: center;">
                <th>ນັກຮຽນ</th>
                <th>ພະນັກງານ</th>
            </tr>
            <?php
                $no_ = 0;
                $unitversity = mysqli_query($conn,"select * from unitversity;");
                foreach($unitversity as $uni){
            ?>
            <tr   style="background-color:#5199FA;color:white;" >
                <td>
                    <?php echo $no_ += 1; ?>
                </td>
                <td colspan="2" style="text-align:center;">
                    <?php echo $uni['unit_name'] ?>
                </td>
                <td style="text-align:center">
2
                </td>
                <td style="text-align:center">
1
                </td>
                <td style="text-align:center">
1
                </td>
            </tr>
            <?php
                $unit_id = $uni['unit_id'];
                $faculty = mysqli_query($conn,"select * from faculty where unit_id='$unit_id'");
                foreach($faculty as $fac){
            ?>
            <tr class="parent" id="<?php echo $fac['fac_id'];?>" title="Click to expand/collapse"
                style="cursor: pointer;background-color:#B1CDF3;color:white;">
                <td>

                </td>
                <td colspan="2"><?php echo $fac['fac_name'] ?></td>
                <td style="text-align:center">
2
                </td>
                <td style="text-align:center">
1
                </td>
                <td style="text-align:center">
1
                </td>
            </tr>
            <!-- parent-end -->
            <?php
                $fac_id = $fac['fac_id'];
                $course = mysqli_query($conn,"select * from course where fac_id='$fac_id'");
                foreach($course as $cour){
            ?>
            <tr class="child-<?php echo $fac['fac_id'] ?> btnUpdate_demand" style="display: table-row;">
                <td></td>
                <td style="padding-left:50px;"><?php echo $cour['course_name'] ?> <input type="hidden" name="fac_1"
                        value="ຄະນະສຶກສາສາດ"></td>
                <td style="text-align:center">
                    ປະລິນຍາຕີ
                </td>
                <td style="text-align:center">
2
                </td>
                <td style="text-align:center;">
1
                </td>
                <td style="text-align:center;">
1
                </td>
            </tr>
            <?php 
                }
            }
        }
        ?>

        </table>
    </div>
    <!-- endtable -->

</form>



    <!-- modal update -->
    <form action="edit-demand" id="formUpdate" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂແຜນສ້າງນັກຮຽນ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" align="left">
                            <div class="col-md-12 col-sm-6 form-control2">
                                <label>ນ/ຮ</label>
                                <input type="hidden" name="student_update" id="id_update"
                                    placeholder="ລະຫັດປະເພດສິນຄ້າ">
                                <input type="text" name="province_id_update" id="student_update" placeholder=""
                                    class="form-control">
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="">Error message</small>
                            </div>
                            <div class="col-md-12 col-sm-6 form-control2">
                                <label>ພ/ງ</label>
                                <input type="text" name="employee_update" id="employee_update" placeholder=""
                                    class="form-control">
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="">Error message</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                        <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success"
                            onclick="">ແກ້ໄຂ</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end modal update -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(window).load(function() {
    var intervalId = window.setInterval(function() {
        check_total();
    }, 500);

    function check_total() {
        var totalall = $('#amount').val();
        if (totalall == '' || totalall == '0') {
            $("#btnSend").attr("disabled", true);
        } else {
            $("#btnSend").attr("disabled", false);
        }
    }
    $('tr.parent')
        .css("cursor", "pointer")
        .attr("title", "Click to expand/collapse")
        .click(function() {
            $(this).siblings('.child-' + this.id).toggle();
        });
    $('tr[@class^=child-]').hide().children('td');

});
</script>

<script>
// ປຸ່ມບວກກັບລົບ
$('.demandBtn').on('click', function() {
    <?php
    // Loop ມະຫາໄລອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
    $u = mysqli_query($conn,"select *from unitversity");
    foreach($u as $un){
        $u_id = $un['unit_id'];
        $f = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");
        //Loop ຄະນະອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
        foreach($f as $fc){
            $f_id = $fc['fac_id'];
            $c = mysqli_query($conn,"select * from course where fac_id='$f_id'");
            // Loop ສາຂາວິຊາອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
            foreach($c as $cr){
                
                $c_id = $cr['course_id'];
                //ດຶງຂໍ້ມູນສາຂາວິຊາທີ່ຢູ່ມີເງື່ອນໄຂຢູ່ໃນຂະນະທີ່ ຄິກອອກເພື່ອເອົາມາບວກກັນ
                $c_sql = mysqli_query($conn,"select * from course where fac_id='$f_id'");
                //ດຶງຂໍ້ມູນສາຂາວິຊາທີ່ຢູ່ມີເງື່ອນໄຂຢູ່ໃນຂະນະທີ່ ຄິກອອກເພື່ອເອົາມາບວກກັນ
                $f_sql = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");

                    ?>
    // 1 LOOP qty std and emp
    var numStd = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງສາຂາທີ່ເປັນນັກຮຽນ
    var numEmp = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງສາຂາທີ່ເປັນພະນັກງານ
    var faculty_std = 0; //ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງຄະນະທີ່ເປັນນັກຮຽນ
    var faculty_emp = 0; //ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງຄະນະທີ່ເປັນພະນັກງານ
    <?php 
                        // Loop Course
                        foreach($c_sql as $c_get){
                        ?>
    numStd += parseInt($("#std_<?php echo $c_get['course_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງສາຂາທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະ
    numEmp += parseInt($("#emp_<?php echo $c_get['course_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງສາຂາທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະ
    <?php
                        }
                        // loop faculty 
                        foreach($f_sql as $f_get){
                        ?>
    faculty_std += parseInt($("#total_fac_std_<?php echo $f_get['fac_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    faculty_emp += parseInt($("#total_fac_emp_<?php echo $f_get['fac_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະມະຫາໄລ
    <?php
                        }
                        ?>

    //ລວມຄະນະ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ
    $("#total_fac_std_<?php echo $f_id ?>").val(numStd);
    //


    //ລວມຄະນະ ແນວຕັ້ງ ຫຼື ຖັນ ພະນັກງານ
    $("#total_fac_emp_<?php echo $f_id ?>").val(numEmp);
    //



    //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ
    $("#total_col_unit_std_<?php echo $u_id ?>").val(faculty_std);
    //



    //ນັກຮຽນບວກກັບພະນັກງານແນວນອນ ຫຼື ແຖວຂອງ 1 ສາຂາ
    $("#total_course_<?php echo $c_id ?>").val(parseInt($("#std_<?php echo $c_id ?>").val()) + parseInt($(
        "#emp_<?php echo $c_id ?>").val()));
    //


    //ລວມທັງໝົດຂອງຄະນະ ໂດຍການເອົາລວມຄະນະນັກຮຽນແນວນອນບວກກັບລວມຄະນະພະນັກງານແນວນອນ
    $("#total_fac_<?php echo $f_id ?>").val(parseInt($("#total_fac_std_<?php echo $f_id ?>").val()) + parseInt(
        $("#total_fac_emp_<?php echo $f_id ?>").val()));
    //
    <?php
            }//ຈົບ Loop ສາຂາວິຊາ
            ?>
    var faculty_std =
    0; //ຕັ້ງຕົວປ່ຽນລວມຈຳນວນນັກຮຽນຂອງແຕ່ລະຄະຂຶ້ນມາອີກຮອບເພື່ອນຳໄປກວດສອບຄ່າທີ່ປ້ອນເຂົ້າມາໃນ Loop ທຳອິດ
    var faculty_emp =
    0; //ຕັ້ງຕົວປ່ຽນລວມຈຳນວນພະນັກງານຂອງແຕ່ລະຄະຂຶ້ນມາອີກຮອບເພື່ອນຳໄປກວດສອບຄ່າທີ່ປ້ອນເຂົ້າມາໃນ Loop ທຳອິດ
    <?php
            $f_sql = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");//ດຶງຂໍ້ມູນຄະນະພາຍໃນວິທະຍາໄລດຽວ
            // Loop ຂໍ້ມູນແຕ່ລະຄະນະທີ່ຢູ່ໃນມະຫາໄລນັ້ນອອກມາທັງໝົດແລ້ວເອົາມາບວກລວມກັນ
            foreach($f_sql as $f_get){
            ?>
    faculty_std += parseInt($("#total_fac_std_<?php echo $f_get['fac_id'] ?>")
.val()); //ກວດສອບຄ່າອີກເທື່ອໜຶ່ງໃນການລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    faculty_emp += parseInt($("#total_fac_emp_<?php echo $f_get['fac_id'] ?>")
.val()); //ກວດສອບຄ່າອີກເທື່ອໜຶ່ງໃນການລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    <?php
             }
             //
             ?>
    // //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ       
    $("#total_col_unit_std_<?php echo $u_id ?>").val(faculty_std);
    //
    //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ພະນັກງານ
    $("#total_col_unit_emp_<?php echo $u_id ?>").val(faculty_emp);
    //
    <?php
        }//ຈົບ Loop ຄະນະ
        ?>
    //ລວມທັງໝົດມະຫາໄລ ໂດຍການເອົາລວມມະຫາໄລນັກຮຽນແນວນອນບວກກັບລວມມະຫາໄລພະນັກງານແນວນອນ
    $("#total_unit_<?php echo $u_id ?>").val(parseInt($("#total_col_unit_std_<?php echo $u_id ?>").val()) +
        parseInt($("#total_col_unit_emp_<?php echo $u_id ?>").val()));
    //  
    <?php
        
    }//ຈົບ Loop ມະຫາໄລ
    $unit_total = mysqli_query($conn,"select * from unitversity"); //ດຶງຂໍ້ມູນມະຫາໄລທັງໝົດອອກມາ
    ?>
    var total_unit = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຄ່າບວກຈຳນວນທັງໝົດຂອງແຕ່ລະມະຫາໄລ
    <?php
        foreach($unit_total as $unit_get){
    ?>
    total_unit += parseInt($("#total_unit_<?php echo $unit_get['unit_id'] ?>")
.val()); // ບວກຈຳນວນແຕ່ລະມະຫາໄລໄວ້ໃນຕົວປ່ຽນ   
    <?php 
        }
    ?>

    // ລວມທັງໝົດ ມະຫາໄລບວກມະຫາໄລ
    $("#amount").val(total_unit);
});



//
//ປຸ່ມປ້ອນຂໍ້ມູນ
$('.demandInput').keyup(function() {
    <?php
    // Loop ມະຫາໄລອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
    $u = mysqli_query($conn,"select *from unitversity");
    foreach($u as $un){
        $u_id = $un['unit_id'];
        $f = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");
        //Loop ຄະນະອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
        foreach($f as $fc){
            $f_id = $fc['fac_id'];
            $c = mysqli_query($conn,"select * from course where fac_id='$f_id'");
            // Loop ສາຂາວິຊາອອກມາໃຫ້ຄືນກັນກັບຕາຕະລາງຂ້າງເທິງ
            foreach($c as $cr){
                
                $c_id = $cr['course_id'];
                //ດຶງຂໍ້ມູນສາຂາວິຊາທີ່ຢູ່ມີເງື່ອນໄຂຢູ່ໃນຂະນະທີ່ ຄິກອອກເພື່ອເອົາມາບວກກັນ
                $c_sql = mysqli_query($conn,"select * from course where fac_id='$f_id'");
                //ດຶງຂໍ້ມູນສາຂາວິຊາທີ່ຢູ່ມີເງື່ອນໄຂຢູ່ໃນຂະນະທີ່ ຄິກອອກເພື່ອເອົາມາບວກກັນ
                $f_sql = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");

                    ?>
    // 1 LOOP qty std and emp
    var numStd = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງສາຂາທີ່ເປັນນັກຮຽນ
    var numEmp = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງສາຂາທີ່ເປັນພະນັກງານ
    var faculty_std = 0; //ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງຄະນະທີ່ເປັນນັກຮຽນ
    var faculty_emp = 0; //ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຈຳນວນລວມຂອງຄະນະທີ່ເປັນພະນັກງານ
    <?php 
                        // Loop Course
                        foreach($c_sql as $c_get){
                        ?>
    numStd += parseInt($("#std_<?php echo $c_get['course_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງສາຂາທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະ
    numEmp += parseInt($("#emp_<?php echo $c_get['course_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງສາຂາທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະ
    <?php
                        }
                        // loop faculty 
                        foreach($f_sql as $f_get){
                        ?>
    faculty_std += parseInt($("#total_fac_std_<?php echo $f_get['fac_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    faculty_emp += parseInt($("#total_fac_emp_<?php echo $f_get['fac_id'] ?>")
.val()); //ລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງຄະນະມະຫາໄລ
    <?php
                        }
                        ?>

    //ລວມຄະນະ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ
    $("#total_fac_std_<?php echo $f_id ?>").val(numStd);
    //


    //ລວມຄະນະ ແນວຕັ້ງ ຫຼື ຖັນ ພະນັກງານ
    $("#total_fac_emp_<?php echo $f_id ?>").val(numEmp);
    //



    //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ
    $("#total_col_unit_std_<?php echo $u_id ?>").val(faculty_std);
    //



    //ນັກຮຽນບວກກັບພະນັກງານແນວນອນ ຫຼື ແຖວຂອງ 1 ສາຂາ
    $("#total_course_<?php echo $c_id ?>").val(parseInt($("#std_<?php echo $c_id ?>").val()) + parseInt($(
        "#emp_<?php echo $c_id ?>").val()));
    //


    //ລວມທັງໝົດຂອງຄະນະ ໂດຍການເອົາລວມຄະນະນັກຮຽນແນວນອນບວກກັບລວມຄະນະພະນັກງານແນວນອນ
    $("#total_fac_<?php echo $f_id ?>").val(parseInt($("#total_fac_std_<?php echo $f_id ?>").val()) + parseInt(
        $("#total_fac_emp_<?php echo $f_id ?>").val()));
    //
    <?php
            }//ຈົບ Loop ສາຂາວິຊາ
            ?>
    var faculty_std =
    0; //ຕັ້ງຕົວປ່ຽນລວມຈຳນວນນັກຮຽນຂອງແຕ່ລະຄະຂຶ້ນມາອີກຮອບເພື່ອນຳໄປກວດສອບຄ່າທີ່ປ້ອນເຂົ້າມາໃນ Loop ທຳອິດ
    var faculty_emp =
    0; //ຕັ້ງຕົວປ່ຽນລວມຈຳນວນພະນັກງານຂອງແຕ່ລະຄະຂຶ້ນມາອີກຮອບເພື່ອນຳໄປກວດສອບຄ່າທີ່ປ້ອນເຂົ້າມາໃນ Loop ທຳອິດ
    <?php
            $f_sql = mysqli_query($conn,"select * from faculty where unit_id='$u_id'");//ດຶງຂໍ້ມູນຄະນະພາຍໃນວິທະຍາໄລດຽວ
            // Loop ຂໍ້ມູນແຕ່ລະຄະນະທີ່ຢູ່ໃນມະຫາໄລນັ້ນອອກມາທັງໝົດແລ້ວເອົາມາບວກລວມກັນ
            foreach($f_sql as $f_get){
            ?>
    faculty_std += parseInt($("#total_fac_std_<?php echo $f_get['fac_id'] ?>")
.val()); //ກວດສອບຄ່າອີກເທື່ອໜຶ່ງໃນການລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນນັກຮຽນແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    faculty_emp += parseInt($("#total_fac_emp_<?php echo $f_get['fac_id'] ?>")
.val()); //ກວດສອບຄ່າອີກເທື່ອໜຶ່ງໃນການລວມຈຳນວນທັງໝົດຂອງຄະນະທີ່ເປັນພະນັກງານແຕ່ລະສາຂາທີ່ເປັນແນວຕັ້ງເພື່ອເປັນຈຳນວນລວມຂອງມະຫາໄລ
    <?php
             }
             //
             ?>
    // //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ນັກຮຽນ       
    $("#total_col_unit_std_<?php echo $u_id ?>").val(faculty_std);
    //
    //ລວມມະຫາໄລ ແນວຕັ້ງ ຫຼື ຖັນ ພະນັກງານ
    $("#total_col_unit_emp_<?php echo $u_id ?>").val(faculty_emp);
    //
    <?php
        }//ຈົບ Loop ຄະນະ
        ?>
    //ລວມທັງໝົດມະຫາໄລ ໂດຍການເອົາລວມມະຫາໄລນັກຮຽນແນວນອນບວກກັບລວມມະຫາໄລພະນັກງານແນວນອນ
    $("#total_unit_<?php echo $u_id ?>").val(parseInt($("#total_col_unit_std_<?php echo $u_id ?>").val()) +
        parseInt($("#total_col_unit_emp_<?php echo $u_id ?>").val()));
    //  
    <?php
        
    }//ຈົບ Loop ມະຫາໄລ
    $unit_total = mysqli_query($conn,"select * from unitversity"); //ດຶງຂໍ້ມູນມະຫາໄລທັງໝົດອອກມາ
    ?>
    var total_unit = 0; // ຕັ້ງຕົວປ່ຽນເພື່ອຮັບຄ່າບວກຈຳນວນທັງໝົດຂອງແຕ່ລະມະຫາໄລ
    <?php
        foreach($unit_total as $unit_get){
    ?>
    total_unit += parseInt($("#total_unit_<?php echo $unit_get['unit_id'] ?>")
.val()); // ບວກຈຳນວນແຕ່ລະມະຫາໄລໄວ້ໃນຕົວປ່ຽນ   
    <?php 
        }
    ?>

    // ລວມທັງໝົດ ມະຫາໄລບວກມະຫາໄລ
    $("#amount").val(total_unit);
});

    // update edit-share
    $('.btnUpdate_demand').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        $('#id_update').val(data[0]);
        $('#student_update').val(data[4]);
        $('#employee_update').val(data[5]);   
    });

</script>



<?php
 include ("../../header-footer/footer.php");
?>