<?php include ('../templates/head.php'); ?>

          <div class="contact">
          <fieldset >
            <legend>Formulario de contacto</legend>
          	<form name="register" method="post" action="http://localhost/Frontend/app/Http/Controllers/Controller.php">
              <p>
                <label>Solicitud</label>
                <select name="solicitud" required>
                  <option value="guejas">Quejas</option>
                   <option value="sugerencias">Sugerencias</option>
                   <option value="soporte">Soporte tecnico</option>
                   <option value="servicio" selected>Nuevo servicio</option>
                   <option selected="selected">--selecionar--</option>
                </select>
              </p>
              <p>
 					<label >Nombre:</label>
 					<input type="text" name="nombre_cont" placeholder="Nombres" required/>
        </p>
          <p>
          <label>Apellidos:</label>
          <input type="text" name="apellidos_cont" placeholder="Apellidos" required/>
        </p>
          <p>
 					<label>Email:</label>
 					<input type="email" name="correo_cont" placeholder="you@example.com" required/>
        </p>
        <P>
 					<label>Escribanos</label>
 						<textarea  name="comentario_cont"
 						cols="60" rows="10" required>
 						</textarea>
          </P>
          <p>
 					<button type="submit" name="btn_cont">Enviar mensaje</button>
 					<button type="reset" name="limpiar datos">Limpiar datos</button>
        </p>
 	</form>
  <fieldset>
  </fieldset>
</fieldset>
</div>

<?php include ('../templates/foot.php'); ?>