<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM Producto WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Producto</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Producto Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Producto</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>