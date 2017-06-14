<?php

/***** Dernière modification : 13/07/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=21;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');



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
     
    
    <script src="../../../plugins/Chart.js-master/dist/Chart.js"></script>



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
            <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Fiche Accueil</li>
          </ol>
        </section>

        <!-- Main content -->
        
        <section class="content">
   
       
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title" style="color:#008ec0">L'agent nouvellement recruté</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <div class="col-md-2">
  		  <div class="form-group">
 <input type="text" class="form-control" name="" id="nomagent" placeholder="Nom de l'agent" required>
 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
   <div class="col-md-3">
  <div class="form-group">
    <input type="text" class="form-control" id="service" placeholder="Service" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  </div>
     <div class="col-md-2">
  <div class="form-group">
  <input class="form-control" type="text" id="matricule" placeholder="Matricule"/>
  </div>
  </div>
  <div class="col-md-5">
  <div class="form-group">
<select class="form-control" id="contrat">
  <optgroup label="Type de contrat">
  <option>Stage découverte collège - 3/5 jours</option>
  <option>Stagiaire reconversion durée - 1/3 semaines</option>
  <option>TIG : Travaux d'Intérêts Généraux</option>
  <option>CAE</option>
  <option>Apprenti</option>
  <option>Recrutement direct (aux, stagiaire, fctionnaire)</option>
  <option>Contractuel</option>
  <option>Mutation interne</option>
  <option>Mutation externe</option></optgroup>
</select>
   </div>
   </div>
  </div><!-- /.box-body -->
</div><!-- /.box -->


 <div class="box box-primary">
  <div class="box-header with-border">

    <h3 style="color:#008ec0" class="box-title">1- Accueil de l'agent <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service" class="collapse">
<blockquote>
	<p>
L’agent se présente dans son service. Il est reçu par le chef de service ou l’agent de maîtrise . Une information lui est faite sur ses missions, l’organisation du service et l’organigramme de la collectivité. Le règlement intérieur lui est remis.<br>
Il doit être présenté dans le plus court délai par rapport à la date de prise de fonction, au magasin de vêtements afin d’effectuer la première dotation en Équipement de protection individuelle.<br>
Évoquer les horaires de travail ainsi que les modalités d'avertissement en cas d’absence (fournir le numéro professionnel du responsable hiérarchique).</p>
</blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <div class="row"><h4>
  <div class="col-md-4">- Présentation du service</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise11" id="1-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise11" id="1-1b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise11" id="1-1c" value="A_faire" data-toggle="collapse" data-target="#afaire1-1">À faire
</label>
  </div>
  <div id="afaire1-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="1-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="1-1e"/>
        		  </div>
</div>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Présentation de la collectivité</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise12" id="1-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise12" id="1-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise12" id="1-2c" value="A_faire" data-toggle="collapse" data-target="#afaire1-2">À faire
</label>
  </div>
    <div id="afaire1-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="1-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="1-2e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Remise Règlement intérieur</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise13" id="1-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise13" id="1-3c" value="A_faire" data-toggle="collapse" data-target="#afaire1-3">À faire
</label>
  </div>
    <div id="afaire1-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="1-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="1-3e"/>
        		  </div>
  </div>
  </h4>
</div>
  </div><!-- /.box-body -->
</div><!-- /.box --> 

<!-- fin question 1 -->

<!-- question 2 -->
 <div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">2- Locaux de personnel <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service2"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service2" class="collapse">
	<blockquote>
	<p>
Dans les espaces indiqués ci-dessous, l’interdiction de fumer doit être impérativement appliquée.<br /> 
a) Vestiaires :
<p class="retrait">- Le chef de service met à disposition de l’agent une armoire individuelle pouvant être fermée à clé (cadenas fournis par l’agent recruté). Cette armoire doit être vidée et nettoyée au moins deux fois par an par l’agent.<br /> 
</p>
b) Sanitaires :<br /> 
<p class="retrait">- Les installations sanitaires (toilettes douches) mises à disposition des agents doivent être maintenues dans un état de propreté après utilisation, impérativement.</p>
c) Espaces repas/repos :<br /> 
<p class="retrait">
- Tout agent peut prendre son repas dans l’espace prévu à cet effet. Les réfrigérateurs, micro-ondes sont à la disposition des agents. Il doit être rappeler qu'il est interdit de manger sur son lieu de travail (bureau, atelier, véhicule de service...)<br /> 
- Il est interdit d’y consommer de l’alcool pendant ou en dehors des heures de travail.</p>
	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
<div class="row"><h4>
  <div class="col-md-4">- Armoire/Vestiaire</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise21" id="2-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise21" id="2-1b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise21" id="2-1c" value="A_faire" data-toggle="collapse" data-target="#afaire2-1">À faire
</label>
  </div>
      <div id="afaire2-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="2-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="1-1e"/>
        		  </div>
  </div>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite installations douches et sanitaires</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise22" id="2-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise22" id="2-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise22" id="2-2c" value="A_faire" data-toggle="collapse" data-target="#afaire2-2">À faire
</label>
  </div>
        <div id="afaire2-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="2-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="2-2e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite locaux du personnel</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise23" id="2-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise23" id="2-3b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise23" id="2-3c" value="A_faire" data-toggle="collapse" data-target="#afaire2-3">À faire
</label>
  </div>
        <div id="afaire2-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="2-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="2-3e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite des services</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise24" id="2-4a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise24" id="2-4b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise24" id="2-4c" value="A_faire" data-toggle="collapse" data-target="#afaire2-4">À faire
</label>
  </div>
        <div id="afaire2-4" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="2-4d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="2-4e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Alcoolisme/Tabagisme</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise25" id="2-5a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise25" id="2-5b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise25" id="2-5c" value="A_faire" data-toggle="collapse" data-target="#afaire2-5">À faire
</label>
  </div>
        <div id="afaire2-5" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="2-5d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="2-5e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  

<!-- question 2 -->
  

<!-- question 3 -->


 <div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">3- Dotations vestimentaires <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service3"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service3" class="collapse">
	<blockquote>
	<p>
a) E.P.I (Equipements de Protection Individuelle)<br>
<p class="retrait">Une dotation de base est donnée en fonction du service d’affectation de l’agent. Le changement des équipements se fait à usure sur présentation de la dotation précédente auprès du magasinier des vêtements de travail.<br>
Face à de nouvelles fonctions, l’agent devra formulé sa demande auprès du magasinier.</p>
<br>
b) Vêtement de travail<br>
<p class="retrait">A sa prise de fonction, l’agent se rends au magasin afin de récupérer sa dotation initiale (vêtement de travail, parka).<br>
Le remplacement des vêtements usés est comme les EPI sur un principe à usure avec un minimum de 3 ans pour la parka.<br>
L’agent a pour obligation de les porter afin d’éviter toute détérioration de ses vêtements personnels pendant toute la durée du temps de travail. Il est rappelé que lorsque le lavage des vêtements est mis à leur disposition, celui-ci est <b>obligatoire</b>.</p>
	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
<div class="row"><h4>
<div class="col-md-12"><b>E.P.I (Equipements de Protection Individuelle)</b></div>
</div>
<div class="row"><h4> 
 <div class="col-md-4">- Chaussures</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise31" id="3-1b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise31" id="3-1c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Gants</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise32" id="3-2b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise32" id="3-2c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Lunettes</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise33" id="3-3b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise33" id="3-3c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Casque Anti-bruit</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise34" id="3-4b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise34" id="3-4c"  value="Non_concerne">Non Concerné
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Gilet Fluorescent</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise35" id="3-5b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise35" id="3-5c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autre équipement" name="Autre equipement" id="3-6bonus"></div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise36" id="3-6b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise36" id="3-6c" value="Non_concerne">Non Concerné
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
  <input type="radio" name="realise37" id="3-7b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise37" id="3-7c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Parka</div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise38" id="3-8b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise38" id="3-8c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autre vêtements" name="Autre vetement" id="3-9bonus"></div>
  <div class="col-md-4">
<label class="radio-inline">
  <input type="radio" name="realise39" id="3-9b" value="A_doter">À doter
</label>
<label class="radio-inline">
  <input type="radio" name="realise39" id="3-9c" value="Non_concerne">Non Concerné
</label>
  </div>
  </h4>
</div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  

<!-- fin container q3 -->


<!-- question 4 -->

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">4- Permis <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service4"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service4" class="collapse">
	<blockquote>
	<p>
Le nouvel agent n’est autorisé à conduire que les véhicules pour lesquels il possède le permis.<br><br>
Le permis doit être demandé lors de l'accueil et une photocopie conservée avec la feuille d'accueil imprimée. Le nombre de point ne regarde en rien la collectivité, c'est de la responsabilité du détenteur de prévenir son employeur de la perte de ce dernier.<br><br>
Il lui est interdit, à sa prise de fonction, d’utiliser :<br>
<p class="retrait">- les chariots de manutention<br>
- les appareils de levage<br>
- les matériels de travaux publics</p>
La collectivité se chargera d’assurer, si nécessaire à sa fonction, les formations adaptées.<br>
<br>Dans tous les cas, l’agent devra attendre l’autorisation écrite de Monsieur le Maire avant de conduire les trois types de véhicules cités ci-dessus.<br>
	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
<div class="row"><h4>
  <div class="col-md-4">- Permis de l'agent</div>
  <div class="col-md-4">
<label class="checkbox-inline">
  <input type="checkbox" id="realise41" value="A"> A
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="realise41" value="B"> B
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="realise41" value="C"> C
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="realise41" value="D"> D
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="realise41" value="E"> E
</label>
  </h4>
 </div>
  <div class="row"><h4>
  <div class="col-md-4">- Interdiction</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise42" id="4-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise42" id="4-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise42" id="4-2c" value="A_faire" data-toggle="collapse" data-target="#afaire4-2">À faire
</label>
  </div>
    <div id="afaire4-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="4-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="4-2e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-2">- Validation à faire</div>
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Type CACES" name="Validation à faire" id="4-3bonus"></div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise43" id="4-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise43" id="4-3b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise43" id="4-3c" value="A_faire" data-toggle="collapse" data-target="#afaire4-3">À faire
</label>
  </div>
      <div id="afaire4-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="4-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="4-3e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  

  </div><!-- /.box-body -->
</div><!-- /.box -->  
	
<!-- fin container q4 -->

<!-- question 5 -->

<div class="box box-primary">
  <div class="box-header with-border">

    <h3 style="color:#008ec0" class="box-title">5- Vaccinations <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service5"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service5" class="collapse">
	<blockquote>
	<p>
La question de la vaccination du Tétanos doit être poser. Ce vaccin est <b>le seul vaccin obligatoire</b> et si l'agent n'est pas à jour lors de l'entretien, il faut lui demander de vous ramener un certificat de son médecin traitant après vaccination. Laisser au maximum un délai de 5 jours.
<br><br>
<b>Seul le médecin du travail peut consulter le carnet de vaccination des agents.</b>
<br><br>
Une vérification précise pour les types de vaccinations, appropriés à chaque métier, sera  faite par le médecin du travail.
<br><br>
La visite médicale est obligatoire et l’agent doit se rendre à toute convocation sur le temps de travail.
<br><br>
Tout problème particulier de santé doit être signalé au Médecin du Travail.
<br><br>
Le cas échéant en fonction de l’affectation, l’agent devrA_faire des analyses ou examens demandés par le médecin de travail et lui transmettre les résultats.
	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
<div class="row"><h4>
  <div class="col-md-4">- Tétanos</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise51" id="5-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise51" id="5-1c" value="A_faire" data-toggle="collapse" data-target="#afaire5-1">À faire
</label>
  </div>
        <div id="afaire5-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="5-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="5-1e"/>
        		  </div>
  </div>
  </div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-1">- Autres</div>
  <div class="col-md-3"><input type="text" class="form-control input-sm" placeholder="Autres vaccins" name="Autres vaccins" id="5-2bonus"></div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise52" id="5-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise52" id="5-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise52" id="5-2c" value="A_faire" data-toggle="collapse" data-target="#afaire5-2">À faire
</label>
  </div>
        <div id="afaire5-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="5-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="5-2e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Visite Médecin du travail</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise53" id="5-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise53" id="5-3b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise53" id="5-3c" value="A_faire" data-toggle="collapse" data-target="#afaire5-3">À faire
</label>
  </div>
        <div id="afaire5-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="5-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="5-3e"/>
        		  </div>
  </div>
  </div>
  </h4>
</div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  

<!-- fin container q5 -->


<!-- question 6 -->

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">6- Utilisation Materiel <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service6"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service6" class="collapse">
	<blockquote>
	<p>
a) Conformité<br>
<p class="retrait">Tout matériel doit répondre aux normes en vigueur. Le nouvel agent ne doit pas se servir d’un outil (même connu dans le monde personnel) sans que l’agent de maîtrise ne lui en ai présenté l’utilisation et les sécurités mise en place. En effet, notre matériel est professionnel et normalement plus perfectionné que du matériel « Grand public ».<br>
Toute détérioration observée doit être signalée à l’agent de maîtrise et celui-ci doit arrêter le matériel jusqu’à réparation. Aucune sécurité de l’outil ne doit être supprimée ou shuntée.<br>
L’usage des tronçonneuses est interdite pendant la 1er année car il faut une dotation spécifique.</p>
b) Port des Équipements de Protection Individuelle.<br>
<p class="retrait">Tous les équipements de protection individuelle  étant fournis par l'employeur, l'obligation est faite à l'agent de les porter. En cas de non respect, l'agent pourrait se voir refuser l'accès au poste de travail ou au chantier. Par la suite, des sanctions peuvent être aussi envisagées.
<br><br>
Lors de l’utilisation de machines outils , le port des Equipements de Protection Individuelle est obligatoire afin d’éviter tout accident. Ces dotations font parties des dotations individuelles, ou sont rattachées à l’outil. Dans tous les cas, tout EPI détérioré doit être changé immédiatement.	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
  <div class="row"><h4>
  <div class="col-md-4">- Formation à l'utilisation</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise61" id="6-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise61" id="6-1b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise61" id="6-1c" value="A_faire" data-toggle="collapse" data-target="#afaire6-1">À faire
</label>
  </div>
          <div id="afaire6-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="6-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="6-1e"/>
        		  </div>
  </div></div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Démonstration</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise62" id="6-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise62" id="6-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise62" id="6-2c" value="A_faire" data-toggle="collapse" data-target="#afaire6-2">À faire
</label>
  </div>
          <div id="afaire6-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="6-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="6-2e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Port des EPI</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise63" id="6-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise63" id="6-3b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise63" id="6-3c" value="A_faire" data-toggle="collapse" data-target="#afaire6-3">À faire
</label>
  </div>
          <div id="afaire6-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="6-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="6-3e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  
	
<!-- fin container q6 -->



<!-- question 7 -->

 <div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">7- Formations spécifiques <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service7"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service7" class="collapse">
	<blockquote>
	<p>
En fonction du service d’affectation, le nouvel agent devra suivre une ou plusieurs des formations spécifiques suivantes :<br>
<p class="retrait">1- signalisation  de chantier<br>
2- travail en hauteur<br>
3- travail en pente<br>
4- formation produits chimiques<br>
5- habilitation électrique<br>
6- habilitation nacelle<br>
7- habilitation chariot de manutention<br>
8- habilitation matériels de travaux publics<br>
9- formation incendie<br>
10- formation secourisme (appel aux volontaires dans la limite de 25% des effectifs du service formés)<br>
etc…</p>
Concernant <b>le secourisme du travail</b>, si le nouvel agent est en possession d'une carte à jour de ses recyclages, il faudra en faire une photocopie et en faire part au service Formation afin que cet agent puisse être inscrire dans les délais aux sessions de recyclage.<br>
Concernant la <b>possession de CACES</b> de quelque catégorie que ce soit, appliquer la même procédure que le secourisme.
<br><br>
Pour suivre ces formations, le chef de service devrA_faire une demande d’inscription à Monsieur le Maire aux stages intéressants pour l’agent dans l’exercice de ces fonctions.<br>
Dans l’attente de ces formations, l’agent ne pourra prendre aucune initiative dans chacun de ces domaines et aucun EPI ne leur sera donner. Intervention <b>INTERDITE</b>.<br>
Le nouvel agent doit définir avec son agent de maitrise ses besoins en fonction des missions qui lui sont confiées et le recensement est fait au moment de l’entretien.</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
  <div class="row"><h4>
  <div class="col-md-4">- Signalisation de chantier</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise71" id="7-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise71" id="7-1b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise71" id="7-1c" value="A_faire" data-toggle="collapse" data-target="#afaire7-1">À faire
</label>
  </div>
            <div id="afaire7-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-1e"/>
        		  </div>
  </div></div>
  </h4>
 </div>
   <div class="row"><h4>
  <div class="col-md-4">- Travail en hauteur</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise72" id="7-2a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise72" id="7-2b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise72" id="7-2c" value="A_faire" data-toggle="collapse" data-target="#afaire7-2">À faire
</label>
  </div>
              <div id="afaire7-2" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-2d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-2e"/>
        		  </div>
  </div></diV
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Travail en pente</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise73" id="7-3a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise73" id="7-3b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise73" id="7-3c" value="A_faire" data-toggle="collapse" data-target="#afaire7-3">À faire
</label>
  </div>
              <div id="afaire7-3" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-3d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-3e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formations risques chimiques</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise74" id="7-4a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise74" id="7-4b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise74" id="7-4c" value="A_faire" data-toggle="collapse" data-target="#afaire7-4">À faire
</label>
  </div>
              <div id="afaire7-4" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-4d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-4e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitations électriques</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise75" id="7-5a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise75" id="7-5b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise75" id="7-5c" value="A_faire" data-toggle="collapse" data-target="#afaire7-5">À faire
</label>
  </div>
              <div id="afaire7-5" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-5d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-5e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation nacelle</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise76" id="7-6a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise76" id="7-6b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise76" id="7-6c" value="A_faire" data-toggle="collapse" data-target="#afaire7-6">À faire
</label>
  </div>
              <div id="afaire7-6" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-6d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-6e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation chariots de manutention</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise77" id="7-7a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise77" id="7-7b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise77" id="7-7c" value="A_faire" data-toggle="collapse" data-target="#afaire7-7">À faire
</label>
  </div>
              <div id="afaire7-7" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-7d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-7e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Habilitation matériels de travaux publics</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise78" id="7-8a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise78" id="7-8b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise78" id="7-8c" value="A_faire" data-toggle="collapse" data-target="#afaire7-8">À faire
</label>
  </div>
              <div id="afaire7-8" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-8d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-8e"/>
        		  </div></div>
  </div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation incendie</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise79" id="7-9a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise79" id="7-9b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise79" id="7-9c" value="A_faire" data-toggle="collapse" data-target="#afaire7-9">À faire
</label>
  </div>
              <div id="afaire7-9" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-9d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-9e"/>
        		  </div>
  </div></div>
  </h4>
</div>
  <div class="row"><h4>
  <div class="col-md-4">- Formation secourisme</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise710" id="7-10a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise710" id="7-10b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise710" id="7-10c" value="A_faire" data-toggle="collapse" data-target="#afaire7-10">À faire
</label>
  </div>
              <div id="afaire7-10" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="7-10d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="7-10e"/>
        		  </div>
				  </div>
  </div>
  </h4>
  </div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  

  <!-- fin question 7 -->	
	

<!-- question 8 -->

 <div class="box box-primary">
  <div class="box-header with-border">
    <h3 style="color:#008ec0" class="box-title">8- Registre de Santé et Sécurité au Travail <a href="javascript:void(0);" data-toggle="collapse" data-target="#detail-service8"><small><span class="glyphicon glyphicon-resize-vertical" style="color:#ed7e4a"><span class="glyphicon glyphicon-info-sign" style="color:#c8c8c8"></span></small></h3></a>
<div id="detail-service8" class="collapse">
	<blockquote>
	<p>
Dans chaque service un registre est mis à la disposition des agents afin d’y consigner les remarques concernant l’hygiène et la sécurité observées sur les lieux de travail. Il est détenu par l'assistant de prévention.<br><br>
<u>Notion de droit de retrait</u> :<br> Quand l’agent considère qu’il se trouve en situation de Danger pouvant mettre en péril sa santé, il peut se retirer de cette situation. Toutefois, ce retrait doit être justifié et ne doit pas mettre les collègues ou le public face à un danger grave.<br>
Tout droit de retrait exercé doit être inscrit au le registre des Dangers Graves et Imminents situé dans les locaux du service Qualité de Vie au Travail, Villa Social, Centre Technique Municipal, rue Roger Salengro. Une procédure spécifique alertera le Comité d'Hygiène, de Sécurité et de Conditions de Travail.
	</p></blockquote>
</div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
<div class="row"><h4>
  <div class="col-md-4">- Droit de retrait</div>
  <div class="col-md-4">
  <label class="radio-inline">
  <input type="radio" name="realise81" id="8-1a" value="Realise">Réalisé
</label>
<label class="radio-inline">
  <input type="radio" name="realise81" id="8-1b" value="Non_concerne">Non Concerné
</label>
<label class="radio-inline">
  <input type="radio" name="realise81" id="8-1c" value="A_faire" data-toggle="collapse" data-target="#afaire8-1">À faire
</label>
  </div>
              <div id="afaire8-1" class="collapse">
  <div class="col-md-2"><input type="text" class="form-control input-sm" placeholder="Personne chargée de le faire" name="personne en charge" id="8-1d"></div>
  <div class="col-md-2">
        		  <div class="controls">
        		      <input class="datepicker form-control input-sm" placeholder="Délai" type="text" name="delai" id="8-1e"/>
        		  </div>
  </div></div>
  </h4>
 </div>
  </div><!-- /.box-body -->
</div><!-- /.box -->  

<!-- fin container q8 -->
<div style="text-align:center;padding-top:30px"><button type="submit" class="btn btn-default">Confirmer</button></div>





   
      

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