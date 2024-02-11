<?php
 session_start();

  echo "Logout Successfully ";
  unset($_SESSION["userid"]);
  session_destroy();   // function that Destroys Session 
  header("Location: login1.php");
?>