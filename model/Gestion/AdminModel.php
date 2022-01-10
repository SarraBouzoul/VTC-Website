<?php
include_once ('model/Config/DataBaseConnection.php');
include_once ('model/ClassesMetier/Admin.php');
class AdminModel
{

    public function getAdminData(){
        $c= new DataBaseConnection();
        $requet= 'SELECT * FROM admin LIMIT 1 OFFSET 0';
        $results= $c->request($requet);
        $admin= null;
        foreach ($results as $result){
         $admin = new Admin($result['nom'],$result['password'],$result['email'],$result['numerotelephone']);
        }
        return $admin;
    }
    public function getCategories(){
        $c= new DataBaseConnection();
        $requet= "SELECT * FROM `categorie`";
        $results= $c->request($requet);
        $cat= null;
        $i= 0;
        foreach ($results as $result){
            $cat[$i]['image']= $result['image'];
            $cat[$i]['nom']= $result['nom'];
            $i++;
        }
        return $cat;
    }

}