<?php include '__DIR__/../business-logic/offers.php';
?>

<div class="container offers">
	<?php foreach ($offers as $offer) { ?>
			<div class="offer">
				<div class="vertical-aligner">
				<div class="offer-name"><span><?php echo $offer['name']; ?></span></div>
				</div>
				<div class="offer-description"><?php echo $offer['description']; ?></div>
				<div class="offer-extra"><?php echo $offer['extra']; ?></div>
				<div class="offer-price">
				<?php 
					$string = sprintf("%.2f",$offer['price']);
					echo $string; 
				?>
				</div>
			</div>
	<?php	}
	?>
</div>