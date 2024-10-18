<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Esercizio 23</title>
</head>
<body>
<?php
    $sender = $_GET["sender"];
    $addresse = $_GET["addressee"];
    $object = $_GET["object"];
    $body = $_GET["mail_body"];
    echo "<h1> Mail creata!</h1>";
?>

    <h3> INFORMAZIONI: </h3>
    <div id="mail_info">
        <p>Mittente: <?php echo $sender;?></p>
        <p>Destinatario: <?php echo $addresse;?></p>
        <p>Oggetto: <?php echo $object;?></p>
    </div>

    <h3>CONTENUTO DELLA MAIL:</h3>
    <div id="mail_text">
        <p><?php echo $body ?></p>
    </div>

    <hr>
    <h3> STATISTICHE CORPO MAIL </h3>
    <div id="mail_stats">
        <p> Lunghezza del corpo della mail: <?php echo strlen($body) ?> </p>
        <p> Numero di parole del corpo della mail: <?php echo str_word_count($body) ?> </p>
    </div>


</body>
</html>
