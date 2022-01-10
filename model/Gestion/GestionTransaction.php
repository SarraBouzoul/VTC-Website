<?php
class GestionTransaction{
    
    private $tarif;
    public function calculerPrix(Transport $transport){
  
    /*switch ($tranport);*/

    $transport->setTarif($transport->setTarif()+$this->tarif) ;
    return $transport->setTarif()+$this->tarif;
  }

}

?>