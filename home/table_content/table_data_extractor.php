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

// =============================================================================
  // Stock summary extractor
  // For table content update
  $query = "SELECT product_name, ral_no, color_name, size, spc, rgb_code, SUM(current_stock) AS last_stock
            FROM `color` C JOIN `stock` S ON C.id = S.color_fk
            JOIN `packaging_size` PS ON S.packaging_fk = PS.id
            JOIN `location` L ON S.location_fk = L.id
            GROUP BY product_name, ral_no, color_name, size, spc, rgb_code
			      ORDER BY product_name, ral_no, size";

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
    $rgb_code = array();
    $last_stock = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $product_name[$dataCount] = $row["product_name"];
      $ral_no[$dataCount] = $row["ral_no"];
      $color_name[$dataCount] = $row["color_name"];
      $size[$dataCount] = $row["size"];
      $spc[$dataCount] = $row["spc"];
      $rgb_code[$dataCount] = $row["rgb_code"];
      $last_stock[$dataCount] = $row["last_stock"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
  }


  // close Database
  mysqli_free_result($result);

// =============================================================================
  // Stock location summary extractor
  $query = "SELECT product_name, ral_no, color_name, size, spc, rgb_code, current_stock, location_name
            FROM `color` C JOIN `stock` S ON C.id = S.color_fk
            JOIN `packaging_size` PS ON S.packaging_fk = PS.id
            JOIN `location` L ON S.location_fk = L.id";

  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $slsTContentCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $slsProduct_name = array();
    $slsRal_no = array();
    $slsColor_name = array();
    $slsSize = array();
    $slsSpc = array();
    $slsRgb_code = array();
    $slsLast_stock = array();
    $slsLocation = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $slsProduct_name[$dataCount] = $row["product_name"];
      $slsRal_no[$dataCount] = $row["ral_no"];
      $slsColor_name[$dataCount] = $row["color_name"];
      $slsSize[$dataCount] = $row["size"];
      $slsSpc[$dataCount] = $row["spc"];
      $slsRgb_code[$dataCount] = $row["rgb_code"];
      $slsLast_stock[$dataCount] = $row["current_stock"];
      $slsLocation[$dataCount] = $row["location_name"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
  }

  // close Database
  mysqli_free_result($result);

  // color indicator
  function color_indicator($color){
    if ($color == "000000" || $color == "5B3A29" || $color == "9B2321"  || $color == "325928") {
      return true;
    }else{
      return false;
    }
  }
?>
