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
                <input type="text" class="form-control" name="name" placeholder="dupont" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Prenom : </label>
                <input type="text" class="form-control" name="username" placeholder="dupont" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Identifiant : </label>
                <input type="text" class="form-control" name="identifier" placeholder="DarkTitouan77310" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Mot de passe : </label>
                <input type="password" class="form-control" name="password" placeholder="Brakmar77!" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Ville : </label>
                <input type="text" class="form-control" name="ville" placeholder="Saint-Fargeau-Ponthierry" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Date de naissance : </label>
                <input type="date" class="form-control" name="date_birth" min="1900-01-01" max="2100-12-31" value="1900-12-31">
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Departement : </label>
                <p></p>
                <select name="dpt" class="form-control">
                    <option>Ain</option> 
                    <option>Aisne</option> 
                    <option>Allier</option> 
                    <option>Alpes-de-Haute-Provence</option> 
                    <option>Hautes-Alpes</option> 
                    <option>Alpes-Maritimes</option> 
                    <option>Ardèche</option> 
                    <option>Ardennes</option> 
                    <option>Ariège</option> 
                    <option>Aube</option> 
                    <option>Aude</option> 
                    <option>Aveyron</option> 
                    <option>Bouches-du-Rhône</option> 
                    <option>Calvados</option> 
                    <option>Cantal</option> 
                    <option>Charente</option> 
                    <option>Charente-Maritime</option> 
                    <option>Cher</option> 
                    <option>Corrèze</option> 
                    <option>Côte-d'Or</option> 
                    <option>Côtes-d'Armor</option> 
                    <option>Creuse</option> 
                    <option>Dordogne</option> 
                    <option>Doubs</option> 
                    <option>Drôme</option> 
                    <option>Eure</option> 
                    <option>Eure-et-Loir</option> 
                    <option>Finistère</option> 
                    <option>Corse-du-Sud</option> 
                    <option>Haute-Corse</option> 
                    <option>Gard</option> 
                    <option>Haute-Garonne</option> 
                    <option>Gers</option> 
                    <option>Gironde</option> 
                    <option>Hérault</option> 
                    <option>Ille-et-Vilaine</option> 
                    <option>Indre</option> 
                    <option>Indre-et-Loire</option> 
                    <option>Isère</option> 
                    <option>Jura</option> 
                    <option>Landes</option> 
                    <option>Loir-et-Cher</option> 
                    <option>Loire</option> 
                    <option>Haute-Loire</option> 
                    <option>Loire-Atlantique</option> 
                    <option>Loiret</option> 
                    <option>Lot</option> 
                    <option>Lot-et-Garonne</option> 
                    <option>Lozère</option> 
                    <option>Maine-et-Loire</option> 
                    <option>Manche</option> 
                    <option>Marne</option> 
                    <option>Haute-Marne</option> 
                    <option>Mayenne</option> 
                    <option>Meurthe-et-Moselle</option> 
                    <option>Meuse</option> 
                    <option>Morbihan</option> 
                    <option>Moselle</option> 
                    <option>Nièvre</option> 
                    <option>Nord</option> 
                    <option>Oise</option> 
                    <option>Orne</option> 
                    <option>Pas-de-Calais</option> 
                    <option>Puy-de-Dôme</option> 
                    <option>Pyrénées-Atlantiques</option> 
                    <option>Hautes-Pyrénées</option> 
                    <option>Pyrénées-Orientales</option> 
                    <option>Bas-Rhin</option> 
                    <option>Haut-Rhin</option> 
                    <option>Rhône</option> 
                    <option>Haute-Saône</option> 
                    <option>Saône-et-Loire</option> 
                    <option>Sarthe</option> 
                    <option>Savoie</option> 
                    <option>Haute-Savoie</option> 
                    <option>Paris</option> 
                    <option>Seine-Maritime</option> 
                    <option>Seine-et-Marne</option> 
                    <option>Yvelines</option> 
                    <option>Deux-Sèvres</option> 
                    <option>Somme</option> 
                    <option>Tarn</option> 
                    <option>Tarn-et-Garonne</option> 
                    <option>Var</option> 
                    <option>Vaucluse</option> 
                    <option>Vendée</option> 
                    <option>Vienne</option> 
                    <option>Haute-Vienne</option> 
                    <option>Vosges</option> 
                    <option>Yonne</option> 
                    <option>Territoire de Belfort</option> 
                    <option>Essonne</option> 
                    <option>Hauts-de-Seine</option> 
                    <option>Seine-Saint-Denis</option> 
                    <option>Val-de-Marne</option> 
                    <option>Val-d'Oise</option> 
                    <option>Guadeloupe</option> 
                    <option>Martinique</option> 
                    <option>Guyane</option> 
                    <option>La Réunion</option> 
                    <option>Mayotte</option> 
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