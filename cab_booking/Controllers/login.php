<?php
	//Start session
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
	session_start();
    
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = md5($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../Views/home.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM user WHERE usename='$username' AND password='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_USERNAME'] = $member['usename'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
            $_SESSION['SESS_FNAME'] = $member['first_name'];
            $_SESSION['SESS_LNAME'] = $member['last_name'];
            $_SESSION['SESS_ADDRESS'] = $member['address'];
            $_SESSION['SESS_PHONE'] = $member['phone'];
            $_SESSION['SESS_ROLE'] = $member['role'];
			session_write_close();
            if($_SESSION['SESS_ROLE']==1){
                header('location: ../dashboard/index.php');
			    exit();
            }
            else if($_SESSION['SESS_ROLE']==2){
                header('location: ../dashboard/driver_index.php');
			    exit();
            }
            else if($_SESSION['SESS_ROLE']==3){
                header('location: ../dashboard/admin_index.php');
			    exit();
            }
			
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../Views/home.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>