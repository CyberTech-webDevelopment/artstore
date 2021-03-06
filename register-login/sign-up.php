<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" id="modal-header">
        <h5 class="modal-title text-uppercase text-strong" id="exampleModalLabel">sigin up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="row">
      <div class="modal-body" id="newSignUP">
      	<div>
	         	<div class="form-group parent">
	         		<div>
					    <label  class="text-strong">Username</label>
					    <span class="required hide"> &nbsp *</span>
					    <input type="text" class="form-control reg-inp " id="reg-name" min="6" max="29" data-name='0'>
				    </div>
				    <div class="invalid-inp invalid-name" ></div>
				  </div>
				  <div class="form-group parent">
				  	<div>
					    <label  class="text-strong">E-mail</label>
					    <span class="required hide"> &nbsp *</span>
					    <input type="email" class="form-control reg-inp" id="reg-mail" data-name='0'>
				   </div>
				    <div class="invalid-inp invalid-mail" ></div>
				  </div>
				  <div class="form-group parent">
				     <label  class="text-strong">Password</label>
				     <span class="required hide"> &nbsp *</span>
				     <div class="input-group">
						    <input type="password" class="form-control reg-inp" id="reg-pass" min="8" max="16" data-name='0'>
						    <div class="input-group-append">
			                     <span class="input-group-text eye-span" id="icon-lock">
			                          <img src="icons/icon-lock.png">
			                     </span>
			                </div>
				     </div>
				     <div class="invalid-inp invalid-pass" ></div>
				  </div>
				  <div class="custom-control custom-checkbox my-1 mr-sm-2 parent">
				  	<div>
					    <input type="checkbox" class="custom-control-input reg-inp check" id="customControlInline1" value="" min="0" max='1' name='check' data-name='0'>
					    <label class="custom-control-label text-strong" for="customControlInline1" id="agree">Agree to <a href="">Terms of Use and Privacy Policy.</a></label>
					    <span class="required hide"> &nbsp *</span>
				  </div>
				  </div>
				  <div class="d-flex justify-content-center" id="chaptcha-parent">
					  	<div id="recaptchaid" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
					    <span class="required hide" id="required-captcha"> &nbsp *</span>	
				  </div>
                  <p class="result"></p>
				  <button type="" class="btn sign-in mt-2 text-strong" id="registration">SIGN UP</button>
	    </div>
		<div class="d-flex justify-content-center mt-2">
			<hr width="30%" class="mt-2 mr-2" color='#fefffd'>
			<span class="text-strong or">OR</span>
			<hr width="30%" class="mt-2 ml-2"  color='#fefffd'>
		</div>
		<div class="text-center pb-4">
			<div class="text-strong mt-4 mb-4">Sign in with</div>
			<div class="d-flex justify-content-center ">
				<div class="ml-2 mr-2 facebook1"><img src="icons/facebook.png"></div>
				<div class="ml-2 mr-2 google1"><img src="icons/google.png"></div>
			</div>
		</div>
      </div>
      </div>
      <div class="modal-footer" id="modal-footer">
	      <div class="text-center footer-div">
	      	<span class="text-strong">Have an Account?</span>
	      	<button type="button" id="sign-in" class="btn pl-3 pt-1 sign-up text-strong close" data-toggle="modal" data-target="#signIn" data-dismiss="modal" aria-label="Close">
                             SIGN IN
            </button>
	      </div>
      </div>
    </div>
  </div>
</div>







