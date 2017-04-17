<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Nuevo Producto</h1></center>
		
		<form method="POST" action="guarda_producto.php">
			<table width="50%">
				<tr>
					<td><b>Id</b></td>
					<td><input type="text" id="id" name="id" size="25" /></td>
				</tr>

				<tr>
					<td><b>Producto</b></td>
					<td><input type="text" id="Producto" name="Producto" size="25" /></td>
				</tr>

				<tr>
					<td><b>Costo</b></td>
					<td><input type="text" id="Costo" name="Costo" size="25" /></td>
				</tr>

				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" id="Descripcion" name="Descripcion" size="25" /></td>
				</tr>

				<tr>
					<td><b>En existencia</b></td>
					<td><input type="text" id="Existencia" name="Existencia" size="25" /></td>
				</tr>

				<tr>
					<td colspan="2"><center><input type="submit" name="enviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						