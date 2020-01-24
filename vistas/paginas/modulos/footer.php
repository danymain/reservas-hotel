<!--=====================================
CONTÁCTENOS
======================================-->

<div class="contactenos container-fluid bg-white py-4" id="contactenos">

	<div class="container text-center">

		<h1 class="py-sm-4">CONTÁCTENOS</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">

			<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error" role="alert">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado) : ?>
				<div class="alert success" role="alert">
					<?php echo '<script type="text/javascript">
									alert("Reservacion enviada con exito en breve te enviaremos una repsuesta a tu correo electronico");
   								 window.location.href="http://localhost/reservas-hotel/index.php";
   								 </script>';  ?>
				</div>
			<?php endif; ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>

	</div>

</div>

<!--=====================================
MAPA
======================================-->
<div class="mapa container-fluid bg-white p-0">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2181015083097!2d-75.16167268476889!3d6.2349559954867315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e441d2a2f90b049%3A0xe73c0a7060062903!2sHOTEL+PORTOBELO+GUATAPE!5e0!3m2!1ses!2sco!4v1544281019677" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<div class=" p-4 info">

		<h3 class="mt-4"><strong>Visítanos</strong></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

		<p>
		Apple inc.<br>
		Infinte Loop.<br>
		Cupertino, CA 95014<br>
		408-996-1010
		</p>

		<p class="pb-4">Email: info@apple.com<br>
		Tel: 1-800-676-2775</p>

	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid p-0">

	<div class="grid-container">

		<div class="grid-item d-none d-lg-block pt-2"></div>

		<div class="grid-item d-none d-lg-block pt-2">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat.</p>

		</div>

		<div class="grid-item pt-2">

			<ul class="py-1">

				<li>
					<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube lead text-white float-left mx-3"></i></a>
				</li>


				<li>
					<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram lead text-white float-left mx-3"></i></a>
				</li>

			</ul>

		</div>

	</div>

</footer>

<!--=====================================
REDES SOCIALES MÓVIL
======================================-->

<ul class="redesMovil p-2 nav nav-justified">

	<li class="nav-item">
		<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram lead text-white"></i></a>
	</li>

</ul>
