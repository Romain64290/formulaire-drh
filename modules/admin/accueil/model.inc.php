<?php

/***** Dernière modification : 07/06/2017, Romain TALDU	*****/

class accueil {

    private $con;

    public function __construct(connection $con) {
        $this->con = $con->con;
    }
	
	
/***********************************************************************
 * Création d'une fiche accueil
 **************************************************************************/
  
 function creationFiche(
  $id_membre,
  $quest0_nom,$quest0_service,$quest0_matricule,$quest0_typecontrat,$quest1_service,$quest1_service_personne,$quest1_service_delai,$quest1_collectivite,
  $quest1_collectivite_personne,$quest1_collectivite_delai,$quest1_reglement,$quest1_reglement_personne,$quest1_reglement_delai,$quest2_armoire,$quest2_armoire_personne,$quest2_armoire_delai, 
  $quest2_installations,$quest2_installations_personne,$quest2_installations_delai,$quest2_locaux,$quest2_locaux_personne,$quest2_locaux_delai,$quest2_services,$quest2_services_personne,
  $quest2_services_delai,$quest2_alcoolisme,$quest2_alcoolisme_personne,$quest2_alcoolisme_delai,$quest3_chaussures,$quest3_gants,$quest3_lunettes,$quest3_casque,$quest3_gilet,$quest3_autre,
  $quest3_autre_epi_type,$quest3_pantalon,$quest3_parka,$quest3_autre_vetemement,$quest3_autre_vetement_type,$quest4_permis,$quest4_interdition,$quest4_interdition_personne,$quest4_interdition_delai, 
  $quest4_validation,$quest4_validation_type,$quest4_validation_personne,$quest4_validation_delai,$quest5_tetanos,$quest5_tetanos_personne,$quest5_tetanos_delai,$quest5_autre,$quest5_autre_type,
  $quest5_autre_personne,$quest5_autre_delai,$quest5_visite,$quest5_visite_personne,$quest5_visite_delai,$quest6_formation,$quest6_formation_personne,$quest6_formation_delai,$quest6_demonstration,
  $quest6_demonstration_personne,$quest6_demonstration_delai,$quest6_epi,$quest6_epi_personne,$quest6_epi_delai,$quest7_signalisation,$quest7_signalisation_personne,$quest7_signalisation_delai,
  $quest7_hauteur,$quest7_hauteur_personne,$quest7_hauteur_delai,$quest7_pente,$quest7_pente_personne,$quest7_pente_delai,$quest7_chimique,$quest7_chimique_personne,$quest7_chimique_delai, 
  $quest7_electrique,$quest7_electrique_personne,$quest7_electrique_delai,$quest7_nacelle,$quest7_nacelle_personne,$quest7_nacelle_delai,$quest7_chariot,$quest7_chariot_personne,$quest7_chariot_delai,
  $quest7_materiel,$quest7_materiel_personne,$quest7_materiel_delai,$quest7_incendie,$quest7_incendie_personne,$quest7_incendie_delai,$quest7_secourisme,$quest7_secourisme_personne,
  $quest7_secourisme_delai,$quest8_retrait,$quest8_retrait_personne,$quest8_retrait_delai 
  
 )
  {
 	

//converti l'Array permis
$permis_tous="";
 $permis = isset($_SESSION['fiche']['quest4_permis']) ? $_SESSION['fiche']['quest4_permis'] : NULL;
if($permis!=""){
foreach($permis as $element) {$permis_tous.=$element;}
}


// Conversion des dates en datetime
if($_SESSION['fiche']['quest1_service_delai']!="") {$quest1_service_delai=explode("/", $_SESSION['fiche']['quest1_service_delai']);$quest1_service_delai="$quest1_service_delai[2]-$quest1_service_delai[1]-$quest1_service_delai[0]";}
if($_SESSION['fiche']['quest1_collectivite_delai']!="") {$quest1_collectivite_delai=explode("/", $_SESSION['fiche']['quest1_collectivite_delai']);$quest1_collectivite_delai="$quest1_collectivite_delai[2]-$quest1_collectivite_delai[1]-$quest1_collectivite_delai[0]";}
if($_SESSION['fiche']['quest1_reglement_delai']!="") {$quest1_reglement_delai=explode("/", $_SESSION['fiche']['quest1_reglement_delai']);$quest1_reglement_delai="$quest1_reglement_delai[2]-$quest1_reglement_delai[1]-$quest1_reglement_delai[0]";}
if($_SESSION['fiche']['quest2_armoire_delai']!="") {$quest2_armoire_delai=explode("/", $_SESSION['fiche']['quest2_armoire_delai']);$quest2_armoire_delai="$quest2_armoire_delai[2]-$quest2_armoire_delai[1]-$quest2_armoire_delai[0]";}
if($_SESSION['fiche']['quest2_installations_delai']!="") {$quest2_installations_delai=explode("/", $_SESSION['fiche']['quest2_installations_delai']);$quest2_installations_delai="$quest2_installations_delai[2]-$quest2_installations_delai[1]-$quest2_installations_delai[0]";}
if($_SESSION['fiche']['quest2_locaux_delai']!="") {$quest2_locaux_delai=explode("/", $_SESSION['fiche']['quest2_locaux_delai']);$quest2_locaux_delai="$quest2_locaux_delai[2]-$quest2_locaux_delai[1]-$quest2_locaux_delai[0]";}
if($_SESSION['fiche']['quest2_services_delai']!="") {$quest2_services_delai=explode("/", $_SESSION['fiche']['quest2_services_delai']);$quest2_services_delai="$quest2_services_delai[2]-$quest2_services_delai[1]-$quest2_services_delai[0]";}
if($_SESSION['fiche']['quest2_alcoolisme_delai']!="") {$quest2_alcoolisme_delai=explode("/", $_SESSION['fiche']['quest2_alcoolisme_delai']);$quest2_alcoolisme_delai="$quest2_alcoolisme_delai[2]-$quest2_alcoolisme_delai[1]-$quest2_alcoolisme_delai[0]";}
if($_SESSION['fiche']['quest4_interdition_delai']!="") {$quest4_interdition_delai=explode("/", $_SESSION['fiche']['quest4_interdition_delai']);$quest4_interdition_delai="$quest4_interdition_delai[2]-$quest4_interdition_delai[1]-$quest4_interdition_delai[0]";}
if($_SESSION['fiche']['quest4_validation_delai']!="") {$quest4_validation_delai=explode("/", $_SESSION['fiche']['quest4_validation_delai']);$quest4_validation_delai="$quest4_validation_delai[2]-$quest4_validation_delai[1]-$quest4_validation_delai[0]";}
if($_SESSION['fiche']['quest5_tetanos_delai']!="") {$quest5_tetanos_delai=explode("/", $_SESSION['fiche']['quest5_tetanos_delai']);$quest5_tetanos_delai="$quest5_tetanos_delai[2]-$quest5_tetanos_delai[1]-$quest5_tetanos_delai[0]";}
if($_SESSION['fiche']['quest5_autre_delai']!="") {$quest5_autre_delai=explode("/", $_SESSION['fiche']['quest5_autre_delai']);$quest5_autre_delai="$quest5_autre_delai[2]-$quest5_autre_delai[1]-$quest5_autre_delai[0]";}
if($_SESSION['fiche']['quest5_visite_delai']!="") {$quest5_visite_delai=explode("/", $_SESSION['fiche']['quest5_visite_delai']);$quest5_visite_delai="$quest5_visite_delai[2]-$quest5_visite_delai[1]-$quest5_visite_delai[0]";}
if($_SESSION['fiche']['quest6_formation_delai']!="") {$quest6_formation_delai=explode("/", $_SESSION['fiche']['quest6_formation_delai']);$quest6_formation_delai="$quest6_formation_delai[2]-$quest6_formation_delai[1]-$quest6_formation_delai[0]";}
if($_SESSION['fiche']['quest6_demonstration_delai']!="") {$quest6_demonstration_delai=explode("/", $_SESSION['fiche']['quest6_demonstration_delai']);$quest6_demonstration_delai="$quest6_demonstration_delai[2]-$quest6_demonstration_delai[1]-$quest6_demonstration_delai[0]";}
if($_SESSION['fiche']['quest6_epi_delai']!="") {$quest6_epi_delai=explode("/", $_SESSION['fiche']['quest6_epi_delai']);$quest6_epi_delai="$quest6_epi_delai[2]-$quest6_epi_delai[1]-$quest6_epi_delai[0]";}
if($_SESSION['fiche']['quest7_signalisation_delai']!="") {$quest7_signalisation_delai=explode("/", $_SESSION['fiche']['quest7_signalisation_delai']);$quest7_signalisation_delai="$quest7_signalisation_delai[2]-$quest7_signalisation_delai[1]-$quest7_signalisation_delai[0]";}
if($_SESSION['fiche']['quest7_hauteur_delai']!="") {$quest7_hauteur_delai=explode("/", $_SESSION['fiche']['quest7_hauteur_delai']);$quest7_hauteur_delai="$quest7_hauteur_delai[2]-$quest7_hauteur_delai[1]-$quest7_hauteur_delai[0]";}
if($_SESSION['fiche']['quest7_pente_delai']!="") {$quest7_pente_delai=explode("/", $_SESSION['fiche']['quest7_pente_delai']);$quest7_pente_delai="$quest7_pente_delai[2]-$quest7_pente_delai[1]-$quest7_pente_delai[0]";}
if($_SESSION['fiche']['quest7_chimique_delai']!="") {$quest7_chimique_delai=explode("/", $_SESSION['fiche']['quest7_chimique_delai']);$quest7_chimique_delai="$quest7_chimique_delai[2]-$quest7_chimique_delai[1]-$quest7_chimique_delai[0]";}
if($_SESSION['fiche']['quest7_electrique_delai']!="") {$quest7_electrique_delai=explode("/", $_SESSION['fiche']['quest7_electrique_delai']);$quest7_electrique_delai="$quest7_electrique_delai[2]-$quest7_electrique_delai[1]-$quest7_electrique_delai[0]";}
if($_SESSION['fiche']['quest7_nacelle_delai']!="") {$quest7_nacelle_delai=explode("/", $_SESSION['fiche']['quest7_nacelle_delai']);$quest7_nacelle_delai="$quest7_nacelle_delai[2]-$quest7_nacelle_delai[1]-$quest7_nacelle_delai[0]";}
if($_SESSION['fiche']['quest7_chariot_delai']!="") {$quest7_chariot_delai=explode("/", $_SESSION['fiche']['quest7_chariot_delai']);$quest7_chariot_delai="$quest7_chariot_delai[2]-$quest7_chariot_delai[1]-$quest7_chariot_delai[0]";}
if($_SESSION['fiche']['quest7_materiel_delai']!="") {$quest7_materiel_delai=explode("/", $_SESSION['fiche']['quest7_materiel_delai']);$quest7_materiel_delai="$quest7_materiel_delai[2]-$quest7_materiel_delai[1]-$quest7_materiel_delai[0]";}
if($_SESSION['fiche']['quest7_incendie_delai']!="") {$quest7_incendie_delai=explode("/", $_SESSION['fiche']['quest7_incendie_delai']);$quest7_incendie_delai="$quest7_incendie_delai[2]-$quest7_incendie_delai[1]-$quest7_incendie_delai[0]";}
if($_SESSION['fiche']['quest7_secourisme_delai']!="") {$quest7_secourisme_delai=explode("/", $_SESSION['fiche']['quest7_secourisme_delai']);$quest7_secourisme_delai="$quest7_secourisme_delai[2]-$quest7_secourisme_delai[1]-$quest7_secourisme_delai[0]";}
if($_SESSION['fiche']['quest8_retrait_delai']!="") {$quest8_retrait_delai=explode("/", $_SESSION['fiche']['quest8_retrait_delai']);$quest8_retrait_delai="$quest8_retrait_delai[2]-$quest8_retrait_delai[1]-$quest8_retrait_delai[0]";}

 	try{ 	 	
$insert = $this->con->prepare('INSERT INTO accueil_fiche 
(
  date_inscription,adresse_ip,
  quest0_nom,quest0_service,quest0_matricule,quest0_typecontrat,quest1_service,quest1_service_personne,quest1_service_delai,quest1_collectivite,
  quest1_collectivite_personne,quest1_collectivite_delai,quest1_reglement,quest1_reglement_personne,quest1_reglement_delai,quest2_armoire,quest2_armoire_personne,quest2_armoire_delai, 
  quest2_installations,quest2_installations_personne,quest2_installations_delai,quest2_locaux,quest2_locaux_personne,quest2_locaux_delai,quest2_services,quest2_services_personne,
  quest2_services_delai,quest2_alcoolisme,quest2_alcoolisme_personne,quest2_alcoolisme_delai,quest3_chaussures,quest3_gants,quest3_lunettes,quest3_casque,quest3_gilet,quest3_autre,
  quest3_autre_epi_type,quest3_pantalon,quest3_parka,quest3_autre_vetemement,quest3_autre_vetement_type,quest4_permis,quest4_interdition,quest4_interdition_personne,quest4_interdition_delai, 
  quest4_validation,quest4_validation_type,quest4_validation_personne,quest4_validation_delai,quest5_tetanos,quest5_tetanos_personne,quest5_tetanos_delai,quest5_autre,quest5_autre_type,
  quest5_autre_personne,quest5_autre_delai,quest5_visite,quest5_visite_personne,quest5_visite_delai,quest6_formation,quest6_formation_personne,quest6_formation_delai,quest6_demonstration,
  quest6_demonstration_personne,quest6_demonstration_delai,quest6_epi,quest6_epi_personne,quest6_epi_delai,quest7_signalisation,quest7_signalisation_personne,quest7_signalisation_delai,
  quest7_hauteur,quest7_hauteur_personne,quest7_hauteur_delai,quest7_pente,quest7_pente_personne,quest7_pente_delai,quest7_chimique,quest7_chimique_personne,quest7_chimique_delai, 
  quest7_electrique,quest7_electrique_personne,quest7_electrique_delai,quest7_nacelle,quest7_nacelle_personne,quest7_nacelle_delai,quest7_chariot,quest7_chariot_personne,quest7_chariot_delai,
  quest7_materiel,quest7_materiel_personne,quest7_materiel_delai,quest7_incendie,quest7_incendie_personne,quest7_incendie_delai,quest7_secourisme,quest7_secourisme_personne,
  quest7_secourisme_delai,quest8_retrait,quest8_retrait_personne,quest8_retrait_delai
)
VALUES(
  :date,:ip,
  :quest0_nom,:quest0_service,:quest0_matricule,:quest0_typecontrat,:quest1_service,:quest1_service_personne,:quest1_service_delai,:quest1_collectivite,
  :quest1_collectivite_personne,:quest1_collectivite_delai,:quest1_reglement,:quest1_reglement_personne,:quest1_reglement_delai,:quest2_armoire,:quest2_armoire_personne,:quest2_armoire_delai, 
  :quest2_installations,:quest2_installations_personne,:quest2_installations_delai,:quest2_locaux,:quest2_locaux_personne,:quest2_locaux_delai,:quest2_services,:quest2_services_personne,
  :quest2_services_delai,:quest2_alcoolisme,:quest2_alcoolisme_personne,:quest2_alcoolisme_delai,:quest3_chaussures,:quest3_gants,:quest3_lunettes,:quest3_casque,:quest3_gilet,:quest3_autre,
  :quest3_autre_epi_type,:quest3_pantalon,:quest3_parka,:quest3_autre_vetemement,:quest3_autre_vetement_type,:quest4_permis,:quest4_interdition,:quest4_interdition_personne,:quest4_interdition_delai, 
  :quest4_validation,:quest4_validation_type,:quest4_validation_personne,:quest4_validation_delai,:quest5_tetanos,:quest5_tetanos_personne,:quest5_tetanos_delai,:quest5_autre,:quest5_autre_type,
  :quest5_autre_personne,:quest5_autre_delai,:quest5_visite,:quest5_visite_personne,:quest5_visite_delai,:quest6_formation,:quest6_formation_personne,:quest6_formation_delai,:quest6_demonstration,
  :quest6_demonstration_personne,:quest6_demonstration_delai,:quest6_epi,:quest6_epi_personne,:quest6_epi_delai,:quest7_signalisation,:quest7_signalisation_personne,:quest7_signalisation_delai,
  :quest7_hauteur,:quest7_hauteur_personne,:quest7_hauteur_delai,:quest7_pente,:quest7_pente_personne,:quest7_pente_delai,:quest7_chimique,:quest7_chimique_personne,:quest7_chimique_delai, 
  :quest7_electrique,:quest7_electrique_personne,:quest7_electrique_delai,:quest7_nacelle,:quest7_nacelle_personne,:quest7_nacelle_delai,:quest7_chariot,:quest7_chariot_personne,:quest7_chariot_delai,
  :quest7_materiel,:quest7_materiel_personne,:quest7_materiel_delai,:quest7_incendie,:quest7_incendie_personne,:quest7_incendie_delai,:quest7_secourisme,:quest7_secourisme_personne,
  :quest7_secourisme_delai,:quest8_retrait,:quest8_retrait_personne,:quest8_retrait_delai
)');
     	

	
   $insert->bindValue(':date', date('Y-m-d H:i:s'),PDO::PARAM_STR);
   $insert->bindValue(':ip', $_SERVER['REMOTE_ADDR'],PDO::PARAM_STR);
   $insert->bindParam(':quest0_nom', $quest0_nom, PDO::PARAM_STR);
   $insert->bindParam(':quest0_service', $quest0_service, PDO::PARAM_STR);
   $insert->bindParam(':quest0_matricule', $quest0_matricule, PDO::PARAM_STR);
   $insert->bindParam(':quest0_typecontrat', $quest0_typecontrat, PDO::PARAM_STR);
   $insert->bindParam(':quest1_service', $quest1_service, PDO::PARAM_STR);
   $insert->bindParam(':quest1_service_personne', $quest1_service_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest1_service_delai', $quest1_service_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest1_collectivite', $quest1_collectivite, PDO::PARAM_STR);
   
  $insert->bindParam(':quest1_collectivite_personne', $quest1_collectivite_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest1_collectivite_delai', $quest1_collectivite_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest1_reglement', $quest1_reglement, PDO::PARAM_STR);
   $insert->bindParam(':quest1_reglement_personne', $quest1_reglement_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest1_reglement_delai', $quest1_reglement_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest2_armoire', $quest2_armoire, PDO::PARAM_STR);
   $insert->bindParam(':quest2_armoire_personne', $quest2_armoire_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest2_armoire_delai', $quest2_armoire_delai, PDO::PARAM_STR);
    
  $insert->bindParam(':quest2_installations', $quest2_installations, PDO::PARAM_STR);
   $insert->bindParam(':quest2_installations_personne', $quest2_installations_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest2_installations_delai', $quest2_installations_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest2_locaux', $quest2_locaux, PDO::PARAM_STR);
   $insert->bindParam(':quest2_locaux_personne', $quest2_locaux_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest2_locaux_delai', $quest2_locaux_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest2_services', $quest2_services, PDO::PARAM_STR);
   $insert->bindParam(':quest2_services_personne', $quest2_services_personne, PDO::PARAM_STR);
   
  $insert->bindParam(':quest2_services_delai', $quest2_services_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest2_alcoolisme', $quest2_alcoolisme, PDO::PARAM_STR);
   $insert->bindParam(':quest2_alcoolisme_personne', $quest2_alcoolisme_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest2_alcoolisme_delai', $quest2_alcoolisme_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest3_chaussures', $quest3_chaussures, PDO::PARAM_STR);
   $insert->bindParam(':quest3_gants', $quest3_gants, PDO::PARAM_STR);
   $insert->bindParam(':quest3_lunettes', $quest3_lunettes, PDO::PARAM_STR);
   $insert->bindParam(':quest3_casque', $quest3_casque, PDO::PARAM_STR);
   $insert->bindParam(':quest3_gilet', $quest3_gilet, PDO::PARAM_STR);
   $insert->bindParam(':quest3_autre', $quest3_autre, PDO::PARAM_STR);
   
  $insert->bindParam(':quest3_autre_epi_type', $quest3_autre_epi_type, PDO::PARAM_STR);
   $insert->bindParam(':quest3_pantalon', $quest3_pantalon, PDO::PARAM_STR);
   $insert->bindParam(':quest3_parka', $quest3_parka, PDO::PARAM_STR);
   $insert->bindParam(':quest3_autre_vetemement', $quest3_autre_vetemement, PDO::PARAM_STR);
   $insert->bindParam(':quest3_autre_vetement_type', $quest3_autre_vetement_type, PDO::PARAM_STR);
   $insert->bindParam(':quest4_permis', $permis_tous, PDO::PARAM_STR);
   $insert->bindParam(':quest4_interdition', $quest4_interdition, PDO::PARAM_STR);
   $insert->bindParam(':quest4_interdition_personne', $quest4_interdition_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest4_interdition_delai', $quest4_interdition_delai, PDO::PARAM_STR);
    
  $insert->bindParam(':quest4_validation', $quest4_validation, PDO::PARAM_STR);
   $insert->bindParam(':quest4_validation_type', $quest4_validation_type, PDO::PARAM_STR);
   $insert->bindParam(':quest4_validation_personne', $quest4_validation_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest4_validation_delai', $quest4_validation_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest5_tetanos', $quest5_tetanos, PDO::PARAM_STR);
   $insert->bindParam(':quest5_tetanos_personne', $quest5_tetanos_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest5_tetanos_delai', $quest5_tetanos_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest5_autre', $quest5_autre, PDO::PARAM_STR);
   $insert->bindParam(':quest5_autre_type', $quest5_autre_type, PDO::PARAM_STR);
   
  $insert->bindParam(':quest5_autre_personne', $quest5_autre_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest5_autre_delai', $quest5_autre_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest5_visite', $quest5_visite, PDO::PARAM_STR);
   $insert->bindParam(':quest5_visite_personne', $quest5_visite_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest5_visite_delai', $quest5_visite_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest6_formation', $quest6_formation, PDO::PARAM_STR);
   $insert->bindParam(':quest6_formation_personne', $quest6_formation_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest6_formation_delai', $quest6_formation_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest6_demonstration', $quest6_demonstration, PDO::PARAM_STR);
   
   $insert->bindParam(':quest6_demonstration_personne', $quest6_demonstration_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest6_demonstration_delai', $quest6_demonstration_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest6_epi', $quest6_epi, PDO::PARAM_STR);
   $insert->bindParam(':quest6_epi_personne', $quest6_epi_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest6_epi_delai', $quest6_epi_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_signalisation', $quest7_signalisation, PDO::PARAM_STR);
   $insert->bindParam(':quest7_signalisation_personne', $quest7_signalisation_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_signalisation_delai', $quest7_signalisation_delai, PDO::PARAM_STR);
   
  $insert->bindParam(':quest7_hauteur', $quest7_hauteur, PDO::PARAM_STR);
   $insert->bindParam(':quest7_hauteur_personne', $quest7_hauteur_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_hauteur_delai', $quest7_hauteur_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_pente', $quest7_pente, PDO::PARAM_STR);
   $insert->bindParam(':quest7_pente_personne', $quest7_pente_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_pente_delai', $quest7_pente_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chimique', $quest7_chimique, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chimique_personne', $quest7_chimique_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chimique_delai', $quest7_chimique_delai, PDO::PARAM_STR);
    
  $insert->bindParam(':quest7_electrique', $quest7_electrique, PDO::PARAM_STR);
   $insert->bindParam(':quest7_electrique_personne', $quest7_electrique_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_electrique_delai', $quest7_electrique_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_nacelle', $quest7_nacelle, PDO::PARAM_STR);
   $insert->bindParam(':quest7_nacelle_personne', $quest7_nacelle_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_nacelle_delai', $quest7_nacelle_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chariot', $quest7_chariot, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chariot_personne', $quest7_chariot_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_chariot_delai', $quest7_chariot_delai, PDO::PARAM_STR);
   
  $insert->bindParam(':quest7_materiel', $quest7_materiel, PDO::PARAM_STR);
   $insert->bindParam(':quest7_materiel_personne', $quest7_materiel_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_materiel_delai', $quest7_materiel_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_incendie', $quest7_incendie, PDO::PARAM_STR);
   $insert->bindParam(':quest7_incendie_personne', $quest7_incendie_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest7_incendie_delai', $quest7_incendie_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest7_secourisme', $quest7_secourisme, PDO::PARAM_STR);
   $insert->bindParam(':quest7_secourisme_personne', $quest7_secourisme_personne, PDO::PARAM_STR);
   
  $insert->bindParam(':quest7_secourisme_delai', $quest7_secourisme_delai, PDO::PARAM_STR);
   $insert->bindParam(':quest8_retrait', $quest8_retrait, PDO::PARAM_STR);
   $insert->bindParam(':quest8_retrait_personne', $quest8_retrait_personne, PDO::PARAM_STR);
   $insert->bindParam(':quest8_retrait_delai', $quest8_retrait_delai, PDO::PARAM_STR);
		

$insert->execute();	
$id_fiche= $this->con->lastInsertId();

		}

 	catch (Exception $e) {
            echo $e->getMessage() . " <br><b>Erreur lors de la création d'une fiche acceuil</b>\n";
            throw $e;
        }	

//Supprime la session en cours pour la remplacer par la nouvelle
unset($_SESSION['fiche']); 

// Creation de la laison fiche / membre qui l'a saisie
	 try{
$insert2 = $this->con->prepare('INSERT INTO fiche_has_membre (id_fiche,id_membre)
VALUES(:id_fiche,:id_membre)');
     
$insert2->bindParam(':id_fiche', $id_fiche, PDO::PARAM_INT);
$insert2->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
$insert2->execute();	
		 }
	 
catch (Exception $f) {
            echo $f->getMessage() . " <br><b>Erreur lors de la liaison fiche et membre</b>\n";
            throw $f;
        }	
	
	return $id_fiche;
}
/***********************************************************************
 * Affichage des options
 **************************************************************************/
  
 function afficheOptions()
  {
  	
 
 // recherche des administrateurs
 
	try{
$select =$this->con->prepare('SELECT *
						FROM options_accueil
						WHERE id =1
						');
							
$select->execute();

$data = $select->fetch();	
} 
        
        catch (Exception $e) {
            echo $e->getMessage() . " <br><b>Erreur de l'affichage des options</b>\n";
            throw $e;
        }	 
      
return $data;

 }
 
/**************************************************************************
 * Mise à jour des options
***************************************************************************/
 
 function majOptions($email_magasinier,$email_medecine,$quest1,$quest2,$quest3,$quest4,$quest5,$quest6,$quest7,$quest8)
  {


		try {   
$update = $this->con->prepare('UPDATE options_accueil 
SET email_magasinier = :email_magasinier,email_medecine = :email_medecine,quest1 = :quest1,quest2 = :quest2,quest3 = :quest3,quest4 = :quest4,quest5 = :quest5,quest6 = :quest6,quest7 = :quest7,quest8 = :quest8
WHERE id = 1');
	
$update->bindParam(':email_magasinier', $email_magasinier, PDO::PARAM_STR);
$update->bindParam(':email_medecine', $email_medecine, PDO::PARAM_STR);
$update->bindParam(':quest1', $quest1, PDO::PARAM_STR);
$update->bindParam(':quest2', $quest2, PDO::PARAM_STR);
$update->bindParam(':quest3', $quest3, PDO::PARAM_STR);
$update->bindParam(':quest4', $quest4, PDO::PARAM_STR);
$update->bindParam(':quest5', $quest5, PDO::PARAM_STR);
$update->bindParam(':quest6', $quest6, PDO::PARAM_STR);
$update->bindParam(':quest7', $quest7, PDO::PARAM_STR);
$update->bindParam(':quest8', $quest8, PDO::PARAM_STR);
$update->execute();	

			}
	catch (Exception $e) {
            echo $e->getMessage() . " <br><b>Erreur lors de la mise à jour des options</b>\n";
            throw $e;
        	}
	
 
  
 				
}


/***********************************************************************
 * Affichage des Fiche dans la vue en listing DRH
 **************************************************************************/
  
 function afficheFicheDRH()
  {
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM fiche_has_membre
        INNER JOIN accueil_fiche ON accueil_fiche.id_fiche=fiche_has_membre.id_fiche
        INNER JOIN membres ON membres.id_membre=fiche_has_membre.id_membre
	    ORDER BY accueil_fiche.id_fiche DESC');	
				
		$select->execute();
		
		$data = $select->fetchAll();
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur lors de l'affichage du listing des fiches accueil</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  } 
  
/***********************************************************************
 * Affichage de la partie agent  pour l'impression d'une fiche pdf
 **************************************************************************/
  
 function afficheFiche($id_fiche)
  {
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM  accueil_fiche
	    WHERE accueil_fiche.id_fiche = :id_fiche');	
				
		$select->bindParam(':id_fiche', $id_fiche, PDO::PARAM_INT);	
		$select->execute();		
		
		$data = $select->fetch();
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur lors de l'affichage de la fiche de l'agent</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  } 
  
 /***********************************************************************
 * Affichage de la partie agent  pour l'impression d'une fiche pdf
 **************************************************************************/
  
 function infoAdp($id_fiche)
  {
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM  fiche_has_membre
		INNER JOIN membres ON membres.id_membre=fiche_has_membre.id_membre
	    WHERE id_fiche = :id_fiche');	
				
		$select->bindParam(':id_fiche', $id_fiche, PDO::PARAM_INT);	
		$select->execute();		
		
		$data = $select->fetch();
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur lors de l'affichage de la fiche de l'agent</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  } 
  
  /***********************************************************************
 * Recupération des emails magasinier et medecine
 **************************************************************************/
  
 function recupMail()
  {
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM  options_accueil
	    WHERE id = 1');	
				
		$select->execute();		
		
		$data = $select->fetch();
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur lors de la recherche des emails magasinier et medecine</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  } 
 
 /*******************************************************
 * Envoi email au magasinier
********************************************************/ 

function envoiMailMagasinier($fiche,$mail_user)
{

if($fiche['quest3_chaussures']=="non_concerne" AND $fiche['quest3_gants']=="non_concerne" AND $fiche['quest3_lunettes']=="non_concerne" AND $fiche['quest3_casque']=="non_concerne" 
AND $fiche['quest3_gilet']=="non_concerne" AND $fiche['quest3_autre']=="non_concerne" AND $fiche['quest3_pantalon']=="non_concerne" AND $fiche['quest3_parka']=="non_concerne" 
AND $fiche['quest3_autre_vetemement']=="non_concerne"){}else{

// Création d'un nouvel objet $mail
$mail = new PHPMailer();
// Encodage
$mail->CharSet = 'UTF-8';

// recup année inscription
$date_inscription=explode(" ",$fiche['date_inscription']);
$date_inscription=explode("-",$date_inscription[0]);
$date=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// numéro de dossier			
// Complete le numéro de fiche avec des O devant
$id_fiche0=str_pad($fiche['id_fiche'],  4, "0",STR_PAD_LEFT);
			
$numero_dossier=$date_inscription[0]."-".$id_fiche0;

	

//Type de contrat
switch ($fiche['quest0_typecontrat']) {
   
    case 1: $contrat="Stage découverte collège - 3/5 jours";
        break;
    case 2: $contrat="Stagiaire reconversion durée - 1/3 semaines";
        break;
	case 3: $contrat="Saisonnier";
        break;
    case 4: $contrat="TIG : Travaux d'Intérêts Généraux";
        break;
    case 5: $contrat="CAE";
        break;
    case 6: $contrat="Apprenti";
        break;
    case 7: $contrat="Recrutement direct (aux, stagiaire, fctionnaire)";
        break;
    case 8: $contrat="Contractuel";
        break;
    case 9: $contrat="Mutation interne";
        break;
	case 10: $contrat="Mutation externe";
        break;
	
}

//=====Corps du message
$body = "<html><head></head>
<body>
Bonjour,<br>
<br>
Voici une demande de dotation vestimentaire pour un nouvel agent: <br>

<h4>L'agent nouvellement recruté </h4>
<ul>
<li><b>Numéro de dossier : </b>  ".$numero_dossier."</li>
<li><b>Date du dossier : </b>  ".$date."</li>
<li><b>Nom de l'agent : </b> ".htmlspecialchars($fiche['quest0_nom'])."</li>
<li><b>Service : </b>  ".htmlspecialchars($fiche['quest0_service'])."</li>
<li><b>Date de naissance : </b> ".htmlspecialchars($fiche['quest0_matricule'])."</li>
<li><b>Type de contrat : </b>  ".$contrat." </li>
</ul>
<b>E.P.I (Equipements de Protection Individuelle)</b>
<ul>
<li><b>Chaussures : </b>";
if($fiche['quest3_chaussures']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Gants : </b>";
if($fiche['quest3_gants']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Lunettes : </b>";
if($fiche['quest3_lunettes']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Casque Anti-bruit : </b>";
if($fiche['quest3_casque']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Gilet Fluorescent : </b>";
if($fiche['quest3_gilet']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Autres : </b>";
if($fiche['quest3_autre']=="a_doter"){$body.="A doter - ".$fiche['quest3_autre_epi_type'];} else{$body.="Non concerné";}

$body.="</li>
</ul>
<b>Vêtement de travail</b>
<ul>
<li><b>Pantalon et veste : </b>";
if($fiche['quest3_pantalon']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li><li><b>Parka : </b>";
if($fiche['quest3_parka']=="a_doter"){$body.="A doter";} else{$body.="Non concerné";}

$body.="</li>
<li><b>Autres : </b>";
if($fiche['quest3_autre_vetemement']=="a_doter"){$body.="A doter - ".$fiche['quest3_autre_vetement_type'];} else{$body.="Non concerné";}

$body.="</li>
</ul>


Salutations<br>
<br>
</body>
</html>";
//==========


// Expediteur, adresse de retour et destinataire :
$mail->SetFrom(FROM_EMAIL, "Agglomération Pau-Pyrénées"); //L'expediteur du mail
$mail->AddReplyTo("NO-REPLY@agglo-pau.fr", "NO REPLY"); //Pour que l'usager réponde au mail
// Si on a le nom : $mail->AddAddress("romain_taldu@hotmail.com", "Romain perso"); 
 //mail du destinataire
$mail->AddAddress($mail_user); 


// Sujet du mail
$mail->Subject = "Accueil nouvel agent - Dotations vestimentaires";
// Le message
$mail->MsgHTML($body);


// Envoi de l'email
$mail->Send();

unset($mail);

}

} 

 /*******************************************************
 * Envoi email a la medecine du travail
********************************************************/ 

function envoiMailMedecine($fiche,$mail_user)
{

if($fiche['quest0_typecontrat']==1 OR $fiche['quest0_typecontrat']==2 OR $fiche['quest0_typecontrat']==3 OR $fiche['quest0_typecontrat']==4){}else{


// Création d'un nouvel objet $mail
$mail = new PHPMailer();
// Encodage
$mail->CharSet = 'UTF-8';

// $quest5_tetanos_delai
$date_inscription=explode(" ",$fiche['quest5_tetanos_delai']);
$date_inscription=explode("-",$date_inscription[0]);
$quest5_tetanos_delai=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// quest5_autre_delai
$date_inscription=explode(" ",$fiche['quest5_autre_delai']);
$date_inscription=explode("-",$date_inscription[0]);
$quest5_autre_delai=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// quest5_visite_delai
$date_inscription=explode(" ",$fiche['quest5_visite_delai']);
$date_inscription=explode("-",$date_inscription[0]);
$quest5_visite_delai=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// recup année inscription
$date_inscription=explode(" ",$fiche['date_inscription']);
$date_inscription=explode("-",$date_inscription[0]);
$date=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];

// numéro de dossier			
// Complete le numéro de fiche avec des O devant
$id_fiche0=str_pad($fiche['id_fiche'],  4, "0",STR_PAD_LEFT);
			
$numero_dossier=$date_inscription[0]."-".$id_fiche0;

	

//Type de contrat
switch ($fiche['quest0_typecontrat']) {
   
    case 1: $contrat="Stage découverte collège - 3/5 jours";
        break;
    case 2: $contrat="Stagiaire reconversion durée - 1/3 semaines";
        break;
	case 3: $contrat="Saisonnier";
        break;
    case 4: $contrat="TIG : Travaux d'Intérêts Généraux";
        break;
    case 5: $contrat="CAE";
        break;
    case 6: $contrat="Apprenti";
        break;
    case 7: $contrat="Recrutement direct (aux, stagiaire, fctionnaire)";
        break;
    case 8: $contrat="Contractuel";
        break;
    case 9: $contrat="Mutation interne";
        break;
	case 10: $contrat="Mutation externe";
        break;
}

//=====Corps du message
$body = "<html><head></head>
<body>
Bonjour,<br>
<br>
Voici l'etat vaccination pour un nouvel agent: <br>

<h4>L'agent nouvellement recruté </h4>
<ul>
<li><b>Numéro de dossier : </b>  ".$numero_dossier."</li>
<li><b>Date du dossier : </b>  ".$date."</li>
<li><b>Nom de l'agent : </b> ".htmlspecialchars($fiche['quest0_nom'])."</li>
<li><b>Service : </b>  ".htmlspecialchars($fiche['quest0_service'])."</li>
<li><b>Date de naissance : </b> ".htmlspecialchars($fiche['quest0_matricule'])."</li>
<li><b>Type de contrat : </b>  ".$contrat." </li>
</ul>

<ul>
<li><b>Tétanos : </b>";
if($fiche['quest5_tetanos']=="realise"){$body.="Réalisé";} else{$body.="A faire - ".$fiche['quest5_tetanos_personne']." ".$quest5_tetanos_delai;}

$body.="</li><li><b>Autres : </b>";
if($fiche['quest5_autre']=="realise"){$body.="Réalisé - ".$fiche['quest5_autre_type'];}
if($fiche['quest5_autre']=="non_concerne"){$body.="Non concerné";}
if($fiche['quest5_autre']=="a_faire"){$body.="A faire - ".$fiche['quest5_autre_type']." ".$fiche['quest5_autre_personne']." ".$quest5_autre_delai;}

$body.="</li><li><b>Visite Médecin du travail : </b>";
if($fiche['quest5_visite']=="realise"){$body.="Réalisé";}
if($fiche['quest5_visite']=="non_concerne"){$body.="Non concerné";}
if($fiche['quest5_visite']=="a_faire"){$body.="A faire - ".$fiche['quest5_visite_personne']." ".$quest5_visite_delai;}

$body.="</li>
</ul>


Salutations<br>
<br>
</body>
</html>";
//==========


// Expediteur, adresse de retour et destinataire :
$mail->SetFrom(FROM_EMAIL, "Agglomération Pau-Pyrénées"); //L'expediteur du mail
$mail->AddReplyTo("NO-REPLY@agglo-pau.fr", "NO REPLY"); //Pour que l'usager réponde au mail
// Si on a le nom : $mail->AddAddress("romain_taldu@hotmail.com", "Romain perso"); 
 //mail du destinataire
$mail->AddAddress($mail_user); 


// Sujet du mail
$mail->Subject = "Accueil nouvel agent - Vaccinations";
// Le message
$mail->MsgHTML($body);


// Envoi de l'email
$mail->Send();

unset($mail);



} 

}
////////////////// limite de classe acceuil  
}
  

/***********************************************************************
 * Affiche les resultats de la selection des boutons radio dans validation_accueil.php
 **************************************************************************/
  
function questRadio($radio,$personne,$delai){

switch ($radio) {
    case "realise":
        echo "Réalisé </div>";
        break;
    case "non_concerne":
        echo "Non concerné </div>";
        break;
     case "a_doter":
        echo "A doter </div>";
        break;
    case "a_faire":
        echo "A faire </div> <div class=\"col-md-2\">".$personne."</div> <div class=\"col-md-2\">  <div class=\"controls\">".$delai."</div> </div>";
        break;
		case NULL:
		echo "</div>";
		  break;
}
}

/***********************************************************************
 * Affiche les resultats de la selection des boutons radio dans tableau_pdf.php
 **************************************************************************/
  
function questRadioPdf($radio,$personne,$delai){

if($delai!=""){	
$date_inscription=explode(" ",$delai);
$date_inscription=explode("-",$date_inscription[0]);
$delai=$date_inscription[2]."/".$date_inscription[1]."/".$date_inscription[0];}

switch ($radio) {
    case "realise":
        echo "Réalisé </div>";
        break;
    case "non_concerne":
        echo "Non concerné </div>";
        break;
     case "a_doter":
        echo "A doter </div>";
        break;
    case "a_faire":
	echo "A faire </div><div class=\"cellule3\">".$personne."</div><div class=\"cellule4\">".$delai."</div>";
        break;
	case NULL:
		echo "</div>";
		  break;
}
}