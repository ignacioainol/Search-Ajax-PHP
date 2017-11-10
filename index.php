<?php require_once('conn/connect.php') ?>
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
		<div class="center" id="logo">
			<img src="img/logo.svg" class="logo_one" width="500" alt="">
		</div>
			<div class="form center">
				<form action="" method="post" name="search_form" id="search_form">
					<input type="text" name="search" id="search">
				</form>
			</div>
		
		<!--[RESULTADOS]-->
		<div id="resultados"></div>
		<!--[/RESULTADOS]-->
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
</body>
</html>