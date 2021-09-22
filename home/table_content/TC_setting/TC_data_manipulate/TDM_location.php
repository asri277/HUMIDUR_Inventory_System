<?php //include("TC_data_manipulate/data_checked.php"); ?>

<!-- Update Side Nav -->
<form hidden id="mySideEditNav_location" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_location','table_location')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input id="ID_checked_location" class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="location_name_manipulate">Location Name: </label>
    <input disabled class="input_anyForm iafLocation" type="text" name="location_name_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="location">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_location" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_location','ID_checked_location','iafLocation','btnLoadOnly_location')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafLocation','btnLoadOnly_location')" type="reset" name="reset" value="Reset" >
  </div>

</form>
