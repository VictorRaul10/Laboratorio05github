<!DOCTYPE html>
<html>
<head>
	<title>Calculo del Sueldo</title>
</head>
<body>
	<h1>Calculo del Sueldo</h1>
	<?php
		$ventas = $_POST['ventas'];
		$hijos = $_POST['hijos'];

		$comision = $ventas * 0.075;
		$bonificacion = $hijos * 50;
		$sueldo_bruto = 600 + $comision + $bonificacion;

		$descuento = $sueldo_bruto * 0.11;
		$sueldo_neto = $sueldo_bruto - $descuento;

		echo "<p>El importe total vendido del mes es: S/. $ventas</p>";
		echo "<p>La cantidad de hijos en edad escolar es: $hijos</p>";
		echo "<p>La comisión es: S/. $comision</p>";
		echo "<p>La bonificación es: S/. $bonificacion</p>";
		echo "<p>El sueldo bruto es: S/. $sueldo_bruto</p>";
		echo "<p>El descuento es: S/. $descuento</p>";
		echo "<p>El sueldo neto de un vendedor es: S/. $sueldo_neto</p>";
	?>
</body>
</html>