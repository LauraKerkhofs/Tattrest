<?php
	include_once "models/Tattoo_Table.class.php";
	$tattoo = new Tattoo_Table($db);
	$ink= $tattoo->geefTattoo($_GET['id']);
	switch ($ink->feeling_id){
		case 1:
			$emotie= "Butterflies";
			break;
		case 2:
			$emotie= "Passion";
			break;
		case 3:
			$emotie= "Rough";
			break;
		case 4:
			$emotie= "Other";
			break;
	}
	switch ($ink->vorm_id){
		case 1:
			$stijl= "Minimalism";
			break;
		case 2:
			$stijl= "Geometry";
			break;
		case 3:
			$stijl= "Nature";
			break;
		case 4:
			$stijl= "Other";
			break;
	}
	switch ($ink->plaats_id){
		case 1:
			$plek= "Back";
			break;
		case 2:
			$plek= "Arm";
			break;
		case 3:
			$plek= "Leg";
			break;
		case 4:
			$plek= "Torso";
			break;
		case 5:
			$plek= "Other";
			break;
	}
	$output = include_once "views/detail-html.php";
return $output;
?>


