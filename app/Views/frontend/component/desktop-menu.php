<?php 
$arr = $base['json_menu'];
$arr = json_decode($arr->json);
// print_r($arr);
// echo '<br>';
?>
<div class="header-bottom header_index_new header-sticky pt-md-20 pb-md-20 d-none d-lg-block" style="">
         <div class=" container wide ">
            <div class="header_new_index_container">
               <div class="site-main-nav">
                  <nav class="site-nav center-menu">
                     <ul>
                        <?php 
                            foreach($arr as $arr){
                                //print_r($arr);
                                //echo '<br>';
                                if(isset($arr->children)){
                                    echo '<li class="menu-item-has-children ">
                                            <a href="'.base_url().'/'.$arr->href.'">'.$arr->text.'</a>
                                            <ul class="sub-menu single-column-menu">';
                                            foreach($arr->children as $val){
                                                echo '<li class="drop_item"><a href="'.base_url().'/'.$arr->href.'">'.$arr->text.'</a></li>';
                                            }
                                            echo '</ul>
                                        </li>';
                                }else{
                                    echo '<li class="drop_item"><a href="'.base_url().'/'.$arr->href.'">'.$arr->text.'</a></li>';
                                }
                            }
                        ?>
                        
                     </ul>
                     <script> /* Mega Menu */ $('.mega_dropdown').parent('ul').addClass('mega-menu'); $('.drop_item').parent('ul').addClass('single-column-menu'); $('.multi_item').parent('ul').addClass('single-column-menu ');</script> 
                  </nav>
               </div>
            </div>
         </div>
      </div>

