<?php 
    session_start();
    require_once 'connection.php';
    
    $sql = "UPDATE book SET driver_id=$_POST[selects] WHERE bill_no=$_GET[billno]";
    
    $res = mysql_query($sql);
    
    mysql_close($bd);
    session_write_close();
    header('Location: ../dashboard/admin_orderassign.php');
    exit();
?>