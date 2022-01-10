<?php
include_once('controller/ClientAccountController.php');

$cp= new ClientAccountController();

$cp->afficherClientProfile(1);
