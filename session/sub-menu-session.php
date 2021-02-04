<?php
session_start();
if(isset($_POST['menu_id'])){
	$menu_id=$_POST['menu_id'];
	$_SESSION['menu_id']=$menu_id;
}

?>