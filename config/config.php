<?php
 $db_name='artstore';
 $host="localhost";
 $password="artstore2020";
 $user="artstore";

$con = mysqli_connect($host, $user, $password, $db_name);
if (!$con) {
    die('error_get_last() ' . mysql_error());
}
else{
// echo 'connent';

}


?>