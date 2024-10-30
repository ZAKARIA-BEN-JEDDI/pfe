<?php

  if (isset($_GET['id'])) {
    echo $_GET['id'] ;
  }else{
    header('location:salle.php');
  }

?>