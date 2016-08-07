<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="menu-data">
	<?php 
		$flavurs = $data['flavurs'];
		$topIt = $data['top-it'];
		$uSensations = $data['u-sensations'];
		$smoothies = $data['smoothies'];
		$goGreen = $data['go-green'];
		$shakeItUp = $data['shake-it-up'];
		$items = array('flavurs', 'topIt', 'uSensations','smoothies','shakeItUp');
	?>

	<?php foreach ($items as $item) { ?>
		<div class="yogen-fruz-item <?php echo $item; ?>">
			<div class='header'> <?php  echo $item; ?> </div> 
			<?php if (array_key_exists('description', $$item)) { ?>
				<div class="description">
					<?php echo ${$item}['description']; ?>
				</div>
			<?php } ?>
			<div class="price-container">
			<?php foreach ($units as $key => $value) {
				if (array_key_exists($key, $$item)) { ?>
					<div class="price">
						<?php if (${$item}[$key] != "") {
							${$item}[$key] = $value . ${$item}[$key];
						}
						echo ${$item}[$key]; ?>
					</div>
				<?php } 
			}?>
			</div>
			<div class="types-container">
			<?php if (array_key_exists('types', $$item)) {
				foreach (${$item}['types'] as $type) { ?>					
					<div class="type">
						<?php if (!is_array($type)) {
							echo $type; 
						} else { ?> 
							<img src='<?php echo $type['image'] ?>' alt='<?php echo $type['name']; ?>'/> 
							<span class='name'><?php echo $type['name']; ?></span>
						<?php } ?> 
					</div>
				<?php }
			} ?>
			</div> 
			<?php if (array_key_exists('extra', $$item)) { ?>
				<div class="extra">
					<?php echo ${$item}['extra']; ?>
				</div>
			<?php } ?>
		</div>
	<?php } ?> 
</div>