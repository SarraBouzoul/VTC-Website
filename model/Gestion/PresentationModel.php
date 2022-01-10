<?php
require_once("model/Config/DataBaseConnection.php");
require_once("Presentation.php");
class PresentationModel
{
    public function getPresentationData()
    {
        $c= new DataBaseConnection();
        $request= 'SELECT * FROM presentation';
        $results= $c->request($request);
        $i=0;
        $presentation= null;
        foreach ($results as $result)
        {
        $presentation [$i]= new Presentation($result['title'],$result['description'],$result['video'],$result['image']);$i++;
        }
        return $presentation;
    }
}
