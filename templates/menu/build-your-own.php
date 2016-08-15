<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="top-content menu-data">
	<div class="container build-your-own-item">
        <div class="row">
            <div class="col-lg-12 form-box">
                	<form role="form" action="" method="post" class="f1">
						<div class="types-container">
                		<div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                			</div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                				<p>Base</p>
                			</div>
                			<div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                				<p>Toppings</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                				<p>Crust</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                				<p>Sauce</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                				<p>Cheese</p>
                			</div>
                		</div>
					<fieldset style="display:block">
	            		<h4>Choose the base..</h4> 
						<?php
							$types = $data['base']['types'];
							foreach ($types as $type) { ?>	
								<div class="type">
									<span class='name'><?php echo $type['name']; ?></span>
									<span class='price'><?php echo $type['price']; ?></span>
									<div class="pizza-size <?php echo $type['name']; ?>">
										<div class="slices"><?php echo $type['slices']; ?></div>
										<div class="people"><?php echo $type['people']; ?></div>
										<div class="pieces">
											<?php $pieces = $type['pieces'];
												for ($i=0; $i < $pieces; $i++) { ?>
												 	<div class="line line<?php echo $i; ?>"></div>
												<?php } 
											?>
										</div>
									</div>
								</div>
							<?php } ?>
							<div class="f1-buttons">
	                            <button type="button" class="btn btn-next">Next</button>
	                        </div>
					</fieldset>
					<fieldset class="toppings">
	            		<h4>Add toppings...</h4> 
						<?php
							$types = $data['toppings']['types'];
							$meatTypes = $types['meat']['types'];
							$veggiesTypes = $types['veggies']['types']; ?>
							<div class="meat-topping">
								<h4> Meat Toppings</h4> 
								<?php foreach ($meatTypes as $type) { ?>	
									<div class="type">
										<span class='name'><?php echo $type; ?></span>
									</div>
								<?php } ?>
							</div>
							<div class="veggie-topping">
								<h4> Veggie Toppings</h4>  
								<?php foreach ($veggiesTypes as $type) { ?>	
									<div class="type">
										<span class='name'><?php echo $type; ?></span>
									</div>
								<?php } ?>
							</div>
							<div class="f1-buttons">
	                    		<button type="button" class="btn btn-previous">Previous</button>												
	                            <button type="button" class="btn btn-next">Next</button>
	                        </div>
					</fieldset>
					<fieldset class="crust">
	            		<h4>Choose the crust...</h4> 
						<?php
							$types = $data['crust']['types'];
							foreach ($types as $type) { ?>	
								<div class="type">
									<span class='name'><?php echo $type; ?></span>
								</div>
							<?php } ?>
							<div class="f1-buttons">
	                    		<button type="button" class="btn btn-previous">Previous</button>												
	                            <button type="button" class="btn btn-next">Next</button>
	                        </div>
					</fieldset>
					<fieldset class="sauce">
	            		<h4>Select the sauce...</h4> 
						<?php
							$types = $data['sauce']['types'];
							foreach ($types as $type) { ?>	
								<div class="type">
									<span class='name'><?php echo $type; ?></span>
								</div>
							<?php } ?>
							<div class="f1-buttons">
	                    		<button type="button" class="btn btn-previous">Previous</button>												
	                            <button type="button" class="btn btn-next">Next</button>
	                        </div>
					</fieldset>
					<fieldset class="cheese">
	            		<h4>Select the cheese...</h4> 
						<?php
							$types = $data['cheese']['types'];
							foreach ($types as $type) { ?>	
								<div class="type">
									<span class='name'><?php echo $type; ?></span>
								</div>
							<?php } ?>
							<div class="f1-buttons">
	                    		<button type="button" class="btn btn-previous">Previous</button>												
	                            <button type="button" class="btn btn-next">Next</button>
	                        </div>
					</fieldset>
					</div> 
				</form>
			</div>
		</div>
	</div>
</div>