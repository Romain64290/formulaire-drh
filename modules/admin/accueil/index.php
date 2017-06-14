<?php

/***** Dernière modification : 22/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=21;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// verifie si l session existe (opérateur ternaire)
$session_fiche = isset($_SESSION['fiche']) ? $_SESSION['fiche'] : NULL;

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);

// Affichage les infobules
$afficheInfo=$accueil->afficheOptions(); 

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
    
     <!-- Datepicker -->
    <link rel="stylesheet" href="../../../plugins/datepicker/datepicker3.css" >  
    

    

 
    <script src="../../../plugins/Chart.js-master/dist/Chart.js"></script>

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
 
  <body class="hold-transition skin-blue sidebar-mini" onload="selectPersonneload();" >
  	
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
        	
 <form name="inscriptionForm"  id="inscriptionForm"  action="validation_accueil_agent.php" method="post" >   
  
       
<div class="box box-primary">
 
  
    <div class="box-body">
  

  
  <div class="container2" style="background-color:#efefef;">
		<h3 style="color:#008ec0">L'agent nouvellement recruté</h3>
		  <div class="row"><h4>
 		
 <div class="col-md-2">
  		  <div class="form-group">
 <input type="text" class="form-control" name="quest0_nom" placeholder="Nom/Prénom de l'agent" required value="<?php echo  (isset($_SESSION['fiche']['quest0_nom']) ? $_SESSION['fiche']['quest0_nom'] : NULL); ?>">
 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
   <div class="col-md-3">
  <div class="form-group">
    <input type="text" class="form-control" name="quest0_service" placeholder="Service" required value="<?php echo  (isset($_SESSION['fiche']['quest0_service']) ? $_SESSION['fiche']['quest0_service'] : NULL); ?>">
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
     <div class="col-md-2">
  <div class="form-group">
  <input class="form-control" type="text" name="quest0_matricule" title="Date : dd/mm/yyyy" pattern="^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$" placeholder="Date de naissance : DD/MM/YYYY" value="<?php echo (isset($_SESSION['fiche']['quest0_matricule']) ? $_SESSION['fiche']['quest0_matricule'] : NULL); ?>"  required>
  </div>
  </div>
  <div class="col-md-5">
  <div class="form-group">
<select class="form-control" id="quest0_typecontrat" name="quest0_typecontrat" id="momo" required>
  <option value="" selected disabled="disabled">Type de contrat</option>
  <option value="1" <?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==1) ? "selected" : NULL); ?> >Stage découverte collège - 3/5 jours</option>
  <option value="2"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==2) ? "selected" : NULL); ?>>Stagiaire reconversion durée - 1/3 semaines</option>
  <option value="3"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==3) ? "selected" : NULL); ?>>Saisonnier</option>
  <option value="4"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==4) ? "selected" : NULL); ?>>TIG : Travaux d'Intérêts Généraux</option>
  <option value="5"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==5) ? "selected" : NULL); ?>>CAE</option>
  <option value="6"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==6) ? "selected" : NULL); ?>>Apprenti</option>
  <option value="7"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==7) ? "selected" : NULL); ?>>Recrutement direct (aux, stagiaire, fonctionnaire)</option>
  <option value="8"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==8) ? "selected" : NULL); ?>>Contractuel</option>
  <option value="9"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==9) ? "selected" : NULL); ?>>Mutation interne</option>
  <option value="10"<?php echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']==10) ? "selected" : NULL); ?>>Mutation externe</option>
</select>
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
  <label class="radio-inline">
  <input type="radio" name="quest1_service"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest1_service']) AND $_SESSION['fiche']['quest1_service']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest1_service" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest1_service']) AND $_SESSION['fiche']['quest1_service']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest1_service" id="quest1_service_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest1_service']) AND $_SESSION['fiche']['quest1_service']=="a_faire") ? "checked" : NULL); ?>>À faire
 
</label>
  </div>
  <div id="quest1_service" class="collapse">
  	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest1_service_personne" value="<?php echo (isset($_SESSION['fiche']['quest1_service_personne'])  ? $_SESSION['fiche']['quest1_service_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">	
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest1_service_delai" value="<?php echo (isset($_SESSION['fiche']['quest1_service_delai'])  ? $_SESSION['fiche']['quest1_service_delai'] : NULL); ?>">
        		  </div>
</div>
  </div></div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Présentation de la collectivité</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest1_collectivite"   value="realise" <?php echo ((isset($_SESSION['fiche']['quest1_collectivite']) AND $_SESSION['fiche']['quest1_collectivite']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest1_collectivite"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest1_collectivite']) AND $_SESSION['fiche']['quest1_collectivite']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest1_collectivite" id="quest1_collectivite_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest1_collectivite']) AND $_SESSION['fiche']['quest1_collectivite']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
    <div id="quest1_collectivite" class="collapse">
    	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest1_collectivite_personne" value="<?php echo (isset($_SESSION['fiche']['quest1_collectivite_personne'])  ? $_SESSION['fiche']['quest1_collectivite_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest1_collectivite_delai" value="<?php echo (isset($_SESSION['fiche']['quest1_collectivite_delai'])  ? $_SESSION['fiche']['quest1_collectivite_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Remise Règlement intérieur</div>
  <div class="col-md-4">
  	<div class="form-group"  >
  		<div class="input-group"  >
  <label class="radio-inline">
  <input type="radio" name="quest1_reglement" value="realise" <?php echo ((isset($_SESSION['fiche']['quest1_reglement']) AND $_SESSION['fiche']['quest1_reglement']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest1_reglement" id="quest1_reglement_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest1_reglement']) AND $_SESSION['fiche']['quest1_reglement']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div></div></div>
    <div id="quest1_reglement" class="collapse">
    	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest1_reglement_personne" value="<?php echo (isset($_SESSION['fiche']['quest1_reglement_personne'])  ? $_SESSION['fiche']['quest1_reglement_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest1_reglement_delai" value="<?php echo (isset($_SESSION['fiche']['quest1_reglement_delai'])  ? $_SESSION['fiche']['quest1_reglement_delai'] : NULL); ?>">
        		  </div>
  </div></div>
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
	<?php echo $afficheInfo['quest2']; ?>
	</blockquote>
</div>
<div class="row"><h4>
  <div class="col-md-4">- Armoire/Vestiaire</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest2_armoire"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest2_armoire']) AND $_SESSION['fiche']['quest2_armoire']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_armoire" value="non_concerne"<?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest2_armoire']) AND $_SESSION['fiche']['quest2_armoire']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_armoire" id="quest2_armoire_id" value="a_faire"<?php echo ((isset($_SESSION['fiche']['quest2_armoire']) AND $_SESSION['fiche']['quest2_armoire']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
      <div id="quest2_armoire" class="collapse">
      	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest2_armoire_personne" value="<?php echo (isset($_SESSION['fiche']['quest2_armoire_personne'])  ? $_SESSION['fiche']['quest2_armoire_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest2_armoire_delai" value="<?php echo (isset($_SESSION['fiche']['quest2_armoire_delai'])  ? $_SESSION['fiche']['quest2_armoire_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite installations douches et sanitaires</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest2_installations"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest2_installations']) AND $_SESSION['fiche']['quest2_installations']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_installations" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest2_installations']) AND $_SESSION['fiche']['quest2_installations']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_installations" id="quest2_installations_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest2_installations']) AND $_SESSION['fiche']['quest2_installations']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
        <div id="quest2_installations" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest2_installations_personne" value="<?php echo (isset($_SESSION['fiche']['quest2_installations_personne'])  ? $_SESSION['fiche']['quest2_installations_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest2_installations_delai" value="<?php echo (isset($_SESSION['fiche']['quest2_installations_delai'])  ? $_SESSION['fiche']['quest2_installations_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite locaux du personnel</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest2_locaux" value="realise" <?php echo ((isset($_SESSION['fiche']['quest2_locaux']) AND $_SESSION['fiche']['quest2_locaux']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_locaux" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest2_locaux']) AND $_SESSION['fiche']['quest2_locaux']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_locaux" value="a_faire" id="quest2_locaux_id" <?php echo ((isset($_SESSION['fiche']['quest2_locaux']) AND $_SESSION['fiche']['quest2_locaux']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
        <div id="quest2_locaux" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest2_locaux_personne" value="<?php echo (isset($_SESSION['fiche']['quest2_locaux_personne'])  ? $_SESSION['fiche']['quest2_locaux_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest2_locaux_delai" value="<?php echo (isset($_SESSION['fiche']['quest2_locaux_delai'])  ? $_SESSION['fiche']['quest2_locaux_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite des services</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest2_services" value="realise" <?php echo ((isset($_SESSION['fiche']['quest2_services']) AND $_SESSION['fiche']['quest2_services']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_services" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest2_services']) AND $_SESSION['fiche']['quest2_services']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_services" value="a_faire" id="quest2_services_id" <?php echo ((isset($_SESSION['fiche']['quest2_services']) AND $_SESSION['fiche']['quest2_services']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
        <div id="quest2_services" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest2_services_personne" value="<?php echo (isset($_SESSION['fiche']['quest2_services_personne'])  ? $_SESSION['fiche']['quest2_services_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest2_services_delai" value="<?php echo (isset($_SESSION['fiche']['quest2_services_delai'])  ? $_SESSION['fiche']['quest2_services_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Alcoolisme/Tabagisme</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest2_alcoolisme" value="realise" <?php echo ((isset($_SESSION['fiche']['quest2_alcoolisme']) AND $_SESSION['fiche']['quest2_alcoolisme']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_alcoolisme" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest2_alcoolisme']) AND $_SESSION['fiche']['quest2_alcoolisme']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest2_alcoolisme" value="a_faire" id="quest2_alcoolisme_id" <?php echo ((isset($_SESSION['fiche']['quest2_alcoolisme']) AND $_SESSION['fiche']['quest2_alcoolisme']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
        <div id="quest2_alcoolisme" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest2_alcoolisme_personne" value="<?php echo (isset($_SESSION['fiche']['quest2_alcoolisme_personne'])  ? $_SESSION['fiche']['quest2_alcoolisme_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest2_alcoolisme_delai" value="<?php echo (isset($_SESSION['fiche']['quest2_alcoolisme_delai'])  ? $_SESSION['fiche']['quest2_alcoolisme_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
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
<label class="radio-inline">
  <input type="radio" name="quest3_chaussures"  value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_chaussures']) AND $_SESSION['fiche']['quest3_chaussures']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_chaussures" value="non_concerne"  <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_chaussures']) AND $_SESSION['fiche']['quest3_chaussures']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Gants</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_gants" value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_gants']) AND $_SESSION['fiche']['quest3_gants']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_gants" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_gants']) AND $_SESSION['fiche']['quest3_gants']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Lunettes</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_lunettes" value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_lunettes']) AND $_SESSION['fiche']['quest3_lunettes']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_lunettes" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_lunettes']) AND $_SESSION['fiche']['quest3_lunettes']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Casque Anti-bruit</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_casque"  value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_casque']) AND $_SESSION['fiche']['quest3_casque']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_casque"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_casque']) AND $_SESSION['fiche']['quest3_casque']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Gilet Fluorescent</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_gilet"  value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_gilet']) AND $_SESSION['fiche']['quest3_gilet']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_gilet"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_gilet']) AND $_SESSION['fiche']['quest3_gilet']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autre équipement" name="quest3_autre_epi_type" value="<?php echo (isset($_SESSION['fiche']['quest3_autre_epi_type']) ? $_SESSION['fiche']['quest3_autre_epi_type'] : NULL); ?>"></div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_autre"  value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_autre']) AND $_SESSION['fiche']['quest3_autre']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_autre" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_autre']) AND $_SESSION['fiche']['quest3_autre']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
</div>
<div class="row"><h4>
<div class="col-md-12"><b>Vêtement de travail</b></div>
</div>
<div class="row"><h4> 
 <div class="col-md-4">- Pantalon et veste</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_pantalon"  value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_pantalon']) AND $_SESSION['fiche']['quest3_pantalon']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_pantalon" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_pantalon']) AND $_SESSION['fiche']['quest3_pantalon']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Parka</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_parka" value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_parka']) AND $_SESSION['fiche']['quest3_parka']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_parka" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_parka']) AND $_SESSION['fiche']['quest3_parka']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autre vêtements" name="quest3_autre_vetement_type" value="<?php echo (isset($_SESSION['fiche']['quest3_autre_vetement_type']) ? $_SESSION['fiche']['quest3_autre_vetement_type'] : NULL); ?>"></div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="quest3_autre_vetemement" value="a_doter" <?php echo ((isset($_SESSION['fiche']['quest3_autre_vetemement']) AND $_SESSION['fiche']['quest3_autre_vetemement']=="a_doter") ? "checked" : NULL); ?>>À doter
</label>
<label class="radio-inline">
  <input type="radio" name="quest3_autre_vetemement" value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest3_autre_vetemement']) AND $_SESSION['fiche']['quest3_autre_vetemement']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
  </div>
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
$permis_tous="";
 $permis = isset($_SESSION['fiche']['quest4_permis']) ? $_SESSION['fiche']['quest4_permis'] : NULL;
if($permis!=""){
foreach($permis as $element) {$permis_tous.=$element;}
}
?>
<label class="checkbox-inline">
  <input type="checkbox" name="quest4_permis[]" value="A" <?php if( strstr($permis_tous, "A")) { echo "checked";} ?> > A
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="quest4_permis[]" value="B" <?php if( strstr($permis_tous, "B")) { echo "checked";} ?>> B
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="quest4_permis[]" value="C" <?php if( strstr($permis_tous, "C")) { echo "checked";} ?>> C
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="quest4_permis[]" value="D" <?php if( strstr($permis_tous, "D")) { echo "checked";} ?>> D
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="quest4_permis[]" value="E" <?php if( strstr($permis_tous, "E")) { echo "checked";} ?>> E
</label>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Interdiction </div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest4_interdition"  value="realise"<?php echo ((isset($_SESSION['fiche']['quest4_interdition']) AND $_SESSION['fiche']['quest4_interdition']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest4_interdition"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest4_interdition']) AND $_SESSION['fiche']['quest4_interdition']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest4_interdition" id="quest4_interdition_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest4_interdition']) AND $_SESSION['fiche']['quest4_interdition']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
    <div id="quest4_interdition" class="collapse">
    	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest4_interdition_personne"value="<?php echo (isset($_SESSION['fiche']['quest4_interdition_personne'])  ? $_SESSION['fiche']['quest4_interdition_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest4_interdition_delai" value="<?php echo (isset($_SESSION['fiche']['quest4_interdition_delai'])  ? $_SESSION['fiche']['quest4_interdition_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-2">- Validation à faire</div>
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Type CACES" name="quest4_validation_type" value="<?php echo (isset($_SESSION['fiche']['quest4_validation_type']) ? $_SESSION['fiche']['quest4_validation_type'] : NULL); ?>"></div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest4_validation"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest4_validation']) AND $_SESSION['fiche']['quest4_validation']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest4_validation"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest4_validation']) AND $_SESSION['fiche']['quest4_validation']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest4_validation" id="quest4_validation_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest4_validation']) AND $_SESSION['fiche']['quest4_validation']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
      <div id="quest4_validation" class="collapse">
      	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest4_validation_personne" value="<?php echo (isset($_SESSION['fiche']['quest4_validation_personne'])  ? $_SESSION['fiche']['quest4_validation_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest4_validation_delai" value="<?php echo (isset($_SESSION['fiche']['quest4_validation_delai'])  ? $_SESSION['fiche']['quest4_validation_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
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
  	<div class="form-group"  >
  		<div class="input-group"  >
  <label class="radio-inline">
  <input type="radio" name="quest5_tetanos"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest5_tetanos']) AND $_SESSION['fiche']['quest5_tetanos']=="realise") ? "checked" : NULL); ?> >Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest5_tetanos" id="quest5_tetanos_id"  value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest5_tetanos']) AND $_SESSION['fiche']['quest5_tetanos']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div></div></div>
        <div id="quest5_tetanos" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest5_tetanos_personne" value="<?php echo (isset($_SESSION['fiche']['quest5_tetanos_personne'])  ? $_SESSION['fiche']['quest5_tetanos_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest5_tetanos_delai" value="<?php echo (isset($_SESSION['fiche']['quest5_tetanos_delai'])  ? $_SESSION['fiche']['quest5_tetanos_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autres vaccins" name="quest5_autre_type" value="<?php echo (isset($_SESSION['fiche']['quest5_autre_type']) ? $_SESSION['fiche']['quest5_autre_type'] : NULL); ?>"></div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest5_autre"  value="realise" <?php echo ((isset($_SESSION['fiche']['quest5_autre']) AND $_SESSION['fiche']['quest5_autre']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest5_autre"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest5_autre']) AND $_SESSION['fiche']['quest5_autre']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest5_autre" id="quest5_autre_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest5_autre']) AND $_SESSION['fiche']['quest5_autre']=="a_faire") ? "checked" : NULL); ?>>À faire
  </div>
        <div id="quest5_autre" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest5_autre_personne" value="<?php echo (isset($_SESSION['fiche']['quest5_autre_personne'])  ? $_SESSION['fiche']['quest5_autre_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest5_autre_delai" value="<?php echo (isset($_SESSION['fiche']['quest5_autre_delai'])  ? $_SESSION['fiche']['quest5_autre_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite Médecin du travail</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest5_visite" value="realise" <?php echo ((isset($_SESSION['fiche']['quest5_visite']) AND $_SESSION['fiche']['quest5_visite']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest5_visite"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest5_visite']) AND $_SESSION['fiche']['quest5_visite']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest5_visite" id="quest5_visite_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest5_visite']) AND $_SESSION['fiche']['quest5_visite']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
        <div id="quest5_visite" class="collapse">
        	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest5_visite_personne" value="<?php echo (isset($_SESSION['fiche']['quest5_visite_personne'])  ? $_SESSION['fiche']['quest5_visite_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest5_visite_delai" value="<?php echo (isset($_SESSION['fiche']['quest5_visite_delai'])  ? $_SESSION['fiche']['quest5_visite_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </div>
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
  <label class="radio-inline">
  <input type="radio" name="quest6_formation"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest6_formation']) AND $_SESSION['fiche']['quest6_formation']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_formation"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest6_formation']) AND $_SESSION['fiche']['quest6_formation']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_formation" id="quest6_formation_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest6_formation']) AND $_SESSION['fiche']['quest6_formation']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
          <div id="quest6_formation" class="collapse">
          	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest6_formation_personne" value="<?php echo (isset($_SESSION['fiche']['quest6_formation_personne'])  ? $_SESSION['fiche']['quest6_formation_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest6_formation_delai" value="<?php echo (isset($_SESSION['fiche']['quest6_formation_delai'])  ? $_SESSION['fiche']['quest6_formation_delai'] : NULL); ?>">
        		  </div></div>
  </div></div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Démonstration</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest6_demonstration"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest6_demonstration']) AND $_SESSION['fiche']['quest6_demonstration']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_demonstration"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest6_demonstration']) AND $_SESSION['fiche']['quest6_demonstration']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_demonstration" id="quest6_demonstration_id" value="a_faire"<?php echo ((isset($_SESSION['fiche']['quest6_demonstration']) AND $_SESSION['fiche']['quest6_demonstration']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
          <div id="quest6_demonstration" class="collapse">
          	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest6_demonstration_personne" value="<?php echo (isset($_SESSION['fiche']['quest6_demonstration_personne'])  ? $_SESSION['fiche']['quest6_demonstration_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest6_demonstration_delai" value="<?php echo (isset($_SESSION['fiche']['quest6_demonstration_delai'])  ? $_SESSION['fiche']['quest6_demonstration_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Port des EPI</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest6_epi"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest6_epi']) AND $_SESSION['fiche']['quest6_epi']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_epi"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest6_epi']) AND $_SESSION['fiche']['quest6_epi']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest6_epi" id="quest6_epi_id"  value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest6_epi']) AND $_SESSION['fiche']['quest6_epi']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
          <div id="quest6_epi" class="collapse">
          	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest6_epi_personne" value="<?php echo (isset($_SESSION['fiche']['quest6_epi_personne'])  ? $_SESSION['fiche']['quest6_epi_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest6_epi_delai" value="<?php echo (isset($_SESSION['fiche']['quest6_epi_delai'])  ? $_SESSION['fiche']['quest6_epi_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
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
	<?php echo $afficheInfo['quest7']; ?></blockquote>
	</div>

	<div id="quest7_sub" class="collapse">
  		
  		 <div class="row"><h4>
  <div class="col-md-4"><blockquote>Rien à renseigner pour ce type de contrat</blockquote></div></h4>
  </div>
  		
  			
  			</div>
  	
  	<div id="quest7" class="collapse in">
  		
<div class="row"><h4>
  <div class="col-md-4">- Signalisation de chantier</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_signalisation"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_signalisation']) AND $_SESSION['fiche']['quest7_signalisation']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_signalisation"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_signalisation']) AND $_SESSION['fiche']['quest7_signalisation']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_signalisation" id="quest7_signalisation_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_signalisation']) AND $_SESSION['fiche']['quest7_signalisation']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
            <div id="quest7_signalisation" class="collapse">
            	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_signalisation_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_signalisation_personne'])  ? $_SESSION['fiche']['quest7_signalisation_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_signalisation_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_signalisation_delai'])  ? $_SESSION['fiche']['quest7_signalisation_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Travail en hauteur</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_hauteur"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_hauteur']) AND $_SESSION['fiche']['quest7_hauteur']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_hauteur"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_hauteur']) AND $_SESSION['fiche']['quest7_hauteur']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_hauteur" id="quest7_hauteur_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_hauteur']) AND $_SESSION['fiche']['quest7_hauteur']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_hauteur" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_hauteur_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_hauteur_personne'])  ? $_SESSION['fiche']['quest7_hauteur_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_hauteur_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_hauteur_delai'])  ? $_SESSION['fiche']['quest7_hauteur_delai'] : NULL); ?>">
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Travail en pente</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_pente"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_pente']) AND $_SESSION['fiche']['quest7_pente']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_pente"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_pente']) AND $_SESSION['fiche']['quest7_pente']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_pente" id="quest7_pente_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_pente']) AND $_SESSION['fiche']['quest7_pente']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_pente" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_pente_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_pente_personne'])  ? $_SESSION['fiche']['quest7_pente_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_pente_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_pente_delai'])  ? $_SESSION['fiche']['quest7_pente_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formations risques chimiques</div>
  <div class="col-md-4">
  	
  	
  	 
  	  	
  <label class="radio-inline">
  	
  <input type="radio" name="quest7_chimique"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_chimique']) AND $_SESSION['fiche']['quest7_chimique']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_chimique"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_chimique']) AND $_SESSION['fiche']['quest7_chimique']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_chimique" id="quest7_chimique_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_chimique']) AND $_SESSION['fiche']['quest7_chimique']=="a_faire") ? "checked" : NULL); ?>>À faire 
</label>
</div> 


              <div id="quest7_chimique" class="collapse">
              	
              	 <div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_chimique_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_chimique_personne'])  ? $_SESSION['fiche']['quest7_chimique_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_chimique_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_chimique_delai'])  ? $_SESSION['fiche']['quest7_chimique_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitations électriques</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_electrique"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_electrique']) AND $_SESSION['fiche']['quest7_electrique']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_electrique"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_electrique']) AND $_SESSION['fiche']['quest7_electrique']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_electrique" id="quest7_electrique_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_electrique']) AND $_SESSION['fiche']['quest7_electrique']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_electrique" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_electrique_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_electrique_personne'])  ? $_SESSION['fiche']['quest7_electrique_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_electrique_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_electrique_delai'])  ? $_SESSION['fiche']['quest7_electrique_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation nacelle</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_nacelle"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_nacelle']) AND $_SESSION['fiche']['quest7_nacelle']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_nacelle"  value="non_concerne"<?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_nacelle']) AND $_SESSION['fiche']['quest7_nacelle']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_nacelle" id="quest7_nacelle_id" value="a_faire"<?php echo ((isset($_SESSION['fiche']['quest7_nacelle']) AND $_SESSION['fiche']['quest7_nacelle']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_nacelle" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_nacelle_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_nacelle_personne'])  ? $_SESSION['fiche']['quest7_nacelle_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_nacelle_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_nacelle_delai'])  ? $_SESSION['fiche']['quest7_nacelle_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation chariots de manutention</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_chariot"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_chariot']) AND $_SESSION['fiche']['quest7_chariot']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_chariot"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_chariot']) AND $_SESSION['fiche']['quest7_chariot']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_chariot" id="quest7_chariot_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_chariot']) AND $_SESSION['fiche']['quest7_chariot']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_chariot" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_chariot_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_chariot_personne'])  ? $_SESSION['fiche']['quest7_chariot_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_chariot_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_chariot_delai'])  ? $_SESSION['fiche']['quest7_chariot_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation matériels de travaux publics</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_materiel"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_materiel']) AND $_SESSION['fiche']['quest7_materiel']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_materiel"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_materiel']) AND $_SESSION['fiche']['quest7_materiel']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_materiel" id="quest7_materiel_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_materiel']) AND $_SESSION['fiche']['quest7_materiel']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_materiel" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_materiel_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_materiel_personne'])  ? $_SESSION['fiche']['quest7_materiel_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_materiel_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_materiel_delai'])  ? $_SESSION['fiche']['quest7_materiel_delai'] : NULL); ?>">
        		  </div></div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation incendie</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_incendie"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest7_incendie']) AND $_SESSION['fiche']['quest7_incendie']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_incendie"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_incendie']) AND $_SESSION['fiche']['quest7_incendie']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_incendie" id="quest7_incendie_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_incendie']) AND $_SESSION['fiche']['quest7_incendie']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_incendie" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_incendie_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_incendie_personne'])  ? $_SESSION['fiche']['quest7_incendie_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_incendie_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_incendie_delai'])  ? $_SESSION['fiche']['quest7_incendie_delai'] : NULL); ?>">
        		  </div></div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation secourisme</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="quest7_secourisme" value="realise" <?php echo ((isset($_SESSION['fiche']['quest7_secourisme']) AND $_SESSION['fiche']['quest7_secourisme']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_secourisme"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest7_secourisme']) AND $_SESSION['fiche']['quest7_secourisme']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest7_secourisme" id="quest7_secourisme_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest7_secourisme']) AND $_SESSION['fiche']['quest7_secourisme']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest7_secourisme" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest7_secourisme_personne" value="<?php echo (isset($_SESSION['fiche']['quest7_secourisme_personne'])  ? $_SESSION['fiche']['quest7_secourisme_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest7_secourisme_delai" value="<?php echo (isset($_SESSION['fiche']['quest7_secourisme_delai'])  ? $_SESSION['fiche']['quest7_secourisme_delai'] : NULL); ?>">
        		  </div></div>
				  </div>
  </div>
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
  <label class="radio-inline">
  <input type="radio" name="quest8_retrait"  value="realise"  <?php echo ((isset($_SESSION['fiche']['quest8_retrait']) AND $_SESSION['fiche']['quest8_retrait']=="realise") ? "checked" : NULL); ?>>Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="quest8_retrait"  value="non_concerne" <?php if(!$session_fiche){echo "checked";} echo ((isset($_SESSION['fiche']['quest8_retrait']) AND $_SESSION['fiche']['quest8_retrait']=="non_concerne") ? "checked" : NULL); ?>>Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="quest8_retrait" id="quest8_retrait_id" value="a_faire" <?php echo ((isset($_SESSION['fiche']['quest8_retrait']) AND $_SESSION['fiche']['quest8_retrait']=="a_faire") ? "checked" : NULL); ?>>À faire
</label>
  </div>
              <div id="quest8_retrait" class="collapse">
              	<div class="form-group"  >
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="quest8_retrait_personne" value="<?php echo (isset($_SESSION['fiche']['quest8_retrait_personne'])  ? $_SESSION['fiche']['quest8_retrait_personne'] : NULL); ?>"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="quest8_retrait_delai" value="<?php echo (isset($_SESSION['fiche']['quest8_retrait_delai'])  ? $_SESSION['fiche']['quest8_retrait_delai'] : NULL); ?>">
        		  </div>
  </div></div></div>
  </h4>
 </div>
	

 

  
  
  </div><!-- /.box-body -->
  <br>
   <button type="button" class="btn btn-default" onclick="window.location.href='../dashboard/index.php'"><i class="fa fa-arrow-circle-left"></i> Annuler</button>  
     &nbsp;&nbsp;&nbsp;           <button type="submit" class="btn btn-primary" ><i class="fa fa-floppy-o"></i> &nbsp; Enregistrer fiche agent</button>
              
</div><!-- /.box -->


  
              	 
</form>

   
      

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
    
    <script src="../../../plugins/datepicker/bootstrap-datepicker.js"></script> 
    <script src="../../../plugins/datepicker/locales/bootstrap-datepicker.fr.js"></script> 
    
 <!-- JQuery Validation Plugin -->
<script src="../../../plugins/jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation-1.15.0/dist/additional-methods.min.js"></script>
<script src="../../../plugins/jquery-validation-1.15.0/dist/localization/messages_fr.js"></script>


    

<script>
$(function(){

<?php 

//Affiche ou cache la question 7 en mode édition
echo ((isset($_SESSION['fiche']['quest0_typecontrat']) AND $_SESSION['fiche']['quest0_typecontrat']<5) ? "$(\"#quest7\").collapse('hide');$(\"#quest7_sub\").collapse('show');" : "$(\"#quest7\").collapse('show');$(\"#quest7_sub\").collapse('hide')");?>


// Gestion de l'affichage de la question 7 : si agent stagiaire la quest 7 disparait.
 $("#quest0_typecontrat").change(function(){
     var status = this.value;
   if(status=="1" || status=="2" || status=="3" || status=="4") {$("#quest7").collapse('hide');$("#quest7_sub").collapse('show');}else{$("#quest7").collapse('show');$("#quest7_sub").collapse('hide');}
     
  });

// Gestion de l'affichage personne/delai si case à cocher "a faire"
affichePersonne('quest1_service');affichePersonne('quest1_collectivite');affichePersonne('quest1_reglement');

affichePersonne('quest2_armoire');affichePersonne('quest2_installations');affichePersonne('quest2_locaux');affichePersonne('quest2_services');affichePersonne('quest2_alcoolisme');

affichePersonne('quest4_interdition');affichePersonne('quest4_validation');

affichePersonne('quest5_tetanos');affichePersonne('quest5_autre');affichePersonne('quest5_visite');

affichePersonne('quest6_formation');affichePersonne('quest6_demonstration');affichePersonne('quest6_epi');

affichePersonne('quest7_signalisation');affichePersonne('quest7_hauteur');affichePersonne('quest7_pente');affichePersonne('quest7_chimique');affichePersonne('quest7_electrique');
affichePersonne('quest7_nacelle');affichePersonne('quest7_chariot');affichePersonne('quest7_materiel');affichePersonne('quest7_incendie');affichePersonne('quest7_secourisme');

affichePersonne('quest8_retrait');



});

// affiche Personne/delai en cas de changmeent
function affichePersonne (quest){
$('input[type=radio][name='+quest+']').on('change', function(){ var valeur = this.value; if(valeur=="a_faire"){$("#"+quest).collapse('show');}else{$("#"+quest).collapse('hide');}});




	
};  

 $('.datepicker').datepicker({
    	 weekStart:1,
    	 color: 'orange',
		 format: 'dd/mm/yyyy',
		 language: "fr-FR", 
		 autoclose: true
		
		
		  });
		  
// Selection des zones de text a afficher au chargmeent
function selectPersonneload (){
<?php echo ((isset($_SESSION['fiche']['quest1_service']) AND $_SESSION['fiche']['quest1_service']=="a_faire") ? "affichePersonneload ('quest1_service');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest1_collectivite']) AND $_SESSION['fiche']['quest1_collectivite']=="a_faire") ? "affichePersonneload ('quest1_collectivite');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest1_reglement']) AND $_SESSION['fiche']['quest1_reglement']=="a_faire") ? "affichePersonneload ('quest1_reglement');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest2_armoire']) AND $_SESSION['fiche']['quest2_armoire']=="a_faire") ? "affichePersonneload ('quest2_armoire');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest2_installations']) AND $_SESSION['fiche']['quest2_installations']=="a_faire") ? "affichePersonneload ('quest2_installations');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest2_locaux']) AND $_SESSION['fiche']['quest2_locaux']=="a_faire") ? "affichePersonneload ('quest2_locaux');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest2_services']) AND $_SESSION['fiche']['quest2_services']=="a_faire") ? "affichePersonneload ('quest2_services');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest2_alcoolisme']) AND $_SESSION['fiche']['quest2_alcoolisme']=="a_faire") ? "affichePersonneload ('quest2_alcoolisme');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest4_interdition']) AND $_SESSION['fiche']['quest4_interdition']=="a_faire") ? "affichePersonneload ('quest4_interdition');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest4_validation']) AND $_SESSION['fiche']['quest4_validation']=="a_faire") ? "affichePersonneload ('quest4_validation');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest5_tetanos']) AND $_SESSION['fiche']['quest5_tetanos']=="a_faire") ? "affichePersonneload ('quest5_tetanos');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest5_autre']) AND $_SESSION['fiche']['quest5_autre']=="a_faire") ? "affichePersonneload ('quest5_autre');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest5_visite']) AND $_SESSION['fiche']['quest5_visite']=="a_faire") ? "affichePersonneload ('quest5_visite');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest6_formation']) AND $_SESSION['fiche']['quest6_formation']=="a_faire") ? "affichePersonneload ('quest6_formation');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest6_demonstration']) AND $_SESSION['fiche']['quest6_demonstration']=="a_faire") ? "affichePersonneload ('quest6_demonstration');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest6_epi']) AND $_SESSION['fiche']['quest6_epi']=="a_faire") ? "affichePersonneload ('quest6_epi');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest7_signalisation']) AND $_SESSION['fiche']['quest7_signalisation']=="a_faire") ? "affichePersonneload ('quest7_signalisation');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_hauteur']) AND $_SESSION['fiche']['quest7_hauteur']=="a_faire") ? "affichePersonneload ('quest7_hauteur');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_pente']) AND $_SESSION['fiche']['quest7_pente']=="a_faire") ? "affichePersonneload ('quest7_pente');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_chimique']) AND $_SESSION['fiche']['quest7_chimique']=="a_faire") ? "affichePersonneload ('quest7_chimique');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_electrique']) AND $_SESSION['fiche']['quest7_electrique']=="a_faire") ? "affichePersonneload ('quest7_electrique');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_nacelle']) AND $_SESSION['fiche']['quest7_nacelle']=="a_faire") ? "affichePersonneload ('quest7_nacelle');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_chariot']) AND $_SESSION['fiche']['quest7_chariot']=="a_faire") ? "affichePersonneload ('quest7_chariot');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_materiel']) AND $_SESSION['fiche']['quest7_materiel']=="a_faire") ? "affichePersonneload ('quest7_materiel');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_incendie']) AND $_SESSION['fiche']['quest7_incendie']=="a_faire") ? "affichePersonneload ('quest7_incendie');" : NULL); ?>
<?php echo ((isset($_SESSION['fiche']['quest7_secourisme']) AND $_SESSION['fiche']['quest7_secourisme']=="a_faire") ? "affichePersonneload ('quest7_secourisme');" : NULL); ?>

<?php echo ((isset($_SESSION['fiche']['quest8_retrait']) AND $_SESSION['fiche']['quest8_retrait']=="a_faire") ? "affichePersonneload ('quest8_retrait');" : NULL); ?>




}		  
		  	  
// affiche Personne/delai au chargmeent
function affichePersonneload (quest){$("#"+quest).collapse('show');}

$( "#inscriptionForm" ).validate({
  rules: {
    quest1_service_personne: {required: "#quest1_service_id:checked"},
    quest1_service_delai: {required: "#quest1_service_id:checked"},
    quest1_collectivite_personne: {required: "#quest1_collectivite_id:checked"},
    quest1_collectivite_delai: {required: "#quest1_collectivite_id:checked"},
    quest1_reglement_personne: {required: "#quest1_reglement_id:checked"},
    quest1_reglement_delai: {required: "#quest1_reglement_id:checked"},
    quest2_armoire_personne: {required: "#quest2_armoire_id:checked"},
    quest2_armoire_delai: {required: "#quest2_armoire_id:checked"},
    quest2_installations_personne: {required: "#quest2_installations_id:checked"},
    quest2_installations_delai: {required: "#quest2_installations_id:checked"},
    quest2_locaux_personne: {required: "#quest2_locaux_id:checked"},
    quest2_locaux_delai: {required: "#quest2_locaux_id:checked"},
    quest2_services_personne: {required: "#quest2_services_id:checked"},
    quest2_services_delai: {required: "#quest2_services_id:checked"},
    quest2_alcoolisme_personne: {required: "#quest2_alcoolisme_id:checked"},
    quest2_alcoolisme_delai: {required: "#quest2_alcoolisme_id:checked"},
    quest4_interdition_personne: {required: "#quest4_interdition_id:checked"},
    quest4_interdition_delai: {required: "#quest4_interdition_id:checked"},
    quest4_validation_personne: {required: "#quest4_validation_id:checked"},
    quest4_validation_delai: {required: "#quest4_validation_id:checked"},
    quest5_tetanos_personne: {required: "#quest5_tetanos_id:checked"},
    quest5_tetanos_delai: {required: "#quest5_tetanos_id:checked"},
    quest5_autre_personne: {required: "#quest5_autre_id:checked"},
    quest5_autre_delai: {required: "#quest5_autre_id:checked"},
    quest5_visite_personne: {required: "#quest5_visite_id:checked"},
    quest5_visite_delai: {required: "#quest5_visite_id:checked"},
    quest6_formation_personne: {required: "#quest6_formation_id:checked"},
    quest6_formation_delai: {required: "#quest6_formation_id:checked"},
    quest6_demonstration_personne: {required: "#quest6_demonstration_id:checked"},
    quest6_demonstration_delai: {required: "#quest6_demonstration_id:checked"},
    quest6_epi_personne: {required: "#quest6_epi_id:checked"},
    quest6_epi_delai: {required: "#quest6_epi_id:checked"},
    quest7_signalisation_personne: {required: "#quest7_signalisation_id:checked"},
    quest7_signalisation_delai: {required: "#quest7_signalisation_id:checked"},
    quest7_hauteur_personne: {required: "#quest7_hauteur_id:checked"},
    quest7_hauteur_delai: {required: "#quest7_hauteur_id:checked"},
    quest7_pente_personne: {required: "#quest7_pente_id:checked"},
    quest7_pente_delai: {required: "#quest7_pente_id:checked"},
    quest7_chimique_personne: {required: "#quest7_chimique_id:checked"},
    quest7_chimique_delai: {required: "#quest7_chimique_id:checked"},
    quest7_electrique_personne: {required: "#quest7_electrique_id:checked"},
    quest7_electrique_delai: {required: "#quest7_electrique_id:checked"},
    quest7_nacelle_personne: {required: "#quest7_nacelle_id:checked"},
    quest7_nacelle_delai: {required: "#quest7_nacelle_id:checked"},
    quest7_chariot_personne: {required: "#quest7_chariot_id:checked"},
    quest7_chariot_delai: {required: "#quest7_chariot_id:checked"},
    quest7_materiel_personne: {required: "#quest7_materiel_id:checked"},
    quest7_materiel_delai: {required: "#quest7_materiel_id:checked"},
    quest7_incendie_personne: {required: "#quest7_incendie_id:checked"},
    quest7_incendie_delai: {required: "#quest7_incendie_id:checked"},
    quest7_secourisme_personne: {required: "#quest7_secourisme_id:checked"},
    quest7_secourisme_delai: {required: "#quest7_secourisme_id:checked"},
    quest8_retrait_personne: {required: "#quest8_retrait_id:checked"},
    quest8_retrait_delai: {required: "#quest8_retrait_id:checked"},
   
   quest1_reglement: {required: true},
   quest5_tetanos: {required: true}
   
   // quest3_autre_vetement_type: {required: true},
   // quest3_autre_epi_type: {required: function(element) {return $("#quest0_typecontrat").val() > 3;}},
    //quest7_chimique: {required: true}
    
    //gender_male: {required: function(element) {return $("#quest0_typecontrat").val() > 3;}}
       
   },

 
  
highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',// l'erreur est sous forme de span
        errorClass: 'help-block',// on prend le syle de help-block (on peut donc changer la class)
        errorPlacement: function(error, element) {
        	if (element.is("input:radio")) {
            element.parents("div:first").after(error);
        } else{
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }}	
        }
    });


	
</script>


  </body>
</html>