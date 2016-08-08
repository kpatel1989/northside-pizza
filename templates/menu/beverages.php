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
					<table>
					<?php
						
						$unitCount = 0;
						if (isset($dataItem['types'])) {
							$unitCount = count($dataItem['types']);	
						} else {
							foreach ($units as $key => $value) {
								if (isset($dataItem[$key])) {
									$unitCount++;
								}
							}
						}
						$colSize = 12 / $unitCount; 
						foreach ($units as $key => $value) {
							if (isset($dataItem['types'])) {
								if (isset($dataItem['types'][$key])) {
									$types = implode(", ", $dataItem['types'][$key]); ?>
									<tr>
										<td><div class="col-md-2 unit"><?php echo $value; ?></div>
										<div class="col-md-10 price"><?php echo $types; ?></div></td>
									</tr>
							<?php }
							} else {
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
							}
						}
					?>
					</table>
				</div>
			</div>
		</div>
	<?php } ?>
</div>