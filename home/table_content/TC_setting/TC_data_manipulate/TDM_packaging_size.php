<?php include("TC_data_manipulate/data_checked.php"); ?>

<!-- Update Side Nav -->
<form hidden id="mySideEditNav_packaging_size" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_packaging_size','table_packaging_size')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input id="ID_checked_packaging_size" class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="ral_number_manipulate">Product Name: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="ral_number_manipulate" value=""><br>

    <label class="label_anyForm" for="color_name_manipulate">Size: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="color_name_manipulate" value=""><br>

    <label class="label_anyForm" for="spc_manipulate">Component A: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="spc_manipulate" value=""><br>

    <label class="label_anyForm" for="rgb_hex_manipulate">Component B: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="rgb_hex_manipulate" value=""><br>

    <label class="label_anyForm" for="rgb_hex_manipulate">Remarks: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="rgb_hex_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="packaging_size">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_packaging_size" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_packaging_size','ID_checked_packaging_size','iafPackagingSize','btnLoadOnly_packaging_size')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafPackagingSize','btnLoadOnly_packaging_size')" type="reset" name="reset" value="Reset" >
  </div>

</form>
