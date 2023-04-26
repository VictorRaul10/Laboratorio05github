<!DOCTYPE html>
<html>
<head>
	<title>Fabrica de Gaseosas</title>
</head>
<body>
	<h1>Calculo de precio</h1>
	<form method="post">
		<label for="precio">Precio actual de la gaseosa de 3 litros:</label>
		<input type="number" step="0.01" name="precio" id="precio" required><br>

		<label for="cantidad">Cantidad de unidades adquiridas:</label>
		<input type="number" name="cantidad" id="cantidad" required><br>

		<input type="submit" value="Calcular">
	</form>

	<?php
		if (isset($_POST['precio']) && isset($_POST['cantidad'])) {
			$precio_actual = $_POST['precio'];
			$cantidad = $_POST['cantidad'];
			$descuento_porcentaje = 0.07;
			$rebaja_porcentaje = 0.05;

			$rebaja = $precio_actual * $rebaja_porcentaje;
			$precio_nuevo = $precio_actual - $rebaja;
			$importe = $precio_nuevo * $cantidad;
			$descuento = $importe * $descuento_porcentaje;
			$importe_final = $importe - $descuento;
			$obsequio = $cantidad * 2;

			echo "<h2>Resultados</h2>";
			echo "<p>Precio nuevo de la gaseosa: S/." . number_format($precio_nuevo, 2) . "</p>";
			echo "<p>Importe de la compra: $" . number_format($importe, 2) . "</p>";
			echo "<p>Importe del descuento: $" . number_format($descuento, 2) . "</p>";
			echo "<p>Importe a pagar: $" . number_format($importe_final, 2) . "</p>";
			echo "<p>Cantidad de caramelos obsequiados: " . $obsequio . "</p>";
		}
	?>
</body>
</html>