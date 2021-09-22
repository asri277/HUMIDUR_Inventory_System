<script type="text/javascript">
  function popUp(table, id){
    var message = "Data ID: "+id+"\nTable: "+table+"\nSuccessful Updated!";
    alert(message);
    window.location.href = "../setting_home.php";
  }
</script>

<?php
  include("../../../../login/connection.php");

  if(!empty($_POST['ID_checked']) && isset($_POST['ID_checked'])){

    $table = trim($_POST['table_manipulate']);
    $id = trim($_POST['ID_checked']);

    $query = "SELECT * FROM $table WHERE id = $id ";
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

          $editQuery ="UPDATE `$table` SET `ral_no` = '$newRalNum', `color_name` = '$newColorName',
                      `spc` = '$newSPC', `rgb_code` = '$newRGB'
                      WHERE `$table`.`id` = $id;";

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
            echo "ps im done";
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
        alert(' Please enter the ID to Make a Change! ');
      </script>
    <?php
  }
?>

<!-- sambungan last update function untuk setiap table -->
