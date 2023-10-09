<?php

//creo le variabili di cui ho bisogno

//variabili ottenute con la value dei form
$words = $_POST["words"];
$censoredword = $_POST["censoredword"];

//otteere il numero dei caratteri tramite il testo inserito nel form
$words_length = strlen($words);

//censurare la parola (inserita nel secondo input) presente all'interno del testo
$badword = str_replace($censoredword, '*****' , $words);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Window</title>
</head>

<!-- Stampo in pagina i risultati -->
<body>
    <h1>Il testo che hai digitato è: <?php echo $words?> </h1>
    <p>Il testo che hai digitato contiene <?php echo $words_length?> caratteri</p>
    <h2>La parola censurata è: <?php echo $censoredword?></h2>
    <h2>Questo è il risultato della censura della parola che hai inserito: <?php echo $badword?></h2>
</body>
</html>