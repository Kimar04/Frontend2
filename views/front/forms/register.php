<fieldset>
		<legend>Formulario de Registro</legend>
		<form name="register" method="post" action="http://localhost/Frontend/app/Http/Controllers/Controller.php" required>
			<p>
				<label for="nombre">Nombre</label>
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
				<label for="conf_pass">Confirmar contraseña</label>
				<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
			</p>
			<p>
				<button type="submit" name="btn-register">Registrar usuario</button>
				<button type="reset">Limpiar datos</button>
			</p>
		</form>
		<p><a href="http://localhost/Frontend/views/front/forms/login.php">Ya estoy registrado!</a></p>
	</fieldset>
