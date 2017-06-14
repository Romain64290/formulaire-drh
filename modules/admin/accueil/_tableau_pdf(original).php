<?php

/***** Dernière modification : 18/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);

$id_fiche=$_GET['id_fiche'];

$afficheFiche=$accueil->afficheFiche($id_fiche);
$infoAdp=$accueil->infoAdp($id_fiche);

// recup année inscription
$date_inscription=explode(" ",$afficheFiche['date_inscription']);
$date_inscription=explode("-",$date_inscription[0]);
$date=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// numéro de dossier			
// Complete le numéro de fiche avec des O devant
$id_fiche0=str_pad($id_fiche,  4, "0",STR_PAD_LEFT);
			
$numero_dossier=$date_inscription[0]."-".$id_fiche0;

$vide="";	

//Type de contrat
switch ($afficheFiche['quest0_typecontrat']) {
   
    case 1: $contrat="Stage découverte collège - 3/5 jours";
        break;
    case 2: $contrat="Stagiaire reconversion durée - 1/3 semaines";
        break;
    case 3: $contrat="TIG : Travaux d'Intérêts Généraux";
        break;
    case 4: $contrat="CAE";
        break;
    case 5: $contrat="Apprenti";
        break;
    case 6: $contrat="Recrutement direct (aux, stagiaire, fctionnaire)";
        break;
    case 7: $contrat="Contractuel";
        break;
    case 8: $contrat="Mutation interne";
        break;
	case 9: $contrat="Mutation externe";
        break;
}

 ?>

<!DOCTYPE html>

<html>
  <head>

<style>

.container2 {
  width: 705;
  border: 1;
  padding-left: 15px;
  padding-top: 1px;
  padding-right: 5px;
  padding-bottom: 1px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}	


.agent{
position: relative;
 width: 300;
}
.adp{
position: relative;
  top: -75px;
  left: 315px;
  width: 300px;
}
.cellule1{
position: relative;
 width: 210;
}
.cellule2{
position: relative;
  top: -14px;
  left: 315px;
  width: 100px;
}
.cellule2g{
position: relative;
  top: -14px;
  left: 315px;
  width: 300px;
}
.cellule3{
position: relative;
  top: -14px;
  left: 425px;
  width: 200px;
}
.cellule4{
position: relative;
  top: -14px;
  left: 630px;
  width: 70px;
}
.cellule5{
 position: relative;
 width: 120;

}

.cellule6{
position: relative;
  top: -14px;
  left: 125px;
  width: 180px;
}
</style>

  </head>
 
  <body class="hold-transition skin-blue sidebar-mini">
  	<div align="center"><h2><u>Fiche "Accueil nouvel agent"</u></h2></div>



<div class="container2">
<h4>L'agent nouvellement recruté </h4>
<ul>
<li><div class="celulle1"><b>Numéro de dossier : </b></div><div class="cellule2g"> <?php echo $numero_dossier; ?></div></li>
<li><div class="celulle1"><b>Date du dossier : </b></div><div class="cellule2g"> <?php echo $date; ?></div></li>
<li><div class="cellule1"><b>Nom de l'agent : </b></div><div class="cellule2g"> <?php echo htmlspecialchars($afficheFiche['quest0_nom']); ?></div></li>
<li><div class="cellule1"><b>Service : </b></div><div class="cellule2g">   <?php echo htmlspecialchars($afficheFiche['quest0_service']); ?></div></li>
<li><div class="cellule1"><b>Matricule : </b></div><div class="cellule2g">  <?php echo htmlspecialchars($afficheFiche['quest0_matricule']); ?></div></li>
<li><div class="cellule1"><b>Type de contrat : </b></div><div class="cellule2g">  <?php echo $contrat; ?></div> </li>

</ul>
</div>
<br>

<div class="container2">
<h4>1- Accueil de l'agent</h4>
<ul>
<li><div class="celulle1"><b>Présentation du service : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest1_service'],htmlspecialchars($afficheFiche['quest1_service_personne']),$afficheFiche['quest1_service_delai']); ?></li>
<li><div class="celulle1"><b>Présentation de la collectivité : </b></div><div class="cellule2"><?php questRadioPdf($afficheFiche['quest1_collectivite'],htmlspecialchars($afficheFiche['quest1_collectivite_personne']),$afficheFiche['quest1_collectivite_delai']); ?></li>
<li><div class="celulle1"><b>Remise Règlement intérieur : </b></div><div class="cellule2"> <?php questRadioPdf($afficheFiche['quest1_reglement'],htmlspecialchars($afficheFiche['quest1_reglement_personne']),$afficheFiche['quest1_reglement_delai']); ?></li>
</ul>
</div>
 <br>
 
 <div class="container2">
<h4>2- Locaux de personnel</h4>
<ul>
<li><div class="celulle1"><b>Armoire/Vestiaire : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest2_armoire'],htmlspecialchars($afficheFiche['quest2_armoire_personne']),$afficheFiche['quest2_armoire_delai']); ?></li>
<li><div class="celulle1"><b>Visite installations douches et sanitaires : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest2_installations'],htmlspecialchars($afficheFiche['quest2_installations_personne']),$afficheFiche['quest2_installations_delai']); ?></li>
<li><div class="celulle1"><b>Visite locaux du personnel : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest2_locaux'],htmlspecialchars($afficheFiche['quest2_locaux_personne']),$afficheFiche['quest2_locaux_delai']); ?></li>
<li><div class="celulle1"><b>Visite des services : </b></div><div class="cellule2"> <?php questRadioPdf($afficheFiche['quest2_services'],htmlspecialchars($afficheFiche['quest2_services_personne']),$afficheFiche['quest2_services_delai']); ?></li>
<li><div class="celulle1"><b>Alcoolisme/Tabagisme : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest2_alcoolisme'],htmlspecialchars($afficheFiche['quest2_alcoolisme_personne']),$afficheFiche['quest2_alcoolisme_delai']); ?></li>
</ul>
</div>
 <br>
 
  <div class="container2">
<h4>3- Dotations vestimentaires</h4>
<b>E.P.I (Equipements de Protection Individuelle)</b>
<ul>
<li><div class="celulle1"><b>Chaussures : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_chaussures'],$vide,$vide); ?></li>
<li><div class="celulle1"><b>Gants : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_gants'],$vide,$vide); ?></li>
<li><div class="celulle1"><b>Lunettes : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_lunettes'],$vide,$vide); ?></li>
<li><div class="celulle1"><b>Casque Anti-bruit : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_casque'],$vide,$vide); ?></li>
<li><div class="celulle1"><b>Gilet Fluorescent : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_gilet'],$vide,$vide); ?></li>
<li><div class="cellule5"><b>Autres : </b></div><div class="cellule6"><?php echo htmlspecialchars($afficheFiche['quest3_autre_epi_type']); ?></div><div class="cellule2"> <?php questRadioPdf($afficheFiche['quest3_autre'],$vide,$vide); ?></li>
</ul>
<b>Vêtement de travail</b>
<ul>
<li><div class="celulle1"><b>Pantalon et veste : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_pantalon'],$vide,$vide); ?></li>
<li><div class="celulle1"><b>Parka : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_parka'],$vide,$vide); ?></li>
<li><div class="cellule5"><b>Autres : </b></div><div class="cellule6"><?php echo htmlspecialchars($afficheFiche['quest3_autre_vetement_type']); ?></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest3_autre_vetemement'],$vide,$vide); ?></li>
</ul>
</div>
 <br>
 
 <div class="container2">
<h4>4- Permis</h4>
<ul>
<li><div class="celulle1"><b>Permis de l'agent : </b></div><div class="cellule2"><?php echo htmlspecialchars($afficheFiche['quest4_permis']); ?></div></li>
<li><div class="celulle1"><b>Interdiction : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest4_interdition'],htmlspecialchars($afficheFiche['quest4_interdition_personne']),$afficheFiche['quest4_interdition_delai']); ?></li>
<li><div class="cellule5"><b>Validation à faire : </b></div><div class="cellule6"><?php echo htmlspecialchars($afficheFiche['quest4_validation_type']); ?></div><div class="cellule2"><?php questRadioPdf($afficheFiche['quest4_validation'],htmlspecialchars($afficheFiche['quest4_validation_personne']),$afficheFiche['quest4_validation_delai']); ?></li>
</ul>
</div>
 <br>
 
 <div class="container2">
<h4>5- Vaccinations</h4>
<ul>
<li><div class="celulle1"><b>Tétanos : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest5_tetanos'],htmlspecialchars($afficheFiche['quest5_tetanos_personne']),$afficheFiche['quest5_tetanos_delai']); ?></li>
<li><div class="cellule5"><b>Autres : </b></div><div class="cellule6"><?php echo htmlspecialchars($afficheFiche['quest5_autre_type']); ?></div><div class="cellule2"><?php questRadioPdf($afficheFiche['quest5_autre'],htmlspecialchars($afficheFiche['quest5_autre_personne']),$afficheFiche['quest5_autre_delai']); ?></li>
<li><div class="celulle1"><b>Visite Médecin du travail : </b></div><div class="cellule2"> <?php questRadioPdf($afficheFiche['quest5_visite'],htmlspecialchars($afficheFiche['quest5_visite_personne']),$afficheFiche['quest5_visite_delai']); ?></li>
</ul>
</div>
 <br>
 
 <div class="container2">
<h4>6- Utilisation Materiel</h4>
<ul>
<li><div class="celulle1"><b>Formation à l'utilisation : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest6_formation'],htmlspecialchars($afficheFiche['quest6_formation_personne']),$afficheFiche['quest6_formation_delai']); ?></li>
<li><div class="celulle1"><b>Démonstration : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest6_demonstration'],htmlspecialchars($afficheFiche['quest6_demonstration_personne']),$afficheFiche['quest6_demonstration_delai']); ?></li>
<li><div class="celulle1"><b>Port des EPI : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest6_epi'],htmlspecialchars($afficheFiche['quest6_epi_personne']),$afficheFiche['quest6_epi_delai']); ?></li>
</ul>
</div>
 <br>
 
  <div class="container2">
<h4>7- Formations spécifiques</h4>
<ul>
<li><div class="celulle1"><b>Signalisation de chantier : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_signalisation'],htmlspecialchars($afficheFiche['quest7_signalisation_personne']),$afficheFiche['quest7_signalisation_delai']); ?></li>
<li><div class="celulle1"><b>Travail en hauteur : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_hauteur'],htmlspecialchars($afficheFiche['quest7_hauteur_personne']),$afficheFiche['quest7_hauteur_delai']); ?></li>
<li><div class="celulle1"><b>Travail en pente : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_pente'],htmlspecialchars($afficheFiche['quest7_pente_personne']),$afficheFiche['quest7_pente_delai']); ?></li>
<li><div class="celulle1"><b>Formations risques chimiques : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_chimique'],htmlspecialchars($afficheFiche['quest7_chimique_personne']),$afficheFiche['quest7_chimique_delai']); ?></li>
<li><div class="celulle1"><b>Habilitations électriques : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_electrique'],htmlspecialchars($afficheFiche['quest7_electrique_personne']),$afficheFiche['quest7_electrique_delai']); ?></li>
<li><div class="celulle1"><b>Habilitation nacelle : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_nacelle'],htmlspecialchars($afficheFiche['quest7_nacelle_personne']),$afficheFiche['quest7_nacelle_delai']); ?></li>
<li><div class="celulle1"><b>Habilitation chariots de manutention : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_chariot'],htmlspecialchars($afficheFiche['quest7_chariot_personne']),$afficheFiche['quest7_chariot_delai']); ?></li>
<li><div class="celulle1"><b>Habilitation matériels de travaux publics : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_materiel'],htmlspecialchars($afficheFiche['quest7_materiel_personne']),$afficheFiche['quest7_materiel_delai']); ?></li>
<li><div class="celulle1"><b>Formation incendie : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_incendie'],htmlspecialchars($afficheFiche['quest7_incendie_personne']),$afficheFiche['quest7_incendie_delai']); ?></li>
<li><div class="celulle1"><b>Formation secourisme : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest7_secourisme'],htmlspecialchars($afficheFiche['quest7_secourisme_personne']),$afficheFiche['quest7_secourisme_delai']); ?></li>
</ul>
</div>
 <br>
 
 <div class="container2">
<h4>8- Registre de Santé et Sécurité au Travail</h4>
<ul>
<li><div class="celulle1"><b>Droit de retrait : </b></div><div class="cellule2">  <?php questRadioPdf($afficheFiche['quest8_retrait'],htmlspecialchars($afficheFiche['quest8_retrait_personne']),$afficheFiche['quest8_retrait_delai']); ?></li>
</ul>
</div>
 <br> <br> <br>
 &nbsp; &nbsp; &nbsp; Fait le :  <br> <br><br>
 &nbsp; &nbsp; &nbsp; <div class="agent"><?php echo $infoAdp['nom_membre']." ".$infoAdp['prenom_membre']; ?><br><?php echo $infoAdp['service']; ?><br><br><br>Signature de l'ADP<br> </div> 
<div class="adp"><?php echo htmlspecialchars($afficheFiche['quest0_nom']); ?><br><br><br><br>Signature de l'agent<br></div>    
 
 
</body>
</html>