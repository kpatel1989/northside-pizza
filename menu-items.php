<?php
include '__DIR__/../business-logic/menu-category-data.php';
$alias = $_REQUEST['alias'];
if ($alias == 'pizzas'  ) {
	include 'templates/menu/pizzas.php';
} else {
	include 'templates/menu/starters.php';
}
?>
