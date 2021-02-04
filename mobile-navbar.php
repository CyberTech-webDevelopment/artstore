<section class="w-100 mobile-navbar">
	
  <nav class="navbar ">
  	<div class="d-flex align-items-center fixt-top w-100 justify-content-around pl-1 pr-1">
  		<div class="w-25 text-center d-flex">
  			<button class="navbar-toggler pl-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                 <img src="icons/mobile-navbar-icon.png">
        </button>
  		</div>
		  <div class="w-50 text-center"><img src="images/logo.png" class="logo"></div>
      <div class="d-flex align-items-center w-25 justify-content-between mobile-right-div">
            <div class="w-25">
                <button id="nav-sign-in" type="button" class="btn pl-0 pr-0 pb-0 pt-0" data-toggle="modal" data-target="#signIn">
                       <img src="icons/vector.png" >
                </button>     
            </div>
            <div class="w-25">
                  <div class="mobile-favorites-point text-strong">12</div>
                  <img src="icons/vector-heart.png">
            </div>
            <div class="w-25">
                <div class="mobile-cart-point text-strong">12</div>
                <img src="icons/vector-cart.png">
            </div>
      </div>
    </div>       
  </nav>

  <div class="collapse mobile-collapse" id="navbarToggleExternalContent">
    <div class="p-4">
       
       	<div class="input-group mb-4 mobile-input-group">
                <input type="text" class="form-control" aria-label="" id="search">
                <div class="input-group-append">
                     <span class="input-group-text pl-1 pr-1" id="icon-search">
                         <img src="icons/vector-search.png" class="w-75">
                     </span>
                     <span class="input-group-text pl-1 pr-1" id="icon-camera">
                          <img src="icons/vector-camera.png" class="w-75">
                     </span>
                </div>
        </div>
        <div class="">
    		    <div class="list-group list-group-horizontal" id="list-tab-mob" role="tablist">
    		      <a class="list-group-item list-group-item-action active w-50 pt-2 pb-2" id="list-mobile-home-list" data-toggle="list" href="#list-mobile-home" role="tab" aria-controls="home">Homepage</a>
    		      <a class="list-group-item list-group-item-action w-50 pt-2 pb-2" id="list-mobile-nav-list" data-toggle="list" href="#list-mobile-nav" role="tab" aria-controls="profile">Categories</a>
    		    </div>
		        <div class="tab-content" id="nav-tabContent-mob">
		           <div class="tab-pane fade show active" id="list-mobile-home" role="tabpanel" aria-labelledby="list-mobile-home-list">
    		      	   <div class="w-100 text-strong pt-3 pb-3 border-bot">Buy/Sell</div>
    		      	   <div class="w-100 text-strong pt-3 pb-3 border-bot">About Us</div>
    		      	   <div class="w-100 text-strong pt-3 pb-3 border-bot">Contact Us</div>
    		      	   <div class="w-100 text-strong pt-3 pb-3 border-bot">Help</div>
    		      	   <div class="w-100  pt-3 pb-3 border-bot">
		      	   	  <!-- <div class="flags-mob">
				    	  <img src="images/flags/en.png" class='flg-img active-lng'>

		      	   	  	  <div class="hide hide-flags">
				    		<img src="images/flags/am.png" class="flg-img"><br>
				    		<img src="images/flags/ru.png" class="flg-img">
				    	  </div>
				      </div> -->
                     <div class="flags-nav-mobile">
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
		            <div class="tab-pane fade" id="list-mobile-nav" role="tabpanel" aria-labelledby="list-mobile-nav-list">
              
                   <?php
                       include "config/config.php";
                       include "lng.php";
                       $arr_lng=array('am', 'ru', 'en');
                       $sql="SELECT id, menu_name_$lng AS 'menu_name' FROM menu";
                       $result=mysqli_query($con, $sql);
                       while($row=mysqli_fetch_assoc($result)){
                             $row_id=$row['id'];
                    ?>
                           <div class="dropdown mobile-nav ">
                                <div class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-3 pb-0 pt-0">
                                     <div class="w-100 pt-2 pb-2 mr-3 border-bot-right"><?php echo $row['menu_name'] ?></div><div class="pt-2"><i class="fa fa-angle-right"></i></div>
                                </div>
                                       <div class="w-100 dropdown-menu hide menu-first-item pt-0 pb-0">
                                         <?php 
                                           $sql_sub="SELECT id, sub_menu_name_$lng AS 'sub_menu_name' FROM sub_menu WHERE menu_id=$row_id";
                                           $result_sub=mysqli_query($con, $sql_sub);
                                              while($row_sub=mysqli_fetch_assoc($result_sub)){
                                                  $row_sub_menu_id=$row_sub['id'];
                                          ?>
                                                  <div class="dropdown-item pl-0 pt-0 pb-0 pr-rem">
                                                     <div class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-2 pb-2 pl-3 pr-1"><div><?php echo $row_sub['sub_menu_name'] ?></div><div><i class="fa fa-angle-right"></i></div></div>
                                                        <div class="w-100 dropdown-menu hide menu-second-item">
                                                               <?php       
                                                                    $sql_categories="SELECT id, sub_menu_id, name_category_$lng AS 'name_category' FROM sub_categories WHERE menu_id='$row_id'";
                                                                     $result_category=mysqli_query($con, $sql_categories);
                                                                     while($row_sub_categories=mysqli_fetch_assoc($result_category)){
                                                                       $arr_sub_menu_id=explode('-', $row_sub_categories['sub_menu_id']);
                                                                            foreach ($arr_sub_menu_id as $value) {
                                                                                if($row_sub_menu_id==$value){
                                                                                    echo '<div class="dropdown-item">'.$row_sub_categories['name_category'].'</div>';
                                                                                }
                                                                            }
                                                                     }
                                                               ?>
                                                        </div>
                                                   </div>
                                              <?php 
                                               }
                                              ?>
                                       </div>
                            </div>
                        <?php
                         }
                        ?>

                    <!-- ---------------------important---------------------------- -->
                          <div class="dropdown-item "></div>
                                     
                 </div>
		         </div>
           </div>
       
       <!-- <div></div> -->

    </div>
  </div>
</section>