<?php
   include('database/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];


// getting name of the logging user
   // $unqq = "SELECT fname from users where email = '$user_check' " ;
   // $result = $conn->query($unqq);
   // $row = $result->fetch_assoc();
   // $_SESSION['fname'] = $row['fname'];



   $qq = "SELECT username from user where username = '$user_check' " ;
   $ses_sql = mysqli_query($conn,"$qq");

   //$ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>