<?php 
    require_once 'connection.php';
    
    $sql ="UPDATE book SET pool_username='$_POST[selects]',pool_assign=1 WHERE bill_no=$_GET[billno]";
    $res = mysql_query($sql);
    
    $sql = "UPDATE book SET pool_username='$_POST[cust_username]',pool_assign=1 WHERE source='$_POST[source]' AND destination='$_POST[destination]' AND date='$_POST[date]' AND bill_no!=$_GET[billno]";
    $res = mysql_query($sql);
    if(!$res){
         header('Location: ../dashboard/assignpool.php?error=yes');
    exit();
    }
    
    header('Location: ../dashboard/assignpool.php');
    exit();
?>