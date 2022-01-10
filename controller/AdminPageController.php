<?php
include_once("model/Gestion/AdminModel.php");
include_once("vue/AdminPageVue.php");

class AdminPageController
{
    public function verifyData()
    {
        if (!isset($_POST['name']) || !isset($_POST['password'])) {
            echo "entrer le nom et le mot de passe";
        } else {
            $am = new AdminModel();
            $admin = $am->getAdminData();
            if (($admin->getNom() == $_POST['name']) && ($admin->getPasswd() == $_POST['password'])) {
                $this->afficherAdminPage();
            }else{
                echo "vous n'avez pas acces a ce contenu";
            }

        }
    }

    public function afficherAdminPage()
    {
        $am= new AdminModel();
        $av = new AdminPageVue();
        $av->entete('AdminPage');
        $av->categories($am->getCategories());
    }

}