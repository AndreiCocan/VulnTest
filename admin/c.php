<?php
	$date=date ("l dS of F Y h:i:s A");
	$filename="log.txt";	
	
	// création ou ouverture du fichier de log
	$logfile=fopen("$filename", "a+"); 

	// ecriture des infos
    if (isset($_GET['p'])) {
		// si le parametre est present
		$param = $_GET['p'];
        fputs($logfile, "DATE: $date | PARAM: $param <br>\n");
    }else{
        // Log : pas de parametres
		fputs($logfile, "DATE: $date | PARAM: VIDE <br>\n");
    }
	
	// fermeture du fichier de log
	fclose($logfile);
?>