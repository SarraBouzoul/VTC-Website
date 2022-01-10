<?php

class DataBaseConnection
{

    private $user = "root";
    private $passwd = "";
    private $dbname = 'vtc_bd';
    private $host = "localhost";
    private $port = "3306";

    public function request($request)
    {
        $c = $this->connexion($this->user, $this->passwd, $this->dbname, $this->host, $this->port);
        $sqlQuery = $request;
        $statement = $c->prepare($sqlQuery);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $this->deconnexion($c);
        return $results;
    }

    private function connexion($user, $passwd, $dbname, $host, $port)
    {
        $dsn = "mysql:dbname=vtc_bd;host=localhost;port=$port";
        $dsn = "mysql:dbname=" . $dbname . ";host=" . $host . ";port=$port";
        $c = new PDO($dsn, $user, $passwd);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $c = new PDO($dsn, $user, $passwd);

        } catch (PDOException $ex) {
            printf("erreur de connexion à la base de donnée", $ex->getMessage());
            exit();
        }
        return $c;
    }

    private function deconnexion(&$c)
    {
        $c = null;
    }

    public function request2($request, $table)
    {
        $c = $this->connexion($this->user, $this->passwd, $this->dbname, $this->host, $this->port);
        $sqlQuery = $request;
        $statement = $c->prepare($sqlQuery);
        if (!$statement->execute($table)) {
            echo 'fail';
        }
        $this->deconnexion($c);
    }

}

?>