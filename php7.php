<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		// funciones
		/* 
			semejantes a la declaracion de funciones en javascript 
			de declaran con la palabra reservada "function" constan 
			de nombre, parametros y valores de retorno 
		*/
		
		function FuncionSuma ($numero1, $numero2){
			$numero3 = $umero1 + $numero2;
			return $numero3;
		}

		function FuncionResta ($numero1, $numero2){
			$numero3 = $numero1 + $numero2;
			return $numero3;
		}

		function FuncionMult ($numero1, $numero2){
			$numero3 = $umero1 * $numero2;
			return $numero3;
		}

		function FuncionDiv ($numero1, $numero2){
			$numero3 = $numero1 * $numero2;
			return $numero3;
		}

		$suma = FuncionSuma(1,1);
		$rest = FuncionResta(1,1);
		$mult = FuncionMult(1,1);
		$div  = FuncionDiv(1,1);

		echo "$suma $rest $mult $div";
	 ?>
</body>
</html>