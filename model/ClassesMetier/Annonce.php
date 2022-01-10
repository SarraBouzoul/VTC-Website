<?php

class Annonce
{


    private $id;
    private $title;
    private $description;
    private $picture;
    private $type;
    private $client;
    private $trajet;
    private $fourchettePoid;
    private $fourchetteVolume;
    private $tranport;
    private $valide;


    public function __construct($id, $title, $description, $picture, $client, $trajet, $type, $fourchettePoid, $fourchetteVolume, $tranport)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->picture = $picture;
        $this->client = $client;
        $this->trajet = $trajet;
        $this->type = $type;
        $this->fourchettePoid = $fourchettePoid;
        $this->fourchetteVolume = $fourchetteVolume;
        $this->tranport = $tranport;
        $this->valide = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFirstPartDescription()
    {

        return mb_substr($this->description, 0, 76, 'UTF-8');
    }

    public function getPicture()
    {
        return $this->picture;
    }


    public function setPicture($picture)
    {
        $this->picture = $picture;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function getClient()
    {
        return $this->client;
    }


    public function setClient($client)
    {
        $this->client = $client;
    }

    public function getTrajet()
    {
        return $this->trajet;
    }


    public function setTrajet($trajet)
    {
        $this->trajet = $trajet;
    }


    public function getFourchettePoid()
    {
        return $this->fourchettePoid;
    }


    public function setFourchettePoid($fourchettePoid)
    {
        $this->fourchettePoid = $fourchettePoid;
    }


    public function getFourchetteVolume()
    {
        return $this->fourchetteVolume;
    }


    public function setFourchetteVolume($fourchetteVolume)
    {
        $this->fourchetteVolume = $fourchetteVolume;
    }


    public function getTranport()
    {
        return $this->tranport;
    }

    public function setTranport($tranport)
    {
        $this->tranport = $tranport;
    }

    public function getValide()
    {
        return $this->valide;
    }


    public function setValide($valide)
    {
        $this->valide = $valide;
    }
}

?>