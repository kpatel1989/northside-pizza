<?php include '__DIR__/../business-logic/menu-category-data.php';?>
<div class="menu-categories">
	<?php foreach($menuCategories as $category) {?>
		<div class="menu" data-alias="<?php echo $category['alias'] ?>">
			<a href="#<?php echo $category['alias'] ?>">
				<?php echo $category['display-name'];
					if ($category['alias'] == 'yogen-fruz') {
						echo '<span>click here !</span>';
					}
				?>
			</a>
		</div>
	<?php } ?>
</div>
<div id="menu-items-container">
</div>
