<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>S'inscrire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<?php  require_once 'header.php';
?>
<body class="bg-dark">
    <div class="col">
        <h1> Veuillez entre vos coordonnées : </h1>
        <form action="login.php" method="GET">
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
                <input type="mdp" class="form-control" name="password" placeholder="Brakmar77!" required>
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
                    <option> 1 - Ain</option> 
                    <option> 2 - Aisne</option> 
                    <option> 3 - Allier</option> 
                    <option> 4 - Alpes-de-Haute-Provence</option> 
                    <option> 5 - Hautes-Alpes</option> 
                    <option> 6 - Alpes-Maritimes</option> 
                    <option> 7 - Ardèche</option> 
                    <option> 8 - Ardennes</option> 
                    <option> 9 - Ariège</option> 
                    <option>10 - Aube</option> 
                    <option>11 - Aude</option> 
                    <option>12 - Aveyron</option> 
                    <option>13 - Bouches-du-Rhône</option> 
                    <option>14 - Calvados</option> 
                    <option>15 - Cantal</option> 
                    <option>16 - Charente</option> 
                    <option>17 - Charente-Maritime</option> 
                    <option>18 - Cher</option> 
                    <option>19 - Corrèze</option> 
                    <option>21 - Côte-d'Or</option> 
                    <option>22 - Côtes-d'Armor</option> 
                    <option>23 - Creuse</option> 
                    <option>24 - Dordogne</option> 
                    <option>25 - Doubs</option> 
                    <option>26 - Drôme</option> 
                    <option>27 - Eure</option> 
                    <option>28 - Eure-et-Loir</option> 
                    <option>29 - Finistère</option> 
                    <option>2A - Corse-du-Sud</option> 
                    <option>2B - Haute-Corse</option> 
                    <option>30 - Gard</option> 
                    <option>31 - Haute-Garonne</option> 
                    <option>32 - Gers</option> 
                    <option>33 - Gironde</option> 
                    <option>34 - Hérault</option> 
                    <option>35 - Ille-et-Vilaine</option> 
                    <option>36 - Indre</option> 
                    <option>37 - Indre-et-Loire</option> 
                    <option>38 - Isère</option> 
                    <option>39 - Jura</option> 
                    <option>40 - Landes</option> 
                    <option>41 - Loir-et-Cher</option> 
                    <option>42 - Loire</option> 
                    <option>43 - Haute-Loire</option> 
                    <option>44 - Loire-Atlantique</option> 
                    <option>45 - Loiret</option> 
                    <option>46 - Lot</option> 
                    <option>47 - Lot-et-Garonne</option> 
                    <option>48 - Lozère</option> 
                    <option>49 - Maine-et-Loire</option> 
                    <option>50 - Manche</option> 
                    <option>51 - Marne</option> 
                    <option>52 - Haute-Marne</option> 
                    <option>53 - Mayenne</option> 
                    <option>54 - Meurthe-et-Moselle</option> 
                    <option>55 - Meuse</option> 
                    <option>56 - Morbihan</option> 
                    <option>57 - Moselle</option> 
                    <option>58 - Nièvre</option> 
                    <option>59 - Nord</option> 
                    <option>60 - Oise</option> 
                    <option>61 - Orne</option> 
                    <option>62 - Pas-de-Calais</option> 
                    <option>63 - Puy-de-Dôme</option> 
                    <option>64 - Pyrénées-Atlantiques</option> 
                    <option>65 - Hautes-Pyrénées</option> 
                    <option>66 - Pyrénées-Orientales</option> 
                    <option>67 - Bas-Rhin</option> 
                    <option>68 - Haut-Rhin</option> 
                    <option>69 - Rhône</option> 
                    <option>70 - Haute-Saône</option> 
                    <option>71 - Saône-et-Loire</option> 
                    <option>72 - Sarthe</option> 
                    <option>73 - Savoie</option> 
                    <option>74 - Haute-Savoie</option> 
                    <option>75 - Paris</option> 
                    <option>76 - Seine-Maritime</option> 
                    <option>77 - Seine-et-Marne</option> 
                    <option>78 - Yvelines</option> 
                    <option>79 - Deux-Sèvres</option> 
                    <option>80 - Somme</option> 
                    <option>81 - Tarn</option> 
                    <option>82 - Tarn-et-Garonne</option> 
                    <option>83 - Var</option> 
                    <option>84 - Vaucluse</option> 
                    <option>85 - Vendée</option> 
                    <option>86 - Vienne</option> 
                    <option>87 - Haute-Vienne</option> 
                    <option>88 - Vosges</option> 
                    <option>89 - Yonne</option> 
                    <option>90 - Territoire de Belfort</option> 
                    <option>91 - Essonne</option> 
                    <option>92 - Hauts-de-Seine</option> 
                    <option>93 - Seine-Saint-Denis</option> 
                    <option>94 - Val-de-Marne</option> 
                    <option>95 - Val-d'Oise</option> 
                    <option>971 - Guadeloupe</option> 
                    <option>972 - Martinique</option> 
                    <option>973 - Guyane</option> 
                    <option>974 - La Réunion</option> 
                    <option>976 - Mayotte</option> 
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
            <button type="button" class="btn btn-dark">Envoyer</button>
            </div>
        </form>
    </div>
</body>




