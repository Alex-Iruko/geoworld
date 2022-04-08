<?php
/**
 * Ce script est composé de fonctions d'exploitation des données
 * détenues pas le SGBDR MySQL utilisées par la logique de l'application.
 *
 * C'est le seul endroit dans l'application où a lieu la communication entre
 * la logique métier de l'application et les données en base de données, que
 * ce soit en lecture ou en écriture.
 *
 * PHP version 7
 *
 * @category  Database_Access_Function
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

/**
 *  Les fonctions dépendent d'une connection à la base de données,
 *  cette fonction est déportée dans un autre script.
 */
require_once 'connect-db.php';

/**
 * Obtenir la liste de tous les pays référencés d'un continent donné
 *
 * @param string $continent le nom d'un continent
 * 
 * @return array tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT*
    FROM country
    WHERE Continent=:cont;';
    $prep = $pdo->prepare($query);
    // on associe ici (bind) le paramètre (:cont) de la req SQL,
    // avec la valeur reçue en paramètre de la fonction ($continent)
    // on prend soin de spécifier le type de la valeur (String) afin
    // de se prémunir d'injections SQL (des filtres seront appliqués)
    $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetchAll();
}

/**
 * Obtenir la liste des pays
 *
 * @return liste d'objets
 */
function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM Country;';
    return $pdo->query($query)->fetchAll();
}
function getContinent()
{
    global $pdo;
    $query = 'SELECT DISTINCT Continent FROM country;';
    return $pdo -> query($query)->fetchAll();
}
function getCapital($id)
{
    global $pdo;
    if(empty($id)){
        echo("No City");
    }
    else{
    $query= "SELECT city.Name FROM city WHERE id = :id ;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id',$id, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetch()->Name;
    }

}
function ajoutUtilisateur(){
    global $pdo;
    $name=$_GET['name'];
    $username=$_GET['username'];
    $identifier=$_GET['identifier'];
    $password=$_GET['password'];
    $ville=$_GET['ville'];
    $date_birth=$_GET['date_birth'];
    $dpt=$_GET['dpt'];
    $role=$_GET['role'];
    $requete = "INSERT INTO utilisateur (name, username, identifier, password, ville, date_birth, dpt, role) VALUES(:name, :username,:identifier,:password,:ville,:date_birth,:dpt,:role)";
    $query = $pdo->prepare($requete);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->bindValue(':identifier', $identifier, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville, PDO::PARAM_STR);
    $query->bindValue(':date_birth', $date_birth, PDO::PARAM_STR);
    $query->bindValue(':dpt', $dpt, PDO::PARAM_STR);
    $query->bindValue(':role', $role, PDO::PARAM_STR);
    $query->execute(array(':name' => $name, ':username' => $username, ':identifier' => $identifier, ':password' => $password, ':ville' => $ville, ':date_birth' => $date_birth, ':dpt' => $dpt, ':role' => $role));
    echo "Bienvenue sur GeoWorld le meilleur site de l'univers by Killian , Alexandre et Quentin ;-)";
}
function getAuthentification($login,$pass){
    global $pdo;
    $query="SELECT * FROM utilisateur where identifier=:identifier and password=:password";
    $prep=$pdo->prepare($query);
    $prep->bindValue(':identifier',$identifier);
    $prep->bindValue(':password',$password);
    $prep->execute();
    if($prep->rowCount()==1){
      $result=$prep->fetch();
      return $result;
    }else
      return false;
}
