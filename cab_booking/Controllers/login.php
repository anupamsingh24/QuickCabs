<?php
   include 'info.php';
    
   $con=  mysql_connect($server,$user,$password);
    mysql_select_db('quickcabs');
    
   $pass = md5($_SERVER[password]);
    
   $sql = "select username,password from user where username='$_POST[username]' and password='$_POST[password]'";
   $sql1 = "select username from user where username='$_POST[username]'";
   
   if($res = mysql_query($sql)) ;
   $res1 = mysql_query($sql1);
   
   $rowcount = mysql_num_rows($res);
   $rowcount1 = mysql_num_rows($res1);
   
   if($rowcount==0){
       if($rowcount1==0){
            header('Location: ../Views/home.php?userErr=incorrect&passErr=incorrect');
       }
       else{
           header('Location: ../Views/home.php?passErr=incorrect');
       }
   }
   else{
       header('Location: ../Views/dashboard.php');
   }

   mysql_close($con);
?>