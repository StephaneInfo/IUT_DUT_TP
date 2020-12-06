<!DOCTYPE html>
<html>
  <head>
    <title>A faim de Bonbon</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="./assets/feuilleBonbon.css" />
  </head>
  <body id="acceuil">
	<header ="colonne2">
		<h1>A faim de Bonbon</h1>
	</header>
	<aside class="colonne1">
		<a href="./index.php"><img  src="./assets/bonbonPapillote.png" alt="bonbon en paillotte"><p>Accueil</p></a>
		
	</aside>
	<nav class="colonne1">
		<a href="./catalogue.php"><div id="p1lien1"> 
			<p>Notre catalogue</p>
		</div></a>
	</nav>
	<main class="colonne2">
	
	<?php
	
	$row=1;
	
	include './php/BDD.php';
	
	$req="SELECT * FROM bonbon";
	
	$cnx=$pdo->query($req);
	
	$i=1;
	
	while($tabBonbon=$cnx->fetch()){
	 if($i==6){
		 $row=2;
	 }
	 if($i==11){
		 $row=3;
	 }
	?>
	<div class="row<?php echo $row ?>">
	<div>
	<img  src="./assets/produit1/<?php echo $tabBonbon['image']?>" alt="<?php echo $tabBonbon['nomProduit'] ?>" class="produit"><p><?php echo $i ?></p>
		<p>Nom du produit : <?php echo $tabBonbon['nomProduit']?></p>
		<p>Description :<?php echo $tabBonbon['description'] ?></p>
		<p>Prix du produit : <?php echo $tabBonbon['prix'] ?></p>
	<?php
		$i++;
	
	?>
	</div>
	</div>
	<?php } ?>
	</main>
	<footer class="colonne2">
		Article récupéré, en grande partie sur google
	</footer>
  </body>
</html>