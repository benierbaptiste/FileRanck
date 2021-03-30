<?php  
$connexion = new PDO('mysql:host=localhost;dbname=filesrank;charset=utf8', 'root', ''); 
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$req = $connexion->prepare('INSERT INTO utilisateur(NomUser,PrenomUser,MDPUser,LoginUser,IdType) values (:NomUser,:PrenomUser,:MDPUser,:LoginUser,:IdType)'); 
$req->execute(['NomUser' => htmlspecialchars($_POST['NomUser']),'PrenomUser' => htmlspecialchars($_POST['PrenomUser']),'LoginUser' => htmlspecialchars($_POST['LoginUser']),'MDPUser' => crypt($_POST['MDPUser']),'IdType' => htmlspecialchars($_POST['select_IdType'])]); 
$connexion = null;
header("location:index.php");
?> 