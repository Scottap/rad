<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$xoe = 300;
		$xto = 400;
		$zot = $xoe + $xto;
		$xsix = $xto + "600";

		if($zot > "1000") {
			echo "Increíblemente, 300 + 400 han dado como resultado 1000";
		} 
			else {
			echo "El resultado es:". $zot;
			echo "<br>";
			} 
		if ("300" + "300" == "900") {
			echo "lol";
		}
			elseif ($xoe + "600" >"999") {
				echo "el número es mayor que 999? wtf m8 o:";
			}
			elseif ($xsix >"999") {
				echo "xsix es mayor que 999". "<br>";
				echo "el valor de xsix es" . $xsix;
			}
			else {
				echo "Nani?";
			}



	?>
	
</body>
</html>
