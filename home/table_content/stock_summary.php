
<!-- ======================================================================= -->

<table>
  <tr class="table_column_header">
    <th class="name_column">Name</th>
    <th class="ral_column">RAL No</th>
    <th class="size_column">Size(KG)</th>
    <th class="spc_column">SPC</th>
    <th class="currentStock_column">Overall Stocks(KG)</th>
  </tr>

  <!-- table content-->
  <?php
  $rownum = 0;
  while($rownum < $tContentCount)
  {
    ?>
    <tr>
      <td> <?php echo $product_name[$rownum]; ?> </td>
      <td> <?php echo $ral_no[$rownum] . "(".$color_name[$rownum].")"; ?> </td>
      <td class="size_row"> <?php echo $size[$rownum]; ?> </td>
      <td class="spc_row"> <?php echo $spc[$rownum]; ?> </td>
      <td class="currentStock_row"> <?php echo $last_stock[$rownum]; ?> </td>
    </tr>
    <?php
    $rownum += 1;
  }
  ?>
  <tr>
    <td id="total_overall_title" colspan="4">Total Overall Stock: </td>
    <td id="total_overall_stock">
      <?php
          $rownum = 0;
          $total_overall_stock = 0;
          while ($rownum < $tContentCount) {
            $total_overall_stock += $last_stock[$rownum];
            $rownum += 1;
          }
          echo $total_overall_stock . " KG";
      ?>
    </td>
  </tr>
</table>

<!-- ======================================================================= -->

<style type="text/css">
  table{
    border: 1px solid #000000;
    width: 100%;
    border-collapse: collapse;
  }

  th,td{
    border: 1px solid #000000;
    padding: 5px 0% 5px 5px;
  }

  #total_overall_title{
    text-align: right;
    background-color: #CCCCFF;
    /* margin: top right bottom left  */
    padding: 5px 2% 5px 5px;
  }

  #total_overall_stock{
    background-color: #CCCCFF;
    padding: 5px 5px 5px 5px;
    text-align: center;
  }

  .table_column_header{
    background-color: #CCCCFF;
  }

  .name_column{
    width: 150px;
  }

  .ral_column{
    width: 500px;
  }

  .size_column{
    width: 150px;
  }

  .spc_column{
    width: 150px;
  }

  .currentStock_column{
    width: 150px;
  }

  .size_row{
    text-align: center;
  }
  .spc_row{
    text-align: center;
  }
  .currentStock_row{
    text-align: center;
  }
</style>
