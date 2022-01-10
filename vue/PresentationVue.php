<?php

class PresentationVue {
    public function entete($title){
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/header.css">
            <link rel="stylesheet" href="CSS/footer.css">
            <link rel="stylesheet" href="CSS/presentation.css">
            <link rel="stylesheet" href="CSS/acceuil.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }
    public function title($title){
        ?>
        <div><h1><?php echo $title ?></h1></div>
        <?php
    }
    public function image($image){
        ?>
        <div>
            <img width="100" height="100" alt='image' src= <?php echo $image ?> >
        </div>
        <?php
    }
    public function video($video){
        ?><div>
                <video width="320" height="240" controls>
                    <source src=<?php echo $video ?>  type="video/mp4">
                </video>
        </div>
    <?php
    }
    public function description($description){
        ?>
        <div><p><?php echo $description ?></p></div>
        <?php
    }


}?>

