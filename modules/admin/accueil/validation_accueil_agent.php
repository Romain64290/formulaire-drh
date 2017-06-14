<?php

/***** Dernière modification : 17/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=21;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);

// Affichage les infobules
$afficheInfo=$accueil->afficheOptions(); 

//Supprime la session en cours pour la remplacer par la nouvelle
unset($_SESSION['fiche']); 

// variable vide pour la fonction questRadio() lorsque que les variables de sessions n'existent pas
$vide="";

// Cree une session "fiche" avec les variables POST
/* On vérifie l'existence du activite, sinon, on le crée */
if(!isset($_SESSION['fiche']))
{
    /* Initialisation du activite */
    $_SESSION['fiche'] = array();
    /* Subdivision du activite */
    $_SESSION['fiche']['quest0_nom'] = htmlspecialchars($_POST['quest0_nom']);
	$_SESSION['fiche']['quest0_service'] = htmlspecialchars($_POST['quest0_service']);
	$_SESSION['fiche']['quest0_matricule'] = htmlspecialchars($_POST['quest0_matricule']);
	$_SESSION['fiche']['quest0_typecontrat'] =$_POST['quest0_typecontrat'];
	
	$_SESSION['fiche']['quest1_service'] =  isset($_POST['quest1_service']) ? $_POST['quest1_service'] : $vide;
	$_SESSION['fiche']['quest1_service_personne']  = ($_SESSION['fiche']['quest1_service']=="a_faire") ? $_POST['quest1_service_personne']: $vide;
	$_SESSION['fiche']['quest1_service_delai']  = ($_SESSION['fiche']['quest1_service']=="a_faire") ? $_POST['quest1_service_delai']: $vide;
	
	
	
	$_SESSION['fiche']['quest1_collectivite'] =  isset($_POST['quest1_collectivite']) ? $_POST['quest1_collectivite'] : $vide;
	$_SESSION['fiche']['quest1_collectivite_personne']  = ($_SESSION['fiche']['quest1_collectivite']=="a_faire") ? $_POST['quest1_collectivite_personne']: $vide;
	$_SESSION['fiche']['quest1_collectivite_delai']  = ($_SESSION['fiche']['quest1_collectivite']=="a_faire") ? $_POST['quest1_collectivite_delai']: $vide;
	$_SESSION['fiche']['quest1_reglement'] =  isset($_POST['quest1_reglement']) ? $_POST['quest1_reglement'] : $vide;
	$_SESSION['fiche']['quest1_reglement_personne']  = ($_SESSION['fiche']['quest1_reglement']=="a_faire") ? $_POST['quest1_reglement_personne']: $vide;
	$_SESSION['fiche']['quest1_reglement_delai']  = ($_SESSION['fiche']['quest1_reglement']=="a_faire") ? $_POST['quest1_reglement_delai']: $vide;


	$_SESSION['fiche']['quest2_armoire'] =  isset($_POST['quest2_armoire']) ? $_POST['quest2_armoire'] : $vide;
	$_SESSION['fiche']['quest2_armoire_personne']  = ($_SESSION['fiche']['quest2_armoire']=="a_faire") ? $_POST['quest2_armoire_personne']: $vide;
	$_SESSION['fiche']['quest2_armoire_delai']  = ($_SESSION['fiche']['quest2_armoire']=="a_faire") ? $_POST['quest2_armoire_delai']: $vide;
	$_SESSION['fiche']['quest2_installations'] =  isset($_POST['quest2_installations']) ? $_POST['quest2_installations'] : $vide;
	$_SESSION['fiche']['quest2_installations_personne']  = ($_SESSION['fiche']['quest2_installations']=="a_faire") ? $_POST['quest2_installations_personne']: $vide;
	$_SESSION['fiche']['quest2_installations_delai']  = ($_SESSION['fiche']['quest2_installations']=="a_faire") ? $_POST['quest2_installations_delai']: $vide;
	$_SESSION['fiche']['quest2_locaux'] =  isset($_POST['quest2_locaux']) ? $_POST['quest2_locaux'] : $vide;
	$_SESSION['fiche']['quest2_locaux_personne']  = ($_SESSION['fiche']['quest2_locaux']=="a_faire") ? $_POST['quest2_locaux_personne']: $vide;
	$_SESSION['fiche']['quest2_locaux_delai']  = ($_SESSION['fiche']['quest2_locaux']=="a_faire") ? $_POST['quest2_locaux_delai']: $vide;
	$_SESSION['fiche']['quest2_services'] =  isset($_POST['quest2_services']) ? $_POST['quest2_services'] : $vide;
	$_SESSION['fiche']['quest2_services_personne']  = ($_SESSION['fiche']['quest2_services']=="a_faire") ? $_POST['quest2_services_personne']: $vide;
	$_SESSION['fiche']['quest2_services_delai']  = ($_SESSION['fiche']['quest2_services']=="a_faire") ? $_POST['quest2_services_delai']: $vide;
	$_SESSION['fiche']['quest2_alcoolisme'] =  isset($_POST['quest2_alcoolisme']) ? $_POST['quest2_alcoolisme'] : $vide;
	$_SESSION['fiche']['quest2_alcoolisme_personne']  = ($_SESSION['fiche']['quest2_alcoolisme']=="a_faire") ? $_POST['quest2_alcoolisme_personne']: $vide;
	$_SESSION['fiche']['quest2_alcoolisme_delai']  = ($_SESSION['fiche']['quest2_alcoolisme']=="a_faire") ? $_POST['quest2_alcoolisme_delai']: $vide;
	
	
	$_SESSION['fiche']['quest3_chaussures'] =  isset($_POST['quest3_chaussures']) ? $_POST['quest3_chaussures'] : $vide;
	$_SESSION['fiche']['quest3_gants'] =  isset($_POST['quest3_gants']) ? $_POST['quest3_gants'] : $vide;
	$_SESSION['fiche']['quest3_lunettes'] =  isset($_POST['quest3_lunettes']) ? $_POST['quest3_lunettes'] : $vide;
	$_SESSION['fiche']['quest3_casque'] =  isset($_POST['quest3_casque']) ? $_POST['quest3_casque'] : $vide;
	$_SESSION['fiche']['quest3_gilet'] =  isset($_POST['quest3_gilet']) ? $_POST['quest3_gilet'] : $vide;
	$_SESSION['fiche']['quest3_autre'] =  isset($_POST['quest3_autre']) ? $_POST['quest3_autre'] : $vide;
	$_SESSION['fiche']['quest3_autre_epi_type']  = ($_SESSION['fiche']['quest3_autre']=="a_doter") ? htmlspecialchars($_POST['quest3_autre_epi_type']): $vide;
	$_SESSION['fiche']['quest3_pantalon'] =  isset($_POST['quest3_pantalon']) ? $_POST['quest3_pantalon'] : $vide;
	$_SESSION['fiche']['quest3_parka'] =  isset($_POST['quest3_parka']) ? $_POST['quest3_parka'] : $vide;
	$_SESSION['fiche']['quest3_autre_vetemement'] =  isset($_POST['quest3_autre_vetemement']) ? $_POST['quest3_autre_vetemement'] : $vide;
	$_SESSION['fiche']['quest3_autre_vetement_type']  = ($_SESSION['fiche']['quest3_autre_vetemement']=="a_doter") ? htmlspecialchars($_POST['quest3_autre_vetement_type']): $vide;
	
	$_SESSION['fiche']['quest4_permis'] =  isset($_POST['quest4_permis']) ? $_POST['quest4_permis'] : $vide;
	$_SESSION['fiche']['quest4_interdition'] =  isset($_POST['quest4_interdition']) ? $_POST['quest4_interdition'] : $vide;
	$_SESSION['fiche']['quest4_interdition_personne']  = ($_SESSION['fiche']['quest4_interdition']=="a_faire") ? $_POST['quest4_interdition_personne']: $vide;
	$_SESSION['fiche']['quest4_interdition_delai']  = ($_SESSION['fiche']['quest4_interdition']=="a_faire") ? $_POST['quest4_interdition_delai']: $vide;
	$_SESSION['fiche']['quest4_validation'] =  isset($_POST['quest4_validation']) ? $_POST['quest4_validation'] : $vide;
	$_SESSION['fiche']['quest4_validation_type']  = ($_SESSION['fiche']['quest4_validation']=="non_concerne") ? $vide :htmlspecialchars($_POST['quest4_validation_type']) ;
	$_SESSION['fiche']['quest4_validation_personne']  = ($_SESSION['fiche']['quest4_validation']=="a_faire") ? $_POST['quest4_validation_personne']: $vide;
	$_SESSION['fiche']['quest4_validation_delai']  = ($_SESSION['fiche']['quest4_validation']=="a_faire") ? $_POST['quest4_validation_delai']: $vide;
	
	$_SESSION['fiche']['quest5_tetanos'] =  isset($_POST['quest5_tetanos']) ? $_POST['quest5_tetanos'] : $vide;
    $_SESSION['fiche']['quest5_tetanos_personne']  = ($_SESSION['fiche']['quest5_tetanos']=="a_faire") ? $_POST['quest5_tetanos_personne']: $vide;
	$_SESSION['fiche']['quest5_tetanos_delai']  = ($_SESSION['fiche']['quest5_tetanos']=="a_faire") ? $_POST['quest5_tetanos_delai']: $vide;
	$_SESSION['fiche']['quest5_autre'] =  isset($_POST['quest5_autre']) ? $_POST['quest5_autre'] : $vide;
	$_SESSION['fiche']['quest5_autre_type']  = ($_SESSION['fiche']['quest5_autre']=="non_concerne") ? $vide :htmlspecialchars($_POST['quest5_autre_type']) ;
    $_SESSION['fiche']['quest5_autre_personne']  = ($_SESSION['fiche']['quest5_autre']=="a_faire") ? $_POST['quest5_autre_personne']: $vide;
	$_SESSION['fiche']['quest5_autre_delai']  = ($_SESSION['fiche']['quest5_autre']=="a_faire") ? $_POST['quest5_autre_delai']: $vide;
	$_SESSION['fiche']['quest5_visite'] =  isset($_POST['quest5_visite']) ? $_POST['quest5_visite'] : $vide;
	$_SESSION['fiche']['quest5_visite_personne']  = ($_SESSION['fiche']['quest5_visite']=="a_faire") ? $_POST['quest5_visite_personne']: $vide;
	$_SESSION['fiche']['quest5_visite_delai']  = ($_SESSION['fiche']['quest5_visite']=="a_faire") ? $_POST['quest5_visite_delai']: $vide; 
	
	$_SESSION['fiche']['quest6_formation'] =  isset($_POST['quest6_formation']) ? $_POST['quest6_formation'] : $vide;
	$_SESSION['fiche']['quest6_formation_personne']  = ($_SESSION['fiche']['quest6_formation']=="a_faire") ? $_POST['quest6_formation_personne']: $vide;
	$_SESSION['fiche']['quest6_formation_delai']  = ($_SESSION['fiche']['quest6_formation']=="a_faire") ? $_POST['quest6_formation_delai']: $vide;
	$_SESSION['fiche']['quest6_demonstration'] =  isset($_POST['quest6_demonstration']) ? $_POST['quest6_demonstration'] : $vide;
	$_SESSION['fiche']['quest6_demonstration_personne']  = ($_SESSION['fiche']['quest6_demonstration']=="a_faire") ? $_POST['quest6_demonstration_personne']: $vide;
	$_SESSION['fiche']['quest6_demonstration_delai']  = ($_SESSION['fiche']['quest6_demonstration']=="a_faire") ? $_POST['quest6_demonstration_delai']: $vide;
	$_SESSION['fiche']['quest6_epi'] =  isset($_POST['quest6_epi']) ? $_POST['quest6_epi'] : $vide;
	$_SESSION['fiche']['quest6_epi_personne']  = ($_SESSION['fiche']['quest6_epi']=="a_faire") ? $_POST['quest6_epi_personne']: $vide;
	$_SESSION['fiche']['quest6_epi_delai']  = ($_SESSION['fiche']['quest6_epi']=="a_faire") ? $_POST['quest6_epi_delai']: $vide;
	
	$_SESSION['fiche']['quest7_signalisation'] =  isset($_POST['quest7_signalisation']) ? $_POST['quest7_signalisation'] : $vide;
	$_SESSION['fiche']['quest7_signalisation_personne']  = ($_SESSION['fiche']['quest7_signalisation']=="a_faire") ? $_POST['quest7_signalisation_personne']: $vide;
	$_SESSION['fiche']['quest7_signalisation_delai']  = ($_SESSION['fiche']['quest7_signalisation']=="a_faire") ? $_POST['quest7_signalisation_delai']: $vide;
	$_SESSION['fiche']['quest7_hauteur'] =  isset($_POST['quest7_hauteur']) ? $_POST['quest7_hauteur'] : $vide;
	$_SESSION['fiche']['quest7_hauteur_personne']  = ($_SESSION['fiche']['quest7_hauteur']=="a_faire") ? $_POST['quest7_hauteur_personne']: $vide;
	$_SESSION['fiche']['quest7_hauteur_delai']  = ($_SESSION['fiche']['quest7_hauteur']=="a_faire") ? $_POST['quest7_hauteur_delai']: $vide;
	$_SESSION['fiche']['quest7_pente'] =  isset($_POST['quest7_pente']) ? $_POST['quest7_pente'] : $vide;
	$_SESSION['fiche']['quest7_pente_personne']  = ($_SESSION['fiche']['quest7_pente']=="a_faire") ? $_POST['quest7_pente_personne']: $vide;
	$_SESSION['fiche']['quest7_pente_delai']  = ($_SESSION['fiche']['quest7_pente']=="a_faire") ? $_POST['quest7_pente_delai']: $vide;
	$_SESSION['fiche']['quest7_chimique'] =  isset($_POST['quest7_chimique']) ? $_POST['quest7_chimique'] : $vide;
	$_SESSION['fiche']['quest7_chimique_personne']  = ($_SESSION['fiche']['quest7_chimique']=="a_faire") ? $_POST['quest7_chimique_personne']: $vide;
	$_SESSION['fiche']['quest7_chimique_delai']  = ($_SESSION['fiche']['quest7_chimique']=="a_faire") ? $_POST['quest7_chimique_delai']: $vide;
	$_SESSION['fiche']['quest7_electrique'] =  isset($_POST['quest7_electrique']) ? $_POST['quest7_electrique'] : $vide;
	$_SESSION['fiche']['quest7_electrique_personne']  = ($_SESSION['fiche']['quest7_electrique']=="a_faire") ? $_POST['quest7_electrique_personne']: $vide;
	$_SESSION['fiche']['quest7_electrique_delai']  = ($_SESSION['fiche']['quest7_electrique']=="a_faire") ? $_POST['quest7_electrique_delai']: $vide;
	$_SESSION['fiche']['quest7_nacelle'] =  isset($_POST['quest7_nacelle']) ? $_POST['quest7_nacelle'] : $vide;
	$_SESSION['fiche']['quest7_nacelle_personne']  = ($_SESSION['fiche']['quest7_nacelle']=="a_faire") ? $_POST['quest7_nacelle_personne']: $vide;
	$_SESSION['fiche']['quest7_nacelle_delai']  = ($_SESSION['fiche']['quest7_nacelle']=="a_faire") ? $_POST['quest7_nacelle_delai']: $vide;
	$_SESSION['fiche']['quest7_chariot'] =  isset($_POST['quest7_chariot']) ? $_POST['quest7_chariot'] : $vide;
	$_SESSION['fiche']['quest7_chariot_personne']  = ($_SESSION['fiche']['quest7_chariot']=="a_faire") ? $_POST['quest7_chariot_personne']: $vide;
	$_SESSION['fiche']['quest7_chariot_delai']  = ($_SESSION['fiche']['quest7_chariot']=="a_faire") ? $_POST['quest7_chariot_delai']: $vide;
	$_SESSION['fiche']['quest7_materiel'] =  isset($_POST['quest7_materiel']) ? $_POST['quest7_materiel'] : $vide;
	$_SESSION['fiche']['quest7_materiel_personne']  = ($_SESSION['fiche']['quest7_materiel']=="a_faire") ? $_POST['quest7_materiel_personne']: $vide;
	$_SESSION['fiche']['quest7_materiel_delai']  = ($_SESSION['fiche']['quest7_materiel']=="a_faire") ? $_POST['quest7_materiel_delai']: $vide;
	$_SESSION['fiche']['quest7_incendie'] =  isset($_POST['quest7_incendie']) ? $_POST['quest7_incendie'] : $vide;
	$_SESSION['fiche']['quest7_incendie_personne']  = ($_SESSION['fiche']['quest7_incendie']=="a_faire") ? $_POST['quest7_incendie_personne']: $vide;
	$_SESSION['fiche']['quest7_incendie_delai']  = ($_SESSION['fiche']['quest7_incendie']=="a_faire") ? $_POST['quest7_incendie_delai']: $vide;
	$_SESSION['fiche']['quest7_secourisme'] =  isset($_POST['quest7_secourisme']) ? $_POST['quest7_secourisme'] : $vide;
	$_SESSION['fiche']['quest7_secourisme_personne']  = ($_SESSION['fiche']['quest7_secourisme']=="a_faire") ? $_POST['quest7_secourisme_personne']: $vide;
	$_SESSION['fiche']['quest7_secourisme_delai']  = ($_SESSION['fiche']['quest7_secourisme']=="a_faire") ? $_POST['quest7_secourisme_delai']: $vide;
	
	$_SESSION['fiche']['quest8_retrait'] =  isset($_POST['quest8_retrait']) ? $_POST['quest8_retrait'] : $vide;
	$_SESSION['fiche']['quest8_retrait_personne']  = ($_SESSION['fiche']['quest8_retrait']=="a_faire") ? $_POST['quest8_retrait_personne']: $vide;
	$_SESSION['fiche']['quest8_retrait_delai']  = ($_SESSION['fiche']['quest8_retrait']=="a_faire") ? $_POST['quest8_retrait_delai']: $vide;
	
  
}



