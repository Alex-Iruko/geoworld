<?php
require_once 'inc/manager-db.php';
  // On récupère la session
  session_start ();
  // On teste pour voir si nos variables de session ont bien été enregistrées
  if (isset($_SESSION['user']) && isset($_SESSION['role'])) {
  echo "<p style=text-align:right;>Bienvenue ".strtoupper($_SESSION['user'])." "."(".$_SESSION['role'].")";
  echo '<br><a href="./logout.php">Deconnexion</a></p>';
  }
  else
  header ('location: authentification.php'); 
  ?> <?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
  <?php
if (empty($_GET['Continent'])){
  $continent='Asia';
}else{
  $continent=$_GET['Continent'];
}
$desPays = getCountriesByContinent($continent);
//$capitales= getCapital($continent)
?>
<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?php echo $continent ?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Capitale</th>
           <th>Population</th>
           <th>Drapeau</th>
            <th><?php if ($_SESSION['role']=="Admin"|| $_SESSION['role']=="Professeur"):?>
              <?php echo "Edit"?>
            <?php endif?></th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach ($desPays as $pays): ?> 
          <tr>
            <td> <a href ="<?php echo "detailPays.php?id="?><?php echo $pays->id ?>"><?php echo $pays->Name ?></a></td>
            <td> <?php echo $pays->Capitale ?></td>

            <td> <?php echo $pays->Population ?></td>
            <td><img src =images\drapeau\<?php echo $pays->Code2?>.png></td>
            <td><?php if ($_SESSION['role']=="Admin" || $_SESSION['role']=="Professeur"):?>
              <a href="<?php echo "formulaireUpdatePays.php?id="?><?php echo $pays->id?>"><?php echo "Edit" ?></a></td>
              <?php endif?>
            <?php endforeach ?>
     </table>
    </div>
    <p>
        <code>
      <?php
        var_dump($desPays[0]);
        ?>
        </code>
    </p>
    <section class="jumbotron">
      <div class="container">
        <h1 class="jumbotron-heading">Tableau d'objets</h1>
        <p>Le contenu ci-dessus représente une vue "debug" du premier élément d'un tableau. Ce tableau est
          constitué d'objets PHP "standard" (stdClass).</p>
        <p>Pour accéder à l'<b>attribut</b> d'un <b>objet</b> on utilisera le symbole <b><code>-></code></b>.
          Ainsi, pour accéder à l'attribut <code>Name</code> du premier pays de la liste
          <code>$desPays</code> on fera <b><code>$desPays[0]->Name</code></b>
        </p>
        <p>La variable <b><code>$desPays</code></b> référence un tableau (<i>array</i>).
          Pour générer le code HTML (table), vous devrez coder une boucle,
          par exemple de type <b><code>foreach</code></b> sur l'ensembles des objets de ce tableau. </p>
        <p>Référez-vous à la structure des tables SQL pour connaître le nom des <b><code>attributs</code></b>.
          En effet, les objets du tableau ont pour attributs les noms des colonnes de la table interrogée par un requête SQL, via l'appel à la
          fonction <b><code>getCountriesByContinent</code></b> (du script <b><code>manager-db.php</code></b>.</p>
        <p>Par exemple <b><code>Name</code></b> est une des colonnes de la table <b><code>Country</code></b> de la base de données.</p>
          <p> Bonne programmation</p>
          <div class="alert alert-warning" role="alert">
            Cette section ne s'auto-détruit pas automatiquement, ce sera à vous de le faire, une fois compris son message !
          </div>
      </div>
    </section>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
