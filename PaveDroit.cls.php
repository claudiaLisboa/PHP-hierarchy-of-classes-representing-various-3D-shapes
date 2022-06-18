<?php
require_once('./Forme.cls.php');
class PaveDroit extends Forme{
    
    /**
     * Properties PaveDroit
     */ 
    public $longueur;
    public $largeur;
    public $hauteur;

    /**
     * Constructeur de la class PaveDroit
     */
    function __construct($longueur, $largeur, $hauteur )
    {
        $this->longueur = $longueur; 
        $this->largeur = $largeur; 
        $this->hauteur = $hauteur; 
    }

    /**
     * Methodes de la class PaveDroit
     */
    function get_longueur() 
    {
        return $this->longueur;
    }
    function get_largeur() {
        return $this->largeur;
    }
    function get_hauteur() {
        return $this->hauteur;
    }
    public function obtenirTypeForme ()
    {

    }
     public function obtenirSuperfice ()
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
