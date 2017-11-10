<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'buscador';

$connect = new mysqli($host,$user,$pass,$db) or die('error ' .mysqli_errno($connect));
$connect->query("SET NAMES 'utf8';");

