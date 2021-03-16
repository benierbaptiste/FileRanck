
<?php  
	$connexion = new PDO('mysql:host=localhost;dbname=filesrank;charset=utf8', 'root', ''); 
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$req = $connexion->prepare('INSERT INTO utilisateur(NomUser,PrenomUser,MDPUser,LoginUser) values (:NomUser,:PrenomUser,:MDPUser,:LoginUser)'); 
    $req->execute(['NomUser' => htmlspecialchars($_POST['nom']),'PrenomUser' => htmlspecialchars($_POST['prenom'])'LoginUser' => htmlspecialchars($_POST['LoginUser'])'MDPUser' => htmlspecialchars($_POST['MDPUser'])]); 
	$connexion = null;
    header("location:inscription.php");
 ?> 