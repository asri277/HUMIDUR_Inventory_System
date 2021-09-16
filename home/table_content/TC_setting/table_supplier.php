<?php

  $query = "select * from supplier";
  $result = mysqli_query($con, $query);

  if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
  }

  $supplierTotalCount = mysqli_num_rows($result);

  if (mysqli_num_rows($result) > 0) {

    $dataCount = 0;
    $supplierID = array();
    $companyName = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $supplierID[$dataCount] = $row["id"];
      $companyName[$dataCount] = $row["company_name"];
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
    <th>Supplier ID</th>
    <th>Company Name</th>
  </tr>

  <?php
    $rowCount = 0;
    while ($rowCount < $supplierTotalCount) {
      ?>
        <tr>
          <td> <?php echo $supplierID[$rowCount]; ?> </td>
          <td> <?php echo $companyName[$rowCount]; ?> </td>
        </tr>
      <?php
      $rowCount += 1;
    }
   ?>
</table>
