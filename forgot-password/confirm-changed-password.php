<?php
include "../config/config.php";
	       $change_pass=mysqli_real_escape_string($con, $_POST['change_pass']);
	       $confirm_pass=mysqli_real_escape_string($con, $_POST['confirm_pass']);
           $email=mysqli_real_escape_string($con, $_POST['email']);
       
    if($change_pass==$confirm_pass){
        
        $hashedPassword=hash('sha256', $change_pass);
			$sql_update="UPDATE users SET password='$hashedPassword', token='' WHERE email='$email'";
			if(mysqli_query($con, $sql_update)){
			 echo '<div>
                          <div  class="text-strong text-center pt-3 pb-3"><img src="icons/success.png"></div>
			                    <div class="text-strong text-center pt-3 pb-3">
							    	Your Artstore password has been successfully changed. You can now log in to Artstore.
							    </div>
							    <div class="ml-auto mr-auto text-strong">
							    	<button id="newSignIn" class="text-uppercase" data-toggle="modal" data-target="#signIn" data-dismiss="modal" aria-label="Close">SIGN IN</button>
							    </div>
			             </div>';
			}
		}
		else{
		    echo false;
		}
	    
	
    
?>