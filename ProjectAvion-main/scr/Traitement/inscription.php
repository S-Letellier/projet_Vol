<?php
require_once 'scr/Modele/Inscription.php';
$inscription = new Inscription();

$inscription->setInsert();

header('Location: ../../index.php');