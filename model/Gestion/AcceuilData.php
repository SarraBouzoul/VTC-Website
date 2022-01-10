<?php
require_once("model/Config/DataBaseConnection.php");
require_once ("GestionAnnonce.php");
class AcceuilData{

    public function getNavBarInfo(){
        $c= new DataBaseConnection();
        $requet= 'SELECT * FROM navbar';
        $results= $c->request($requet);
        $navbarElements= null ;
        $i=0;
        foreach ($results as $result){
            $navbarElements[$i]= $result['item'];
            $i++;
        }
        return $navbarElements;
    }
    public function getDiaporamaInfo(){
        $c= new DataBaseConnection();
        $requet= 'SELECT * FROM diaporama';
        $results= $c->request($requet);
        $diaporama= null ;
        $i=0;
        foreach ($results as $result){
            $diaporama[$i]= $result['image'];
            $i++;
        }
        return $diaporama;
    }
    public function getAnnounces(){
        $ga=new GestionAnnonce();
        return $ga->getAnnonces();
    }


}

?>