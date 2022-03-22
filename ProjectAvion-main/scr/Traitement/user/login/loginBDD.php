<?php
session_start();
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/Connexion.php';
$res = new Connexion([
    'Email'=>$_POST['email'],
    'MotDePasse'=>$_POST['mot_de_passe']
]);
$res->setConnexion();
header('Location: ../../../../index.php');



