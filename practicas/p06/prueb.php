<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <?php
        if ($_POST["sexo"]=="femenino" && $_POST["edad"]>=18 && $_POST["edad"]<=35 ) {
            echo"Bienvedia, usted esta en el rango de edad permitido";
        }
        else {
            echo "Lo sentimos, no esta en el rango de ingreso";
        }
    ?>
</body>
</html>