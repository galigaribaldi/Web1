<?php 
	///Conectarse a la base de datos
	$conexion= mysqli_connect("localhost", "root", "", "Tienda_V");
	///Guardar los datos en variables
	$Nombres= $_POST["Nombres"];
	$Apellido_P= $_POST["Apellido_P"];
	$Apellido_M= $_POST["Apellido_M"];
	$Edad= $_POST["Edad"];
	$usuario= $_POST["usuario"];
	$password= $_POST["password"];
///Consutla para insertar

	$insertar = "INSERT INTO usuario(Nombres, Apellido_P, Apellido_M, Edad, usuario, password) VALUES ('$Nombres', '$Apellido_P', '$Apellido_M', '$Edad', '$usuario', '$password')";
	$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$usuario'");

	if(mysqli_num_rows($verificar_usuario)>0){
		echo "El usuario ya esta registrado";
		exit;
	}
	//Ejecutar consulta
	$resultado=mysqli_query($conexion, $insertar);

	if(!$resultado){
		echo '<script>
				alert("El usuario ya esta registrado");
				window.history.go(-1);
				</script>';
	}else{
		echo "Usuario registrado exitosamente";
		echo "Regresar al Login";
	}
	mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Regresar</title>
</head>
<body>
	<form action="logout.php">
		<input type="submit" value="Regresar">
	</form>
</body>
</html>