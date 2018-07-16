<?php
session_start();
   include('config.php');
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select d_name from doctor where doc_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['d_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.html");
   }
?>