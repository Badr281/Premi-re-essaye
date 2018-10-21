<?php

class personnage
{
    /**
     * concernant la porte de la variable protected il donne l'acces a la class fille pour l'acceder
     */
    public  $vie = 80;
    public $atk = 20;
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom() 
    {
        return $this->nom;
    }
    public function getVie()
    {
        return $this->vie;
    }
    public function getAtk()
    {
        return $this->atk;
    }
    public  static function crier()
    {
       echo "Bonjour le monde de developper";
    }
    public  function regenerer($vie = null)
    {
        if(is_null($vie))
        {
            $this->vie = 100;
        }
        else
        {
            $this->vie += $vie;
        }
    }
    public function mort()
    {
        return $this->vie ==0;
    }
    public function attaque($cible)
    {
        var_dump($cible);
        // $cible->vie= 20;

    }
}


?>