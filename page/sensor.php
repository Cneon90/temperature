<? 

											$items = $base->getAll("SELECT * FROM `sensor`");
													foreach ($items as $key => $value):

									?>

							 <div class="device"> 
									<div class="name centr"> 
											<?php echo $items[$key]['name'] ?>				 
							 
									</div> 
									
									 <div class="znak centr"> 
											<?php echo $items[$key]['alias'] ?>				 
							 
									</div> 
									</div>
							 <?php endforeach;?>