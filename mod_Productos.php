<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$Nombre=$_POST['Nombre'];
	$Precio=$_POST['Precio'];
	$Descripcion=$_POST['Descripcion'];
	$Existencia = $_POST['Existencia'];

	$query="UPDATE Producto SET Nombre='$Nombre', Precio='$Precio', Descripcion='$Descripcion', Existencia='$Existencia'= WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Productos</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				