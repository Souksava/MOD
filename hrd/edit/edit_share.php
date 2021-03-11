<?php
  $title = "ແກ້ໄຂການແບ່ງປັນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>

<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="dropdown">
        <select name="status" id="status" style="width:250px" class="form-control">
                <option value="" disabled selected>ເລືອກກົມ </option>
                <option value="1">ກົມການສຶກສາຊັ້ນສູງ - 2020-2021</option>
                <option value="2">ກົມສ້າງຄູ - 2020-2021</option>
                <option value="3">ກົມອາຊີວະສຶກສາ - 2020-2021</option>
                <option value="4">ກະຊວງທີ່ມີ - 2020-2021</option>
            </select>
        </div>
    </div>
    <!-- <button  class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-right: 50px;">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ເລືອກກົມ &nbsp
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">ກົມການສຶກສາຊັ້ນສູງ  - 2020-2021</a>
          <a class="dropdown-item" href="#">ກົມສ້າງຄູ  - 2020-2021</a>
          <a class="dropdown-item" href="#">ກົມອາຊີວະສຶກສາ  - 2020-2021</a>
          <a class="dropdown-item" href="#">ກະຊວງທີ່ມີ   - 2020-2021</a>
        </div> -->

</div>



<br>
<div class="table-responsive table-edit">
    <table id="detail_table" class="table-bordered" style="width: 3000px;">
        <tr>
            <th rowspan="2" style="text-align: center!important;margin: 0 auto;">ລຳດັບ</th>
            <th rowspan="2" style="text-align: center;">ສາຂາວິຊາຮຽນ</th>
            <th rowspan="2" style="text-align: center;">ແຜນຮັບນັກ​ຮຽນ</th>
            <th rowspan="2" style="text-align: center;">ລວມ</th>
            <th colspan="8" style="text-align: center; position:st">ແບ່ງປັນ</th>
            <th colspan="7" style="text-align: center;">ຈ່າຍຄ່າຮຽນ</th>
        </tr>
        <tr style="text-align: center;">
            <th>ແຂວງ</th>
            <th>ມະຫາໄລ</th>
            <th>ພະນັກງານ</th>
            <th>ສອບເສັງ</th>
            <th>ນ/ຮ ພິການ</th>
            <th>ນ/ຮ 2 ພາສາ</th>
            <th>ສສກ ແບ່ງ</th>
            <th>ສຳພາດ</th>
            <th>ນ/ຮ</th>
            <th>ພ/ງ</th>
            <th>ສອບເສັງ</th>
            <th>ນ/ຮ ຕໍ່ເນື່ອງ</th>
            <th>ຫ້ອງ ລາວ-ຝລັ່ງ</th>
            <th>ຕ່າງປະເທດ</th>
            <th>ພ/ງ ເອກະຊົນ</th>
        </tr>

        <tr style="background-color:#5199FA;color:white;">
            <td colspan="2" style="text-align:center;">ມະຫາວິທະຍາໄລແຫ່ງຊາດ</td>
            <td style="text-align:center">
                100
            </td>
            <?php for ($x = 0; $x <= 15; $x++) {
            echo '           <td style="text-align:center">
                              10
                              </td>
              ';
            } ?>
        </tr>
        <tr class="parent" id="row1" title="Click to expand/collapse"
            style="cursor: pointer;background-color:#B1CDF3;color:white;">
            <td>
                1
            </td>
            <td>ຄະນະສຶກສາສາດ</td>
            <td style="text-align:center">
                30
            </td>
            <?php for ($x = 0; $x <= 15; $x++) {
            echo '           <td style="text-align:center">
                              15
                              </td>
              ';
            } ?>
        </tr>

        <!-- parent-end -->
        <tr class="child-row1 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">1</td>
            <td style="padding-left:50px;">ຄູຈິດຕະສຶກສາສາດ</td>
            <td style="text-align:center">
                10
            </td>
            <td style="text-align:center">
                300
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
              echo'  <td style="text-align:center">
20
                        </td>';
            } ?>
        </tr>
        <tr class="child-row1 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">2</td>
            <td style="padding-left:50px;">ບໍລິຫານການສຶກສາ</td>
            <td style="text-align:center">
                10
            </td>
            <td style="text-align:center">
                0
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
25
                        </td>';
            } ?>
        </tr>
        <tr class="child-row1 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">3</td>
            <td style="padding-left:50px;">ຄູຄະນິດສາດ</td>
            <td style="text-align:center">
                10
            </td>
            <td style="text-align:center">
                0
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
30
                        </td>';
            } ?>
        </tr>


        <tr class="parent" id="row2" title="Click to expand/collapse"
            style="cursor: pointer;background-color:#B1CDF3;color:white;">
            <td>
                2
            </td>
            <td>ຄະນະອັກສອນສາດ</td>
            <td style="text-align:center">
                40
            </td>
            <td style="text-align:center">
                40
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '           <td style="text-align:center">
23
                              </td>
              ';
            } ?>
        </tr>

        <tr class="child-row2 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">4</td>
            <td style="padding-left:50px;">ພາສາລາວ-ວັນນະຄະດີ</td>
            <td style="text-align:center">
                15
            </td>
            <td style="text-align:center">
                12
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
30
                        </td>';
            } ?>
        </tr>

        <tr class="child-row2 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">5</td>
            <td style="padding-left:50px;">ພາສາຝຣັ່ງ</td>
            <td style="text-align:center">
                15
            </td>
            <td style="text-align:center">
                15
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
35
                        </td>';
            } ?>
        </tr>

        <tr class="child-row2 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">6</td>
            <td style="padding-left:50px;">ພາສາອັງກິດ</td>
            <td style="text-align:center">
                10
            </td>
            <td style="text-align:center">
                14
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
35
                        </td>';
            } ?>
        </tr>

        <tr class="parent" id="row3" title="Click to expand/collapse"
            style="cursor: pointer;background-color:#B1CDF3;color:white;">
            <td>
                3
            </td>
            <td>ຄະນະວິທະຍາສາດສັງຄົມ</td>
            <td style="text-align:center">
                30
            </td>
            <td style="text-align:center">
                40
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '           <td style="text-align:center">
40
                              </td>
              ';
            } ?>

        </tr>

        <tr class="child-row3 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">7</td>
            <td style="padding-left:50px;">ປະຫວັດສາດ ແລະ ມະນຸດວິທະຍາ</td>
            <td style="text-align:center">
                23
            </td>
            <td style="text-align:center">
                12
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
45
                        </td>';
            } ?>
        </tr>

        <tr class="child-row3 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">8</td>
            <td style="padding-left:50px;">ສັງຄົມສົງເຄາະ</td>
            <td style="text-align:center">
                12
            </td>
            <td style="text-align:center">
                43
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
50
                        </td>';
            } ?>
        </tr>

        <tr class="child-row3 btnUpdate_share" style="display: table-row;">
            <td></td>
            <td style="display:none">9</td>
            <td style="padding-left:50px;">ການເມືອງ ແລະ ບໍລິຫານລັດຖະກິດ</td>
            <td style="text-align:center">
                12
            </td>
            <td style="text-align:center">
                41
            </td>
            <?php for ($x = 0; $x <= 14; $x++) {
            echo '         <td style="text-align:center">
55
                        </td>';
            } ?>
        </tr>
    </table>
