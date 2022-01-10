<?php
include_once ('model/Gestion/GestionAnnonce.php');
include_once ('model/Gestion/GestionClient.php');
include_once ('model/ClassesMetier/Annonce.php');
include_once ('model/ClassesMetier/Client.php');
include_once ('model/ClassesMetier/FourchettePoid.php');
include_once ('model/ClassesMetier/FourchetteVolume.php');
$g= new GestionAnnonce();
/*$fp= new FourchettePoid(1, 100, 1000);
$fv= new FourchetteVolume(1,100,1000);
$client= new Client(1,"Bouzoul","Sarra","BouzoulSarra","is_bouzoul@esi.dz","cite 40 logts DNC Mila","05829291");
$trajet= new Trajet(1, "constantine", "Alger", 1231);
$transport = new Transport(1,'camion',1314);*/
echo '4';
/*$a = new Annonce(6,"Announce title","zefajklha zmehfi jdfijz qdfjzerzk lhefjkze jdfdzkf ufyzeukr efjhzkfegzuirhzj dfjhjkzeyrhz","'1.png'",3,3,"type",3,3,3);*/
$gc= new GestionClient();
echo $gc->getClientData(1)->getNom();
echo '6';
