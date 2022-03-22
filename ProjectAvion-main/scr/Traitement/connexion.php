<?php
require_once '../Modele/Connexion.php';
require_once '../BDD/Bdd.php';
$connexion = new Connexion(array());
$connexion->setConnexion();

header('Location: ../../index.php');
