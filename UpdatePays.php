<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Update Pays</title>
</head>
<?php
require_once("header.php");
?>
<body class="bg-white">
	<form action="index.php"method="post">
  <div class="form-group col-md-4">
                <label class="text-dark">Code : </label>
                <input type="text" class="form-control" name="Code" placeholder="ABC" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Nom : </label>
                <input type="text" class="form-control" name="Name" placeholder="woippy" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Nom Local : </label>
                <input type="text" class="form-control" name="LocalName" placeholder="woippy" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Surface : </label>
                <input type="number" class="form-control" name="SurfaceArea" placeholder="667" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Année d'indépendance: </label>
                <input type="number" class="form-control" name="IndepYear" placeholder="800" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Population : </label>
                <input type="number" class="form-control" name="Population" placeholder="54565" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Espérance de vie : </label>
                <input type="number" class="form-control" name="LifeExpectancy" placeholder="10" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">type de gouvernement : </label>
                <input type="text" class="form-control" name="GovernementForm" placeholder="Empire" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">chef d'Etat : </label>
                <input type="text" class="form-control" name="HeadOfState" placeholder="Flamby aka Hollande" required>
            </div>  
            <div class="form-group col-md-4">
  <button type="submit" class="btn btn-success" style="margin-left:200px ;">Soumettre</button>
</form>
</body>
</html>