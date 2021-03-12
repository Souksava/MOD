<?php
  $title = "ຈັດການຂໍ້ມູນຄະນະ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header_supply.php");
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
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຄະນະ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span a ria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ຄະນະ</label>
                                    <input type="hidden" name="Fac_ID" id="Fac_ID"
                                        placeholder="ລະຫັດຄະນະ">
                                    <input type="text" name="Fac_Name" id="Fac_Name" placeholder="ຊື່ຄະນະ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ວິທະຍາໄລ</label>
                                    <select name="Uni_ID" id="Uni_ID">
                                        <option value="" disabled selected>ເລືອກວິທະຍາໄລບ</option>
                                        <option value="ກ">ກ</option>
                                        <option value="ຂ">ຂ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
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

        <form action="category" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຄະນະ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ຄະນະ</label>
                                    <input type="hidden" name="Fac_ID_update" id="Fac_ID_update"
                                        placeholder="ລະຫັດຄະນະ">
                                    <input type="text" name="Fac_Name_update" id="Fac_Name_update" placeholder="ຊື່ຄະນະ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ວິທະຍາໄລ</label>
                                    <select name="Uni_ID_update" id="Uni_ID_update">
                                        <option value="" disabled selected>ເລືອກວິທະຍາໄລບ</option>
                                        <option value="ກ">ກ</option>
                                        <option value="ຂ">ຂ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success"
                                onclick="">ແກ້ໄຂ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div><br>
<div id="result">
<table class="table font12" style="width: 1000px;">
    <tr>
    <th>ລະຫັດຄະນະ</th>
    <th>ຊື່ຄະນະ</th>
    <th>ວິທະຍາໄລ</th>
    <th></th>
    <th></th>
    </tr>
   <tr  class="result">
    <td>1</td>
    <td>ອຸດສາຫະກຳ</td>
    <td>ກ</td>
    <td></td>
    <td>
      <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_faculty"></a>&nbsp; &nbsp; 
      <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_faculty"></a>
    </td>
   </tr>
   <td>2</td>
    <td>ກະສີກຳ</td>
    <td>ກ</td>
    <td></td>
    <td>
      <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_faculty"></a>&nbsp; &nbsp; 
      <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_faculty"></a>
    </td>
   </tr>
   </table>
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
const Fac_Name = document.getElementById('Fac_Name');
const Uni_ID = document.getElementById('Uni_ID');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    Fac_NameValue = Fac_Name.value.trim();
    Uni_IDValue = Uni_ID.value.trim();

    if (Fac_NameValue === '') {
        setErrorFor(Fac_Name, 'ກະລຸນາປ້ອນຊື່ຄະນະ');
    } else {
        setSuccessFor(Fac_Name);
    }

    if (Uni_IDValue === '') {
        setErrorFor(Uni_ID, 'ກະລຸນາປ້ອນວິທະຍາໄລ');
    } else {
        setSuccessFor(Uni_ID);
    }
    if (Fac_NameValue !== '' && Uni_IDValue !== '' ) {
        document.getElementById("form1").action = "faculty";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const Fac_Name_update = document.getElementById('Fac_Name_update');
const Uni_ID_update = document.getElementById('Uni_ID_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    Fac_Name_updateValue = Fac_Name_update.value.trim();
    Uni_ID_updateValue = Uni_ID_update.value.trim();
    if (Fac_Name_updateValue === '') {
        setErrorFor(Fac_Name_update, 'ກະລຸນາປ້ອນຊື່ຄະນະ');
    } else {
        setSuccessFor(Fac_Name_update);
    }

    if (Uni_ID_updateValue === '') {
        setErrorFor(Uni_ID_update, 'ກະລຸນາປ້ອນວິທະຍາໄລ');
    } else {
        setSuccessFor(Uni_ID_update);
    }
    if (Fac_Name_updateValue !== '' && Uni_ID_updateValue !== '') {
        document.getElementById("formUpdate").action = "faculty";
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
$(document).ready(function(){

  load_data("%%","0");

  function load_data(query,page)
  {
    $.ajax({
      url:"fetch_category.php",
      method:"POST",
      data:{query:query,page:page},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  $('#search').keyup(function(){
    var page = "0";
    var search = $(this).val();
    if(search != '')
    {
    load_data(search,page);
    }
    else
    {
      load_data('%%',page);
    }
  });
  $(document).on('click', '.page-links', function(){    
    var page = this.id;
    console.log(page);
    var search = $('#search').val();
    if(search != '')
    {
      load_data(search,page);
    }
    else
    {
      load_data('%%',page);
    }
  });
});

$('.btnDelete_faculty').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
    });
    $('.btnUpdate_faculty').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
    
        console.log(data);

        $('#Fac_ID_update').val(data[0]);
        $('#Fac_Name_update').val(data[1]);
        $('#Uni_ID_update').val(data[2]);
     
    });
</script>



<?php
 include ("../../header-footer/footer.php");
?>