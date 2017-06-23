
<?php

session_start();

$_SESSION ['nom'] ="castell";
$_SESSION ['prenom'] ="dimitri";
$_SESSION ['age'] =31;




?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        <?php echo $_SESSION['nom'].$_SESSION['prenom'].$_SESSION['age']; ?> <br />
    </p>
    <p>
        <a href="suite.php">Lien vers mapage.php</a><br />
        
    </p>
    </body>
</html>