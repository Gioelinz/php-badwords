<?php

/* Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$paragraph = 'Il mio teacher ha detto che sono scarso';

$paragraph_length = strlen($paragraph);

$get_word = $_GET["word"] ?? '';

// str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore

$paragraph_censured = str_replace($get_word, '***', $paragraph);
$censured_length = strlen($paragraph_censured);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $paragraph_censured ?></h1>
    <h2><?php echo "Lunghezza paragrafo originale: $paragraph_length"; ?></h2>
    <h2><?php echo "Lunghezza paragrafo censurato: $censured_length"; ?></h2>

    <form method="get">
        <input type="text" placeholder="inserisci parola da censurare" name="word">
        <button type="submit">Censura</button>
    </form>

</body>

</html>