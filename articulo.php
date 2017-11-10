<?php require_once('conn/connect.php') ?>
<?php 
	$search = '';
	if(isset($_GET['search'])){
		$search = strtolower($_GET['search']);
	}


	$id = '';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$query = "SELECT * FROM articulos WHERE id = {$id}";

	$result = $connect->query($query);
	$row = mysqli_fetch_assoc($result);
	$total = mysqli_num_rows($result);

	$insert = "UPDATE articulos SET visitas=visitas+1 WHERE id ={$id}";
	$update = $connect->query($insert) || die("No se ha podido actualizar la visita");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscador One</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<div class="form center">
				<img src="img/logo.svg" class="logo_one" width="500" alt=""/>

				<a href="javascript:history.back(1);"><p>Volver atras</p></a>
			</div>
		</div>
		
		<!--[RESULTADOS]-->
		<div id="resultados">
			<h1><?= strtoupper($row['nombre']) ?></h1>
			<p><?= str_replace($search,'<strong>$search</strong>',$row['articulo']) ?></p>
		</div>
		<!--[/RESULTADOS]-->
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
</body>
</html>