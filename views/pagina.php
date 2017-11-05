<?php return
"<!DOCTYPE html>
<html>
	<head>
		<title>$paginaData->titel</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		$paginaData->css
		$paginaData->embeddedStyle
	</head>
	<body>
		<h1>Tattrest</h1>
		$paginaData->content
	</body>
	$paginaData->jsCode
</html>";
?>
