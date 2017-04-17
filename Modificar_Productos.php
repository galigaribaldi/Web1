<?php 
	require('conexion.php');
	$query = "SELECT id, Nombre, Precio, Descripcion, Existencia FROM Producto";
	$resultado=$mysqli -> query($query);
 ?>
 
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
 	<title>Usuarios</title>
 </head>
 <body background="img/fondonatural.jpg">
 	<h1>Productos</h1>
		<table border = 1 width="80%">
		<thead>
			<tr>
				<td> <b> Id</b></td>
				<td> <b> Producto</b></td>
				<td> <b> Costo</b></td>
				<td> <b> Descripcion</b></td>
				<td> <b> En existencia</b></td>
				<td> <b> Modificar</b></td>
				<td> <b> Eliminar</b></td>
			</tr>
			<tbdy>
				<?php while($row=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo$row['id'];?></td>
					<td><?php echo$row['Nombre'];?></td>
					<td><?php echo$row['Precio'];?></td>
					<td><?php echo$row['Descripcion'];?></td>
					<td><?php echo$row['Existencia'];?></td>
					<td> <a href="modificar.php?id=<php$row['id'];?">Modificar</a>
					<td> <a href="eliminar.php?id=<php$row['id'];?">Eliminar</a>
				</tr>
			<?php } ?>
		</thead>
		 </table>
		<a href="nuevo.php">Nuevo Poducto</a>

	<div class="footer menu-navegacion">
	<ul>
		<li><a href="logout.php" class="btn btn-default btn-lg active" role="button">Cerrar sesion</a></li>
		<li><a href="index.php" class="btn btn-default btn-lg active" role="button">Ir a pantalla de inicio</a></li>
		<li><a href="https://es.wikipedia.org/wiki/Digimon" class="btn btn-default btn-lg active" role="button">Wiki</a></li>
	</ul>
	</div>
 </body>
 </html>
