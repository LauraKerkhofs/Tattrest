<?php
	include_once "models/Tattoo_Table.class.php";
	$tattoo = new Tattoo_Table( $db );
	$tattoos = $tattoo->geefAlleTattoos();
	$output = include_once "views/overzicht-html.php";
return $output;
?>

