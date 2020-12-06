<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Modification page</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="assets/feuilleBonbon.css" />
  </head>
  <body id="acceuil">
	<header ="colonne2">
		<h1>Modification page</h1>
	</header>
	<main class="colonne2">
		<form action="update.php" method="post" enctype="multipart/form-data">
			<label for="name">Titre : <input name="titre" id="titre"></label>
			<label for="texte">Texte : <input type="textarea" name="textSite" id="textSite"></label>
			<label for="fichier">Fichier(s) : <input type="file" name="image" id="image"></label>
			<button>Modifier</button> 
			<button><em>Annuler</em></button>
		</form>
		
	</main>
	<footer class="colonne2">
		Article récupéré, en grande partie sur google
		<a href="./tool.php"><p></p>
	</footer>
  </body>
</html>