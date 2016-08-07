<?php
include '__DIR__/../business-logic/menu-category-data.php';
$alias = $_REQUEST['alias'];
if (in_array($alias, ['signature-gourmet-pizzas','gluten-free-pizzas','dessert-pizzas'])) {
	include 'templates/menu/pizzas.php';
} else if ($alias == 'build-your-own') {
	include 'templates/menu/build-your-own.php';
} else if ($alias == 'yogen-fruz') {
	include 'templates/menu/yogen-fruz.php';
} else {
	include 'templates/menu/starters.php';
}
?>
