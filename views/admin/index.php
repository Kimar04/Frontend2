<?php include('templates/head.php'); ?>
<aside>
	<div class="aside">
		<figure>
			<image src="http://localhost/Frontend/public/images/Usuario.jpg" width="25"/>
		</figure>
		<h2>Bienvenid@: <i>

				<?php 
				if(isset($nombre)){
					echo $nombre;
				}?>
					
				</i></h2>
		<p><?php 
				if(isset($correo)){
					echo $correo;
				}?></p>
	</div>
	<p>Secion de navegacion</p>
	<ul>
		<li>Home</li>
		<li>Typografia</li>
		<li>Colores</li>
		<li>Interface</li>
		<li>Tamaños</li>
		<li>Usuarios</li>
		<li>lugares</li>
		<li>Registros</li>
		<li>Visitas</li>
	</ul>
</aside>
<section>
	<article class="inf1">
		<div class="cbox1">
		</div>
		<div class="cbox2">
		</div>
		<div class="cbox3">
		</div>
		<div class="cbox4">
		</div>
	</article>
	<article class="inf2">
		<figure>
			<image src=""/>
		</figure>
	</article>
	<article class="inf3">
		<div class="cbox5">
		</div>
		<div class="cbox6">
		</div>
		<div class="cbox7">
		</div>
	</article>
</section>
<?php 
include ('templates/foot.php');
?>