?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo constant("TITLE"); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../plugins/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
   
    <link rel="stylesheet" href="../../../dist/css/skins/skin-blue.min.css">
   
    


<style>

.container2 {
  width: 98%;
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-top: 1px;
  padding-right: 15px;
  padding-bottom: 15px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}	
</style>

  </head>
 
  <body class="hold-transition skin-blue sidebar-mini">
  	
    <div class="wrapper">
    	
<?php
require(__DIR__ .'/../../../include/main_header.php');
require(__DIR__ .'/../../../include/main_slidebar.php');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Fiche Accueil d’Hygiène et de Sécurité
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard/index.php"><i class="fa fa-users"></i> Accueil</a></li>
            <li class="active">Fiche Accueil</li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
       
<div class="box box-primary">
  
  
    <div class="box-body">
  
<div class="callout callout-info lead">
    <h4>Attention!</h4>
    <p>Vérifiez les informations saisies et validez le formulaire en bas de page.</p>
  </div>
  
  <div class="container2" style="background-color:#efefef;">
		<h3 style="color:#008ec0">L'agent nouvellement recruté</h3>
		  <div class="row"><h4>
 		
 <div class="col-md-2">
  		  <div class="form-group">
<b> Agent :</b> <?php echo $_SESSION['fiche']['quest0_nom']; ?>
 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
   <div class="col-md-3">
  <div class="form-group">
 <b> Service :</b> <?php echo $_SESSION['fiche']['quest0_service']; ?>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
     <div class="col-md-3">
  <div class="form-group">
