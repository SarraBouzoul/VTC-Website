<?php 

class GestionNews{
   
    public function AddNew(News $new){
        $request = "INSERT INTO `new`(`id`, `title`, `description`, `picture`, `date`) VALUES (Null,?,?,?,?)";
        $table = [$new->getTitle(),$new->getDescription(),$new->getPicture(),$new->getDate()];
        $c = new DataBaseConnection();
        $c->request2($request, $table);
    }
    public function deletNew($id){
        $request = "DELETE FROM `new` WHERE id = ?";
        $table = [$id];
        $c = new DataBaseConnection();
        $c->request2($request, $table);
    }

}

?>