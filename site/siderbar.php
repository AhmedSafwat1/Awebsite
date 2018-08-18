<?php include_once "include/init.php"?>
 <div id="sidebsr">
        	
			<?php 
			   include_once './include/autoloader.php';
			   try{
				  
				  autoloader('sectiondisplay') ;
				  autoloader('delsection');
				  $obj_s = new displaysection("section");
				  $data_s_info =$obj_s->data;
				  for ($i=0; $i < count($data_s_info) ; $i++)
				  {
					  if($data_s_info[$i]['section_name'] != 'general page'){
					echo "<div class=\"side  \">";
					echo "<div class=\"side_head\"><h1>".$data_s_info[$i]['section_name']."</h1></div>";
					$obj_p = new del("pages");
                    try{
						$data_p_info =$obj_p->getdatabyidandcolum(( $data_s_info[$i]['section_id']),'section_id');
						if($data_p_info){
							echo "<div class=\"side_body\">";
							 echo "<ul>";
							 for ($j=0; $j <count($data_p_info ); $j++) 
							 { 
								echo "<li><a href='?page=page&id=".$data_p_info[$j]['page_id']."'>".$data_p_info[$j]['page_name'].".</a></li>";
							 }
							echo "</ul>";
							echo "</div>";

						}
					}catch(Exception $ex)
					{
					}
					echo "</div>";
			      	}
				  }
	
				}catch(Exception $ex)
				  {
					  echo $ex->getMessage();
				  }
				  ?>
				  <!-- `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username` -->
        	<div class="side">
            	<div class="side_head"><h1>Side bar items here !</h1></div>
                <div class="side_body">
					<form>
                    	<input type="text" placeholder="write your name here!"   required/><br />
                        <input type="text" placeholder="write your email here!"   required/><br />
                        <input type="submit" value="Subscribe" />
                    </form>
                </div>
            </div>
</div> 
       