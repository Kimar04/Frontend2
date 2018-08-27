<?php include ('../templates/head.php'); ?>
          <div class="contact">
          <fieldset >
            <legend>Formulario de contacto</legend>
          	<form >
              <p>
                <label>Solicitud</label>
                <select>
                  <option value="guejas">Quejas</option>
                   <option value="sugerencias">Sugerencias</option>
                   <option value="soporte">Soporte tecnico</option>
                   <option value="servicio" selected>Nuevo servicio</option>
                   <option selected="selected">--selecionar--</option>
                </select>
              </p>
              <p>
 					<label >Nombre:</label>
 					<input type="text" name="nombre"/>
        </p>
          <p>
          <label>Apellidos:</label>
          <input type="text" name="apellidos"/>
        </p>
          <p>
 					<label>Email:</label>
 					<input type="text" name="Email"/>
        </p>
        <P>
 					<label>Escribanos</label>
 						<textarea  name="comentario"
 						cols="60" rows="10">
 						</textarea>
          </P>
          <p>
 					<button type="submit" name="enviar mensaje">Enviar mensaje</button>
 					<button type="reset" name="limpiar datos">Limpiar datos</button>
        </p>
 	</form>
  <fieldset>
  </fieldset>
</fieldset>
</div>
</body>
</html>
  