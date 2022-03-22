<?php
require_once '../Modele/SupprimerVol.php';
$supprimer = new SupprimerVol(array(
    'IdVol'=>$_POST['id_vol'],
));
$supprimer->getDelete();
header('Location: ../../index.php');