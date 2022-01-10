<?php
class FourchettePoid{
    private $id;
    private $poidMinimal;


    public function __construct($id,$poidMinimal,$poidMaximal)
    {
        $this->id=$id;
        $this->poidMaximal=$poidMaximal;
        $this->poidMinimal=$poidMinimal;
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPoidMinimal()
    {
        return $this->poidMinimal;
    }

    /**
     * @param mixed $poidMinimal
     * @return FourchettePoid
     */
    public function setPoidMinimal($poidMinimal)
    {
        $this->poidMinimal = $poidMinimal;

    }

    /**
     * @return mixed
     */
    public function getPoidMaximal()
    {
        return $this->poidMaximal;
    }

    /**
     * @param mixed $poidMaximal
     * @return FourchettePoid
     */
    public function setPoidMaximal($poidMaximal)
    {
        $this->poidMaximal = $poidMaximal;

    }
    private $poidMaximal;


}


?>