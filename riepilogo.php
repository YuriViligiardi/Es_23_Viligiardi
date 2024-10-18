<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo</title>
</head>
<style>
    table ,td, th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>
    <?php
    $name = $_GET["nome"];
    $surname = $_GET["cognome"];
    $address = $_GET["email"];
    

    $data = array("nome" => $name, "cognome" => $surname, "indirizzo" => $address);
    echo "<h1>I dati inviati: $name $surname $address </h1>";
    echo "<br>";
    createTable($data);


    function createTable($d){
        echo "<table>";
        echo "<tr>"; 
        foreach ($d as $key => $value) {
            echo "<th>$key</th>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($d as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
        echo "</table>";
    }

    ?>
</body>
</html>