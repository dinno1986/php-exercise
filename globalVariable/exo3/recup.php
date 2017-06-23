<?php


//affiche les cookies
  $cookie1=$_COOKIE['login'];
  $cookie2=$_COOKIE['mdp'];
  echo "login :"." ".$cookie1." "."mot de passe :".$cookie2;

//modifier les cookies
   setcookie('login', 'Dim', time() + 365*24*3600, null, null, false, true);


?>