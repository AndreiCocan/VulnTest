<?php
	// ouverture de la session
	session_start();

	// redirection sur le minichat
	header('Location: minichat.php');
	
	// inclution de la connexion a la base de données
	include("./database.php");
	
	
	$user_id = $_SESSION['current_user_id'];
	$message = $_POST['message'];
	
	if($connected){
		$requete = $bdd->prepare('INSERT INTO messages(user_id, message) VALUES (:user_id, :message);');
		$requete->execute(array(
				  'user_id' => $user_id,
				  'message' => $message
				  ));
	}
?>