<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Inscription</title>
</head>
<?php
require_once("header.php");
?>
<body class="bg-white">
	<form action="result.php"method="get">
  <div class="form-group col-md-4">
                <label class="text-dark">Nom : </label>
                <input type="text" class="form-control" name="Nom" placeholder="dupont" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Prenom : </label>
                <input type="text" class="form-control" name="Prenom" placeholder="dupont" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Identifiant : </label>
                <input type="text" class="form-control" name="user" placeholder="DarkTitouan77310" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Mot de passe : </label>
                <input type="password" class="form-control" name="password" placeholder="Brakmar77!" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Ville : </label>
                <input type="text" class="form-control" name="Ville" placeholder="Saint-Fargeau-Ponthierry" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Date de naissance : </label>
                <input type="date" class="form-control" name="Date_n" min="1900-01-01" max="2100-12-31" value="1900-12-31">
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Departement : </label>
                <p></p>
                <select name="Dpt" class="form-control">
                    <?php for($i= 1; $i<= 974; $i++){
                        echo "<option>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Rôle : </label>
                <select class="form-control" name="role" required>
		            <option></option>
		            <option>Eleve</option>
                    <option>Professeur</option>
                    <option>Administrateur</option>
	            </select>
            </div>
            <div class="form-group col-md-4">
  <button type="submit" class="btn btn-success" style="margin-left:200px ;">S'inscrire</button>
</form>
</body>
</html>