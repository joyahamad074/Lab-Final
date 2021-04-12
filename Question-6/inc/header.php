<?php 

  include "connection.php";  

?>
<?php session_start(); ?>
<?php

   if ( !$_SESSION['email'] ){
    header("Location: logout.php");
  }

?>
<?php ob_start(); ?>