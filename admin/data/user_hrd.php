<?php
  $title = "ຂໍ້ມູນຜູ້ໃຊ້ແບ່ງປັນທຶນການສຶກສາ ";
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
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນແບ່ງປັນທຶນການສຶກສາ  </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span a ria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                              <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="hidden" name="HRD_ID" id="HRD_ID"
                                        placeholder="ລະຫັດຜູ້ແບ່ງປັນທຶນ">
                                      <input type="text" name="HRD_Name" id="HRD_Name" placeholder="ຊື່ຜູ້ໃຊ້ລະບົບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="Surname" id="Surname" placeholder="ນາມສະກຸນ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເພດ</label>
                                      <input type="text" name="Gender" id="Gender" placeholder="ເພດ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="Tel" id="Tel" placeholder="ເບີໂທລະສັບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ອີເມວ</label>
                                      <input type="text" name="Email" id="Email" placeholder="ອີເມວ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດເຂົ້າໃຊ້ລະບົບ</label>
                                      <input type="text" name="Pass" id="Pass" placeholder="ລະຫັດເຂົ້າໃຊ້ລະບົບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຜູ້ໃຊ້</label>
                                      <select name="status" id="status">
                                        <option value="">--- ເລືອກຜູ້ໃຊ້ ---</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
                                    </select>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດວິທະຍາໄລ</label>
                                      <select name="status" id="status">
                                        <option value="">--- ເລືອກວິທະຍາໄລ ---</option>
                                        <option value="1">ກ</option>
                                        <option value="2">ຂ</option>
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
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນກົມການສຶກສາ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                               <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="hidden" name="HRD_ID_update" id="HRD_ID_update"
                                        placeholder="ລະຫັດຜູ້ແບ່ງປັນທຶນ">
                                      <input type="text" name="HRD_Name_update" id="HRD_Name_update" placeholder="ຊື່ຜູ້ໃຊ້ລະບົບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="Surname_update" id="Surname_update" placeholder="ນາມສະກຸນ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເພດ</label>
                                      <input type="text" name="Gender_update" id="Gender_update" placeholder="ເພດ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="Tel_update" id="Tel_update" placeholder="ເບີໂທລະສັບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ອີເມວ</label>
                                      <input type="text" name="Email_update" id="Email_update" placeholder="ອີເມວ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດເຂົ້າໃຊ້ລະບົບ</label>
                                      <input type="text" name="Pass_update" id="Pass_update" placeholder="ລະຫັດເຂົ້າໃຊ້ລະບົບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຜູ້ໃຊ້</label>
                                      <select name="status" id="status">
                                        <option value="">--- ເລືອກຜູ້ໃຊ້ ---</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
                                    </select>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ວິທະຍາໄລ</label>
                                      <select name="status" id="status">
                                        <option value="">--- ເລືອກວິທະຍາໄລ ---</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
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
  
  <div class="table-responsive">
  <table class="table font12" style="width: 1500px;">
      <tr>
      <th>ລະຫັດຜູ້ແບ່ງປັນທຶນ</th>
      <th>ຊື່ຜູ້ໃຊ້ລະບົບ</th>
      <th>ນາມສະກຸນ</th>
      <th>ເພດ</th>
      <th>ເບີໂທລະສັບ</th>
      <th>ອີເມວ</th>
      <th>ລະຫັດເຂົ້າໃຊ້ລະບົບ</th>
      <th>ຜູ້ໃຊ້</th>
      <th>ວິທະຍາໄລ</th>
      <th></th>
      </tr>
     <tr  class="result">
      <td>1</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>hfhhhf</td>
      <td>
        <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_cate"></a>&nbsp; &nbsp; 
        <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_cate"></a>
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
  
  </script>
  
  
  
  
  <?php
   include ("../../header-footer/footer.php");
  ?>