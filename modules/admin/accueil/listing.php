<?php

/***** Dernière modification : 18/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=22;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);



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
     <!-- DataTables -->
    <link rel="stylesheet" href="../../../plugins/datatables/dataTables.bootstrap.css">

   
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
           Liste des fiches "Accueil agent"
            
          </h1>
          <ol class="breadcrumb">
           <li><a href="../dashboard/index.php"><i class="fa fa-users"></i> Accueil</a></li>
            <li class="active"> Liste des fiches "Accueil agent"</li>
          </ol>
        </section>

      



  	<!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Liste des fiches "Accueil agent" </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
             	
              <div class="box-body">
               	
             
              	
   <!-- Affichage de la liste des fiches accueil  --> 
  <table id="liste_admin" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      	<th>#</th>
                        <th>Nom de l'agent</th>
                        <th>Service</th>
                        <th>N° dossier</th>
                        <th>AdP</th>
                        <th>Date validation</th>
                         <th>Voir fiche</th>
                      </tr>
                    </thead>
                    <tbody>
              	
              	 <?php 
              	 
 $afficheFiche=$accueil->afficheFicheDRH();
				
$compteur=1;		 
				 
foreach($afficheFiche as $key){
	
			$id_fiche=$key["id_fiche"];
			$quest0_nom=htmlspecialchars($key["quest0_nom"]);
			$quest0_service=htmlspecialchars($key["quest0_service"]);
			$date_inscription=$key[3];
			$nom_membre=htmlspecialchars($key["nom_membre"]);
			$prenom_membre=htmlspecialchars($key["prenom_membre"]);
					
			$date_inscription=explode(" ",$date_inscription);
			$date_inscription=explode("-",$date_inscription[0]);
			$date=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];
			
		// Complete le numéro de fiche avec des O devant
			$id_fiche0=str_pad($id_fiche,  4, "0",STR_PAD_LEFT);
			
			$numero_dossier=$date_inscription[0]."-".$id_fiche0;	
		
			echo "<tr>
                        <td>$compteur</td>
                        <td>$quest0_nom</td>
                        <td>$quest0_service</td>
                        <td>$numero_dossier</td>
                        <td>$prenom_membre $nom_membre</td>
                        <td>$date</td>
                        <td><a href=\"liste_pdf.php?id_fiche=".$id_fiche."\" target=\"_blank\"><span class=\"label label-primary\"><i class=\"fa fa-download\"></i> &nbsp; PDF</span></a></td>
             
                      </tr>";
		
	$compteur++;    
}
				 
				  ?>
              	 	
              	   </tbody>
                   
                  </table>	
              	 	
              	 	
                </div> 
           
          </div>

            </div><!-- /.col -->
          </div><!-- /.row -->
      
          
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
     <!-- Datatable -->
     <script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {

    
        $('#liste_admin').DataTable({
         "stateSave": true,
         "stateDuration": 60 * 3,
          "ordering": false,
           "language": {
            "lengthMenu": "_MENU_  enregistrements par page",
            "zeroRecords": "Désolé, aucun résultat trouvé.",
            "info": "Affichage page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun enregistrement disponible",
            "infoFiltered": "(filtered from _MAX_ total records)",
             "search": "Recherche",
             "paginate": {
       			 "first":      "First",
       			 "last":       "Last",
        		 "next":       "Suivant",
        		 "previous":   "Précédent"
  				  },
         
        }
       
       
      });
     
       
        
      });
       </script>

</body>
</html>