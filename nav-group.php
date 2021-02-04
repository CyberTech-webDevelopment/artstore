<?php 
   include "config/config.php";
   include "lng.php";
   $arr_lng=array('am', 'ru', 'en');
   
   $sql="SELECT id, menu_name_$lng AS 'menu_name' FROM menu";
   $result=mysqli_query($con, $sql);
?>
<section class="nav-group">
	<section class="header">
		<div class="container-fluid">
			<div class="row">
			    <div class=" align-self-stretch  align-items-stretch col-md-2 logo"><a href="index.php"><img src="images/logo.png" ></div></a>
			    <div class="align-self-end col-md-7">
				    <div class="input-group mb-4">
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="search">
                        <div class="input-group-append">
                            <span class="input-group-text" id="icon-search">
                            	<img src="icons/vector-search.png">
                            </span>
                            <span class="input-group-text" id="icon-camera">
                            	<img src="icons/vector-camera.png">
                            </span>
                        </div>
                    </div>
			    </div>
			    <div class="align-self-end col-md-3">
				    <div class="d-flex hrader-left">
				    	<div  class="flex-fill orange">Sell on Artstore</div>
				    	<div class="flex-fill">About Us</div>
				    	<div class="flex-fill">Contact Us</div>
				    	<div class="flex-fill">Help</div>
				    	<div class="flex-fill ">
				    		<div class="flags-nav">
						    <?php
									echo "<img src='images/flags/$lng.png' class='flg-nav-img active-nav-lng' name='$lng'>";
									echo "<div class='hide hide-flags'>";
										foreach ($arr_lng as $value) {
													if($value!=$lng){
														echo "<img src='images/flags/$value.png' class='flg-nav-img mt-1' name='$value'><br>";
													}	    	  	
										}	
			                        echo "</div>";			    	 
				            ?>
				            </div>
				    	</div>
				    </div>
				    <div class='d-flex d-flex justify-content-center align-self-end mb-4 mt-4 icons '>
				    	<div class="btn-group">
				    		<?php
                                   if(!empty($_COOKIE['remember_token_cookie']) || isset($_SESSION['user'])){
                                     echo '<button type="button" class="btn dropdown-toggle text-strong" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Log In
                                         </button>
				                        <div class="dropdown-menu">
										  	 <a class="dropdown-item text-strong" href="#"></a>
										     <div class="dropdown-divider"></div>
										     <a class="dropdown-item" href="#">Messages</a>
										     <a class="dropdown-item" href="#">Purchases</a>
										     <a class="dropdown-item" href="#">Account Settings</a>
										     <div class="dropdown-divider"></div>
										     <a class="dropdown-item sign-out" href="?logout" >Sign Out</a>
										</div>';
									}
									else{
										echo '<button id="nav-sign-in" type="button" class="btn" data-toggle="modal" data-target="#signIn">
                                                   <img src="icons/vector.png">
                                              </button>';
									}

				    		?>
                            
                            
                            <!-- <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src='icons/vector.png'>
                            </button> -->
						    <!-- <div class="dropdown-menu">
						  	 <a class="dropdown-item" href="#">Name Surname</a>
						     <div class="dropdown-divider"></div>
						     <a class="dropdown-item" href="#">Messages</a>
						     <a class="dropdown-item" href="#">Purchases</a>
						     <a class="dropdown-item" href="#">Account Settings</a>
						     <div class="dropdown-divider"></div>
						     <a class="dropdown-item" href="#">Sign Out</a>
						    </div> -->
						</div>
						<div class="btn-group ">
                            <button type="button" class="btn" >
                              <img src='icons/vector-heart.png'>
                            </button>
							<div>12</div>
                        </div>
						<div class="btn-group">
                            <button type="button" class="btn" >
                              <img src='icons/vector-cart.png'>
                            </button>
							<div>0</div>
                        </div>
				    </div>
			    </div>
			</div>
		</div>
	</section>
	<!-- <section id='navbar'>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg justify-content-end">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
				  <div class='collapse navbar-collapse ' id="navbarNavDropdown">
					<ul class="nav nav-pills nav-justified navbar-nav align-self-stretch ">
						
						<li class="nav-item"><a class="nav-link" href=''>Jewelry</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Accessories</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Clothing</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Home & Living</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Childrens</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Entertainment</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Artwork</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Crafts</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Bath & Body</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Wedding/Party</a></li>
					</ul>
				</div>
			</nav>
			</div>
		</div>
	</section>
 -->
	<?php 
	include "new-menu.php";
	// include "subnav.php"; ?>
	</section>
	<section id="hidden"><div class="row h-100"><div class="w-100 h-100 back-hidden"></div></div></section>