<b> Date de naissance : </b> <?php echo $_SESSION['fiche']['quest0_matricule']; ?>
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group"><b>Type de contrat : </b>
<?php 

switch ($_SESSION['fiche']['quest0_typecontrat']) {
   
    case 1: echo "Stage découverte collège - 3/5 jours";
        break;
    case 2: echo "Stagiaire reconversion durée - 1/3 semaines";
        break;
    case 3: echo "Saisonnier";
        break;
	case 4: echo "TIG : Travaux d'Intérêts Généraux";
        break;
	case 5: echo "CAE";
        break;
    case 6: echo "Apprenti";
        break;
    case 7: echo "Recrutement direct (aux, stagiaire, fonctionnaire)";
        break;
    case 8: echo "Contractuel";
        break;
    case 9:  echo "Mutation interne";
        break;
	case 10: echo "Mutation externe";
        break;
}

 ?>
   </div>
   </div>
</div>

		</div> <!-- fin container -->
		
		<br>
<!-- q1 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">1- Accueil de l'agent <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service" class="collapse">
<blockquote>
	<?php echo $afficheInfo['quest1']; ?>
</blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Présentation du service</div>
  <div class="col-md-4">
  	
 <?php questRadio($_SESSION['fiche']['quest1_service'],$_SESSION['fiche']['quest1_service_personne'],$_SESSION['fiche']['quest1_service_delai']); ?> 	
 
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Présentation de la collectivité</div>
  <div class="col-md-4">
  	
 <?php questRadio($_SESSION['fiche']['quest1_collectivite'],$_SESSION['fiche']['quest1_collectivite_personne'],$_SESSION['fiche']['quest1_collectivite_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Remise Règlement intérieur</div>
  <div class="col-md-4">
 
 <?php questRadio($_SESSION['fiche']['quest1_reglement'],$_SESSION['fiche']['quest1_reglement_personne'],$_SESSION['fiche']['quest1_reglement_delai']); ?> 
 
  </h4>
</div>	
</div>

	
<!-- fin container q1 -->
		<br>
<!-- question 2 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">2- Locaux de personnel <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service2"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service2" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest2']; ?></blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Armoire/Vestiaire</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest2_armoire'],$_SESSION['fiche']['quest2_armoire_personne'],$_SESSION['fiche']['quest2_armoire_delai']); ?> 
 
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite installations douches et sanitaires</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest2_installations'],$_SESSION['fiche']['quest2_installations_personne'],$_SESSION['fiche']['quest2_installations_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite locaux du personnel</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest2_locaux'],$_SESSION['fiche']['quest2_locaux_personne'],$_SESSION['fiche']['quest2_locaux_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite des services</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest2_services'],$_SESSION['fiche']['quest2_services_personne'],$_SESSION['fiche']['quest2_services_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Alcoolisme/Tabagisme</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest2_alcoolisme'],$_SESSION['fiche']['quest2_alcoolisme_personne'],$_SESSION['fiche']['quest2_alcoolisme_delai']); ?> 
 
  </h4>
</div>
	</div>
<!-- fin container q2 -->
<br>
<!-- question 3 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">3- Dotations vestimentaires <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service3"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service3" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest3']; ?></blockquote>
</div>
<div class="row"><h4>
<div class="col-md-12"><b>E.P.I (Equipements de Protection Individuelle)</b></div>
</div>
<div class="row"><h4> 
 <div class="col-md-4">- Chaussures</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_chaussures'],$vide,$vide); ?> 
 
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Gants</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_gants'],$vide,$vide); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Lunettes</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_lunettes'],$vide,$vide); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Casque Anti-bruit</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_casque'],$vide,$vide); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Gilet Fluorescent</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_gilet'],$vide,$vide); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><?php echo $_SESSION['fiche']['quest3_autre_epi_type']; ?></div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_autre'],$vide,$vide); ?> 
 
  </h4>
