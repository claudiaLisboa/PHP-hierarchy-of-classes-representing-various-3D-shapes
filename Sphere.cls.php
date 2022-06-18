<?php

require_once('./Forme.cls.php');
class Sphere extends Forme{

    /**
     * Properties Sphere
     */ 
    private $rayon;

    /**
     * Constructeur de la class Sphere
     */
    public function __construct($rayon)
    {
        parent::__construct();
        $this->rayon = $rayon; 
    }

    /**
     * Methodes de la class Sphere
     */
    public function getRayon() 
    {
        return $this->rayon;
    }

    public function obtenirTypeForme ()
    {
        return get_class($this); 
    }
     public function obtenirSuperficie ()
    {

    }

     public function obtenirVolume()
     {

     }

     public function __toString()
     {
         
     }
}
?>
