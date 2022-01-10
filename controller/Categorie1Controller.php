<?php
include_once("vue/Categorie1Vue.php");
include_once("model/Gestion/GestionClient.php");
include_once("model/Gestion/GestionTransporteur.php");

class Categorie1Controller
{

    public function afficherClientTable()
    {
        $gc = new GestionClient();
        $clients = $gc->getClientsData();
        $cv = new Categorie1Vue();
        $cv->clientTable($clients);
    }

}
