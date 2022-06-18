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
        $superficie = 4 * pi() * pow($this->rayon, 2);
        return round($superficie, 2);
    }
     public function obtenirVolume()
     {
        $volume = (4/3) * pi() * pow($this->rayon, 3);
        return round($volume, 2);
     }
     public function __toString()
     {
        return $this->obtenirTypeForme()
        ." , id = " . $this->id
        ." , superficie = " . $this->obtenirSuperficie()
        ." , volume = " . $this->obtenirVolume()
        ." , rayon = " . $this->getRayon()
        ."." ;
     }
}
?>
