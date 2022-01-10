<?php
include_once('vue/ClientAccountVue.php');
include_once('model/Gestion/GestionClient.php');

class ClientAccountController
{
    public function afficherClientProfile()
    {
        if(!isset($_GET['id'])) {
            echo "can't identify the Client";}
        else
        {
            $gc = new GestionClient();
            $ca = new ClientAccountVue();
            $ca->entete("Profile");
            $ca->clientProfile($gc->getClientData($_GET['id']));}


    }
}