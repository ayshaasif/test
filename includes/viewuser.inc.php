<?php 
  class ViewUser extends User{
          
          public function showAllUsers(){
                   $datas = $this->getAllUsers();
                   foreach($datas as $data){
                       echo $data['fname']."<br>";
                       echo $data['lname']."<br>";
                       echo "---------------";
                   }
          }


          public function showFilterUser(){
            $datas = $this->executeQuery();
            echo "<p class='search-results-count'><span> About... ".$datas['count']."</span> results</p>";
            if($datas['count']>0){
              foreach($datas['data'] as $data){
                // print_r(); 
                echo '<section class="search-result-item mt-2">
                <div class="search-result-item-body card mt-3">
                    <div class="row card-body">
                        <div class="col-sm-9 ">
                            <h4 class="search-result-item-heading"><a href="#"><b>'.$data['fname'].' '.$data['lname'].'</b></a></h4>
                            <p align = "right" class="info">Batch of : '.$data['yearofgraduation'].'</p>
                            <p class="description">Not just usual Metro. But something bigger. Not just usual widgets, but real widgets. 
                            Not just yet another admin template, but next generation admin template.
                            </p>
                            <p>'.$data['specialization'].'</p>
                        </div>
                    </div>
                </div>
             </section>';
            }
              }else{
              echo '<section class="search-result-item">
              <div class="search-result-item-body">
                  <div class="row">
                      <div class="col-sm-9">
                          <h4 class="search-result-item-heading"><a href="#"><b>No record Found</b></a></h4>
                      </div>
                  </div>
              </div>
           </section>';
            }
         }


  }        

?> 