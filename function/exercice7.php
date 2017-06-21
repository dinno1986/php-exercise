<?php

function situation ($genre,$age){

	if ($genre===homme && $age>18){
		echo "tu es un homme majeur";
	}

	elseif ($genre===homme && $age<18) {
		echo "tu es un homme mineur";
	}

	elseif ($genre===femme && $age>18) {
		echo "tu es une femme majeure";
	}

	else{
		echo "tu es une femme mineure";
	}
}

echo situation("homme","19");