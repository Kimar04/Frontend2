<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<section>
	<article class="inicio-maps">
		<form>
			<label>Municipio de interes</label>
			<input name="municipio" type="text" requiered>
			<label>Gustos</label>
			<input name="gustos" type="text" required>
		</form>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2811.752938528319!2d-74.10240961555694!3d4.697013500814614!3m2!1i1024!2i768!4f13.1!4m3!3e2!4m0!4m0!5e0!3m2!1ses!2sco!4v1533016823228" width="100" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</article>
	<article class="inicio">
		<div>
			<a href="">Nuestra tierra</a>
		</div>
		<div>
			<a href="">Evento de interes</a>
		</div>
		<div>
			<a href="">Sabias que?</a>
		</div>
	</article>
		<article class="form-inicio">	
		<fieldset>
		<legend>Formulario de Registro</legend>
		<form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" required>
			<p>
				<label for="nambre">Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre completo.." required>
			</p>
			<p>
				<label for="correo">Correo</label>
				<input type="email" name="correo" placeholder="you@example.com.." required>
			</p>
			<p>
				<label for="password">Contraseña</label>
				<input type="password" name="password" placeholder="Crear contraseña.." required>
			</p>
			<p>
				<label for="conf_pass">Nombre</label>
				<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
			</p>
			<p>
				<input type="submit" name="btn-register" value="Registrar usuario">
				<input type="reset" value="Limpiar datos">
			</p>
		</form>
	</fieldset>
	</article>
</section>
<footer>
	<div class="containerbox">
		<ul>
			<li>inicio</li>
			<li>Mision</li>
			<li>Vision</li>
		</ul>
	</div>
	<div class="containerbox">
		<iframe src="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D6pAVPsHXWvI&display=popup&ref=plugin&src=like&kid_directed_site=0&app_id=109849065805705"></iframe>
	</div>
	<div class="containerbox">
		<p>Cundinamarca</p>
	</div>
	</footer>
</body>
</html>