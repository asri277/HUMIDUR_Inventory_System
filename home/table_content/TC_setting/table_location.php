<?php

  $query = "select * from location";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $locationTotalCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $locationID = array();
    $locationName = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $locationID[$dataCount] = $row["id"];
      $locationName[$dataCount] = $row["location_name"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
    exit;
  }

  mysqli_free_result($result);

?>

<table id="table_function_location" class="table_design">
  <tr class="header_row_design">
    <th>ID</th>
    <th onclick="sortTableString(1,'table_function_location')">Location Name</th>
  </tr>

  <?php
    $rowCount = 0;
    while ($rowCount < $locationTotalCount) {
      ?>
        <tr>
          <td class="any_ID_column_design"> <?php echo $locationID[$rowCount]; ?> </td>
          <td class="any_name_column_design"> <?php echo $locationName[$rowCount]; ?> </td>
        </tr>
      <?php
      $rowCount += 1;
    }
   ?>
</table>
