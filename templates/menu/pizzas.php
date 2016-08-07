<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="menu-data">
	<div class="col-md-offset-5 col-md-7 unit-container">
	<?php foreach ($units as $key => $value) { ?>
		<div class="col-md-3 unit">
			<?php echo $value; ?>
		</div>
	<?php } ?>
	</div>
	<?php foreach ($data as $dataItem) { ?>
		<div class="menu-item">
			<div class="col-md-5">
				<div class="name"> <?php echo $dataItem['name'] ?> </div>
				<?php if (isset($dataItem['description'])) { ?>
					<p class="description"> <?php echo $dataItem['description'] ?> </p>
				<?php } ?>
				<?php if (isset($dataItem['extra'])) { ?>
					<p class='description extra-info'> <?php echo $dataItem['exrta'] ?> </p>
				<?php } ?>
			</div>
			<div class="col-md-7">
				<?php foreach ($units as $key => $value) { 
					if (isset($dataItem[$key])) { ?>
						<div class="col-md-3 price">
							<?php if ($dataItem[$key] != "") {
								$dataItem[$key] = "$" . $dataItem[$key];
							}
							echo $dataItem[$key]; ?>
						</div>
					<?php } 
				} ?>
			</div>
		</div>
	<?php } ?>
</div>