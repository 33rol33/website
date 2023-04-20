<?php
// connexion à la base de donnée
$con= mysqli_connect("localhost","root","","eco");
// vérifier la connexion
if(!$con) die('Erreur :' .mysqli_connect_error());

?>