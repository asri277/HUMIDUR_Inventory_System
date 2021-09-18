<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['ID_checked'])){

    }else {
      ?>
        <script type="text/javascript">
          alert(' Please enter the ID to Edit! ');
          exit();
        </script>
      <?php
    }
  }
 ?>
