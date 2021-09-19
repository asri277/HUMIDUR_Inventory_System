<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['ID_checked'])){

      $table = $_POST['table_manipulate'];
      $id = $_POST['ID_checked'];

      $query = "SELECT * FROM $table WHERE id = $id ";
      $result = mysqli_query($con, $query);

      if (!$result) {
        echo 'Could not run query: ' . mysqli_error();
        exit;
      }

      if (mysqli_num_rows($result) > 0){

        echo "ID selected found!";
        // $newRalNum = $_POST['ral_number_manipulate'];
        // $newColorName =  $_POST['color_name_manipulate'];
        // $newSPC = $_POST['spc_manipulate'];
        // $newRGB = $_POST['rgb_hex_manipulate'];
        //
        // $editQuery ="UPDATE $table SET `ral_no` = $newRalNum, `color_name` = $newColorName,
        //             `spc` = $newSPC, `rgb_code` = $newRGB WHERE $table.`id` = $id";

      }else{
        echo "ID selected was not found!";
      }



    }else {
      ?>
        <script type="text/javascript">
          alert(' Please enter the ID to Edit! ');
        </script>
      <?php
    }
  }

 ?>
