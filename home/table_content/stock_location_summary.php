<?php
  // sls = stock location summary
  $slsLocationCount = 0;
  while ($slsLocationCount < $tLocationCount) {
    ?>
      <h2 class="any_subtitle" > <?php echo $location[$slsLocationCount]; ?></h2>
      <table>
        <tr class="table_column_header">
          <th class="No_column">No.</th>
          <th class="name_column">Name</th>
          <th class="ral_column">RAL No</th>
          <th class="size_column">Size(KG)</th>
          <th class="spc_column">SPC</th>
          <th class="currentStock_column">Stocks(KG)</th>
        </tr>

        <?php
          $rownum = 0;
          $numCount = 0;
          $total_stock = 0;
          while ($rownum < $slsTContentCount) {
            if ($slsLocation[$rownum] == $location[$slsLocationCount]) {
              ?>
                <tr>
                  <td class="no_row"> <?php echo $numCount += 1; ?> </td>
                  <td> <?php echo $slsProduct_name[$rownum]; ?> </td>

                  <td style=<?php if (color_indicator($slsRgb_code[$rownum])) {
                    ?> "color: #FFFFFF; background-color: #<?php echo $slsRgb_code[$rownum];?>;"<?php
                  }else{
                    ?>
                      "color: #000000; background-color: #<?php echo $slsRgb_code[$rownum];?>;"
                    <?php
                  }?>> <?php echo $slsRal_no[$rownum] . "(" . $slsColor_name[$rownum] . ")"; ?> </td>

                  <td class="size_row"> <?php echo $slsSize[$rownum]; ?> </td>
                  <td class="spc_row"> <?php echo $slsSpc[$rownum]; ?> </td>
                  <td class="currentStock_row"> <?php echo number_format($slsLast_stock[$rownum], 2, '.', ','); ?> </td>
                </tr>

              <?php
            $total_stock +=  $slsLast_stock[$rownum];
            }
            $rownum += 1;
          }
        ?>

        <tr>
          <td id="total_overall_title" colspan="5">Total Stock: </td>
          <td id="total_overall_stock"> <?php  echo number_format($total_stock, 2, '.', ','). " KG";?> </td>
        </tr>

      </table>
    <?php
    $slsLocationCount += 1;
  }
 ?>
