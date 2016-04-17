<?php 
    session_start();
    require_once 'connection.php';
    $sql = "UPDATE book SET completed=1 WHERE bill_no=$_GET[billnumber]";
    
    $res = mysql_query($sql);
    mysql_close($bd);
    session_write_close();
    
    header('Location: ../dashboard/assignment.php');
    exit();
?>