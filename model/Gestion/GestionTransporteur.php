<?php

class GestionTransporteur {
    
    /* gestion de tous les utiisateurs */
    public function filtrerUsers(){}
    public function trierUsers(){}
    public function validerUer( User $user){
        $d= $user;
    }
    public function  banUser( User $user){
        $d= $user;
    }
    public function  deletUser( User $user){
        $d= $user;
    }


   /* gestion des demande de certificats*/
    public function validerCertificat( Transporteur $transporteur){
    /* return a list of documents to report to the company bureau*/
    $transporteur->setStatutCertificat("valider");
   }
   public function refuserCertificat( Transporteur $transporteur){
    /* return something to justify why it was refused*/
    $transporteur->setStatutCertificat("refusé");
   }
   public function certifierTransporteur( Transporteur $transporteur){
    /* put the statut as certified*/
    $transporteur->certifie= true;
    $transporteur->setStatutCertificat("certifie");
   }

}

?>