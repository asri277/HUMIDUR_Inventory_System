<script src="../table_responsive.js" type="text/javascript"></script>

<?php
  include("../../../../login/connection.php");

  if(!empty($_POST['id_checked']) && isset($_POST['id_checked'])){

    $table = trim($_POST['table_manipulate']);
    $id = trim($_POST['id_checked']);
    $command = trim($_POST['manipulate_command']);

    // $query = "SELECT * FROM $table WHERE id = $id ";
    $query = "SELECT * FROM $table";
    $result = mysqli_query($con, $query);

    if (!$result) {
      echo 'Could not run query: ' . mysqli_error();
      exit;
    }

    if (mysqli_num_rows($result) > 0){

      switch($table){
        case "color":
          if ($command == "update") {
            insertNewDataColor();
            $editQuery = "UPDATE `$table` SET `ral_no` = '$newRalNum', `color_name` = '$newColorName',
                         `spc` = '$newSPC', `rgb_code` = '$newRGB'
                         WHERE `$table`.`id` = $id";
          }elseif ($command == "add") {
            insertNewDataColor();
            $editQuery = "INSERT INTO `$table` (`id`, `ral_no`, `color_name`, `spc`, `rgb_code`)
                          VALUES ('$id', '$newRalNum', '$newColorName', '$newSPC', '$newRGB')";
          }elseif ($command == "delete") {
            $editQuery = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
          }

          $innerResult = mysqli_query($con, $editQuery);

          if (!$innerResult) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
          }

          ?>
            <script type="text/javascript">
              popUp("<?php echo $table; ?>", "<?php echo $id; ?>");
            </script>
          <?php
        break;

        case "packaging_size":
          if ($command == "update") {
            insertNewDataPackaging_size();
            $editQuery = "UPDATE `$table` SET `product_name` = '$newProductName', `size` = '$newSize',
                          `component_A_weight` = '$newCA', `component_B_weight` = '$newCB',  `remarks` = '$newRemarksPS'
                          WHERE `$table`.`id` = $id";
          }elseif ($command == "add") {
            insertNewDataPackaging_size();
            $editQuery = "INSERT INTO `$table` (`id`, `product_name`, `size`, `component_A_weight`, `component_B_weight`, `remarks`)
                          VALUES ('$id', '$newProductName', '$newSize', '$newCA', '$newCB', '$newRemarksPS')";
          }elseif ($command == "delete") {
            $editQuery = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
          }

          $innerResult = mysqli_query($con, $editQuery);

          if (!$innerResult) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
          }

          ?>
            <script type="text/javascript">
              popUp("<?php echo $table; ?>", "<?php echo $id; ?>");
            </script>
          <?php
        break;

        case "location":
          if ($command == "update") {
            insertNewDataLocation();
            $editQuery = "UPDATE `$table` SET `location_name` = '$newLocationName' WHERE `$table`.`id` = '$id'";
          }elseif ($command == "add") {
            insertNewDataLocation();
            $editQuery = "INSERT INTO `$table` (`id`, `location_name`) VALUES ('$id', '$newLocationName')";
          }elseif ($command == "delete") {
            $editQuery = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
          }

          $innerResult = mysqli_query($con, $editQuery);

          if (!$innerResult) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
          }

          ?>
            <script type="text/javascript">
              popUp("<?php echo $table; ?>", "<?php echo $id; ?>");
            </script>
          <?php
        break;

        case "client":
          if ($command == "update") {
            insertNewDataClient();
            $editQuery = "UPDATE `$table` SET `company_name` = '$newClientName' WHERE `$table`.`id` = '$id'";
          }elseif ($command == "add") {
            insertNewDataClient();
            $editQuery = "INSERT INTO `$table` (`id`, `company_name`) VALUES ('$id', '$newClientName')";
          }elseif ($command == "delete") {
            $editQuery = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
          }

          $innerResult = mysqli_query($con, $editQuery);

          if (!$innerResult) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
          }

          ?>
            <script type="text/javascript">
              popUp("<?php echo $table; ?>", "<?php echo $id; ?>");
            </script>
          <?php
        break;

        case "supplier":
          if ($command == "update") {
            insertNewDataSupplier();
            $editQuery = "UPDATE `$table` SET `company_name` = '$newSupplierName' WHERE `$table`.`id` = '$id'";
          }elseif ($command == "add") {
            insertNewDataSupplier();
            $editQuery = "INSERT INTO `$table` (`id`, `company_name`) VALUES ('$id', '$newSupplierName')";
          }elseif ($command == "delete") {
            $editQuery = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
          }

          $innerResult = mysqli_query($con, $editQuery);

          if (!$innerResult) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
          }

          ?>
            <script type="text/javascript">
              popUp("<?php echo $table; ?>", "<?php echo $id; ?>");
            </script>
          <?php
        break;

        default:
          echo "ID selected found!";
      }

    }else{
      echo "ID selected was not found!";
    }

  }else {
    ?>
      <script type="text/javascript">
        alert(' Please enter the valid ID to Make a Change! ');
      </script>
    <?php
  }

  function insertNewDataColor(){
    $GLOBALS['newRalNum'] = trim($_POST['ral_number_manipulate']);
    $GLOBALS['newColorName'] =  trim($_POST['color_name_manipulate']);
    $GLOBALS['newSPC'] = trim($_POST['spc_manipulate']);
    $GLOBALS['newRGB'] = trim($_POST['rgb_hex_manipulate']);
  }

  function insertNewDataPackaging_size(){
    $GLOBALS['newProductName'] = trim($_POST['product_name_manipulate']);
    $GLOBALS['newCA'] = trim($_POST['componentA_manipulate']);
    $GLOBALS['newCB'] = trim($_POST['componentB_manipulate']);
    $GLOBALS['newRemarksPS'] = trim($_POST['remarks_manipulate']);
    $GLOBALS['newSize'] = $GLOBALS['newCA'] + $GLOBALS['newCB'];
  }

  function insertNewDataLocation(){
    $GLOBALS['newLocationName'] = trim($_POST['location_name_manipulate']);
  }
  function insertNewDataClient(){
    $GLOBALS['newClientName'] = trim($_POST['client_company_name_manipulate']);
  }
  function insertNewDataSupplier(){
    $GLOBALS['newSupplierName'] = trim($_POST['supplier_company_name_manipulate']);
  }

?>
