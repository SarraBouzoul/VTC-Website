<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/acceuil.css">
    <title>Contact </title>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include_once('header.php') ?>

<div class="contact-container">
  <div style="text-align:center">
    <h2>Contactez nous</h2>

  </div>
  <div class="row">
    <div class="column">
      <img src="images/express deliver.png" style="width:100%">
    </div>
    
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Votre Nom</label>
        <input type="text" id="fname" name="firstname" placeholder="Nom...">
        <label for="lname">Votre Prenom</label>
        <input type="text" id="lname" name="lastname" placeholder="Prénom...">
        <label for="subject">Sujet</label>
        <textarea id="subject" name="subject" placeholder="écrire quelque chose..." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


<?php include_once('footer.php') ?>

</body>