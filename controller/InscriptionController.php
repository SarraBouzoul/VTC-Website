<?php
include_once("vue/InscriptionVue.php");
include_once ("AcceuillController.php");


class InscriptionController
{
    public function afficherInscription()
    {
        $pv = new InscriptionVue();
        $pv->entete("Inscription");
        $ac = new AcceuillController();
        $ac->afficherNavBar();
        $pv->inscriptionForm();
        $ac->afficherFooter();
    }

    public function getDonnerUser(){
        if (!isset($_POST['nom']) || !isset($_POST['prenom']) ||
            !isset($_POST['email']) || !isset($_POST['adresse']) ||
            !isset($_POST['motDePasse']) || !isset($_POST['numero']))
        {
            echo('Il faut remplire tous les champs pour soumettre le formulaire.');
            return;
        }
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $numero =$_POST['numero'];
        $adresse =$_POST['adresse'];
        $motDePasse =$_POST['motDePasse'];
    }
}