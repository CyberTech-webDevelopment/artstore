<?php
require "../config/config.php";
$message_res="";
if(!empty($_POST['email'])){
    
    $email=mysqli_real_escape_string($con, $_POST['email']);
    
    $sql="SELECT * FROM users WHERE email='$email' AND confirmed_email_status=1";
    $result=mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){

            $token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789!$/()*";
			$token = str_shuffle($token);
			$token = substr($token,0,10);
			$sql_update="UPDATE users SET token='$token', send_link_email_date=NOW() WHERE email='$email'";
			if(mysqli_query($con, $sql_update)){
			    
			    	require_once '../swiftMailer/vendor/autoload.php';
				
				// Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
             ->setUsername('artstore.am@gmail.com')
             ->setPassword('sfflszwmkletshvg');
             // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            
            // Create a message
            $message = (new Swift_Message('Reset your password'))
            ->setFrom(['artstore.am@gmail.com' => 'Artstore'])
            ->setTo([$_POST['email'] => 'A name'])
            ->setBody("<p>We heard that you lost your Artstore password. Sorry about that!</p>
                       <p>But don’t worry! You can use the following link to reset your password:<br>
                       <a rel='modal:open' href='http://localhost/project/index.php?email=$email&token=$token'>Click here</a>
                      </p>
                       <p>If you don’t use this link within 24 hours, it will expire. To get a new password reset link, visit http://localhost/project</p>
                       <p>Thanks,<br>
                       <p>The Artstore Team</p>", 'text/html');
                
            // Send the message
            $result = $mailer->send($message);
            $message_res="Check your email for a link to reset your password.";
			}
    }
    else{
        $message_res="<span class='text-danger'>That address is not a verified primary email.</span>";
    }
}
else{
    $message_res="<span class='text-danger' >Fill in email field </span>";
}
 echo $message_res;
?>