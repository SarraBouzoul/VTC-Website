<?php
include_once ('vue/PresentationVue.php');
include_once ('AcceuillController.php');
include_once('model/Gestion/PresentationModel.php');
class PresentationController
{
    public function afficherVideo(){
        $pm= new PresentationModel();
        $pv= new PresentationVue();
        $pv->video($pm->getPresentationData()[0]->getVideo());
    }
    public function afficherTitle(){
        $pm= new PresentationModel();
        $pv= new PresentationVue();
        $pv->title($pm->getPresentationData()[0]->getTitle());
    }
    public function afficherDescription(){
        $pm= new PresentationModel();
        $pv= new PresentationVue();
        $pv->description($pm->getPresentationData()[0]->getDescription());
    }
    public function afficherImage(){
        $pm= new PresentationModel();
        $pv= new PresentationVue();
        $pv->image($pm->getPresentationData()[0]->getimage());
    }
    public function afficherPresentation(){
        $pv= new PresentationVue();
        $pv->entete("Presentation");
        $ac= new AcceuillController();
        $ac->afficherNavBar();
        $this->afficherImage();
        $this->afficherTitle();
        $this->afficherVideo();
        $this->afficherDescription();

        $ac->afficherFooter();
    }

}