</div>
<div class="row"><h4>
<div class="col-md-12"><b>Vêtement de travail</b></div>
</div>
<div class="row"><h4> 
 <div class="col-md-4">- Pantalon et veste</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_pantalon'],$vide,$vide); ?> 
 
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Parka</div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_parka'],$vide,$vide); ?>  
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><?php echo $_SESSION['fiche']['quest3_autre_vetement_type']; ?></div>
  <div class="col-md-4">

 <?php questRadio($_SESSION['fiche']['quest3_autre_vetemement'],$vide,$vide); ?> 
 
  </h4>
</div>
	</div>
<!-- fin container q3 -->
<br>
<!-- question 4 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">4- Permis <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service4"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service4" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest4']; ?></blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Permis de l'agent</div>
  <div class="col-md-4">

<?php 

if($_SESSION['fiche']['quest4_permis']!=""){
foreach($_SESSION['fiche']['quest4_permis'] as $element) {echo $element . '  &nbsp;&nbsp;';}
}
?>

  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Interdiction</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest4_interdition'],$_SESSION['fiche']['quest4_interdition_personne'],$_SESSION['fiche']['quest4_interdition_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-2">- Validation à faire</div>
  <div class="col-md-2"><?php echo $_SESSION['fiche']['quest4_validation_type']; ?></div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest4_validation'],$_SESSION['fiche']['quest4_validation_personne'],$_SESSION['fiche']['quest4_validation_delai']); ?> 
 
  </h4>
