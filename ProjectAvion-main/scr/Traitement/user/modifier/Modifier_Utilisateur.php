<?php
session_start();
require_once '../../../BDD/Bdd.php';
require_once '../../../Modele/ModifUser.php';
$modifier = new ModifUser(array(
    'Id'=>$_SESSION['id'],
    'Nom'=>$_POST['nom'],
    'Email'=>$_POST['email'],
    'MotDePasse'=>$_POST['mot_de_passe'],
));

$modifier->setUpdate();
header('Location: ../../../../index.php');
