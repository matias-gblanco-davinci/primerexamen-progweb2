<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista | Parcial prog web 2</title>
</head>
<body>
    <h1>Hola, esta es la tabla de números que pediste</h1>

    <?php
    function imprimirTabla($minimo, $maximo, $filas) {
        echo("<table>");

        echo("<tr>");
    
            for($i = $minimo; $i <= $maximo; $i++) {
                echo("<th>".($i)."</th>");
            }

        echo("</tr>");
    
        for($x = 0; $x <= $filas; $x++) {
            echo("<tr>");
            for($y = 0; $y < $maximo; $y++) {
                echo "<td>",($x*($y + 1)),"</td>";
            }
            echo("</tr>");
        }

    echo("</table>");
    }

    $minimo=$_POST['min'];
    $maximo=$_POST['max'];
    $filas = 10;
    imprimirTabla($minimo, $maximo, $filas);
    ?>

    <a href="index.php">Volver al inicio</a>

</body>
</html>