</div>
  
</div>
	
<!-- fin container q4 -->
<br>
<!-- question 5 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">5- Vaccinations <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service5"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service5" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest5']; ?></blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Tétanos</div>
  <div class="col-md-4">
 
 <?php questRadio($_SESSION['fiche']['quest5_tetanos'],$_SESSION['fiche']['quest5_tetanos_personne'],$_SESSION['fiche']['quest5_tetanos_delai']); ?> 
 
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><?php echo $_SESSION['fiche']['quest5_autre_type']; ?></div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest5_autre'],$_SESSION['fiche']['quest5_autre_personne'],$_SESSION['fiche']['quest5_autre_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite Médecin du travail</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest5_visite'],$_SESSION['fiche']['quest5_visite_personne'],$_SESSION['fiche']['quest5_visite_delai']); ?> 
 
  </h4>
</div>
  
</div>

<!-- fin container q5 -->
<br>
<!-- question 6 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">6- Utilisation Matériel <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service6"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service6" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest6']; ?></blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Formation à l'utilisation</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest6_formation'],$_SESSION['fiche']['quest6_formation_personne'],$_SESSION['fiche']['quest6_formation_delai']); ?> 
 
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Démonstration</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest6_demonstration'],$_SESSION['fiche']['quest6_demonstration_personne'],$_SESSION['fiche']['quest6_demonstration_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Port des EPI</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest6_epi'],$_SESSION['fiche']['quest6_epi_personne'],$_SESSION['fiche']['quest6_epi_delai']); ?> 
 
  </h4>
