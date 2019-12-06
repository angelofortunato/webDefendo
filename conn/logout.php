<?php
session_start();
session_destroy();
 header("Location: http://www.webdefendo.it/login.php"); /* Redirect browser */
  exit();
?>