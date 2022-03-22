<?php

require_once '../BDD/Bdd.php';
class Pilote
{

    private $pilote;

    public function getPilote()
    {
        return $this->pilote;
    }

    public function setPilote()
    {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT nom FROM pilote ');
        $req->execute(array());

        $res = $req->fetchAll();
        return $res;
    }


}