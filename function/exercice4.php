<?php

function nombre(){
	$a=8;
	$b=8;

	if ($a===$b) {
		echo "les 2 nombres sont identiques";		
	}

	elseif ($a<$b) {
		echo "le 1er nombre est plus petit";
	}

	else {
		echo "le 1er nombre est plus grand";
	}

}

echo nombre();

?>