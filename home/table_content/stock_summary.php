
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
      $colomnNum = 0;
      while($colomnNum < $tLocationCount)
      {
        ?>
          <th> <?php echo $location[$colomnNum];?></th>
        <?php
        $colomnNum += 1;
      }
    ?>
    <th>Overall Stocks</th>
  </tr>

  <!-- table content-->
  <?php
  $rownum = 0;
  $colomnNum = 0;
  while($rownum < $tContentCount)
  {
    ?>
    <tr>
      <td> <?php echo $product_name[$colomnNum]; ?> </td>
      <td> <?php echo $ral_no[$colomnNum] . "(".$color_name[$colomnNum].")"; ?> </td>
      <td> <?php echo $size[$colomnNum]; ?> </td>
      <td> <?php echo $spc[$colomnNum]; ?> </td>
    </tr>
    <?php
    $rownum += 1;
    $colomnNum += 1;
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
