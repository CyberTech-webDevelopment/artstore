<?php
include '../config/config.php';

$return="";
if(!empty($_POST['email'])){
    $email=$_POST['email'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $return = "<div class='invalid'>Invalid email format</div>";
    }
    else{

        $sql="SELECT * from subscribe_newsletter where email='".$email."'";
        $res = mysqli_query($con, $sql);
        $rowcount=mysqli_num_rows($res);

	    if($rowcount==1){
	        $return="<div class='invalid'>Email already exists in the database</div>";
	    }
        else{

			$sql1 = "INSERT INTO subscribe_newsletter (email) VALUES('".$email."')";
			$res1 = mysqli_query($con, $sql1);
			if($res1){
			  $return="Your email is successfully submitted";
			}
        }
    }
}else{
    $return="<div class='invalid'> Fill in email field</div>";


}
 echo($return);
