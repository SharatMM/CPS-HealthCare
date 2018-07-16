<?php
session_start();
   include('config.php');
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select p_name from patient where p_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['p_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index1.html");
   }
?>