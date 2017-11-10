<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

sleep(1);

require_once '../conn/connect.php';

$search = '';
if(isset($_POST['search'])){
	$search = $_POST['search'];
}

$query = "SELECT * FROM articulos WHERE articulo LIKE '%{$search}%' OR nombre LIKE '%{$search}%'ORDER BY visitas LIMIT 5";

$result = $connect->query($query);
$row = mysqli_fetch_assoc($result);
$total = mysqli_num_rows($result);

?>
<? if ($total > 0 && $search!=''): ?>
	<h2>Resultados de la búsqueda</h2>
	<? do{ ?>
		<div class="art">
			<a href="articulo.php?id=<?= $row['id'] ?>&search=<?= $search ?>">
				<span class="titulo"><?= str_replace($search,'<strong>'.$search.'</strong>',$row['nombre']) ?></span><br>
				<span class="contenido"><?= str_replace($search,'<strong>'.$search.'</strong>',substr($row['articulo'],0,150)) . '...' ?></span>
		    </a>
		</div>
	<? }while($row=mysqli_fetch_assoc($result)); ?>
<? elseif($total>0 && $search ==''): ?>
	<!--<h2>Ingresa un parámetro de busqueda</h2>-->
<? else: ?>
	<h2>No se han encontrado resultados</h2>
<? endif ?>