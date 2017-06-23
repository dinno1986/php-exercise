<?php

//enregistre dans cookie
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);

 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
<form method="post" action="recup.php">
	

	<label for="login">Login</label>
	<input id="login" type="text" name="login" />
	
	<label for="mdp">Mot de Passe</label>
    <input type="password" name="mdp" />
      
    <button type="submit" value="OK">OK</button>
</form>
</body>
</html>