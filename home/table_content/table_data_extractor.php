<?php
  // For location Update
  $query = "select location_name from location";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $tLocationCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $location = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $location[$dataCount] = $row["location_name"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
  }

  mysqli_free_result($result);

  // For table content update
  $query = "SELECT product_name, ral_no, color_name, size, spc
            FROM `color` C JOIN `stock` S ON C.id = S.color_fk
            JOIN `packaging_size` PS ON S.packaging_fk = PS.id";

  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $tContentCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $product_name = array();
    $ral_no = array();
    $color_name = array();
    $size = array();
    $spc = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $product_name[$dataCount] = $row["product_name"];
      $ral_no[$dataCount] = $row["ral_no"];
      $color_name[$dataCount] = $row["color_name"];
      $size[$dataCount] = $row["size"];
      $spc[$dataCount] = $row["spc"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
  }


  // close Database
  mysqli_free_result($result);

?>
