<?php
require_once('./PaveDroit.cls.php');
class Cube extends PaveDroit{

    /**
     * Properties Sphere
     */ 
    private $cote;


    /**
     * Constructeur de la class Cube
     */
    function __construct()
    {
        
    }

    /**
     * Methodes de la class Cube
     */
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
