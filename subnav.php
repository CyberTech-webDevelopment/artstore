<section class='subnav'>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg justify-content-center" id="subnav">
				  <div class='collapse navbar-collapse' id="navbarNavDropdown">
					<ul class="nav nav-pills nav-justified navbar-nav ">
						<?php
						// echo $_SESSION['menu_id'];
                           $sql="SELECT id, sub_menu_name_$lng AS 'sub_menu_name' FROM sub_menu WHERE menu_id=1";
                           $result=mysqli_query($con, $sql);
                           while($row=mysqli_fetch_assoc($result)){
                           	echo "<li class='nav-item'><a class='nav-link' href=''>".$row['sub_menu_name']."</a></li>";
                           }

						?>
						<!-- <li class="nav-item"><a class="nav-link" href=''>Jewelry</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Accessories</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Clothing</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Home & Living</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Childrens</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Entertainment</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Artwork</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Crafts</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Bath & Body</a></li>
						<li class="nav-item"><a class="nav-link" href=''>Wedding/Party</a></li> -->
					</ul>
				 </div>
			   </nav>
			</div>
		</div>
	</section>