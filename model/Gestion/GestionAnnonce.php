<?php
include_once('model/Config/DataBaseConnection.php');
include_once ('model/ClassesMetier/Annonce.php');
class GestionAnnonce
{
    public function validateAnnounce(Annonce $annonce)
    {
        $annonce->setValide(true);
        $c = new DataBaseConnection();
        $requet = 'UPDATE annonce SET valide= 1 WHERE id=' . $annonce->getId();
        $results = $c->add($requet);

    }

    public function addAnnounce(Annonce $annonce)
    {
        $request = "INSERT INTO `annonce`(`id`, `title`, `description`, `image`, `type`, `id_fourchettepoid`, `id_fourchettevolume`, `id_client`, `id_trajet`, `id_transport`, `valide`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?)";
        $table = [$annonce->getTitle(), $annonce->getDescription(), $annonce->getPicture(), $annonce->getType(), $annonce->getFourchettePoid(), $annonce->getFourchetteVolume(), $annonce->getClient(), $annonce->getTrajet(), $annonce->getTranport(), $annonce->getValide()];
        $c = new DataBaseConnection();
        $c->request2($request, $table);
    }


    public function getTranspoterList(Annonce $annonce)
    {
        /* une liste de transporteurs éventuelle est proposée si ceux-ci correspondent au trajet choisi. */

        /*$trajetId = $annonce->trajet->id;*/

    }

    /* get the announce iinformation according to the needs of the user*/

    public function getAnnounceById($id)
    {
        $c = new DataBaseConnection();
        $requet = 'SELECT * FROM annonce WHERE id = ' . $id;
        $results = $c->request($requet);
        $annonces = null;
        $i = 0;
        foreach ($results as $result) {
            $announces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['image'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_fourchettevolume'], $result['id_transport']);
            $i++;
        }
        return $announces;
    }

    public function getAnnonces()
    {
        $c = new DataBaseConnection();
        $requet = 'SELECT * FROM annonce WHERE valide =1 LIMIT 8 OFFSET 0';
        $results = $c->request($requet);
        $announces = null;
        $i = 0;
        foreach ($results as $result) {
            $announces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['image'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_fourchettevolume'], $result['id_transport']);
            $i++;
        }
        return $announces;
    }

    public function getAnnoncesByTrajet($idTrajet)
    {
        /* get 8 announces  to display them on the home page*/
        $c = new DataBaseConnection();
        $requet = 'SELECT * FROM annonce WHERE id_trajet = $idTrajet AND valide = 1';
        $results = $c->request($requet);
        $announces = null;
        $i = 0;
        foreach ($results as $result) {
            $announces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['image'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_fourchettevolume'], $result['id_transport']);
            $i++;
        }
        return $announces;
    }

    public function getAnnoncesNonValide()
    {
        /* get 8 announces  to display them on the home page*/
        $c = new DataBaseConnection();
        $requet = 'SELECT * FROM annonce WHERE valide = 0 ';
        $results = $c->request($requet);
        $announces = null;
        $i = 0;
        foreach ($results as $result) {
            $announces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['image'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_fourchettevolume'], $result['id_transport']);
            $i++;
        }
        return $announces;
    }

    public function getAnnoncesValides()
    {
        /* get 8 announces  to display them on the home page*/
        $c = new DataBaseConnection();
        $requet = 'SELECT * FROM annonce WHERE valide = 1 ';
        $results = $c->request($requet);
        $announces = null;
        $i = 0;
        foreach ($results as $result) {
            $announces[$i] = new Annonce($result['id'], $result['title'], $result['description'], $result['image'], $result['type'], $result['id_client'], $result['id_trajet'], $result['id_fourchettepoid'], $result['id_fourchettevolume'], $result['id_transport']);
            $i++;
        }
        return $announces;
    }

    /*admin functionalities*/
    public function deleteAnnounce(Annonce $annonce)
    {
        $d = $annonce;
    }

    public function archiveAnnounce(Annonce $annonce)
    {
        $d = $annonce;
    }
    public function filterAnnounces($criter)
    {

    }

    public function trierAnnounces()
    {

    }
}

?>