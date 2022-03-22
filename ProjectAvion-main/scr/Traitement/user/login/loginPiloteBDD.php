<?php
session_start();
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/PiloteConnexion.php';
$res = new PiloteConnexion([
    'Nom'=>$_POST['nom'],
    'Prenom'=>$_POST['prenom']
]);
$res->setConnexion();
header('Location: ../../../../index.php');



