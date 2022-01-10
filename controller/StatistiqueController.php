<?php
include_once('vue/StatistiquesVue.php');
include_once ('AcceuillController.php');
class StatistiqueController
{

    public function afficherTitle(){
        $sv= new StatistiquesVue();
        $sv->title("Statistiques");
    }
    public function AfficherStatistiques(){
        $ac= new AcceuillController();
        $sv= new StatistiquesVue();

        $sv->entete("Statistiques");

        $ac->afficherNavBar();
        $this->affichertitle();
        $sv->cards();
        $ac->afficherFooter();

    }
}