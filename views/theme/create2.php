<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
	$name = $_POST["libelle"];
	$description=$_POST["description"];
	echo $name;?><br>
	<?php
	echo $description;
	try
	{
		$connexion = new PDO('mysql:host=localhost;dbname=filranck;charset=utf8', 'root', '');
		$reponse = $connexion->exec("INSERT INTO theme(NomTheme, DescriptionTheme) VALUES ('$name', '$description')");
	}
	catch (PDOException $e)
	{
		include "views/404.php";
	}

?>
</body>
