<?php
if(isset($_POST['lng'])){
	$language=$_POST['lng'];
	setcookie('lng', $language, time()+(86400*30));
}
?>