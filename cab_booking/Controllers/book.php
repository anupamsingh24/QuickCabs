<?php
						session_start();
						require_once 'connection.php';
								
						
						$da = $_POST['date'];
						
						$xx = explode('-',$da);
						
						$time  =  $_POST['time'];
						
						$date = $xx[2].$xx[1].$xx[0];
						
						$source = $_POST['source'];
						$dest = $_POST['dest'];
						$radio = $_POST['optionsRadios'];
						
						//  username global
						
						$sql = "insert into book(source,destination,pool,date,driver_id,time,cust_username) values('$source','$dest','$radio','$date',0,'$time','$_SESSION[SESS_USERNAME]')";
						
						$res=mysql_query($sql);
						if(!$res){
                            header('Location: ../dashboard/book.php?error=yes');
                            exit();   
                        }
                        header('Location: ../dashboard/book.php?msg=success');
                        exit();
						mysql_close($bd);
?>