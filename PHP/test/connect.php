<?php
	if(isset($_GET['connect']))
	$cx=$_GET['connect'];
	
	if(isset($cx) && $cx=='false')
		echo "<p>Mot de passe erroné </p>";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>test</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="" />
  </head>
  <body>
	<header ="colonne2">
		<h1>TEST form</h1>
	</header>

	
	<form method="post" action="go.php" >
		<p>NOM: </p><input type="text" name="nom" />
		<p>Mot de passe: </p><input type="password" name="pwd" />
		<input type="submit" value="Se connecter" />
	</form>
	

</body>
</html>