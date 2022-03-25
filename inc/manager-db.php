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
function getContinent()
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT DISTINCT Continent FROM Country Order by continent ASC';
    $prep = $pdo->prepare($query);
    try { 
        $result = $pdo->query($query)->fetchAll(); 
        return $result;
      }
      catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
      }
}
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT country.id as id,country.name as Name, city.Name as Capitale, country.Population as Population, Code2 as Code2 
    FROM country, city
    WHERE country.Capital=city.id AND country.Continent=:cont;';
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
function getDetailPays($id){
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
}
function getLangue($id){
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