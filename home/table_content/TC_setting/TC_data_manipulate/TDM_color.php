<?php include("TC_data_manipulate/data_checked.php"); ?>

<!-- Update Side Nav -->
<form hidden id="mySideEditNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input class="input_anyForm" type="number" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="ral_number_edit">RAL Number: </label>
    <input class="input_anyForm" type="text" name="ral_number_edit" value=""><br>

    <label class="label_anyForm" for="color_name_edit">Color Name: </label>
    <input class="input_anyForm" type="text" name="color_name_edit" value=""><br>

    <label class="label_anyForm" for="spc_edit">SPC: </label>
    <input class="input_anyForm" type="text" name="spc_edit" value=""><br>

    <label class="label_anyForm" for="rgb_hex_edit">RGB HEX: </label>
    <input class="input_anyForm" type="text" name="rgb_hex_edit" value=""><br>

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Update">
  </div>

</form>

<!-- Add Side Nav -->
<form hidden id="mySideAddNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideAddNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">New ID: </label>
    <input readonly class="input_anyForm" type="number" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="ral_number_edit">RAL Number: </label>
    <input class="input_anyForm" type="text" name="ral_number_edit" value=""><br>

    <label class="label_anyForm" for="color_name_edit">Color Name: </label>
    <input class="input_anyForm" type="text" name="color_name_edit" value=""><br>

    <label class="label_anyForm" for="spc_edit">SPC: </label>
    <input class="input_anyForm" type="text" name="spc_edit" value=""><br>

    <label class="label_anyForm" for="rgb_hex_edit">RGB HEX: </label>
    <input class="input_anyForm" type="text" name="rgb_hex_edit" value=""><br>

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Add">
  </div>

</form>

<!-- Delete Side Nav -->
<form hidden id="mySideDeleteNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideDeleteNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Selected ID: </label>
    <input class="input_anyForm" type="number" name="ID_checked" value=""><br>

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Delete">
  </div>

</form>
