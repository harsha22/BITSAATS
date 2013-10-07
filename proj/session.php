<?php

 session_start();

 $_SESSION['username']=$_POST['username'];
 $_SESSION['password']=$_POST['password'];
 
 if($_POST['sign'])
  header('Location:proj4.php');
?>
