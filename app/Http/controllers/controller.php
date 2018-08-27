<?php
//Mensaje 
if(isset($_POST['btn_cont'])){
	$solicitud = $_POST['solicitud'];
	$nombre_cont = $_POST['nombre_cont'];
	$apellidos_cont = $_POST['correo_cont'];
	$correo_cont = $_POST['correo_cont'];
	if ($solicitud == '--selecionar--'){
		header('Location: http://localhost/Frontend/index.php?error=3');
	}

	if(isset($correo_cont)){

	header('Location: http://localhost/Frontend/index.php');
	}
}

//seccion de login
if(isset($_POST['btn-register'])){

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];

	if($conf_pass == $password){

		include('../../../views/front/forms/login.php');
	}
	else{
		//error 1 = 'Las contraseñas no coinciden!'
		header('Location: http://localhost/Frontend/index.php?error=1');
	}
}

//area de usuarios registrados
if(isset($_POST['btn-login'])){

	
	$correo_log = $_POST['correo_log'];
	$password_log = $_POST['password_log'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];

	if($correo_log == $correo && $password_log == $password){

		include('../../../views/admin/index.php');
	}
	else{
		//error 2 = 'Los datos de acceso no coinciden!'
		header('Location: http://localhost/Frontend/index.php?error=2');
	}
}
?>