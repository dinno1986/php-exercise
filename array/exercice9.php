
<?php
$region = array (
	'02' => 'Aisne',
	'59' => 'Nord',
	'60' => 'Oise',
	'62' => 'Pas de Calais',
	'80' => 'Somme',
	);

foreach ($region as $cle=>$valeur) {
	echo $cle.' : '.$valeur. '<br/>';
}