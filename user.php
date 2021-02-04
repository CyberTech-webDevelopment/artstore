<?php
session_start();
function redirect(){

	    header('location: index.php');
		exit();
	}
if(!empty($_COOKIE['remember_token']) || !empty($_SESSION['remember_token'])){
echo "HEllo user";

}
else{
    redirect();
}

?>