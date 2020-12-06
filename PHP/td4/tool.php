<!DOCTYPE html>
<html>
  <head>
    <title>Administration</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="" />
  </head>
  <body>
	<header ="colonne2">
		<h1>Administration</h1>
	</header>
<?php
session_start();

$pdo = new PDO();
	$req="SELECT * FROM bonbon";
	
	$cnx=$pdo->query($req);
	
	while($tabBonbon=$cnx->fetch()){
	
?>	
		<p>ID : <?php echo $tabBonbon['id']?></p>
		<p>Nom du produit : <?php echo $tabBonbon['nomProduit']?></p>
		<p>Description : <?php echo $tabBonbon['description']?></p>
		<p>Prix du produit : <?php echo $tabBonbon['prix']?></p>
		<p>Image : <?php echo $tabBonbon['image']?></p>
		
	<?php	
	}
	?>
	<form method="post" action="./php/addBonbon.php">
		<p>Nom du bonbon</p><input type="text" name="nomBonbon" />
		<p>Description du bonbon</p><textarea name="descBonbon" rows=4 cols=20></textarea>
		<p>Prix du bonbon</p><input type="text" name="prixBonbon" />
		<p>Image du bonbon</p><input type="text" name="imgBonbon" />
		<button>Valider</button>
	</form>
		<a href="connect.php"><p>Se déconnecter</p>
</body>
</html>