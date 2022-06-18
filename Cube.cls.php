<?php
require_once('./PaveDroit.cls.php');
class Cube extends PaveDroit{
    
    /**
     * Properties Cube
     */ 
    private $cote;
    /**
     * Constructeur de la class Cube
     */
    public function __construct($cote)
    {
        parent::__construct($cote, $cote, $cote);
        $this->cote = $cote; 
    }

    /**
     * Methodes de la class Cube
     */
    public function getCote() 
    {
        return $this->cote;
    }

    public function obtenirTypeForme ()
    {
        return get_class($this); 
    }
    public function obtenirSuperficie ()
    {
        $superficie = 6 * pow($this->cote, 2);
        return round($superficie, 2);
    }

    public function obtenirVolume()
    {
        $volume = pow($this->cote, 3);
        return round($volume, 2);
    }

    public function __toString()
    {
        return $this->obtenirTypeForme()
              ." , id = " . $this->id
              ." , superficie = " . $this->obtenirSuperficie()
              ." , volume = " . $this->obtenirVolume()
              ." , cote = " . $this->getCote()
              ."." ;
    }

}
?>
