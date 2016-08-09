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
				<div class="col-md-4">
					<div class="name"> <?php echo $dataItem['name'] ?> </div>
					<?php if (isset($dataItem['description'])) { ?>
						<p class="description"> <?php echo $dataItem['description'] ?> </p>
					<?php } ?>
					<?php if (isset($dataItem['extra'])) { ?>
						<p class='description extra-info'> <?php echo $dataItem['exrta'] ?> </p>
					<?php } ?>
				</div>
				<div class="col-md-8">
					<?php
						$unitCount = 0;
						foreach ($units as $key => $value) { 
							if (isset($dataItem[$key])) {
								$unitCount++;
							}
						}
						$unitCount = $unitCount == 0 ? 1 : $unitCount;
						$colSize = 12 / $unitCount; 
						foreach ($units as $key => $value) { 
							if (isset($dataItem[$key])) { ?>
								<div class="col-md-<?php echo $colSize; ?> price">
									<?php if($value != "") {
										$value = " (" . $value . ")";
									}
									if ($dataItem[$key] != "") {
										$string = sprintf("%.2f",$dataItem[$key]);
										$dataItem[$key] = "$" . $string;
									}
									echo $dataItem[$key] . $value; ?>
								</div>
							<?php } 
						} ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>