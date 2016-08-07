<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="menu-data">
	<?php foreach ($data as $pizzaCategory) { ?>
		<div class="menu-category">
		<h1><?php echo $pizzaCategory['name'] ?></h1>
			<?php foreach ($pizzaCategory['pizzas'] as $pizza) { ?>
				<div class="menu-item">
					<div class="col-md-5">
						<div class="name"> <?php echo $pizza['name'] ?> </div>
						<?php if (isset($pizza['description'])) { ?>
							<p> <?php echo $pizza['description'] ?> </p>
						<?php } ?>
						<?php if (isset($pizza['extra'])) { ?>
							<p> <?php echo $pizza['exrta'] ?> </p>
						<?php } ?>
					</div>
					<div class="col-md-7">
						<?php foreach ($units as $key => $value) { 
						if (isset($pizza[$key])) { ?>
							<div class="col-md-3 price">
								<?php if($value != "") {
									$value = $value . " - ";
								}
								echo $value . " $" . $pizza[$key]; ?>
							</div>
						<?php } 
					} ?>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
</div>