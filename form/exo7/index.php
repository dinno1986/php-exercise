<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="index.php" enctype="multipart/form-data">

		<select name="genre">
			<option value="Mr">Mr</option>
			<option value="Mme">Mme</option>
		</select>

		<label for="nom">Nom</label>
		<input id="nom" type="text" name="nom" />

		<label for="prenom">Prénom</label>
		<input type="text" name="prenom" />

		<label for="fichier">fichier</label>
		<input type="file" name="fichier" />

		<button name="button" type="submit" value="OK">OK</button>

		<?php


if (isset($_FILES[fichier])) {

	$extensions_valides = array( 'pdf' ,  );
	//1. strrchr renvoie l'extension avec le point (« . »).
	//2. substr(chaine,1) ignore le premier caractère de chaine.
	//3. strtolower met l'extension en minuscules.
	$extension_upload = strtolower(  substr(  strrchr($_FILES['fichier']['name'], '.')  ,1)  );
	if ( in_array($extension_upload,$extensions_valides) ) echo " Envoi du fichier Extension correcte"." ".'<br/>';
	else{
		echo" le fichier doit être au format pdf";
	}
}

	


	
   	$genre=$_POST['genre'];
	 $prenom=$_POST['prenom'];
	  $nom=$_POST['nom'];
	 $fichier=$_FILES[',name'];
	 echo($genre." ".$prenom." ".$nom." ".$fichier);   
	?>

	</form>

</body>
</html>


