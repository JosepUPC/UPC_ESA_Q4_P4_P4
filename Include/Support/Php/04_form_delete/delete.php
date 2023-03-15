<?php
include("db.php");
	if(isset($_GET['borrar'])){
		$borrar_id=$_GET['borrar'];
		$consulta="DELETE FROM grups WHERE id=$borrar_id";
		$executar = mysqli_query($con, $consulta);
		if ($executar){
			//echo"<script>alert('Datos borrados!');</script>";
            //echo"<script>window.open('index.php', '_self');</script>";
            header("Location: index.php");//redirecciona a index.php
        }
        
	}
?>
