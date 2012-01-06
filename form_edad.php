<?php
	echo "<html>";
	echo "<head>";
	echo "<link href='custom.css' rel='stylesheet' type='text/css'>";
	echo "<link href='bootstrap.min.css' rel='stylesheet' type='text/css'>";
	echo "<title>Formulario para ingreso de edad</title></head>";
	echo "<body>";
	echo "<h1>Formulario para ingreso de edad</h1>";
	echo "<div class='formulario'>";
	echo "<form action='form_action_edad.php' method='get'>";
	echo "<fieldset><legend>Ingrese su a&ntilde;o de nacimiento</legend>";
	echo "<div class='clearfix'>";
		echo "<label for='num'>Edad</label>";
		echo "<div class='input'>";
		echo "<select>";
		for($i=1901;$i<2012;$i++)
			echo "<option>".$i."</option>";
		echo "</select>";
		echo "</div>";
	echo "</div>";
	echo "<input class='btn primary' type='submit' value='Enviar'>";
	echo "</div>";
	echo "</body>";
	echo "</html>";
?>
