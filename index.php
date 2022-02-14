<?php
    $paragrafo = "Avanti! E non temete l’oscurità! Desti! Desti cavalieri di Théoden! <br> Lance saranno scosse.. scudi saranno frantumati.. <br> un giorno di spade! Un giorno rosso, prima che sorga il sole! <br> Cavalcate ora! Cavalcate ora! Cavalcate per la rovina, e per la fine del mondo! Morte! Morte! Morte! Avanti, Eorlingas!";

    $paragrafoLength = strlen($paragrafo);

    $parolaNascosta = $_GET["hide"];

    $paragrafoCensurato = str_replace($parolaNascosta, "***", $paragrafo);

    $paragrafoCensuratoLength = strlen($paragrafoCensurato);
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
    <div>
        <h3>Discorso Re Theoden</h3>

        <p><?php echo $paragrafo ?></p>

        <h3>Lunghezza discorso Re Theoden</h3>

        <p><?php echo $paragrafoLength ?> caratteri</p>
        
        <h3>Discorso Re Theoden con parola censurata</h3>

        <p><?php echo $paragrafoCensurato ?></p>

        <h3>Lunghezza discorso Re Theoden con parola censurata</h3>

        <p><?php echo $paragrafoCensuratoLength ?> caratteri</p>

    </div>

    <!--
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall’utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    -->
</body>
</html>