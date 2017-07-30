<?php
						if(isset($_POST['login'])){
							$email_id=$_POST['email_id'];
							$password=$_POST['password'];
							$result=$conn->query("select * from user where password = '$password' and email_id = '$email_id'");
						        	if($result)
						        	{
						        		$_SESSION['email_id'] = $email_id;
						        		$_SESSION['flag'] ='set';
										$_SESSION['first_name'] = $s['first_name'];
										$_SESSION['last_name'] = $s['last_name'];
						     			//header('location:user_dashboard.php');
							        }
								
                                                               else{
                                                                   header('location:user_login.php');
								   echo "<font size='5px' color='white'>Sorry Email id/password is wrong...</font>";
                                                                   }
							}
					?>
<!-- END OF PHP CODE -->