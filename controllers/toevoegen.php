<?php
	$dataOpgestuurd = isset( $_POST['toevoegen'] );
	if ( $dataOpgestuurd) {
		invoerenDatabank($db);
		$output = afbeeldingOpladen();
		header("Location: ../grote-opdracht/index.php");
		exit;
	} else {
		$output = include_once "views/toevoegen-html.php";
	}
return $output;

function invoerenDatabank($db){
	include_once"models/Tattoo_Table.class.php";
	$tattoo = new Tattoo_Table($db);
	$inputtitel =$_POST['titel'];
	$inputName =$_POST['titel'] .".jpg";
	$imageName =str_ireplace(' ','-',$inputName);
	$feelingid = $_POST['emotie'];
	$vormid = $_POST['stijl'];
	$plaatsid = $_POST['plek'];
	$tattoo->saveTattoo($inputtitel,$feelingid,$vormid,$plaatsid,$imageName);
}

function afbeeldingOpladen(){
	$inputName =$_POST['titel'] .".jpg";
	$imageName =str_ireplace(' ','-',$inputName);
	include_once "models/Oplader.class.php";
	$oplader = new Oplader( "image-data" );
	$oplader->saveIn("img");
	$fileUploaded = $oplader->save($imageName);
	if ($fileUploaded) {
		$out = "nieuw bestand opgeladen naam is $imageName";
	} else {
		$out = "er is iets foutgelopen";
	}
}

