<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Connexion</title>
</head>
<?php
require_once("header.php");
?>
<?php
 require_once('inc/manager-db.php');
 // on teste si nos variables sont définies et remplies
 if (isset($_POST['identifier']) && isset($_POST['password']) && !empty($_POST['identifier'])&& !
empty($_POST['identifier'])) {
 // on appele la fonction getAuthentification en lui passant en paramètre le login et password
 //la fonction retourne les caractéristiques du salaries si il est connu sinon elle retourne false
 $result = getAuthentification($_POST['identifier'],$_POST['password']);
 print_r($result);
 // si le résulat n'est pas false
 if($result){
// on la démarre la session
session_start ();
// on enregistre les paramètres de notre visiteur comme variables de session
$_SESSION['name'] = $result->name;
$_SESSION['identifier'] = $result->iduser;
$_SESSION['role'] = $result->role;
// on redirige notre visiteur vers une page de notre section membre
header ('location: index.php.php');

 }
 //si le résultat est false on redirige vers la page d'authentification
 else{
 header ('location: authentification.php');
 }
 }

 //si nos variables ne sont pas renseignées on redirige vers la page d'authentification
 else {
 header ('location: authentification.php');
 }
 ?> 