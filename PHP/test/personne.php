<!DOCTYPE html>
<html>
  <head>
    <title>test</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="t.css" />
  </head>
  <body>
	<header ="colonne2">
		<h1>TEST</h1>
	</header>


<?php
	$cnxBDD= new PDO(); 
	
	
	$req='SELECT * FROM personne';
	
	$res=$cnxBDD -> query($req);
	
	
	
	while($enreg=$res->fetch()){
		$id=$enreg['id'];
		$nom=$enreg['nom'];
		$prenom=$enreg['prenom'];
		
		echo '<div id="tes">';
		echo '<p>NOM : ';
		echo $nom;
		echo '</p>';
		echo '</div>';
		
		echo '<div id="tes">';
		echo '<p>PRENOM : ';
		echo $prenom;
		echo '</p>';
		echo '</div>';
		
		echo '<div id="tes">';
		echo '<p>ID : ';
		echo $id;
		echo '</p>';
		echo '</div>';
		
	}
?>

</body>
</html>