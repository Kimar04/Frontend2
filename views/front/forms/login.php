<?php include ('../templates/head.php'); ?>

<div class="login">
<fieldset>
		<legend>Formulario de ingreso</legend>
		<form name="login" method="post" action="http://localhost/Frontend/app/Http/Controllers/Controller.php" required>
			<p>
				<label for="correo">Correo</label>
				<input type="email" name="correo_log" placeholder="you@example.com.." required>
			</p>
			<p>
				<label for="password">Contraseña</label>
				<input type="password" name="password_log" placeholder="Crear contraseña.." required>
			</p>
			<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<button type="submit" name="btn-login">Ingresar</button>
								<button type="reset">Cancelar</button>
							</p>
		</form>
	</fieldset>
	<p><a href="http://localhost/Frontend/views/front/forms/register.php">Registrarse</a></p>
</div>

<?php include ('../templates/foot.php'); ?>