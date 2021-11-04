<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado | Parcial prog web 2</title>
</head>
<body>
<?php
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $dni=$_POST['dni'];

        if ($edad>=18) {
            echo '<h1>Bienvenido '.$nombre.' '.$apellido.', es hora de jugar.</h1>';
            echo
                '<form  action="lista.php" method="post">
                
                    <div>
                        <label for="">Mínimo:</label>
                        <input name="min" type="number">
                    </div>

                    <div>
                        <label for="">Máximo:</label>
                        <input name="max" type="number">
                    </div>

                    <div>
                        <button type="submit">Mostrar tabla</button>
                    </div>

                </form>'
            ;
        } else {
            echo '<h1>Disculpa, '.$nombre.' '.$apellido.', pero no tenes acceso</h1>';
        }
    ?>
    
    <a href="index.php">Volver al inicio</a>

</body>
</html>