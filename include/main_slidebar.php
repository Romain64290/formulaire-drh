 <?php

/***** Dernière modification : 17/08/2016, Romain TALDU	*****/

require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$includes = new includes($connect);

if (!isset($ss_menu)){$ss_menu="";}


 ?>    
  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../../dist/img/avatar7.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['prenom_membre'];?>  <?php echo $_SESSION['nom_membre']; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU DE NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
          
             <li <?php if($menu==1){echo "class=\"active\"";}?>>
             <a href="../dashboard/index.php"><i class="fa fa-dashboard active"></i> <span>Tableau de bord</span></a>
            </li>
            
              <?php if($_SESSION['id_typemembre']==2){ ?>
              <li <?php if($menu==2){echo "class=\"active\"";}?>>
            <a href="../accueil/index.php"><i class="fa fa-user"></i> <span>Accueil agent</span></a>
            </li>
             <?php } ?>
            
             
              <?php if($_SESSION['id_typemembre']==4 OR $_SESSION['id_typemembre']==3){ ?>
            
            <li class="treeview <?php if($menu==2){echo "active";}?>">
          <a href="#">
            <i class="fa fa-user"></i> <span>Accueil agent</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul style="display: <?php if($menu==2){echo "yes";}else{echo "no";} ?>;" class="treeview-menu menu-open">
          	<li <?php if($ss_menu==21){echo "class=\"active\"";}?>><a href="../accueil/index.php"><i class="fa fa-circle-o"></i> Créer une fiche</a></li>
          	<li <?php if($ss_menu==22){echo "class=\"active\"";}?>><a href="../accueil/listing.php"><i class="fa fa-circle-o"></i> Liste des fiches</a></li>
            <li <?php if($ss_menu==23){echo "class=\"active\"";}?>><a href="../accueil/options.php"><i class="fa fa-circle-o"></i> Options</a></li>
      
           
          </ul>
        </li>
           <?php } ?>
             
          
            <?php if($_SESSION['id_typemembre']==4){ ?>
             
              <li <?php if($menu==5){echo "class=\"active\"";}?>>
            <a href="../administrateurs/index.php"><i class="fa fa-users"></i> <span>Gestion des admin</span>
            	<?php echo $includes->adminAttente(); ?>
            	</a>
            </li>
            
            <?php } ?>
            
            <?php if($_SESSION['id_typemembre']==4 OR $_SESSION['id_typemembre']==3){ ?>
             
              <li <?php if($menu==6){echo "class=\"active\"";}?>>
            <a href="../administrateurs/adp.php"><i class="fa fa-users"></i> <span>Gestion des ADP</span>
            	<?php echo $includes->ADPAttente(); ?>
            	</a>
            </li>
            
            <?php } ?>
            
            
         
           
             
     
            
            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>