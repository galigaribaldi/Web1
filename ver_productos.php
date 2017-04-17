<?php 
	require('conexion.php');
	$query = "SELECT id, Nombre, Precio, Descripcion, Existencia FROM Producto";
	$resultado=$mysqli -> query($query);
 ?>
 
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Usuarios</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/MEstilos.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.carousel{
			background: #2f4357;
			margin-top: 20px;
		}
		.carousel .item img{
		margin: 0 auto; /* Align slide image horizontally center */
		}
		.bs-example{
			margin: 20px;
		}
	</style>
	<title>Productos</title>
 </head>
 <body background="img/casino-32.jpg">
 	<h1>Productos</h1>
		<table border = 1 width="80%">
		<thead>
			<tr>
				<td> <b> Id</b></td>
				<td> <b> Producto</b></td>
				<td> <b> Costo</b></td>
				<td> <b> Descripcion</b></td>
				<td> <b> En existencia</b></td>
			</tr>
			<tbdy>
				<?php while($row=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo$row['id'];?></td>
					<td><?php echo$row['Nombre'];?></td>
					<td><?php echo$row['Precio'];?></td>
					<td><?php echo$row['Descripcion'];?></td>
					<td><?php echo$row['Existencia'];?></td>
				</tr>
			<?php } ?>
		</thead>
		 </table>
	<div class="bs-example">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Carousel indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"> Baraja Bicycle</li>
	      <li data-target="#myCarousel" data-slide-to="1">Baraja Española </li>
	      <li data-target="#myCarousel" data-slide-to="2">Fichas</li>
	      <li data-target="#myCarousel" data-slide-to="3">Ajedrez</li>
	      <li data-target="#myCarousel" data-slide-to="4">Billetes</li>
	    </ol>
	    <!-- Wrapper for carousel items -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="img/io.jpg" alt="Baraja Bycicle">
	      </div>
	      <div class="item">
	        <img src="img/española3.jpg" alt="Baraja Española">
	      </div>
	      <div class="item">
	        <img src="img/poker.jpg" alt="Fichas Poker">
	      </div>
	      <div class="item">
	        <img src="img/ajedrez.jpg" alt="Ajedrez">
	      </div>
	      <div class="item">
	        <img src="img/billete-500.jpg" alt="Billetes">
	      </div>
	    </div>
	    <!-- Carousel controls -->
	    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	    </a>
	    <a class="carousel-control right" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	    </a>
	  </div>
	</div>
	
	<div class="footer menu-navegacion">
	<ul>
		<li><a href="logout.php">Cerrar sesion</a></li>
		<li><a href="index.php" >Ir a pantalla de inicio</a></li>
		<li><a href="https://es.wikipedia.org/wiki/Digimon" >Wiki</a></li>
	</ul>
	</div>
 </body>
 </html>
