<?php return
	"<h2>$ink->titel</h2>
	<div class='kaderdetail'>
		<img src= img/$ink->afbeelding alt=$ink->titel>
		<h3>Feeling: $emotie</h3>
		<h3>Form: $stijl</h3>
		<h3>Place: $plek</h3>
		<a class='button' href='index.php?pagina=overzicht'>Back to overview</a>
		<a class='button' href='index.php?pagina=verwijderen&id=$ink->tattoo_id'>Delete this tattoo</a>
	</div>";
?>

