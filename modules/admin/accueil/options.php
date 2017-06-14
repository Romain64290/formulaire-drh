<?php

/***** Dernière modification : 17/08/2016, Romain TALDU	*****/

require(__DIR__ .'/../../../include/verif_session.php');
$menu=2;
$ss_menu=23;
require(__DIR__ .'/../../../include/config.inc.php');
require(__DIR__ .'/../../../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$accueil = new accueil($connect);

// Affichage des options
$afficheOptions=$accueil->afficheOptions(); 
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
    
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
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
           Options - Accueil agents
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard/index.php"><i class="fa fa-users"></i> Accueil</a></li>
            <li class="active">Options - Accueil agents</li>
          </ol>
        </section>

      



  	<!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mise à jour des informations </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form name="inscriptionForm"  id="inscriptionForm" role="form" data-toggle="validator" action="maj_options.php" method="post" data-disable="false">
             	
              <div class="box-body">
               	
              <div class="container2" style="background-color:#efefef;">  	
               	<br>
               	
          <div class="form-group has-feedback">
          	 <label for="email_magasinier">Email magasinier :</label>
 	 <div class="input-group">
    <span class="input-group-addon">
    <span class="glyphicon  glyphicon-envelope"></span>
 	 </span>

     <input type="email" class="form-control"  value="<?php echo $afficheOptions['email_magasinier']; ?>" placeholder="Email magasinier" required name="email_magasinier" id="email_magasinier"data-error="Veuillez saisir une adresse email pour le magasinier"> </div>  
     <div class="help-block with-errors"></div>
  
     </div>  
       	<br>
       <div class="form-group has-feedback">
          	 <label for="email_magasinier">Email médecine du travail :</label>
 	 <div class="input-group">
    <span class="input-group-addon">
    <span class="glyphicon  glyphicon-envelope"></span>
 	 </span>

     <input type="email" class="form-control"  value="<?php echo $afficheOptions['email_medecine']; ?>" placeholder="Email médecine du travail" required name="email_medecine" id="email_medecine"data-error="Veuillez saisir une adresse email pour la médecine du travail"> </div>  
     <div class="help-block with-errors"></div>
  
     </div>  
        	<br>
     
     <div class="form-group has-feedback">
    <label for="quest1">Question 1 :</label>
      <textarea required class="textarea" placeholder="Question 1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest1" name="quest1"><?php echo $afficheOptions['quest1']; ?></textarea>
       </div>    
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 2 :</label>
      <textarea class="textarea" placeholder="Question 2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest2" name="quest2" ><?php echo $afficheOptions['quest2']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 3 :</label>
      <textarea class="textarea" placeholder="Question 3" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest3" name="quest3" ><?php echo $afficheOptions['quest3']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 4 :</label>
      <textarea class="textarea" placeholder="Question 4" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest4" name="quest4" ><?php echo $afficheOptions['quest4']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 5 :</label>
      <textarea class="textarea" placeholder="Question 5" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest5" name="quest5" ><?php echo $afficheOptions['quest5']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 6 :</label>
      <textarea class="textarea" placeholder="Question 6" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest6" name="quest6" ><?php echo $afficheOptions['quest6']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 7 :</label>
      <textarea class="textarea" placeholder="Question 7" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest7" name="quest7" ><?php echo $afficheOptions['quest7']; ?></textarea>
       </div> 
         	<br>
        <div class="form-group has-feedback">
    <label for="quest1">Question 8 :</label>
      <textarea class="textarea" placeholder="Question 8" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="quest8" name="quest8" ><?php echo $afficheOptions['quest8']; ?></textarea>
       </div> 
       
         
               </div> </div> 
              
              <!-- /.box-body -->
              <div class="box-footer">
              
                <button type="submit" class="btn btn-primary" ><i class="fa fa-floppy-o"></i> &nbsp; Mettre à jour </button>
              </div>
              
             
              
            </form>
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
    
      <script src="../../../include/js/validator.js"></script>
    
   <!-- Bootstrap WYSIHTML5 -->
    <script src="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <script>
      $(function () {
       
  $(".textarea").wysihtml5({
	toolbar:{
      'font-styles':false,
      'color': false,
      'emphasis':{
        'small':true
      },
      'blockquote':false,
      'lists':true,
      'html':true,
      'link':false,
      'image':false,
      'smallmodals':false  
   },
    useLineBreaks: true
});
        
        
        
      });
      
    </script>


</body>
</html>