<?php

$ruta = ControladorRuta::ctrRuta();

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hotel Portobelo</title>

	<base href="vistas/">

	<link rel="icon" href="img/icono.jpg">

	<!--=====================================
	VÍNCULOS CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Fuente Open Sans y Ubuntu -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Ubuntu" rel="stylesheet">

	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="css/plugins/bootstrap-datepicker.standalone.min.css">

	<!-- jdSlider -->
	<link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">

	<!-- Pano -->
	<link rel="stylesheet" href="css/plugins/jquery.pano.css">

	 <!-- fullCalendar -->
	<link rel="stylesheet" href="css/plugins/fullcalendar.min.css">

	<!-- Hoja de estilo personalizada -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/habitaciones.css">
	<link rel="stylesheet" href="css/reservas.css">
	<link rel="stylesheet" href="css/perfil.css">

	<!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- bootstrap datepicker -->
	<!-- https://bootstrap-datepicker.readthedocs.io/en/latest/ -->
	<script src="js/plugins/bootstrap-datepicker.min.js"></script>

	<!-- https://easings.net/es# -->
	<script src="js/plugins/jquery.easing.js"></script>

	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<script src="js/plugins/scrollUP.js"></script>

	<!-- jdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="js/plugins/jquery.jdSlider-latest.js"></script>

	<!-- Pano -->
	<!-- https://www.jqueryscript.net/other/360-Degree-Panoramic-Image-Viewer-with-jQuery-Pano.html -->
	<script src="js/plugins/jquery.pano.js"></script>

	<!-- fullCalendar -->
	<!-- https://momentjs.com/ -->
	<script src="js/plugins/moment.js"></script>
	<!-- https://fullcalendar.io/docs/background-events-demo -->
	<script src="js/plugins/fullcalendar.min.js"></script>


</head>
<body>

<?php

include "paginas/modulos/header.php";

/*=============================================
PÁGINAS
=============================================*/

if(isset($_GET["pagina"])){

	if($_GET["pagina"] == "habitacionSuite"){

		include "paginas/habitacionSuite.php";


	}
	if($_GET["pagina"] == "habitacionEspecial"){

		include "paginas/habitacionEspecial.php";


	}
	if($_GET["pagina"] == "habitacionEstandar"){

		include "paginas/habitacionEstandar.php";


	}


	if($_GET["pagina"] == "reservas"){

		include "paginas/reservas.php";

	}

	if($_GET["pagina"] == "perfil"){

		include "paginas/perfil.php";

	}


}else{

	include "paginas/inicio.php";

}


/*=============================================
PÁGINAS
=============================================*/

// Comprobando si los datos se envian por el metodo POST
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	echo "Se enviaron por POST";
// }

$errores = '';
$enviado = '';

// Comprobamos que el formulario haya sido enviado.
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$tipo = $_POST['tipo'];
	$entrada = $_POST['entrada'];
	$salida = $_POST['salida'];
	$mensaje = $_POST['mensaje'];

// Comprobamos que el nombre no este vacio.
	if (!empty($nombre)) {
		// Sabeamos el nombre para eliminar caracteres que no deberian estar.
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($nombre == "") {
			$errores.= 'Por favor ingresa un nombre.<br />';
		}
	} else {
		$errores.= 'Por favor ingresa un nombre.<br />';
	}

	if (!empty($tipo)) {
		// Sabeamos el nombre para eliminar caracteres que no deberian estar.
		// $nombre = trim($nombre);
		// $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($tipo == "") {
			$errores.= 'Por favor ingresa una tipoo.<br />';
		}
	} else {
		$errores.= 'Por favor ingresa una tipo.<br />';
	}

	if (!empty($entrada)) {
		// Sabeamos el nombre para eliminar caracteres que no deberian estar.
		// $nombre = trim($nombre);
		// $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($entrada == "") {
			$errores.= 'Por favor ingresa un entrada.<br />';
		}
	} else {
		$errores.= 'Por favor ingresa un entrada<br />';
	}

	if (!empty($salida)) {
		// Sabeamos el nombre para eliminar caracteres que no deberian estar.
		// $nombre = trim($nombre);
		// $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($salida == "") {
			$errores.= 'Por favor ingresa una salida.<br />';
		}
	} else {
		$errores.= 'Por favor ingresa una salida.<br />';
	}


	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		// Comprobamos que sea un correo valido
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores.= "Por favor ingresa un correo valido.<br />";
		}
	} else {
		$errores.= 'Por favor ingresa un correo.<br />';
	}


	if (!empty($mensaje)) {
		// Podemos sanear la cadena de texto con filter_var, pero queremos que en el mensaje los signos se conviertan en entidades HTML
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores.= 'Por favor ingresa el mensaje.<br />';
	}

// Comprobamos si hay errores, si no hay entonces enviamos.
	if (!$errores) {
		$enviar_a = 'daniel.almanza31@gmail.com';
		$asunto = 'Correo enviado desde HOTEL MAR Y SOL';
		$mensaje = "De: $nombre \n";
		$mensaje.= "Correo: $correo \n";
		$mensaje.= "Tipo: $tipo \n";
		$mensaje.= "Entrada: $entrada \n";
		$mensaje.= "Salida: $salida \n";
		$mensaje.= 'Mensaje: ' . $_POST['mensaje'];

  mail($enviar_a, $asunto, $mensaje);
		$enviado = 'true';

	}
}

// require 'modulos/index.view.php';



include "paginas/modulos/footer.php";

include "paginas/modulos/modal.php";

?>

<script src="js/script.js"></script>

</body>
</html>