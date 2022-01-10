<?php
include_once('model/ClassesMetier/Client.php');
require_once("model/Config/DataBaseConnection.php");

class GestionClient
{


    public function addClient(Client $client)
    {
        $request = "INSERT INTO `client`(`id`, `nomClient`, `prenomClient`, `passwordClient`, `emailClient`, `adresseClient`, `numerotelphoneClient`) VALUES (Null,?,?,?,?,?,?)";
        $table = [$client->getNom(), $client->getPrenom(), $client->getPasswd(), $client->getEmail(), $client->getAdress(), $client->getNumeroTelephone()];
        $c = new DataBaseConnection();
        $c->request2($request, $table);
    }

    public function getClientData($id)
    {
        $c = new DataBaseConnection();
        $request = 'SELECT * FROM `client` WHERE id=' . $id;
        $results = $c->request($request);
        $client = null;
        foreach ( $results as $result)
        {
            $client = new Client($result['id'], $result['nomClient'], $result['prenomClient'], $result['passwordClient'], $result['emailClient'], $result['adresseClient'], $result['numerotelphoneClient']);
        }
        return $client;


    }

    public function getClientsData()
    {
        $c = new DataBaseConnection();
        $request = 'SELECT * FROM client';
        $results = $c->request($request);
        $clients = null;
        $i = 0;
        foreach ($results as $result) {
            $clients[$i] = new Client($result['id'], $result['nomClient'], $result['prenomClient'], $result['passwordClient'], $result['emailClient'], $result['adresseClient'], $result['numerotelphoneClient']);
            $i++;
        }
        return $clients;
    }


}