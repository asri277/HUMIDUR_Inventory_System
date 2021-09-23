<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_client" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_client','table_client')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input id="ID_checked_client" class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="client_company_name_manipulate">Company Name: </label>
    <input disabled class="input_anyForm iafClient" type="text" name="client_company_name_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="client">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_client" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_client','ID_checked_client','iafClient','btnLoadOnly_client')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafClient','btnLoadOnly_client')" type="reset" name="reset" value="Reset" >
  </div>

</form>
