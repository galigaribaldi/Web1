<?php
	define('DB_SERVER', 'localhost');
	define('DB_NAME', "Tienda_V");
	define('DB_USER', 'root');
	define('DB_PASS', '');
	$mysqli= new mysqli("localhost", "root", "", "Tienda_V");
	if(mysqli_connect_errno()){
		echo 'Conexion fallida: ', mysqli_connect_errno();
		exit();
	}
 ?>