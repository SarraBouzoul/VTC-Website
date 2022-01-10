<?php

class InscriptionVue
{
    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/header.css">
            <link rel="stylesheet" href="CSS/inscription.css">
            <link rel="stylesheet" href="CSS/footer.css">
            <link rel="stylesheet" href="CSS/acceuil.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }
    public function inscriptionForm()
    {
        ?>
        <div class="container">
            <div class="title">Inscription</div>
            <div class="content">
                <form  action="vue/ClientAccount.php" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nom</span>
                            <input type="text" name="nom" placeholder="Entrez votre nom" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Prenom</span>
                            <input type="text" name="prenom" placeholder="Entrez votre prenom" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Entrez votre email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Numero de telephone</span>
                            <input type="text" name="numero" placeholder="Entrez votre numero de telephone" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Adresse</span>
                            <input type="text" name="adresse" placeholder="Entrez votre Adresse " required>
                        </div>
                        <div class="input-box">
                            <span class="details">mot de passe</span>
                            <input type="text" name="motDePasse" placeholder="Entrez votre mot de passe" required>
                        </div>
                    </div>
                    <div class="transporteur">
                        <input type="radio" name="transporteur" id="dot-1">
                        <input type="radio" name="transporteur" id="dot-2">
                        <span class="transporteur-title">Voulez-vous être un transporteur?</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">oui</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">nom</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Inscription">
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
}
?>

