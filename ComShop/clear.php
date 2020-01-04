<?php
  //brisanje sesije - Korisceno za brisanje kompletne kartice klikom na taster izbrisi karticu
  session_start();
  session_destroy();
  header('Location:cart.php');


 ?>
