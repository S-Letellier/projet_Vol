<?php
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/Inscription.php';
$inscription = new Inscription(array(
    'Nom'=>$_POST['nom'],
    'Email'=>$_POST['email'],
    'MotDePasse'=>$_POST['mot_de_passe']
));

$inscription->setInsert();
header('Location: ../login/login.php');
