<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
	<?php
	if(isset($_GET['tope']))
		$tope = $_GET['tope'];

	if (!empty($tope))
	{
		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', 'YannickAbreu1912', 'marketzone');	

		/** comprobar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		$productos = array(); // Initialize the $productos array
		if ( $result = $link->query("SELECT * FROM productos WHERE unidades <= '{$tope}'") ) 
		{
			while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				$productos[] = $row;
			}
			/** útil para liberar memoria asociada a un resultado con demasiada información */
			$result->free();
		}

		$link->close();
	}
	?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Productos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h3>PRODUCTOS</h3>

		<br/>
		
		<?php if( !empty($productos) ) : ?> <!-- Changed isset to !empty -->

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($productos as $producto) : ?>
					<tr>
						<th scope="row"><?= $producto['id'] ?></th>
						<td><?= $producto['nombre'] ?></td>
						<td><?= $producto['marca'] ?></td>
						<td><?= $producto['modelo'] ?></td>
						<td><?= $producto['precio'] ?></td>
						<td><?= $producto['unidades'] ?></td>
						<td><?= utf8_encode($producto['detalles']) ?></td>
						<td><img src=<?= $producto['imagen'] ?> width="50" height="50" ></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

		<?php else : ?>

			 <script>
                alert('No hay productos con unidades menores o iguales a <?= $tope ?>');
             </script>

		<?php endif; ?>
	</body>
</html>