<?php
   include("Connections.php");
   $user_check = $_SESSION['login'];
   $sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   if(!isset($_SESSION['login'])){
      header("location:FormLogin.php");
   }
?>