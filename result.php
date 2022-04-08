<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Ajout Utilisateur</title>
</head>
<body class="bg-white">
<?php
require_once("authentification.php");
require_once("header.php");
require_once("inc/connect-db.php");
require_once("inc/manager-db.php");
ajoutUtilisateur();




//if ( !($result = mysqli_query($conn,$requete) ) )
 //die("Erreur dans la requete: " . mysqli_error($conn));
//else
//echo "<h1 class='text-success'>L'esclave a été ajouté avec succès</h1>";
?>