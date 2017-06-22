<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
<form method="post" action="index.php">
	<select name="genre">
		<option value="Mr">Mr</option>
		<option value="Mme">Mme</option>
	</select>

	<label for="nom">Nom</label>
	<input id="nom" type="text" name="nom" />
	
	<label for="prenom">Prénom</label>
    <input type="text" name="prenom" />
      
    <button type="submit" value="OK">OK</button>
</form>

<?php
	$genre=$_POST['genre'];
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];

	echo($genre." ".$prenom." ".$nom);

?>


</body>
</html>