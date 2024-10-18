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
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    if(empty($num1) or empty($num2)) {
        echo "<p id='error_par'> Error: Cannote insert empty values </p>";
        echo "<a href='index.html'> ritorna alla pagina inziale (e possibilmente inserisci valori validi) </a>";
    } else {
        echo "Numeri inseriti: <ul>
                <li> $num1 </li>
                <li> $num2 </li> </ul>";
    }
    $num1 = intval($num1);
    $num1 = intval($num2);

    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

?>

<table>
    <tr>
        <th>Operazione</th>
        <th>Risultato</th>
    </tr>
    <tr>
        <td>Somma</td>
        <td><?php echo $sum;?></td>
    </tr>
    <tr>
        <td>Differenza</td>
        <td><?php echo $diff;?></td>
    </tr>
    <tr>
        <td>Prodotto</td>
        <td><?php echo $mul;?></td>
    </tr>
    <tr>
        <td>Divisione</td>
        <td><?php echo $num2 == 0 ? "<span style='color:red'> IMPOSSIBILE </span> " : $div;?></td>
    </tr>
</table>



</body>
</html>
