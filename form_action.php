<?php
	$numero_ingresado = $_GET['num'];
	if($numero_ingresado < 0)
	{
		echo "Es Negativo";
	}
	else
	{
		if(($numero_ingresado == 0)||($numero_ingresado < 0))
		{
			echo "Es Cero";
		}
		else
		{
			$resto = $numero_ingresado % 2;
			if($resto == 1)
				echo "Es Impar";
			else
				echo "Es Par";
		}
	}
?>
