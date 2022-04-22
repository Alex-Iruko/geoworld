<?php
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
require_once 'inc/manager-db.php';
$id=$_GET['id'];
if(empty($id)){
        $id=getId($_GET['id']);
    }
$detailPays=getDetailPays($id);
$Langues=getLangue($id);
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Plus d'informations sur <?php foreach($detailPays as $pays);
    echo $pays->Nom ?></h1>
    <div>
     <table class="table">
         <tr>
         <th>Code</th>
         <th>Nom</th>
         <th>Nom local</th>
         <th>Capitale</th>
         <th>Continent</th>
         <th>Région</th>
         <th>Surface</th>
     </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($detailPays as $pays):?>
          <tr><td> <?php echo $pays->Code ?></td>
            <td> <?php echo $pays->Nom ?></td>
            <td> <?php echo $pays->NomL ?></td>
            <td> <?php echo $pays->Capitale ?></td>
            <td> <?php echo $pays->Continent ?></td>
            <td> <?php echo $pays->Région ?></td>
            <td> <?php echo $pays->Surface ?></td>
            
     </tr>
            <?php endforeach;?>
     </table>
     <table class="table">
        <tr><th>Année d'indépendance</th>
         <th>Population</th>
         <th>Espérance de vie</th>
         <th>Type de Gouvernement</th>
         <th>Chef d'Etat</th>
         <th>Drapeau</th>
         <th>Langue</th>
         </tr>
         <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($detailPays as $pays):?>
            <tr><td> <?php echo $pays->AnneeI ?></td>
            <td> <?php echo $pays->Pop ?></td>
            <td> <?php echo $pays->EspVie ?></td>
            <td> <?php echo $pays->TypeG ?></td>
            <td> <?php echo $pays->ChefE ?></td>
            <td><img src =images\png100px\<?php echo $pays->Code2?>.png></td>
            <td> <ul><?php foreach($Langues as $Langue):?>
            <li> <?php echo $Langue->Langue?></li>
                <?php endforeach;
          ?></ul>
        
         </tr>
         <?php endforeach;?>
     </table>
    </div>
    <p>
        <code>
        </code>
    </p>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>