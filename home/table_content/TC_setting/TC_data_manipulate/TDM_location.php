<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_location" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_location','table_location')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">Select ID: </label>
    <input id="id_checked_location" class="input_anyForm" type="number" min="1" name="id_checked" value="1"><br>

    <label class="label_anyForm" for="location_name_manipulate">Location Name: </label>
    <input disabled class="input_anyForm iafLocation" type="text" name="location_name_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="location">
    <input hidden type="text" name="manipulate_command" value="update">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_location" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_location','id_checked_location','iafLocation','btnLoadOnly_location')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafLocation','btnLoadOnly_location','id_checked_location')" type="reset" name="reset" value="Reset" >
  </div>

</form>

<!-- Add Side Nav -->
<form hidden action="TC_data_manipulate/data_checked.php" id="mySideAddNav_location" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideAddNav_location','table_location')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">New ID: </label>
    <input readonly style="background-color: #F3F3F3;" class="input_anyForm" type="number" min="1" name="id_checked" value="<?php echo $locationTotalCount + 1 ?>"><br>

    <label class="label_anyForm" for="location_name_manipulate">Location Name: </label>
    <input class="input_anyForm" type="text" name="location_name_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="location">
    <input hidden type="text" name="manipulate_command" value="add">

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Add">
  </div>

</form>

<!-- Delete Side Nav -->
<form hidden action="TC_data_manipulate/data_checked.php" id="mySideDeleteNav_location" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideDeleteNav_location','table_location')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="id_checked">Selected ID: </label>
    <input class="input_anyForm" type="number" min="1" name="id_checked" value=""><br>

    <input hidden type="text" name="table_manipulate" value="location">
    <input hidden type="text" name="manipulate_command" value="delete">

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Delete">
  </div>

</form>
