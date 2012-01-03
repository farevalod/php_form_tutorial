<?php
	$numero_ingresado = $_GET['num'];
	if(($numero_ingresado == 0)||($num_ingresado <0))
	{
		echo "Error";
	}
	else
	{
		$resto = $numero_ingresado % 2;
		if($resto == 1)
			echo "Es Impar";
		else
			echo "Es Par";
	}
?>
