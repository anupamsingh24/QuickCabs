<?php
    require_once 'connection.php';
    
   $sql = "UPDATE book SET pool='$_POST[pool]' WHERE bill_no=$_GET[billno]";
   $res = mysql_query($sql);
   
   mysql_close($bd);
   
   header('Location: ../dashboard/changepool.php');
   exit(); 
?>