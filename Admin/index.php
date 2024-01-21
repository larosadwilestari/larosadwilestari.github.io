<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>



<?php include "header.php"; ?>
<?php include "home.php"; ?>
<?php include "footer.php";?>