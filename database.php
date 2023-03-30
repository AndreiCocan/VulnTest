<?php
$dsn = 'mysql:dbname=minichat;host=192.168.56.107';
$user = 'insa';
$password = 'insa|asni';
$connected = false;

try{
	$bdd = new PDO($dsn, $user, $password);	
	$connected = true;
}catch (PDOException $e){
	$connected = false;
}
?>