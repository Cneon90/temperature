<? 

											$items = $base->getAll("SELECT * FROM `temperature`");
													foreach ($items as $key => $value):

									?>

							 <div class="device"> 
									<div class="name centr"> 
											<?php echo $items[$key]['data'] ?>				 
							 
									</div> 
									
									 <div class="znak centr"> 
											<?php echo $items[$key]['temper'] ?>				 
							 
									</div> 
									</div>
							 <?php endforeach;?>