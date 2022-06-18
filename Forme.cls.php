<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);
abstract class Forme{

    /**
     * Properties Forme
     */ 
    static $nbFormes = 0;
    protected $id;    
    
    /**
     * Constructeur de la class Forme
     */
    public function __construct($id = 0) //
    {   //selon les directives donnees le id de l'objet tiendra la meme valeur de $nbFormes
        //donc on ne vas pas utiliser le $id qui vient parametre. on va lui donner une valeur default 0.
        //$this->id = $id; 
        self::$nbFormes++;
        $this->id = self::$nbFormes;
    }

    /**
     * Methodes de la class Forme
     */
    protected static function getNbFormes() 
    {
        return self::$nbFormes;
    }
     public function getId() 
    {
        return $this->id;
    }

    public function __toString()
    {
       
    }

    
    public function comparerAvec ($f)
    {
        $premierForme = $this->obtenirSuperficie()+$this->obtenirVolume();
        $secondeForme = $f->obtenirSuperficie()+$f->obtenirVolume();

        return $secondeForme - $premierForme;
    }
    //la implementation des methodes abstract  se trouvent dans les sous class (class enfant)
    abstract public function obtenirTypeForme (); 
   
    abstract public function obtenirSuperficie ();
  
    abstract public function obtenirVolume();
}
?>
