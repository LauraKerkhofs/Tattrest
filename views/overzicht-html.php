<?php
	$out = "<body><h2>Overview</h2>
		<div class='filters'>
			<div class='ui-group'>
				<h3>Feeling</h3>
				<div class='button-group js-radio-button-group' data-filter-group='feeling'>
					<button class='button is-checked' data-filter=''>All</button>
					<button class='button' data-filter='.butterflies'>Butterflies and fluff</button>
					<button class='button' data-filter='.passion'>Passion</button>
					<button class='button' data-filter='.rough'>Rough</button>
					<button class='button' data-filter='.other1'>Other</button>
				</div>
			</div>

			<div class='ui-group'>
				<h3>Form</h3>
				<div class='button-group js-radio-button-group' data-filter-group='vorm'>
					<button class='button is-checked' data-filter=''>All</button>
					<button class='button' data-filter='.minimalism'>Minimalism</button>
					<button class='button' data-filter='.geometry'>Geometry</button>
					<button class='button' data-filter='.nature'>Nature</button>
					<button class='button' data-filter='.other2'>Other</button>
				</div>
			</div>

			<div class='ui-group'>
				<h3>Place</h3>
				<div class='button-group js-radio-button-group' data-filter-group='plaats'>
					<button class='button is-checked' data-filter=''>All</button>
					<button class='button' data-filter='.back'>Back</button>
					<button class='button' data-filter='.arm'>Arm</button>
					<button class='button' data-filter='.leg'>Leg</button>
					<button class='button' data-filter='.torso'>Torso</button>
					<button class='button' data-filter='.other3'>Other</button>
				</div>
			</div>
		</div>


		<div class='kader'>";
	while($ink = $tattoos->fetchObject()){
		switch($ink->feeling_id){
			case 1:$emotie= "butterflies";break;
			case 2:$emotie= "passion";break;
			case 3:$emotie= "rough";break;
			case 4:$emotie= "other1";break;
		}
		switch ($ink->vorm_id){
			case 1:$stijl= "minimalism";break;
			case 2:$stijl= "geometry";break;
			case 3:$stijl= "nature";break;
			case 4:$stijl= "other2";break;
		}
		switch ($ink->plaats_id){
			case 1:$plek= "back";break;
			case 2:$plek= "arm";break;
			case 3:$plek= "leg";break;
			case 4:$plek= "torso";break;
			case 5:$plek= "other3";break;
		}
	$out .= "<div class='afbeeldingen $emotie $stijl $plek'>
				<a href='index.php?pagina=detail&id=$ink->tattoo_id'>
					<div class='foto'>
						<img src='img/$ink->afbeelding' alt='$ink->titel'>
					</div>
					<h3>$ink->titel</h3>
				</a>
			</div>";}
	$out .= "</div><div style='clear:both;'></div></body>";
return $out;
?>


