<?php
session_start();

$pdo = new PDO();

$nom=$_POST['nom'];
$password=$_POST['pwd'];

$req="SELECT * FROM user WHERE utilisateur='$nom' AND pwd='$password'";


echo $req;


$cnx=$pdo->query($req);



$tabUser=$cnx->fetch();
if($tabUser){
	$_SESSION['admin']=true;
	header('location:tool.php');
}
else{
	header('location:connect.php?connect=false');
}

?>
	