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
	<link rel="stylesheet" href="css/Stilo.css">
 	<title>Welcolme</title>
 </head>
 <body background="img/Fondoindex.jpg">
 	<h1><?php echo 'Bienvenido '.utf8_decode($row['nombre']); ?> </h1>
 	
 	<?php if($_SESSION['tipo_usuario']>=1) {?>

 		<a href="formulario.html" class="btn btn-default btn-lg active" role="button">Registrar nuevo Cliente</a>
 		<br>
 		<a href="formularioAdmin.html" class="btn btn-default btn-lg active" role="button"> Registrar un nuevo Administrador</a>
 		<br>
 		<a href="Modificar_Productos.php" class="btn btn-default btn-lg active" role="button">Verificar productos</a>
 		<br>
	<?php } ?>
	<a href="ver_productos.php" class="btn btn-default btn-lg active" role="button"> Ver productos </a>
	
	<div class="footer menu-navegacion">
	<ul>
		<li><a href="logout.php" class="btn btn-default btn-lg active">Cerrar sesion</a></li>
		<li><a href="index.php" class="btn btn-default btn-lg active">Ir a pantalla de inicio</a></li>
		<li><a href="https://es.wikipedia.org/wiki/Digimon" class="btn btn-default btn-lg active" >Wiki</a></li>
	</ul>
	</div>

 </body>
 </html>