<?php

class AdminLoginVue
{
    public function entete($title)
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/Adminlogin.css">
            <title> <?php echo $title ?></title>
        </head>
        <?php
    }
    public function loginForm(){
         ?>

            <div id="form">
                <form method="post" action="AdminPage.php">
                    <label for="name">First Name</label>
                    <input type="text" id="name" class="nom" name="name" placeholder="Nom">
                    <label for="password">Last Name</label>
                    <input type="text" id="password" class="password" name="password" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>
            </div>

        <?php
    }

}
