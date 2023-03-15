
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Resultat exponencial </title>
</head>

<body>

	<?php
		$base= $_POST['base'];
		$exponent= $_POST['exponent'];
		print("<p>".$base." ^ ".$exponent." = ".pow($base, $exponent)."</p>");
	?>

</body>

</html>

