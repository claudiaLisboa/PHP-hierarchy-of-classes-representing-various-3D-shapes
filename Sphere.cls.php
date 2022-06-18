<?php

require_once('./Forme.cls.php');
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);
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
