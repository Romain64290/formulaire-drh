<?php

/***** Dernière modification : 04/08/2016, Romain TALDU	*****/

 class dashboard {

    private $con;

    public function __construct(connection $con) {
        $this->con = $con->con;
    }

/***********************************************************************
 * Affichage des Fiches dans la vue en listing DRH
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
 * Affichage des Fiche dans la vue en listing Adp
 **************************************************************************/
  
 function afficheFicheAdp($id_membre)
  {
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM fiche_has_membre
        INNER JOIN accueil_fiche ON accueil_fiche.id_fiche=fiche_has_membre.id_fiche
		WHERE fiche_has_membre.id_membre = :id_membre
		ORDER BY accueil_fiche.id_fiche DESC');	
				
		
		$select->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
		$select->execute();
		
		$data = $select->fetchAll(PDO::FETCH_OBJ);
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur lors de l'affichage du listing des fiches accueil</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  }  
	
    }














