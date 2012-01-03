<?php
	echo "<html>";
	echo "<head>";
	echo "<link href='custom.css' rel='stylesheet' type='text/css'>";
	echo "<link href='bootstrap.min.css' rel='stylesheet' type='text/css'>";
	echo "<title>Par o impar</title></head>";
	echo "<body>";
	echo "<h1>Prueba de par o impar</h1>";
	echo "<div style='font-size:20pt'>Ingrese un n&uacute;mero y el programa determinar&aacute; si es par o impar:</div>";
	echo "<div class='formulario'>";
	echo "<form action='form_action.php' method='get'>";
	echo "<fieldset><legend>Par o impar</legend>";
	echo "<div class='clearfix'>";
		echo "<label for='num'>Ingrese un n&uacute;mero</label>";
		echo "<div class='input'>";
			echo "<input id='num' name='num' type='text'>";
		echo "</div>";
	echo "</div>";
	echo "<input class='btn primary' type='submit' value='Enviar'>";
	echo "</div>";
	echo "</body>";
	echo "</html>";
?>
