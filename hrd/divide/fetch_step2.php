<div class="row">
  <div class="col-md-12">
    <h4>ລວມ: <label style="color:red;">100</label>&nbsp&nbsp<span
    class="fa fa-user"></span> &nbsp&nbsp
            ສາຂາ: ຄູຈິດຕະສຶກສາສາດ &nbsp&nbsp
            ຄະນະສຶກສາສາດ &nbsp&nbsp
            ມະຫາວິທະຍາໄລແຫ່ງຊາດ</h4>
  </div>
  <div class="col-md-6">
    <h4>ຈຳນວນທີແຈກຢາຍທັງໝົດ: <label style="color:red;">100</label>&nbsp&nbsp<span
    class="fa fa-user"></span></h4>
  </div>
  <div class="col-md-6" style="text-align:right;">
    <button type="button" class="btn btn-sm btn-primary"><span class="fa fa-paper-plane"> &nbsp&nbsp
    </span>ແຈກຢາຍທຶນການສຶກສາ</button>
  </div>
</div>
<div class="table-responsive2">
<table id="detail_table" class="table-bordered" style="width: 1400px;">
        <tr>
            <th rowspan="2" style="text-align: center;margin: 0 auto; width: 70px;">ລຳດັບ</th>
            <th rowspan="2" style="text-align: center;width: 450px;">ຜູ້ສະເໜີສ້າງ</th>
            <th rowspan="2" style="text-align: center;width: 120px;">ແຜນສະເໜີສ້າງ</th>
            <th colspan="2" style="text-align: center;width: 250px;" >ອະນຸມັດ</th>
            <th rowspan="2" style="text-align: center;width: 150px;">ລວມ</th>
        </tr>
        <tr style="text-align: center;">
          <th>ນ/ຮ</th>
          <th>ພ/ງ</th>
        </tr>
<tr style="text-align:center">
  <td style="text-align:center">1</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ນະຄອນຫຼວງ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>

<tr>
    <td style="text-align:center">2</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ຜົ້ງສາລີ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">3</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ຫຼວງນ້ຳທາ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">4</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ອຸດົມໄຊ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">5</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ບໍ່ແກ້ວ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">6</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ຫຼວງພະບາງ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">7</td>
    <td style="text-align: center;font-size:20px;">ແຂວງ ຫົວພັນ</td>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
    <?php for ($x = 0; $x <= 1; $x++) {
        echo'
        <td style="text-align:center">
                      <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                          <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                              class="minus"></button>
                          <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                              style="font-weight:bold!important;">
                          <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                              class="plus"></button>
                      </div>
                  </td>
        ';
      } ?>
      <td style="text-align:center">
    <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                  </td>
</tr>
<tr>
  <td style="text-align:center">8</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ໄຊຍະບູລີ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">9</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ຊຽງຂວາງ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">10</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ວຽງຈັນ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">11</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ໄຊສົມບຸນ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">12</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ບໍລິຄຳໄຊ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">13</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ຄຳມ່ວນ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">14</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ສະຫວັນນະເຂດ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">15</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ສາລະວັນ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">16</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ເຊກອງ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">17</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ຈຳປະສັກ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">18</td>
  <td style="text-align: center;font-size:20px;">ແຂວງ ອັດຕະປື</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">19</td>
  <td style="text-align: center;font-size:20px;">ກະຊວງ ຊາວໜຸ່ມ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">19</td>
  <td style="text-align: center;font-size:20px;">ກະຊວງ ສຶກສາ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">20</td>
  <td style="text-align: center;font-size:20px;">ກະຊວງ ອື່ນ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>
<tr>
  <td style="text-align:center">21</td>
  <td style="text-align: center;font-size:20px;">ກະຊວງ ປ້ອງກັນປະເທດ</td>
  <td style="text-align:center">
<input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
              </td>
  <?php for ($x = 0; $x <= 1; $x++) {
      echo'
      <td style="text-align:center">
                    <div class="def-number-input number-input safari_only" style="margin:0 auto;">
                        <button  onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepDown()"
                            class="minus"></button>
                        <input class="quantity" min="0" name="num1" id="num1" value="0" type="number"
                            style="font-weight:bold!important;">
                        <button onclick="this.parentNode.querySelector(';echo"'input[type=number]'";echo').stepUp()"
                            class="plus"></button>
                    </div>
                </td>
      ';
    } ?>
    <td style="text-align:center">
  <input class="quantity" min="0" name="num1" id="num1" value="0" type="number" style="border:none;width:60px;text-align:center;font-weight: bold;" disabled>
                </td>
</tr>

</table>
</div>
