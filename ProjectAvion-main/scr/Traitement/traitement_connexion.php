<?php
require_once '../Modele/Connexion.php';
require_once '../BDD/Bdd.php';
$connexion = new Connexion(array());
$connexion->setConnexion($_POST['email'], $_POST['mdp']);

header('Location: ../../index.php');
