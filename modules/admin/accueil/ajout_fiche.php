<?php

/***** Dernière modification : 17/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=21;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/../../../plugins/PHPMailer/class.phpmailer.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);

// recuperation de l'id membre pour creation de la table de laison fiche_has_membre
$id_membre=$_SESSION['id_membre'];

// Création d'une fiche accueil
$creaFiche=$accueil->creationFiche(
    $id_membre,
    $_SESSION['fiche']['quest0_nom'],
	$_SESSION['fiche']['quest0_service'],
	$_SESSION['fiche']['quest0_matricule'],
	$_SESSION['fiche']['quest0_typecontrat'],
	
	$_SESSION['fiche']['quest1_service'],
	$_SESSION['fiche']['quest1_service_personne'],  
	$_SESSION['fiche']['quest1_service_delai'],
	$_SESSION['fiche']['quest1_collectivite'],
	$_SESSION['fiche']['quest1_collectivite_personne'], 
	$_SESSION['fiche']['quest1_collectivite_delai'],
	$_SESSION['fiche']['quest1_reglement'],
	$_SESSION['fiche']['quest1_reglement_personne'], 
	$_SESSION['fiche']['quest1_reglement_delai'], 

	$_SESSION['fiche']['quest2_armoire'],
	$_SESSION['fiche']['quest2_armoire_personne'],
	$_SESSION['fiche']['quest2_armoire_delai'], 
	$_SESSION['fiche']['quest2_installations'],
	$_SESSION['fiche']['quest2_installations_personne'],
	$_SESSION['fiche']['quest2_installations_delai'], 
	$_SESSION['fiche']['quest2_locaux'],
	$_SESSION['fiche']['quest2_locaux_personne'], 
	$_SESSION['fiche']['quest2_locaux_delai'],
	$_SESSION['fiche']['quest2_services'],
	$_SESSION['fiche']['quest2_services_personne'],
	$_SESSION['fiche']['quest2_services_delai'],
	$_SESSION['fiche']['quest2_alcoolisme'],
	$_SESSION['fiche']['quest2_alcoolisme_personne'], 
	$_SESSION['fiche']['quest2_alcoolisme_delai'],
	
	$_SESSION['fiche']['quest3_chaussures'],
	$_SESSION['fiche']['quest3_gants'],
	$_SESSION['fiche']['quest3_lunettes'],
	$_SESSION['fiche']['quest3_casque'],
	$_SESSION['fiche']['quest3_gilet'],
	$_SESSION['fiche']['quest3_autre'],
	$_SESSION['fiche']['quest3_autre_epi_type'],
	$_SESSION['fiche']['quest3_pantalon'],
	$_SESSION['fiche']['quest3_parka'],
	$_SESSION['fiche']['quest3_autre_vetemement'],
	$_SESSION['fiche']['quest3_autre_vetement_type'],
	
	$_SESSION['fiche']['quest4_permis'],
	$_SESSION['fiche']['quest4_interdition'],
	$_SESSION['fiche']['quest4_interdition_personne'],
	$_SESSION['fiche']['quest4_interdition_delai'], 
	$_SESSION['fiche']['quest4_validation'],
	$_SESSION['fiche']['quest4_validation_type'], 
	$_SESSION['fiche']['quest4_validation_personne'], 
	$_SESSION['fiche']['quest4_validation_delai'], 
	
	$_SESSION['fiche']['quest5_tetanos'],
    $_SESSION['fiche']['quest5_tetanos_personne'], 
	$_SESSION['fiche']['quest5_tetanos_delai'], 
	$_SESSION['fiche']['quest5_autre'],
	$_SESSION['fiche']['quest5_autre_type'], 
    $_SESSION['fiche']['quest5_autre_personne'],
	$_SESSION['fiche']['quest5_autre_delai'],
	$_SESSION['fiche']['quest5_visite'],
	$_SESSION['fiche']['quest5_visite_personne'],
	$_SESSION['fiche']['quest5_visite_delai'],
	
	$_SESSION['fiche']['quest6_formation'],
	$_SESSION['fiche']['quest6_formation_personne'], 
	$_SESSION['fiche']['quest6_formation_delai'],
	$_SESSION['fiche']['quest6_demonstration'],
	$_SESSION['fiche']['quest6_demonstration_personne'], 
	$_SESSION['fiche']['quest6_demonstration_delai'], 
	$_SESSION['fiche']['quest6_epi'],
	$_SESSION['fiche']['quest6_epi_personne'],
	$_SESSION['fiche']['quest6_epi_delai'], 
	
	$_SESSION['fiche']['quest7_signalisation'],
	$_SESSION['fiche']['quest7_signalisation_personne'], 
	$_SESSION['fiche']['quest7_signalisation_delai'],
	$_SESSION['fiche']['quest7_hauteur'],
	$_SESSION['fiche']['quest7_hauteur_personne'],
	$_SESSION['fiche']['quest7_hauteur_delai'],
	$_SESSION['fiche']['quest7_pente'],
	$_SESSION['fiche']['quest7_pente_personne'],
	$_SESSION['fiche']['quest7_pente_delai'],
	$_SESSION['fiche']['quest7_chimique'],
	$_SESSION['fiche']['quest7_chimique_personne'], 
	$_SESSION['fiche']['quest7_chimique_delai'], 
	$_SESSION['fiche']['quest7_electrique'],
	$_SESSION['fiche']['quest7_electrique_personne'], 
	$_SESSION['fiche']['quest7_electrique_delai'],
	$_SESSION['fiche']['quest7_nacelle'],
	$_SESSION['fiche']['quest7_nacelle_personne'], 
	$_SESSION['fiche']['quest7_nacelle_delai'], 
	$_SESSION['fiche']['quest7_chariot'],
	$_SESSION['fiche']['quest7_chariot_personne'],
	$_SESSION['fiche']['quest7_chariot_delai'],
	$_SESSION['fiche']['quest7_materiel'],
	$_SESSION['fiche']['quest7_materiel_personne'], 
	$_SESSION['fiche']['quest7_materiel_delai'], 
	$_SESSION['fiche']['quest7_incendie'],
	$_SESSION['fiche']['quest7_incendie_personne'],
	$_SESSION['fiche']['quest7_incendie_delai'], 
	$_SESSION['fiche']['quest7_secourisme'],
	$_SESSION['fiche']['quest7_secourisme_personne'],
	$_SESSION['fiche']['quest7_secourisme_delai'], 
	
	$_SESSION['fiche']['quest8_retrait'],
	$_SESSION['fiche']['quest8_retrait_personne'],
	$_SESSION['fiche']['quest8_retrait_delai']);




$recupmail=$accueil->recupMail();

$fiche=$accueil->afficheFiche($creaFiche);
 
$accueil->envoiMailMagasinier($fiche,$recupmail['email_magasinier']);
$accueil->envoiMailMedecine($fiche,$recupmail['email_medecine']);

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
    



  </head>
 
  <body class="hold-transition skin-blue sidebar-mini" >
  	
  	
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


      

<br><br><br>

  	<!-- Main content -->
        <section class="content">
        
      <div class="row">
		<div class="col-md-1"> 
		</div>	 	
		<div class="col-md-10"> 
		
    <div class="box box-solid box-success">
  <div class="box-header with-border">
  	<span class='glyphicon glyphicon-ok'></span>
  	
    <h3 class="box-title">Création d'une fiche accueil d'Hygiène et de Sécurité</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->

    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
    La création de la fiche s'est déroulée avec succès ! 
    
      </div><!-- /.box-body -->

</div></div>
<div class="col-md-1"> 
		</div>

          </div>
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
    
       
 

  </body>
</html>