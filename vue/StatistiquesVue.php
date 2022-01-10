<?php


class StatistiquesVue
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
            <link rel="stylesheet" href="CSS/Statistique.css">
            <link rel="stylesheet" href="CSS/acceuil.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }

    public function title($title)
    {
        ?>
        <div>
            <h1> <?php echo $title ?></h1>
        </div>
        <?php
    }

    public function cards()
    {
        ?>
        <div class="row w-row">
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card ">
                        <h1 class="number-card-number">1000</h1>
                        <div class="number-card-dollars">Annonces publiées</div>
                        <div class="number-card-divider"></div>
                    </div>
                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card ">
                        <h1 class="number-card-number">100</h1>
                        <div class="number-card-dollars">Transportaurs</div>
                        <div class="number-card-divider"></div>
                    </div>
                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card">
                        <h1 class="number-card-number">200</h1>
                        <div class="number-card-dollars">Clients satisfaits</div>
                        <div class="number-card-divider"></div>
                    </div>
                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card">
                        <h1 class="number-card-number">+20</h1>
                        <div class="number-card-dollars">Annonces par semaine</div>
                        <div class="number-card-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

?>