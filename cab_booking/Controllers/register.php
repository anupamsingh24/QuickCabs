<?php 
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    session_start();
    require_once('connection.php');
    
    //Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
        
    $username = $_POST['username'];
	$password = md5($_POST['password']);
    
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
		header("location: ../Views/register.php");
		exit();
	}
    
    
    $qry = "SELECT * FROM user WHERE usename='$username'";
    $result=mysql_query($qry);
    
    if($result) {
		if(mysql_num_rows($result) > 0) {
			//User Already Exists 
            $errmsg_arr[] = 'username already registered! ';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				//session_write_close();
				header("location: ../Views/register.php");
				exit();
                mysql_close($bd);
			}
			
		}
        else {
			//New User
             $qry = "select * from user where phone='$_POST[phone]'";
             $result=mysql_query($qry);
             if($result){
                 if(mysql_num_rows($result)>0){
                      $errmsg_arr[] = 'Phone number already registered';
                     $errflag = true;
                     $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		             //session_write_close();
		             header("location: ../Views/register.php");
                      mysql_close($bd);
		             exit();
                 }
                 else{
                     
                     $qry = "INSERT INTO user(usename,password,first_name,last_name,address,phone,role) VALUES('$_POST[username]','$password','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[phone]','$_POST[optradio]')";
                     $result=mysql_query($qry);
                     
                     //session_regenerate_id();
			         $member = mysql_fetch_assoc($result);
                     //$_SESSION['SESS_MEMBER_ID'] = $member['id'];
                     //$_SESSION['SESS_FIRST_NAME'] = $member['usename'];
                     //$_SESSION['SESS_LAST_NAME'] = $member['password'];
                    // session_write_close();
                     
                     header('location: ../Views/home.php');
                     mysql_close($bd);
                     exit();
                    
                 }
             }
             else{
                 die("Query failed");
             }		
		}
	}
    else {
		die("Query failed");
	}
?>