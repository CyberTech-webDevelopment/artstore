<?php
include "../config/config.php";
	

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$name = $con-> real_escape_string($_POST['user_name']);
	$email = $con-> real_escape_string($_POST['user_mail']);
	$password = $con-> real_escape_string($_POST['user_pass']);
	$user_agree =$con-> real_escape_string($_POST['user_agree']);
	
		$sql = $con->query("SELECT id FROM users WHERE email='$email'");
		if($sql->num_rows>0){
			$message="<p class='text-center text-danger'>This E-mail is already registered</p>";
		}else{
			$token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789!$/()*";
			$token = str_shuffle($token);
			$token = substr($token,0,10);
			$hashedPassword=hash('sha256', $password);
			$con->query("INSERT INTO users (username, email, password, confirmed_email_status, token, agree) VALUES('$name','$email', '$hashedPassword', 0 , '$token', '$user_agree')");
			
				require_once '../swiftMailer/vendor/autoload.php';
				
				// Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
             ->setUsername('artstore.am@gmail.com')
             ->setPassword('sfflszwmkletshvg');
             // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            
            // Create a message
            $message = (new Swift_Message('Please Verify Your Email Address'))
            ->setFrom(['artstore.am@gmail.com' => 'Artstore'])
            ->setTo([$_POST['user_mail'] => 'A name'])
            ->setBody("<p>Dear User, Congratulations, You have successfully registered on our 
            	          miracle platform. In Artstor, you will find handmade 
            	          products made by real craftsmen for you and your loved ones.</p>
                       <p> <a rel='modal:open' href='http://localhost/project/index.php?email_mail=$email&token=$token'>Please click here to confirm your Email. </a></p>
                       <p>If you don’t use this link within 24 hours, it will expire.</p>
                       <p>Thanks,<br>
                       <p>The Artstore Team</p>", 'text/html');
            // Send the message
            $result = $mailer->send($message);
           
              $message='<div>
                            <div  class="text-strong text-center pt-3 pb-3"><img src="icons/success.png"></div>
							<div class="text-strong text-center pt-3 pb-3">
							   You have successfully registered. Check your email for a link to verify your email.
							</div>
						</div>';
		}
		echo $message;
	}
