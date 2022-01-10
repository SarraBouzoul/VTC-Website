<?php 
class FourchetteVolume{
    private $id;
    private $volumMinimal;
    private $volumMaximal;
    public function __construct($id,$volumMinimal,$volumMaximal)
    {
        $this->id=$id;
        $this->volumMaximal=$volumMaximal;
        $this->volumMinimal=$volumMinimal;
        
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
     * @return FourchetteVolume
     */
    public function setId($id)
    {
        $this->id = $id;

    }

    /**
     * @return mixed
     */
    public function getVolumMinimal()
    {
        return $this->volumMinimal;
    }

    /**
     * @param mixed $volumMinimal
     * @return FourchetteVolume
     */
    public function setVolumMinimal($volumMinimal)
    {
        $this->volumMinimal = $volumMinimal;

    }

    /**
     * @return mixed
     */
    public function getVolumMaximal()
    {
        return $this->volumMaximal;
    }

    /**
     * @param mixed $volumMaximal
     * @return FourchetteVolume
     */
    public function setVolumMaximal($volumMaximal)
    {
        $this->volumMaximal = $volumMaximal;

    }



}
?>