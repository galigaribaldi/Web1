<?php
	require('conexion.php');
	session_start();
	if(isset($_SESSION["id_usuario"])){
		header("Location: logout.php");
	}

	if(!empty($_POST)){

		$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		$error = '';

		$sql = "SELECT id, id_tipo FROM usuario WHERE usuario = '$usuario' AND password = '$password'";
		$result = $mysqli -> query($sql);
		$rows = $result -> num_rows;

		if($rows > 0){
			$row = $result -> fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			header("location: Welcom.php");
		}else{
			$error = "Algo salió mal amiguito";
		}
	}

?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/MEstilos.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="icon" type="image/jpg" href="img/billete 100.jpg">
	<title>Login</title>
</head>
	<h1 class="form__titulo">Ingresa o Inicia Sesion</h1>
	<body background="img/casino-32.jpg">
		<form action="<?php $_SERVER['PHP_SELF']?>" method ="POST" class="form-register">
		<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" required ></div> 
		<br />

		<div><label>Password:</label><input id="password" name="password" type="password" required ></div> 
		<br />

		<div><input name="login" type="submit" value ="login"> </div>

		</form>

		<form action= "formulario.html" method="post">
			<div>
				<input type="submit" value="Registrarse!"> 
			</div>
		</form>
		<div> <?php echo isset($error) ? utf8_decode($error): '';?> </div>
		<div class="footer menu-navegacion">
			<ul>
				<li><a style="text-decoration: none;" href="index.php">Regresar al inicio</a></li>
				<li><a style="text-decoration: none;" href="logout.php">Salir</a></li>
				<li><a style="text-decoration: none;" href="http://asmagia.com/cartas-bicycle-c-127_106.html">Bycycle</a></li>
			</ul>
		</div>
</body>
</html>