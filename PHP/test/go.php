<?php
$pdo = new PDO();

$nom=$_POST['nom'];
$password=$_POST['pwd'];

$cnx="SELECT * FROM user WHERE utilisateur='$nom' AND pwd='$password'";

$cnx=$pdo->query($cnx);



$tabUser=$cnx->fetch();

echo $tabUser[$n];

if($nom==$tabUser[$n] && $password==$tabUser[$p])
	header('location:ok.html');
else
	header('location:connect.php?connect=false');
?>
	