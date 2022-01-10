<?php

/*
if (empty($_POST['nom']) || empty($_POST['prenom']))
{
    echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];


echo $nom;
echo $prenom;
*/
include_once("model/ClassesMetier/Client.php");

class ClientAccountVue
{
    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel='stylesheet'
                  href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
            <link rel="stylesheet" href="css/profile.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php

    }

    public function clientProfile(Client $client)
    { ?>
        <header class="ScriptHeader">
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="rt-heading">
                        <h1>Profile Client</h1>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                        <!-- Student Profile -->
                        <div class="student-profile py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent text-center">
                                                <img class="profile_img"
                                                     src="https://source.unsplash.com/600x300/?student"
                                                     alt="student dp">
                                                <h3><?php echo $client->getNom()." ".$client->getPrenom(); ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0"><strong class="pr-1">Numero de telephone:</strong><?php echo $client->getNumeroTelephone(); ?> </p>
                                                <p class="mb-0"><strong class="pr-1">Adresse:</strong><?php echo $client->getAdress(); ?> </p>
                                                <p class="mb-0"><strong class="pr-1">email:</strong><?php echo $client->getEmail(); ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i> Informations Generals</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th width="30%">nom</th>
                                                        <td width="2%">:</td>
                                                        <td><?php echo $client->getNom(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Prenom</th>
                                                        <td width="2%">:</td>
                                                        <td><?php echo $client->getPrenom(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Numero telephone</th>
                                                        <td width="2%">:</td>
                                                        <td><?php echo $client->getNumeroTelephone(); ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Adresse</th>
                                                        <td width="2%">:</td>
                                                        <td><?php echo $client->getAdress(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Email</th>
                                                        <td width="2%">:</td>
                                                        <td> <?php echo $client->getEmail(); ?> </td>
                                                    </tr>
                                                </table>
                                                <button>modifier</button>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Annonces</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php
    }


}