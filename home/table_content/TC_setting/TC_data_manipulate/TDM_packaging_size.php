<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_packaging_size" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_packaging_size','table_packaging_size')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input id="ID_checked_packaging_size" class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>

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

    <input disabled class="btnSubmit_anyForm btnLoadOnly_packaging_size" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_packaging_size','ID_checked_packaging_size','iafPackagingSize','btnLoadOnly_packaging_size')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafPackagingSize','btnLoadOnly_packaging_size')" type="reset" name="reset" value="Reset" >
  </div>

</form>
