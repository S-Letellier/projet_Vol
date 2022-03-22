<?php
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/PiloteInscription.php';
$inscription = new PiloteInscription(array(
    'Nom'=>$_POST['nom'],
    'Prenom'=>$_POST['prenom'],
));

$inscription->setInsert();
header('Location: ../login/login.php');
