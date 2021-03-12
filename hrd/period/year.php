<?php
  $title = "ເປີດສົກຮຽນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");

?>

<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການ<?php echo $title?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="category" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalcategory">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalcategory" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສົກຮຽນປີ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span a ria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສົກຮຽນປີ</label>
                                    <input type="text" name="Fy_ID" id="Fy_ID" placeholder="ສົກຮຽນປີ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສະຖານະ</label>
                                    <select name="status" id="status">
                                        <option value="" disabled selected>ເລືອກສະຖານະ</option>
                                        <option value="ເປີດ">ເປີດ</option>
                                        <option value="ປິດ">ປິດ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຕິດຄັດເອກະສານ</label>
                                    <input type="file" name="Up_Date" id="file" placeholder="ຕິດຄັດເອກະສານ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <img src="../../image/camera.jpg" id="output" width="100%" height="250">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="Save" id="Save" class="btn btn-outline-primary"
                                onclick="">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




<div class="clearfix"><br></div>
<div class="table-responsive2">
    <table id="detail_table" class="table table-bordered" style="width: 1000px;">
        <tr>
            <th style="text-align: center;margin: 0 auto;">ລຳດັບ</th>
            <th style="text-align: center;margin: 0 auto;">ສົກຮຽນປີ</th>
            <th style="text-align: center;">ຕິດຄັດເອກະສານ</th>
            <th style="text-align: center;">ສະຖານະ</th>
            <th style="text-align: center;">ອັບໂຫລດ</th>
        </tr>
        <tr>
            <td style="text-align:center">1</td>
            <td style="text-align:center">2019-2020</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center">ເປີດ</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-upload toolcolor btnUpdate_year"></a></td>
        </tr>
        <tr>
            <td style="text-align:center">2</td>
            <td style="text-align:center">2018-2019</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center">ເປີດ</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-upload toolcolor btnUpdate_year"></a></td>
        </tr>
        <tr>
            <td style="text-align:center">3</td>
            <td style="text-align:center">2017-2018</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center">ປິດ</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-upload toolcolor btnUpdate_year"></a></td>
        </tr>
        <tr>
            <td style="text-align:center">4</td>
            <td style="text-align:center">2016-2017</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center">ປິດ</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-upload toolcolor btnUpdate_year"></a></td>
        </tr>
        <tr>
            <td style="text-align:center">5</td>
            <td style="text-align:center">2020-2021</td>
            <td style="text-align:center">MOE_ປະເພດ12gd73dfgs4.pdf</td>
            <td style="text-align:center">ປິດ</td>
            <td style="text-align:center"> <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-upload toolcolor btnUpdate_year"></a></td>
        </tr>
    </table>
</div>


<form action="year" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຕິດຄັດເອກະສານ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສະຖານະ</label>
                            <input type="hidden" name="id_update" id="id_update">
                            <select name="status_update" id="status_update">
                                <option value="" diasabled selected>ເລືອກສະຖານະ</option>
                                <option value="ເປີດ">ເປີດ</option>
                                <option value="ປິດ">ປິດ</option>
                            </select>
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຕິດຄັດເອກະສານ</label>
                            <input type="file" name="file_update" id="file_update" placeholder="ອັບໂຫລດ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <img src="../../image/unnamed.jpg" id="output2" width="100%" height="250">
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




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
$(document).on('click', '.btnUpdate_cust', function() {
    load_data('%%', '0');

    function load_data(query, page) {
        $.ajax({
            url: "fetch_step2.php",
            method: "POST",
            data: {
                query: query,
                page: page
            },
            success: function(data) {
                $('#result').html(data);
            }
        });
    }
});

$(document).ready(function() {
    $('tr.parent')
        .css("cursor", "pointer")
        .attr("title", "Click to expand/collapse")
        .click(function() {
            $(this).siblings('.child-' + this.id).toggle();
        });
    $('tr[@class^=child-]').hide().children('td');
});

$('.btnDelete_year').on('click', function() {
    $('#exampleModalDelete').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#id').val(data[0]);
});

$('.btnUpdate_year').on('click', function() {
    $('#exampleModalUpdate').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#status_update').val(data[3]);


// if(data[2] === ''){
//             document.getElementById("output2").src = ('<?php echo $path ?>image/camera.jpg');
// }
// else{
//             document.getElementById("output2").src = ('<?php echo $path ?>image/'+data[2]);
// }
    


});
</script>


<?php
 include ("../../header-footer/footer.php");
?>