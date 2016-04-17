<?php 
    session_start();
    require_once 'connection.php';
    
    $sql = "INSERT INTO feedback(bill_no,feed,rating) VALUES($_GET[billno],'$_POST[feed]','$_POST[rating]')";
    
    $res= mysql_query($sql);
    
    if(!$res){
        session_write_close();
        header('Location: ../dashboard/bills.php?msg=error');
        exit();
    }
    
    
    mysql_close($bd);
    
    session_write_close();
    header('Location: ../dashboard/bills.php');
    exit(); 
?>