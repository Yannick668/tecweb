<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 5</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        function destroy(){
            global $a, $b, $c, $d;
            unset( $a, $b, $c, $d );
        }
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
        echo '<br>';
        echo '<h2>Ejercicio 2</h2>';
        echo '<br>';
        
        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
        
        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo $c;
        echo '<br>';
        
        $a = "PHP server";
        $b = &$a;
        
        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo '<p>Aqui podemos ver que a pesar de asignarle un nuevo valor a las variables a y b, respeta lo que estaba antes escrito y solo modifica el valor en la segunda instancia</p>';
        echo '<br>';
        destroy();

        echo '<h2>Ejercicio 3</h2>';
        echo '<br>';

        $a = "PHP5";
        echo $a;
        echo "<br>";
        $z[] = &$a;
        print_r($z);
        echo "<br>";
        $b = "5a version de PHP";
        echo $b;
        echo "<br>";
        $c = $b*10;
        echo $c;
        echo "<br>";
        $a .= $b;
        echo $a;
        echo "<br>";
        $b *= $c;
        echo $b;
        echo "<br>";
        $z[0] = "MySQL";
        print_r($z);
        echo "<br>";
        destroy();

        echo "<h2>Ejercicio 4</h2>";
        echo "<br>";

        function datos(){
            global $a, $b, $c, $z;
            echo $a;
            echo "<br>";
            print_r($z);
            echo "<br>";
            echo $b;
            echo "<br>";
            echo $c;
        }

        datos();
        echo "<br>";
        destroy();

        echo "<h2>Ejercicio 5</h2>";


        $p = "7 personas";
        $q = (integer) $a;
        $p = "9E3";
        $r = (double) $a;
        
        echo $p;
        echo "<br>";
        echo $q;
        echo "<br>";
        echo $r;
        echo "<br>";
        destroy();

        echo "<h2>Ejercico 6</h2>";
        echo "<br>";

        $a = "0";
        $b = "TRUE";
        $c = false;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        echo "<br>";
        
        $bool_c = var_export($c,true);
        $bool_e = var_export($e,true);
        echo $bool_c;
        echo "<br>";
        echo $bool_e;
        echo "<br>";
        destroy();

        echo "<h2>Ejercicio 7</h2>";
        echo "<br>";

        echo $_SERVER['SERVER_SOFTWARE'];
        echo '<br>';
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];






        ?>
</body>
</html>