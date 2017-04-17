<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT Nombre, Precio, Descripcion, Existencia FROM Producto WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Producto</title>
	</head>
	<body>
		
		<center><h1>Modificar Producto</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_producto.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="Nombre" size="25" value="<?php echo $row['Nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Precio</b></td>
					<td><input type="text" name="Precio" size="25" value="<?php echo $row['Precio']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="Descripcion" size="25" value="<?php echo $row['Descripcion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Existencia</b></td>
					<td><input type="text" name="Existencia" size="25" value="<?php echo $row['Existencia']; ?>" /></td>
				</tr>				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	