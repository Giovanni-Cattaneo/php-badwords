<?php 

$phrase = $_POST["phrase"];
$badWord = $_POST["badWord"]; //recuperiamo con la super globale i risultati dei due input

$phraseLength = strlen($phrase); // strlen come .length ci permette di sapere il n. dei caratteri


$badWordLength = strlen($badWord); 

$censorSymbol = str_repeat('*', $badWordLength); // con repeat moltiplichiamo l'input * per un numero che è la lunghezza in caratteri aggiunto +1 tanto per divertirmi con la concatenazione

$censored = str_ireplace($badWord, $censorSymbol, $phrase); // con str_ireplace sostituiamo alla prima variabile la seconda nella posizione occupata dalla variabile in cui la vogliamo

$censoredLength = strlen($censored);

echo "<p>Frase: $censored</p>";
echo "<p>Lunghezza della Frase: $phraseLength caratteri</p>";  //con echo buttiamo in template i risulatti della frase


?>
