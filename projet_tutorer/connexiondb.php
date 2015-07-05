<?php
	$server = 'localhost';
	$user = 'root';
	$pswd = 'mamati';
	$bd = 'car';
	
	$con = mysql_connect($server, $user, $pswd);
	mysql_select_db($bd) or die ('erreur connexion');	
?>