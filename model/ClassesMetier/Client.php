<?php

class Client
{

    private $id;
    private $nom;
    private $prenom;
    private $passwd;
    private $email;
    private $adress;
    private $numeroTelephone;
    private $annonces;

    public function __construct($id, $nom, $prenom, $passwd, $email, $adress, $numeroTelephone)
    {

        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->passwd = $passwd;
        $this->email = $email;
        $this->adress = $adress;
        $this->numeroTelephone = $numeroTelephone;

    }

    public function addAnnonce(Annonce $annonce)
    {
        $i = 0;
        $c = new DataBaseConnection();

        $sqlQuery = 'INSERT INTO annonce(id,title,description,image,type,id_fourchettepoid,id_fourchettevolume,id_client,id_trajet,id_transport,valide) VALUES (' . $annonce->getid() . ', ' . $annonce->getid() . ', ' . $annonce->getid() . ',' . $annonce->getid() . ',' . $annonce->getid() . ',' . $annonce->getid() . ',' . $annonce->getid() . ',' . $annonce->getid() . ')';
        $results = $c->request($sqlQuery);
        foreach ($results as $result) {

            $this->annonces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['picture'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_transport'], $result['valide']);
            $i++;
        }

    }

    public function getAnnonces()
    {
        /*return all the client announces*/

    }

    public function archiveAnnonce()
    {
        /*archive an announce*/

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPasswd()
    {
        return $this->passwd;
    }

    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone($numeroTelephone)
    {
        $this->numeroTelephone = $numeroTelephone;
    }
}

?>