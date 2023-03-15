<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Resultat exponencial </title>
</head>

<body>

	<?php
		print("<p>".$_GET["base"]." ^ ".$_GET["exponent"]." = ".pow($_GET["base"], $_GET["exponent"])."</p>");
	?>

</body>

</html>


