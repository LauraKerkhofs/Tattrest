<?php
	include_once "models/Tattoo_Table.class.php";
	$tattoo = new Tattoo_Table($db);
	$tattoo->verwijderTattoo( $_GET['id']);
	header("Location: ../grote-opdracht/index.php");
exit;
?>