</div>
<!-- endtable -->






<!-- modal update -->
<form action="edit-share" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂການແບ່ງປັນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="card" style="width: 32rem;">
                        <div class="card-body">
                        <h5 class="card-title">ແບ່ງປັນ</h5><br>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ແຂວງ</label>
                            <input type="hidden" name="id_update" id="id_update" placeholder="ລະຫັດປະເພດສິນຄ້າ">
                            <input type="text" name="province_id_update" id="province_update"
                                placeholder="ລະຫັດກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ມະຫາໄລ</label>
                            <input type="text" name="university_update" id="university_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ພະນັກງານ</label>
                            <input type="text" name="university_update" id="employee_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສອບເສັງ</label>
                            <input type="text" name="university_update" id="test_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ນ/ຮ ພິການ</label>
                            <input type="text" name="university_update" id="handicap_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ນ/ຮ 2 ພາສາ</label>
                            <input type="text" name="university_update" id="bilingual_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສສກ ແບ່ງ</label>
                            <input type="text" name="university_update" id="ssk_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສຳພາດ</label>
                            <input type="text" name="university_update" id="interview_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        </div>
                        </div>
                        <!-- end card -->
                        <div class="card" style="width: 32rem;">
                        <div class="card-body">
                        <h5 class="card-title">ຈ່າຍຄ່າຮຽນ</h5><br>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ນ/ຮ</label>
                            <input type="text" name="university_update" id="student_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ພ/ງ</label>
                            <input type="text" name="university_update" id="gov_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສອບເສັງ</label>
                            <input type="text" name="university_update" id="exam_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ນ/ຮ ຕໍ່ເນື່ອງ</label>
                            <input type="text" name="university_update" id="con_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຫ້ອງ ລາວ-ຝລັ່ງ</label>
                            <input type="text" name="university_update" id="language_update"
                                placeholder="ຊື່ກົມການສຶກສາ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຕ່າງປະເທດ</label>
                            <input type="text" name="university_update" id="foreign_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ພ/ງ ເອກະຊົນ</label>
                            <input type="text" name="university_update" id="private_update" placeholder="ຊື່ກົມການສຶກສາ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small class="">Error message</small>
                        </div>
                        </div>
                        </div>
                        <!-- end card -->
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

<script type="text/javascript">
$(document).ready(function() {
    $('tr.parent')
        .css("cursor", "pointer")
        .attr("title", "Click to expand/collapse")
        .click(function() {
            $(this).siblings('.child-' + this.id).toggle();
        });
    $('tr[@class^=child-]').hide().children('td');
});


$('.plus').on('click', function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
});
$('.minus').on('click', function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
});

$("#num1").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})
$("#num2").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})

$("#num3").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})
$("#num4").change(function() {
    $("#total1").val(parseInt($("#num1").val()) + parseInt($('#num2').val()) + parseInt($("#num3").val()) +
        parseInt($('#num4').val()));
    $("#total3").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})

$("#num5").change(function() {
    $("#total4").val(parseInt($("#num3").val()) + parseInt($('#num4').val()));
    $("#total5").val(parseInt($("#total1").val()) + parseInt($('#total2').val()));
    $("#totalall").val(parseInt($("#total1").val()));
})



// update edit-share
$('.btnUpdate_share').on('click', function() {
    $('#exampleModalUpdate').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);
    $('#id_update').val(data[1]);
    $('#province_update').val(data[5]);
    $('#university_update').val(data[6]);
    $('#employee_update').val(data[7]);
    $('#test_update').val(data[8]);
    $('#handicap_update').val(data[9]);
    $('#bilingual_update').val(data[10]);
    $('#ssk_update').val(data[11]);
    $('#interview_update').val(data[12]);
    $('#student_update').val(data[13]);
    $('#gov_update').val(data[14]);
    $('#exam_update').val(data[15]);
    $('#con_update').val(data[16]);
    $('#language_update').val(data[17]);
    $('#foreign_update').val(data[18]);
    $('#private_update').val(data[19]);
});
</script>



<?php
 include ("../../header-footer/footer.php");
?>