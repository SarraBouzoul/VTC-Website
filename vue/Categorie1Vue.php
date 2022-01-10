<?php
include_once('model/ClassesMetier/Client.php');

class Categorie1Vue
{
    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/categorie.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }

    public function clientTable($clients)
    {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Numero telephone</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($clients as $client)
                            $this->row($client); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    }

    public function row(Client $client)
    {
        ?>
        <tr>
            <td > <?php echo $client->getNom() ?></td>
            <td ><?php echo $client->getPrenom() ?></td>
            <td><?php echo $client->getEmail() ?></td>
            <td><?php echo $client->getAdress() ?></td>
            <td>
                <a  href="ClientProfile.php?id=<?php echo $client->getId(); ?>"> afficher profile </a>
            </td>
        </tr>
        <?php
    }

}

?>