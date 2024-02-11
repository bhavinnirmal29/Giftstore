<?php
session_start();
$_SESSION['userid']=$_POST['username'];
header("Location:login1.php");
?>