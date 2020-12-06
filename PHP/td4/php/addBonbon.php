<?php
include '../php/BDD.php';


$sql = $pdo->prepare('INSERT INTO bonbon (nomProduit, description, prix, image) VALUES (:nomBonbon, :descBonbon, :prixBonbon, :imgBonbon)');

if(empty($_POST)){ /* Si La variable $_POST est vide lorsd de lappel les alias
prennent les valurs de variables suivantes */
	
	$req=$sql->execute(array(
	'nomBonbon' => $nomBonbon,
	'descBonbon' => $descBonbon,
	'prixBonbon' => $prixBonbon,
	'imgBonbon' => $imgBonbon,
)
);

}

else{
	
$req=$sql->execute(array(
	'nomBonbon' => $_POST['nomBonbon'],
	'descBonbon' => $_POST['descBonbon'],
	'prixBonbon' => $_POST['prixBonbon'],
	'imgBonbon' => $_POST['imgBonbon'],
)
);

}


if($sql){
    echo "Le bonbon a été ajouté";
}
else{
	echo "Error: " .$sql;
}


?>