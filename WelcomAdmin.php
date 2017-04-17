<?php 
	session_start();
	require 'conexion.php';

	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	$idUsuario = $_SESSION['id_usuario'];
	$sql = "SELECT u.id, p.nombre FROM usuario AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
	$result = $mysqli -> query($sql);

	$row = $result -> fetch_assoc();
 ?>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/MEstilos.css">
	<link rel="stylesheet" href="css/estilos.css">
 	<title>Welcolme</title>
 </head>
 <body background="img/fondonatural.jpg">
 	<h1><?php echo 'Bienvenido '.utf8_decode($row['nombre']); ?> </h1>
 	<?php if($_SESSION['tipo_usuario']==1) {?>
 		<a href="registro.php">Registrar nuevo Cliente</a>
 		<br>
 		<a href="registro.php">Registrar nuevo Admin</a>
 		<br>
 		<a href="verificar_productos.html">Verificar productos</a>
 		<br>
 		<a href="ver_productos">Ver productos</a>
 		<br>
	<?php } ?>
	<a href="logout.php">Cerrar Sesion</a>
	
	<div class="footer menu-navegacion">
	<ul>
		<li><a href="logout.php">Cerrar sesion</a></li>
		<li><a href="index.php" >Ir a pantalla de inicio</a></li>
		<li><a href="https://es.wikipedia.org/wiki/Digimon" >Wiki</a></li>
	</ul>
	</div>
 </body>
 </html>