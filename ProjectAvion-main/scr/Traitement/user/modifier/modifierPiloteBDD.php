<?php
session_start();
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/PiloteModifier.php';
$modifier = new PiloteModifier(array(
    'Id'=>$_SESSION['id'],
    'Nom'=>$_POST['nom'],
    'Prenom'=>$_POST['prenom'],
    'Rue'=>$_POST['rue'],
    'Cp'=>$_POST['cp'],
    'Ville'=>$_POST['ville'],
    'Salaire'=>$_POST['salaire'],
));

$modifier->setUpdate();
header('Location: ../../../../index.php');
