 					<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" type="text/css" href="../../../public/css/style.css">
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
  