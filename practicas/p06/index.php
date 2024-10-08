<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>
    <h2>Ejercico 2</h2>
    <?php
    $_flag=false;
    $i=0;
    while ($_flag==false){
        $a=rand(min: 1,max: 100);
        $b=rand(min: 1,max: 100);
        $c=rand(min: 1,max: 100);
        $i++;
        echo $a.",".$b.",".$c;
        echo "<br>";
        if($a%2== 0&& $b%2!== 0&&$c%2== 0){
            $f=$i*3;
            echo $f. " numeros obtenidos en ". $i. " iteraciones";
            $_flag=true;
        }        
    }
    ?>
    <h2>Ejercicio 3</h2>
    <?php
    if(isset($_GET['numero']))
    {
        $number=$_GET['numero'];
        $z=rand(min:1,max:100);
        $contador=1;
        $contador2=1;
        while($z%$number!== 0){
            $z=rand(min:1,max:100);
            $contador++;             
    }
    echo $z. " es multiplo de ". $number;
    echo "<br>";
    echo $contador. " iteraciones";
    }

    ?>
    <h2>Ejercicio 4</h2>
    <?php
    
    $array = array();
    $y=97;
    for($i= 0; $i<= 25; $i++){
        $array[$y] = chr($y);
        $y++;
        
    }
    foreach($array as $key){
        echo $key;
        echo "<br>";
    }   
    ?>
</body>
</html>