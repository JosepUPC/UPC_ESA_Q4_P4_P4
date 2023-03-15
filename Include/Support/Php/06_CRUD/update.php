<?php
include("db.php");

	if(isset($_GET['editar'])){
		$editar_id=$_GET['editar'];
		$consulta="SELECT * FROM grups WHERE id='$editar_id'";
		$executar = mysqli_query($con, $consulta);
		$fila= mysqli_fetch_array($executar);
		$nom=$fila['nom'];
		$origen=$fila['origen'];
		$anyFundacio=$fila['anyFundacio'];
	}


?>
<br>

<form method="POST" action="">
		<input type= "text" name="nom" value="<?php echo $nom; ?>"><br>
		<input type= "text" name="origen" value="<?php echo $origen; ?>"><br>
		<input type= "number" name="anyFundacio" value="<?php echo $anyFundacio; ?>"><br>
		<input type ="submit" name="actualitzar" value="ACTUALITZAR DADES">		
</form>

<?php
	if (isset($_POST['actualitzar'])){
		$actualitzar_nom = $_POST['nom'];
		$actualitzar_origen = $_POST['origen'];
		$actualitzar_anyFundacio = $_POST['anyFundacio'];
		$actualitzar = "UPDATE grups SET nom='$actualitzar_nom', origen='$actualitzar_origen', anyfundacio='$actualitzar_anyFundacio' where id=$editar_id";
		$executar=mysqli_query($con,$actualitzar);
		if ($executar){
			//echo"<script>alert('Datos actualizados!');</script>";
            //echo"<script>window.open('formulario.php', '_self');</script>";
            header("Location: index.php");//redirecciona a index.php

		}
	}
?>