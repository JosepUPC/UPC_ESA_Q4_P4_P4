<!DOCTYPE html>
<!-- <meta charset="UTF-8"> -->
<?php include("db.php")?>

<html>
<head>
	<title>CRUD PHP & MySQL</title>
	<meta charset="UTF-8">
</head>

<body>

<table width="500" border="2" style = "background-color=#F9F9F9">
		<tr>
			<th>ID</th>
			<th>NOM</th>
			<th>Origen</th>
			<th>Any Fundacio</th>
			<th>Borrar</th>
		</tr>

		<?php 
			$consulta="SELECT * FROM grups;";
			$executar=mysqli_query($con,$consulta);
			$i=0;
			while($fila=mysqli_fetch_array($executar)){
				$id= $fila['id'];
				$nom= $fila['nom'];
				$origen= $fila['origen'];
				$anyFundacio= $fila['anyFundacio'];

				$i++;	
		?>

		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $nom; ?></td>
			<td><?php echo $origen; ?></td>
			<td><?php echo $anyFundacio; ?></td>
			<td><a href= "delete.php?borrar=<?php echo $id; ?>">Borrar</a></td>

		</tr>
		<?php } ?>

	</table>
</body>
</html>