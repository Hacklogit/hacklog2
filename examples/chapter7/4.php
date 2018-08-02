<?php
	if (isset($_GET['keyword'])
	{
		$query = $_GET['keyword'];
		// Fai qualcosa, ma non trovi il risultato
		echo "<h1>Mi spiace ma non ho trovato nulla con il termine: <span>" . $query . "</span>";
?>