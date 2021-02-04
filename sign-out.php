<?php
    if(isset($_GET['logout'])){
    	 setcookie('remember_token', '', time()-1);
    	 session_destroy();
    	 ?>
         <script>location.href='index.php'</script>

    	 <?php
    }
?>