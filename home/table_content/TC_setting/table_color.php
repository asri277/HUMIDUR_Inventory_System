<?php

  $query = "select * from color";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $colorTotalCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $colorID = array();
    $colorRalNo = array();
    $colorName = array();
    $colorSPC = array();
    $colorRGBHEX = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $colorID[$dataCount] = $row["id"];
      $colorRalNo[$dataCount] = $row["ral_no"];
      $colorName[$dataCount] = $row["color_name"];
      $colorSPC[$dataCount] = $row["spc"];
      $colorRGBHEX[$dataCount] = $row["rgb_code"];
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
    <th>ID</th>
    <th>RAL Number</th>
    <th>Color Name</th>
    <th>SPC</th>
    <th>RGB HEX</th>
  </tr>

  <?php
    $rowCount = 0;
    while ($rowCount < $colorTotalCount) {
      ?>
        <tr>
          <td> <?php echo $colorID[$rowCount]; ?> </td>
          <td> <?php echo $colorRalNo[$rowCount]; ?> </td>
          <td> <?php echo $colorName[$rowCount]; ?> </td>
          <td> <?php echo $colorSPC[$rowCount]; ?> </td>
          <td> <?php echo $colorRGBHEX[$rowCount]; ?> </td>
        </tr>
      <?php
      $rowCount += 1;
    }
   ?>
</table>