</div>
  
</div>
	
<!-- fin container q6 -->
<br>
<!-- question 7 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">7- Formations spécifiques <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service7"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service7" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest7']; ?></blockquote></div>

	<div id="quest7_sub" class="collapse">
  		
  		 <div class="row"><h4>
  <div class="col-md-4"><blockquote>Rien à renseigner pour ce type de contrat</blockquote></div></h4>
  </div>
  		
  			
  			</div>
  	
  	<div id="quest7" class="collapse in">
  	
<div class="row"><h4>
  <div class="col-md-4">- Signalisation de chantier</div>
  <div class="col-md-4">
 
 <?php questRadio($_SESSION['fiche']['quest7_signalisation'],$_SESSION['fiche']['quest7_signalisation_personne'],$_SESSION['fiche']['quest7_signalisation_delai']); ?> 
 
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Travail en hauteur</div>
  <div class="col-md-4">
 
 <?php questRadio($_SESSION['fiche']['quest7_hauteur'],$_SESSION['fiche']['quest7_hauteur_personne'],$_SESSION['fiche']['quest7_hauteur_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Travail en pente</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_pente'],$_SESSION['fiche']['quest7_pente_personne'],$_SESSION['fiche']['quest7_pente_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formations risques chimiques</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_chimique'],$_SESSION['fiche']['quest7_chimique_personne'],$_SESSION['fiche']['quest7_chimique_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitations électriques</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_electrique'],$_SESSION['fiche']['quest7_electrique_personne'],$_SESSION['fiche']['quest7_electrique_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation nacelle</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_nacelle'],$_SESSION['fiche']['quest7_nacelle_personne'],$_SESSION['fiche']['quest7_nacelle_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation chariots de manutention</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_chariot'],$_SESSION['fiche']['quest7_chariot_personne'],$_SESSION['fiche']['quest7_chariot_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation matériels de travaux publics</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_materiel'],$_SESSION['fiche']['quest7_materiel_personne'],$_SESSION['fiche']['quest7_materiel_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation incendie</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest7_incendie'],$_SESSION['fiche']['quest7_incendie_personne'],$_SESSION['fiche']['quest7_incendie_delai']); ?> 
 
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation secourisme</div>
  <div class="col-md-4">
 
 <?php questRadio($_SESSION['fiche']['quest7_secourisme'],$_SESSION['fiche']['quest7_secourisme_personne'],$_SESSION['fiche']['quest7_secourisme_delai']); ?> 
 
  </h4>
  </div>
   </div>
  </div>
  <br>
