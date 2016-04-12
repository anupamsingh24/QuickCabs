<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include 'info.php';
    
    if(!(empty($_POST[username])) and !(empty($_POST['password'])) and !(empty($_POST['fname'])) and !(empty($_POST['lname'])) and !(empty($_POST['address'])) and !(empty($_POST['phone']))){
        $con = mysql_connect($server,$user,$password);
        mysql_select_db('quickcabs');
        
        $sql = "select * from user where username='$_POST[username]'";
        $res = mysql_query($sql);
        echo $sql;
        
        if(!mysql_num_rows($res)){
            $sql = "select * from user where phone='$_POST[phone]'";
            echo $sql;
            $res = mysql_query($sql);
            if(mysql_num_rows($res)<=0){
                $pass = md5($_POST[password]);
                $sql = "insert into user(username,password,first_name,last_name,address,phone) values('$_POST[username]','$pass','$_POST[fname]','$_POST[lname]','$_POST[address]',$_POST[phone])";
                echo $sql;
                $res = mysql_query($sql);
                mysql_close($con);
                if($res){
                    header('Location: ../Views/dashboard.php');
                }
                else{
                    header('Location: ../Views/register.php?error=yes');
                }
            }
            else{
                header('Location: ../Views/register.php?phone=incorrect');
            }
        }
        else{
            header('Location: ../Views/register.php?username=incorrect');
        }
    }
    else{
        header('Location: ../Views/register.php?incomplete=true');
    }
    
?>