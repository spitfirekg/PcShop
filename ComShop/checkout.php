<?php

if(!isset($_SESSION['username'])){
  header('Location:login-alert.php');
}

 ?>





<?php include 'templates/header.php'; ?>

<?php include 'templates/footer.php' ?>
