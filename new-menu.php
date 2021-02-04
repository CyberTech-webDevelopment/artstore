
  <section id='navbar'>
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg justify-content-end">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
          <div class='collapse navbar-collapse' id="navbarNavDropdown">
          <ul class="nav nav-pills nav-justified navbar-nav align-self-stretch list-group" id="list-tab" role="tablist">
                  <?php
                            while($row=mysqli_fetch_assoc($result)){
                              echo "<li class='d-flex nav-item justify-content-center align-items-center'><a class='nav-link first-nav-link'  id=list-".$row['id']."-list data-toggle='list' href='#list-".$row['id']."' role='tab' aria-controls='home'>".$row['menu_name']."</a></li>";
                            }
                   ?>
          </ul>
        </div>
      </nav>
        <div class="tab-content tab-content-sub-menu" id="nav-tabContent">
          <?php
          $sql1="SELECT id, menu_name_$lng AS 'menu_name' FROM menu";
          $result1=mysqli_query($con, $sql1);
                            while($row1=mysqli_fetch_assoc($result1)){
                              $row1_id=$row1['id'];
                              echo '<div class="tab-pane first-tab-pane fade" id="list-'.$row1['id'].'" role="tabpanel" aria-labelledby="list-'.$row1['id'].'-list">
                              <nav class="navbar navbar-expand-lg justify-content-end" id="subnav">
                                <div class="collapse navbar-collapse scroll-div" id="navbarNavDropdown">
                                <ul class="d-flex flex-nowrap nav nav-pills nav-justified navbar-nav align-self-stretch list-group" id="list-tab" role="tablist">';
                                
                       $sql_sub="SELECT id, sub_menu_name_$lng AS 'sub_menu_name' FROM sub_menu WHERE menu_id=$row1_id";
                       $result_sub=mysqli_query($con, $sql_sub);
                            while($row_sub=mysqli_fetch_assoc($result_sub)){
                              echo "<li class='d-flex nav-item nav-second-li justify-content-center align-items-center'><a class='nav-link'  id=list-sub-".$row_sub['id']."-list data-toggle='list' href='#list-sub-".$row_sub['id']."' role='tab' aria-controls='home'>".$row_sub['sub_menu_name']."</a></li>";
                            }
             echo "</ul>
                   </div>
                   </nav>";
             echo '<div class="tab-content tab-content-sub-menu" id="nav-tabContent">';
                       $sql_sub11="SELECT id, sub_menu_name_$lng AS 'sub_menu_name' FROM sub_menu WHERE menu_id=$row1_id";
                       $result_sub11=mysqli_query($con, $sql_sub11);
                        $left=0;
                            while($row_sub11=mysqli_fetch_assoc($result_sub11)){   
                              $sub_menu_id=$row_sub11['id'];

                      echo '<div style="left: '.$left.'%" class="tab-pane fade sub-categories" id="list-sub-'.$row_sub11['id'].'" role="tabpanel" aria-labelledby="list-sub-'.$row_sub11['id'].'-list">
                            <div class="" id="navbarNavDropdown1">
                            <div class="nav nav-pills nav-justified navbar-nav align-self-stretch list-group" id="list-tab1" role="tablist">';
                        echo '<div class="d-flex"><div>';     
                             $sql_categories="SELECT id, sub_menu_id, name_category_$lng AS 'name_category' FROM sub_categories WHERE menu_id=$row1_id;";
                             $result_category=mysqli_query($con, $sql_categories);
                             $num_rows=mysqli_num_rows($result_category);
                                  $count=0;

                                while($row_category=mysqli_fetch_assoc($result_category)){
                                  $arr_sub_menu_id=explode('-', $row_category['sub_menu_id']);
                                 
                                    foreach ($arr_sub_menu_id as $value) {
                                        if($sub_menu_id==$value){
                                          $count++;

                                            echo '<div class="mt-1 mb-1 text-strong">'.$row_category['name_category'].'</div>';
                                            if($count==6){
                                              echo '</div><div class="ml-5">';
                                            }
                                        }
                                    }
                                }

                            echo '</div></div></div></div></div>';
                              $left+=10;

        }
     echo "</div></div>";
    } 
    ?>
        </div>
      </div>
    </div>
  </section>
