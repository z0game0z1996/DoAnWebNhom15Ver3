<?php
   include('../config.php');
   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   session_start();
   
   $user_check=$_SESSION['login_user'];
   $sql = "select name from user where name='$user_check'";
   $ses_sql=mysqli_query($db, $sql);
   $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session=$row['name'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>