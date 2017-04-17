<?php 
	///Conectarse a la base de datos
	$conexion= mysqli_connect("localhost", "root", "", "Tienda_V");
	///Guardar los datos en variables
	$id= $_POST["id"];
	$Producto= $_POST["Producto"];
	$Costo= $_POST["Costo"];
	$Descripcion= $_POST["Descripcion"];
	$Existencia= $_POST["Existencia"];

///Consutla para insertar

	$insertar = "INSERT INTO Producto(id, Producto, Costo, Descripcion, Existencia) VALUES ('$id', '$Producto', '$Costo', '$Descripcion', '$Existencia')";
	//$verificar_usuario = mysqli_query($conexion,"SELECT * FROM Producto WHERE Producto = '$Producto'");

	// if(mysqli_num_rows($verificar_usuario)>0){
	// 	echo "El Producto ya esta registrado";
	// 	exit;
	// }
	// //Ejecutar consulta
	// $resultado=mysqli_query($conexion, $insertar);

	// if(!$resultado){
	// 	echo '<script>
	// 			alert("El Producto ya esta registrado");
	// 			window.history.go(-1);
	// 			</script>';
	// }else{
		echo '<script>
	 			alert("El Producto se ha registrado");
	 			window.history.go(-1);
				</script>';
	// }
	mysqli_close($conexion);
?>