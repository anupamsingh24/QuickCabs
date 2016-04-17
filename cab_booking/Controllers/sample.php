<?php

    $server = 'localhost';
    $user = 'root';
    $password = 'shubhkamna';  
    
    $con = mysqli_connect($server,$user,$password,"quickcabs");
    if(!$con){
        echo "no connection";
    }
    else{
        
        echo "connect success";
    }
    
    
    
    $sql = "INSERT INTO user(usename,password,first_name,last_name,address,phone) VALUES('anupamsngh','123','anupam','singh','vit',9787109385)";
    
    $res = mysqli_query($con,$sql);
    if(!$res){
        
        echo "query problem";
    }
    mysqli_close($con);


?>