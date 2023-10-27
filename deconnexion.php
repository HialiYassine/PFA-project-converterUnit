<?php
ob_start();

    session_start();
    if(!isset($_SESSION["login"]))
      header("location:index.php");
    session_destroy();
    header("location:index.php");
  
ob_end_flush(); // Envoie la sortie mise en mémoire tampon

?>
