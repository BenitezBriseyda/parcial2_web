<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5. Intercambio de variable PHP</title>
</head>
<body>
	<?php 
		$registros = array(
			array("id" => 1, "nombre" => "Ayaka", "edad" => 18, "sexo" => "F"),
			array("id" => 2, "nombre" => "Zhongli", "edad" => 25, "sexo" => "M"),
			array("id" => 3, "nombre" => "xioa", "edad" => 22, "sexo" => "M"),
			array("id" => 4, "nombre" => "Lisa", "edad" => 19, "sexo" => "F"),
			array("id" => 5, "nombre" => "sara", "edad" => 50, "sexo" => "F"),
			array("id" => 6, "nombre" => "Kaeya", "edad" => 26, "sexo" => "M"),
		);
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";


				}
				echo "<h1 style='color:yellow;'>Nombre: Briseyda Benitez Felix</h1>";

			?>
		</tbody>
	</table>
</body>
</html>