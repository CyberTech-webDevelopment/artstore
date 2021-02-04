<?php

	if(isset($_GET['email_mail']) && isset($_GET['token'])){

		$email= $con->real_escape_string($_GET['email_mail']);
		$token= $con->real_escape_string($_GET['token']);
		
		$sql=$con ->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND confirmed_email_status=0 AND date>(NOW() - INTERVAL 24 HOUR)");
		if($sql->num_rows > 0){
			$con->query("UPDATE users SET  confirmed_email_status=1, token='' WHERE email='$email'");
                    ?>
                        <script>
                          $(document).ready(function(){
                               $('#nav-sign-in').trigger('click');
                          }); 
                       </script>
                    <?php
		}
		else{
			?>
                 <script>
                          $(document).ready(function(){
                               $('#s12').trigger('click');
                          }); 
                </script>
            <?php
	    }
    }
?>
<button type="button" id="s12" class="close" data-toggle="modal" data-target="#timelimited" data-dismiss="modal" aria-label="Close">
                             SI12
</button>
<div class="modal fade" id="timelimited" tabindex="-1" aria-labelledby="exampleModalLabel55" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="row">
      <div class="modal-body mt-4 mb-4 text-strong text-center" id="">
        <p>Your confirm email time confirm is expired.</p>
        <p>Please registered again.</p>
        
      </div>
      
      </div>
    </div>
  </div>
</div>