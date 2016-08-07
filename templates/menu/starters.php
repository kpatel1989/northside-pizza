<?php
include '__DIR__/../business-logic/menu-data.php';
include '__DIR__/../business-logic/menu-item-price-unit.php';
$data = $menuData[$alias];
$units = $menuItemPriceUnit[$alias];
?>
<div class="menu-data">
	<?php foreach ($data as $dataItem) { ?>
		<div class="menu-category">
			<div class="menu-item">
				<div class="col-md-5">
					<div class="name"> <?php echo $dataItem['name'] ?> </div>
					<?php if (isset($dataItem['description'])) { ?>
						<p> <?php echo $dataItem['description'] ?> </p>
					<?php } ?>
					<?php if (isset($dataItem['extra'])) { ?>
						<p> <?php echo $dataItem['exrta'] ?> </p>
					<?php } ?>
				</div>
				<div class="col-md-7">
					<?php foreach ($units as $key => $value) { 
						if (isset($dataItem[$key])) { ?>
							<div class="col-md-3 price">
								<?php if($value != "") {
									$value = $value . " - ";
								}
								if ($dataItem[$key] != "") {
									$dataItem[$key] = "$" . $dataItem[$key];
								}
								echo $value . $dataItem[$key]; ?>
							</div>
						<?php } 
					} ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>