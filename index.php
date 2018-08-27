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
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2811.752938528319!2d-74.10240961555694!3d4.697013500814614!3m2!1i1024!2i768!4f13.1!4m3!3e2!4m0!4m0!5e0!3m2!1ses!2sco!4v1533016823228" width="100" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
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
	<?php include ('views/front/forms/register.php'); ?>
	</article>
</section>
<?php include ("views/front/templates/foot.php"); ?>