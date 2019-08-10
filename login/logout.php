<?php
  session_start();
  if (!(isset($_SESSION['user'])))
  {
    header("location: ../login/form-login.php");
  }
  session_destroy();

  header("location: form-login.php");
 ?>
