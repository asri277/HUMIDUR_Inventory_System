<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_supplier" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_supplier','table_supplier')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">Select ID: </label>
    <input id="id_checked_supplier" class="input_anyForm" type="number" min="1" name="id_checked" value="1"><br>

    <label class="label_anyForm" for="supplier_company_name_manipulate">RAL Number: </label>
    <input disabled class="input_anyForm iafSupplier" type="text" name="supplier_company_name_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="supplier">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_supplier" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_supplier','id_checked_supplier','iafSupplier','btnLoadOnly_supplier')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafSupplier','btnLoadOnly_supplier','id_checked_supplier')" type="reset" name="reset" value="Reset" >
  </div>

</form>
