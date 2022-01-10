<?php
require_once('model/Gestion/AcceuilData.php');
require_once('vue/AcceuilVue.php');
Class AcceuillController{

    public function afficherNavBar(){
        $ad = new AcceuilData();
        $navbarElements = $ad->getNavBarInfo();
        $av= new AccueilVue();
        $av->navBar($navbarElements);
    }
    public function afficherlogo(){
        $ad = new AcceuilData();
        $av= new AccueilVue();
        $av->Logo($ad->getNavBarInfo());
    }
    public function afficherFooter(){
        $ad = new AcceuilData();
        $navbarElements = $ad->getNavBarInfo();
        $av= new AccueilVue();
        $av->footer($navbarElements);
    }
    public function afficherDiaporama(){
        $ad = new AcceuilData();
        $diaporamadata = $ad->getDiaporamaInfo();
        $av= new AccueilVue();
        $av->diaporama($diaporamadata);
    }
    public function afficherAnnonces(){
        $ad = new AcceuilData();
        $annonces =$ad->getAnnounces();
        $av= new AccueilVue();
        $av->listeAnnonces($annonces);
    }
    public function afficherPageAcceuil(){
        $av= new AccueilVue();
        $av->entete("acceuil");
        $this->afficherlogo();
        $this->afficherDiaporama();
        $this->afficherNavBar();
        $av->formulaire();
        $this->afficherAnnonces();
        $av->boutonPresentation();
        $this->afficherFooter();


    }
}
?>