<?php
  $title = "ອັບໂຫຼດຟາຍ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<?php

  if(isset($_POST['btnDelete'])){
    $obj->delete_category(trim($_POST['id']));
  }
  if(isset($_POST['cate_name'])){
    $obj->insert_category(trim($_POST['cate_name']));
  }
  if(isset($_POST['cate_name_update'])){
    $obj->update_category(trim($_POST['cate_id_update']),trim($_POST['cate_name_update']));
  }
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
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນອັບໂຫຼດເອກະສານ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span a ria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດປະເພດເອກະສານ</label>
                                    <input type="hidden" name="Up_ID" id="Up_ID" placeholder="ລະຫັດອັບໂຫຼດ">
                                    <input type="text" name="Doc_ID" id="Doc_ID" placeholder="ລະຫັດປະເພດເອກະສານ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສົກຮຽນປີ</label>
                                    <select name="Fy_ID" id="Fy_ID">
                                        <option value="">ເລືອກສົກຮຽນປີ</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລາຍລະອຽດເອກະສານ</label>
                                    <input type="text" name="Description" id="Description" placeholder="ລາຍລະອຽດເອກະສານ"
                                        class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບໜ້າປົກ</label>
                                    <input type="file" name="Cover" id="Cover" placeholder="ຮູບໜ້າປົກ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <img src="../../image/unnamed.jpg" id="output" width="100%" height="250">
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
<form action="category" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນປະເພດເອກະສານ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ລະຫັດປະເພດເອກະສານ</label>
                            <input type="hidden" name="Up_ID_update" id="Up_ID_update" placeholder="ລະຫັດອັບໂຫຼດ">
                            <input type="text" name="Doc_ID_update" id="Doc_ID_update" placeholder="ລະຫັດປະເພດເອກະສານ"
                                class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສົກຮຽນປີ</label>
                            <select name="Fy_ID_update" id="Fy_ID_update">
                                <option value="">ເລືອກສົກຮຽນປີ</option>
                                <option value="2020-2021">2020-2021</option>
                                <option value="2021-2022">2021-2022</option>
                            </select>
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ລາຍລະອຽດເອກະສານ</label>
                            <input type="text" name="Description_update" id="Description_update"
                                placeholder="ລາຍລະອຽດເອກະສານ" class="form-control">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຮູບໜ້າປົກ</label>
                            <input type="file" name="Cover_update" id="Cover_update" placeholder="ຮູບໜ້າປົກ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <img src="../../image/unnamed.jpg" id="output" width="100%" height="250">
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


<div class="clearfix"></div><br>
<div id="result">
    <div class="table-responsive">
        <table class="table font12" style="width: 1500px;">
            <tr>
                <th>ລະຫັດປະເພດເອກະສານ</th>
                <th>ສົກຮຽນປີ</th>
                <th>ລາຍລະອຽດເອກະສານ</th>
                <th>ຮູບໜ້າປົກ</th>
                <th>ວັນທີອັບໂຫຼດເອກະສານ</th>
                <th></th>
            </tr>

            <tr class="result">
                <td style="display:none">1</td>
                <td>1</td>
                <td>2020-2021</td>
                <td>ແຈ້ງການ</td>
                <td style="display:none;">../../image/unnamed.jpg</td>
                <td>

                    <a href="../../image/unnamed.jpg" target="_blank">
                        <img src="../../image/unnamed.jpg" class="img-circle elevation-2" alt="" width="25px">
                    </a>

                </td>
                <td>29/9/2020</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                        class="fa fa-pen toolcolor btnUpdate_upload"></a>&nbsp; &nbsp;
                    <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                        class="fa fa-trash toolcolor btnDelete_upload"></a>
                </td>
            </tr>

            <td>2</td>
            <td>2020-2021</td>
            <td>ແຈ້ງການ</td>
            <td style="display:none;">../../image/unnamed.jpg</td>
            <td>

                <a href="../../image/unnamed.jpg" target="_blank">
                    <img src="../../image/unnamed.jpg" class="img-circle elevation-2" alt="" width="25px">
                </a>

            </td>
            <td>29/9/2020</td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_upload"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_upload"></a>
            </td>
            </tr>
        </table>
    </div>
</div>


<form action="category" id="formDelete" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ຢືນຢັນການລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <input type="hidden" name="id" id="id">
                    ທ່ານຕ້ອງການລົບຂໍ້ມູນ ຫຼື ບໍ່ ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnDelete" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script type="text/javascript">
const myform = document.getElementById('form1');
const cate_name = document.getElementById('cate_name');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const cate_nameValue = cate_name.value.trim();

    if (cate_nameValue === '') {
        setErrorFor(cate_name, 'ກະລຸນາປ້ອນຊື່ປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(cate_name);
    }
    if (cate_nameValue !== '') {
        document.getElementById("form1").action = "category";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const cate_id_update = document.getElementById('cate_id_update');
const cate_name_update = document.getElementById('cate_name_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    const cate_name_updateValue = cate_name_update.value.trim();
    if (cate_name_updateValue === '') {
        setErrorFor(cate_name_update, 'ກະລຸນາປ້ອນລະຫັດປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(cate_name_update);
    }
    if (cate_name_updateValue !== '') {
        document.getElementById("formUpdate").action = "category";
        document.getElementById("formUpdate").submit();
    }
}
</script>

<!-- sweetalert -->
<?php
  // check if name exist
  if(isset($_GET['name'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ປະເພດສິນຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ອື່ນ !!", "info");
    </script>';
  }
  //check save
  if(isset($_GET['save'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['save2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  // check if name_update exist
  if(isset($_GET['name_update'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ປະເພດສິນຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ອື່ນ !!", "info");
    </script>';
  }
  //check update
  if(isset($_GET['update'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ແກ້ໄຂຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['update2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ແກ້ໄຂຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  // check if category_id exist in product
  if(isset($_GET['delete'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນຜູ້ສະໜອງນີ້ໄ້ດເນື່ອງຈາກລະຫັດຜູ້ສະໜອງນີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນສິນຄ້າ", "error");
    </script>';
  }
  // check delete
  if(isset($_GET['del'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
?>

<script>
$(document).ready(function() {

    load_data("%%", "0");

    function load_data(query, page) {
        $.ajax({
            url: "fetch_category.php",
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
    $('#search').keyup(function() {
        var page = "0";
        var search = $(this).val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
    $(document).on('click', '.page-links', function() {
        var page = this.id;
        console.log(page);
        var search = $('#search').val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
});
$('.btnDelete_upload').on('click', function() {
    $('#exampleModalDelete').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#id').val(data[0]);
});
$('.btnUpdate_upload').on('click', function() {
    $('#exampleModalUpdate').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#Up_ID_update').val(data[0]);
    $('#Doc_ID_update').val(data[1]);
    $('#Fy_ID_update').val(data[2]);
    $('#Description_update').val(data[3]);
    $('#Cover_update').val(data[4]);
    if(data[4] === ''){
            document.getElementById("output2").src = ('<?php echo $path ?>image/unnamed.jpg');
        }
        else{
            document.getElementById("output2").src = ('<?php echo $path ?>image/'+data[4]);
        }



});
</script>




<?php
 include ("../../header-footer/footer.php");
?>