<!-- question 8 -->
  	<div class="container2" style="background-color:#efefef;">
	<h3 style="color:#008ec0">8- Registre de Santé et Sécurité au Travail <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service8"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service8" class="collapse">
	<blockquote>
	<?php echo $afficheInfo['quest8']; ?></blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Droit de retrait</div>
  <div class="col-md-4">
  
 <?php questRadio($_SESSION['fiche']['quest8_retrait'],$_SESSION['fiche']['quest8_retrait_personne'],$_SESSION['fiche']['quest8_retrait_delai']); ?> 
 
  </h4>
 </div>
	

 

  
  
  </div><!-- /.box-body -->
  <br>
   <button type="button" class="btn btn-default" onclick="window.location.href='index.php'"><i class="fa fa-arrow-circle-left"></i> Modifier la fiche</button>  
     &nbsp;&nbsp;&nbsp;           <button type="button" class="btn btn-primary" onclick="location.href='ajout_fiche.php';" ><i class="fa fa-floppy-o"></i> &nbsp; Valider la fiche agent</button>
              
</div><!-- /.box -->


  
   
      

        </section><!-- /.content -->
      </div><!-- /.content-wrapper --> 
   
 <?php require(__DIR__ .'/../../../include/footer_back.php'); ?>
   
   
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/app.min.js"></script>
 
 
 <script>
$(function(){

<?php 

//Affiche ou cache la question 7 en mode édition
echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']<5) ? "$(\"#quest7\").collapse('hide');$(\"#quest7_sub\").collapse('show');" : "$(\"#quest7\").collapse('show');$(\"#quest7_sub\").collapse('hide')");


?>
});
 </script>
  </body>
</html>