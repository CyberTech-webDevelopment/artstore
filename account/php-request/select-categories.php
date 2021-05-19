<?php
include "../../config/config.php";
include "../../lng.php";
if(!empty($_POST['menu_id']) && !empty($_POST['select_id'])){
    $menu_id=mysqli_real_escape_string($con, $_POST['menu_id']);
    $sql="SELECT id, sub_menu_name_$lng AS 'sub_menu_name' FROM sub_menu WHERE menu_id=$menu_id";
    $query=mysqli_query($con, $sql);
    while ($row=mysqli_fetch_assoc($query)) {
    	echo "<option data-sub-menu-id='".$row['id']."'>".$row['sub_menu_name']."</option>";
    }
}
?>