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
          $newRalNum = trim($_POST['ral_number_manipulate']);
          $newColorName =  trim($_POST['color_name_manipulate']);
          $newSPC = trim($_POST['spc_manipulate']);
          $newRGB = trim($_POST['rgb_hex_manipulate']);

          if ($command == "update") {
            $editQuery = "UPDATE `$table` SET `ral_no` = '$newRalNum', `color_name` = '$newColorName',
                         `spc` = '$newSPC', `rgb_code` = '$newRGB'
                         WHERE `$table`.`id` = $id";
          }elseif ($command == "add") {
            $editQuery = "INSERT INTO `$table` (`id`, `ral_no`, `color_name`, `spc`, `rgb_code`)
                          VALUES ('$id', '$newRalNum', '$newColorName', '$newSPC', '$newRGB')";
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
          $newProductName = trim($_POST['product_name_manipulate']);
          $newCA = trim($_POST['componentA_manipulate']);
          $newCB = trim($_POST['componentB_manipulate']);
          $newRemarksPS = trim($_POST['remarks_manipulate']);
          $newSize = $newCA + $newCB;

          if (empty($newRemarksPS)) {
            $editQuery = "UPDATE `$table` SET `product_name` = '$newProductName', `size` = '$newSize',
                          `component_A_weight` = '$newCA', `component_B_weight` = '$newCB',  `remarks` = NULL
                          WHERE `$table`.`id` = $id;";
          }else{
            $editQuery = "UPDATE `$table` SET `product_name` = '$newProductName', `size` = '$newSize',
                          `component_A_weight` = '$newCA', `component_B_weight` = '$newCB',  `remarks` = '$newRemarksPS'
                          WHERE `$table`.`id` = $id;";
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
          $newLocationName = trim($_POST['location_name_manipulate']);

          $editQuery = "UPDATE `$table` SET `location_name` = '$newLocationName' WHERE `$table`.`id` = '$id'";

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
          $newClientName = trim($_POST['client_company_name_manipulate']);

          $editQuery = "UPDATE `$table` SET `company_name` = '$newClientName' WHERE `$table`.`id` = '$id'";

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
          $newSupplierName = trim($_POST['supplier_company_name_manipulate']);

          $editQuery = "UPDATE `$table` SET `company_name` = '$newSupplierName' WHERE `$table`.`id` = '$id'";

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
?>

<!-- sambungan last update function untuk setiap table -->
