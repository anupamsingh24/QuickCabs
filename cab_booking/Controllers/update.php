<?php 
    session_start();
    require_once 'connection.php';
    
    $pass = md5($_POST[password]);
    
    $sql = "UPDATE user SET password='$pass',first_name='$_POST[fname]',last_name='$_POST[lname]',address='$_POST[address]',phone='$_POST[phone]' WHERE usename='$_SESSION[SESS_USERNAME]'";
    $res = mysql_query($sql);
    
    $_SESSION['SESS_PASSWORD'] = $_POST['password'];
    $_SESSION['SESS_FNAME'] = $_POST['fname'];
    $_SESSION['SESS_LNAME'] = $_POST['lname'];
    $_SESSION['SESS_ADDRESS'] = $_POST['address'];
    $_SESSION['SESS_PHONE'] = $_POST['phone'];
    
    session_write_close();
    header('location: ../dashboard/index.php');
	exit();
?>