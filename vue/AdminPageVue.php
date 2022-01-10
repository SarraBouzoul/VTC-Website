<?php

class AdminPageVue
{
    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/AdminPage.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }

    public function categories($categories)
    {
        ?>

            <div class="row">
                <div class="column">
                    <a href="Categorie1"> <img src=<?php echo $categories [0]['image']?> alt="categorie1" ></a>
                </div>
                <div class="column">
                    <a href="Categorie2">  <img src=<?php echo $categories [1]['image']?>  alt="categorie2" > </a>
                </div>
                <div class="column">
                    <a href="Categorie3"> <img src=<?php echo $categories [2]['image']?>  alt="categorie3" > </a>
                </div>
                <div class="column">
                    <a href="Categorie4"> <img src=<?php echo $categories [3]['image']?>  alt="categorie4" > </a>
                </div>
            </div>

        <?php
    }
}