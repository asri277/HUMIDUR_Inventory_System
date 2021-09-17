<?php

  $query = "select * from client";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $clientTotalCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $clientID = array();
    $companyName = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $clientID[$dataCount] = $row["id"];
      $companyName[$dataCount] = $row["company_name"];
      $dataCount += 1;
    }

  }else{
    echo 'No data was found for this table';
    exit;
  }

  mysqli_free_result($result);

?>

<table id="table_function_client" class="table_design">
  <tr class="header_row_design">
    <th>ID</th>
    <th onclick="sortTableString(1,'table_function_client')">Company Name</th>
  </tr>

  <?php
    $rowCount = 0;
    while ($rowCount < $clientTotalCount) {
      ?>
        <tr>
          <td class="any_ID_column_design"> <?php echo $clientID[$rowCount]; ?> </td>
          <td class="any_name_column_design"> <?php echo $companyName[$rowCount]; ?> </td>
        </tr>
      <?php
      $rowCount += 1;
    }
   ?>
</table>
