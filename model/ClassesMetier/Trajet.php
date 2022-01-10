<?php
class Trajet{
    private $id;
    private $depart;
    private $arrive;
    private $tarif;
    public function __construct($id,$depart, $arrive, $tarif)
    {
        $this->id=$id;
        $this->depart=$depart;
        $this->arrive=$arrive;
        $this->tarif=$tarif;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Trajet
     */
    public function setId($id)
    {
        $this->id = $id;

    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     * @return Trajet
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

    }

    /**
     * @return mixed
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * @param mixed $arrive
     * @return Trajet
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;

    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param mixed $tarif
     * @return Trajet
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

    }

}
?>