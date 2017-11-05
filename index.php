<?php
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );

	$dbInfo = "mysql:host=localhost;dbname=tattrest";
	$dbUser = "root";
	$dbPassword = "";
	$db = new PDO( $dbInfo, $dbUser, $dbPassword );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	include_once "models/Pagina_data.class.php";
	$paginaData = new Pagina_Data();
	$paginaData->titel = "Tattrest Toepassing";
	$paginaData->content = include_once "views/navigatie.php";
	$paginaData->addCSS ('css/reset.css');
	$paginaData->addCSS ('css/styling.css');
	$paginaData->addCSS ('css/navigatie.css');

	$navigatieIsClicked = isset($_GET['pagina']);
	if ($navigatieIsClicked ) {
	    $fileToLoad = $_GET['pagina'];
	} else {
	    $fileToLoad = "overzicht";
	}

	$paginaData->embeddedStyle = 
		"<style>
			@import url('https://fonts.googleapis.com/css?family=Leckerli+One|Poiret+One');
		</style>";

	$paginaData->jsCode = 
		"<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script src='//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>";

	$paginaData->jsCode .= "<script src='js/js-code.js'></script>";

	$paginaData->content .=include_once "controllers/$fileToLoad.php";
	$pagina = include_once "views/pagina.php";
echo $pagina;

?>


