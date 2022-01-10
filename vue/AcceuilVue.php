<?php

class AccueilVue
{

    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/header.css">
            <link rel="stylesheet" href="CSS/footer.css">
            <link rel="stylesheet" href="CSS/diaporama.css">
            <link rel="stylesheet" href="CSS/acceuil.css">
            <link rel="stylesheet" href="CSS/card.css">
            <link rel="stylesheet" href="CSS/grid.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }

    public function Logo($navbarElements)
    {
        ?>
        <header class="header">
            <div class="box">
                <div class="row align-items-center justify-content-between">
                    <div class="logo">
                        <a href="#">
                            <image  alt ="image "src= <?php echo $navbarElements[0] ?> </image>
                        </a>
                    </div>
                    <input type="checkbox" id="nav-check">
                    <label for="nav-check" class="nav-toggler">
                        <span></span>
                    </label>
                    <nav class="nav">
                        <ul>
                            <li><a class="inscription" href="../vue/contact.php"><?php echo $navbarElements[2] ?></a></li>
                            <li><a class= "inscription" href="InscriptionVue.php"><?php echo $navbarElements[3] ?></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>

        <?php
    }

    public function navBar($navbarElements)
    {
        ?>
        <span class="space"></span>
        <header class="header">
            <div class="box">
                <div class="row align-items-center justify-content-between">
                    <div class="logo">
                        <a href="#">LOGO</a>
                    </div>
                    <input type="checkbox" id="nav-check">
                    <label for="nav-check" class="nav-toggler">
                        <span></span>
                    </label>
                    <nav class="nav">
                        <ul>
                            <li><a href="../index.php" class="active"> <?php echo $navbarElements[1] ?></a></li>
                            <li><a href="../news.php"><?php echo $navbarElements[4] ?></a></li>
                            <li><a href="../presention.php"><?php echo $navbarElements[5] ?></a></li>
                            <li><a href="../statistiques.php"><?php echo $navbarElements[6] ?></a></li>
                            <li><a href="../contact.php"><?php echo $navbarElements[2] ?></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>
        <span class="space"></span>

        <?php
    }

    public function diaporama($images)
    {
        ?>
        <span></span>
        <div class="container">
            <div class="wrapper">
                <img alt="image" src=<?php echo $images[0] ?>>
                <img alt="image" src=<?php echo $images[1] ?>>
                <img alt="image" src=<?php echo $images[2] ?>>
                <img alt="image" src=<?php echo $images[3] ?>>
            </div>
        </div>
        <span> </span>
        <?php
    }


    public function formulaire()
    {
        ?>
        <span class="space"></span>
        <form class="form-inline" action="/action_page.php" method="$_POST">
            <label for="Depart">Départ:</label>
            <input type="text" id="Depart" placeholder="depart de.." name="Depart">
            <label for="Arrive">Arrivé:</label>
            <input type="text" id="Arrive" placeholder="Arrive à.." name="Arrive">
            <button class="form-btn" type="submit"><strong>Recherche</strong></button>
        </form>
        <span class="space"></span>
        <?php
    }

    public function listeAnnonces($annonces)
    {
        ?>
        <span class="space"></span>
        <div class="row">
            <?php
            foreach ($annonces as $annonce)
                $this->annonceCard($annonce);
            ?>
        </div>
        <?php
    }

    public function annonceCard(Annonce $annonce)
    {
        ?>

        <div class="column">
            <div id="container">
                <div class="card">
                    <img src=<?php echo $annonce->getPicture() ?> alt= <?php echo "annonce" . $annonce->getId(); ?> >
                    <div class="card__details">
                        <div class="name"><?php echo $annonce->getTitle(); ?></div>
                        <p> <?php echo $annonce->getFirstPartDescription(); ?> </p>
                        <button class="btn">Lire la suite</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }

    public function boutonPresentation()
    {
        ?>
        <span class="space"></span>
        <div class="comment-cela-fonctionne">
            <button class="btn-presentation"> comment cela fonctionne?</button>
        </div>
        <span class="space"></span>
        <?php
    }

    public function footer($navbarElements)
    {
        ?>
        <footer class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <a class="link-1" href="#"><?php echo $navbarElements[0] ?></a>
                    <a href="#"><?php echo $navbarElements[1] ?></a>
                    <a href="#"><?php echo $navbarElements[2] ?></a>
                    <a href="#"><?php echo $navbarElements[3] ?></a>
                    <a href="#"><?php echo $navbarElements[4] ?></a>
                </p>
                <p>Express Deliver &copy; 2022</p>
            </div>
        </footer>
        <?php
    }

}

/*   <div class="row">
        <?php
        foreach ($annonces as $annonce)
            $this->annonceCard($annonce);
        ?>
        </div>*/
?>

