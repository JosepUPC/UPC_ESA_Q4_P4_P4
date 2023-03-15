<!DOCTYPE html>
<?php include ("db.php");?>


<html>

<head>
	<title>CRUD PHP & MySQL</title>
	<meta charset="UTF-8">
</head>

<body>                
	<form method="POST" action="Crea_grup.php">
		<label>Codi:</label><br>
			<input type "number" name="id" placeholder="escriu codi grup"><br>
		<label>Nom:</label><br>
			<input type "text" name="nom" placeholder="escriu nom grup"><br>
		<label>Origen:</label><br>
			<input type "text" name="origen" placeholder="escriu origen grup"><br>
		<label>Any:</label><br>
			<input type "number" name="anyFundacio" placeholder="escriu any fundacio grup"><br>

			<input type = "submit" name ="insert" value="INSERIR DADES">
	</form>

	
</body>
</html>


