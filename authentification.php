<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<?php  require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Connection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <div class="col">
        <h1> Formulaire de connexion :</h1>
        </div>
        <form action="login.php" method="post">
        <div class="form-group col-md-4">
                <label class="text-dark">Identifiant : </label>
                <input type="text" class="form-control" name="identifier" placeholder="DarkTitouan77310" required>
            </div>
            <div class="form-group col-md-4">
                <label class="text-dark">Mot de passe : </label>
                <input type="password" class="form-control" name="password" placeholder="Brakmar77!" required>
            </div>
            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-success" style="margin-left:150px ;">Se connecter</button>
            </div>   
        </form>
        <div class="col">
        <h5> Vous n'avez pas de compte ? Inscrivez-vous :</h1>
        </h5>
        <form action ="Inscription.php" method="GET">
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:150px ;">S'inscrire</button>
            </div> 
        <div class="invisible">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam sollicitudin tempor id. Convallis convallis tellus id interdum velit. Sit amet justo donec enim diam vulputate ut pharetra sit. Amet dictum sit amet justo donec. Commodo elit at imperdiet dui accumsan sit amet. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non blandit massa enim nec. Purus gravida quis blandit turpis cursus in hac habitasse platea. Blandit massa enim nec dui nunc mattis. Ullamcorper malesuada proin libero nunc consequat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam sollicitudin tempor id. Convallis convallis tellus id interdum velit. Sit amet justo donec enim diam vulputate ut pharetra sit. Amet dictum sit amet justo donec. Commodo elit at imperdiet dui accumsan sit amet. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non blandit massa enim nec. Purus gravida quis blandit turpis cursus in hac habitasse platea. Blandit massa enim nec dui nunc mattis. Ullamcorper malesuada proin libero nunc consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam sollicitudin tempor id. Convallis convallis tellus id interdum velit. Sit amet justo donec enim diam vulputate ut pharetra sit. Amet dictum sit amet justo donec. Commodo elit at imperdiet dui accumsan sit amet. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non blandit massa enim nec. Purus gravida quis blandit turpis cursus in hac habitasse platea. Blandit massa enim nec dui nunc mattis. Ullamcorper malesuada proin libero nunc consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam sollicitudin tempor id. Convallis convallis tellus id interdum velit. Sit amet justo donec enim diam vulputate ut pharetra sit. Amet dictum sit amet justo donec. Commodo elit at imperdiet dui accumsan sit amet. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non blandit massa enim nec. Purus gravida quis blandit turpis cursus in hac habitasse platea. Blandit massa enim nec dui nunc mattis. Ullamcorper malesuada proin libero nunc consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam sollicitudin tempor id. C          
        </p>
        </div>
    </body>

</html>


<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>