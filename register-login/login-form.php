<?php
session_start();
include "../config/config.php";
	
function redirect(){
	    header('location: ../user.php');
		exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = $con-> real_escape_string($_POST['user_mail']);
	$password = $con-> real_escape_string($_POST['user_pass']);
	$remember =$_POST['user_remember'];
    $hashedPassword=hash('sha256', $password);
    $sql = "SELECT id, confirmed_email_status FROM users WHERE email='$email' AND password='$hashedPassword'";
    $result = $con->query($sql);
     $row_cnt = $result->num_rows;
		if($row_cnt>0){
			$row = $result->fetch_assoc();
			if($row['confirmed_email_status']==0){
				$message="<p class='text-center text-danger'>Please verify your email.</p>";
			}
			else{
                     $message="<p class='text-center'>You are successfuly login.</p>";
                     $token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789!$/()*";
			         $token = str_shuffle($token);
			         $remember_token = substr($token,0,10);
                if($remember=='true'){
                     setcookie('remember_token_cookie', $remember_token, time()+86400*30);

                   ?>	<script >setTimeout(function(){location.href="index.php";},1000)	</script> <?php
                }
                else{
           	         $_SESSION['user']=$email;
           	         ?><script >setTimeout(function(){location.href="index.php";	},1000)</script> <?php
                }
			}
		}
		else{
			$message="<p class='text-center text-danger'>Wrong email or password.</p>";
		}
		echo $message;
}
?>