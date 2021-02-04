<?php
include "config/config.php";
	
	if(!isset($_GET['email']) || !isset($_GET['token'])){
		// redirect();
	}
	else{
        
		$email= mysqli_real_escape_string($con, $_GET['email']);
		$token= mysqli_real_escape_string($con, $_GET['token']);
		
		$sql="SELECT id FROM users WHERE email='$email' AND token='$token' AND confirmed_email_status=1 AND send_link_email_date>(NOW() - INTERVAL 24 HOUR)";
    // 24 HOUR
		$result=mysqli_query($con, $sql);
    		if(mysqli_num_rows($result) == 1){
    		   ?>
              <script>
                      $(document).ready(function(){
                          $('#s11').trigger('click');
                      }); 
              </script>
           <?php
    			
    		}
    		else{
          ?>
              <script>
                      $(document).ready(function(){
                          $('#timelmtd').trigger('click');
                      }); 
              </script>
          <?php
    	  }
    }
?>
<button type="button" id="s11" class="btn pl-3 pt-1 sign-up text-strong close" data-toggle="modal" data-target="#changePassword" data-dismiss="modal" aria-label="Close">
                             SIGN UP
</button>

<button type="button" id="timelmtd" class="btn pl-3 pt-1 sign-up text-strong close" data-toggle="modal" data-target=".timelimited" data-dismiss="modal" aria-label="Close">
                             SIGN UP
</button>
<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#signIn" data-dismiss="modal">
          <span aria-hidden="true"><img src="icons/left-arrow.png"></span>
        </button>
        <h5 class="modal-title text-strong" id="exampleModalLabel4">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="row">
      <div class="modal-body" id="new-password-changed">
        
        <div class="mt-3 mb-3 pt-4 pb-4">
           
            <div class="form-group parent">
             <label  class="text-strong">New Password</label>
             <span class="required hide"> &nbsp *</span>
             <div class="input-group">
                <input type="password" class="form-control change-inp" id="change-pass" class="password" min="8" max="16" data-name='0'>
                <div class="input-group-append">
                           <span class="input-group-text eye-span" id="change-password-icon-lock">
                                <img src="icons/icon-lock.png">
                           </span>
                      </div>
             </div>
             <div class="invalid-inp invalid-pass float-left" ></div>
          </div>

           <div class="form-group parent pt-4">
             <label  class="text-strong">Confirm Password</label>
             <span class="required hide"> &nbsp *</span>
             <div class="input-group">
                <input type="password" class="form-control change-inp" id="confirm-change-pass" class="password" min="8" max="16" data-name='0'>
             </div>
             <div class="invalid-inp invalid-pass float-left" ></div>
          </div>
           <input type="hidden" value="<?php echo $_GET['email'];?>" id="hidden-inp">
          <button type="submit" class="btn sign-in mt-2 text-strong text-uppercase" id="change-password">DONE</button>
        </div>
        <div class="password-changed"></div>
      </div>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade timelimited" tabindex="-1" aria-labelledby="exampleModalLabel55" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="row">
      <div class="modal-body mt-4 mb-4 text-strong text-center" id="">
        <p>Your reset passoword time confirm is expired.</p>
        <p>Please registered again.</p>
        
      </div>
      
      </div>
    </div>
  </div>
</div>

 