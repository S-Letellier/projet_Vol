<?php

class Inscription
{

    private $nom;
    private $prenom;
    private $mdp;
    private $email;


    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    /**
     * @param mixed $insert
     */
    public function setInsert()
    {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO user (nom,prenom,email,mdp) VALUES (:nom,:prenom,:email,:mdp)');
        $req->execute(array(
            'nom' =>$this->nom ,
            'prenom' =>$this->prenom ,
            'email' =>$this->email,
            'mdp' =>$this->mdp
        ));
    }
    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            //setNom
            if (method_exists($this, $method)){
                //On appelle le setter
                $this->$method($value);
            }
        }
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }



}