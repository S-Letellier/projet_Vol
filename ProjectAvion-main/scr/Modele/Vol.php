<?php
class Vol
{
   private $select;

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param mixed $select
     */
    public function setSelect()
    {
        $bdd = new BDD();
        $req = $bdd->getBdd()->prepare('SELECT * FROM vol ');
        $req->execute(array());

        $res = $req->fetchAll();
        return $res;
    }


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }


    public function hydrate(array $donnees)
    {

        foreach ($donnees as $key => $value) {

            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {

                // On appelle le setter.
                $this->$method($value);


            }

        }
    }









}

