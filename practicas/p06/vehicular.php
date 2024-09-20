<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicular</title>
</head>
<body>
    <?php
    $autos = array(
        "ABC001" => array(
            "Auto"=> array(
                "marca"=> "Honda",
                "modelo"=> "1999",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Alfonso Esparza",
                "ciudad"=> "Puebla, Pue.",
                "direccion"=> "C.U., Jardines de San Manuel"
            )
        ),
        "ABC002" => array(
            "Auto"=> array(
                "marca"=> "Toyota",
                "modelo"=> "2017",
                "tipo"=> "camioneta"
            ),
            "Propietario"=> array(
                "nombre" => "John Cena",
                "ciudad"=> "Puebla, Pue.",
                "direccion"=> "La Margarita"
            )
        ),
        "ABC003" => array(
            "Auto"=> array(
                "marca"=> "Lexus",
                "modelo"=> "2024",
                "tipo"=> "coupe"
            ),
            "Propietario"=> array(
                "nombre" => "Alfonso Esparza",
                "ciudad"=> "Puebla, Pue.",
                "direccion"=> "C.U., Jardines de San Manuel"
            )
        ),
        "ABC004" => array(
            "Auto"=> array(
                "marca"=> "VolksWagen",
                "modelo"=> "2013",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "J Balvin",
                "ciudad"=> "Tlaxcala",
                "direccion"=> "Zacatelco"
            )
        ),
        "ABC005" => array(
            "Auto"=> array(
                "marca"=> "KIA",
                "modelo"=> "2017",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Juanito Banana",
                "ciudad"=> "Puebla, Pue,",
                "direccion"=> "Los Volcanes"
            )
        ),
        "ABC006" => array(
            "Auto"=> array(
                "marca"=> "Honda",
                "modelo"=> "1999",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Reyner Abreu",
                "ciudad"=> "Puebla, Pue,",
                "direccion"=> "Jardines de San Manuel"
            )
        ),
        "ABC007" => array(
            "Auto"=> array(
                "marca"=> "Mazda",
                "modelo"=> "2019",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Don Omar",
                "ciudad"=> "Bayamon",
                "direccion"=> "Guaynabo"
            )
        ),
        "ABC008" => array(
            "Auto"=> array(
                "marca"=> "Subaru",
                "modelo"=> "1999",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Takumi",
                "ciudad"=> "Tokio",
                "direccion"=> "Ginza"
            )
        ),
        "ABC009" => array(
            "Auto"=> array(
                "marca"=> "Ford",
                "modelo"=> "2002",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Carlos Herrera",
                "ciudad"=> "CDMX,",
                "direccion"=> "Polanco"
            )
        ),
        "ABC010" => array(
            "Auto"=> array(
                "marca"=> "Nissan",
                "modelo"=> "1980",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Ana Lopez",
                "ciudad"=> "Nuevo Leon",
                "direccion"=> "San Jeronimo"
            )
        ),
        "ABC011" => array(
            "Auto"=> array(
                "marca"=> "Chevrolet",
                "modelo"=> "2020",
                "tipo"=> "Hatchback"
            ),
            "Propietario"=> array(
                "nombre" => "Luis Fernandez",
                "ciudad"=> "Tijuana",
                "direccion"=> "San Jeronimo"
            )
        ),
        "ABC012" => array(
            "Auto"=> array(
                "marca"=> "BMW",
                "modelo"=> "2023",
                "tipo"=> "coupe"
            ),
            "Propietario"=> array(
                "nombre" => "Bill Gates",
                "ciudad"=> "Puebla, Pue.",
                "direccion"=> "C.U., Jardines de San Manuel"
            )
        ),
        "ABC013" => array(
            "Auto"=> array(
                "marca"=> "Honda",
                "modelo"=> "1999",
                "tipo"=> "sedan"
            ),
            "Propietario"=> array(
                "nombre" => "Alfonso Esparza",
                "ciudad"=> "Puebla, Pue,",
                "direccion"=> "C.U., Jardines de San Manuel"
            )
        ),
        "ABC014" => array(
            "Auto"=> array(
                "marca"=> "Mercedes-benz",
                "modelo"=> "2020",
                "tipo"=> "coupe"
            ),
            "Propietario"=> array(
                "nombre" => "Pedro Sanchez",
                "ciudad"=> "Madrid",
                "direccion"=> "Atocha"
            )
        ),
        "ABC015" => array(
            "Auto"=> array(
                "marca"=> "Toyota",
                "modelo"=> "2010",
                "tipo"=> "SUV"
            ),
            "Propietario"=> array(
                "nombre" => "Maria Gonzalez",
                "ciudad"=> "Guanajuato",
                "direccion"=> "Leon"
            )
        ),
    );

    $matricula = isset($_POST['matricula']) ? trim($_POST['matricula']) : '';

    if(!empty($matricula)) {
        if(array_key_exists($matricula, $autos)){
            $auto = $autos[$matricula];
            echo "Información de ". $matricula;
            echo"<br>";
        echo "<strong>Marca:</strong> " . $auto['Auto']['marca'] . "<br>";
        echo "<strong>Modelo:</strong> " . $auto['Auto']['modelo'] . "<br>";
        echo "<strong>Tipo:</strong> " . $auto['Auto']['tipo'] . "<br>";
        echo "<strong>Propietario:</strong> " . $auto['Propietario']['nombre'] . "<br>";
        echo "<strong>Ciudad:</strong> " . $auto['Propietario']['ciudad'] . "<br>";
        echo "<strong>Dirección:</strong> " . $auto['Propietario']['direccion'] . "<br>";
        }
        else{
            echo "No se encontro ningun auto con la matricula ". $matricula ."<br>";
        }
    }
    else{
        echo "<h2>Todos los autos registrados</h2>";
        foreach ($autos as $matricula => $auto) {
            echo "<h3>Matrícula: $matricula</h3>";
            echo "<strong>Marca:</strong> " . $auto['Auto']['marca'] . "<br>";
            echo "<strong>Modelo:</strong> " . $auto['Auto']['modelo'] . "<br>";
            echo "<strong>Tipo:</strong> " . $auto['Auto']['tipo'] . "<br>";
            echo "<strong>Propietario:</strong> " . $auto['Propietario']['nombre'] . "<br>";
            echo "<strong>Ciudad:</strong> " . $auto['Propietario']['ciudad'] . "<br>";
            echo "<strong>Dirección:</strong> " . $auto['Propietario']['direccion'] . "<br>";
            echo "<hr>";
        }
    }
    ?>
</body>
</html>