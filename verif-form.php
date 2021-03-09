<!DOCTYPE html>
<html>
<head>
<?php
if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher");
$_GET["terme"]=htmlspecialchars($_get["terme"]);
$terme = $_GET["terme"];
$terme = trim($terme);
$terme = strip_tags($terme);
if (isset ($terme)) $terme = ucwords($terme);
$select_terme = $bdd->prepare("SELECT TitreDoc FROM Document WHERE TitreDoc LIKE?");
$select_terme->execute(array("%".$terme."%"));
else $message = "Vous devez entrer votre requête dans la barre de recherche";
?>
</head>
<body>
