<?php
  $title = "ຂໍ້ມູນຜູ້ຂໍທຶນການສຶກສາ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header_admin.php");
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
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນການສຶກສາ </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span a ria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                              <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="hidden" name="Demand_ID" id="Demand_ID"
                                        placeholder="ລະຫັດຜູ້ຂໍທຶນ">
                                      <input type="text" name="Demand_Name" id="Demand_Name" placeholder="ຊື່ຜູ້ໃຊ້ລະບົບ" class="form-control">
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
                                      <label>ເຂົ້າໃຊ້ລະບົບ</label>
                                      <input type="text" name="Pass" id="Pass" placeholder="ລະຫັດເຂົ້າໃຊ້ລະບົບ" class="form-control">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຜູ້ໃຊ້</label>
                                      <select name="User_ID" id="User_ID">
                                        <option value="" disabled selected>ເລືອກຜູ້ໃຊ້</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຜູ້ຂໍທຶນ</label>
                                      <select name="P_M_ID" id="P_M_ID">
                                        <option value="" disabled selected>ເລືອກວິທະຍາໄລ</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
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
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນການສຶກສາ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                              <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="hidden" name="Demand_ID_update" id="Demand_ID_update"
                                        placeholder="ລະຫັດຜູ້ຂໍທຶນ">
                                      <input type="text" name="Demand_Name_update" id="Demand_Name_update" placeholder="ຊື່ຜູ້ໃຊ້ລະບົບ" class="form-control">
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
                                      <select name="User_ID_update" id="User_ID_update">
                                        <option value="" disabled selected>ເລືອກຜູ້ໃຊ້ </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຜູ້ຂໍທຶນ</label>
                                      <select name="P_M_ID_update" id="P_M_ID_update">
                                        <option value="" disabled selected> ເລືອກຜູ້ຂໍທຶນ</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
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
      <th>ລະຫັດຜູ້ຂໍທຶນ</th>
      <th>ຊື່ຜູ້ໃຊ້ລະບົບ</th>
      <th>ນາມສະກຸນ</th>
      <th>ເພດ</th>
      <th>ເບີໂທລະສັບ</th>
      <th>ອີເມວ</th>
      <th>ລະຫັດເຂົ້າໃຊ້ລະບົບ</th>
      <th>ຜູ້ໃຊ້</th>
      <th>ຜູ້ຂໍທຶນ</th>
      <th></th>
      </tr>
     <tr  class="result">
      <td>1</td>
      <td>ທ້າວ ສຸກສັນ</td>
      <td>ສະບາຍມະນີ</td>
      <td>ຊາຍ</td>
      <td>02099889999</td>
      <td>Samvang789@gmail.com</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>
        <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_userdemand"></a>&nbsp; &nbsp; 
        <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_userdemand"></a>
      </td>
     </tr>
     <td>2</td>
      <td>ທ້າວ ສຸກສັນ</td>
      <td>ສະບາຍມະນີ</td>
      <td>ຊາຍ</td>
      <td>02099889999</td>
      <td>Samvang789@gmail.com</td>
      <td>1</td>
      <td>2</td>
      <td>2</td>
      <td>
        <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_userdemand"></a>&nbsp; &nbsp; 
        <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_userdemand"></a>
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
  const Demand_Name = document.getElementById('Demand_Name');
  const Surname = document.getElementById('Surname');
  const Gender = document.getElementById('Gender');
  const Tel = document.getElementById('Tel');
  const Email = document.getElementById('Email');
  const Pass = document.getElementById('Pass');
  const User_ID = document.getElementById('User_ID');
  const P_M_ID = document.getElementById('P_M_ID');
  myform.addEventListener('submit', (e) => {
      e.preventDefault();
      checkInputs();
  });
  
  function checkInputs() {
      const Demand_NameValue = Demand_Name.value.trim();
      const SurnameValue = Surname.value.trim();
      const GenderValue = Gender.value.trim();
      const TelValue = Tel.value.trim();
      const EmailValue = Email.value.trim();
      const PassValue = Pass.value.trim();
      const User_IDValue = User_ID.value.trim();
      const P_M_IDValue = P_M_ID.value.trim();

  
      if (Demand_NameValue === '') {
          setErrorFor(Demand_Name, 'ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ລະບົບ');
      } else {
          setSuccessFor(Demand_Name);
      }

      if (SurnameValue === '') {
          setErrorFor(Surname, 'ກະລຸນາປ້ອນນາມສະກຸນ');
      } else {
          setSuccessFor(Surname);
      }

      if (GenderValue === '') {
          setErrorFor(Gender, 'ກະລຸນາປ້ອນເພດ');
      } else {
          setSuccessFor(Gender);
      }
      if (TelValue === '') {
          setErrorFor(Tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
      } else {
          setSuccessFor(Tel);
      }

      if (EmailValue === '') {
          setErrorFor(Email, 'ກະລຸນາປ້ອນອີເມວ');
      } else {
          setSuccessFor(Email);
      }

      if (PassValue === '') {
          setErrorFor(Pass, 'ກະລຸນາປ້ອນເຂົ້າໃຊ້ລະບົບ');
      } else {
          setSuccessFor(Pass);
      }
      if (User_IDValue === '') {
          setErrorFor(User_ID, 'ກະລຸນາເລືອກຜູ້ໃຊ້');
      } else {
          setSuccessFor(Pass);
      }
      if (P_M_IDValue === '') {
          setErrorFor(P_M_ID, 'ກະລຸນາເລືອກຜູ້ຂໍທຶນ');
      } else {
          setSuccessFor(P_M_ID);
      }
      if (Demand_NameValue !== '' && SurnameValue !=='' && GenderValue !=='' && TelValue !=='' && EmailValue !=='' && PasslValue !=='' && User_IDlValue !=='' && P_M_IDValue !=='') {
          document.getElementById("form1").action = "user_demand";
          document.getElementById("form1").submit();
      }
  }
  </script>
  
  <script type="text/javascript">
  const myformUpdate = document.getElementById('formUpdate');
  const Demand_Name_update = document.getElementById('Demand_Name_update');
  const Surname_update = document.getElementById('Surname_update');
  const Gender_update = document.getElementById('Gender_update');
  const Tel_update = document.getElementById('Tel_update');
  const Email_update = document.getElementById('Email_update');
  const Pass_update = document.getElementById('Pass_update');
  const User_ID_update = document.getElementById('User_ID_update');
  const P_M_ID_update = document.getElementById('P_M_ID_update');
  myformUpdate.addEventListener('submit', (e) => {
      e.preventDefault();
      checkInputsUpdate();
  });
  
  function checkInputsUpdate() {
    const Demand_Name_updateValue = Demand_Name_update.value.trim();
      const Surname_updateValue = Surname_update.value.trim();
      const Gender_updateValue = Gender_update.value.trim();
      const Tel_updateValue = Tel_update.value.trim();
      const Email_updateValue = Email_update.value.trim();
      const Pass_updateValue = Pass_update.value.trim();
      const User_ID_updateValue = User_ID_update.value.trim();
      const P_M_ID_updateValue = P_M_ID_update.value.trim();
      if (Demand_Name_updateValue === '') {
          setErrorFor(Demand_Name_update, 'ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ລະບົບ');
      } else {
          setSuccessFor(Demand_Name_update);
      }

      if (Surname_updateValue === '') {
          setErrorFor(Surname_update, 'ກະລຸນາປ້ອນນາມສະກຸນ');
      } else {
          setSuccessFor(Surname_update);
      }

      if (Gender_updateValue === '') {
          setErrorFor(Gender_update, 'ກະລຸນາປ້ອນເພດ');
      } else {
          setSuccessFor(Gender_update);
      }
      if (Tel_updateValue === '') {
          setErrorFor(Tel_update, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
      } else {
          setSuccessFor(Tel_update);
      }

      if (Email_updateValue === '') {
          setErrorFor(Email_update, 'ກະລຸນາປ້ອນອີເມວ');
      } else {
          setSuccessFor(Emai_update);
      }

      if (Pass_updateValue === '') {
          setErrorFor(Pass_update, 'ກະລຸນາປ້ອນເຂົ້າໃຊ້ລະບົບ');
      } else {
          setSuccessFor(Pass_update);
      }
      if (User_ID_updateValue === '') {
          setErrorFor(User_ID_update, 'ກະລຸນາເລືອກຜູ້ໃຊ້');
      } else {
          setSuccessFor(Pass_update);
      }
      if (P_M_ID_updateValue === '') {
          setErrorFor(P_M_ID_update, 'ກະລຸນາເລືອກຜູ້ຂໍທຶນ');
      } else {
          setSuccessFor(P_M_ID_update);
      }
      if (Demand_Name_updateValue !== '' && Surname_updateValue !=='' && Gender_updateValue !=='' && Tel_updateValue !=='' && Email_updateValue !=='' && Pass_updatelValue !=='' && User_ID_updatelValue !=='' && P_M_ID_updateValue !=='') {
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
  
  $('.btnDelete_userdemand').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
    });
    $('.btnUpdate_userdemand').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
    
        console.log(data);

        $('#Demand_ID_update').val(data[0]);
        $('#Demand_Name_update').val(data[1]);
        $('#Surname_update').val(data[2]);
        $('#Gender_update').val(data[3]);
        $('#Tel_update').val(data[4]);
        $('#Email_update').val(data[5]);
        $('#Pass_update').val(data[6]);
        $('#User_ID_update').val(data[7]);
        $('#P_M_ID_update').val(data[8]);

     
    });
  </script>
  
  
  
  
  <?php
   include ("../../header-footer/footer.php");
  ?>