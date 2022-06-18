<?php
require_once('./Forme.cls.php');
class PaveDroit extends Forme{
    
    /**
     * Properties PaveDroit
     */ 
    private $longueur;
    private $largeur;
    private $hauteur;

    /**
     * Constructeur de la class PaveDroit
     */
    public function __construct($longueur, $largeur, $hauteur)
    {
        parent::__construct();
        $this->longueur = $longueur; 
        $this->largeur = $largeur; 
        $this->hauteur = $hauteur; 
    }

    /**
     * Methodes de la class PaveDroit
     */
    public function getLongueur() 
    {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
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
        $superficie = 2 * (($this->largeur * $this->longueur) 
                         + ($this->longueur * $this->hauteur) 
                         + ($this->largeur * $this->hauteur));
        return round($superficie, 2);
    }

    public function obtenirVolume()
    {
        $volume = $this->largeur * $this->longueur * $this->hauteur;
        return round($volume, 2);
    }

    public function __toString()
    {
        return $this->obtenirTypeForme()
              ." , id = " . $this->id
              ." , superficie = " . $this->obtenirSuperficie()
              ." , volume = " . $this->obtenirVolume()
              ." , longueur = " . $this->getLongueur()
              ." , largeur = " . $this->getLargeur()
              ." , hauteur = " . $this->getHauteur()
              ."." ;
    }

}
?>
