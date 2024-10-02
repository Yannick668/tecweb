<?php
$imagen   = 'img/imagen.png';


/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'YannickAbreu1912', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

/** Crear una tabla que no devuelve un conjunto de resultados */
$sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) VALUES ('{$_POST['nombre']}', '{$_POST['marca']}', '{$_POST['modelo']}', {$_POST['precio']}, '{$_POST['detalles']}', {$_POST['unidades']}, '{$imagen}')";
if ( $link->query($sql) ) 
{
    echo 'Producto insertado con ID: '.$link->insert_id;
}
else
{
	echo 'El Producto no pudo ser insertado =(';
}

$link->close();
?>