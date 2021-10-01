<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_packaging_size" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_packaging_size','table_packaging_size')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">Select ID: </label>
    <input id="id_checked_packaging_size" class="input_anyForm" type="number" min="1" name="id_checked" value="1"><br>

    <label class="label_anyForm" for="product_name_manipulate">Product Name: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="product_name_manipulate" value=""><br>

    <label class="label_anyForm" for="size_manipulate">Size: </label>
    <input readonly disabled class="input_anyForm iafPackagingSize" type="number" step=".01" name="size_manipulate" value=""><br>

    <label class="label_anyForm" for="componentA_manipulate">Component A: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="number" step=".01" name="componentA_manipulate" value=""><br>

    <label class="label_anyForm" for="componentB_manipulate">Component B: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="number" step=".01" name="componentB_manipulate" value=""><br>

    <label class="label_anyForm" for="remarks_manipulate">Remarks: </label>
    <input disabled class="input_anyForm iafPackagingSize" type="text" name="remarks_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="packaging_size">
    <input hidden type="text" name="manipulate_command" value="update">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_packaging_size" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_packaging_size','id_checked_packaging_size','iafPackagingSize','btnLoadOnly_packaging_size')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafPackagingSize','btnLoadOnly_packaging_size','id_checked_packaging_size')" type="reset" name="reset" value="Reset" >
  </div>

</form>

<!-- Add Side Nav -->
<form hidden action="TC_data_manipulate/data_checked.php" id="mySideAddNav_packaging_size" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideAddNav_packaging_size','table_packaging_size')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">New ID: </label>
    <input readonly style="background-color: #F3F3F3;" class="input_anyForm" type="number" min="1" name="id_checked" value="<?php echo $packagingSizeTotalCount + 1 ?>"><br>

    <label class="label_anyForm" for="product_name_manipulate">Product Name: </label>
    <input class="input_anyForm" type="text" name="product_name_manipulate" value=""><br>

    <label class="label_anyForm" for="size_manipulate">Size: </label>
    <input readonly class="input_anyForm" type="text" name="size_manipulate" placeholder="Auto Calculated" value=""><br>

    <label class="label_anyForm" for="componentA_manipulate">Component A: </label>
    <input class="input_anyForm" type="text" name="componentA_manipulate" value=""><br>

    <label class="label_anyForm" for="componentB_manipulate">Component B: </label>
    <input class="input_anyForm" type="text" name="componentB_manipulate" value=""><br>

    <label class="label_anyForm" for="remarks_manipulate">Remarks: </label>
    <input class="input_anyForm" type="text" name="remarks_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="packaging_size">
    <input hidden type="text" name="manipulate_command" value="add">

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Add">
  </div>

</form>

<!-- Delete Side Nav -->
<form hidden action="TC_data_manipulate/data_checked.php" id="mySideDeleteNav_packaging_size" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideDeleteNav_packaging_size','table_packaging_size')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">Selected ID: </label>
    <input class="input_anyForm" type="number" min="1" name="id_checked" value=""><br>

    <input hidden type="text" name="table_manipulate" value="packaging_size">
    <input hidden type="text" name="manipulate_command" value="delete">

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Delete">
  </div>

</form>
