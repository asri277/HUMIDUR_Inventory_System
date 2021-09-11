
<!-- ======================================================================= -->

<table>
  <tr>
    <th>Name</th>
    <th>RAL No</th>
    <th>Size</th>
    <th>SPC</th>

    <!-- column that extract data direct from database -->
    <!-- any data update, it will update in real time -->
    <?php
      $columnNum = 0;
      while($columnNum < $tLocationCount)
      {
        ?>
          <th> <?php echo $location[$columnNum];?></th>
        <?php
        $columnNum += 1;
      }
    ?>
    <th>Overall Stocks</th>
  </tr>

  <!-- table content-->
  <?php
  $rownum = 0;
  $columnNum = 0;
  while($rownum < $tContentCount)
  {
    ?>
    <tr>
      <td> <?php echo $product_name[$columnNum]; ?> </td>
      <td> <?php echo $ral_no[$columnNum] . "(".$color_name[$columnNum].")"; ?> </td>
      <td> <?php echo $size[$columnNum]; ?> </td>
      <td> <?php echo $spc[$columnNum]; ?> </td>
      <?php

        $subColumnNum = 0;
        while ($subColumnNum < $tLocationCount) {
          if ($sLocation[$rownum] == $location[$subColumnNum]) {
            ?> <td> <?php echo $sCurrentStock[$columnNum]; ?> </td> <?php
          }else {
            ?> <td> <?php echo "-"; ?> </td> <?php
          }
          $subColumnNum += 1;
        }


      ?>
    </tr>
    <?php
    $rownum += 1;
    $columnNum += 1;
  }
  ?>

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
  }

  td{
    padding-left: 5px;
  }
</style>
