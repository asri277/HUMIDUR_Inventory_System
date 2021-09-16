<?php

  $query = "select * from packaging_size";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $packagingSizeTotalCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $packagingSizeID = array();
    $packagingSizeName = array();
    $packagingSizeSize = array();
    $packagingSizeCA = array();
    $packagingSizeCB = array();
    $packagingSizeRemark = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $packagingSizeID[$dataCount] = $row["id"];
      $packagingSizeName[$dataCount] = $row["product_name"];
      $packagingSizeSize[$dataCount] = $row["size"];
      $packagingSizeCA[$dataCount] = $row["component_A_weight"];
      $packagingSizeCB[$dataCount] = $row["component_B_weight"];
      $packagingSizeRemark[$dataCount] = $row["remarks"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
    exit;
  }

  mysqli_free_result($result);

?>

<table class="table_design">
  <tr>
    <th>Packaging ID</th>
    <th>Product Name</th>
    <th>Size</th>
    <th>Component A</th>
    <th>Component B</th>
    <th>Remarks</th>
  </tr>

  <?php
    $rowCount = 0;
    while ($rowCount < $packagingSizeTotalCount) {
      ?>
        <tr>
          <td> <?php echo $packagingSizeID[$rowCount]; ?> </td>
          <td> <?php echo $packagingSizeName[$rowCount]; ?> </td>
          <td> <?php echo $packagingSizeSize[$rowCount]; ?> </td>
          <td> <?php echo $packagingSizeCA[$rowCount]; ?> </td>
          <td> <?php echo $packagingSizeCB[$rowCount]; ?> </td>
          <td> <?php echo $packagingSizeRemark[$rowCount]; ?> </td>
        </tr>
      <?php
      $rowCount += 1;
    }
   ?>
</table>
