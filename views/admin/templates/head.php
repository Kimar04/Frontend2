<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>responsive</title>
</head>
<body>
<header>
	<nav>
		<a>Inicio</a>
			<a>Stage</a>
			<a href="http://localhost/Frontend/views/admin/forms/form-contact.php">Contactenos</a>
		<form name="search" method="post" action="">
			<input type="text" placeholder="Search.." name="">
			<button type="sumit">Buscar</button>
		</form>
	</nav>
</header>
<?php 
if(isset($_GET['inicio'])){
	session_start();
}
if(isset($_SESSION['email'])){
	include('template/head.php');
}
if(isset($_GET['error'])){
	include ('errors/errors.php');
}
?>