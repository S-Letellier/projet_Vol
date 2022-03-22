<?php
require_once '../Modele/AjouterVol.php';

$ajouter = new AjouterVol(array(   //setters

    'DateDepart'=>$_POST['date_depart'],
    'HeureArrivee'=>$_POST['heure_arrivee'],
    'HeureDepart'=>$_POST['heure_depart'],
    'RefPilote'=>$_POST['ref_pilote'],
    'RefAvion'=>$_POST['ref_avion']
));

$ajouter->setInsert();
    header('Location: ../../index.php');

?>

