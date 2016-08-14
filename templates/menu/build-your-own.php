<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="menu-data">
	<?php
		$ingredients = array(
			'base',
			'toppings',
			'crust',
			'sauce',
			'cheese',
			'meat',
			'veggies'
		);
		foreach ($ingredients as $item) {
			${$item} = $data[$item];
		}
		$sizeTypes = array('base','toppings');
		$others = array('crust',
			'sauce',
			'cheese',
			'meat',
			'veggies');
	?>

	<?php foreach ($ingredients as $item) { ?>
		<div class="build-your-own-item <?php echo $item; ?>">
			<?php if (array_key_exists('description', $$item)) { ?>
				<div class="description">
					<?php echo ${$item}['description']; ?>
				</div>
			<?php } ?>
			<div class="types-container">
			<?php if (array_key_exists('types', $$item)) {
				foreach (${$item}['types'] as $type) { ?>	
					<div class="type">
						<?php if (!in_array($item, $sizeTypes))  {
							echo $type; 
						} else { ?> 
							<span class='name'><?php echo $type['name']; ?></span>
							<span class='price'><?php echo $type['price']; ?></span>
						<?php } ?> 
					</div>
				<?php }
			} ?>
			</div> 
		</div>
	<?php } ?> 
</div>