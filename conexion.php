<?php
$conexion = new PDO(
	'mysql:host=127.0.0.1;dbname=hospitalE2N;port:3306', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
);
?>