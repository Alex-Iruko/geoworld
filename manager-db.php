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
    $query = 'SELECT country.id as id, country.Name as Name, city.Name as Capitale, country.Population, country.Code2 as Code2
    FROM country, city
    WHERE country.Capital=city.id  And Continent=:cont;';
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
    $query= "SELECT city.Name as Ville FROM city WHERE id = :id ;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id',$id, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetch()->Name;
    }

}
function ajoutUtilisateur(){
    global $pdo;
    $Prenom=$_POST['Prenom'];
    $Nom=$_POST['Nom'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $Ville=$_POST['Ville'];
    $Date_n=$_POST['Date_n'];
    $Dpt=$_POST['Dpt'];
    $role=$_POST['role'];
    $requete = "INSERT INTO login (Prenom, Nom, user, password, Ville, Date_n, Dpt, role) VALUES(:Prenom, :Nom,:user,:password,:Ville,:Date_n,:Dpt, :role)";
    $query = $pdo->prepare($requete);
    $query->bindValue(':Prenom', $Prenom, PDO::PARAM_STR);
    $query->bindValue(':Nom', $Nom, PDO::PARAM_STR);
    $query->bindValue(':user', $user, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':Ville', $Ville, PDO::PARAM_STR);
    $query->bindValue(':Date_n', $Date_n, PDO::PARAM_STR);
    $query->bindValue(':Dpt', $Dpt, PDO::PARAM_STR);
    $query->execute(array(':Prenom' => $Prenom, ':Nom' => $Nom, ':user' => $user, ':password' => $password, ':Ville' => $Ville, ':Date_n' => $Date_n, ':Dpt' => $Dpt, ':role' => $role));
    echo "Bienvenue sur GeoWorld le meilleur site de l'univers by Killian , Alexandre et Quentin ;-)";
}
function getAuthentification($login,$pass){
    global $pdo;
    $query="SELECT * FROM login where user=:login and password=:pass";
    $prep=$pdo->prepare($query);
    $prep->bindValue(':login',$login);
    $prep->bindValue(':pass',$pass);
    $prep->execute();
    if($prep->rowCount()==1){
      $result=$prep->fetch();
      return $result;
    }else
      return false;
}function getDetailPays($id){
    global $pdo;
    $query ="SELECT country.Code as Code,country.Name as Nom,country.Continent as Continent, country.Region as Région,country.SurfaceArea as Surface, country.IndepYear as AnneeI, country.Population as Pop,
     country.LifeExpectancy as EspVie,country.LocalName as NomL, country.GovernmentForm as TypeG
    ,country.HeadOfState as ChefE,city.Name as Capitale, Code2 as Code2
    FROM country, city
    WHERE country.Capital=city.id and country.id=:id;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id',$id, PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetchAll();
}function getLangue($id){
    global $pdo;
    $query ="SELECT language.Name as Langue
    FROM country, city, countrylanguage,language
    WHERE country.Capital=city.id and country.id=:id and country.id=countrylanguage.idCountry and countrylanguage.idLanguage=language.id
    ORDER BY countrylanguage.IsOfficial;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id',$id, PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetchAll();
  }
function updatePays($params){
    global $pdo;
    $requete = "UPDATE country SET Code=:Code,Name=:Name,LocalName=:LocalName,SurfaceArea=:SurfaceArea,IndepYear=:IndepYear,Population=:Population,LifeExpectancy=:LifeExpectancy,GovernementForm=:GovernementForm,HeadOfState=:HeadOfState WHERE id =:id";
    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $params['id']);
    $prep->bindValue(':Code', $params['Code']);
    $prep->bindValue(':Name', $params['Name']);
    $prep->bindValue(':LocalName', $params['LocalName']);
    $prep->bindValue(':SurfaceArea', $params['SurfaceArea']);
    $prep->bindValue(':IndepYear', $params['IndepYear']);
    $prep->bindValue(':Population', $params['Population']);
    $prep->bindValue(':LifeExpectancy', $params['LifeExpectancy']);
    $prep->bindValue(':GovernementForm', $params['GovernementForm']);
    $prep->bindValue(':HeadOfState', $params['HeadOfState']);
    $prep->execute();
  }
  ?>