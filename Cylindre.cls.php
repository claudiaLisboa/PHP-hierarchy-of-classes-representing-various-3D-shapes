<?php
require_once('./Forme.cls.php');

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);
class Cylindre extends Forme{
    
    /**
     * Properties Cylindre
     */ 
    private $rayon;
    private $hauteur;


    /**
     * Constructeur de la class Cylindre
     */
    public function __construct($rayon, $hauteur)
    {
        parent::__construct();
        $this->rayon = $rayon; 
        $this->hauteur = $hauteur; 
    }

    /**
     * Methodes de la class Cylindre
     */
    public function getRayon() 
    {
        return $this->rayon;
    }
    public function getHauteur() {
        return $this->hauteur;
    }
    public function obtenirTypeForme ()
    {
        return get_class($this); 
    }
    public function obtenirSuperficie ()
    {
        $superficie = 2 * pi() * $this->rayon * ($this->rayon + $this->hauteur);
        return round($superficie, 2);
    }
   
    public function obtenirVolume()
    {
        $volume = $this->hauteur * pi() * pow($this->rayon, 2) ;
        return round($volume, 2);
    }
    public function __toString()
    {
        return $this->obtenirTypeForme()
              ." , id = " . $this->id
              ." , superficie = " . $this->obtenirSuperficie()
              ." , volume = " . $this->obtenirVolume()
              ." , rayon = " . $this->getRayon()
              ." , hauteur = " . $this->getHauteur()
              ."." ;
    }

}
?>
