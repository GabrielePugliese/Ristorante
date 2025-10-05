<?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $piatto = isset($_POST["piatto"]) ? $_POST["piatto"] : "";
    $allergie = isset($_POST["allergie"]) ? $_POST["allergie"] : [];
    $inviato = isset($_POST["submit"]);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Ristorante Digitale</title>
</head>
<body>

<?php
if(!$inviato){
    
    echo '
    <h1>Benvenuto al Ristorante Digitale</h1>
    <form method="post">
        <label>Il tuo nome:</label><br>
        <input type="text" name="nome" value="'.$nome.'"><br><br>

        <label>Piatto che vorresti assaggiare:</label><br>
        <input type="text" name="piatto" value="'.$piatto.'"><br><br>

        <p>Seleziona eventuali allergie:</p>
        <input type="checkbox" name="allergie[]" value="Glutine"> Glutine<br>
        <input type="checkbox" name="allergie[]" value="Lattosio"> Lattosio<br>
        <input type="checkbox" name="allergie[]" value="Frutta secca"> Frutta secca<br>
        <input type="checkbox" name="allergie[]" value="Crostacei"> Crostacei<br><br>

        <input type="submit" name="submit" value="Invia ordine">
    </form>';
} else {
    // RISULTATO
    echo "<h1>Scheda dell'ordine</h1>";

    if($nome != ""){
        echo "<p>Ciao <b>".$nome."</b>, benvenuto nel mio ristorante!</p>";
    } else {
        echo "<p>Benvenuto!</p>";
    }

    if($piatto != ""){
        echo "<p>Hai scelto di assaggiare: <b>".$piatto."</b>. I nostri chef sono già all'opera!</p>";
    } else {
        echo "<p>Non hai scelto nessun piatto. ma non preoccuparti, la cucina troverà la sorpresa perfetta per te!</p>";
    }

    if(!empty($allergie)){
        echo "<p>Abbiamo registrato le tue allergie:</p><ul>";
        foreach($allergie as $a){
            echo "<li>".$a."</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nessuna allergia segnalata: puoi assaggiare tutto senza pensieri!</p>";
    }

    echo "<p>Piccola curiosità: la tua richiesta arriva dal tuo indirizzo IP.</p>";
    echo '<br><a href="">Torna al modulo</a>';
}
?>

</body>
</html>
