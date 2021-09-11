<?php
  // sls = stock location summary
  $slsLocationCount = 0;
  while ($slsLocationCount < $tLocationCount) {
    ?>
      <h2 class="any_subtitle" > <?php echo $location[$slsLocationCount]; ?></h2>
      <table>
        <tr class="table_column_header">
          <th class="name_column">Name</th>
          <th class="ral_column">RAL No</th>
          <th class="size_column">Size(KG)</th>
          <th class="spc_column">SPC</th>
          <th class="currentStock_column">Stocks(KG)</th>
        </tr>

        <?php
          $rownum = 0;
          while ($rownum < $slsTContentCount) {
            if ($slsLocation[$rownum] == $location[$slsLocationCount]) {
              ?>
                <tr>
                  <td> <?php echo $slsProduct_name[$rownum]; ?> </td>
                  <td> <?php echo $slsRal_no[$rownum] . "(" . $slsColor_name[$rownum] . ")"; ?> </td>
                  <td class="size_row"> <?php echo $slsSize[$rownum]; ?> </td>
                  <td class="spc_row"> <?php echo $slsSpc[$rownum]; ?> </td>
                  <td class="currentStock_row"> <?php echo $slsLast_stock[$rownum]; ?> </td>
                </tr>
              <?php
            }
            $rownum += 1;
          }
        ?>

      </table>
    <?php
    $slsLocationCount += 1;
  }
 ?>
