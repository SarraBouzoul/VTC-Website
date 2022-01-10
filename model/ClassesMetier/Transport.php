<?php
class Transport{
  
    private $id;
    private $nom;
    private $tarif;
    public function __construct($id,$nom, $tarif)
    {
    $this->id=$id;
    $this->nom=$nom;
    $this->tarif=$tarif;
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

    public function getTarif()
    {
        return $this->tarif;
    }

    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }
}
?>